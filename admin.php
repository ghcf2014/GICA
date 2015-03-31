<?php
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

/**
 * 系统调试设置
 * 项目正式部署后请设置为false
 */
define('APP_DEBUG', true );
define('BIND_MODULE','Admin');

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
 * ThinkPHP亦可移动到WEB以外的目录
 */
require './ThinkPHP/ThinkPHP.php';