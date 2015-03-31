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

		$this->assign ( 'realName', $realName [0] ['real_name'] );
		
		if ($email != '') { // TODO: 发送验证邮件
			$a = SendMail ( $email, '工合财富好友注册通知!', '亲，您好！我是您的好友： ' . $realName [0] ['real_name'] . '!' . $content . ' 邮件发送时间： ' . date ( "l dS of F Y h：i：s A" ) . '如有疑问可以与您的好友进行联系,谢谢!' );
			$this->success ( "邮件发送成功！", U ( 'Friends/friends' ) );
		}
		
		$model = new Model ();
		$sql = "select * from (select * from gica_ucenter_member as m right join(select f.uid as fuid from gica_z_member_friend as f
	    		 where friend_id={$uid} ) t on m.id=t.fuid) f left join gica_z_borrow_investor as p on f.fuid=p.investor_uid";
		$friendList = $model->query ( $sql );
		
		/*
		 * $sql_count = "select count(*) as count from (select * from gica_ucenter_member as m right join(select f.uid as fuid from gica_z_member_friend as f where friend_id={$uid} ) t on m.id=t.fuid) f left join gica_z_borrow_investor as p on f.fuid=p.investor_uid";
		 
		
		/* import('ORG.Util.Page');// 导入分页类
		$count=$model->query($sql_count);
		$Page = new  \Think\Page($count, 10);
		var_dump($count[0]['count']);
		$show=$Page->show();
		$this->assign('page',$show);  */
		
		$this->assign ( "friendList", $friendList );
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
