<?php

/**
 * 前台公共库文件
 * 主要定义前台公共函数库
 */

/**
 * 检测验证码
 * @param  integer $id 验证码ID
 * @return boolean     检测结果
 */
function check_verify($code, $id = 1){
	$verify = new \Think\Verify();
	return $verify->check($code, $id);
}

/**
 * 获取列表总行数
 * @param  string  $category 分类ID
 * @param  integer $status   数据状态s
 */
function get_list_count($category, $status = 1){
    static $count;
    if(!isset($count[$category])){
        $count[$category] = D('Document')->listCount($category, $status);
    }
    return $count[$category];
}

/**
 * 获取段落总数
 * @param  string $id 文档ID
 * @return integer    段落总数
 */
function get_part_count($id){
    static $count;
    if(!isset($count[$id])){
        $count[$id] = D('Document')->partCount($id);
    }
    return $count[$id];
}

/**
 * 获取导航URL
 * @param  string $url 导航URL
 * @return string      解析或的url
 */
function get_nav_url($url){
    switch ($url) {
        case 'http://' === substr($url, 0, 7):
        case '#' === substr($url, 0, 1):
            break;        
        default:
            $url = U($url);
            break;
    }
    return $url;
}
function pd($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    die;
}
function type_formula($borrow_money=0,$borrow_interest_rate=0,$borrow_duration=0,$repayment_type=0){

        // return false;
        if ($repayment_type == 5) {
            $depict ['repayment_interest'] = (floatval ( $borrow_money ) * (floatval ( $borrow_interest_rate ) / 100 / 12) * pow ( (1 + (floatval ( $borrow_interest_rate) / 100 / 12)), floatval ( $borrow_duration ) ) / (pow ( (1 + (floatval ( $borrow_interest_rate ) / 100 / 12)), floatval ( $borrow_duration ) ) - 1)) * floatval ( $borrow_duration ) - floatval ( $borrow_money);
            $depict ['repayment_money'] = (floatval ( $borrow_money ) * (floatval ( $borrow_interest_rate) / 100 / 12) * pow ( (1 + (floatval ( $borrow_interest_rate) / 100 / 12)), floatval ( $borrow_duration ) ) / (pow ( (1 + (floatval ( $borrow_interest_rate ) / 100 / 12)), floatval ( $borrow_duration ) ) - 1)) * floatval ( $borrow_duration );
            $depict ['total'] = $borrow_duration;
            return $depict;
        }
        //先息后本公式带进
        if ($repayment_type == 6) {
            $depict ['repayment_interest'] =floatval ($borrow_money )*(floatval ( $borrow_interest_rate ) / 100 / 12);
            $depict ['repayment_money'] = floatval ( $borrow_money)+(floatval ( $borrow_money)*(floatval ( $borrow_interest_rate) / 100 / 12));
            $depict ['total'] = $borrow_duration;
            return $depict;
        }
        //一次性还款公式带进
        if ($repayment_type == 7) {
            
            $depict ['repayment_interest'] =floatval ( $borrow_money)*((floatval ( $borrow_interest_rate ) / 100 / 12)*floatval($borrow_duration));
            $depict ['repayment_money']=floatval ( $borrow_money )*(1+((floatval ( $borrow_interest_rate) / 100 / 12))*floatval ($borrow_duration));
            $depict ['total'] =1;
            return $depict;
        }
}
function change_money($capital=0,$uid=0,$dealpwd=0){
    
    return $this->pay_pw($dealpwd=0);
    exit();
    $uid=is_login(); 
    $condition1['uid'] =$uid;
    $money=M("z_member_money");
    $money=$money->field('account_money,money_collect')->where($condition1)->select();//余额查询
    $m1=M("z_member_money");
    $mmoney=floatval ($money[0]['account_money'])-floatval ($capital);//余额减掉金额
    $mcollect=floatval ($money[0]['money_collect'])+floatval ($capital);
    $data1['account_money']=$mmoney;
    $data1['money_collect']=$mcollect;
    if ($m1 = $m1->where($condition1)->save($data1)) { //保存成功


    }else {
        //失败提示
        $this->error(L('投资失败，如发现金额已经投出，请及时联系我们处理。'));
    }
}
function money_log($money=0,$uid=0,$password=0){
         //日志
        $log = M ( 'z_member_moneylog' );
        $logdata ['uid'] = $uid;
        $logdata ['type'] = 204;
        $logdata ['borrowinfo_id']=$uid;
        $logdata ['affect_money'] = $capital;
        $logdata ['info'] = '您投资了'.$list3[0]['id'].'号标'.$capital.'元';
        $logdata ['add_time'] = time ();
        $log = $log->add ( $logdata );
}
function pay_pw($dealpwd=0){
    $uid  = is_login();//获取当前用户UID
    $userinfo = M ( 'ucenter_member' )->where ( 'id=' . $uid )->select ();
    $paypass = $userinfo [0] ['pin_pass']; // 查询用户交易密码

    
    if (md5($dealpwd) != $paypass) {
        return $this->error( L ( '您输入的交易密码有误！' ) );
    }
    return true;
}