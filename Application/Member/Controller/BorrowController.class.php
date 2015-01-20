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
	public function myborrowmanager() {
		$uid = is_login (); // 获取当前用户UID
		$borrow_info = M ( 'z_borrow_info' );
		$condition ['borrow_uid'] = $uid;
		$borrow_info = $borrow_info->where ( $condition )->select ();
		$this->assign ( 'list', $borrow_info );
		$this->display ();
	}
	
	/**
	 *
	 * @author liuy
	 *         2015-1-19审核中的借款(包括初审中的借款以及复审中的借款)
	 */
	public function checkingborrow() {
		$uid = is_login (); // 获取当前用户UID
		$borrow_info = M ( 'z_borrow_info' );
		$sql = "select * from gica_z_borrow_info where borrow_uid=" . $uid . " and borrow_status=0 or borrow_status=4";
		$borrow_info = $borrow_info->query ( $sql );
		$this->assign ( 'list', $borrow_info );
		$this->display ();
	}
	
	/**
	 *
	 * @author liuy
	 *         2015-1-19招标中的借款
	 */
	public function issueborrow() {
		$uid = is_login (); // 获取当前用户UID
		$borrow_info = M ( 'z_borrow_info' );
		$borrow_info = $borrow_info->where ( 'borrow_uid=' . $uid . " and borrow_status=2" )->select ();
		$this->assign ( 'list', $borrow_info );
		$this->display ();
	}
	
	/**
	 *
	 * @author liuy
	 *         2015-1-19借款管理，成功的借款数据查询页
	 */
	public function borrowmanager() {
		$uid = is_login (); // 获取当前用户UID
		$borrow_info = M ( 'z_borrow_info' );
		$borrow_info = $borrow_info->where ( "borrow_uid=" . $uid . " and borrow_status=7" )->select ();
		$this->assign ( 'list', $borrow_info );
		$this->display ();
	}
	
	/**
	 *
	 * @author liuy
	 *         2015-1-19借款管理，还款中的借款
	 */
	public function repaymentborrow() {
		$uid = is_login (); // 获取当前用户UID
		$borrow_info = M ( 'z_borrow_info' );
		$borrow_info = $borrow_info->where ( "borrow_uid=" . $uid . " and borrow_status=6" )->select ();
		$this->assign ( 'list', $borrow_info );
		$this->display ();
	}
	
	/**
	 *
	 * @author liuy
	 *         2015-1-20借款管理的还款明细
	 */
	public function payborrowdetails() {
	}
}