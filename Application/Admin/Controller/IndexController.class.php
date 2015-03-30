<?php

namespace Admin\Controller;
use User\Api\UserApi as UserApi;

/**
 * 后台首页控制器
 */
class IndexController extends AdminController {

    /**
     * 后台首页
     */
    public function main() {

		$this->display ();
	}
    public function index(){
        $this->meta_title = '管理首页';

        //登录曲线统计
        $mlogin=M(z_member_login);
        $this->i1=$mlogin->where(strtotime(date('Y-m-d',strtotime('-1 day'))).'< add_time and  add_time<'.strtotime(date('Y-m-d',strtotime('+1 day'))).'')->count();
        $this->i2=$mlogin->where(strtotime(date('Y-m-d',strtotime('-2 day'))).'< add_time and  add_time<'.strtotime(date('Y-m-d',strtotime('+0 day'))).'')->count();
        $this->i3=$mlogin->where(strtotime(date('Y-m-d',strtotime('-3 day'))).'< add_time and  add_time<'.strtotime(date('Y-m-d',strtotime('-1 day'))).'')->count();
        $this->i4=$mlogin->where(strtotime(date('Y-m-d',strtotime('-4 day'))).'< add_time and  add_time<'.strtotime(date('Y-m-d',strtotime('-2 day'))).'')->count();
        $this->i5=$mlogin->where(strtotime(date('Y-m-d',strtotime('-5 day'))).'< add_time and  add_time<'.strtotime(date('Y-m-d',strtotime('-3 day'))).'')->count();
        $this->i6=$mlogin->where(strtotime(date('Y-m-d',strtotime('-6 day'))).'< add_time and  add_time<'.strtotime(date('Y-m-d',strtotime('-4 day'))).'')->count();
        $this->i7=$mlogin->where(strtotime(date('Y-m-d',strtotime('-7 day'))).'< add_time and  add_time<'.strtotime(date('Y-m-d',strtotime('-5 day'))).'')->count();
        $this->display();
    }

}
