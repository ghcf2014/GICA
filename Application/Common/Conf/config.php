<?php

/**
 * 系统配文件
 * 所有系统级别的配置
 */
return array(
    /* 模块相关配置 */
    'AUTOLOAD_NAMESPACE' => array('Addons' => ONETHINK_ADDON_PATH), //扩展模块列表
    'DEFAULT_MODULE'     => 'Home',
    'MODULE_DENY_LIST'   => array('Common','User','Admin','Install'),
    //'MODULE_ALLOW_LIST'  => array('Home','Admin'),
    'APP_GROUP_LIST' => 'Home,Admin,Member',//创建分组

    /* 系统数据加密设置 */
    'DATA_AUTH_KEY' => '8NKsdDk$2[}^`w61</Ch;&v5qolU-SZ3]LO#=jbQ', //默认数据加密KEY

    /* 用户相关设置 */
    'USER_MAX_CACHE'     => 1000, //最大缓存用户数
    'USER_ADMINISTRATOR' => 1, //管理员用户ID

    /* URL配置 */
    'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL'            => 3, //URL模式
    'VAR_URL_PARAMS'       => '', // PATHINFO URL参数变量
    'URL_PATHINFO_DEPR'    => '/', //PATHINFO URL分割符

    /* 全局过滤配置 */
    'DEFAULT_FILTER' => '', //全局过滤函数
    'SHOW_PAGE_TRACE'=>false,

    /* 数据库配置 */
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'gica', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root',  // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => 'gica_', // 数据库表前缀

    /* 文档模型配置 (文档模型核心配置，请勿更改) */
    'DOCUMENT_MODEL_TYPE' => array(2 => '主题', 1 => '目录', 3 => '段落'),

    /* 自定义标签集*/
    // 'TAGLIB_PRE_LOAD'=>"Html,Cx,Hzsj"

    // 配置邮件发送服务器
    
    // 'MAIL_TYPE' =>'smtp',
    //  'MAIL_SMTP_HOST' =>'smtp.exmail.qq.com',
    //  'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
    //  'MAIL_SMTP_USER' =>'admin@spiralcats.com',
    //  'MAIL_SMTP_CE' =>'380003832@qq.com',
    //  'MAIL_FROMNAME' =>'cnsecer',
    //  'MAIL_SMTP_PASS' =>'hzsj120192',
    //  'MAIL_CHARSET' =>'utf-8',
    //  'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件

      // 配置邮件发送服务器
	 'MAIL_HOST' =>'smtp.exmail.qq.com',
	 'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
	 'MAIL_USERNAME' =>'admin@spiralcats.com',
	 'MAIL_FROM' =>'admin@spiralcats.com',
	 'MAIL_FROMNAME' =>'工合财富',
	 'MAIL_PASSWORD' =>'hzsj120192',
	 'MAIL_CHARSET' =>'utf-8',
	 'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件
	);
