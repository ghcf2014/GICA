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
		$member_checked=M('z_member_info');
		$memberdata=$member_checked->where('uid=%s',$uid)->select();
		$username=$memberdata[0]['real_name'];
		
		if (($username)==null){
			$this->error('您还未进行基本认证',U('Member/Userinfo/userselfset'));
		}
		$banks_checked =M('z_member_banks');
		$banks_data=$banks_checked->where('uid=%s',$uid)->select();
		$bank_num=$banks_data['0']['bank_num'];
		if ($bank_num==null){
			$this->error('请先绑定银行卡',U('Userinfo/userbankset'));
		}
		$member_info=M('ucenter_member');
		$cell_phone=$member_info->where('id=%s',$uid)->select();
		$this->assign('cell_phone',$cell_phone[0]);
		$this->assign ( 'userinfo',$memberdata);
		$this->pagetitle="工合财富直通贷款-提现详情页";
		$this->assign ( 'bank',$banks_data[0]);
		$this->assign ( 'list', $money);
		$this->display ();

	}
	public function withdrawdeposit_add() {
		// 从表单中获取来的数据
		$uid = is_login ();
		$m = M ( "z_member_withdraw" );
		$dealpwd = $_POST ['dealpwd'];
		$data ['withdraw_money'] = $_POST ['withdraw_money'];
		$data ['withdraw_fee'] = 5;
		$data ['borrow_status'] = 0;
		$data ['uid'] = $uid;
		$data ['add_time'] = time ();
		$data ['add_ip'] = get_client_ip ();
		$condition ['uid'] = $uid;
		
		// 查询当前登录用户信息
		$userinfo = M ( 'ucenter_member' )->where ( 'id=' . $uid )->select ();
		$paypass = $userinfo [0] ['pin_pass']; // 查询用户交易密码

		
		if (md5($dealpwd) != $paypass) {
			$this->error ( L ( '您输入的交易密码有误！' ) );
		} else {
			$moneyMember = M ( 'z_member_money' );
			$memberMoney = $moneyMember->where ( 'uid=' . $uid )->select (); // 提现时扣除可用余额，未进行提现审核通过，冻结金额为提现金额
			if ($memberMoney [0] ['account_money'] < 0) {
				$this->error ( L ( '您的账户余额不足无法提现！' ) );
			}
			
             $account_money = $memberMoney [0] ['account_money']; // 获取用户的可用余额
             $account_money = floatval ( $account_money ) - floatval ( $_POST ['withdraw_money'] ); // 提现时可用余额减少


             // var_dump($account_money);
			if($account_money < 0){
				$this->error ( L ( '您的账户余额不足无法提现！' ) );
			}

			
			$money_freeze = $memberMoney [0] ['money_freeze']; // 获取冻结金
			
			$money_freeze = floatval ( $money_freeze ) + floatval ( $_POST ['withdraw_money'] ); // 提现时冻结金额增加
			$datamoney ['account_money'] = $account_money;
			$datamoney ['money_freeze'] = $money_freeze;
			$count = $moneyMember->where ( "uid=" . $uid )->save ( $datamoney ); // 修改会员金额数据
			if ($count) {
				if ($m = $m->where ( $condition )->add ( $data )) { // 保存成功
					$log = M ( 'z_member_moneylog' );
					$logdata ['uid'] = $uid;
					$logdata ['type'] = 203;
					$logdata ['affect_money'] = $_POST ['account_money'];
					$logdata ['info'] = '提现已冻结'.$_POST ['withdraw_money'];
					$logdata ['add_time'] = time ();
					$log = $log->add ( $logdata );


					//发送站内信
					$type="mention";
                    $action='提现资金'.$_POST ['withdraw_money'].'元，请注意资金安全！';
                    systemmsg($type,$action);

					$this->success ( L ( '提现已提交，我们会尽快审核。' ) ); // 成功提示add_time
				} else {
					// 失败提示
					$this->error ( L ( '提现失败!' ) );
				}
			} else {
				// 失败提示
				$this->error ( L ( '提现失败!' ) );
			}
		}
	}
    public function usermailindex(){
        $sendname=$_SESSION["gica_home"]["user_auth"]['username'];
        $uid=is_login();
        $uid=$_SESSION[gica_home]['user_auth']['uid'];
        $statu['status']=1;
        $system['uid']=$uid;
        $inner['tid']=$uid;
        M('z_inner_msg')->where($inner)->save($statu);
		M('z_system_msg')->where($system)->save($statu);
        $counts =M('z_inner_msg')->where("status=0 and tid=%s",$uid)->count();
        $syscount =M('z_system_msg')->where("status=0 and uid=%s",$uid)->count();
		//系统敏感操作提示消息
		$uid=$_SESSION[gica_home]['user_auth']['uid'];
   		$danger =M('z_system_msg')->where("uid=%s",$uid)->order(array("status=0 desc","add_time desc"))->select();
   		$this->assign('danger',$danger);
        $msg=M('z_inner_msg');
        //收件箱
        $receive=$msg->table('gica_z_inner_msg stats,gica_member profile')->where('stats.uid = profile.uid and stats.tid=%s',$uid)->field('stats.id as id, stats.title as title,stats.status as status,stats.send_time as send_time,stats.msg as msg, profile.nickname as postname')->order('stats.tid desc' )->select();
        //发件箱
        $post=$msg->table('gica_z_inner_msg stats,gica_member profile')->where('stats.tid = profile.uid and stats.uid=%s',$uid)->field('stats.id as id, stats.title as title,stats.send_time as send_time, profile.nickname as recvname')->order('stats.tid desc' )->select();
        

        //系统通知状态查询
        $syssetdata= M('z_systemset');
        $arr['uid']=$uid;
        $sysresult=$syssetdata->where($arr)->select();
        $sum=$sysresult[0];
        if ($sum['sys_msg']==1){
        	$check['sys_msg']="checked";
        }else{
        	$check['sys_msg']=null;
        }
        if ($sum['email_msg']==1){
        	$check['email_msg']="checked";
        }else{
        	$check['email_msg']=null;
        }
        if ($sum['short_msg']==1){
        	$check['short_msg']="checked";
        }else{
        	$check['short_msg']=null;
        }
        $this->assign("check",$check);
        $this->assign('counts',$counts);
        $this->assign('syscount',$syscount);
        $this->assign('receive',$receive);
        $this->assign('post',$post);
        $this->assign('sendname',$sendname);
        $this->assign('uid',$uid);
        $this->pagetitle="工合财富直通贷款-个人中心-消息中心";
	    $this->display();
    }

    
	//系统消息通知设置
    public function systemsetup(){
    	$uid=is_login();
		$data=$_POST;
		if ($data['sys_msg']==null){
			$data['sys_msg']=0;
		}
		if($data['email_msg']==null){
			$data['email_msg']=0;
		}
		if ($data['short_msg']==null){
			$data['short_msg']=0;
		}
		$map['uid']=$uid;
		$map['set_time']=time();
		$map['sys_msg']=$data['sys_msg'];
		$map['email_msg']=$data['email_msg'];
		$map['short_msg']=$data['short_msg'];
		$arr['uid']=$uid;
		$setdata=M('z_systemset');
		$setmsg=$setdata->where($arr)->select();
		$this->pagetitle="工合财富直通贷款-个人中心-消息中心-通知方式";
		if (is_array($setmsg)==true){
			$setresult=$setdata->where($arr)->save($map);
			if ($setresult){
				$this->success('设置成功！');
			}else{
				$this-error('设置失败！');
			}
		}else{
			$setresult=$setdata->add($map);
			if ($setresult){
				$this->success('设置成功！');
			}else{
				$this-error('设置失败！');
			}

		}
		
    }

    //发送私密邮件
    public function usermailindex_add(){
        $username=$_POST['username'];
        // $user = M('gica_member');
        // $data=$user->where("nickname=",$username)->select();
        $usermodel=new Model();
        $sql="select * from gica_member where nickname='{$username}'";
        $data=$usermodel->query($sql);
      
        $tid=$data[0]['uid'];
     
        //查询是否存在收件人信息
        if ($data!==null){
            
            $arr=array(
                "uid"=>$_POST['uid'],
                "tid"=>$tid,
                "title"=>$_POST['title'],
                "msg"=>$_POST['msg'],
                );
            $msg = M('z_inner_msg');
            $result=$msg->add($arr);
            //发送数据 
            if ($result!==null){
                $this->success('发送成功!');
            }else {
                $this->error('发送失败！');
            } 
        }else {
            $this->error('对不起，收件人不存在！请重新确认再发送');
        }
        
    }

    /*
		*********删除系统消息
    */
    public function usermailindex_danger_del($id=0){
       $danger=M('z_system_msg');
       $result=$danger->where('id=%s',$id)->delete();
       if ($result!==null){
       		$this->redirect('Member/System/usermailindex');
       } else {
       		$this->error('删除失败！',U('Member/System/usermailindex'));
       }
    }
       /*
		*********删除邮件消息
    */
    public function usermailindex_email_del($id=0){
       $email=M('z_inner_msg');
       $result=$email->where('id=%s',$id)->delete();
       if ($result!==null){
       		$this->redirect('Member/System/usermailindex');
       } else {
       		$this->error('删除失败！',U('Member/System/usermailindex'));
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

		$banks_checked =M('z_member_banks');
		$banks_data=$banks_checked->where('uid=%s',$uid)->select();
		$bank_num=$banks_data['0']['bank_num'];
		if ($bank_num==null){
			$this->error('请先绑定银行卡',U('Userinfo/userbankset'));
		}
		$this->assign('memberdata',$memberdata[0]);
		$this->assign('banksdata',$banks_data[0]);
		$this->pagetitle="工合财富直通贷款-充值详情页";
		$this->display ();
	}
	public function recharge_post() {
		 $uid = is_login (); // 获取当前登录用户ID
		 $Amount = $_POST ['money'];

		 $MD5key =C('HC_MD5KEY');
		 	//MD5私钥
	     $MerNo = C('HC_MERNO');					//商户号
	     $BillNo =date("his");		//[必填]订单号(商户自己产生：要求不重复)
	     // $Amount = "0.02";				//[必填]订单金额
	     $ReturnURL = "http://".$_SERVER['SERVER_NAME']."/Member/System/payresult?uid=".$uid; 			//[必填]返回数据给商户的地址(商户自己填写):
	     $Remark = "";  //[选填]升级。
	    $md5src = $MerNo."&".$BillNo."&".$Amount."&".$ReturnURL."&".$MD5key;		//校验源字符串
	    $SignInfo = strtoupper(md5($md5src));		//MD5检验结果
		 $AdviceURL ="http://".$_SERVER['SERVER_NAME']."/Member/System/payresult?uid=".$uid;   //[必填]支付完成后，后台接收支付结果，可用来更新数据库值;和ReturnURL接受的支付结果是一样的，这个是异步接受的。
		 $orderTime ="";   //[必填]交易时间YYYYMMDDHHMMSS
		 $defaultBankNumber ="CCBSH";   //[选填]银行代码s 
		 //送货信息(方便维护，请尽量收集！如果没有以下信息提供，请传空值:'')
		 //因为关系到风险问题和以后商户升级的需要，如果有相应或相似的内容的一定要收集，实在没有的才赋空值,谢谢。
	    $products="金额充值";// '------------------物品信息


	    if(IS_POST){ 
			// if($BillNo != ''){
				$payinfo=M('z_member_payonline');
				$data['money']=$Amount;
				$data['status']=$Result;
				$data['tran_id']=$BillNo;
				$data['add_time']=time();
				$data['add_ip']== get_client_ip ();
				$data['way']=1;
				$data['off_bank']=$_POST ['banks'];
				$data['uid']=$uid;
				// $payinfo=$payinfo->where($map)->add(data);
				if(!$pay=$payinfo->add($data)){
					$this->error('订单号新建失败');
				}
			// } 
		}

	    $this->MD5key=$MD5key;
	    $this->MerNo=$MerNo;
	    $this->BillNo=$BillNo;
	    $this->Amount=$Amount;
	    $this->ReturnURL=$ReturnURL;
	    $this->Remark=$Remark;
	    $this->md5src=$md5src;
	    $this->SignInfo=$SignInfo;
	    $this->AdviceURL=$AdviceURL;
	    $this->orderTime=$orderTime;
	    $this->defaultBankNumber=$defaultBankNumber;
	    $this->products=$products;


	    $data['MD5key']=$MD5key;
	    $data['MerNo']=$MerNo;
	    $data['BillNo']=$BillNo;
	    $data['Amount']=$Amount;
	    $data['ReturnURL']=$ReturnURL;
	    $data['Remark']=$Remark;
	    $data['md5src']=$md5src;
	    $data['SignInfo']=$SignInfo;
	    $data['AdviceURL']=$AdviceURL;
	    $data['orderTime']=$orderTime;
	    $data['defaultBankNumber']=$defaultBankNumber;
	    $data['products']=$products;

	    
	    if($this->a1=$_POST['bid'] != ''){$this->ajaxReturn($data);}
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
		                                                                                                        
			// 资金日志记录
			$log = M ( 'z_member_moneylog' );
			$logdata ['uid'] = $uid;
			$logdata ['type'] = 102;
			$logdata ['affect_money'] = $_POST ['account_money'];
			$logdata ['info'] = '在线充值';
			$logdata ['add_time'] = time ();
			$log = $log->add ( $logdata );
			
			//发送站内信
			$type="rechar";
	        $action=$logdata ['info'].$_POST['account_money'].'元,请注意资金安全！';
	        systemmsg($type,$action);
			$this->success ( '线下充值金额已提交! ' );
		} else {
			// 失败提示
			$this->error ( '充值失败!' );
		}
	}
	public function payresult($uid=0) {
	//MD5私钥
	$MD5key = C('HC_MD5KEY');

	//订单号
	$BillNo = $_POST["BillNo"];
	//金额
	$Amount = $_POST["Amount"];
	//支付状态
	$Succeed = $_POST["Succeed"];
	//支付结果
	$Result = $_POST["Result"];
	//取得的MD5校验信息
	$SignMD5info = $_POST["SignMD5info"]; 
	//备注
	$Remark = $_POST["Remark"];

		if(IS_POST){ 
			// if($BillNo != ''){
				$payinfo=M('z_member_payonline');
				// $data['money']=$Amount;
				$data['status']=$Succeed;
				$map['tran_id']=$BillNo;
				// $data['add_time']=time();
				// $map['uid']=$uid;
				// $payinfo=$payinfo->where($map)->add(data);
				if(!$pay=$payinfo->where($map)->save($data)){
					$this->error('充值失败');
				}


				//影响会员资金
				$condition ['uid'] = $uid;
				$money = M ( "z_member_money" );
				$money = $money->field ( 'account_money' )->where ( $condition )->select (); // 余额查询
				
				$m1 = M ( "z_member_money" );
				$money = floatval( $money [0] ['account_money'] ) +floatval($Amount); // 余额加充值金额
				$data1 ['account_money'] = $money;
				

				// 保存当前数据对象
				if ($m1 = $m1->where ( $condition )->save ( $data1 )) { // 保存成功
				                                                                                                        
				// 资金日志记录
				$log = M ( 'z_member_moneylog' );
					$logdata ['uid'] = $uid;
					$logdata ['type'] = 102;
					$logdata ['affect_money'] =floatval($Amount);
					$logdata ['info'] = '在线充值';
					$logdata ['add_time'] = time ();
					$log = $log->add ( $logdata );
					
					//发送站内信
					$type="rechar";
			        $action=$logdata ['info'].floatval($Amount).'元,请注意资金安全！';
			        systemmsg($type,$action);
				} 
		}

	$this->MD5key=$MD5key;
	$this->BillNo =$BillNo;
	$this->Amount=$Amount;
	$this->Succeed=$Succeed;
	$this->Result=$Result;
	$this->SignMD5info=$SignMD5info;
	$this->Remark=$Remark;

	//校验源字符串
  	$md5src = $BillNo."&".$Amount."&".$Succeed."&".$MD5key;
  	//MD5检验结果
	$md5sign = strtoupper(md5($md5src));
	$this->md5sign=$md5sign;
	$this->display ();
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