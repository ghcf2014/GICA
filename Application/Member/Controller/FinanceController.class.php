<?php

namespace Member\Controller;

/**
 * 文件控制器
 * 主要用于下载模型的文件上传和下载
 */

class FinanceController extends MemberController {
	
	public function index(){
		$this->display();
	}
	public function financestatis(){
		$uid  =   is_login();
		$condition['investor_uid'] =$uid;
		$listinvestor = M('z_borrow_investor');
		$countinvestor=$listinvestor->where($condition)->group('borrow_id')->count();
		$suminvestor =$listinvestor->field('sum(investor_capital)investor_capital')->where($condition)->group('investor_uid')->select();

		//var_dump($suminvestor);
		$this->assign('countinvestor', $countinvestor);
		$this->assign('suminvestor', $suminvestor[0]['investor_capital']);
		$this->display();
	}
	public function borrowloanstatis(){
		$uid  =   is_login();//获取当前用户UID
		$condition['borrow_uid'] =$uid;
		$listborrow = M('z_borrow_info');
		$countborrow=$listborrow->where($condition)->count();

		$sumborrow =$listborrow->field('sum(borrow_money)borrow_money')->where($condition)->group('borrow_uid')->select();
		
		$this->assign('countborrow', $countborrow);
		$this->assign('sumborrow', $sumborrow[0]['borrow_money']);
		$this->display();
	}
}
