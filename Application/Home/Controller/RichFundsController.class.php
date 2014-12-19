<?php

namespace Home\Controller;

use Think\Controller;

/**
 * 基金版本入口类
 *
 * @author Administrator
 *        
 */
class RichFundsController extends Controller {
	
	/**
	 *
	 * @author liuy 2014-12-19
	 *        
	 *         基金入口方法(Init入口)
	 */
	public function index() {
		$this->display ();
	}
}
