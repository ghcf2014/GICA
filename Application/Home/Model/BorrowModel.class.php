<?php
namespace Home\Model;
use Think\Model;

/**
 * 文档基础模型
 */
class BorrowModel extends Model{


    /**
     * 登录指定用户
     * @param  integer $uid 用户ID
     * @return boolean      ture-登录成功，false-登录失败
     */
    public function type_formula($borrow_money=0,$borrow_interest_rate=0,$borrow_duration=0,$repayment_type=0){

        return false;
        // if ($repayment_type == 5) {
        //     $depict ['repayment_interest'] = (floatval ( $borrow_money ) * (floatval ( $borrow_interest_rate ) / 100 / 12) * pow ( (1 + (floatval ( $borrow_interest_rate) / 100 / 12)), floatval ( $borrow_duration ) ) / (pow ( (1 + (floatval ( $borrow_interest_rate ) / 100 / 12)), floatval ( $borrow_duration ) ) - 1)) * floatval ( $borrow_duration ) - floatval ( $borrow_money);
        //     $depict ['repayment_money'] = (floatval ( $borrow_money ) * (floatval ( $borrow_interest_rate) / 100 / 12) * pow ( (1 + (floatval ( $borrow_interest_rate) / 100 / 12)), floatval ( $borrow_duration ) ) / (pow ( (1 + (floatval ( $borrow_interest_rate ) / 100 / 12)), floatval ( $borrow_duration ) ) - 1)) * floatval ( $borrow_duration );
        //     $depict ['total'] = $borrow_duration;
        //     return $depict;
        // }
        // //先息后本公式带进
        // if ($repayment_type == 6) {
        //     $depict ['repayment_interest'] =floatval ($borrow_money )*(floatval ( $borrow_interest_rate ) / 100 / 12);
        //     $depict ['repayment_money'] = floatval ( $borrow_money)+(floatval ( $borrow_money)*(floatval ( $borrow_interest_rate) / 100 / 12));
        //     $depict ['total'] = $borrow_duration;
        //     return $depict;
        // }
        // //一次性还款公式带进
        // if ($repayment_type == 7) {
            
        //     $depict ['repayment_interest'] =floatval ( $borrow_money)*((floatval ( $borrow_interest_rate ) / 100 / 12)*floatval($borrow_duration));
        //     $depict ['repayment_money']=floatval ( $borrow_money )*(1+((floatval ( $borrow_interest_rate) / 100 / 12))*floatval ($borrow_duration));
        //     $depict ['total'] =1;
        //     return $depict;
        // }
    }
    public function login($uid){
        /* 检测是否在当前应用注册 */
        $user = $this->field(true)->find($uid);
        if(!$user){ //未注册
            /* 在当前应用中注册用户 */
        	$Api = new UserApi();
        	$info = $Api->info($uid);
            $user = $this->create(array('nickname' => $info[1], 'status' => 1));
            $user['uid'] = $uid;
            if(!$this->add($user)){
                $this->error = '前台用户信息注册失败，请重试！';
                return false;
            }
            //关联会员资金表
            $member_money=M("z_member_money");
            $member_money->uid=$uid;
            $member_money_count=$member_money->add();
            //关联会员资料表
            $member_info=M("z_member_info");
            $member_info->uid=$uid;
            $member_info_count=$member_info->add();
        } elseif(1 != $user['status']) {
            $this->error = '用户未激活或已禁用！'; //应用级别禁用
            return false;
        }

        /* 登录用户 */
        $this->autoLogin($user);

        //记录行为
        action_log('user_login', 'member', $uid, $uid);

        return true;
    }

    /**
     * 注销当前用户
     * @return void
     */
    public function logout(){
        session('user_auth', null);
        session('user_auth_sign', null);
    }

    /**
     * 自动登录用户
     * @param  integer $user 用户信息数组
     */
    private function autoLogin($user){
        /* 更新登录信息 */
        $data = array(
            'uid'             => $user['uid'],
            'login'           => array('exp', '`login`+1'),
            'last_login_time' => NOW_TIME,
            'last_login_ip'   => get_client_ip(1),
        );
        $this->save($data);

        /* 记录登录SESSION和COOKIES */
        $auth = array(
            'uid'             => $user['uid'],
            'username'        => get_username($user['uid']),
            'last_login_time' => $user['last_login_time'],
        );

        session('user_auth', $auth);
        session('user_auth_sign', data_auth_sign($auth));

    }

}
