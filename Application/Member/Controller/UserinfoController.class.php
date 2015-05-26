<?php

namespace Member\Controller;


use OT\DataDictionary;
use Think\Controller;
use Think\Model;

class UserinfoController extends MemberController {
	public function index() {
		$this->display ();
	}
	public function bevip() {
		$uid = is_login ();
		$m = M ( 'ucenter_member' ); // 用户头像
		$condition1 ['gica_ucenter_member.id'] = $uid;
		$m = $m->where ( $condition1 )->select ();
		$this->assign ( 'list', $m );
		$this->display ();
	}
	public function bevip_save() {
		$uid = is_login ();
		$m = M ( 'ucenter_member' ); // 用户头像
		$data ['customer_id'] = $_POST ['customer_id'];
		$data ['user_type'] = 1;
		$data ['time_limit'] = strtotime ( '+1 year' );
		$condition ['id'] = $uid;
		// 保存当前数据对象
		if ($m = $m->where ( $condition )->save ( $data )) { // 保存成功
		                                                     // 成功提示
			$this->success ( L ( '保存成功' ), U ( 'Member/index' ) );
		} else {
			// 失败提示
			$this->error ( L ( '保存失败' ) );
		}
	}
	public function userapplyforvip() {
		$this->display ();
	}
	public function userbankInfo() {
		$this->display ();
	}
	public function userbankset() {
		$uid = is_login ();
		$m = M ( 'z_member_banks' );
		$m_id ['uid'] = $uid;
		$count = $m->where ( $m_id )->count();
        $Page = new \Think\Page($count, 8);
        $show = $Page->show();
        $m = $m->where ( $m_id )->order('add_time',desc)->limit(($Page->firstRow.',').$Page->listRows)->select();
		$this->assign('page', $show);
		$num=count($m);
		for($i=0;$i<$num;$i++){
			$b=$m[$i]['bank_num'];
			$m[$i]['bank_num']=str_replace(substr(($m[$i]['bank_num']),4,12),"************",($m[$i]['bank_num']));
		}
		$this->assign ( 'list', $m );
		$this->pagetitle="工合财富直通贷款-银行卡设置";
		$this->display ();
	}
	public function papersinfo() {
		$uid = is_login ();
		is_login () || $this->error ( '您还没有登录，请先登录！', U ( 'User/login' ) );
		$m = M ( "z_member_data_info" );
		$condition ['uid'] = $uid;
		$condition ['type'] = 2;
		$m = $m->where ( $condition )->select ();
		$this->pagetitle="工合财富直通贷款-信征认证";
		$this->assign ( 'list', $m );
		$this->display ();
	}
	
