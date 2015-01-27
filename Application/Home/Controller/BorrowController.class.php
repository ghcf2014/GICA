<?php

namespace Home\Controller;

use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class BorrowController extends HomeController {
	
	// 系统首页
	public function index() {
		$session = isset ( $_SESSION ['gica_home'] ['user_auth'] ['username'] );
		
		$this->assign ( 'session', $session );
		$this->display ();
	}
	//
	public function papersinfo() {
		$uid = is_login ();
		
		$m = M ( "z_member_data_info" );
		$condition ['uid'] = $uid;
		$condition ['type'] = 2;
		$m = $m->where ( $condition )->select ();
		
		$this->assign ( 'list', $m );
		$this->display ();
	}
	public function circulation($id = 0, $uid = 0) {
		is_login () || $this->error ( '您还没有登录，请先登录！', U ( 'Home/User/login' ) );
		$uid = is_login ();
		$type = $_GET ['type'];
		$status = M ( 'z_members_status' );
		$result = $status->where ( "uid=%s", $uid )->select ();
		if ($result !== null) {
			$this->assign ( 'id', $id );
			$this->redirect ( "Home/Borrow/borrowinfo?type={$type}" );
		} else {
			$this->error ( '对不起，您还没进行基本认证！', U ( 'Home/Borrow/userinfo?type={$type}' ) );
		}
		$this->display ();
	}
	// 发布贷款
	public function borrowinfo() {
		$type = $_GET ['type'];
		$this->assign ( 'type', $type );
		$this->display ();
	}
	// 基本信息
	public function userinfo() {
		$uid = is_login ();
		$type = $_GET ['type'];
		$chk = M ( "z_member_info" );
		$condition ['uid'] = $uid;
		$m = $chk->where ( $condition )->select ();
		if ($m !== null) {
			$this->assign ( 'mlist', $m );
		} else {
			$n = $chk->add ( $condition );
			$m = $chk->where ( $condition )->select ();
			$this->assign ( 'mlist', $m );
		}
		$this->display ();
	}
	// 重新确认基本认证
	public function add() {
		// 从表单中获取来的数据
		$uid = is_login ();
		
		$m = M ( "z_member_info" );
		$data ['real_name'] = $_POST ["real_name"];
		$data ['idcard'] = $_POST ["idcard"];
		// $data ['card_img'] = $_POST ["card_img"];
		// $data ['card_back_img'] = $_POST ["card_back_img"];
		$data ['sex'] = $_POST ["sex"];
		$data ['zy'] = $_POST ["zy"];
		$data ['cell_phone'] = $_POST ["cell_phone"];
		$data ['education'] = $_POST ["education"];
		$data ['income'] = $_POST ["income"];
		$data ['address'] = $_POST ["address"];
		// dump($data);
		$condition ['uid'] = $uid;
		
		// 保存当前数据对象
		if ($m = $m->where ( $condition )->save ( $data )) { // 保存成功
		                                                     // 成功提示
		                                                     // 认证状态表更新字段
			$arr = array (
					"uid" => $uid 
			);
			// 更新认证状态
			$status = M ( 'z_members_status' );
			// 查询是否已提交过资料
			if ($re = $status->where ( "uid=%s", $uid )->select ()) {
				$this->success ( '资料修改成功，等待审核...', U ( 'Borrow/papersinfo' ) );
			} else {
				// 若没有提交过资料则更新认证状态
				$result = $status->add ( $arr );
				if ($result) {
					$this->success ( '认证资料已上传，等待后台审核...', U ( 'Borrow/papersinfo' ) );
				}
			}
		} else {
			// 失败提示
			$this->error ( L ( '您未做任何修改' ) );
		}
	}
	public function circulation_save($id = 1) {
		$uid = is_login ();
		$depict ['borrow_type'] = $id;
		$depict ['borrow_name'] = $_POST ['borrow_name'];
		$depict ['borrow_money'] = $_POST ["borrow_money"];
		$depict ['borrow_interest_rate'] = $_POST ["borrow_interest_rate"];
		$depict ['borrow_use'] = $_POST ["borrow_use"];
		$depict ['borrow_duration'] = $_POST ["borrow_duration"];
		$depict ['borrow_min'] = $_POST ["borrow_min"];
		$depict ['borrow_max'] = $_POST ["borrow_max"];
		$depict ['collect_time'] = $_POST ["collect_time"];
		$depict ['repayment_type'] = $_POST ["repayment_type"];
		$depict ['reward_vouch_rate'] = $_POST ["reward_vouch_rate"];
		$depict ['borrow_info'] = $_POST ["borrow_info"];
		$depict ['borrow_status'] = 0;
		$depict ['borrow_uid'] = $uid;
		$depict ['add_time'] = time ();
		$depict ['deadline'] = strtotime ( '+' . intval ( $_POST ["collect_day"] ) . ' year' );
		$depict ['add_ip'] = get_client_ip ();
		// $depict['repayment_interest'] = intval ($_POST ["borrow_money"])*intval ($_POST ["borrow_interest_rate"])/ 100;
		// $depict['repayment_interest']=(intval($_POST["borrow_money"])*(intval($_POST ["borrow_interest_rate"])/100/12)*(1+(intval($_POST["borrow_interest_rate"])/ 100/12))^intval($_POST["borrow_duration"]))/((1+(0.12/12)^intval($_POST["borrow_duration"])-1);//等额本息公式

		if ($uid=1){
			session_start();
			$_SESSION['borrow']['borrow_name']=$_POST ['borrow_name'];
			$_SESSION['borrow']['borrow_time']=$depict['add_time'];
			$_SESSION['borrow']['borrow_id']=$id;
			$_SESSION['borrow']['borrow_action']="发布了一次标";
		}

		
		// $depict['repayment_interest']=10000*(0.18/12)*pow((1+0.18/12),2)/(pow((1+0.18/12),2)-1);
		if ($_POST ["repayment_type"] == 5) {
			$depict ['repayment_interest'] = (intval ( $_POST ["borrow_money"] ) * (intval ( $_POST ["borrow_interest_rate"] ) / 100 / 12) * pow ( (1 + (intval ( $_POST ["borrow_interest_rate"] ) / 100 / 12)), intval ( $_POST ["borrow_duration"] ) ) / (pow ( (1 + (intval ( $_POST ["borrow_interest_rate"] ) / 100 / 12)), intval ( $_POST ["borrow_duration"] ) ) - 1)) * intval ( $_POST ["borrow_duration"] ) - intval ( $_POST ["borrow_money"] );
			$depict ['repayment_money'] = (intval ( $_POST ["borrow_money"] ) * (intval ( $_POST ["borrow_interest_rate"] ) / 100 / 12) * pow ( (1 + (intval ( $_POST ["borrow_interest_rate"] ) / 100 / 12)), intval ( $_POST ["borrow_duration"] ) ) / (pow ( (1 + (intval ( $_POST ["borrow_interest_rate"] ) / 100 / 12)), intval ( $_POST ["borrow_duration"] ) ) - 1)) * intval ( $_POST ["borrow_duration"] );
			$depict ['total'] = $_POST ["borrow_duration"];
		}
		
		// $files=($_FILES['img']);
		
		// 保存当前数据对象
		if ($this->borrow_upload ( $depict )) { // 保存成功
		                                        // 成功提示add_time
			$this->success ( L ( '发布审核已提交' ), U ( 'Home/Borrow/index' ) );
		} else {
			// 失败提示
			$this->error ( L ( '发布失败' ) );
		}
	}
	/**
	 * 新增页面初始化
	 */
	public function detail($id = 0, $p = 1) {
		/* 标识正确性检测 */
		if (! ($id && is_numeric ( $id ))) {
			$this->error ( '投标ID错误！' );
		}
		
		/* 页码检测 */
		$p = intval ( $p );
		$p = empty ( $p ) ? 1 : $p;
		
		$map = array (
				'id' => $id 
		);
		// 查询借款详情表
		$listBorrow = M ( 'z_borrow_info' );
		$list = $listBorrow->where ( $map )->select ();
		$uid = $list [0] ['borrow_uid'];
		$userlist = M ( 'ucenter_member' );
		$data = $userlist->field ( 'username,reg_time,last_login_time' )->where ( 'id=%s', $uid )->select ();
		$this->assign ( 'data', $data [0] );
		$updata = unserialize ( $list [0] ['updata'] );
		$this->assign ( 'updata', $updata );
		$this->assign ( 'list3', $list );
		// 查询用户资料审核状态
		$checkmsg = M ( 'z_members_status' );
		$result = $checkmsg->where ( 'uid=%s', $uid )->select ();
		$arr = array_keys ( $result [0], 1 );
		$phone = array_keys ( $arr, 'phone_status' );
		$idcard = array_keys ( $arr, 'id_status' );
		$email = array_keys ( $arr, 'email_status' );
		$account = array_keys ( $arr, 'account_status' );
		$credit = array_keys ( $arr, 'credit_status' );
		$video = array_keys ( $arr, 'video_status' );
		$face = array_keys ( $arr, 'face_status' );
		$work = array_keys ( $arr, 'work_status' );
		$building = array_keys ( $arr, 'building_status' );
		$license = array_keys ( $arr, 'license_status' );
		$cars = array_keys ( $arr, 'cars_status' );
		$live = array_keys ( $arr, 'live_status' );
		$others = array_keys ( $arr, 'others_status' );
		$arr1 = array ();
		if (empty ( $phone ) == false) {
			$arr1 ['phone_status'] = '手机';
		}
		if (empty ( $idcard ) == false) {
			$arr1 ['id_status'] = '身份';
		}
		if (empty ( $email ) == false) {
			$arr1 ['email_status'] = '邮箱';
		}
		if (empty ( $account ) == false) {
			$arr1 ['account_status'] = '账户';
		}
		if (empty ( $credit ) == false) {
			$arr1 ['credit_status'] = '信用';
		}
		if (empty ( $video ) == false) {
			$arr1 ['video_status'] = '视频';
		}
		if (empty ( $face ) == false) {
			$arr1 ['face_status'] = '现场';
		}
		if (empty ( $work ) == false) {
			$arr1 ['work_status'] = '工作';
		}
		if (empty ( $building ) == false) {
			$arr1 ['building_status'] = '房产';
		}
		if (empty ( $license ) == false) {
			$arr1 ['license_status'] = '驾照';
		}
		if (empty ( $cars ) == false) {
			$arr1 ['cars_status'] = '购车';
		}
		if (empty ( $live ) == false) {
			$arr1 ['live_status'] = '居住地';
		}
		if (empty ( $others ) == false) {
			$arr1 ['others_status'] = '其他';
		}
		$this->assign ( 'status', $arr1 );
		// 查询投标详情
		$borrow_info = M ( 'z_borrow_investor' );
		$condition ['borrow_id'] = $id;
		$borrow_info = $borrow_info->field ( 'investor_uid,borrow_uid,borrow_id,sum(investor_capital)investor_capital,deadline,add_time,invest_fee' )->where ( $condition )->order ( 'id asc', 'invest_fee desc', 'add_time desc' )->group ( 'investor_uid' )->select ();
		
		$this->assign ( 'list', $borrow_info );
		
		$this->display ();
	}
	// 上传
	private function AddFile($fileinfo, $depict) {
		$i = 0;
		// var_dump($fileinfo);
		$uid = is_login ();
		$dateline = date ( "Y-m-d H:m:s" );
		$file = M ( 'z_member_data_info' );
		$condition ['uid'] = $uid;
		
		foreach ( $fileinfo as $vo ) {
			$data ['data_url'] = $vo ['savepath'] . $vo ['savename'];
			$data ['uid'] = $uid;
			$data ['add_time'] = time ();
			$data ['type'] = 2;
			// $data['deal_time']=$dateline;
			if ($file->where ( $condition )->data ( $data )->add ( $data )) {
				//
				$i ++;
			} else {
				return false;
			}
		}
		
		return true;
	}
	// 上传
	public function upload() {
		$config = array (
				'maxSize' => 100 * 1024 * 1024 * 1024,
				'mimes' => array (),
				'rootPath' => './Uploads/',
				'ext' => array (),
				'autoSub' => true 
		);
		$upload = new \Think\Upload ( $config ); // 实例化上传类
		$depict = $_POST ['depict'];
		$info = $upload->upload (); // 上传文件
		if (! $info) { // 上传错误提示错误信息
			$this->error ( $upload->getError () );
		} else { // 上传成功
		         
			// var_dump($info);
			if ($this->AddFile ( $info, $depict )) 			// 写入数据库
			{
				$this->success ( '上传成功！' );
			} else {
				$this->error ( '写入数据库失败' );
			}
		}
	}
	public function uploadindex() {
		$this->display ();
	}
	private function borrow_AddFile($fileinfo, $depict, $type) {
		$i = 0;
		$uid = is_login ();
		$file = M ( 'z_borrow_info' );
		$condition ['uid'] = $uid;
		
		foreach ( $fileinfo as $vo ) {
			$data [$i] ['updata'] = $vo ['savepath'] . $vo ['savename'];
			$i ++;
		}
		$depict ['updata'] = serialize ( $data );
		
		if (! $file->where ( $condition )->data ( $depict )->add ( $depict )) {
			return false;
		}
		
		return true;
	}
	public function borrow_upload($depict) {
		$config = array (
				'maxSize' => 100 * 1024 * 1024 * 1024,
				'mimes' => array (),
				'rootPath' => './Uploads/',
				'ext' => array (),
				'autoSub' => true 
		);
		$upload = new \Think\Upload ( $config ); // 实例化上传类
		
		$info = $upload->upload (); // 上传文件
		if (! $info) { // 上传错误提示错误信息
			$this->error ( $upload->getError () );
		} else { // 上传成功
			
			if ($this->borrow_AddFile ( $info, $depict )) 			// 写入数据库
			{
				return true;
			} else {
				return false;
			}
		}
	}
	private function AddFile_first($fileinfo, $depict) {
		$i = 0;
		// var_dump($fileinfo);
		$uid = is_login ();
		$dateline = date ( "Y-m-d H:m:s" );
		$file = M ( 'z_member_info' );
		$condition ['uid'] = $uid;
		foreach ( $fileinfo as $vo ) {
			
			$data ['card_img'] = $vo ['savepath'] . $vo ['savename'];
			// $data['data_name']=$depict[$i];
			// $data['add_time']=$vo['savepath'];
			// $data['deal_time']=$dateline;
			if ($file->where ( $condition )->data ( $data )->save ()) {
				//
				$i ++;
			} else {
				return false;
			}
		}
		
		return true;
	}
	public function upload_first() {
		$uid = is_login ();
		$config = array (
				'maxSize' => 100 * 1024 * 1024 * 1024,
				'mimes' => array (),
				'rootPath' => './Uploads/User/',
				'savePath' => $uid . '/',
				'ext' => array (),
				'autoSub' => true 
		);
		$upload = new \Think\Upload ( $config ); // 实例化上传类
		$depict = $_POST ['depict'];
		$info = $upload->upload (); // 上传文件
		if (! $info) { // 上传错误提示错误信息
			$this->error ( $upload->getError () );
		} else { // 上传成功
		         
			// var_dump($info);
			if ($this->AddFile_first ( $info, $depict )) 			// 写入数据库
			{
				$this->success ( '上传成功！' );
			} else {
				// $this->error('写入数据库失败');
			}
		}
	}
	private function AddFile_back($fileinfo, $depict) {
		$i = 0;
		// var_dump($fileinfo);
		$uid = is_login ();
		$dateline = date ( "Y-m-d H:m:s" );
		$file = M ( 'z_member_info' );
		$condition ['uid'] = $uid;
		foreach ( $fileinfo as $vo ) {
			
			$data ['card_back_img'] = $vo ['savepath'] . $vo ['savename'];
			// $data['data_name']=$depict[$i];
			// $data['add_time']=$vo['savepath'];
			// $data['deal_time']=$dateline;
			if ($file->where ( $condition )->data ( $data )->save ()) {
				//
				$i ++;
			} else {
				return false;
			}
		}
		
		return true;
	}
	public function upload_back() {
		$uid = is_login ();
		$config = array (
				'maxSize' => 100 * 1024 * 1024 * 1024,
				'mimes' => array (),
				'rootPath' => './Uploads/User/',
				'savePath' => $uid . '/',
				'ext' => array (),
				'autoSub' => true 
		);
		$upload = new \Think\Upload ( $config ); // 实例化上传类
		$depict = $_POST ['depict'];
		$info = $upload->upload (); // 上传文件
		if (! $info) { // 上传错误提示错误信息
			$this->error ( $upload->getError () );
		} else { // 上传成功
		         
			// var_dump($info);
			if ($this->AddFile_back ( $info, $depict )) 			// 写入数据库
			{
				$this->success ( '上传成功！' );
			} else {
				// $this->error('写入数据库失败');
			}
		}
	}
	
	/**
	 *
	 * @author liuy
	 *        
	 *         2015-1-27申请借款
	 */
	public function borrowapply() {
		$this->display ();
	}
}