<?php
namespace Home\Controller;
use User\Api\UserApi;

/**
 * 用户控制器
 * 包括用户中心，用户登录及注册
 */
class UserController extends HomeController {

	/* 用户中心首页 */
	public function index(){
		
	}

	/* 注册页面 */
	public function register($username = '', $password = '', $repassword = '', $email = '', $verify = '',$mobile='',$friends= '',$reffer = ''){
        if(!C('USER_ALLOW_REGISTER')){
            $this->error('注册已关闭');
        }
        if (is_login()>0){
			$this->redirect('Member/Index/index');
		}
		if(IS_POST){ //注册用户
			//手机发送验证码
			session_start();
			if($_POST['mobile']!=$_SESSION['mobile'] or $_POST['mobile_code']!=$_SESSION['mobile_code'] or empty($_POST['mobile']) or empty($_POST['mobile_code'])){
			$this->error('手机验证码输入错误。');
			}
			// $_SESSION['mobile'] = '';
			// $_SESSION['mobile_code'] = '';	
			
			/* 检测验证码 */
			// if(!check_verify($verify)){
			// 	$this->error('验证码输入错误！');
			// }
			if(!isusername($username)){
			 $this->error('用户名长度必须在5-20个字符以内！');
		    }
			/* 检测密码 */
			if($password != $repassword){
				$this->error('密码和重复密码不一致！');
			}
			/* 调用注册接口注册用户 */
            $User = new UserApi();
			$uid = $User->register($username, $password, $email,$mobile);
			
			if(0 < $uid){ //注册成功
           		// 如果推荐人不为空
				 if ($reffer != null) {

				 	$reffer = base64_decode ( $reffer );
				 	$reffers['username']=$reffer;
					$userinfo = M ( 'ucenter_member' )->field ( "id,member_level" )->where ($reffers)->select ();
					$member_level=$userinfo[0]['member_level'];
					if ($member_level>=0 && $member_level<=2){
						$now_level=($member_level+1);
						$level['member_level']=$now_level;
						$arr['id']=$uid;
						$levels=M('ucenter_member')->where($arr)->save($level);
					}

					// 添加相关联的好友关系数据
					
					$friend= M ( 'z_member_friend' );
					$time = time ();
					$f['friend_id']=$uid;
					$f['apply_status']=1;
					$f['add_time']=$time;
					$f['uid']=$userinfo[0]['id'];
					$friendf=$friend->add($f);

				}
				register($uid);
				if($friends !=null){
				 	$reffers['username']=$friends;
					$userinfo = M ( 'ucenter_member' )->field ( "id,member_level" )->where ($reffers)->select ();
					$member_level=$userinfo[0]['member_level'];
					if ($member_level>=0 && $member_level<=2){
						$now_level=($member_level+1);
						$level['member_level']=$now_level;
						$arr['id']=$uid;
						$levels=M('ucenter_member')->where($arr)->save($level);
					}

					// 添加相关联的好友关系数据
					
					$friend= M ( 'z_member_friend' );
					$time = time ();
					$f['friend_id']=$uid;
					$f['apply_status']=1;
					$f['add_time']=$time;
					$f['uid']=$userinfo[0]['id'];
					$friendf=$friend->add($f);

				}

				$mstatus = M('z_members_status');//用户验证状态
		        $condition2['uid'] =$uid;
		        $member_status=$mstatus->where($condition2)->select();
		        if ($member_status==null){
		            $arr['uid']=$uid;
		            $arr['phone_status']=1;
		            $result=$mstatus->add($arr);
		        }
		        $_SESSION['email']=$email;
           		$_SESSION['username']=$username;
           		$_SESSION['id']=$uid;
				//TODO: 发送验证邮件
				if($a = SendMail($email,'工合财富用户注册验证通知','亲爱的 '.$username.'，您好:欢迎注册工合财富账户，您的账户注册邮箱是：'.$email.' 。激活邮箱链接:http://'.$_SERVER['SERVER_NAME'].'/index.php?s=/Home/User/emailyz/emailyz/'.$uid.'.html 邮件发送时间： '.date( "l dS of F Y h：i：s A" ).'请在24小时内激活，此邮件由工合财富系统自动发出，请勿直接回复！如果您有任何疑问或建议，可拨打客服电话<b style="color:red;text-decoration:underline">400-123-4567</b>，或者登陆官网：www.ghcf.com.cn')){ //TODO: 发送验证邮件
					$this->success('注册成功，邮件已发送!',U('Home/User/registerok'));
				}else{
					$this->error('注册成功。邮件不能发送。',U('User/login'));
				}			} else { //注册失败，显示错误信息
				$this->error($this->showRegError($uid));
				$this->pagetitle="工合财富直通贷款-小额贷-融资贷-本地贷款-推荐领取积分-壕礼相送-注册";
			}
		} else { //显示注册表单
			// $reffer = $_REQUEST ['reffer'];
			if ($reffer != null) {
				$reffer = base64_decode ( $reffer );
				// var_dump($reffer);
				$this->assign ( 'reffer', $reffer );
			}
			$this->pagetitle="工合财富直通贷款-小额贷-融资贷-本地贷款-推荐领取积分-壕礼相送-注册";
			$this->display();
		}

	}
	public function registerok(){
		if ($_SESSION['email']==null){
			$this->redirect('Home/User/login');
		}
		if (is_login()>0){
			$this->redirect('Member/Index/index');
		}
		$email=$_SESSION['email'];
   		$domain = substr(strstr($email, '@'),1);
   		$url='http://mail.'.$domain;
   		$this->assign('url',$url);
   		$this->pagetitle="工合财富直通贷款-恭喜您注册成功！";
		$this->display();
	}
	//重新发邮件
   	public function emailsend(){
   		$email=$_SESSION['email'];
   		$username=$_SESSION['username'];
   		$uid=$_SESSION['id'];
   		if($email!==null){
   		 //TODO: 发送验证邮件
		$a = SendMail($email,'工合财富用户注册验证通知','亲爱的 '.$username.'，您好:欢迎注册工合财富，您的注册邮箱是：'.$email.' 。激活邮箱链接:http://'.$_SERVER['SERVER_NAME'].'/index.php?s=/Home/User/emailyz/emailyz/'.$uid.'.html 邮件发送时间： '.date( "l dS of F Y h：i：s A" ).'请在24小时内激活本邮件由工合财富系统自动发出，请勿直接回复！如果您有任何疑问或建议，可拨打客服电话<b style="color:red;text-decoration:underline">400-123-4567</b>，或者登陆官网：www.ghcf.com.cn');
			$this->success('发送成功，请登录邮箱验证',U('User/login'));
		}else{
			$this->error('重复发送无效',U('User/login'));
		}
   	}
	public function registeremailok(){
		$this->display();
	}

