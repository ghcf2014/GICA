<?php

namespace Home\Controller;

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
					$a = SendMail($email,'工合财富修改密码通知','亲爱的'.$uid[0]['username'].'，您进行了修改密码操作，激活修改链接:http://127.0.0.1/index.php?s=/Home/System/setpassword/basename/'.$basename.'.html 邮件发送时间： '.date( "l dS of F Y h：i：s A" ).'请在24小时内激活本邮件由工合财富系统自动发出，请勿直接回复！如果您有任何疑问或建议，请登陆ghcf.com.cn');
			   }
			   else{
			   	$this->error('发送失败！');
			   }
			$this->success('验证邮件已发送，注意查收!');
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

		dump($basename);

		$this->display();
	}
}