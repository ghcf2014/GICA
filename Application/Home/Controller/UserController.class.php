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
	public function register($username = '', $password = '', $repassword = '', $email = '', $verify = '',$mobile='',$reffer = ''){
        if(!C('USER_ALLOW_REGISTER')){
            $this->error('注册已关闭');
        }

		if(IS_POST){ //注册用户
			//手机发送验证码
			// session_start();
			// if($_POST['mobile']!=$_SESSION['mobile'] or $_POST['mobile_code']!=$_SESSION['mobile_code'] or empty($_POST['mobile']) or empty($_POST['mobile_code'])){
			// $this->error('手机验证码输入错误。');
			// }elseif($_POST['mobile']==$_SESSION['mobile'] or $_POST['mobile_code']==$_SESSION['mobile_code'] or empty($_POST['mobile']) or empty($_POST['mobile_code'])){
			// 	$_SESSION['mobile'] = '';
			// 	$_SESSION['mobile_code'] = '';	
			// }
			// $_SESSION['send_code'] = random(6,1);
			/* 检测验证码 */
			if(!check_verify($verify)){
				$this->error('验证码输入错误！');
			}
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
			if($email != ''){ //TODO: 发送验证邮件
			$a = SendMail($email,'工合财富注册通知','亲爱的 '.$username.'，您好:欢迎注册工合财富，您的注册邮箱是：'.$email.' 。激活邮箱链接:http://www.ghcf.com.cn/index.php?s=/Home/User/emailyz/emailyz/'.$uid.'.html 邮件发送时间： '.date( "l dS of F Y h：i：s A" ).'请在24小时内激活本邮件由工合财富系统自动发出，请勿直接回复！如果您有任何疑问或建议，请登陆ghcf.com.cn');
			}
			if(0 < $uid){ //注册成功
				$m=M("z_member_money");//关联会员资金表
           		$m->uid=$uid;
           		$count=$m->add();

           		// 如果推荐人不为空
				 if ($reffer != null) {
					$userinfo = M ( 'ucenter_member' )->field ( "id" )->where ( $reffer )->select ();
					// 添加相关联的好友关系数据
					$friend = M ( 'z_member_friend' );
					$time = time ();
					$sql = "insert into gica_z_member_friend(uid,friend_id,apply_status,add_time) values({$uid},{$userinfo[0]['id']},'1',{$time})";
					//var_dump ( $sql );
					$friend->query ( $sql );
				} 
           		
		       $this->success('注册成功！邮件已发送，注意查收。',U('login'));
			} else { //注册失败，显示错误信息
				$this->error($this->showRegError($uid));
			}
		} else { //显示注册表单
			$reffer = $_REQUEST ['reffer'];
			if ($reffer != null) {
				$reffer = base64_decode ( $reffer );
				// var_dump($reffer);
				$this->assign ( 'reffer', $reffer );
			}
			$this->display();
		}

	}
	//手机验证码随机生成方法
	public function random($length = 6 , $numeric = 0) {
		PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
		if($numeric) {
			$hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
		} else {
			$hash = '';
			$chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
			$max = strlen($chars) - 1;
			for($i = 0; $i < $length; $i++) {
				$hash .= $chars[mt_rand(0, $max)];
			}
		}
		return $hash;
	}
	/* 登录页面 */
	public function login($username = '', $password = '', $verify = '',$email = ''){
		


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
					//判断跳转来源页
					// $msg=(strtolower(str_replace('/','',$_SERVER['HTTP_REFERER'])));
					// if(strpos('borrow',$msg)!==false){
					// 	$this->success('登录成功！',U('Borrow/circulation'));
					// }else{
					// 	$this->success('登录成功！',U('Member/Index/index'));
					// }

					$this->success('登录成功！',U('Member/Index/index'));
											               
				} else {
					$this->error($Member->getError());
				}

			} else { //登录失败
				switch($uid) {
					case -1: $error = '用户不存在或被禁用！'; break; //系统级别禁用
					case -2: $error = '密码错误！'; break;
					default: $error = '未知错误！'; break; // 0-接口参数错误（调试阶段使用）
				}
				$this->error($error);
			}

		} else { //显示登录表单
			$this->display();
		}
	}
	/* 退出登录 */
	public function emailyz($emailyz = 0){
		if(0 < $emailyz){
			$this->success('邮箱验证成功！', U('Member/Index/index'));
		} else {
			$this->error( '非法邮箱认证链接！',U('User/register') );
		}
	}

	/* 退出登录 */
	public function logout(){
		if(is_login()){
			D('Member')->logout();
			$this->success('退出成功！', U('User/login'));
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

}