	//手机验证码随机生成方法
	// public function random($length = 6 , $numeric = 0) {
	// 	PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
	// 	if($numeric) {
	// 		$hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
	// 	} else {
	// 		$hash = '';
	// 		$chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
	// 		$max = strlen($chars) - 1;
	// 		for($i = 0; $i < $length; $i++) {
	// 			$hash .= $chars[mt_rand(0, $max)];
	// 		}
	// 	}
	// 	return $hash;
	// }
	/* 登录页面 */
	public function login($username = '', $password = '', $verify = '',$email = ''){
		//已经登录过隐藏登陆界面
		if (is_login()>0){
		$this->redirect('Member/Index/index');
		}
		if(IS_POST){ //登录验证
			/* 检测验证码 */
			if(!check_verify($verify)){
			$this->error('验证码输入错误！');
			}
			if(isusername($username)){
			$type = 1;
		    }
			if(isEmail($username)){
			$type = 2;
		    }
		    if(isMobile($username)){
			$type = 3;
		    }
			$user = new UserApi();
			$uid = $user->login($username, $password,$type);
			
			if(0 < $uid){ //UC登录成功
				/* 登录用户 */
				$Member = D('Member');
				if($Member->login($uid)){ //登录用户
					$mstatus = M('z_members_status');//用户验证状态
			        $condition2['uid'] =$uid;
			        $member_status=$mstatus->where($condition2)->select();
			        if ($member_status==null){
			            $arr['uid']=$uid;
			            $result=$mstatus->add($arr); 
			        }
					$this->success('登录成功！',U('Member/Index/index'));				               
				} else {
					$this->error($Member->getError());
				}
			} else { //登录失败
				switch($uid) {
					case -1: $error = '用户不存在或被禁用！'; break; //系统级别禁用
					case -2: $error = '密码错误！'; break ; 
					default: $error = '未知错误！'; break; // 0-接口参数错误（调试阶段使用）
				}
				$this->error($error);
			}

		} else { //显示登录表单
			$this->pagetitle="工合财富直通贷款-小额贷-融资贷-本地贷款-推荐领取积分-壕礼相送-登录页";
			$this->display();
		}
	}
	public function login_array($username='',$email='',$mobile=''){
				$umap['username'] = $username;
				$mmap['mobile'] = $mobile;
				$emap['email'] = $email;


		/* 获取用户数据 */
		$user=M('ucenter_member');
		$uuser = $user->where($umap)->find();
		$muser = $user->where($mmap)->find();
		$euser = $user->where($emap)->find();
		if(is_array($euser)){
			/* 验证用户密码 */

			$data['euser']="邮箱被占用";
			// $this->success($data);
			
		}
		if(is_array($muser)){
			/* 验证用户密码 */

			$data['muser']="手机号被占用";
			// $this->success($data);
			
		}
		if(is_array($uuser)){
			/* 验证用户密码 */

			$data['uuser']="用户已存在";
			// $this->success($data);
			
		}
		if(!is_array($uuser)){
			/* 验证用户密码 */

			$data['nuser']="用户不存在";
			// $this->success($data);
			
		}
		$this->ajaxReturn($data);
		$this->display();
	}

