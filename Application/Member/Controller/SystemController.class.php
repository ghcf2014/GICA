<?php

namespace Member\Controller;

use OT\DataDictionary;
use Think\Controller;
use Think\Model;

class SystemController extends MemberController {
	public function index() {
		$this->display ();
	}
	public function withdrawdeposit() {
		$uid = is_login (); // 获取当前用户UID
		$condition ['uid'] = $uid;
		$money = M ( "z_member_money" );
		$money = $money->where ( $condition )->select (); // 余额查询
		
		$model = new Model ();
		$sql = "select * from gica_z_member_info as m , gica_z_member_banks as b where m.uid=b.uid and m.uid={$uid}";
		$voList = $model->query ( $sql );
		if ($voList [0] ['bank_num'] == "") {
			$this->error ( '您还未绑定银行卡，请您绑定银行卡！', U ( 'Userinfo/userbankset' ) );
		} else {
			/*
			 * echo "<pre>"; var_dump($voList); echo "</pre>";
			 */
			$this->assign ( 'userinfo', $voList );
			$this->assign ( 'list', $money );
			$this->display ();
		}
	}
	public function withdrawdeposit_add() {
		
		// 从表单中获取来的数据
		$uid = is_login ();
		$m = M ( "z_member_withdraw" );
		$data ['withdraw_money'] = $_POST ['withdraw_money'];
		$data ['withdraw_fee'] = 5;
		$data ['borrow_status'] = 0;
		$data ['uid'] = $uid;
		$data ['add_time'] = time ();
		$data ['add_ip'] = get_client_ip ();
		$condition ['uid'] = $uid;
		
		// 提现时扣除可用余额，未进行提现审核通过，冻结金额为提现金额
		$money = M ( 'z_member_money' )->where ( $uid )->select ();
		
		// 保存当前数据对象
		if ($m = $m->where ( $condition )->add ( $data )) { // 保存成功
		                                                    // 成功提示add_time
			$this->success ( L ( '提现已提交，我们会尽快审核。' ) );
		} else {
			// 失败提示
			$this->error ( L ( '提现失败' ) );
		}
	}
	
	/**
	 *
	 * @author liuy
	 *        
	 *         2015-1-12用户充值
	 */
	public function recharge() {
		$uid = is_login (); // 获取当前登录用户ID
		$model = new Model (); // 实例化当前模型驱动
		$sql = "select * from gica_z_member_info as m , gica_z_member_banks as b where m.uid=b.uid and m.uid={$uid}";
		$voList = $model->query ( $sql );
		if ($voList [0] ['bank_num'] == "") {
			$this->error ( '您还未绑定银行卡，请您绑定银行卡！', U ( 'Userinfo/userbankset' ) );
		} else {
			$this->assign ( 'userinfo', $voList );
			$this->display ();
		}
	}
	public function usermailindex() {
		$this->display ();
	}
	public function recharge_save() {
		$uid = is_login ();
		$condition ['uid'] = $uid;
		$money = M ( "z_member_money" );
		$money = $money->field ( 'account_money' )->where ( $condition )->select (); // 余额查询
		
		$m1 = M ( "z_member_money" );
		$money = intval ( $money [0] ['account_money'] ) + intval ( $_POST ['account_money'] ); // 余额加充值金额
		$data1 ['account_money'] = $money;
		
		$m = M ( "z_member_payonline" );
		$data ['uid'] = $uid;
		$data ['money'] = $_POST ['account_money'];
		// 保存当前数据对象
		if ($m = $m->where ( $condition )->add ( $data ) && $m1 = $m1->where ( $condition )->save ( $data1 )) { // 保存成功
		                                                                                                        // 成功提示
			$this->success ( L ( '充值成功!' ) );
		} else {
			// 失败提示
			$this->error ( L ( '充值失败!' ) );
		}
	}
	public function userbankInfo() {
		$this->display ();
	}
	
	/**
	 * 设置银行卡
	 */
	public function userbankset() {
		$uid = is_login ();
		$m = M ( 'z_member_banks' );
		$m_id ['uid'] = $uid;
		$m = $m->where ( $m_id )->select ();
		$this->assign ( 'list', $m );
		
		$this->display ();
	}
	
	public function userbankset_save() {
		// 从表单中获取来的数据
		$uid = is_login ();
		$m = M ( "z_member_banks" );
		$data ['bank_num'] = $_POST ['bankCard'];
		$data ['bank_name'] = $_POST ["bankName"];
		$data ['bank_address'] = $_POST ["subBankName"];
		$condition ['uid'] = $uid;
		// 保存当前数据对象
		if ($m = $m->where ( $condition )->save ( $data )) { // 保存成功
			$this->success ( L ( '保存成功' ) );
		} else {
			// 失败提示
			$this->error ( L ( '保存失败' ) );
		} 
		
	}
	public function userbasicdata() {
		$this->display ();
	}
	public function userbasicinfo() {
		$this->display ();
	}
	public function userchagerwithdraw() {
		$this->display ();
	}
	public function userchangebankInfo() {
		$this->display ();
	}
	public function userchangepass() {
		$this->display ();
	}
	public function userchangephone() {
		$this->display ();
	}
	public function userfinanceindex() {
		$this->display ();
	}
	public function userfindpass() {
		$this->display ();
	}
	public function userfindpassbyphone() {
		$this->display ();
	}
	public function userfindpaypass() {
		$this->display ();
	}
	public function userinfoinformset() {
		$this->display ();
	}
	public function userinfowork() {
		$this->display ();
	}
	public function usermailbanding() {
		$uid = is_login ();
		$m = M ( 'ucenter_member' );
		$m_id ['id'] = $uid;
		$m = $m->where ( $m_id )->select ();
		$this->assign ( 'list', $m );
		
		$this->display ();
	}
	public function userpapersinfo() {
		$this->display ();
	}
	public function userrenewalvip() {
		$this->display ();
	}
	public function userreplaymail() {
		$this->display ();
	}
	public function userreport() {
		$this->display ();
	}
	public function userricelist() {
		$this->display ();
	}
	public function userselfidcard() {
		$this->display ();
	}
	public function userselfset() {
		$this->display ();
	}
	public function add() {
		// 从表单中获取来的数据
		$uid = is_login ();
		$m = M ( "z_member_info" );
		$data ['real_name'] = $_POST ["real_name"];
		$data ['idcard'] = $_POST ["idcard"];
		$data ['sex'] = $_POST ["sex"];
		$data ['zy'] = $_POST ["zy"];
		$data ['cell_phone'] = $_POST ["cell_phone"];
		$data ['education'] = $_POST ["education"];
		$data ['income'] = $_POST ["income"];
		$data ['address'] = $_POST ["address"];
		$condition ['uid'] = $uid;
		// 保存当前数据对象
		if ($m = $m->where ( $condition )->save ( $data )) { // 保存成功
		                                                     // 成功提示
			$this->success ( L ( '保存成功' ) );
		} else {
			// 失败提示
			$this->error ( L ( '保存失败' ) );
		}
	}
	public function userselfset_2() {
		$this->display ();
	}
	public function userselfsetok() {
		$this->display ();
	}
	public function usertrustlevel() {
		$this->display ();
	}
	public function userwithdrawindex() {
		$this->display ();
	}
	public function userwithdrawrice() {
		$this->display ();
	}
}