<?php

namespace Home\Controller;

use OT\DataDictionary;
use Think\Controller;
use Think\Model;

class SystemController extends HomeController {
	public function index() {
		$this->display ();
	}
	
	/**
	 *
	 * @author liuy
	 *        
	 *         2015-1-29找回密码
	 */
	public function findpassword() {
		$this->display ();
	}
	
	/**
	 *
	 * @author liuy
	 *        
	 *         2015-2-13通过手机号码找回密码
	 */
	public function findpassbyphone() {
		$this->display ();
	}
	
	/**
	 *
	 * @author liuy
	 *        
	 *         2015-2-13通过邮箱地址找回密码
	 */
	public function findpassbyemail() {
		$this->display ();
	}
	
	/**
	 *
	 * @author 2015-1-29
	 */
	public function setpassword() {
		$this->display ();
	}
}