	/* 退出登录 */
	public function emailyz($emailyz = 0){
		session_start();
		if(0 < $emailyz){
			
			$m=M("z_members_status");//关联会员资金表
           	$condition['uid'] =$emailyz;
           	$data ['email_status'] = 1;
           	$count=$m->where($condition)->select();
           	if ($count!==null){
           		$m->where($condition)->save($data);
           		
           	}else{
           		$data['uid']=$emailyz;
           		$result=$m->add($data);
           		if ($result<0){
           			$this->error('邮件验证失败，请重新发送邮件');
           		}
           	}
           	
           	//查询验证用户信息
           	$membername = M('ucenter_member');
           	$arr['id']=$emailyz;
           	$memberdata=$membername->where($arr)->select();        
           	$username=$memberdata[0]['username'];
           	$_SESSION['username']=$username;

           	//登录账户
			$this->redirect('Home/User/registeremailok');
		} else {
			$this->error( '非法邮箱认证链接！',U('User/register') );
		}
	}

	/* 退出登录 */
	public function logout(){
		if(is_login()){
			D('Member')->logout();
			$this->redirect('User/login');
		} else {
			$this->redirect('User/login');
		}
	}

	/* 验证码，用于登录和注册 */
	public function verify(){
	    ob_clean();//要正常显示验证码，这个是重点！
		$verify = new \Think\Verify();
		$verify->entry(1);
	}

	/**
	 * 获取用户注册错误信息
	 * @param  integer $code 错误编码
	 * @return string        错误信息
	 */
	private function showRegError($code = 0){
		switch ($code) {
			case - 1 :
				$error = '用户名长度必须在16个字符以内！';
				break;
			case - 2 :
				$error = '用户名被禁止注册！';
				break;
			case - 3 :
				$error = '用户名被占用！';
				break;
			case - 4 :
				$error = '密码长度必须在6-30个字符之间！';
				break;
			case - 5 :
				$error = '邮箱格式不正确！';
				break;
			case - 6 :
				$error = '邮箱长度必须在1-32个字符之间！';
				break;
			case - 7 :
				$error = '邮箱被禁止注册！';
				break;
			case - 8 :
				$error = '邮箱被占用！';
				break;
			case - 9 :
				$error = '手机格式不正确！';
				break;
			case - 10 :
				$error = '手机被禁止注册！';
				break;
			case - 11 :
				$error = '手机号被占用！';
				break;
			default :
				$error = '未知错误';
		}
		return $error;
	}


    /**
     * 修改密码提交
     */
    public function profile(){
    	$uid  = is_login();//获取当前用户UID
    	//查询是否创建交易密码
            $paypass=M('ucenter_member');
            $arr['id']=$uid;
            $paypassword=$paypass->where($arr)->select();
            $pin_pass=$paypassword[0]['pin_pass'];
            $this->pin_pass=$pin_pass;
		if ( !is_login() ) {
			$this->redirect('User/login');
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

            	//发送站内信

                $action="修改了登陆密码";
                system_msg($action);
                
                $this->success('修改密码成功！');
            }else{
                $this->error($res['info']);
            }
        }else{
        	$this->pagetitle="工合财富直通贷款-账户安全";
            $this->display();
        }
    }


}
