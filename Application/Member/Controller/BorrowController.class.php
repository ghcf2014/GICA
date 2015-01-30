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
	public function reimbursement($id=0) {
		$uid = is_login (); // 获取当前用户UID
		$borrow_info = M ( 'z_borrow_info' );
		$condition ['borrow_uid'] = $uid;
		$condition ['id'] = $id;

		$borrow_info = $borrow_info->where ( $condition )->select ();


		if ($borrow_info[0]["repayment_type"] == 5) {
	        for($i=1;$i<=intval ($borrow_info[0]['total']);$i++){

	        	$huan[$i]['lixi'] =round(doubleval($borrow_info[0]["repayment_money"])/intval ($borrow_info[0]['total']),2);
	        	// $huan[$i]['yingxi'] =((intval ( $borrow_info[0]["borrow_money"] ) * (intval ( $borrow_info[0]["borrow_interest_rate"] ) / 100 / 12) * pow ( (1 + (intval ( $borrow_info[0]["borrow_interest_rate"] ) / 100 / 12)), $i ) / (pow ( (1 + (intval ( $borrow_info[0]["borrow_interest_rate"] ) / 100 / 12)), $i ) - 1)) * $i - intval ( $borrow_info[0]["borrow_money"] ));
	        	$huan[$i]['yubenxi'] = round(doubleval($borrow_info[0]["repayment_money"])-((doubleval($borrow_info[0]["borrow_money"]) * (doubleval( $borrow_info[0]["borrow_interest_rate"] ) / 100 / 12) * pow ( (1 + (doubleval( $borrow_info[0]["borrow_interest_rate"] ) / 100 / 12)), doubleval( $borrow_info[0]['total']) ) / (pow ( (1 + (doubleval( $borrow_info[0]["borrow_interest_rate"] ) / 100 / 12)), doubleval($borrow_info[0]['total']) ) - 1)) * $i),2);

	        	$t=$i;
	        	$huan[$i]['time'] =strtotime('+ '.$t.' months',strtotime(''.date("Y-m-d",''.$borrow_info[0]["add_time"].'').''));
	        }
		}
        if ($borrow_info[0]["repayment_type"] == 6) {
	        for($i=1;$i<=intval ($borrow_info[0]['total']);$i++){
				// $huan[$i]['lixi'] =intval ( $borrow_info[0]["borrow_money"] )*(intval ($borrow_info[0]["borrow_interest_rate"] ) / 100 / 12)*$i;
				$huan[$i]['lixi'] =intval ( $borrow_info[0]["borrow_money"] )/intval ($borrow_info[0]['total']);
				$t=$i+1;
				$huan[$i]['time'] =strtotime('+ '.$t.' months',strtotime(''.date("Y-m-d",''.$borrow_info[0]["add_time"].'').''));
				 // date('Y-m-d',strtotime('+1 d',strtotime('2009-07-08')));
			}
			$huan[1]['lixi'] =intval ($huan[0]['lixi'])+intval ( $borrow_info[0]["borrow_money"] )*(intval ($borrow_info[0]["borrow_interest_rate"] ) / 100 / 12)*$i;
		}
		// dump($huan);

		$this->assign ( 'huan', $huan);

		$this->assign ( 'list', $borrow_info );
		$this->display ();
	}
	public function reimbursement_del($id=0) {


		$this->success ( L ( '还款成功！' ));

	}
	public function reimbursement_huan($id=0) {
		$uid = is_login (); // 获取当前用户UID
		$borrow_info = M ( 'z_borrow_info' );
		$condition ['borrow_uid'] = $uid;
		$condition ['id'] = $id;
		$borrow_info = $borrow_info->where ( $condition )->select ();

  //       if ($borrow_info[0]["repayment_type"] == 5) {
		// 	$depict ['repayment_interest'] = (intval ( $borrow_info[0]["borrow_money"] ) * (intval ( $borrow_info[0]["borrow_interest_rate"] ) / 100 / 12) * pow ( (1 + (intval ( $borrow_info[0]["borrow_interest_rate"] ) / 100 / 12)), intval ( $borrow_info[0]["borrow_duration"] ) ) / (pow ( (1 + (intval ( $_POST ["borrow_interest_rate"] ) / 100 / 12)), intval ( $_POST ["borrow_duration"] ) ) - 1)) * intval ( $_POST ["borrow_duration"] ) - intval ( $_POST ["borrow_money"] );
		// 	$depict ['repayment_money'] = (intval ( $_POST ["borrow_money"] ) * (intval ( $_POST ["borrow_interest_rate"] ) / 100 / 12) * pow ( (1 + (intval ( $_POST ["borrow_interest_rate"] ) / 100 / 12)), intval ( $_POST ["borrow_duration"] ) ) / (pow ( (1 + (intval ( $_POST ["borrow_interest_rate"] ) / 100 / 12)), intval ( $_POST ["borrow_duration"] ) ) - 1)) * intval ( $_POST ["borrow_duration"] );
		// 	$depict ['total'] = $_POST ["borrow_duration"];
		// }
		// if ($_POST ["repayment_type"] == 6) {
		// 	$depict ['repayment_interest'] =intval ( $_POST ["borrow_money"] )*(intval ( $_POST ["borrow_interest_rate"] ) / 100 / 12);
		// 	$depict ['repayment_money'] = intval ( $_POST ["borrow_money"] )+(intval ( $_POST ["borrow_money"] )*(intval ( $_POST ["borrow_interest_rate"] ) / 100 / 12));
		// 	$depict ['total'] = $_POST ["borrow_duration"];
		// }




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
	
	/**
	 *
	 * @author liuy
	 *         2015-1-20借款明细
	 */
	public function borrowdetails() {
	}
	
	/**
	 *
	 * @author liuy
	 *         2015-1-20已还完的借款
	 */
	public function payborrowok() {
	}
	public function myborrowapply(){
		$uid=is_login();
		$applydata =M('z_borrow_apply');
		$result=$applydata->where('apply_uid=%s',$uid)->order('status',desc)->select();
		$this->assign('list',$result);
		$this->display();
	}
	public function checkingapply(){
		$uid=is_login();
		$applydata =M('z_borrow_apply');
		$result=$applydata->where('status=0 and apply_uid=%s',$uid)->select();
		$this->assign('list',$result);
		$this->display();
	}
	public function passapply(){
		$uid=is_login();
		$applydata =M('z_borrow_apply');
		$result=$applydata->where('status=1 and apply_uid=%s',$uid)->select();
		$this->assign('list',$result);
		$this->display();
	}
	public function overapply(){
		$uid=is_login();
		$applydata =M('z_borrow_apply');
		$result=$applydata->where('status=3 and apply_uid=%s',$uid)->select();
		$this->assign('list',$result);
		$this->display();
	}
}