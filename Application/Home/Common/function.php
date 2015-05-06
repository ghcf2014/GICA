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