<?php

namespace Member\Controller;

use OT\DataDictionary;
use Think\Controller;

class UserinfoController extends MemberController {
	public function index() {

		$this->display ();
	}
	public function bevip() {
		$uid = is_login ();
		$m = M ( 'ucenter_member' ); // 用户头像
		$condition1 ['gica_ucenter_member.id'] = $uid;
		$m = $m->where ( $condition1 )->select ();
		$this->assign ( 'list', $m );
		$this->display ();
	}
	public function bevip_save() {
		$uid = is_login ();
		$m = M ( 'ucenter_member' ); // 用户头像
		$data ['customer_id'] = $_POST ['customer_id'];
		$data ['user_type'] = 1;
		$data ['time_limit'] = strtotime ( '+1 year' );
		$condition ['id'] = $uid;
		// 保存当前数据对象
		if ($m = $m->where ( $condition )->save ( $data )) { // 保存成功
		                                                     // 成功提示
			$this->success ( L ( '保存成功' ), U ( 'Member/index' ) );
		} else {
			// 失败提示
			$this->error ( L ( '保存失败' ) );
		}
	}
	public function userapplyforvip() {
		$this->display ();
	}
	public function userbankInfo() {
		$this->display ();
	}
	public function userbankset() {
		$uid = is_login ();
		$m = M ( 'z_member_banks' );
		$m_id ['uid'] = $uid;
		$m = $m->where ( $m_id )->select ();
		$this->assign ( 'list', $m );
		
		$this->display ();
	}
	public function userbankset_save() {
		// 从表单中获取来的数据
		$uid = is_login ();
		$m = M ( "z_member_banks" );
		$data ['bank_num'] = $_POST ['bankCard'];
		$data ['bank_name'] = $_POST ["bankName"];
		$data ['bank_address'] = $_POST ["subBankName"];
		$condition ['uid'] = $uid;
		// 保存当前数据对象
		if ($m = $m->where ( $condition )->save ( $data )) { // 保存成功
		                                                     // 成功提示
			$this->success ( L ( '保存成功' ) );
		} else {
			// 失败提示
			$this->error ( L ( '保存失败' ) );
		}
	}
	public function userbasicdata() {
		$this->display ();
	}
	public function userbasicinfo() {
		$this->display ();
	}
	public function usermailindex() {
		$this->display ();
	}
	public function userchagerwithdraw() {
		$uid = is_login ();
		$money = M ( "z_member_money" );
		$condition ['uid'] = $uid;
		$money = $money->where ( $condition )->select ();
		
		// var_dump ( $money );
		$this->assign ( 'list', $money );
		$this->display ();
	}
	public function userchangebankInfo() {
		$this->display ();
	}
	public function userchangepass() {
		$this->display ();
	}
	public function userchangephone() {
		$this->display ();
	}
	public function userfinanceindex() {
		$this->display ();
	}
	public function userfindpass() {
		$this->display ();
	}
	public function userfindpassbyphone() {
		$uid = is_login ();
		$m = M ( 'ucenter_member' );
		$m_id ['id'] = $uid;
		$m = $m->where ( $m_id )->select ();
		$this->assign ( 'list', $m );

		$this->display ();
	}
	public function userphone_save() {
		// 从表单中获取来的数据
		$uid = is_login ();
		$m = M ( "ucenter_member" );
		$data ['mobile'] = $_POST ['mobile'];
		$condition ['uid'] = $uid;
		// 保存当前数据对象
		if ($m = $m->where ( $condition )->save ($data)) { // 保存成功
		    // 成功提示
			$this->success('保存成功！');
		} else {
			// 失败提示
			$this->error ('保存失败');
		}
	}
	public function userfindpaypass() {
		$this->display ();
	}
	public function userinfoinformset() {
		$this->display ();
	}
	public function userinfowork() {
		$this->display ();
	}
	public function usermailbanding() {
		$uid = is_login ();
		$m = M ( 'ucenter_member' );
		$m_id ['id'] = $uid;
		$m = $m->where ( $m_id )->select ();
		$this->assign ( 'list', $m );
		$this->display ();
	}
	public function usermail_save() {
		// 从表单中获取来的数据
		$uid = is_login ();
		$m = M ( "ucenter_member" );
		$data ['email'] = $_POST ['email'];
		$condition ['uid'] = $uid;
		// 保存当前数据对象
		if ($m = $m->where ( $condition )->save ($data)) { // 保存成功
		    // 成功提示
			$this->success('保存成功！');
		} else {
			// 失败提示
			$this->error ('保存失败');
		}
	}
	public function userpapersinfo() {
		$this->display ();
	}
	public function userrenewalvip() {
		$this->display ();
	}
	public function userreplaymail() {
		$this->display ();
	}
	public function userreport() {
		$this->display ();
	}
	public function userricelist() {
		$this->display ();
	}
	public function userselfidcard() {
		$this->display ();
	}
	public function userselfset() {
		$uid = is_login ();
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
	private function AddFile($fileinfo,$depict){
          $i=0;
       // var_dump($fileinfo);
        $uid=is_login(); 
        $dateline=date("Y-m-d H:m:s");
        $file=M('z_member_info');
        $condition['uid'] =$uid;
        foreach($fileinfo as $vo)
        {
        	
            $data['card_img']=$vo['savepath'].$vo['savename'];
            // $data['data_name']=$depict[$i];
            // $data['add_time']=$vo['savepath'];
            // $data['deal_time']=$dateline;
            if($file->where($condition)->data($data)->save()){
                //
                $i++;
            }else{
                  return false;
            }
        }

        return true;
    }
    public function upload(){
    	$uid=is_login(); 
        $config=array(
            'maxSize'=>100*1024*1024*1024,
            'mimes'=>array(),
            'rootPath'=>'./Uploads/User/',
            'savePath'=>$uid.'/',
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
              //  $this->error('写入数据库失败');
            }

        }
    }
    private function AddFile_back($fileinfo,$depict){
          $i=0;
       // var_dump($fileinfo);
        $uid=is_login(); 
        $dateline=date("Y-m-d H:m:s");
        $file=M('z_member_info');
        $condition['uid'] =$uid;
        foreach($fileinfo as $vo)
        {

            $data['card_back_img']=$vo['savepath'].$vo['savename'];
            // $data['data_name']=$depict[$i];
            // $data['add_time']=$vo['savepath'];
            // $data['deal_time']=$dateline;
            if($file->where($condition)->data($data)->save()){
                //
                $i++;
            }else{
                  return false;
            }
        }

        return true;
    }
    public function upload_back(){
    	$uid=is_login(); 
        $config=array(
            'maxSize'=>100*1024*1024*1024,
            'mimes'=>array(),
            'rootPath'=>'./Uploads/User/',
            'savePath'=>$uid.'/',
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
            if($this->AddFile_back($info,$depict))//写入数据库
            {
                $this->success('上传成功！');
            }
            else{
              //  $this->error('写入数据库失败');
            }

        }
    }
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
							"uid"=>$uid,
							"phone_status" => 1,
							"id_status" => 2,
							"email_status" => 1,
							"account_status" => 1,
							"credit_status" => 1,
							"safequestion_status" => 1,
							"video_status" => 1,
							"face_status" => 1
						);
					//更新认证状态
				$status = M ('z_members_status');

				//查询是否已提交过资料
				if ($re=$status->where("uid=%s",$uid)->select()){

					$this-> success ( L ( '资料修改成功，等待审核！' ) );

				} else {
					//若没有提交过资料则更新认证状态
					$result= $status->add($arr);
					if ($result){
						$this-> success ( L ( '认证资料已上传，等待后台审核...' ) );
			
					}
				}
		} else {
			// 失败提示
			$this-> error ( L ( '您未做任何修改' ) );
		}
		    
	}
	public function userselfset_2() {
		$this->display ();
	}
	public function userselfsetok() {
		$this->display ();
	}
	public function usertrustlevel() {
		$this->display ();
	}
	public function userwithdrawindex() {
		$this->display ();
	}
	public function userwithdrawrice() {
		$this->display ();
	}
	
	/**
	 * 安全设置
	 */
	public function usersaftyset() {
		$this->display ();
	}
	public function usersaftyset_save() {
		if ( !is_login() ) {
			$this->error( '您还没有登陆',U('User/login') );
		}
        if ( IS_POST ) {
            //获取参数
            $uid        =   is_login();
            $password   =   I('post.old');
            $repassword = I('post.repassword');
            $data['password'] = I('post.password');
            empty($password) && $this->error('请输入原密码');
            empty($data['password']) && $this->error('请输入新密码');
            empty($repassword) && $this->error('请输入确认密码');

            if($data['password'] !== $repassword){
                $this->error('您输入的新密码与确认密码不一致');
            }

            $Api = new UserApi();
            $res = $Api->updateInfo($uid, $password, $data);
            if($res['status']){
                $this->success('修改密码成功！');
            }else{
                $this->error($res['info']);
            }
        }else{
            $this->display();
        }
	}
	public function paypassword() {
		$this->display ();
	}
	public function paypassword_save() {
		if ( !is_login() ) {
			$this->error( '您还没有登陆',U('User/login') );
		}
            //获取参数
            $uid        =   is_login();
            // $password   =   I('post.old');
            // $repassword = I('post.repassword');
            // $data['pin_pass'] = I('post.pin_pas');
            // empty($password) && $this->error('请输入原密码');
            // empty($data['pin_pass']) && $this->error('请输入新密码');
            // empty($repassword) && $this->error('请输入确认密码');
            // 从表单中获取来的数据



            $m = M ( "ucenter_member");
            $condition ['id'] = $uid;
		    $pin = $m->where($condition)->field('pin_pass')->select ();
            if(md5($_POST ['old']) == $pin[0]['pin_pass']){

				$data ['pin_pass'] = md5($_POST ['pin_pass']);
				$condition ['id'] = $uid;
	            if($m = $m->where($condition)->save ($data)){
	                $this->success('修改密码成功！');
	            }else{
	                $this->error('修改失败！');
	            }
            }
            else{$this->error('修改失败！');
            }
			
	}
}