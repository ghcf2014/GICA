<?php

namespace Member\Controller;

use Think\Model;

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
		is_login()||$this_>redirect('Home/User/login');
		// 获取邮箱发送地址已经邮箱内容!
		$email = $_POST ['email'];
		$content = $_POST ['content'];
		$uid = is_login (); // 获取当前用户的Id
		$userinfo = M ( 'ucenter_member' );
		$userlist = $userinfo->where ( "id=" . $uid )->select (); // 查询当前用户的信息
		$username = base64_encode ( $userlist [0] ['username'] ); // 对用户名进行md5加密
		$this->assign ( "username", $username );
		
		// 查询当前登录用户的真实姓名
		$arr['uid']=$uid;
		$realName = M ( 'z_member_info' )->where ($arr)->select ();
		if (strlen($m[0]['real_name'])==5){
			$realName [0] ['real_name']=str_replace(substr($realName [0] ['real_name'],1,-1),'*',$realName [0] ['real_name']);
		}if (strlen($realName [0] ['real_name'])==6){
			$realName [0] ['real_name']=str_replace(substr($realName [0] ['real_name'],3),'*',$realName [0] ['real_name']);
		}if (strlen($realName [0] ['real_name'])==7){
			$realName [0] ['real_name']=str_replace(substr($realName [0] ['real_name'],2,-2),'*',$realName [0] ['real_name']);
		}if (strlen($realName [0] ['real_name'])==8){
			$realName [0] ['real_name']=str_replace(substr($realName [0] ['real_name'],2,-2),'*',$realName [0] ['real_name']);
		}if (strlen($realName [0] ['real_name'])==9){
			$realName [0] ['real_name']=str_replace(substr($realName [0] ['real_name'],3,-3),'*',$realName [0] ['real_name']);
		}if (strlen($realName [0] ['real_name'])==10){
			$realName [0] ['real_name']=str_replace(substr($realName [0] ['real_name'],2,-2),'*',$realName [0] ['real_name']);
		}if (strlen($realName [0] ['real_name'])==11){
			$realName [0] ['real_name']=str_replace(substr($realName [0] ['real_name'],2,-2),'*',$realName [0] ['real_name']);
		}if (strlen($realName [0] ['real_name'])==12){
			$realName [0] ['real_name']=str_replace(substr($realName [0] ['real_name'],3,-3),'**',$realName [0] ['real_name']);
		}if (strlen($realName [0] ['real_name'])==13){
			$realName [0] ['real_name']=str_replace(substr($realName [0] ['real_name'],2,-2),'*',$realName [0] ['real_name']);
		}if (strlen($realName [0] ['real_name'])==14){
			$realName [0] ['real_name']=str_replace(substr($realName [0] ['real_name'],2,-2),'*',$realName [0] ['real_name']);
		}if (strlen($realName [0] ['real_name'])==15){
			$realName [0] ['real_name']=str_replace(substr($realName [0] ['real_name'],3,-3),'***',$realName [0] ['real_name']);
		}
		// dump($realName);
		$this->assign ( 'realName', $realName [0] ['real_name'] );
		
		if ($email != '') { // TODO: 发送验证邮件
			$a = SendMail ( $email, '工合财富好友注册通知!', '亲，您好！我是您的好友： ' . $realName [0] ['real_name'] . '!' . $content . ' 邮件发送时间： ' . date ( "l dS of F Y h：i：s A" ) . '如有疑问可以与您的好友进行联系,谢谢!' );
			$this->success ( "邮件发送成功！", U ( 'Friends/friends' ) );
		}
		$friends=M('z_member_friend');
		$f['uid']=$uid;
		$friend_id=$friends->where($f)->select();
		$k=0;
		$v=0;
		$x=0;
		$j=0;
		$d=0;
		$g=0;
		$h=0;
		$i=0;
		$m=0;
		$n=0;
		$z=0;
		foreach ($friend_id as $value) {
			//查询注册信息
			$friends_id['id']=$value['friend_id'];
			$friend_data=$userinfo->where($friends_id)->select();
			//查询投资信息
			$investors=M('z_borrow_investor');
			$investor2=M('z_borrow_investor');
			$investor_uid['investor_uid']=$value['friend_id'];
			//投资总额
			$investor_msg=$investors->where($investor_uid)->field('add_time,investor_capital,sum(investor_capital)')->select();
			//最后一次投资时间
			$investor_time[3]=$investor2->where($investor_uid)->field('add_time')->order('add_time desc')->limit(1)->select();
			// //当天会员投资总额
			$investor3=M('z_borrow_investor');
			$y=date("Y",time());
			$m=date("m",time());
			$d=date("d",time());
			$todays=mktime(0,0,0,$m,$d,$y);
			$torrows=mktime(23,59,59,$m,$d,$y);
			$common['add_time']=array('between',array($todays,$torrows));
			$common['investor_uid']=$value['friend_id'];
			$members_level_day=$friend_data[$k]['member_level'];
			
			if ($members_level_day=="1"){
				$data_money_day=$investor3->where($common)->field('sum(investor_capital)')->select();
				$v=($v+$data_money_day[0]['sum(investor_capital)']);
			}elseif ($members_level_day=="2") {
				
				$data_money_day=$investor3->where($common)->field('sum(investor_capital)')->select();
				$x=($x+$data_money_day[0]['sum(investor_capital)']);
				
			}elseif ($members_level_day=="3") {
				$data_money_day=$investor3->where($common)->field('sum(investor_capital)')->select();
				$j=($j+$data_money_day[0]['sum(investor_capital)']);
			}
			$days_investors['level_1']=$v;
			$days_investors['level_2']=$x;
			$days_investors['level_3']=$j;

			// //当月会员投资总额
			// $d=0;
			// $g=0;
			// $h=0;
			// $i=0;
			$investor4=M('z_borrow_investor');
			$year = date("Y");
			$month = date("m");
			$allday = date("t");
			$strat_time = strtotime($year."-".$month."-1");
			$end_time = (strtotime($year."-".$month."-".$allday)+86399);
			$common1['add_time']=array('between',array($strat_time,$end_time));
			$common1['investor_uid']=$value['friend_id'];
			$members_level_month=$friend_data[$k]['member_level'];
			
			if ($members_level_month=="1"){
				$data_money_month=$investor4->where($common1)->field('sum(investor_capital)')->select();
				$g=($g+$data_money_month[0]['sum(investor_capital)']);
			}elseif ($members_level_month=="2") {
				
				$data_money_month=$investor4->where($common1)->field('sum(investor_capital)')->select();
				$h=($h+$data_money_month[0]['sum(investor_capital)']);
				
			}elseif ($members_level_month=="3") {
				$data_money_month=$investor4->where($common1)->field('sum(investor_capital)')->select();
				$i=($i+$data_money_month[0]['sum(investor_capital)']);
			}
			$month_investors['level_1']=$g;
			$month_investors['level_2']=$h;
			$month_investors['level_3']=$i;


			//会员累计投资总额
			// $d=0;
			// $g=0;
			// $h=0;
			// $i=0;
			$investor5=M('z_borrow_investor');
			
			$common2['investor_uid']=$value['friend_id'];
			$members_level_all=$friend_data[$k]['member_level'];
			
			if ($members_level_all=="1"){
				$data_money_all=$investor4->where($common2)->field('sum(investor_capital)')->select();
				$g=($g+$data_money_all[0]['sum(investor_capital)']);
			}elseif ($members_level_all=="2") {
				
				$data_money_all=$investor4->where($common2)->field('sum(investor_capital)')->select();
				$n=($n+$data_money_all[0]['sum(investor_capital)']);
				
			}elseif ($members_level_all=="3") {
				$data_money_all=$investor4->where($common2)->field('sum(investor_capital)')->select();
				$z=($z+$data_money_all[0]['sum(investor_capital)']);
			}
			$all_investors['level_1']=$g;
			$all_investors['level_2']=$n;
			$all_investors['level_3']=$z;

			
			
			$dd[]=array_merge($friend_data,$investor_msg ,$investor_time);
			$k+1;
		}
		$this->pagetitle="工合财富直通贷款-好友推广";
		$this->assign('days_investors',$days_investors);
		$this->assign('month_investors',$month_investors);
		$this->assign('all_investors',$all_investors);
		$num1=1;
		$num2=1;
		$num3=1;
		$money=0;
		foreach ($dd as $key => $value) {
			// dump($value);
			$level=$value[0]['member_level'];
			if ($level==1){
				$count1=$num1;
				$num1++;
			}elseif ($level==2) {
				$count2=$num2;
				$num2++;
			}elseif ($level==3) {
				$count3=$num3;
				$num3++;
			}
			$arr[1]=$count1;
			$arr[2]=$count2;
			$arr[3]=$count3;
		}
		$this->assign('count',$arr);		
		$this->assign ( "friendList", $dd );
		$this->display ();

	}
	
	/**
	 *
	 * @author liuy
	 *        
	 *         2015-2-13好友的推广管理
	 */
	public function friendsgeneralize() {
		$this->display ();
	}
}
