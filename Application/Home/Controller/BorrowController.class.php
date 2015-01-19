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

	public function circulation_save() {


		$uid=is_login(); 
		$depict['borrow_type'] = $_POST['typeid'];
		$depict['borrow_name'] = $_POST ['borrow_name'];
		$depict['borrow_money'] = $_POST ["borrow_money"];
		$depict['borrow_interest_rate'] = $_POST ["borrow_interest_rate"];
		$depict['borrow_use'] = $_POST ["borrow_use"];
		$depict['borrow_duration'] = $_POST ["collect_day"];
		$depict['borrow_min'] = $_POST ["borrow_min"];
		$depict['borrow_max'] = $_POST ["borrow_max"];
		$depict['collect_time'] = $_POST ["collect_time"];
		$depict['repayment_type'] = $_POST ["repayment_type"];
		$depict['reward_vouch_rate'] = $_POST ["reward_vouch_rate"];
		$depict['borrow_info'] = $_POST ["borrow_info"];
		$depict['borrow_status'] = 0;
		$depict['borrow_uid'] = $uid;
		$depict['add_time'] = time ();
		$depict['deadline'] = strtotime ( '+'.intval ( $_POST ["collect_day"] ).' year' );
		$depict['add_ip'] = get_client_ip ();


		// $files=($_FILES['img']);


			// 保存当前数据对象
			if ($this->borrow_upload($depict)) { // 保存成功
			                                                    // 成功提示add_time
				$this->success ( L ( '发布审核已提交' ),U('Home/Borrow/index') );
			} else {
				// 失败提示
				$this->error ( L ( '发布失败' ) );
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
		//查询借款详情表
		$listBorrow = M ( 'z_borrow_info' );
		$list = $listBorrow->where ( $map )->select ();
		$uid=$list[0]['borrow_uid'];
		$userlist= M ('ucenter_member');
		$data=$userlist->field('username,reg_time,last_login_time')->where('id=%s',$uid)->select();
		$this->assign('data',$data[0]);
		$this->assign ( 'list3', $list);
		//查询投标详情
		$borrow_info = M('z_borrow_investor');
        $condition['borrow_id'] =$id;
        $borrow_info=$borrow_info->field('investor_uid,borrow_uid,borrow_id,sum(investor_capital)investor_capital,deadline,add_time,invest_fee')->where($condition)->order('id asc','invest_fee desc','add_time desc')->group('investor_uid')->select();

        $this->assign('list',$borrow_info);
	
		$this->display ();
	}
	// 上传
	private function AddFile($fileinfo,$depict){
          $i=0;
       // var_dump($fileinfo);
        $uid=is_login(); 
        $dateline=date("Y-m-d H:m:s");
        $file=M('z_member_data_info');
        $condition['uid'] =$uid;

        foreach($fileinfo as $vo)
        {
            $data['data_url']=$vo['savepath'].$vo['savename'];
            $data['uid']=$uid;
            $data['add_time']=time();
            $data['type']=2;
            // $data['deal_time']=$dateline;
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
    public function upload(){
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

          //  var_dump($info);
            if($this->AddFile($info,$depict))//写入数据库
            {
                $this->success('上传成功！');
            }
            else{
               $this->error('写入数据库失败');
            }
        }
    }
    private function borrow_AddFile($fileinfo,$depict,$type){
          $i=0;
        $uid=is_login(); 
        $file=M('z_borrow_info');
        $condition['uid'] =$uid;
        
        foreach($fileinfo as $vo)
        {

	        $depict['updata']=$vo['savepath'].$vo['savename'];
			
    
	            if($file->where($condition)->data($depict)->add($depict)){
	                //
	                $i++;
	            }else{
	                  return false;
	            }
        }

        return true;
    }
    public function borrow_upload($depict){
        $config=array(
            'maxSize'=>100*1024*1024*1024,
            'mimes'=>array(),
            'rootPath'=>'./Uploads/',
            'ext'=>array(),
            'autoSub'=>true,
        );
        $upload = new \Think\Upload($config);// 实例化上传类

       $info   =   $upload->upload(); // 上传文件
        if(!$info){// 上传错误提示错误信息
            $this->error($upload->getError());
        }
        else{// 上传成功

            if($this->borrow_AddFile($info,$depict))//写入数据库
            {
                return true;
            }
            else{
              	return false;
            }
        }
    }
	
}