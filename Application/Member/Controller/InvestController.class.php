<?php

namespace Member\Controller;

use OT\DataDictionary;
use Think\Controller;
use User\Api\UserApi;

class InvestController extends MemberController {
	public function index() {
		/* 用户登录检测 */
		// is_login() || $this->error('您还没有登录，请先登录！', U('Home/User/login'));
		// $uid = is_login();//获取当前用户UID
		// $listMember = M('member');
		// $condition['uid'] =$uid;
		// $list = $listMember->where($condition)->select();
		// $this->assign('list', $list);
		// $this->display();
		is_login () || $this->error ( '您还没有登录，请先登录！', U ( 'Home/User/login' ) );
		$uid = is_login (); // 获取当前用户UID
		
		$listMember = M ( 'member' );
		$condition ['gica_member.uid'] = $uid;
		$list = $listMember->join ( 'RIGHT JOIN gica_ucenter_member ON gica_member.uid = gica_ucenter_member.id' )->join ( 'RIGHT JOIN gica_z_member_money ON gica_member.uid = gica_z_member_money.uid' )->where ( $condition )->select ();
		
		// 投资总额查询
		$lists2_uid ['investor_uid'] = $uid;
		$lists2 = D ( 'z_borrow_investor' )->field ( 'sum(investor_capital)investor_capital' )->where ( $lists2_uid )->order ( 'investor_capital desc' )->group ( 'investor_uid' )->select ();
		$lists3_uid ['borrow_uid'] = $uid;
		$lists3 = D ( 'z_borrow_info' )->field ( 'sum(borrow_money)borrow_money' )->where ( $lists3_uid )->group ( 'borrow_uid' )->select ();
		
		$m = M ( 'ucenter_member' ); // 用户头像
		$condition1 ['gica_ucenter_member.id'] = $uid;
		$m = $m->where ( $condition1 )->select ();
		
		$this->assign ( 'list', $list );
		$this->assign ( 'list2', $lists2 );
		$this->assign ( 'borrow_money', $lists3 );
		$this->assign ( 'list3', $m );
		var_dump ( $lists2 );
		$this->display ();
	}
	// 文件信息写入数据库
	private function AddFile($fileinfo, $depict) {
		$i = 0;
		// var_dump($fileinfo);
		$uid = is_login ();
		$dateline = date ( "Y-m-d H:m:s" );
		$file = M ( 'ucenter_member' );
		$condition ['id'] = $uid;
		foreach ( $fileinfo as $vo ) {
			$data ['logo_url'] = $vo ['savepath'] . $vo ['savename'];
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
				// $this->error('写入数据库失败');
			}
		}
		
