<?php

if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

/**
 * 系统调试设置
 */
define('APP_DEBUG', true );
define('BIND_MODULE','Member');

/**
 * 应用目录设置
 */
define ( 'APP_PATH', './Application/' );


/**
 * 缓存目录设置
 */
define ( 'RUNTIME_PATH', './Runtime/' );

/**
 * 引入核心入口
 */
require './ThinkPHP/ThinkPHP.php';