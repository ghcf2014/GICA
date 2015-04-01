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
		is_login () || $this->error ( '您还没有登录，请先登录！', U ( 'Home/User/login' ) );
		$uid=is_login();
		$session = isset ( $_SESSION ['gica_home'] ['user_auth'] ['username'] );
		//是否进行基本认证
		$status = M ( 'z_members_status' );
		$result = $status->where ( "uid=%s", $uid )->select ();
		if ($result == null) {
			$this->error ( '对不起，您还没进行基本认证！', U ( 'Member/Userinfo/userselfset' ) );			
		} 
		//是否有申请
		$data=M('z_borrow_apply');		
		$applydata=$data->where('status=1 and apply_uid=%s',$uid)->select();
		if (is_array($applydata)==true){
			$this->assign('session',$session);
			$this->display();
		}else {
			$this->redirect('Home/Borrow/borrowapply');
		}
	}

	public function papersinfo() {
		$uid = is_login ();
		is_login () || $this->error ( '您还没有登录，请先登录！', U ( 'Home/User/login' ) );
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
		/**
	 *
	 * @author liuy
	 *        
	 *         2015-1-27申请借款
	 */
	public function borrowapply() {
		is_login () || $this->error ( '您还没有登录，请先登录！', U ( 'Home/User/login' ) );
		$uid=is_login();
		$data=M('z_borrow_apply');
		$condition['apply_uid']=$uid;
		//没有申请
		$applydata=$data->where($condition)->select();
		if ($applydata){
			//申请不通过
			$condition['status']=2;
			$applydata1=$data->where($condition)->select();
			if (!$applydata1){
				//申请通过
				$condition['status']=3;
				$applydata2=$data->where($condition)->select();
				if (!$applydata2){
					
					$this->redirect('Member/Borrow/myborrowapply');
				}
			}
		}
		$arrs['uid']=$uid;
		$borrowfile=M('z_members_status');
		$borrowfile_status=$borrowfile->where($arrs)->select();
		$files=$borrowfile_status[0];
		$this->assign('file',$files);
		$this->display ();
	
	}
	public function borrowapply_save(){
		$uid=is_login();
		$arr=array(
			'apply_ip'=>ip2long($_SERVER['REMOTE_ADDR']),
			'apply_uid'=>$uid
			);
		$receive=$_POST;
		$data = array_merge($receive,$arr);
		$model=M('z_borrow_apply');
		$result=$model->add($data);
		if ($result>0){
			$this->success('申请已提交，请耐心等待工作人员审核！',U('Member/Borrow/checkingapply'));
		}else {
			$this->error("信息提交失败，请重新核对信息！");
		}
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
		$depict ['collect_day'] = $_POST ["collect_day"];;
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
		//生成敏感信息
				if ($id==1){
			$action="发布了一次信用标";
		}elseif ($id==2) {
			$action="发布了一次净值标";
		}elseif ($id==3) {
			$action="发布了一次秒还标";
		}elseif ($id==4) {
			$action="发布了一次担保标";
		}elseif ($id==5) {
			$action="发布了一次抵押标";
		}else{
			$action="发布了一次实地考察标";
		}
		
		systemmsg($action);

		//等额本息公式带进
		// $depict['repayment_interest']=10000*(0.18/12)*pow((1+0.18/12),2)/(pow((1+0.18/12),2)-1);
		if ($_POST ["repayment_type"] == 5) {
			$depict ['repayment_interest'] = (floatval ( $_POST ["borrow_money"] ) * (floatval ( $_POST ["borrow_interest_rate"] ) / 100 / 12) * pow ( (1 + (floatval ( $_POST ["borrow_interest_rate"] ) / 100 / 12)), floatval ( $_POST ["borrow_duration"] ) ) / (pow ( (1 + (floatval ( $_POST ["borrow_interest_rate"] ) / 100 / 12)), floatval ( $_POST ["borrow_duration"] ) ) - 1)) * floatval ( $_POST ["borrow_duration"] ) - floatval ( $_POST ["borrow_money"] );
			$depict ['repayment_money'] = (floatval ( $_POST ["borrow_money"] ) * (floatval ( $_POST ["borrow_interest_rate"] ) / 100 / 12) * pow ( (1 + (floatval ( $_POST ["borrow_interest_rate"] ) / 100 / 12)), floatval ( $_POST ["borrow_duration"] ) ) / (pow ( (1 + (floatval ( $_POST ["borrow_interest_rate"] ) / 100 / 12)), floatval ( $_POST ["borrow_duration"] ) ) - 1)) * floatval ( $_POST ["borrow_duration"] );
			$depict ['total'] = $_POST ["borrow_duration"];
		}
		//先息后本公式带进
		if ($_POST ["repayment_type"] == 6) {
			$depict ['repayment_interest'] =floatval ( $_POST ["borrow_money"] )*(floatval ( $_POST ["borrow_interest_rate"] ) / 100 / 12);
			$depict ['repayment_money'] = floatval ( $_POST ["borrow_money"] )+(floatval ( $_POST ["borrow_money"] )*(floatval ( $_POST ["borrow_interest_rate"] ) / 100 / 12));
			$depict ['total'] = $_POST ["borrow_duration"];
		}
		//一次性还款公式带进
		if ($_POST ["repayment_type"] == 7) {
			
			$depict ['repayment_interest'] =floatval ( $_POST ["borrow_money"] )*((floatval ( $_POST ["borrow_interest_rate"] ) / 100 / 12)*floatval($_POST ["borrow_duration"]));
			$depict ['repayment_money']=floatval ( $_POST ["borrow_money"] )*(1+((floatval ( $_POST ["borrow_interest_rate"] ) / 100 / 12))*floatval ( $_POST ["borrow_duration"] ));
			$depict ['total'] =1;
		}

		// $files=($_FILES['img']);
		
		// 保存当前数据对象
		if ($this->borrow_upload ( $depict )) { // 保存成功
		    $uid=is_login();                                   
			$applydata =M('z_borrow_apply');
			$arrs['status']=3;
			$apply_uid['apply_uid'] =$uid;
			$result=$applydata->where($apply_uid)->save($arrs);
			if ($result>0){


				$bdata=M('z_borrow_info');
				$map['borrow_uid']=$uid;
				$bid=$bdata->where($map)->order('add_time desc')->select();
				$b_id=$bid[0]['id'];
				$this->success ('发布审核已提交',U( 'Home/Borrow/detail?id='.$b_id));
			} else {
				$this->error('申请数据提交失败');
			}
			
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
		//登录状态显示
		if (is_login()<=0){
			$this->redirect('Home/User/login');
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
		$list[0]['jindu']=round($list[0]['has_borrow']/$list[0]['borrow_money']*100, 1);
		$uid = $list [0] ['borrow_uid'];
		$userlist = M ( 'ucenter_member' );
		$data = $userlist->field ( 'username,reg_time,last_login_time' )->where ( 'id=%s', $uid )->select ();
		$this->assign ( 'data', $data [0] );
		$updata = unserialize ( $list [0] ['updata'] );
		$repayment_type=$list[0]['repayment_type'];
		//查询当前标详情中的证明材料
		$filedata=M('z_member_info');
		$arrs['uid']=$uid;
		$file=$filedata->where($arrs)->select();
		$arry=array_filter($file[0]);
		$this->assign('files',$arry);
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
		if (empty ( $phone ) == false) {$arr1 ['phone_status'] = '手机';}
		if (empty ( $idcard ) == false) {$arr1 ['id_status'] = '身份';}
		if (empty ( $email ) == false) {$arr1 ['email_status'] = '邮箱';}
		if (empty ( $account ) == false) {$arr1 ['account_status'] = '账户';}
		if (empty ( $credit ) == false) {$arr1 ['credit_status'] = '信用';}
		if (empty ( $video ) == false) {$arr1 ['video_status'] = '视频';}
		if (empty ( $face ) == false) {$arr1 ['face_status'] = '现场';}
		if (empty ( $work ) == false) {$arr1 ['work_status'] = '工作';}
		if (empty ( $building ) == false) {$arr1 ['building_status'] = '房产';}
		if (empty ( $license ) == false) {$arr1 ['license_status'] = '驾照';}
		if (empty ( $cars ) == false) {$arr1 ['cars_status'] = '购车';}
		if (empty ( $live ) == false) {$arr1 ['live_status'] = '居住地';}
		if (empty ( $others ) == false) {$arr1 ['others_status'] = '其他';}
		$this->assign ( 'status', $arr1 );
		// 查询投标详情
		$borrow_info = M ( 'z_borrow_investor' );
		$condition ['borrow_id'] = $id;
		$borrow_info = $borrow_info->field ( 'investor_uid,borrow_uid,borrow_id,sum(investor_capital)investor_capital,deadline,add_time,invest_fee' )->where ( $condition )->order ( 'id asc', 'invest_fee desc', 'add_time desc' )->group ( 'investor_uid' )->select ();
		$uid = is_login (); 
		$detail = M ( 'z_investor_detail');
		$condition ['borrow_id'] = $id;
		$detail= $detail->where ( $condition )->select ();
		// $condition ['sort_order'] = 1;
		// $detail = $detail->where ( $condition )->select ();

		//还款计划查询
		$num=count($detail);
		if($repayment_type==5){
			for($i=0;$i<=($num-1);$i++){
				$cons['allcapital'][]=($detail[$i]['capital']+$detail[$i]['interest']);
				$cons['remain_money'][]=$cons['allcapital'][$i]*(count($detail)-1-$i);
				$cons['capital'][]=$detail[$i]['capital'];
				$cons['interest'][]=$detail[$i]['interest'];
				$cons['repayment_time'][]=$detail[$i]['repayment_time'];
				$cons['num']=$num;
			}
			
			$this->assign('num',$num);
			$this->assign('cons',$cons);
		}elseif($repayment_type==6){
			for($i=0;$i<=($num-1);$i++){
				$cons['allcapital'][$i]=round($detail[$i]['interest']);
				$cons['allcapital'][($num-1)]=round(($detail['1']['capital']*($num))+$detail['1']['interest']);
				$cons['remain_money'][$i]=round($detail[2]['capital']*($num)+($detail['1']['interest']*($num-$i-1)));
				$cons['remain_money'][($num-1)]=0;

				$cons['capital'][$i] =0;
				$cons['capital'][($num-1)]=round($detail['1']['capital']*($num));
				$cons['interest'][]=round($detail[$i]['interest']);
				$cons['repayment_time'][]=$detail[$i]['repayment_time'];
				$cons['num']=$num;
			}
			$num=count($detail);
			$this->assign('num',$num);
			$this->assign('cons',$cons);
		}else {
			$cons['allcapital'][0]=round($detail[0]['capital']+($detail[0]['interest']));
			$cons['remain_money'][0]=round($detail[0]['capital']+($detail[0]['interest']));
			$cons['capital'][0]=round($detail[0]['capital']);
			$cons['interest'][0]=round($detail[0]['interest']);
			$cons['repayment_time'][0]=$detail[0]['repayment_time'];
			$num=count($detail);
			$this->assign('num',$num);
			$this->assign('cons',$cons);
		}
		
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
		$uid=is_login(); 
		$config = array (
				'maxSize' => 100 * 1024 * 1024 * 1024,
				'mimes' => array (),
				'rootPath'=>'./Uploads/User/',
                'savePath'=>$uid.'/',
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
		$uid=is_login(); 
		$config = array (
				'maxSize' => 100 * 1024 * 1024 * 1024,
				'mimes' => array (),
				'rootPath'=>'./Uploads/User/',
                'savePath'=>$uid.'/',
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
	public function borrowfile_upload(){
		$uid=is_login();
		$arrs['uid']=$uid;
		$borrowfile=M('z_members_status');
		$borrowfile_status=$borrowfile->where($arrs)->select();
		//文件上传数据储存表
		$files=$borrowfile_status[0];
		$applydata=M('applyfile_download');
		$applyfile=$applydata->select();
		// dump($applyfile);
		$this->assign('applyfile',$applyfile);



		$this->assign('file',$files);
		$this->display();
	}
	public function borrowfile_add(){
		$uid=is_login();
		$config = array (
				'maxSize' => 100 * 1024 * 1024 * 1024,
				'mimes' => array (),
				'rootPath' => './Uploads/User/',
				'savePath' => $uid . '/',
				'ext' => array ('jpg','gif','bmp','png','pdf','rtf','tif'),
				'autoSub' => true 
		);
		$upload = new \Think\Upload ( $config ); // 实例化上传类
		$info = $upload->upload (); // 上传文件
		$data['identity_report']=$info['identity_report']['savepath'].$info['identity_report']['savename'];
		$data['credit_report']=$info['credit_report']['savepath'].$info['credit_report']['savename'];
		$data['living_report']=$info['living_report']['savepath'].$info['living_report']['savename'];
		$data['work_report']=$info['work_report']['savepath'].$info['work_report']['savename'];
		$data['income_report']=$info['income_report']['savepath'].$info['income_report']['savename'];
		$data['other_report']=$info['other_report']['savepath'].$info['other_report']['savename'];
		if (! $info) { // 上传错误提示错误信息
			$this->error ( $upload->getError () );
		} else { // 上传成功
	     	$borrowinfo=M('z_member_info');
			$arrid['uid']=$uid;    
			$result=$borrowinfo->where($arrid)->save($data);
			if ($result){
				$borrowfile_status=M('z_members_status');
				$arr=array_keys(array_filter($data));
				foreach($arr as $vo){
					$arrs[$vo]=1;
					$sta[]=$arrs;
				}
				$arr1=array_pop($sta);
				$result=$borrowfile_status->where($arrid)->save($arr1);
				if ($result){
					$status['uid']=$uid;
					$status['identity_report']==1;
					$status['work_report']==1;
					$status['living_report']==1;
					$status['income_report']==1;
					$status['credit_report']==1;
					$borrowfile=M('z_members_status');
					$borrowfile_status=$borrowfile->where($status)->select();
					if($borrowfile_status){
						$this->redirect('Borrow/borrowapply');
					}
					$this->success('上传成功！',U('Borrow/borrowfile_upload'));
				}else{
					$this->error('资料上传失败，请认证核对资料');
				}
				
			}else{
				$this->error('上传失败！');
			}
		}
		
	}

}