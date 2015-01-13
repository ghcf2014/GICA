<?php

namespace Member\Controller;

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
		$uid = is_login (); // 获取当前用户的Id
		$userinfo = M ( 'ucenter_member' );
		$userlist = $userinfo->where ( "id=" . $uid )->select (); // 查询当前用户的信息
		$username = base64_encode ( $userlist [0] ['username'] ); // 对用户名进行md5加密
		$this->assign ( "username", $username );
		$this->display ();
	}
	
	/**
	 *
	 * @author liuy
	 *        
	 *         2015-1-9 好友列表显示
	 */
	public function friendList() {
		$friend = M ( 'z_member_friend' );
		$uid = is_login ();
	}
}
