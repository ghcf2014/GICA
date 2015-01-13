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
		
		//获取邮箱发送地址已经邮箱内容!
		$email = $_POST ['email'];
		$content=$_POST['content'];
		var_dump ( $email );
		$uid = is_login (); // 获取当前用户的Id
		$userinfo = M ( 'ucenter_member' );
		$userlist = $userinfo->where ( "id=" . $uid )->select (); // 查询当前用户的信息
		$username = base64_encode ( $userlist [0] ['username'] ); // 对用户名进行md5加密
		$this->assign ( "username", $username );
		
		// 查询当前登录用户的真实姓名
		$realName = M ( 'z_member_info' )->field ( 'real_name' )->where ( $uid )->select ();
		$this->assign ( 'realName', $realName [0] ['real_name'] );
		
		if ($email != '') { // TODO: 发送验证邮件
			$a = SendMail ( $email, '工合财富好友注册通知!', '您好！我是您的好友： ' . $realName [0] ['real_name'] . '!特意邀请您注册工合财富'.$content.' 邮件发送时间： ' . date ( "l dS of F Y h：i：s A" ) . '如有疑问可以与您的好友进行联系,谢谢!' );
		}
		
		// 查询好友注册信息以及平台的投资充值信息
		/*
		 * $friend = M ( 'z_member_friend' ); $friendList = $friend->where ( "friend_id=" . $uid )->select (); // 通过当前用户ID查询好友列表 var_dump($friendList); $this->assign('friendList',$friendList);
		 */
		$model = new Model ();
		$sql = "select * from (select * from gica_ucenter_member as m right join(select f.uid as fuid from gica_z_member_friend as f
	    		where friend_id={$uid} ) t on m.id=t.fuid) f left join gica_z_member_payonline as p on f.fuid=p.uid";
		$friendList = $model->query ( $sql );
		// var_dump($friendList);
		$this->assign ( "friendList", $friendList );
		$this->display ();
	}
}
