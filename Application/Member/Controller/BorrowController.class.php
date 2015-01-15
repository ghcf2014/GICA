<?php

namespace Member\Controller;

use OT\DataDictionary;
use Think\Controller;
use User\Api\UserApi;

class BorrowController extends MemberController {
	public function index() {
		$this->display ();
	}
	public function borrowcincerninfo() {
		$this->display ();
	}
	/**
	 *
	 * @author liuy
	 *         2015-1-15我的借款，包括成功的借款，未成功的借款，回收的借款。
	 */
	public function borrowmanager() {
		$uid = is_login (); // 获取当前用户UID
		$borrow_info = M ( 'z_borrow_info' );
		$condition ['borrow_uid'] = $uid;
		$borrow_info = $borrow_info->where ( $condition )->select ();
		$this->assign ( 'list', $borrow_info );
		$this->display ();
	}
}