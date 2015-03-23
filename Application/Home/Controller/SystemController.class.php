<?php

namespace Home\Controller;
use User\Api\UserApi;
use OT\DataDictionary;
use Think\Controller;
use Think\Model;

class SystemController extends HomeController {
	public function index() {
		$this->display ();
	}
	/**
	 *
	 * @author liuy
	 *        
	 *         2015-1-29找回密码
	 */
	public function findpassword() {
		$this->display ();
	}
	public function findpassword_send() {

        $email  =$_POST['email'];

		$Member = M('ucenter_member');
		$map['email']=$_POST['email'];
		$uid = $Member->where($map)->field('id,username')->select();

		$basename = base64_encode ($uid[0]['username']);
		// dump($uid);
		if(0 < $uid[0]['id']){
			if($email != ''){ //TODO: 发送验证邮件
					$a = SendMail($email,'工合财富修改密码通知','亲爱的'.$uid[0]['username'].'，您进行了修改密码操作，激活修改链接:http://www.ghcf.comm.cn/index.php?s=/Home/System/setpassword/basename/'.$basename.'.html 邮件发送时间： '.date( "l dS of F Y h：i：s A" ).'请在24小时内激活本邮件由工合财富系统自动发出，请勿直接回复！如果您有任何疑问或建议，请登陆ghcf.com.cn');
			   }
			   else{
			   	$this->error('发送失败！');
			   }
			$this->success('验证邮件已发送，注意查收!', U('User/login'));
	    }
	    else{
	    	$this->error('发送失败！');
	    }
		$this->display ();
	}
	/**
	 *
	 * @author liuy
	 *        
	 *         2015-2-13通过手机号码找回密码
	 */
	public function findpassbyphone() {
		$this->display ();
	}
	
	/**
	 *
	 * @author liuy
	 *        
	 *         2015-2-13通过邮箱地址找回密码
	 */
	public function findpassbyemail() {
		$this->display ();
	}
	
	/**
	 *
	 * @author 2015-1-29
	 */
	public function setpassword($basename='') {
		$this->basename =$basename;
		$this->display();
	}

    public function profile(){
        if ( IS_POST ) {
            //获取参数
            $basename=$_POST['basename'];
            if(empty($basename)){
			$this->error = '非法操作!';
			return false;
			}

			//更新前检查用户修改权限码

			
				$map['username'] = base64_decode ( $basename );

	            $Mid = M ( 'ucenter_member' )->field ( 'id' )->where($map)->select();
				
				$uid =$Mid[0]['id'];

            $data['password'] = $_POST['password'];
            $repassword = $_POST['repassword'];
            
            empty($data['password']) && $this->error('请输入新密码');
            empty($repassword) && $this->error('请输入确认密码');

            if($data['password'] !== $repassword){
                $this->error('您输入的新密码与确认密码不一致');
            }


            $Api = new UserApi();
            $res = $Api->updatepw($uid, $data);
            if($res['status']){
                $this->success('修改密码成功！', U('User/login'));
            }else{
                $this->error($res['info']);
            }
        }else{
            $this->display();
        }
    }
}