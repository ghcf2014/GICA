<?php

namespace Member\Controller;

use Think\Model;

/**
 * 文件控制器
 * 主要用于下载模型的文件上传和下载
 */
class FriendsController extends MemberController {
	
	/**
	 *
	 * @author liuy
	 *         初始化进入好友管理页面，并传递当前用户的用户值
	 */
	public function friends() {
		is_login()||$this_>redirect('Home/User/login');
		// 获取邮箱发送地址已经邮箱内容!
		$email = $_POST ['email'];
		$content = $_POST ['content'];
		$uid = is_login (); // 获取当前用户的Id
		$userinfo = M ( 'ucenter_member' );
		$userlist = $userinfo->where ( "id=" . $uid )->select (); // 查询当前用户的信息
		$username = base64_encode ( $userlist [0] ['username'] ); // 对用户名进行md5加密
		$this->assign ( "username", $username );
		
		// 查询当前登录用户的真实姓名
		$arr['uid']=$uid;
		$realName = M ( 'z_member_info' )->where ($arr)->select ();
		// dump($realName);
		$this->assign ( 'realName', $realName [0] ['real_name'] );
		
		if ($email != '') { // TODO: 发送验证邮件
			$a = SendMail ( $email, '工合财富好友注册通知!', '亲，您好！我是您的好友： ' . $realName [0] ['real_name'] . '!' . $content . ' 邮件发送时间： ' . date ( "l dS of F Y h：i：s A" ) . '如有疑问可以与您的好友进行联系,谢谢!' );
			$this->success ( "邮件发送成功！", U ( 'Friends/friends' ) );
		}
		$friends=M('z_member_friend');
		$f['uid']=$uid;
		$friend_id=$friends->where($f)->select();

		foreach ($friend_id as $value) {
			//查询注册信息
			$friends_id['id']=$value['friend_id'];
			$friend_data=$userinfo->where($friends_id)->select();
			//查询投资信息
			$investors=M('z_borrow_investor');
			$investor2=M('z_borrow_investor');
			$investor_uid['investor_uid']=$value['friend_id'];
			//投资总额
			$investor_msg=$investors->where($investor_uid)->field('add_time,investor_capital,sum(investor_capital)')->select();
			//最后一次投资时间
			$investor_time[3]=$investor2->where($investor_uid)->field('add_time')->order('add_time desc')->limit(1)->select();
			// //当天投资总额
			// $investor_day[4]=$investor2->where()
			// dump($investor_time);// echo $investor2->getLastsql();
			$dd[]=array_merge($friend_data,$investor_msg ,$investor_time);
		}
		// dump($dd);
		
		$num1=1;
		$num2=1;
		$num3=1;
		$money=0;
		foreach ($dd as $key => $value) {
			// dump($value);
			$level=$value[0]['member_level'];
			if ($level==1){

				$count1=$num1;
				$num1++;
			}elseif ($level==2) {
				$count2=$num2;
				$num2++;
			}elseif ($level==3) {
				$count3=$num3;
				$num3++;
			}
			$arr[1]=$count1;
			$arr[2]=$count2;
			$arr[3]=$count3;
		}

		$this->assign('count',$arr);
		
		
		$this->assign ( "friendList", $dd );
		$this->display ();
	}
	
	/**
	 *
	 * @author liuy
	 *        
	 *         2015-2-13好友的推广管理
	 */
	public function friendsgeneralize() {
		$this->display ();
	}
}
