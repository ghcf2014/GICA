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
		// $uid = is_login (); // 获取当前用户UID
		// $borrow_info = M ( 'z_borrow_info' );
		// $condition ['borrow_uid'] = $uid;
		// $condition ['id'] = $id;

		// $borrow_info = $borrow_info->where ( $condition )->select ();


		// if ($borrow_info[0]["repayment_type"] == 5) {
	 //        for($i=1;$i<=intval ($borrow_info[0]['total']);$i++){

	 //        	$huan[$i]['lixi'] =round(doubleval($borrow_info[0]["repayment_money"])/intval ($borrow_info[0]['total']),2);
	 //        	// $huan[$i]['yingxi'] =((intval ( $borrow_info[0]["borrow_money"] ) * (intval ( $borrow_info[0]["borrow_interest_rate"] ) / 100 / 12) * pow ( (1 + (intval ( $borrow_info[0]["borrow_interest_rate"] ) / 100 / 12)), $i ) / (pow ( (1 + (intval ( $borrow_info[0]["borrow_interest_rate"] ) / 100 / 12)), $i ) - 1)) * $i - intval ( $borrow_info[0]["borrow_money"] ));
	 //        	$huan[$i]['yubenxi'] = round(doubleval($borrow_info[0]["repayment_money"])-((doubleval($borrow_info[0]["borrow_money"]) * (doubleval( $borrow_info[0]["borrow_interest_rate"] ) / 100 / 12) * pow ( (1 + (doubleval( $borrow_info[0]["borrow_interest_rate"] ) / 100 / 12)), doubleval( $borrow_info[0]['total']) ) / (pow ( (1 + (doubleval( $borrow_info[0]["borrow_interest_rate"] ) / 100 / 12)), doubleval($borrow_info[0]['total']) ) - 1)) * $i),2);

	 //        	$t=$i;
	 //        	$huan[$i]['time'] =strtotime('+ '.$t.' months',strtotime(''.date("Y-m-d",''.$borrow_info[0]["add_time"].'').''));
	 //        }
		// }
  // 	       if ($borrow_info[0]["repayment_type"] == 6) {
	 //        for($i=1;$i<=intval ($borrow_info[0]['total']);$i++){
		// 		// $huan[$i]['lixi'] =intval ( $borrow_info[0]["borrow_money"] )*(intval ($borrow_info[0]["borrow_interest_rate"] ) / 100 / 12)*$i;
		// 		$huan[$i]['lixi'] =intval ( $borrow_info[0]["borrow_money"] )/intval ($borrow_info[0]['total']);
		// 		$t=$i+1;
		// 		$huan[$i]['time'] =strtotime('+ '.$t.' months',strtotime(''.date("Y-m-d",''.$borrow_info[0]["add_time"].'').''));


		// 		$huan[$i]['has_pay'] =2;
		// 		 // date('Y-m-d',strtotime('+1 d',strtotime('2009-07-08')));
		// 	}
		// 	$huan[1]['lixi'] =intval ($huan[0]['lixi'])+intval ( $borrow_info[0]["borrow_money"] )*(intval ($borrow_info[0]["borrow_interest_rate"] ) / 100 / 12)*$i;
		// }
		// // dump($huan);



		// $this->bid =$borrow_info[0]['id'];
		// $this->assign ( 'huan', $huan);
		// $this->assign ( 'list', $borrow_info );

		// $uid = is_login (); 
		// $detail = M ( 'z_investor_detail');
		// $condition ['borrow_id'] = $id;
		// $detail= $detail->where ( $condition )->select ();
		// // $condition ['sort_order'] = 1;
		// // $detail = $detail->where ( $condition )->select ();

		// for($i=1;$i<=intval($detail[0]['total']);$i++){
			
		// 	$detail1 = M ('z_investor_detail');
		// 	$condition1 ['sort_order'] = $i;
		//     $condition1 ['borrow_id'] = $id;
		//     $dd[$i]= $detail1->field ( 'id,sum(capital)capital,sum(interest)interest,repayment_time,deadline,receive_capital')->where ( $condition1 )->group ('sort_order')->select();
		//     // $depict ['repayment_money'] = (floatval ( $_POST ["borrow_money"] ) * (floatval ( $_POST ["borrow_interest_rate"] ) / 100 / 12) * pow ( (1 + (floatval ( $_POST ["borrow_interest_rate"] ) / 100 / 12)), floatval ( $_POST ["borrow_duration"] ) ) / (pow ( (1 + (floatval ( $_POST ["borrow_interest_rate"] ) / 100 / 12)), floatval ( $_POST ["borrow_duration"] ) ) - 1)) * floatval ( $_POST ["borrow_duration"] );
		// }

		// $uid = is_login (); 
		// $detail = M ( 'z_borrow_info');
		// $condition ['id'] = $id;
		// $detail= $detail->where ( $condition )->select ();
		// // $condition ['sort_order'] = 1;
		// // $detail = $detail->where ( $condition )->select ();

		// for($i=1;$i<=intval($detail[0]['total']);$i++){
			
		// 	$detail1 = M ('z_borrow_info');
		//     $condition1 ['id'] = $id;
		//     $dd= $detail1->where ( $condition1 )->select();

		// 	$detail2 = M ('z_investor_detail');
		// 	$condition2 ['sort_order'] = $i;
		//     $condition2 ['borrow_id'] = $id;
		//     $de[$i]= $detail2->field ( 'id,sum(capital)capital,sum(interest)interest,repayment_time,deadline,receive_capital')->where ( $condition2 )->group ('sort_order')->select();
                      

		//     $depict [$i]['repayment_money'] = (floatval ( $dd[0]["borrow_money"]) * (floatval ( $dd[0]["borrow_interest_rate"] ) / 100 / 12) * pow ( (1 + (floatval ( $dd[0]["borrow_interest_rate"] ) / 100 / 12)), floatval ( $dd[0]["borrow_duration"] ) ) / (pow ( (1 + (floatval ( $dd[0]["borrow_interest_rate"] ) / 100 / 12)), floatval ( $dd[0]["borrow_duration"] ) ) - 1)) * floatval ($i);
		   

		//     // $depict [$i]['yuehailx'] =round(((floatval ( $dd[0]["borrow_money"] ) * (floatval ( $dd[0]["borrow_interest_rate"] ) / 100 / 12) * pow ( (1 + (floatval ( $dd[0]["borrow_interest_rate"] ) / 100 / 12)), floatval ($dd[0]["borrow_duration"]) ) / (pow ( (1 + (floatval ( $dd[0]["borrow_interest_rate"] ) / 100 / 12)), floatval ($i) ) - 1)) * floatval ($dd[0]["borrow_duration"])-floatval ( $dd[0]["borrow_money"] )),2);
		   

  //           // $depict [$i]['yuehailx'] = floatval( $dd[0]["borrow_money"] )*(floatval ( $dd[0]["borrow_interest_rate"])/100/12)*(pow(1 + (floatval($dd[0]["borrow_interest_rate"])/100/12),floatval($dd[0]["borrow_duration"]))-(pow(1+(floatval ( $dd[0]["borrow_interest_rate"] ) / 100 / 12), (floatval ($i) - 1))) / (pow(1 + (floatval ( $dd[0]["borrow_interest_rate"])/100/12),floatval($dd[0]["borrow_duration"]))-1);

   
  //           // 利息
  //           $depict [$i]['yuehailx'] =100000*(0.05/12)*(pow(1+(0.05/12),5)-(pow(1+(0.05/12),$i-1)))/(pow(1+(0.05/12),5)-1);

		//     $depict [$i]['yuehaibx']=round((floatval ($depict [$i]['repayment_money'])-floatval ($depict [$i-1]['repayment_money'])),2);
		//     $depict [$i]['daihaibx']=round((floatval ( $dd[0]["repayment_money"] )-floatval ($depict [$i]['repayment_money'])),2);
		//     // $depict [$i]['repayment_time']=$de[$i][0]["repayment_time"];
		    
		//     $depict [$i]['repayment_time']=strtotime('+ '.$i.' months',strtotime(''.date("Y-m-d",''.$dd[0]["full_time"].'').''));
		// }

		// dump($de);

        $condition1 ['id'] = $id;
        $binfo =M('z_borrow_info')->where($condition1)->select();
        
		$this->borrow_status=$binfo[0]['borrow_status'];
		// $this->assign('list',$depict);
		$this->assign('list1',$binfo);

		$detail = M ('z_investor_detail');
		$condition1 ['sort_order'] = $i;
	    $condition ['borrow_id'] =$id;

	    $de= $detail->field ( 'id,borrow_id,sum(capital)capital,sum(interest)interest,repayment_time,deadline,receive_capital,status')->where ( $condition )->group ('sort_order')->select();





		$this->assign('list',$de);
		$this->display();
	}
	public function reimbursement_del($bid='',$id='',$m='') {

        $detail = M ('z_investor_detail');
		$condition['sort_order'] =$id;
	    $condition['borrow_id'] =$bid;

	    $de= $detail->field ( 'id,investor_uid,capital,interest,repayment_time,deadline,receive_capital')->where ( $condition )->select();
	    $dee= $detail->field ( 'id,borrow_id,investor_uid,sum(capital)capital,repayment_time,deadline,receive_capital')->where ( $condition )->group ('investor_uid')->select();

        $ccc=count($dee);
        for($i=0;$i<=(intval ($ccc)-1);$i++){

        	$cm=floatval($dee[$i]['capital'])+floatval($dee[$i]['capital']);

        }
	    

	    $map['id']  =$dee[0]['borrow_id'];
        $binfo =M('z_borrow_info')->where($map)->select();
        $map1['uid']  =$binfo[0]['borrow_uid'];
        $mbinfo =M('z_member_money')->where($map1)->select();

        $data['money']=floatval($mbinfo[0]['account_money'])-floatval($cm);

        M('z_member_money')->where(array('uid'=>$binfo[0]['borrow_uid']))->setField(array('account_money'=>floatval($data['money'])));

     //    dump($data['money']);
	    // exit();

        for($i=0;$i<=(intval ($ccc)-1);$i++){
	    $data[$i]['investor_uid'] =$dee[$i]['investor_uid'];
	    

	    
	    $member_money = M ('z_member_money');
	    $money=$member_money->where(array('uid'=>$data[$i]['investor_uid']))->select();
        $data[$i]['money']=floatval($dee[$i]['interest'])+floatval($dee[$i]['capital'])+floatval($money[0]['account_money']);

	    M('z_member_money')->where(array('uid'=>$money[0]['uid']))->setField(array('account_money'=>floatval($data[$i]['money'])));
	    // dump($money);


	    }
	    
        // exit();

        $cc=count($de);

        for($i=0;$i<=(intval ($cc)-1);$i++){
	    $data[$i]['id'] =$de[$i]['id'];
	    //还款详情资金状态变化
        M('z_investor_detail')->where(array('id'=>$data[$i]['id']))->setField(array('status'=>7,'deadline'=>time(),'receive_capital'=>$de[$i]['capital'],'receive_interest'=>$de[$i]['interest']));
        }

		// $condition ['id'] = $_POST['bid'];
		// $m= $_POST['bid2'];
		// $hi= $_POST['hi'];
		// $re = M ( 'z_borrow_info' );
		// $b=$re->where($condition)->select();

		// $borrow_info =M('z_borrow_info');
		// for($i=1;$i<=intval ($b[0]['total']);$i++){
		//  	if($i==$hi){
		//  		$depict[$i]['has_pay']=$hi;
		//  	}

		//  }

		// $where['id'] =$condition ['id'];
		// // $where['id'] = array('in','1,2,3');
		// $data['receive_capital'] =$m;
		// $data['deadline'] = time();
		// $result=M('z_investor_detail')->where($where)->data($data)->save();
		// $resultinfo=M('z_investor_detail')->where($where)->select();

		// //关联borrow_info数据
		// $bwhere['id'] =$resultinfo[0]['borrow_id'];
		// $binfo =M('z_borrow_info')->where($bwhere)->select();
		// $bdata['has_pay'] =intval($binfo[0]['has_pay'])+1;
		// $bresult=M('z_borrow_info')->where($bwhere)->data($bdata)->save();

		// $data ['has_pay'] = serialize ($depict);
		// $data ['repayment_ed_money'] =(floatval($b[0]['repayment_ed_money'])+floatval($m));

		// var_dump($b[0]['repayment_ed_money']);

		$this->success ('还款成功');

		//2015-2-3
		// foreach ( $fileinfo as $vo ) {
		// 	$data [$i] ['updata'] = $vo ['savepath'] . $vo ['savename'];
		// 	$i ++;
		// }


		// for($i=0;$i<=$stcount;$i++)
  //       {
  //          $p1=$st[$i]['id'];
  //          $pp.=$p1.',';
  //       }
  //       $pp=rtrim($pp, ",");

		// $b[0]['repayment_ed_money']+$_POST['bid']

		// $data ['has_pay'] =;
		// $depict ['updata'] = serialize ( $data );
        // $data['borrow_status']=$binfo[0]['borrow_status'];

		// $data['deadline']=$result[0]['deadline'];
  //       $data['m']=$result[0]['receive_capital'];
		// $data['msg']='还款成功';
		// $data['money']=$b[0]['repayment_ed_money'];
		
		// $data['bid']=$_POST['bid'];
		// if($result=$borrow_info->where($condition)->save($data)){
		// 	if($this->a1=$_POST['bid'] != ''){$this->ajaxReturn($data);}
		// }
		
	}
	public function reimbursement_huan($id=0) {
		$uid = is_login (); // 获取当前用户UID
		$borrow_info = M ( 'z_borrow_info' );
		$condition ['borrow_uid'] = $uid;
		$condition ['id'] = $id;
		$borrow_info = $borrow_info->where ( $condition )->select ();

        //  if ($borrow_info[0]["repayment_type"] == 5) {
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