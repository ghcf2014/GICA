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

function change_money($capital=0,$uid=0){

    $condition1['uid'] =$uid;
    $money=M("z_member_money");
    $money=$money->field('account_money,money_collect')->where($condition1)->select();//余额查询
    $m1=M("z_member_money");
    $mmoney=floatval ($money[0]['account_money'])-floatval ($capital);//余额减掉金额
    $mcollect=floatval ($money[0]['money_collect'])+floatval ($capital);
    $data1['account_money']=$mmoney;
    $data1['money_collect']=$mcollect;
    if ($m1 = $m1->where($condition1)->save($data1)) { //保存成功
    return true;
    }else {
        //失败提示
      return  false;
    }
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
function think_ucenter_md5($str, $key = 'ThinkUCenter'){
    return '' === $str ? '' : md5(sha1($str) . $key);
}
function get_idnumber($uid = 0) {
    $map = $uid;
    $name = M ( 'z_member_info' )->field ( 'idcard' )->find ( $map );
    // var_dump($name['nickname']);
    return $name ['idcard'];
}