		// $upload = new \Think\Upload();// 实例化上传类
		// $upload->maxSize = 3145728 ;// 设置附件上传大小
		// $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		// $upload->rootPath = './Uploads/'; // 设置附件上传根目录
		// $upload->savePath = ''; // 设置附件上传（子）目录
		// // 上传文件
		// $info = $upload->upload();
		// if(!$info) {// 上传错误提示错误信息
		// $this->error($upload->getError());
		// }
		// else{// 上传成功
		// $info['savepath'].$info['savename'];
		// var_dump($info);
		// $model = M('z_member_data_info');
		// // 取得成功上传的文件信息
		// $info = $upload->upload();
		// // 保存当前数据对象
		// $data['data_url'] = $info[0]['savename'];
		// // $data['create_time'] = NOW_TIME;
		// $model->save($data);
		// var_dump($data);
		// // $this->success('上传成功！');
		// }
	}
	// 文件信息查看
	public function view() {
		$file = M ( 'ucenter_member' );
		
		$count = $file->count ();
		
		$pageone = 20;
		
		$orderby ['id'] = 'desc';
		
		$Page = new \Think\Page ( $count, $pageone );
		
		$show = $Page->show ();
		
		$data = $file->order ( $orderby )->limit ( $Page->firstRow . ',' . $Page->listRows )->select ();
		
		$this->assign ( 'data', $data );
		
		$this->assign ( 'show', $show );
		
		$this->display ();
	}
	// 文件信息管理
	public function manage() {
		$file = M ( 'ucenter_member' );
		
		$count = $file->count ();
		
		$pageone = 20;
		
		$orderby ['id'] = 'desc';
		
		$Page = new \Think\Page ( $count, $pageone );
		
		$show = $Page->show ();
		
		$data = $file->order ( $orderby )->limit ( $Page->firstRow . ',' . $Page->listRows )->select ();
		
		$this->assign ( 'data', $data );
		
		$this->assign ( 'show', $show );
		
		$this->display ();
	}
	// 文件下载
	function download() {
		$id = $_GET ['id'];
		$file = M ( 'ucenter_member' );
		$data = $file->find ( $id );
		$filepath = $data ['filepath'];
		$file_name = $data ['filename'];
		$file_path = "./Uploads/" . $filepath . $file_name;
		// echo $file_path;
		// 转码，文件名转为gb2312解决中文乱码
		$file_name = iconv ( "utf-8", "gb2312", $file_name );
		$file_path = iconv ( "utf-8", "gb2312", $file_path );
		$fp = fopen ( $file_path, "r" ) or exit ( "文件不存在" );
		// 定义变量空着每次下载的大小
		$buffer = 1024;
		// 得到文件的大小
		$file_size = filesize ( $file_path );
		// header("Content-type:text/html;charset=gb2312");
		// 会写用到的四条http协议信息
		header ( "Content-type:application/octet-stream" );
		header ( "Accept-Ranges:bytes" ); // 可以忽略
		header ( "Content-Length: " . $file_size ); // 原文这里是Accept-Length经查阅http协议无此项
		header ( "Content-Disposition:attachment;filename=" . $file_name );
		// 字节技术器，纪录当前现在字节数
		$count = 0;
		while ( ! feof ( $fp ) && $file_size - $count > 0 ) {
			// 从$fp打开的文件流中每次读取$buffer大小的数据
			$file_data = fread ( $fp, $buffer );
			$count += $buffer;
			// 将读取到的数据读取出来
			echo $file_data;
		}
		// 关闭文件流
		fclose ( $fp );
	}
	// 文件编辑页面
	public function updateFilePage() {
		$id = is_login ();
		
		$model = M ( "ucenter_member" );
		
		$data = $model->find ( $id );
		
		// echo $model->getLastSql();
		$this->assign ( 'data', $data );
		
		$this->display ();
	}
	// 修改文件信息
	public function updateFile() {
		$model = M ( "z_member_data_info" );
		$data ['uid'] = is_login (); // 获取当前用户UID
		var_dump ( $data ['uid'] );
		$data ['data_url'] = $_POST ['file'];
		// $data['depict']=$_POST['depict'];
		
		$num = $model->save ( $data );
		
		if ($num > 0)
			$this->success ( "修改成功" );
		
		else {
			$this->error ( "修改失败" );
		}
	}
	// 删除文章
	public function deleteFile() {
		$id = $_GET ['id'];
		
		$model = M ( "ucenter_member" );
		
		$data = $model->find ( $id );
		$filepath = $data ['filepath'];
		$file_name = $data ['filename'];
		$file_path = "./Uploads/" . $filepath . $file_name;
		
		if (unlink ( $file_path )) {
			$num = $model->delete ( $id );
			if ($num > 0) {
				
				$this->success ( "删除成功", "/fileupload/index.php/Home/Index/manage" );
			}
		}
		
		// $this->assign('data',$data);
		// $this->display();
	}
	public function test() {
		$data = I ( 'post.all_school' );
		$this->ajaxReturn ( $data );
	}
	public function investindex($st=0) {
		$uid = is_login (); // 获取当前用户UID
		
		$status['borrow_status'] = $st;
		if($st == 0){
        	$status='';
        }
        $st= M ( 'z_borrow_info' );
        $stcount=$st->where($status)->count ();
        $st=$st->field ('id')->where($status)->select();

		for($i=0;$i<=$stcount;$i++)
        {
           $p1=$st[$i]['id'];
           $pp.=$p1.',';
        }
        $pp=rtrim($pp, ",");
        if($pp == ''){
        	$pp=00;
        }
		$borrow_info = M ( 'z_borrow_investor' );

        if($this->a1=$_POST['bid'] != ''){$this->ajaxReturn($data);}

        $count = $borrow_info->field ( 'borrow_uid,borrow_id,sum(investor_capital)investor_capital,sum(investor_interest)investor_interest,deadline,add_time,invest_fee' )->where (array('investor_uid ='.$uid,'borrow_id in ('.$pp.')'))->order ( 'id asc', 'invest_fee desc', 'add_time desc' )->group ( 'borrow_id' )->count();
        $Page = new \Think\Page($count, 10);
        $show = $Page->show();
        $borrow_info = $borrow_info->field ( 'borrow_uid,borrow_id,sum(investor_capital)investor_capital,sum(investor_interest)investor_interest,deadline,add_time,invest_fee' )->where (array('investor_uid ='.$uid,'borrow_id in ('.$pp.')'))->order ( 'id asc', 'invest_fee desc', 'add_time desc' )->group ( 'borrow_id' )->limit(($Page->firstRow.',').$Page->listRows)->select();
		$this->assign('page', $show);


        $this->pagetitle="工合财富直通贷款-投资记录";
		$this->assign ( 'list', $borrow_info );
		$this->display ();
	}
	public function investindex_ajax() {
		$uid = is_login (); // 获取当前用户UID
		$borrow_info = M ( 'z_borrow_investor' );
		// $condition ['investor_uid'] = $uid;
		$condition ['borrow_id'] = $_POST['bid'];
		$borrow_info = $borrow_info->field ( 'borrow_uid,borrow_id,sum(investor_capital)investor_capital,sum(investor_interest)investor_interest,deadline,add_time,invest_fee' )->where ( $condition )->order ( 'id desc')->group ( 'borrow_id' )->select ();

		// $data['bid']=$_POST['bid'];
		$borrow_info1 = M ( 'z_borrow_info' );
		// $condition ['investor_uid'] = $uid;
		$condition1['id'] = $_POST['bid'];
		$borrow_info1 = $borrow_info1->where ($condition1)->select ();


		// $data=$borrow_info[0];
		$data=$borrow_info1[0]+$borrow_info[0];

		$data['repayment_type']=get_repayment_type($borrow_info1[0]['repayment_type']);
		$data['get_borrow_name']=get_borrow_name($borrow_info1[0]['id']);
		$data['yingshou']=intval($borrow_info[0]['investor_capital'])+intval($borrow_info[0]['investor_interest']);
		$data['deadline']=time_format($borrow_info[0]['deadline'],$format = 'Y-m-d');
		$data['add_time']=time_format($borrow_info[0]['add_time'],$format = 'Y-m-d');

		// $this->assign ( 'binfo', $borrow_info );
		// $this->assign ( 'binfo1', $borrow_info1 );
        if($this->a1=$_POST['bid'] != ''){$this->ajaxReturn($data);}
	
	}
	public function borrowmanager() {
		$uid = is_login (); // 获取当前用户UID
		$borrow_info = M ( 'z_borrow_info' );
		$condition ['borrow_uid'] = $uid;
		$borrow_info = $borrow_info->where ( $condition )->select ();
		
		$this->assign ( 'list', $borrow_info );
		$this->display ();
	}
	public function borrowprotocol($id = 0) {
		
		/* 标识正确性检测 */
		if (! ($id && is_numeric ( $id ))) {
			$this->error ( '投标ID错误,协议打开失败！' );
		}
		
		$map = array (
				'id' => $id 
		);
		$uid = is_login (); 
		$listBorrow = M ( 'z_borrow_info' );
		$blist = $listBorrow->where ( $map )->select ();
		$listinvestor = M ( 'z_borrow_investor' );
		$iuid['investor_uid'] =$uid;
		$iuid['borrow_id'] =$id;
		$ilist = $listinvestor->field('investor_uid,sum(investor_capital)investor_capital,borrow_uid,sum(investor_interest)investor_interest')->where($iuid)->group('investor_uid')->select();

		$ilists = $listinvestor->where($iuid)->select();

		$detail = M ('z_investor_detail');
	    $condition ['borrow_id'] =$id;
	    $condition ['investor_uid'] =$uid;
	    $b_id ['borrow_id'] =$id;


	    $de= $detail->field ( 'id,borrow_id,sum(capital)capital,sum(interest)interest,repayment_time,deadline,receive_capital,status,receive_interest')->where ( $condition )->group ('sort_order')->select();

		$this->assign('ilistd',$de);

		$this->iuid=$ilist[0]['investor_uid'];
		$this->buid=$ilist[0]['borrow_uid'];
		$this->bid=$id;
		$this->borrow_interest_rate=$blist[0]['borrow_interest_rate'];
		$this->borrow_duration=$blist[0]['borrow_duration'];

		// dump(ilist);
		$this->assign ( 'ilists', $ilists);
		$this->assign ( 'blist', $blist );
		$this->assign ( 'ilist', $ilist );
		$this->display ();
	}
	
	/**
	 *
	 * @author liuy
	 *         2015-1-22自动投标
	 */
	public function autoinvest() {
		is_login () ||$this->redirect('Home/User/login');
		$uid = is_login (); // 获取当前用户UID
		$condition ['set_uid'] = $uid;
		//查询余额
		$money = M ( "z_member_money" );
		$condition1['uid']=$uid;
		$money = $money->where ( $condition1 )->select (); // 余额查询
		$money=$money[0]['account_money'];
		//自动投标数据查询
		$auto_checked =M('z_auto_borrow');
		$auto_data=$auto_checked->where($condition)->select();
		// dump($auto_data);
		$this->assign('auto_data',$auto_data[0]);
		$this->assign('money',$money);
		$this->pagetitle="工合财富直通贷款-自动投标";
		$this->display ();
	}
	public function autoinvest_save(){
		$uid=is_login();
		$data['keep_money']=I('post.keep_money');
		$data['borrow_money']=I('post.borrow_money');
		$data['tender_type']=I('post.tender_type');
		$data['apr_first']=I('post.apr_first');
		$data['apr_last']=I('post.apr_last');
		$data['borrow_low_timelimt']=I('post.borrow_low_timelimt');
		$data['borrow_height_timelimt']=I('post.borrow_height_timelimt');
		$arrs['set_uid']=$uid;
		$auto_config=M("z_auto_borrow");
		$auto_config_data=$auto_config->where($arrs)->select();
		
		if ($auto_config_data==null){
			$data['set_status']=0;
			$data['set_uid']=$uid;
			$result=$auto_config->add($data);
			if ($result>0){
				$this->success('投标参数保存成功！');
			} else {
				$this->error('未知数据错误！');

			}
			
		}else {
			$data['set_status']=1;
			$result=$auto_config->where($arrs)->save($data);
			if ($result==false){
				$this->success('投标参数未更新，请重新设置！');
			} else {
				$this->error('投标参数保存成功！');
			}
		}
	}
	public function autoinvest_open($status=0){
		$auto_status =M('z_auto_borrow');
		$uid=is_login();
		$arr['set_uid']=$uid;
		$arr['set_status']=1;
		$data['status']=1;
		$data['set_status']=0;
		$setdata=$auto_status->where($arr)->select();
		if ($setdata==null){
			$this->error('请先设置参数！');
			
		}else{
			$arrs['set_uid']=$uid;
			$result=$auto_status->where($arrs)->save($data);
			if ($result==false){
				$this->success(L('自动状态已设置！'));
			}else{
				$this->error('自动投标状态开启成功！');
			}
			
		}
		
	}
	public function autoinvest_close($status=0){
		$auto_status =M('z_auto_borrow');
		$uid=is_login();
		$arr['set_uid']=$uid;
		$data['status']=0;
		$setdata=$auto_status->where($arr)->select();
		if ($setdata!==null){
			$arrs['uid']=$uid;
			$result=$auto_status->where($arrs)->save($data);
			if ($result==false){
				$this->success(L('关闭状态已设置！'));
			}else{
				$this->error('自动投标状态关闭成功！');
			}
			
		}else{
			$data['set_uid']=$uid;
			$data['set_status']= 0;
			$result=$auto_status->where($arr)->add($data);
			if($result){
				$this->success('关闭成功！');
			}
		}
		
	}	
