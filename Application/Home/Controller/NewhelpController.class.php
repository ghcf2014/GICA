<?php

namespace Home\Controller;

use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class NewhelpController extends HomeController {
	
	// 系统首页
	// public function index() {
	// 	$this->display ();
	// }
	public function borrowhelp() {

		$this->pagetitle="工合财富直通贷款-小额贷-融资贷-本地贷款-推荐领取积分-壕礼相送-新手指引";
		$this->display ();
	}
	public function companyintr() {
		$this->display ();
	}
	public function compare_tools() {
		$this->pagetitle="工合财富直通贷款-收益计算器";
		$this->display ();
	}
	public function compare_tools_swf() {
		$this->display ();
	}
	public function cpi_tools() {
		$this->display ();
	}
	public function cusservice() {
		$this->display ();
	}
	public function forumanswer() {
		$this->display ();
	}
	public function forumquestion() {
		$this->display ();
	}
	public function forumwaitquestion() {
		$this->display ();
	}
	public function income_tools() {
		$this->display ();
	}
	public function legalpolicy() {
		$this->display ();
	}
	public function linkship() {
		$this->display ();
	}
	public function myforumquestion() {
		$this->display ();
	}
	public function newguide() {
		$this->display ();
	}
	public function question() {
		$this->display ();
	}
	public function safeguard() {
		$this->display ();
	}
	public function share() {
		$this->display ();
	}
	public function social_tool() {
		$this->display ();
	}
	public function social_tools() {
		$this->display ();
	}
	public function tenthousand() {
		$this->display ();
	}
	public function terracetheory() {
		$this->display ();
	}
	
	/**
	 * 关于我们
	 */
	public function aboutus() {
		$this->pagetitle="工合财富直通贷款-关于我们";
		$this->display ();
	}
	// 网站服务协议
	public function fuwutiaokuan() {
		$this->display ();
	}
	// 网站使用条款
	public function shiyongtiaokuan() {
		$this->display ();
	}
	
	/**
	 *
	 * @author 2015-1-20安全保障
	 */
	public function safetypromise() {
		$this->display ();
	}
	
	/**
	 *
	 * @author liuy
	 *        
	 *         2015-2-13网站地图
	 */
	public function websitemap() {
		$this->pagetitle="工合财富直通贷款-网站地图";
		$this->display ();
	}
}