	/**
	 * 银行卡设置
	 */
	public function userbankset_save_pw() {
		// 从表单中获取来的数据
		$uid  = is_login();//获取当前用户UID

		$dealpwd=$_POST ['pin_pass'];
	    $userinfo = M ( 'ucenter_member' )->where ( 'id=' . $uid )->select ();
	    $paypass = $userinfo [0] ['pin_pass']; // 查询用户交易密码

	    
	    if (md5($dealpwd) != $paypass) {
	        $this->error ( L ( '您输入的交易密码有误！' ) );
	    }
	    $this->success( L ( '正在提交...' ) );
	}
	public function userbankset_save() {
		// 从表单中获取来的数据
		$uid  = is_login();//获取当前用户UID

		$m = M ( "z_member_banks" );
		// 获取表单数据
		$data ['uid'] = $uid;
		$data ['bank_num'] = $_POST ['bankCard'];
		$data ['bank_address'] = $_POST ['bank_province'].$_POST ['bank_city'].$_POST ["bank_area"].$_POST ["subBankName"];
		$data ['bank_name'] = $_POST ["bank_name"];
		$data ['add_time'] = time();
		$data ['add_ip'] = '';
		$condition ['uid'] = $uid;
		// var_dump ( $_POST ['bankCard'] );
		$banksinfo = $m->where ( "uid=" . $uid )->select ();
		$count = $m->add( $data );		
		if ($count) { // 保存成功			
			//发送站内信
			$bankdata=$data ['bank_num'];
			$bank_name=$data['bank_name'];
			$bank_msg=str_replace(substr($bankdata,4,-4),'******',$bankdata);
            $action='绑定银行卡:'.$bank_msg.$bank_name;
            // system_msg($action);
			//查询是否创建交易密码 
            $paypass=M('ucenter_member');
            $arr['id']=$uid;
            $paypassword=$paypass->where($arr)->select();
            $pin_pass=$paypassword[0]['pin_pass'];
            $this->pin_pass=$pin_pass;
            if ($pin_pass==null){
            	$this->redirect('/Home/User/profile');
            }else{
            	$this->success ( "添加成功！", U ( "Userinfo/userbankset" ) );
            }
		} else {
			// 失败提示
			$this->error ( L ( '添加失败!' ) );
		}
	}
	public function userbasicdata() {
		$this->display ();
	}
	public function userbasicinfo() {
		$this->display ();
	}
	public function usermailindex() {
		$this->display ();
	}
	public function userchagerwithdraw() {
		
		// $nickname = I('nickname');
		// $map['status'] = array('egt',0);
		// if(is_numeric($nickname)){
		// $map['uid|nickname']= array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
		// }else{
		// $map['nickname'] = array('like', '%'.(string)$nickname.'%');
		// }
		
		// $list = $this->lists('z_member_moneylog', $map);
		// int_to_string($list);
		// $this->assign('_list', $list);
		// $this->meta_title = '资金信息';
		// $this->display();
		$uid = is_login ();
		$ml = M ( "z_member_moneylog" );
		$condition ['uid'] = $uid;

	    $count = $ml->where($condition)->count();
        $Page = new \Think\Page($count, 10);
        $show = $Page->show();
        $ml = $ml->where ( $condition )->order('add_time DESC')->limit(($Page->firstRow.',').$Page->listRows)->select();
		
		$money = M ( "z_member_money" );
		$condition ['uid'] = $uid;
		$money = $money->where ( $condition )->select ();
		
		$this->assign ( 'ml', $ml );
		$this->assign ( 'list', $money );
		$this->assign('page', $show);
		$this->pagetitle="工合财富直通贷款-资金明细";
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
		$uid = is_login ();
		$m = M ( 'ucenter_member' );
		$m_id ['id'] = $uid;
		$m = $m->where ( $m_id )->select ();
		$this->assign ( 'list', $m );
		$this->pagetitle="工合财富直通贷款-手机认证 ";
		$this->display ();
	}
	public function userphone_save() {
		// 从表单中获取来的数据
		if(IS_POST){ 
			$uid = is_login ();
			$m = M ( "ucenter_member" );
			
			$data ['mobile'] = $_POST ['mobile'];
			$condition ['id'] = $uid;
			
			session_start();
			if($_POST['mobile']!=$_SESSION['mobile'] or $_POST['mobile_code']!=$_SESSION['mobile_code'] or empty($_POST['mobile']) or empty($_POST['mobile_code'])){
			$this->error('手机验证码输入错误。');
			}

			if ($_POST ['mobile'] == null) {
				$this->error ( '您未输入变更的手机号码！' );
			}

            

			
			$mList = $m->select ();
			// 如果有相同的邮箱就终止循环
			for($i = 0; $i < count ( $mList ); $i ++) {
				if ($mList [$i] ['mobile'] == $_POST ['mobile']) {
					$this->error ( '该手机号码已经存在！' );
					break;
				}
			}
			// 保存当前数据对象
			if ($m = $m->where ( $condition )->save ( $data )) { // 保存成功
			    //发送站内信
			    $action="您绑定了新手机：". str_replace(substr($data['mobile'],3,-3),'*****',$data['mobile'])." !";
			    // system_msg($action);
				$this->success ( '保存成功！',U('Member/Index/index') );
			} else {
				// 失败提示
				$this->error ( '保存失败' );
			}
		}
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
		$m[0]['email']=str_replace(substr($m[0]['email'],2,(strpos($m[0]['email'],'@')-4)),'*****',$m[0]['email']);
		//邮箱认证状态
		$mstatus = M('z_members_status');//用户验证状态
        $condition2['uid'] =$uid;
        $member_status=$mstatus->where($condition2)->select();
        $email=$member_status['0']['email_status'];
        //邮箱地址域名
        $emaildata=M('ucenter_member'); 
        $arr['id']=$uid;
        $emails=$emaildata->where($arr)->select();
        $email_addr=$emails[0]['email'];

        $domain = substr(strstr($email_addr, '@'),1);
   		$url='http://mail.'.$domain;
        $this->assign('url',$url);
        $this->assign('email',$email);
		$this->assign ( 'list', $m );
		$this->pagetitle="工合财富直通贷款-邮箱认证";
		$this->display ();
	}
	public function usermail_send() {
		$uid = is_login ();
		$m = M ( 'ucenter_member' );
		$m_id ['id'] = $uid;
		$m = $m->where ( $m_id )->select ();

		$email=$m[0]['email'];
        if($email!==null){
		$a = SendMail($email,'工合财富邮箱验证','您的邮箱验证地址:http://'.$_SERVER['SERVER_NAME'].'/index.php?s=/Home/User/emailyz/emailyz/'.$uid.'.html 邮件发送时间： '.date( "l dS of F Y h：i：s A" ).'请在24小时内激活本邮件由工合财富系统自动发出，请勿直接回复！如果您有任何疑问或建议，可拨打客服电话<b style="color:red;text-decoration:underline">400-123-4567</b>，或者登陆官网：www.ghcf.com.cn');
			$this->success('发送成功，请登录邮箱验证');
		}else{
			$this->error('发送失败');
		}

		$m[0]['email']=str_replace(substr($m[0]['email'],2,(strpos($m[0]['email'],'@')-4)),'*****',$m[0]['email']);
		//邮箱认证状态
		$mstatus = M('z_members_status');//用户验证状态
        $condition2['uid'] =$uid;
        $member_status=$mstatus->where($condition2)->select();
        $email=$member_status['0']['email_status'];
        //邮箱地址域名
        $emaildata=M('ucenter_member');
        $arr['id']=$uid;
        $emails=$emaildata->where($arr)->select();
        $email_addr=$emails[0]['email'];
        
        $domain = substr(strstr($email_addr, '@'),1);
   		$url='http://mail.'.$domain;
        $this->assign('url',$url);
        $this->assign('email',$email);
		$this->assign ( 'list', $m );
		$this->display ();
	}
	public function usermail_save() {
		// 从表单中获取来的数据
		$uid = is_login ();
		$m = M ( "ucenter_member" );
		$data ['email'] = $_POST ['email'];
		// $data ['pw'] = $_POST ['pw'];

		// /* 验证用户密码 */
		$map['id'] = $uid;
		$user = $m->where($map)->select();
			if(think_ucenter_md5($_POST ['pw'], UC_AUTH_KEY) !== $user[0]['password']){
				$this->error ( '密码错误！' );
			} 
		// 邮箱修改前需进行邮箱唯一性判断，如果存在相同邮箱不可进行修改！
		$mList = $m->select ();

		// 如果有相同的邮箱就终止循环
		for($i = 0; $i < count ( $mList ); $i ++) {
			if ($mList [$i] ['email'] == $_POST ['email']) {
				$this->error ( '该邮箱地址已存在！' );
				break;
			}
		}
		
		$count = $m->where ( "id=" . $uid )->save ( $data );
		if ($count) { // 保存成功
			//邮箱状态重置待验证
			$emaildata=M('z_members_status');
			$email['email_status']=0;
			$arr['id']=$uid;
			$result=$emaildata->where($arr)->save($email);
			//发送验证邮件
			$userdata=$m->where($arr)->select();
			$username=$userdata[0]['username'];
			$pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
        	if ( preg_match( $pattern,$data ['email'])){
				$a = SendMail($data ['email'],'工合财富邮箱更改通知','亲爱的 '.$username.'，您好,您重新绑定了账户邮箱：'.$data ['email'].' 。激活邮箱链接:http://'.$_SERVER['SERVER_NAME'].'/index.php?s=/Home/User/emailyz/emailyz/'.$uid.'.html 邮件发送时间： '.date( "l dS of F Y h：i：s A" ).'请在24小时内激活，此邮件由工合财富系统自动发出，请勿直接回复！如果您有任何疑问或建议，可拨打客服电话<b style="color:red;text-decoration:underline">400-123-4567</b>，或者登陆官网：www.ghcf.com.cn');
			}else{
				$this->error('您填写的邮箱不合法',U('Member/Userinfo/usermailbanding'));
			}
			//发送站内信
			$action='修改了新邮箱：'.str_replace(substr($data['email'],3,(strpos($data['email'],'@')-5)),'*****',$data['email']);
			system_msg($action);
			$this->success ( '修改成功！请进入邮箱进行验证');
		} else {
			// 失败提示
			$this->error ( '修改失败！');
		}
	}
	public function userpapersinfo() {
		$this->pagetitle="工合财富直通贷款-个人中心-安全认证-信征认证";
		$this->display ();
	}
	public function userrenewalvip() {
		is_login() || $this->redirect('Home/User/login');
        $uid=is_login();//获取当前用户UID
		$member = M('ucenter_member');//用户验证状态
        $condition2['id'] =$uid;
        $list=$member->field('user_leve,id,username,time_limit')->where($condition2)->select();

        $this->mvip=C('FEE_VIP');
        $this->assign('list', $list);
        $this->pagetitle="工合财富直通贷款-会员续费";
		$this->display ();
	}
	public function userrenewalvip_post($verify = '',$viptime='') {
		$uid=is_login();//获取当前用户UID
		/* 检测验证码 */
		if(!check_verify($verify)){
			$this->success('验证码输入错误！');
		}

		if($viptime ==222){

			// 资金日志记录
			$log = M ( 'z_member_moneylog' );
			$logdata ['uid'] = $uid;
			$logdata ['type'] = 102;
			$logdata ['affect_money'] =0;
			$logdata ['info'] = '会员服务开通试用2天';
			$logdata ['add_time'] = time ();
			$log = $log->add ( $logdata );
			
			//发送站内信
	        $action=$logdata ['info'].$logdata ['affect_money'].'元,请注意资金安全！';
	        system_msg($action);


			$member = M('ucenter_member');//用户验证状态
	        $condition2['id'] =$uid;
	        $t=$member->field('time_limit')->where($condition2)->select();
	        // if($t[0]['time_limit'] > time()){
	        	// $timetext=','.strtotime(date("Y-m-d",$t[0]['time_limit']));
	        // }
	        if($t[0]['time_limit'] <= time()){
	        	$t[0]['time_limit']=time();
	        }
	        
	        $data['user_leve']=1;
	        $data['customer_id']=1;
	        $data['time_limit'] = strtotime ( '+2 days',strtotime(date("Y-m-d",$t[0]['time_limit'])));
	        $list=$member->where($condition2)->save($data);
	        if($list>0){
	        	$this->success('开通试用成功！');
	        }

		}else{


			$mvip=C('FEE_VIP');
			
			$condition3 ['uid'] = $uid;
			$moneydata = M ( "z_member_money" );
			$money = $moneydata->field ( 'account_money' )->where ( $condition3 )->select (); 
			$vipmoney=intval($mvip)*intval($viptime);
			

			

			if(floatval( $money [0] ['account_money'] )<intval($vipmoney)){
				$this->success($vipmoney);
			}
			
			$money =(floatval( $money [0] ['account_money'] ) - floatval($vipmoney)); // 余额减充值金额
			
			$data1 ['account_money'] =$money;
			// 保存当前数据对象
			if (!$result = $moneydata->where ( $condition3 )->save ( $data1 )) { // 保存成功
			     $this->success( '开通失败!' );                                                                                           	
			}
			// 资金日志记录
			$log = M ( 'z_member_moneylog' );
			$logdata ['uid'] = $uid;
			$logdata ['type'] = 102;
			$logdata ['affect_money'] =$mvip;
			$logdata ['info'] = '会员服务开通';
			$logdata ['add_time'] = time ();
			$log = $log->add ( $logdata );
			
			//发送站内信
	        $action=$logdata ['info'].$vipmoney.'元,请注意资金安全！';
	        system_msg($action);


			$member = M('ucenter_member');//用户验证状态
	        $condition2['id'] =$uid;
	        $t=$member->field('time_limit')->where($condition2)->select();
	        // if($t[0]['time_limit'] > time()){
	        	// $timetext=','.strtotime(date("Y-m-d",$t[0]['time_limit']));
	        // }
	        if($t[0]['time_limit'] <= time()){
	        	$t[0]['time_limit']=time();
	        }
	        
	        $data['user_leve']=1;
	        $data['customer_id']=1;
	        $data['time_limit'] = strtotime ( '+'.$viptime.' month',strtotime(date("Y-m-d",$t[0]['time_limit'])));
	        if($viptime==222){
	        	 $data['time_limit'] = strtotime ( '+2 days',strtotime(date("Y-m-d",$t[0]['time_limit'])));
	        }
	        $list=$member->where($condition2)->save($data);
	        if($list>0){
	        	$this->success('开通成功！');

	        }
        } 
		$this->display ();
	}
	public function verify(){
	    ob_clean();//要正常显示验证码，这个是重点！
		$verify = new \Think\Verify();
		$verify->entry(1);
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
	
	/**
	 *
	 * @author liuy
	 *        
	 *         身份证设置2015-1-30
	 */
	public function userselfidcard() {
		// $uid = is_login ();
		// $mstatus = M ( 'z_members_status' );
		// $map['uid']=$uid;

		// $ms = $mstatus ->where ($map)->select ();
		// // var_dump($userinfo);
		// $id_status = $ms [0] ['id_status'];
		// if ($id_status == 0) {
			
		// } elseif ($id_status == 1) {



			
		// } elseif ($id_status == 2) {
		// 	$this->error ( "您还没有进行基本身份认证！", U ( 'Member/Userinfo/userselfset' ) );
		// }
		// dump($id_status);
		// $this->display ();
		$uid = is_login();
		$chk = M ( "z_member_info" );
		$condition ['uid'] = $uid;
		$arr['id']=$uid;
		$memberphpone=M('ucenter_member');
		$phone=$memberphpone->where($arr)->select();
		$cellphone=$phone[0]['mobile'];
		$condition ['cell_phone']=$cellphone;
		$condition['uid']=$uid;
		$arrs['uid']=$uid;
		$m = $chk->where ( $arrs )->select ();
		if ($m !== null) {
			$m = $chk->where ( $arrs )->select ();
			$m[0]['cell_phone']=str_replace(substr($m[0]['cell_phone'],3,-2),'******',$m[0]['cell_phone']);
			if (strlen($m[0]['real_name'])==5){
				$m[0]['real_name']=str_replace(substr($m[0]['real_name'],1,-1),'*',$m[0]['real_name']);
			}if (strlen($m[0]['real_name'])==6){
				$m[0]['real_name']=str_replace(substr($m[0]['real_name'],3),'*',$m[0]['real_name']);
			}if (strlen($m[0]['real_name'])==7){
				$m[0]['real_name']=str_replace(substr($m[0]['real_name'],2,-2),'*',$m[0]['real_name']);
			}if (strlen($m[0]['real_name'])==8){
				$m[0]['real_name']=str_replace(substr($m[0]['real_name'],2,-2),'*',$m[0]['real_name']);
			}if (strlen($m[0]['real_name'])==9){
				$m[0]['real_name']=str_replace(substr($m[0]['real_name'],3,-3),'*',$m[0]['real_name']);
			}if (strlen($m[0]['real_name'])==10){
				$m[0]['real_name']=str_replace(substr($m[0]['real_name'],2,-2),'*',$m[0]['real_name']);
			}if (strlen($m[0]['real_name'])==11){
				$m[0]['real_name']=str_replace(substr($m[0]['real_name'],2,-2),'*',$m[0]['real_name']);
			}if (strlen($m[0]['real_name'])==12){
				$m[0]['real_name']=str_replace(substr($m[0]['real_name'],3,-3),'**',$m[0]['real_name']);
			}if (strlen($m[0]['real_name'])==13){
				$m[0]['real_name']=str_replace(substr($m[0]['real_name'],2,-2),'*',$m[0]['real_name']);
			}if (strlen($m[0]['real_name'])==14){
				$m[0]['real_name']=str_replace(substr($m[0]['real_name'],2,-2),'*',$m[0]['real_name']);
			}if (strlen($m[0]['real_name'])==15){
				$m[0]['real_name']=str_replace(substr($m[0]['real_name'],3,-3),'***',$m[0]['real_name']);
			}
			$m[0]['idcard']=str_replace(substr($m[0]['idcard'],2,-2),'******',$m[0]['idcard']);			
			$this->assign ( 'mlist', $m );

		} else {
			$n = $chk->add ( $condition );			
			$k= $chk->where ( $arrs )->select ();

			$this->assign ( 'mlist', $k );

		}
		
		$this->display ();
	}
	public function userselfset() {
		
		$uid = is_login();
		// 会员审核状态
		$status = M ( 'z_members_status' );
		$condition1['uid']=$uid;
		$st=$status->where($condition1)->select();

			// 会员信息查询
			$chk = M ( "z_member_info" );
			$condition ['uid'] = $uid;
			$arr['id']=$uid;
			$memberphpone=M('ucenter_member');
			$phone=$memberphpone->where($arr)->select();
			$cellphone=$phone[0]['mobile'];
			$condition ['cell_phone']=$cellphone;
			$condition['uid']=$uid;
			$arrs['uid']=$uid;
			$m = $chk->where ( $arrs )->select ();
			if ($m !== null) {
				$m = $chk->where ( $arrs )->select ();
				$m[0]['cell_phone']=str_replace(substr($m[0]['cell_phone'],3,-2),'******',$m[0]['cell_phone']);
				if (strlen($m[0]['real_name'])==5){
					$m[0]['real_name']=str_replace(substr($m[0]['real_name'],1,-1),'*',$m[0]['real_name']);
				}if (strlen($m[0]['real_name'])==6){
					$m[0]['real_name']=str_replace(substr($m[0]['real_name'],3),'*',$m[0]['real_name']);
				}if (strlen($m[0]['real_name'])==7){
					$m[0]['real_name']=str_replace(substr($m[0]['real_name'],2,-2),'*',$m[0]['real_name']);
				}if (strlen($m[0]['real_name'])==8){
					$m[0]['real_name']=str_replace(substr($m[0]['real_name'],2,-2),'*',$m[0]['real_name']);
				}if (strlen($m[0]['real_name'])==9){
					$m[0]['real_name']=str_replace(substr($m[0]['real_name'],3,-3),'*',$m[0]['real_name']);
				}if (strlen($m[0]['real_name'])==10){
					$m[0]['real_name']=str_replace(substr($m[0]['real_name'],2,-2),'*',$m[0]['real_name']);
				}if (strlen($m[0]['real_name'])==11){
					$m[0]['real_name']=str_replace(substr($m[0]['real_name'],2,-2),'*',$m[0]['real_name']);
				}if (strlen($m[0]['real_name'])==12){
					$m[0]['real_name']=str_replace(substr($m[0]['real_name'],3,-3),'**',$m[0]['real_name']);
				}if (strlen($m[0]['real_name'])==13){
					$m[0]['real_name']=str_replace(substr($m[0]['real_name'],2,-2),'*',$m[0]['real_name']);
				}if (strlen($m[0]['real_name'])==14){
					$m[0]['real_name']=str_replace(substr($m[0]['real_name'],2,-2),'*',$m[0]['real_name']);
				}if (strlen($m[0]['real_name'])==15){
					$m[0]['real_name']=str_replace(substr($m[0]['real_name'],3,-3),'***',$m[0]['real_name']);
				}
				$m[0]['idcard']=str_replace(substr($m[0]['idcard'],2,-2),'******',$m[0]['idcard']);			
				$this->assign ( 'mlist', $m );
			} else {
				$n = $chk->add ( $condition );			
				$k= $chk->where ( $arrs )->select ();

				$this->assign ( 'mlist', $k );

			}
		$id_status=$st[0]['id_status'];
		$this->assign('id_status',$id_status);
		$this->pagetitle="工合财富直通贷款-实名认证";
		$this->display ();
	}
	private function AddFile($fileinfo, $depict) {
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
	public function upload() {
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
			if ($this->AddFile ( $info, $depict )) 			// 写入数据库
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
	public function userselfset_add() {
		// 从表单中获取来的数据
		$uid = is_login ();
		
		$m = M ( "z_member_info" );
		$data ['real_name'] = I("post.real_name");
		$data ['idcard'] = I("post.idcard");
		$data ['sex'] = I("post.sex");
		$data ['zy'] = I("post.zy");
		$data ['education'] = I("post.education");
		$data ['city_now'] =I('post.city_now');
		$data ['address'] = I("post.province_now").I('post.city_now').I('post.area_now').I('post.addr_detail');
		$condition ['uid'] = $uid;
		
		// 保存当前数据对象
		if ($m = $m->where ( $condition )->save ( $data )) { // 保存成功
		                                                     // 成功提示
		                                                     // 认证状态表更新字段
			$arr = array (
					"uid" => $uid,
					"id_status" =>2,
			);
			// 更新认证状态
			$status = M ( 'z_members_status' );
			
			// 查询是否已提交过资料
			if ($re = $status->where ( "uid=%s", $uid )->select ()) {
				$result = $status->save( $arr );
				$this->success ( L ( '信息已提交，等待审核！' ) );
			} else {
				// 若没有提交过资料则更新认证状态
				$result = $status->add ( $arr );
				if ($result) {
					$this->success ( L ( '认证资料已上传，等待后台审核...' ) );
				}
			}
		} else {
			// 失败提示
			$this->error ( L ( '您未做任何修改或者修改失败。' ) );
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
	
	/**
	 * 安全设置
	 */
	public function usersaftyset() {
		$this->display ();
	}
	public function usersaftyset_save() {
		if (! is_login ()) {
			$this->error ( '您还没有登陆', U ( 'User/login' ) );
		}
		if (IS_POST) {
			// 获取参数
			$uid = is_login ();
			$password = I ( 'post.old' );
			$repassword = I ( 'post.repassword' );
			$data ['password'] = I ( 'post.password' );
			empty ( $password ) && $this->error ( '请输入原密码' );
			empty ( $data ['password'] ) && $this->error ( '请输入新密码' );
			empty ( $repassword ) && $this->error ( '请输入确认密码' );
			
			if ($data ['password'] !== $repassword) {
				$this->error ( '您输入的新密码与确认密码不一致' );
			}
			
			$Api = new UserApi ();
			$res = $Api->updateInfo ( $uid, $password, $data );
			if ($res ['status']) {
				$this->success ( '修改密码成功！' );
			} else {
				$this->error ( $res ['info'] );
			}
		} else {
			$this->display ();
		}
	}
	public function paypassword() {
		if (! is_login ()) {
			$this->error ( '您还没有登陆', U ( 'User/login' ) );
		}
		$uid = is_login ();
		$m = M ( "ucenter_member" );
		$condition ['id'] = $uid;
		$pin = $m->where ( $condition )->field ( 'pin_pass' )->select ();
		$this->assign ( 'pin', $pin [0] ['pin_pass'] );
		$this->display ();
	}
	public function changepaypassword_save() {
		if (! is_login ()) {
			$this->error ( '您还没有登陆', U ( 'User/login' ) );
		}
		// 获取参数
		$uid = is_login ();
		$oldpassword = I('post.oldpassword');
		$newpassword = I('post.newpassword');
		$repassword = I('post.repassword');
		$m = M ( "ucenter_member" );

		$condition ['id'] = $uid;
		$pin = $m->where ( $condition )->field ( 'pin_pass' )->select ();
		if ($pin [0] ['pin_pass'] == md5($_POST ['oldpassword']) ) {

			$data ['pin_pass'] = md5 ( $_POST ['newpassword'] );
			$result= $m->where($condition)->save($data);
			if ($result) {
				$this->success ( '支付密码修改成功，请注意资金安全',U('Home/User/profile'));
			} else {
				$this->error ( '支付密码修改失败！' );
			}

		} else {
			$this->error ( '原支付密码不正确！' );
		}
		
			
	}	
	public function findpaypassword_save(){
		$mobile_code=I('post.mobile_code');
		$newpassword = I('post.new_ppass');
		$repassword = I('post.re_ppass');
		session_start();
		if($_SESSION['mobile_code'] == $_POST['mobile_code']){
			$m = M ( "ucenter_member" );
			$condition ['id'] =is_login();
			$data ['pin_pass'] = md5 ( $newpassword);
			$result= $m->where($condition)->save($data);
			if ($result) {
				$this->success ( '支付密码修改成功!',U('Home/User/profile'));
			} else {
				$this->error ( '支付密码修改失败！' );
			}
			
		}else{
			$this->error('手机验证码错误，请重新发送。');
		}


	}
	public function sms() {

	if(sendsms($mob,$send_code)){
				$this->success ( '已发送！' );
				// exit();
			}else {
				// 失败提示
				$this->error ( '发送失败' );
			}
	
	}
	public function kf_index() {
		$uid = is_login ();
		// $password = I('post.old');
		// $repassword = I('post.repassword');
		// $data['pin_pass'] = I('post.pin_pas');
		// empty($password) && $this->error('请输入原密码');
		// empty($data['pin_pass']) && $this->error('请输入新密码');
		// empty($repassword) && $this->error('请输入确认密码');
		// 从表单中获取来的数据
		
		$m = M ( "ucenter_member" );
		$condition ['id'] = $uid;
		$pin = $m->where ( $condition )->select ();
		$mqq = M ( "z_qq" );
		$condition1 ['id'] = $pin[0]['customer_id'];
		// $mqqdata = $mqq->where ( $condition )->field ( 'pin_pass' )->select ();
		$mqqdata = $mqq->where ( $condition1 )->select ();
		$mqqlist= $mqq->select ();
		$this->assign ( 'mqq', $mqqdata);
		$this->assign ( 'qqlist', $mqqlist);
		$this->display ();
	}
	

}