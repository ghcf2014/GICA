<?php

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class FinanceController extends HomeController {

	//系统首页
    public function index($type=0,$order=borrow_status){
        $nickname  =   I('nickname');

        //判断登陆赋值
        if(is_login()){
           $login=1;
        } else {
           $login=0;
        }

        if($type==0){

            $type='1,2,3,4,5,6';
        }
        //标字符模糊查询
        $map['borrow_name']    =   array('like', '%'.(string)$nickname.'%','and');
        $map['borrow_status']    =   array('not in', '1,5,3','and');
        $map['borrow_type']    =   array('in',$type,'and');

            import('ORG.Util.Page');// 导入分页类
            $listBorrow  = M('z_borrow_info');
            $count      = $listBorrow ->where('borrow_status not in (1,5,3)')->count();
            $Page = new  \Think\Page($count, 8);
            $show       = $Page->show();
            $list = $listBorrow->where($map)->order (array('borrow_status not in (0,6) DESC','add_time  DESC'))->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('list2',$list);
            $this->assign('login',$login);
            $this->assign('page',$show);
            $this->display();
    }
    public function papersinfo(){
        $this->display();
    }
    public function tranferdetail(){
        $this->display();

    }
    public function invest($id = 0, $p = 1){
        /* 标识正确性检测 */
        if(!($id && is_numeric($id))){
           $this->error('投标ID错误！');
        }

            /* 页码检测 */
            $p = intval($p);
            $p = empty($p) ? 1 : $p;
            is_login() || $this->error('您还没有登录，请先登录！');
            $uid        =   is_login();//获取当前用户UID

            $listMember = M('member');
            $condition['gica_member.uid'] =$uid;
            $list =$listMember->join('RIGHT JOIN gica_ucenter_member ON gica_member.uid = gica_ucenter_member.id' )->join('RIGHT JOIN gica_z_member_money ON gica_member.uid = gica_z_member_money.uid' )->where($condition)->select();

            // $list2 =$listMember->join('LEFT JOIN gica_z_member_money ON gica_member.uid = gica_z_member_money.uid' )->where($condition)->select();
            
            $this->assign('list', $list);
            $this->assign('list2', $list2);

            //$borrowinfo = M("z_borrow_info bi")->field('bi.*,ac.type_name,ac.type_nid')->join('z_article_category ac on ac.id= bi.danbao')->where('bi.id='.$id)->find();
            // if(!is_array($borrowinfo) || ($borrowinfo['borrow_status']==0 && $this->uid!=$borrowinfo['borrow_uid']) ) $this->error("数据有误");
            $map = array('id' => $id);
            $listBorrow  = M('z_borrow_info');
            $list = $listBorrow->where($map)->select();
            $this->assign('list3',$list);
            if ($list[0]['borrow_uid']!==$uid){
                $this->display();
            }else {
                $this->error('对不起，您不能投自己的标！');
            }
            
            
    }
    public function add($id= 0){
            $uid  = is_login();//获取当前用户UID

            $dealpwd = $_POST ['dealpwd'];
            $userinfo = M ( 'ucenter_member' )->where ( 'id=' . $uid )->select ();
			$paypass = $userinfo [0] ['pin_pass']; // 查询用户交易密码

			
			// if (md5($dealpwd) != $paypass) {
			// 	$this->error ( L ( '您输入的交易密码有误！' ) );
			// }
            
            $bid = $id;//投标id赋值
            $listMember = M('member');
            $condition['gica_member.uid'] =$uid ;
            $list =$listMember->join('RIGHT JOIN gica_ucenter_member ON gica_member.uid = gica_ucenter_member.id' )->join('RIGHT JOIN gica_z_member_money ON gica_member.uid = gica_z_member_money.uid' )->where($condition)->select();

            $this->assign('list', $list);
            $this->assign('list2', $list2);

            $map = array('id' => $id);
            $listBorrow  = M('z_borrow_info');
            $list3 = $listBorrow->where($map)->select();
            //从表单中获取来的数据 
            $capital=$_POST["capital"];


            if ($list3[0]['repayment_type']== 5) {
					 		$b= (floatval ($capital)* (floatval ($list3[0]['borrow_interest_rate']) / 100 / 12) * pow ( (1 + (floatval ($list3[0]['borrow_interest_rate']) / 100 / 12)), intval ($list3[0]['borrow_duration']) ) / (pow ( (1 + (floatval($list3[0]['borrow_interest_rate']) / 100 / 12)), intval ($list3[0]['borrow_duration']) ) - 1)) * intval ($list3[0]['borrow_duration']) - floatval ($capital);
			// $b=10000*(0.18/12)*pow((1+0.18/12),2)/(pow((1+0.18/12),2)-1);

			}
            if ($list3[0]["repayment_type"] == 6) {
                            $b=floatval ($capital)*(floatval ($list3[0]["borrow_interest_rate"] ) / 100 / 12);
            // $depict ['repayment_money'] = intval ($capital)+(intval ($capital)*(intval ($list3[0]["borrow_interest_rate"] ) / 100 / 12));

            }
            //一次性还款公式带进
            if ($list3[0]["repayment_type"] == 7) {
                
                            $b=floatval ($capital)*((floatval ( $list3[0]["borrow_interest_rate"] ) / 100 / 12)*floatval($list3[0]["borrow_duration"]));
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
                        $data3['borrow_status']=4;//满标状态改变
                        $data3['full_time']=time();//满标时间
                        $m2=$m2->where($condition2)->save($data3);          
                    }

                    //判断是否满额
                    if ( $m222 >= 0){

                        $m2=$m2->where($condition2)->save($data2);
                        $count=$m->add();
                        // $this->success('投资成功！',U('Borrow/detail?id='.$bid));

                        $uid=is_login(); 
                        $condition1['uid'] =$uid;
                        $money=M("z_member_money");
                        $money=$money->field('account_money,money_collect')->where($condition1)->select();//余额查询
                        $m1=M("z_member_money");
                        $mmoney=floatval ($money[0]['account_money'])-floatval ($capital);//余额减掉金额
                        $mcollect=floatval ($money[0]['money_collect'])+floatval ($capital);
                        $data1['account_money']=$mmoney;
                        $data1['money_collect']=$mcollect;
                        // dump($money);

                        // exit();


                            if ($m1 = $m1->where($condition1)->save($data1)) { //保存成功


                                        $m2=M("z_borrow_info");

                                        $condition2['id'] =$bid;
                                        $m22=$m2->field('id,has_borrow,borrow_money')->where($condition2)->select();

                                        $m2h=floatval ($m22[0]['has_borrow'])+floatval ($capital);

                                        $m222=floatval ($m22[0]['borrow_money'])-$m2h;//计算溢出的已借款金额

                                        $data2['has_borrow']=$m2h;

                                        if(floatval ($m22[0]['has_borrow']) == floatval ($m22[0]['borrow_money']))
                                        {
                                            $data3['borrow_status']=4;//标状态改变
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

                                                }
                                             if ($binfo[0]["repayment_type"] == 6) {
                                                     // $huan[$i]['lixi'] =intval ( $borrow_info[0]["borrow_money"] )*(intval ($borrow_info[0]["borrow_interest_rate"] ) / 100 / 12)*$i;
                                                     $dcapital =floatval ($capital )/floatval ($binfo[0]['total']);
                                                     // $huan[1]['lixi'] =intval ($huan[0]['lixi'])+intval ( $binfo[0]["borrow_interest_rate"] )*(intval ($borrow_info[0]["borrow_interest_rate"] ) / 100 / 12)*$i;
                                            }




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
                                            // $detail->receive_interest=$b;
                                            // $detail->receive_capital=$b;
                                            $detail->sort_order=$i;
                                            $detail->total=$binfo[0]['total'];
                                            // $detail->deadline=$b;
                                            // $detail->expired_money=$b;
                                            // $detail->expired_days=$b;
                                            // $detail->call_fee=$b;
                                            // $detail->substitute_money=$b;
                                            // $detail->substitute_time=$b;
                                            $detail=$detail->add();

                                        }
                                        //投资详情表
                                        








                                        //日志
                                        $log = M ( 'z_member_moneylog' );
										$logdata ['uid'] = $uid;
										$logdata ['type'] = 204;
										$logdata ['affect_money'] = $capital;
										$logdata ['info'] = '您投资了'.$list3[0]['id'].'号标'.$capital.'元';
										$logdata ['add_time'] = time ();
										$log = $log->add ( $logdata );


                                        //发送站内信
                                        $type="borrow";
                                        $action=$logdata ['info'];
                                        systemmsg($type,$action);

                                //成功提示
                                $this->success(L('投资成功。'),U('Borrow/detail?id='.$bid));
                            } 
                            else {
                                //失败提示
                                $this->error(L('投资失败，如发现金额已经投出，请及时联系我们处理。'));
                            }

                        }
                        else{
                            $this->error(L('投资金额已超过借款金额！'));
                            // $this->assign('waitSecond',U('Finance/invest'),5);

                        }      
                }
                $this->assign('list3',$list3);
        }
        else{
            $this->error('抱歉，您余额不足。请充值。');
        }
    }
}