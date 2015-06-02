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
		$this->pagetitle="工合财富直通贷款-找回密码";
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
					$a = SendMail($email,'工合财富修改密码通知','亲爱的'.$uid[0]['username'].'，您进行了修改密码操作，激活修改链接:http://'.$_SERVER['SERVER_NAME'].'/index.php?s=/Home/System/setpassword/basename/'.$basename.'.html 邮件发送时间： '.date( "l dS of F Y h：i：s A" ).'请在24小时内激活本邮件由工合财富系统自动发出，请勿直接回复！如果您有任何疑问或建议，请登陆ghcf.com.cn');
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

		$this->pagetitle="工合财富直通贷款-通过手机找回";
		$this->display ();
	}
	public function checkphone(){
		$data ['mobile'] = I('post.mobile');
		$mdata=M('ucenter_member');
		$result=$mdata->where($data)->select();
		if(!$result==null){
			$this->success( L('存在该号码'));
		}else{
			$this->error('该号码不存在 ');
		}
	}
	public function findloginpassbyphone(){
		$mobile=$_POST['mobile'];
		session_start();
		if($_POST['mobile']!=$_SESSION['mobile'] or $_POST['mobile_code']!=$_SESSION['mobile_code'] or empty($_POST['mobile']) or empty($_POST['mobile_code'])){
			$this->error('手机验证码输入错误。');
		}else{
			
			$this->redirect('Home/System/setpassword?mobile='.$mobile);
		}

		
	}
	public function findpassbyemail() {
		$this->pagetitle="工合财富直通贷款-通过邮箱找回";
		$this->display ();
	}
	public function setpassword($mobile='',$basename='') {
		if(!$mobile==''){
			$this->value=$mobile;
			$this->name='mobile';
			$this->display();
		}elseif(!$basename==''){
			$this->value=$basename;
			$this->name='basename';
			$this->display();
		}else{
			$this->redirect('Home/user/login');
		}
		
	}
   
    public function profile(){
        if ( IS_POST ) {
            //获取参数
            if(array_key_exists('mobile',$_POST)){
            	$map['mobile'] = $_POST['mobile'];
            }elseif(array_key_exists('basename',$_POST)){
            	$basename=$_POST['basename'];
            	$map['username'] = base64_decode ( $basename );
            }else{
            	$this->error('非法路径操作！');
            }
			//更新前检查用户修改权限码
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