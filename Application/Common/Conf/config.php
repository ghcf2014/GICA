<?php
/**
 * 系统配文件
 * 所有系统级别的配置
 */
return array(
    /* 路由开启 */
    'URL_ROUTER_ON'   => true, 
    'URL_ROUTE_RULES' => array( //定义路由规则
        'home/:id\d'    => array('Home/Index','Home/Finance'),
        'home/:name'    => 'Home/Index',
        'home/:year\d/:month\d'  => 'Home/Index',
        // 'Home/:year/:month/:day' => array('Home/Borrow', 'status=1'),
        // 'Home/:id'               => 'Home/read',
        // 'Home/read/:id'          => '/Home/:1',
     ),
    /* 模块相关配置 */
    'AUTOLOAD_NAMESPACE' => array('Addons' => ONETHINK_ADDON_PATH), //扩展模块列表
    'MULTI_MODULE'=>true,//模块名显示隐藏
    'DEFAULT_MODULE'     => 'Home',
    'MODULE_DENY_LIST'   => array('Common','User','Admin','Install'),
    'MODULE_ALLOW_LIST'  => array('Home','Member'),
    'APP_GROUP_LIST' => 'Home,Admin,Member',//创建分组
    /* 系统数据加密设置 */
    'DATA_AUTH_KEY' => 'Y9k>up5P=Aa([EFr|DsO0cdSH3Jm]$W+Qxi.g)~Z', //默认数据加密KEY  
   // 'DATA_AUTH_KEY' => C('SYSTEM_DATA_KEY'), //默认数据加密KEY 
    /* 用户相关设置 */
    'USER_MAX_CACHE'     => 1000, //最大缓存用户数
    'USER_ADMINISTRATOR' => 1, //管理员用户ID
    /* URL配置 */
    'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL'            => 2, //URL模式
    'VAR_URL_PARAMS'       => '', // PATHINFO URL参数变量
    'URL_PATHINFO_DEPR'    => '/', //PATHINFO URL分割符
    /* 全局过滤配置 */
    'DEFAULT_FILTER' => '', //全局过滤函数
    'SHOW_PAGE_TRACE'=>false,
    // if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
    /* 数据库配置 */
    'DB_TYPE'   => 'mysql', // 数据库类型


   'DB_HOST'   => '127.0.0.1', // 服务器地址59.188.8.43
   // 'DB_HOST'   => '192.168.0.18', // 服务器地址59.188.8.43
      // 'DB_HOST'   => '59.188.8.43',
    'DB_NAME'   => 'gica', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root',  // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => 'gica_', // 数据库表前缀
// //  /* 数据库配置 */
//     'DB_TYPE'   => C('DATABASE_TYPE'), // 数据库类型
//    // 'DB_HOST'   => '127.0.0.1', // 服务器地址59.188.8.43
//    // 'DB_HOST'   => '192.168.0.18', // 服务器地址59.188.8.43
//      'DB_HOST'   => C('DATABASE_HOST'),
//     'DB_NAME'   => C('DATABASE_NAME'), // 数据库名
//     'DB_USER'   => C('DATABASE_USER'), // 用户名
//     'DB_PWD'    => C('DATABASE_PWD'),  // 密码
//     'DB_PORT'   => C('DATABASE_PORT'), // 端口
//     'DB_PREFIX' => C('DATABASE_PREFIX'), // 数据库表前缀
   

   /*伪静态**/ 
   // 'URL_HTML_SUFFIX'=>'do',
   // 'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg' ,


    /* 文档模型配置 (文档模型核心配置，请勿更改) */
    'DOCUMENT_MODEL_TYPE' => array(2 => '主题', 1 => '目录', 3 => '段落'),
    /*支付宝即时到帐*/
    'alipay_partner' => '',
    'alipay_key' => '',

    'alipay_seller_email' => '',
    /* 支付设置 */
        'payment' => array(
            'tenpay' => array(
                // 加密key，开通财付通账户后给予
                'key' => 'e82573dc7e6136ba414f2e2affbe39fa',
                // 合作者ID，财付通有该配置，开通财付通账户后给予
                'partner' => '1900000113'
            ),
            'alipay' => array(
                // 收款账号邮箱
                'email' => 'chenf003@yahoo.cn',
                // 加密key，开通支付宝账户后给予
                'key' => 'aaa',
                // 合作者ID，支付宝有该配置，开通易宝账户后给予
                'partner' => '2088101000137799'
            ),
            'aliwappay' => array(
                // 收款账号邮箱
                'email' => 'chenf003@yahoo.cn',
                // 加密key，开通支付宝账户后给予
                'key' => 'aaa',
                // 合作者ID，支付宝有该配置，开通易宝账户后给予
                'partner' => '2088101000137799'
            ),
            'palpay' => array(
                'business' => 'zyj@qq.com'
            ),
            'yeepay' => array(
                'key' => '69cl522AV6q613Ii4W6u8K6XuW8vM1N6bFgyv769220IuYe9u37N4y7rI4Pl',
                'partner' => '10001126856'
            ),
            'kuaiqian' => array(
                'key' => '1234567897654321',
                'partner' => '1000300079901'
            ),
            'unionpay' => array(
                'key' => '88888888',
                'partner' => '105550149170027'
            )
        )
    
	);