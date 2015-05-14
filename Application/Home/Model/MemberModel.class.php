<?php
namespace Home\Model;
use Think\Model;
use User\Api\UserApi;

/**
 * 文档基础模型
 */
class MemberModel extends Model{

    /* 用户模型自动完成 */
    protected $_auto = array(
        array('login', 0, self::MODEL_INSERT),
        array('reg_ip', 'get_client_ip', self::MODEL_INSERT, 'function', 1),
        array('reg_time', NOW_TIME, self::MODEL_INSERT),
        array('last_login_ip', 0, self::MODEL_INSERT),
        array('last_login_time', 0, self::MODEL_INSERT),
        array('status', 1, self::MODEL_INSERT),
    );

    /**
     * 登录指定用户
     * @param  integer $uid 用户ID
     * @return boolean      ture-登录成功，false-登录失败
     */
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
            //关联会员认证表
            $mstatus = M('z_members_status');//用户验证状态
            $condition2['uid'] =$uid;
            $member_status=$mstatus->where($condition2)->select();
            $arr['uid']=$uid;
            $result=$mstatus->add($arr); 
 
        } elseif(1 != $user['status']) {
            $this->error = '用户未激活或已禁用！'; //应用级别禁用
            return false;
        }

        /* 登录用户 */
        $this->autoLogin($user);

        
        M('member')->where('uid='.$uid)->setInc('score');

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