public function auto_borrow(){


		//查询开启自动投标的会员信息
		$auto_model=M('z_auto_borrow');
		$count=$auto_model->where('status=1')->count();
		$member_auto=$auto_model->where('status=1')->select();
 		

        for($i=0;$i<intval($count);$i++){




	        $borrowinfo = M('z_borrow_info');
	    	$map['borrow_money']=array('egt',$member_auto[$i]['borrow_money']);
			$map['borrow_interest_rate']=array('between',array($member_auto[$i]['apr_first'],$member_auto[$i]['apr_last']));
			$map['borrow_duration']=array('between',array($member_auto[$i]['borrow_low_timelimt'],$member_auto[$i]['borrow_height_timelimt']));
			$map['borrow_status']='2';


			$bdata=$borrowinfo->where($map)->select();
			//查询设置范围内所有的借款标
			$count1=intval($borrowinfo->where($map)->count());



		    for($k=0;$k<intval($count1);$k++){

                $p[$k]['id']=$bdata[$k]['id'];
                $p[$k]['uid']=$member_auto[$i]['set_uid'];
                $p[$k]['borrow_money']=$member_auto[$i]['borrow_money'];
                $log = M ( 'z_borrow_investor' );
                $logarr['borrow_id']=$p[$k]['id'];
                $logarr['investor_uid']=$p[$k]['uid'];
                $logdata=$log->where($logarr)->select();
                // dump($logarr);
                if(is_null($logdata)){
    				
                	$this->auto_borrow_add($p[$k]['borrow_money'],$p[$k]['id'],$p[$k]['uid']);
                }else{
                	continue;
                }
			}

        }		
	}
	public function auto_borrow_add($borrow_money=0,$borrowinfo_id=0,$uid=0){
            $bid = $borrowinfo_id;//投标id赋值
            $listMember = M('member');
            $condition['gica_member.uid'] =$uid ;
            $list =$listMember->join('RIGHT JOIN gica_ucenter_member ON gica_member.uid = gica_ucenter_member.id' )->join('RIGHT JOIN gica_z_member_money ON gica_member.uid = gica_z_member_money.uid' )->where($condition)->select();
            $map['id']=$borrowinfo_id;
            $listBorrow  = M('z_borrow_info');
            $list3 = $listBorrow->where($map)->select();
            //从表单中获取来的数据 
            $capital=floatval ($borrow_money);

            if ($list3[0]['repayment_type']== 5) {
                $b= (floatval ($capital)* (floatval ($list3[0]['borrow_interest_rate']) / 100 / 12) * pow ( (1 + (floatval ($list3[0]['borrow_interest_rate']) / 100 / 12)), intval ($list3[0]['borrow_duration']) ) / (pow ( (1 + (floatval($list3[0]['borrow_interest_rate']) / 100 / 12)), intval ($list3[0]['borrow_duration']) ) - 1)) * intval ($list3[0]['borrow_duration']) - floatval ($capital);

            }
            if ($list3[0]["repayment_type"] == 6) {
              $b=floatval ($capital)*(floatval ($list3[0]["borrow_interest_rate"] ) / 100 / 12);
            // $depict ['repayment_money'] = intval ($capital)+(intval ($capital)*(intval ($list3[0]["borrow_interest_rate"] ) / 100 / 12));

            }
            //一次性还款公式带进
            if ($list3[0]["repayment_type"] == 7) {
                $b=(floatval ($capital)*(floatval ( $list3[0]["borrow_interest_rate"]/ 100 / 12))*intval ($list3[0]['borrow_duration']));
                // $depict ['repayment_money']=intval ($capital)*(1+((intval ( $list3[0]["borrow_interest_rate"] ) / 100 / 12))*intval ($list3[0]["borrow_duration"] ));
            }
            
            
            //创建一个表对象，将传来的数据插入到数据库中
            $m=M("z_borrow_investor");
            $m->investor_capital=$capital;
            $m->borrow_id=$bid;
            $m->borrow_uid=$list3[0]['borrow_uid'];
            $m->add_time=time();
            $m->deadline=$list3[0]['deadline'];
            $m->invest_fee=$list3[0]['borrow_interest_rate'];
            $m->investor_uid=$uid;
            $m->investor_interest=$b;
            
        // 判断余额不足
        if($list[0]['account_money'] >= $capital ){
            if($capital <= 0){// 上传错误提示错误信息

                $this->error('投资金额不能小于1元');
            }
            else{

                $m2=M("z_borrow_info");
                $condition2['id'] =$bid;
                $m22=$m2->field('id,has_borrow,borrow_money')->where($condition2)->select();

                $m2h=floatval ($m22[0]['has_borrow'])+floatval ($capital);

                $m222=floatval ($m22[0]['borrow_money'])-$m2h;//计算溢出的已借款金额

                $data2['has_borrow']=$m2h;

                    if(floatval ($m22[0]['has_borrow']) == floatval ($m22[0]['borrow_money']))
                    {
                        $data3['borrow_status']=7;//满标状态改变
                        $data3['full_time']=time();//满标时间
                        $m2=$m2->where($condition2)->save($data3);          
                    }

                    //判断是否满额
                    if ( $m222 >= 0){

                        $m2=$m2->where($condition2)->save($data2);
                        $count=$m->add();

                        
                        $result=change_money($capital,$uid);
                        if ($result) { //保存成功

                               
                                        $m2=M("z_borrow_info");

                                        $condition2['id'] =$bid;
                                        $m22=$m2->field('id,has_borrow,borrow_money')->where($condition2)->select();

                                        $m2h=floatval ($m22[0]['has_borrow'])+floatval ($capital);

                                        $m222=floatval ($m22[0]['borrow_money'])-$m2h;//计算溢出的已借款金额

                                        $data2['has_borrow']=$m2h;

                                        if(floatval ($m22[0]['has_borrow']) == floatval ($m22[0]['borrow_money']))
                                        {
                                            $data3['borrow_status']=7;//标状态改变
                                            $m2=$m2->where($condition2)->save($data3);          
                                        }


                                        //投资还款管理表
                                        $binfo=M("z_borrow_info");
                                        $binfoid['id'] =$bid;
                                        $binfo=$binfo->where($binfoid)->select();

                                        $iinfo=M("z_borrow_investor");
                                        $iinfo=$iinfo->where($bid)->order ( 'id desc' )->select();

                                        for($i=1;$i<=$binfo[0]['total'];$i++){

                                            if ($binfo[0]["repayment_type"] == 5) {


                                                $dcapital1[$i]['repayment_money']=(floatval($capital) * (floatval ( $binfo[0]["borrow_interest_rate"] )/100/12) * pow((1 + (floatval($binfo[0]["borrow_interest_rate"])/100/12)), floatval($binfo[0]["borrow_duration"]))/(pow((1 + (floatval ( $binfo[0]["borrow_interest_rate"])/100/12)), floatval ( $binfo[0]["borrow_duration"]))- 1)) * floatval ($i);
                                                $dcapital = (floatval ($dcapital1[$i]['repayment_money'])-floatval ($dcapital1[$i-1]['repayment_money']))-floatval($capital)*(floatval($binfo[0]["borrow_interest_rate"])/100/12)*(pow(1+(floatval($binfo[0]["borrow_interest_rate"])/100/12),floatval($binfo[0]['total']))-(pow(1+(floatval($binfo[0]["borrow_interest_rate"])/100/12),$i-1)))/(pow(1+(floatval($binfo[0]["borrow_interest_rate"])/100/12),floatval($binfo[0]['total']))-1);



                                                $interest=floatval($capital)*(floatval($binfo[0]["borrow_interest_rate"])/100/12)*(pow(1+(floatval($binfo[0]["borrow_interest_rate"])/100/12),floatval($binfo[0]['total']))-(pow(1+(floatval($binfo[0]["borrow_interest_rate"])/100/12),$i-1)))/(pow(1+(floatval($binfo[0]["borrow_interest_rate"])/100/12),floatval($binfo[0]['total']))-1);
                                                    $t=$i+1;
                                                    $detail=M("z_investor_detail");
                                                    $detail->repayment_time=strtotime('+ '.$t.' months',strtotime(''.date("Y-m-d",''.$binfo[0]["add_time"].'').''));
                                                    $detail->borrow_id=$bid;
                                                    $detail->invest_id=$iinfo[0]['id'];
                                                    $detail->investor_uid=$uid;
                                                    $detail->borrow_uid=$binfo[0]['borrow_uid'];
                                                    $detail->capital=$dcapital;
                                                    $detail->interest=$interest;
                                                    $detail->interest_fee=$b;
                                                    $detail->status=$binfo[0]['borrow_status'];
                                                    
                                                    $detail->sort_order=$i;
                                                    $detail->total=$binfo[0]['total'];
                                                    
                                                    $detail=$detail->add();

                                            }
                                            if ($binfo[0]["repayment_type"] == 6) {
                                                     
                                                     $dcapital =floatval ($capital )/floatval ($binfo[0]['total']);
                                                    
                                                     $t=$i+1;
                                                    $detail=M("z_investor_detail");
                                                    $detail->repayment_time=strtotime('+ '.$t.' months',strtotime(''.date("Y-m-d",''.$binfo[0]["add_time"].'').''));
                                                    $detail->borrow_id=$bid;
                                                    $detail->invest_id=$iinfo[0]['id'];
                                                    $detail->investor_uid=$uid;
                                                    $detail->borrow_uid=$binfo[0]['borrow_uid'];
                                                    $detail->capital=$dcapital;
                                                    $detail->interest=$b;
                                                    $detail->interest_fee=$interest;
                                                    $detail->status=$binfo[0]['borrow_status'];
                                                    
                                                    $detail->sort_order=$i;
                                                    $detail->total=$binfo[0]['total'];
                                                    
                                                    $detail=$detail->add();
                                            }
                                            if ($binfo[0]["repayment_type"] == 7){
                                                    $t=(intval($list3[0]['borrow_duration']));
                                                    $detail=M("z_investor_detail");
                                                    $detail->repayment_time=strtotime('+ '.$t.' months',strtotime(''.date("Y-m-d",''.$binfo[0]["add_time"].'').''));
                                                    $detail->borrow_id=$bid;
                                                    $detail->invest_id=$iinfo[0]['id'];
                                                    $detail->investor_uid=$uid;
                                                    $detail->borrow_uid=$binfo[0]['borrow_uid'];
                                                    $detail->capital=floatval ($capital );
                                                    $detail->interest=$b;
                                                    $detail->interest_fee=$interest;
                                                    $detail->status=$binfo[0]['borrow_status'];
                                                    $detail->sort_order=$i;
                                                    $detail->total=$binfo[0]['total'];
                                                    $detail=$detail->add();
                                                    continue;
                                            } 

                                        }
                                        //投资详情表

                                        //日志
                                        $log = M ( 'z_member_moneylog' );
                                        $logdata ['uid'] = $uid;
                                        $logdata ['type'] = 204;
                                        $logdata ['borrowinfo_id']=$uid;
                                        $logdata ['affect_money'] = $capital;
                                        $logdata ['info'] = '您于'.date('Y-m-d H:i:s',time()).'投资'.$list3[0]['id'].'号标'.$capital.'元(资金冻结中)。';
                                        $logdata ['add_time'] = time ();
                                        $log = $log->add ( $logdata );

                                        //发送站内信
                                        $action=$logdata ['info'];
                                        $opertype=1;
                                        $result_ms=inner_msg($uid,$opertype,$action); 
                                        
                                        
                            } 
                            

                        }
                            
                }
               
        }
        
	}

	public function investdetail($id=0){
		$uid=is_login();
		 $condition1 ['id'] = $id;
        $binfo =M('z_borrow_info')->where($condition1)->select();
        
		$this->borrow_status=$binfo[0]['borrow_status'];
		// $this->assign('list',$depict);s
		$this->assign('list1',$binfo);

		$detail = M ('z_investor_detail');
		$condition1 ['sort_order'] = $i;
	    $condition ['borrow_id'] =$id;
	    $condition ['investor_uid'] =$uid;
	    $b_id ['borrow_id'] =$id;


	    $de= $detail->field ( 'id,borrow_id,sum(capital)capital,sum(interest)interest,repayment_time,deadline,receive_capital,status,receive_interest')->where ( $condition )->group ('sort_order')->select();
	    $inscount= $detail->field ( 'count(investor_uid)')->where ($b_id)->group ('investor_uid')->select();

	    $this->countuid=count($inscount);

		$this->assign('list',$de);
		$this->display();
	}
} 
