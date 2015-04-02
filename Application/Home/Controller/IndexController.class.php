<?php

namespace Home\Controller;

use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends HomeController {

	
	// 系统首页
	public function index() {
		//判断登陆赋值
        if(is_login()){
           $login=1;
        } else {
           $login=0;
        }

		$category = D ( 'Category' )->getTree ();
		$map = array (
				'category_id' => 2 
		);
		$map1 = array (
				'category_id' => 40 
		);
		$map2 = array (
				'category_id' => 43
		);
		$lists = D ( 'Document' )->where ( $map )->limit ( 6 )->select ();
		$lists1 = D ( 'Document' )->where ( $map1 )->limit ( 7 )->select ();
		$lists3 = D ( 'Document' )->where ( $map2 )->limit ( 7 )->select ();
		
		$lists2 = D ( 'z_borrow_investor' )->field ( 'investor_uid,sum(investor_capital)investor_capital' )->order ( 'investor_capital desc' )->group ( 'investor_uid' )->select ();
		
		// $this->assign('page',D('Document')->page);//分页
		// 正在进行的贷款
		// $searchMap = array();
		// $searchMap['z_borrow_status']=array("in",'2,4,6,7');
		// $searchMap['is_tuijian']=0;
		// $parm=array();
		
		// $parm['map'] = $searchMap;
		// $parm['limit'] = 10;
		// $parm['orderby']="b.borrow_status ASC,b.id DESC";
		// var_dump($listBorrow);
		// $this->assign("listBorrow",$listBorrow);
		
		import ( 'ORG.Util.Page' ); // 导入分页类
		$listBorrow = M ( 'z_borrow_info' );
		$count = $listBorrow->where ( 'borrow_status not in (1,5,3)' )->count ();
		$Page = new \Think\Page ( $count, 8 );
		$show = $Page->show ();
		$list = $listBorrow->where ( 'borrow_status not in (1,5,3)' )->order (array('borrow_status not in (0,6) DESC','add_time  DESC'))->limit ( $Page->firstRow . ',' . $Page->listRows )->select ();
		
		if ($list [0] ['has_borrow'] == 0) {
			$jindu = 0;
		} else {
		}

		

		//计算倒计时间赋值
		$cc=count($list);
		for($i=0;$i<=(intval ($cc)-1);$i++){
			$list[$i]['djtime'] = strtotime ( '+ ' . intval ( $list[$i]["collect_day"] ) . ' days',$list[$i]["add_time"]);

			if(strtotime ( '+ ' . intval ( $list[$i]["collect_day"] ) . ' days',$list[$i]["add_time"]) <= time())
			{
				//招募时间流标
				M('z_borrow_info')->where(array('id'=>$list[$i]["id"]))->setField(array('borrow_status'=>3));
			}
			//进度计算
			$list[$i]['jindu']=round($list[$i]['has_borrow']/$list[$i]['borrow_money']*100, 1);
		}



		$this->assign('login',$login);
		$this->assign ( 'category', $category ); // 栏目
		$this->assign ( 'lists', $lists ); // 列表
		$this->assign ( 'lists1', $lists1 );
		$this->assign ( 'lists2', $lists2 );
		$this->assign ( 'lists3', $lists3 );
		$this->assign ( 'list2', $list );
		$this->assign ( 'page', $show );
		$this->display ();
	}
	public function fankui() {
		$this->display ();
	}
	public function fankui_add() {
		$name = $_POST ['name'];
		$content = $_POST ['content'];
		
		if($a = SendMail ( '380003832@qq.com', $name . '技术反馈', '【' . $content . '】  邮件发送时间： ' . date ( "l dS of F Y h：i：s A" ) )){
		    echo "消息已发送。O(∩_∩)O~<p>";
		}else{
			echo "消息不能发送。o_O???<p>";
		}
	}
}