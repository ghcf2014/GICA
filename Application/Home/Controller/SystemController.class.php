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
	 * @author 2015-1-29找回密码
	 */
	public function findpassword() {
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