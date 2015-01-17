<?php

namespace Home\Controller;

use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class BorrowController extends HomeController {
	
	// 系统首页
	public function index() {
		$session=isset($_SESSION['gica_home']['user_auth']['username']);

		$this->assign('session',$session);
		$this->display ();
	}
	// 
	public function papersinfo() {
		$uid = is_login ();

        $m=M("z_member_data_info");
        $condition['uid'] =$uid;
        $condition['type'] =2;
        $m=$m->where($condition)->select();


        $this->assign('list',$m);
		$this->display ();
	}
	public function circulation($id=0,$uid=0) {
		is_login() || $this->error('您还没有登录，请先登录！', U('Home/User/login'));
		$uid = is_login();
		$type=$_GET['type'];
		$status = M ('z_members_status');
		$result=$status->where("uid=%s",$uid)->select();
		if ($result!==null) {
			$this->assign ( 'id', $id);
			$this->redirect("Home/Borrow/borrowinfo?type={$type}");
		} else {			
			$this->error('对不起，您还没进行基本认证！', U('Home/Borrow/userinfo?type={$type}'));
		}
		$this->display();     
	}
	//发布贷款

	public function borrowinfo(){
		$type=$_GET['type'];
		$this->assign('type',$type);
		$this->display();
	}
	//基本信息
	public function userinfo() {
		$uid = is_login ();
		$type=$_GET['type'];
		$chk = M ( "z_member_info" );
		$condition['uid'] =$uid;
        $m=$chk->where($condition)->select();
        if ($m!==null){
        	$this->assign('mlist', $m);
        } else {
        	$n=$chk->add($condition);
        	$m=$chk->where($condition)->select();
        	$this->assign('mlist', $m);
        }
		$this->display ();
	}
	//重新确认基本认证
	public function add() {
		// 从表单中获取来的数据
		$uid = is_login ();
		
		$m = M ( "z_member_info" );
		$data ['real_name'] = $_POST ["real_name"];
		$data ['idcard'] = $_POST ["idcard"];
		// $data ['card_img'] = $_POST ["card_img"];
		// $data ['card_back_img'] = $_POST ["card_back_img"];
		$data ['sex'] = $_POST ["sex"];
		$data ['zy'] = $_POST ["zy"];
		$data ['cell_phone'] = $_POST ["cell_phone"];
		$data ['education'] = $_POST ["education"];
		$data ['income'] = $_POST ["income"];
		$data ['address'] = $_POST ["address"];
		//dump($data);
		$condition ['uid'] = $uid;
		
		
			// 保存当前数据对象
		if ($m = $m->where ( $condition )->save ( $data )) { // 保存成功
		                                                   // 成功提示
				//认证状态表更新字段
				$arr = array (
							"uid"=>$uid
						);
					//更新认证状态
				$status = M ('z_members_status');
				//查询是否已提交过资料
				if ($re=$status->where("uid=%s",$uid)->select()){
					$this-> success ('资料修改成功，等待审核...',U('Borrow/papersinfo'));	
				} else {
					//若没有提交过资料则更新认证状态
					$result= $status->add($arr);
					if ($result){
						$this-> success ('认证资料已上传，等待后台审核...',U('Borrow/papersinfo'));
			
					}
				}
		} else {
			// 失败提示
			$this-> error ( L ( '您未做任何修改' ) );
		}
		    
	}

	public function circulation_save($id = 0) {
		// 从表单中获取来的数据
		$uid = is_login ();
		$m = M ( "z_borrow_info" );
		$files=($_FILES['img']);
		$depict=$_POST;
		$data ['borrow_type'] = $id;
		$data ['borrow_name'] = $_POST ['borrow_name'];
		$data ['borrow_money'] = $_POST ["borrow_money"];
		$data ['borrow_interest_rate'] = $_POST ["borrow_interest_rate"];
		$data ['borrow_use'] = $_POST ["borrow_use"];
		$data ['borrow_duration'] = $_POST ["collect_day"];
		$data ['borrow_min'] = $_POST ["borrow_min"];
		$data ['borrow_max'] = $_POST ["borrow_max"];
		$data ['collect_time'] = $_POST ["collect_time"];
		$data ['repayment_type'] = $_POST ["repayment_type"];
		$data ['reward_vouch_rate'] = $_POST ["reward_vouch_rate"];
		$data ['borrow_info'] = $_POST ["borrow_info"];
		$data ['borrow_status'] = 0;
		$data ['borrow_uid'] = $uid;
		$data ['add_time'] = time ();
		$data ['deadline'] = strtotime ( '+'.intval ( $_POST ["collect_day"] ).' year' );
		$data ['add_ip'] = get_client_ip ();
		$condition ['uid'] = $uid;
		if ($this->upload($files,$depict)){
			// 保存当前数据对象
			if ($m = $m->where ( $condition )->add ( $data )) { // 保存成功
			                                                    // 成功提示add_time
				$this->success ( L ( '发布审核已提交' ),U('Home/Borrow/index') );
			} else {
				// 失败提示
				$this->error ( L ( '发布失败' ) );
			}
		}else {
			$this->error('写入数据库失败！');
		}
		
	}
	/**
	 * 新增页面初始化
	 */

	public function detail($id = 0, $p = 1) {
		/* 标识正确性检测 */
		if (! ($id && is_numeric ( $id ))) {
			$this->error ( '投标ID错误！' );
		}
		
		/* 页码检测 */
		$p = intval ( $p );
		$p = empty ( $p ) ? 1 : $p;
		
	
		$map = array (
				'id' => $id 
		);
		$listBorrow = M ( 'z_borrow_info' );
		$list = $listBorrow->where ( $map )->select ();
		$this->assign ( 'list3', $list );

		$borrow_info = M('z_borrow_investor');
        $condition['borrow_id'] =41;
        $borrow_info=$borrow_info->field('investor_uid,borrow_uid,borrow_id,sum(investor_capital)investor_capital,deadline,add_time,invest_fee')->where($condition)->order('id asc','invest_fee desc','add_time desc')->group('investor_uid')->select();
        
        // var_dump($borrow_info['investor_uid']);
        $this->assign('list',$borrow_info);
	
		$this->display ();
	}
	// 上传
	private function AddFile($fileinfo,$depict,$type){
          $i=0;
        $uid=is_login(); 
        $dateline=date("Y-m-d H:m:s");
        $file=M('z_member_data_info');
        $condition['uid'] =$uid;

        foreach($fileinfo as $vo)
        {
            $data['data_url']=$vo['savepath'].$vo['savename'];
            $data['uid']=$uid;
            $data['add_time']=time();
            $data['type']=$type;
            



	            if($file->where($condition)->data($data)->add($data)){
	                //
	                $i++;
	            }else{
	                  return false;
	            }
        }

        return true;
    }
     //上传
    public function upload($files,$depict){
        $config=array(
            'maxSize'=>100*1024*1024*1024,
            'mimes'=>array(),
            'rootPath'=>'./Uploads/',
            'ext'=>array(),
            'autoSub'=>true,
        );
        $upload = new \Think\Upload($config);// 实例化上传类
        $depict=$_POST['depict'];

       $info   =   $upload->upload(); // 上传文件
        if(!$info){// 上传错误提示错误信息
            $this->error($upload->getError());
        }
        else{// 上传成功

            if($this->AddFile($info,$files,$depict))//写入数据库
            {
                return true;
            }
            else{
              	return false;
            }
        }
    }
	
}