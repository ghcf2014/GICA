<?php

// 常量定义
const ONETHINK_ADDON_PATH = './Addons/';

/**
 * 系统公共库文件
 * 主要定义系统公共函数库
 */

/**
 * 检测用户是否登录
 *
 * @return integer 0-未登录，大于0-当前登录用户ID
 */
function is_login() {
	$user = session ( 'user_auth' );
	if (empty ( $user )) {
		return 0;
	} else {
		return session ( 'user_auth_sign' ) == data_auth_sign ( $user ) ? $user ['uid'] : 0;
	}
}
/**敏感操作提醒
*提示用户为敏感信息操作
*/
function is_sysmsg(){
    $uid=$_SESSION['gica_home']['user_auth']['uid'];
    $sys_count =M('z_system_msg')->where("status=0 and uid=%s",$uid)->count();
    $email_count =M('z_inner_msg')->where("status=0 and tid=%s",$uid)->count();
    $allcount =($sys_count+$email_count);
    if ($allcount>0){
    	return $allcount;
    }else {
    	return 0;
    }
}
/**
 * 检测当前用户是否为管理员
 *
 * @return boolean true-管理员，false-非管理员
 */
function is_administrator($uid = null) {
	$uid = is_null ( $uid ) ? is_login () : $uid;
	return $uid && (intval ( $uid ) === C ( 'USER_ADMINISTRATOR' ));
}

/**
 * 字符串转换为数组，主要用于把分隔符调整到第二个参数
 *
 * @param string $str
 *        	要分割的字符串
 * @param string $glue
 *        	分割符
 * @return array
 */
function str2arr($str, $glue = ',') {
	return explode ( $glue, $str );
}

/**
 * 数组转换为字符串，主要用于把分隔符调整到第二个参数
 *
 * @param array $arr
 *        	要连接的数组
 * @param string $glue
 *        	分割符
 * @return string
 */
function arr2str($arr, $glue = ',') {
	return implode ( $glue, $arr );
}

/**
 * 字符串截取，支持中文和其他编码
 *
 * @static
 *
 * @access public
 * @param string $str
 *        	需要转换的字符串
 * @param string $start
 *        	开始位置
 * @param string $length
 *        	截取长度
 * @param string $charset
 *        	编码格式
 * @param string $suffix
 *        	截断显示字符
 * @return string
 */
function msubstr($str, $start = 0, $length, $charset = "utf-8", $suffix = true) {
	if (function_exists ( "mb_substr" ))
		$slice = mb_substr ( $str, $start, $length, $charset );
	elseif (function_exists ( 'iconv_substr' )) {
		$slice = iconv_substr ( $str, $start, $length, $charset );
		if (false === $slice) {
			$slice = '';
		}
	} else {
		$re ['utf-8'] = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
		$re ['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
		$re ['gbk'] = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
		$re ['big5'] = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
		preg_match_all ( $re [$charset], $str, $match );
		$slice = join ( "", array_slice ( $match [0], $start, $length ) );
	}
	return $suffix ? $slice . '...' : $slice;
}
// 字符转换成"*"
function hidestr($str, $start = 0, $length, $charset = "utf-8", $suffix = true) {
	if (function_exists ( "mb_substr" ))
		$slice = mb_substr ( $str, $start, $length, $charset );
	elseif (function_exists ( 'iconv_substr' )) {
		$slice = iconv_substr ( $str, $start, $length, $charset );
		if (false === $slice) {
			$slice = '';
		}
	} else {
		$re ['utf-8'] = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
		$re ['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
		$re ['gbk'] = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
		$re ['big5'] = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
		preg_match_all ( $re [$charset], $str, $match );
		$slice = join ( "", array_slice ( $match [0], $start, $length ) );
	}
	return $suffix ? $slice . '****' : $slice;
}

/**
 * 系统加密方法
 * @param string $data
 *        	要加密的字符串
 * @param string $key
 *        	加密密钥
 * @param int $expire
 *        	过期时间 单位 秒
 * @return string
 */
function think_encrypt($data, $key = '', $expire = 0) {
	$key = md5 ( empty ( $key ) ? C ( 'DATA_AUTH_KEY' ) : $key );
	$data = base64_encode ( $data );
	$x = 0;
	$len = strlen ( $data );
	$l = strlen ( $key );
	$char = '';
	
	for($i = 0; $i < $len; $i ++) {
		if ($x == $l)
			$x = 0;
		$char .= substr ( $key, $x, 1 );
		$x ++;
	}
	
	$str = sprintf ( '%010d', $expire ? $expire + time () : 0 );
	
	for($i = 0; $i < $len; $i ++) {
		$str .= chr ( ord ( substr ( $data, $i, 1 ) ) + (ord ( substr ( $char, $i, 1 ) )) % 256 );
	}
	return str_replace ( array (
			'+',
			'/',
			'=' 
	), array (
			'-',
			'_',
			'' 
	), base64_encode ( $str ) );
}

/**
 * 系统解密方法
 *
 * @param string $data
 *        	要解密的字符串 （必须是think_encrypt方法加密的字符串）
 * @param string $key
 *        	加密密钥
 * @return string
 */
function think_decrypt($data, $key = '') {
	$key = md5 ( empty ( $key ) ? C ( 'DATA_AUTH_KEY' ) : $key );
	$data = str_replace ( array (
			'-',
			'_' 
	), array (
			'+',
			'/' 
	), $data );
	$mod4 = strlen ( $data ) % 4;
	if ($mod4) {
		$data .= substr ( '====', $mod4 );
	}
	$data = base64_decode ( $data );
	$expire = substr ( $data, 0, 10 );
	$data = substr ( $data, 10 );
	
	if ($expire > 0 && $expire < time ()) {
		return '';
	}
	$x = 0;
	$len = strlen ( $data );
	$l = strlen ( $key );
	$char = $str = '';
	
	for($i = 0; $i < $len; $i ++) {
		if ($x == $l)
			$x = 0;
		$char .= substr ( $key, $x, 1 );
		$x ++;
	}
	
	for($i = 0; $i < $len; $i ++) {
		if (ord ( substr ( $data, $i, 1 ) ) < ord ( substr ( $char, $i, 1 ) )) {
			$str .= chr ( (ord ( substr ( $data, $i, 1 ) ) + 256) - ord ( substr ( $char, $i, 1 ) ) );
		} else {
			$str .= chr ( ord ( substr ( $data, $i, 1 ) ) - ord ( substr ( $char, $i, 1 ) ) );
		}
	}
	return base64_decode ( $str );
}

/**
 * 数据签名认证
 *
 * @param array $data
 *        	被认证的数据
 * @return string 签名
 */
function data_auth_sign($data) {
	// 数据类型检测
	if (! is_array ( $data )) {
		$data = ( array ) $data;
	}
	ksort ( $data ); // 排序
	$code = http_build_query ( $data ); // url编码并生成query字符串
	$sign = sha1 ( $code ); // 生成签名
	return $sign;
}

/**
 * 对查询结果集进行排序
 *
 * @access public
 * @param array $list
 *        	查询结果
 * @param string $field
 *        	排序的字段名
 * @param array $sortby
 *        	排序类型
 *        	asc正向排序 desc逆向排序 nat自然排序
 * @return array
 *
 */
function list_sort_by($list, $field, $sortby = 'asc') {
	if (is_array ( $list )) {
		$refer = $resultSet = array ();
		foreach ( $list as $i => $data )
			$refer [$i] = &$data [$field];
		switch ($sortby) {
			case 'asc' : // 正向排序
				asort ( $refer );
				break;
			case 'desc' : // 逆向排序
				arsort ( $refer );
				break;
			case 'nat' : // 自然排序
				natcasesort ( $refer );
				break;
		}
		foreach ( $refer as $key => $val )
			$resultSet [] = &$list [$key];
		return $resultSet;
	}
	return false;
}

/**
 * 把返回的数据集转换成Tree
 *
 * @param array $list
 *        	要转换的数据集
 * @param string $pid
 *        	parent标记字段
 * @param string $level
 *        	level标记字段
 * @return array
 */
function list_to_tree($list, $pk = 'id', $pid = 'pid', $child = '_child', $root = 0) {
	// 创建Tree
	$tree = array ();
	if (is_array ( $list )) {
		// 创建基于主键的数组引用
		$refer = array ();
		foreach ( $list as $key => $data ) {
			$refer [$data [$pk]] = & $list [$key];
		}
		foreach ( $list as $key => $data ) {
			// 判断是否存在parent
			$parentId = $data [$pid];
			if ($root == $parentId) {
				$tree [] = & $list [$key];
			} else {
				if (isset ( $refer [$parentId] )) {
					$parent = & $refer [$parentId];
					$parent [$child] [] = & $list [$key];
				}
			}
		}
	}
	return $tree;
}

/**
 * 将list_to_tree的树还原成列表
 *
 * @param array $tree
 *        	原来的树
 * @param string $child
 *        	孩子节点的键
 * @param string $order
 *        	排序显示的键，一般是主键 升序排列
 * @param array $list
 *        	过渡用的中间数组，
 * @return array 返回排过序的列表数组
 * @author yangweijie <yangweijiester@gmail.com>
 */
function tree_to_list($tree, $child = '_child', $order = 'id', &$list = array()) {
	if (is_array ( $tree )) {
		foreach ( $tree as $key => $value ) {
			$reffer = $value;
			if (isset ( $reffer [$child] )) {
				unset ( $reffer [$child] );
				tree_to_list ( $value [$child], $child, $order, $list );
			}
			$list [] = $reffer;
		}
		$list = list_sort_by ( $list, $order, $sortby = 'asc' );
	}
	return $list;
}

/**
 * 格式化字节大小
 *
 * @param number $size
 *        	字节数
 * @param string $delimiter
 *        	数字和单位分隔符
 * @return string 格式化后的带单位的大小
 */
function format_bytes($size, $delimiter = '') {
	$units = array (
			'B',
			'KB',
			'MB',
			'GB',
			'TB',
			'PB' 
	);
	for($i = 0; $size >= 1024 && $i < 5; $i ++)
		$size /= 1024;
	return round ( $size, 2 ) . $delimiter . $units [$i];
}

/**
 * 设置跳转页面URL
 * 使用函数再次封装，方便以后选择不同的存储方式（目前使用cookie存储）
 *
 */
function set_redirect_url($url) {
	cookie ( 'redirect_url', $url );
}

/**
 * 获取跳转页面URL
 *
 * @return string 跳转页URL
 */
function get_redirect_url() {
	$url = cookie ( 'redirect_url' );
	return empty ( $url ) ? __APP__ : $url;
}

/**
 * 处理插件钩子
 *
 * @param string $hook
 *        	钩子名称
 * @param mixed $params
 *        	传入参数
 * @return void
 */
function hook($hook, $params = array()) {
	\Think\Hook::listen ( $hook, $params );
}

/**
 * 获取插件类的类名
 *
 * @param strng $name
 *        	插件名
 */
function get_addon_class($name) {
	$class = "Addons\\{$name}\\{$name}Addon";
	return $class;
}

/**
 * 获取插件类的配置文件数组
 *
 * @param string $name
 *        	插件名
 */
function get_addon_config($name) {
	$class = get_addon_class ( $name );
	if (class_exists ( $class )) {
		$addon = new $class ();
		return $addon->getConfig ();
	} else {
		return array ();
	}
}

/**
 * 插件显示内容里生成访问插件的url
 *
 * @param string $url
 *        	url
 * @param array $param
 *        	参数
 */
function addons_url($url, $param = array()) {
	$url = parse_url ( $url );
	$case = C ( 'URL_CASE_INSENSITIVE' );
	$addons = $case ? parse_name ( $url ['scheme'] ) : $url ['scheme'];
	$controller = $case ? parse_name ( $url ['host'] ) : $url ['host'];
	$action = trim ( $case ? strtolower ( $url ['path'] ) : $url ['path'], '/' );
	
	/* 解析URL带的参数 */
	if (isset ( $url ['query'] )) {
		parse_str ( $url ['query'], $query );
		$param = array_merge ( $query, $param );
	}
	
	/* 基础参数 */
	$params = array (
			'_addons' => $addons,
			'_controller' => $controller,
			'_action' => $action 
	);
	$params = array_merge ( $params, $param ); // 添加额外参数
	
	return U ( 'Addons/execute', $params );
}

/**
 * 时间戳格式化
 *
 * @param int $time        	
 * @return string 完整的时间显示
 */
function time_format($time = NULL, $format = 'Y-m-d H:i') {
	$time = $time === NULL ? NOW_TIME : intval ( $time );
	return date ( $format, $time );
}

/**
 * 根据用户ID获取用户名
 *
 * @param integer $uid
 *        	用户ID
 * @return string 用户名
 */
function get_username($uid = 0) {
	static $list;
	if (! ($uid && is_numeric ( $uid ))) { // 获取当前登录用户名
		return session ( 'user_auth.username' );
	}
	
	/* 获取缓存数据 */
	if (empty ( $list )) {
		$list = S ( 'sys_active_user_list' );
	}
	
	/* 查找用户信息 */
	$key = "u{$uid}";
	if (isset ( $list [$key] )) { // 已缓存，直接使用
		$name = $list [$key];
	} else { // 调用接口获取用户信息
		$User = new User\Api\UserApi ();
		$info = $User->info ( $uid );
		if ($info && isset ( $info [1] )) {
			$name = $list [$key] = $info [1];
			/* 缓存用户 */
			$count = count ( $list );
			$max = C ( 'USER_MAX_CACHE' );
			while ( $count -- > $max ) {
				array_shift ( $list );
			}
			S ( 'sys_active_user_list', $list );
		} else {
			$name = '';
		}
	}
	return $name;
}
//ID返回用户名
function get_uname($uid = 0) {
	$map = $uid;
	$name = M ( 'member' )->field ( 'nickname' )->find ( $map );
	// var_dump($name['nickname']);
	return $name ['nickname'];
}
//ID返回用户真实姓名
function get_real_name($uid = 0) {
	$map = $uid;
	$name = M ( 'z_member_info' )->field ( 'real_name' )->find ( $map );
	// var_dump($name['nickname']);
	return $name ['real_name'];
}
//ID返回借款用户名
function get_borrow_username($borrow_uid = 0) {
	$map = $borrow_uid;
	$name = M ( 'member' )->field ( 'nickname' )->find ( $map );
	// var_dump($name['nickname']);
	return $name ['nickname'];
}
function get_member_info($uid = 0) {
	$map = $uid;
	$name = M ( 'z_member_info' )->field ( 'city_now' )->find ( $map );
	// var_dump($name['nickname']);
	return $name ['city_now'];
}
function get_logo_url($uid = 0) {
	$map = $uid;
	$name = M ( 'ucenter_member' )->field ( 'logo_url' )->find ( $map );
	// var_dump($name['nickname']);
	return $name ['logo_url'];
}
//ID返回投资用户名
function get_investor_username($investor_uid = 0) {
	$map = $investor_uid;
	$name = M ( 'member' )->field ( 'nickname' )->find ( $map );
	// var_dump($name['nickname']);
	return $name ['nickname'];
}
function get_borrow_name($id = 0) {
	$map = $id;
	$name = M ( 'z_borrow_info' )->field ( 'borrow_name' )->find ( $map );
	// var_dump($name['nickname']);
	return $name ['borrow_name'];
}
function user_leve($id = 0) {
	if($id == 0){
		$name='非会员';
	}
	if($id == 1){
		$name='会员';
	}if($id == 3){
		$name='会员';
	}if($id == 4){
		$name='会员';
	}if($id == 5){
		$name='会员';
	}
	if($id == 6){
		$name='会员';
	}
	// var_dump($name['nickname']);
	return $name;
}
//标类型ID转换为中文
function get_borrow_type_name($id = 0) {
	if($id == 1){
		$name='信用标';
	}
	if($id == 2){
		$name='净值标';
	}if($id == 3){
		$name='秒还标';
	}if($id == 4){
		$name='担保标';
	}if($id == 5){
		$name='抵押标';
	}
	if($id == 6){
		$name='实地考察标';
	}
	// var_dump($name['nickname']);
	return $name;
}
//返回资金分类记录
function get_jilu_type($type = 0) {
	//收入
	if($type == 101){$name='线下充值';}
	if($type == 102){$name='手动充值';}
	// if($type == 3){
	// 	$name='取消提现';
	// }

	//支出
	if($type == 201){$name='提现失败';}
	if($type == 202){$name='提现成功';}
	if($type == 203){$name='待审核提现';}
	if($type == 204){$name='投标成功';}
	//状态审核



	// var_dump($name['nickname']);
	return $name;
}
//返回标还款方式
function get_repayment_type($type = 0) {
	if($type == 1){
		$name='按月还款';
	}
	if($type == 2){
		$name='手动充值';
	}if($type == 3){
		$name='取消提现';
	}if($type == 4){
		$name='提现失败';
	}if($type == 5){
		$name='等额本息';
	}
	if($type == 6){
		$name='先息后本';
	}
	if($type == 7){
		$name='一次性还款';
	}


	// var_dump($name['nickname']);
	return $name;
}
/**
 * 根据用户ID获取用户昵称
 *
 * @param integer $uid
 *        	用户ID
 * @return string 用户昵称
 */
function get_nickname($uid = 0) {
	static $list;
	if (! ($uid && is_numeric ( $uid ))) { // 获取当前登录用户名
		return session ( 'user_auth.username' );
	}
	
	/* 获取缓存数据 */
	if (empty ( $list )) {
		$list = S ( 'sys_user_nickname_list' );
	}
	
	/* 查找用户信息 */
	$key = "u{$uid}";
	if (isset ( $list [$key] )) { // 已缓存，直接使用
		$name = $list [$key];
	} else { // 调用接口获取用户信息
		$info = M ( 'Member' )->field ( 'nickname' )->find ( $uid );
		if ($info !== false && $info ['nickname']) {
			$nickname = $info ['nickname'];
			$name = $list [$key] = $nickname;
			/* 缓存用户 */
			$count = count ( $list );
			$max = C ( 'USER_MAX_CACHE' );
			while ( $count -- > $max ) {
				array_shift ( $list );
			}
			S ( 'sys_user_nickname_list', $list );
		} else {
			$name = '';
		}
	}
	return $name;
}

/**
 * 获取分类信息并缓存分类
 *
 * @param integer $id
 *        	分类ID
 * @param string $field
 *        	要获取的字段名
 * @return string 分类信息
 */
function get_category($id, $field = null) {
	static $list;
	
	/* 非法分类ID */
	if (empty ( $id ) || ! is_numeric ( $id )) {
		return '';
	}
	
	/* 读取缓存数据 */
	if (empty ( $list )) {
		$list = S ( 'sys_category_list' );
	}
	
	/* 获取分类名称 */
	if (! isset ( $list [$id] )) {
		$cate = M ( 'Category' )->find ( $id );
		if (! $cate || 1 != $cate ['status']) { // 不存在分类，或分类被禁用
			return '';
		}
		$list [$id] = $cate;
		S ( 'sys_category_list', $list ); // 更新缓存
	}
	return is_null ( $field ) ? $list [$id] : $list [$id] [$field];
}

/* 根据ID获取分类标识 */
function get_category_name($id) {
	return get_category ( $id, 'name' );
}

/* 根据ID获取分类名称 */
function get_category_title($id) {
	return get_category ( $id, 'title' );
}

/**
 * 获取顶级模型信息
 */
function get_top_model($model_id = null) {
	$map = array (
			'status' => 1,
			'extend' => 0 
	);
	if (! is_null ( $model_id )) {
		$map ['id'] = array (
				'neq',
				$model_id 
		);
	}
	$model = M ( 'Model' )->where ( $map )->field ( true )->select ();
	foreach ( $model as $value ) {
		$list [$value ['id']] = $value;
	}
	return $list;
}

/**
 * 获取文档模型信息
 *
 * @param integer $id
 *        	模型ID
 * @param string $field
 *        	模型字段
 * @return array
 */
function get_document_model($id = null, $field = null) {
	static $list;
	
	/* 非法分类ID */
	if (! (is_numeric ( $id ) || is_null ( $id ))) {
		return '';
	}
	
	/* 读取缓存数据 */
	if (empty ( $list )) {
		$list = S ( 'DOCUMENT_MODEL_LIST' );
	}
	
	/* 获取模型名称 */
	if (empty ( $list )) {
		$map = array (
				'status' => 1,
				'extend' => 1 
		);
		$model = M ( 'Model' )->where ( $map )->field ( true )->select ();
		foreach ( $model as $value ) {
			$list [$value ['id']] = $value;
		}
		S ( 'DOCUMENT_MODEL_LIST', $list ); // 更新缓存
	}
	
	/* 根据条件返回数据 */
	if (is_null ( $id )) {
		return $list;
	} elseif (is_null ( $field )) {
		return $list [$id];
	} else {
		return $list [$id] [$field];
	}
}

/**
 * 解析UBB数据
 *
 * @param string $data
 *        	UBB字符串
 * @return string 解析为HTML的数据
 */
function ubb($data) {
	// TODO: 待完善，目前返回原始数据
	return $data;
}

/**
 * 记录行为日志，并执行该行为的规则
 *
 * @param string $action
 *        	行为标识
 * @param string $model
 *        	触发行为的模型名
 * @param int $record_id
 *        	触发行为的记录id
 * @param int $user_id
 *        	执行行为的用户id
 * @return boolean
 */
function action_log($action = null, $model = null, $record_id = null, $user_id = null) {
	
	// 参数检查
	if (empty ( $action ) || empty ( $model ) || empty ( $record_id )) {
		return '参数不能为空';
	}
	if (empty ( $user_id )) {
		$user_id = is_login ();
	}
	
	// 查询行为,判断是否执行
	$action_info = M ( 'Action' )->getByName ( $action );
	if ($action_info ['status'] != 1) {
		return '该行为被禁用或删除';
	}
	
	// 插入行为日志
	$data ['action_id'] = $action_info ['id'];
	$data ['user_id'] = $user_id;
	$data ['action_ip'] = ip2long ( get_client_ip () );
	$data ['model'] = $model;
	$data ['record_id'] = $record_id;
	$data ['create_time'] = NOW_TIME;
	
	// 解析日志规则,生成日志备注
	if (! empty ( $action_info ['log'] )) {
		if (preg_match_all ( '/\[(\S+?)\]/', $action_info ['log'], $match )) {
			$log ['user'] = $user_id;
			$log ['record'] = $record_id;
			$log ['model'] = $model;
			$log ['time'] = NOW_TIME;
			$log ['data'] = array (
					'user' => $user_id,
					'model' => $model,
					'record' => $record_id,
					'time' => NOW_TIME 
			);
			foreach ( $match [1] as $value ) {
				$param = explode ( '|', $value );
				if (isset ( $param [1] )) {
					$replace [] = call_user_func ( $param [1], $log [$param [0]] );
				} else {
					$replace [] = $log [$param [0]];
				}
			}
			$data ['remark'] = str_replace ( $match [0], $replace, $action_info ['log'] );
		} else {
			$data ['remark'] = $action_info ['log'];
		}
	} else {
		// 未定义日志规则，记录操作url
		$data ['remark'] = '操作url：' . $_SERVER ['REQUEST_URI'];
	}
	
	M ( 'ActionLog' )->add ( $data );
	
	if (! empty ( $action_info ['rule'] )) {
		// 解析行为
		$rules = parse_action ( $action, $user_id );
		
		// 执行行为
		$res = execute_action ( $rules, $action_info ['id'], $user_id );
	}
}

/**
 * 解析行为规则
 * 规则定义 table:$table|field:$field|condition:$condition|rule:$rule[|cycle:$cycle|max:$max][;......]
 * 规则字段解释：table->要操作的数据表，不需要加表前缀；
 * field->要操作的字段；
 * condition->操作的条件，目前支持字符串，默认变量{$self}为执行行为的用户
 * rule->对字段进行的具体操作，目前支持四则混合运算，如：1+score*2/2-3
 * cycle->执行周期，单位（小时），表示$cycle小时内最多执行$max次
 * max->单个周期内的最大执行次数（$cycle和$max必须同时定义，否则无效）
 * 单个行为后可加 ； 连接其他规则
 *
 * @param string $action
 *        	行为id或者name
 * @param int $self
 *        	替换规则里的变量为执行用户的id
 * @return boolean array: ， 成功返回规则数组
 * @author huajie <banhuajie@163.com>
 */
function parse_action($action = null, $self) {
	if (empty ( $action )) {
		return false;
	}
	
	// 参数支持id或者name
	if (is_numeric ( $action )) {
		$map = array (
				'id' => $action 
		);
	} else {
		$map = array (
				'name' => $action 
		);
	}
	
	// 查询行为信息
	$info = M ( 'Action' )->where ( $map )->find ();
	if (! $info || $info ['status'] != 1) {
		return false;
	}
	
	// 解析规则:table:$table|field:$field|condition:$condition|rule:$rule[|cycle:$cycle|max:$max][;......]
	$rules = $info ['rule'];
	$rules = str_replace ( '{$self}', $self, $rules );
	$rules = explode ( ';', $rules );
	$return = array ();
	foreach ( $rules as $key => &$rule ) {
		$rule = explode ( '|', $rule );
		foreach ( $rule as $k => $fields ) {
			$field = empty ( $fields ) ? array () : explode ( ':', $fields );
			if (! empty ( $field )) {
				$return [$key] [$field [0]] = $field [1];
			}
		}
		// cycle(检查周期)和max(周期内最大执行次数)必须同时存在，否则去掉这两个条件
		if (! array_key_exists ( 'cycle', $return [$key] ) || ! array_key_exists ( 'max', $return [$key] )) {
			unset ( $return [$key] ['cycle'], $return [$key] ['max'] );
		}
	}
	
	return $return;
}

/**
 * 执行行为
 *
 * @param array $rules
 *        	解析后的规则数组
 * @param int $action_id
 *        	行为id
 * @param array $user_id
 *        	执行的用户id
 * @return boolean false 失败 ， true 成功
 */
function execute_action($rules = false, $action_id = null, $user_id = null) {
	if (! $rules || empty ( $action_id ) || empty ( $user_id )) {
		return false;
	}
	
	$return = true;
	foreach ( $rules as $rule ) {
		
		// 检查执行周期
		$map = array (
				'action_id' => $action_id,
				'user_id' => $user_id 
		);
		$map ['create_time'] = array (
				'gt',
				NOW_TIME - intval ( $rule ['cycle'] ) * 3600 
		);
		$exec_count = M ( 'ActionLog' )->where ( $map )->count ();
		if ($exec_count > $rule ['max']) {
			continue;
		}
		
		// 执行数据库操作
		$Model = M ( ucfirst ( $rule ['table'] ) );
		$field = $rule ['field'];
		$res = $Model->where ( $rule ['condition'] )->setField ( $field, array (
				'exp',
				$rule ['rule'] 
		) );
		
		if (! $res) {
			$return = false;
		}
	}
	return $return;
}

// 基于数组创建目录和文件
function create_dir_or_files($files) {
	foreach ( $files as $key => $value ) {
		if (substr ( $value, - 1 ) == '/') {
			mkdir ( $value );
		} else {
			@file_put_contents ( $value, '' );
		}
	}
}

if (! function_exists ( 'array_column' )) {
	function array_column(array $input, $columnKey, $indexKey = null) {
		$result = array ();
		if (null === $indexKey) {
			if (null === $columnKey) {
				$result = array_values ( $input );
			} else {
				foreach ( $input as $row ) {
					$result [] = $row [$columnKey];
				}
			}
		} else {
			if (null === $columnKey) {
				foreach ( $input as $row ) {
					$result [$row [$indexKey]] = $row;
				}
			} else {
				foreach ( $input as $row ) {
					$result [$row [$indexKey]] = $row [$columnKey];
				}
			}
		}
		return $result;
	}
}

/**
 * 获取表名（不含表前缀）
 *
 * @param string $model_id        	
 * @return string 表名
 */
function get_table_name($model_id = null) {
	if (empty ( $model_id )) {
		return false;
	}
	$Model = M ( 'Model' );
	$name = '';
	$info = $Model->getById ( $model_id );
	if ($info ['extend'] != 0) {
		$name = $Model->getFieldById ( $info ['extend'], 'name' ) . '_';
	}
	$name .= $info ['name'];
	return $name;
}

/**
 * 获取属性信息并缓存
 *
 * @param integer $id
 *        	属性ID
 * @param string $field
 *        	要获取的字段名
 * @return string 属性信息
 */
function get_model_attribute($model_id, $group = true, $fields = true) {
	static $list;
	
	/* 非法ID */
	if (empty ( $model_id ) || ! is_numeric ( $model_id )) {
		return '';
	}
	
	/* 获取属性 */
	if (! isset ( $list [$model_id] )) {
		$map = array (
				'model_id' => $model_id 
		);
		$extend = M ( 'Model' )->getFieldById ( $model_id, 'extend' );
		
		if ($extend) {
			$map = array (
					'model_id' => array (
							"in",
							array (
									$model_id,
									$extend 
							) 
					) 
			);
		}
		$info = M ( 'Attribute' )->where ( $map )->field ( $fields )->select ();
		$list [$model_id] = $info;
	}
	
	$attr = array ();
	if ($group) {
		foreach ( $list [$model_id] as $value ) {
			$attr [$value ['id']] = $value;
		}
		$model = M ( "Model" )->field ( "field_sort,attribute_list,attribute_alias" )->find ( $model_id );
		$attribute = explode ( ",", $model ['attribute_list'] );
		if (empty ( $model ['field_sort'] )) { // 未排序
			$group = array (
					1 => array_merge ( $attr ) 
			);
		} else {
			$group = json_decode ( $model ['field_sort'], true );
			
			$keys = array_keys ( $group );
			foreach ( $group as &$value ) {
				foreach ( $value as $key => $val ) {
					$value [$key] = $attr [$val];
					unset ( $attr [$val] );
				}
			}
			
			if (! empty ( $attr )) {
				foreach ( $attr as $key => $val ) {
					if (! in_array ( $val ['id'], $attribute )) {
						unset ( $attr [$key] );
					}
				}
				$group [$keys [0]] = array_merge ( $group [$keys [0]], $attr );
			}
		}
		if (! empty ( $model ['attribute_alias'] )) {
			$alias = preg_split ( '/[;\r\n]+/s', $model ['attribute_alias'] );
			$fields = array ();
			foreach ( $alias as &$value ) {
				$val = explode ( ':', $value );
				$fields [$val [0]] = $val [1];
			}
			foreach ( $group as &$value ) {
				foreach ( $value as $key => $val ) {
					if (! empty ( $fields [$val ['name']] )) {
						$value [$key] ['title'] = $fields [$val ['name']];
					}
				}
			}
		}
		$attr = $group;
	} else {
		foreach ( $list [$model_id] as $value ) {
			$attr [$value ['name']] = $value;
		}
	}
	return $attr;
}

/**
 * 调用系统的API接口方法（静态方法）
 * api('User/getName','id=5'); 调用公共模块的User接口的getName方法
 * api('Admin/User/getName','id=5'); 调用Admin模块的User接口
 *
 * @param string $name
 *        	格式 [模块名]/接口名/方法名
 * @param array|string $vars
 *        	参数
 */
function api($name, $vars = array()) {
	$array = explode ( '/', $name );
	$method = array_pop ( $array );
	$classname = array_pop ( $array );
	$module = $array ? array_pop ( $array ) : 'Common';
	$callback = $module . '\\Api\\' . $classname . 'Api::' . $method;
	if (is_string ( $vars )) {
		parse_str ( $vars, $vars );
	}
	return call_user_func_array ( $callback, $vars );
}

/**
 * 根据条件字段获取指定表的数据
 *
 * @param mixed $value
 *        	条件，可用常量或者数组
 * @param string $condition
 *        	条件字段
 * @param string $field
 *        	需要返回的字段，不传则返回整个数据
 * @param string $table
 *        	需要查询的表
 */
function get_table_field($value = null, $condition = 'id', $field = null, $table = null) {
	if (empty ( $value ) || empty ( $table )) {
		return false;
	}
	
	// 拼接参数
	$map [$condition] = $value;
	$info = M ( ucfirst ( $table ) )->where ( $map );
	if (empty ( $field )) {
		$info = $info->field ( true )->find ();
	} else {
		$info = $info->getField ( $field );
	}
	return $info;
}

/**
 * 获取链接信息
 *
 * @param int $link_id        	
 * @param string $field        	
 * @return 完整的链接信息或者某一字段
 */
function get_link($link_id = null, $field = 'url') {
	$link = '';
	if (empty ( $link_id )) {
		return $link;
	}
	$link = M ( 'Url' )->getById ( $link_id );
	if (empty ( $field )) {
		return $link;
	} else {
		return $link [$field];
	}
}

/**
 * 获取文档封面图片
 *
 * @param int $cover_id        	
 * @param string $field        	
 * @return 完整的数据 或者 指定的$field字段值
 */
function get_cover($cover_id, $field = null) {
	if (empty ( $cover_id )) {
		return false;
	}
	$picture = M ( 'Picture' )->where ( array (
			'status' => 1 
	) )->getById ( $cover_id );
	if ($field == 'path') {
		if (! empty ( $picture ['url'] )) {
			$picture ['path'] = $picture ['url'];
		} else {
			$picture ['path'] = __ROOT__ . $picture ['path'];
		}
	}
	return empty ( $field ) ? $picture : $picture [$field];
}

/**
 * 检查$pos(推荐位的值)是否包含指定推荐位$contain
 *
 * @param number $pos
 *        	推荐位的值
 * @param number $contain
 *        	指定推荐位
 * @return boolean true 包含 ， false 不包含
 */
function check_document_position($pos = 0, $contain = 0) {
	if (empty ( $pos ) || empty ( $contain )) {
		return false;
	}
	
	// 将两个参数进行按位与运算，不为0则表示$contain属于$pos
	$res = $pos & $contain;
	if ($res !== 0) {
		return true;
	} else {
		return false;
	}
}

/**
 * 获取数据的所有子孙数据的id值
 */
function get_stemma($pids, Model &$model, $field = 'id') {
	$collection = array ();
	
	// 非空判断
	if (empty ( $pids )) {
		return $collection;
	}
	
	if (is_array ( $pids )) {
		$pids = trim ( implode ( ',', $pids ), ',' );
	}
	$result = $model->field ( $field )->where ( array (
			'pid' => array (
					'IN',
					( string ) $pids 
			) 
	) )->select ();
	$child_ids = array_column ( ( array ) $result, 'id' );
	
	while ( ! empty ( $child_ids ) ) {
		$collection = array_merge ( $collection, $result );
		$result = $model->field ( $field )->where ( array (
				'pid' => array (
						'IN',
						$child_ids 
				) 
		) )->select ();
		$child_ids = array_column ( ( array ) $result, 'id' );
	}
	return $collection;
}

/**
 * 验证分类是否允许发布内容
 *
 * @param integer $id
 *        	分类ID
 * @return boolean true-允许发布内容，false-不允许发布内容
 */
function check_category($id) {
	if (is_array ( $id )) {
		$id ['type'] = ! empty ( $id ['type'] ) ? $id ['type'] : 2;
		$type = get_category ( $id ['category_id'], 'type' );
		$type = explode ( ",", $type );
		return in_array ( $id ['type'], $type );
	} else {
		$publish = get_category ( $id, 'allow_publish' );
		return $publish ? true : false;
	}
}

/**
 * 检测分类是否绑定了指定模型
 *
 * @param array $info
 *        	模型ID和分类ID数组
 * @return boolean true-绑定了模型，false-未绑定模型
 */
function check_category_model($info) {
	$cate = get_category ( $info ['category_id'] );
	$array = explode ( ',', $info ['pid'] ? $cate ['model_sub'] : $cate ['model'] );
	return in_array ( $info ['model_id'], $array );
}
/*
 * $ <- 4 -> $ <- 4 -> $ <- 4 -> 兆 千 百 十 亿 千 百 十 万 千 百 十 圆 12 11 10 9 8 7 6 5 4 3 2 1 0 兆/亿/万是区间单位 金额转大写
 */
function money_upper($money = 0) {
	$numbers = array (
			'零',
			'壹',
			'贰',
			'叁',
			'肆',
			'伍',
			'陆',
			'柒',
			'捌',
			'玖' 
	);
	$minunits = array (
			'毫',
			'厘',
			'分',
			'角' 
	);
	$units = array (
			'圆',
			'拾',
			'佰',
			'仟',
			'万',
			'拾',
			'佰',
			'仟',
			'亿',
			'拾',
			'佰',
			'仟',
			'兆',
			'拾',
			'佰',
			'仟' 
	);
	if (empty ( $money ))
		return 0;
	list ( $decimal, $integer ) = explode ( '.', strrev ( $money ) );
	
	if (empty ( $integer )) {
		$integer = $decimal;
		$decimal = 0;
	}
	$return = ($decimal == 0) ? '整' : '';
	if ($decimal != 0) {
		$decimal = str_pad ( $decimal, 4, '0', STR_PAD_LEFT );
		for($i = 0; $i < 4; $i ++) {
			if ($decimal [$i] == 0 && $decimal [$i - 1] == 0)
				continue;
			$unit = ($decimal [$i] == 0) ? '' : $minunits [$i];
			$return = $numbers [$decimal [$i]] . $unit . $return;
		}
	}
	$length = strlen ( $integer );
	if ($length > 16) { // 金额超大时,直接返回转换数字
		for($i = 0; $i < $length; $i ++) {
			$return = $numbers [$integer [$i]] . $return;
		}
		return $return;
	}
	
	for($i = 0; $i < $length; $i ++) {
		if ($i > 0 && $integer [$i] == 0 && $integer [$i - 1] == 0 && $i % 4 != 0)
			continue; // 当前为0,且小一位也是0,且不在区间单位上,则为空
				          
		// 当前为0,大一位也是0,还在区间单位上,则为单位为空.如: 100000000 1亿就不能保留后面的单位万.
		if ((($i % 4 == 0 && substr ( $integer, $i, 4 ) == '0000') || ($i % 4 != 0 && $integer [$i] == 0)) && $i > 0) {
			$unit = ''; // 不带单位
		} else {
			$unit = $units [$i];
		}
		$number = ($integer [$i] == 0 && $i % 4 == 0) ? '' : $numbers [$integer [$i]]; // 当前为0,且在区间单位上,则为空
		$return = $number . $unit . $return;
	}
	return $return;
}
// /////////////////////////
// 发送邮件
// function send_mail($to = '', $subject = '', $body = '', $name = '', $attachment = null){ $from_email = C('MAIL_SMTP_USER'); $from_name = C('WEB_SITE'); $reply_email = '';
// Vendor('PHPMailer.PHPMailerAutoload');
// $reply_name = '';

// // new phpmailer();
// // $mail = new THINK\PHPMailer\phpmailer();
// import('THINK.PHPMailer.phpmailer');//从PHPMailer目录导入phpmailer.class.php类文件
// $mail = new PHPMailer; //实例化PHPMailer
// $mail->CharSet = 'UTF-8'; //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
// $mail->IsSMTP(); // 设定使用SMTP服务
// $mail->SMTPDebug = 0; // 关闭SMTP调试功能
// // 1 = errors and messages
// // 2 = messages only
// $mail->SMTPAuth = true; // 启用 SMTP 验证功能
// $mail->SMTPSecure = ''; // 使用安全协议
// $mail->Host = C('MAIL_SMTP_HOST'); // SMTP 服务器
// $mail->Port = C('MAIL_SMTP_PORT'); // SMTP服务器的端口号
// $mail->Username = C('MAIL_SMTP_USER'); // SMTP服务器用户名
// $mail->Password = C('MAIL_SMTP_PASS'); // SMTP服务器密码
// $mail->SetFrom($from_email, $from_name);
// $replyEmail = $reply_email?$reply_email:$from_email;
// $replyName = $reply_name?$reply_name:$from_name;
// if($to == ''){
// $to = C('MAIL_SMTP_CE');//邮件地址为空时，默认使用后台默认邮件测试地址
// }
// if($name == ''){
// $name = C('WEB_SITE');//发送者名称为空时，默认使用网站名称
// }
// if($subject == ''){
// $subject = C('WEB_SITE_TITLE');//邮件主题为空时，默认使用网站标题
// }
// if($body == ''){
// $body = C('WEB_SITE_DESCRIPTION');//邮件内容为空时，默认使用网站描述
// }
// $mail->AddReplyTo($replyEmail, $replyName);
// $mail->Subject = $subject;
// $mail->MsgHTML($body);//解析
// $mail->AddAddress($to, $name);
// if(is_array($attachment)){ // 添加附件
// foreach ($attachment as $file){
// is_file($file) && $mail->AddAttachment($file);
// }
// }
// return $mail->Send() ? true : $mail->ErrorInfo;//返回错误信息
// }
function sendMail($to, $subject, $content) {
	Vendor ( 'PHPmailer.PHPMailerAutoload' );
	
	$mail = new PHPMailer (); // 实例化
	$mail->IsSMTP (); // 启用SMTP
	$mail->Host = C ( 'MAIL_HOST' ); // smtp服务器的名称（这里以126邮箱为例）
	$mail->SMTPAuth = C ( 'MAIL_SMTPAUTH' ); // 启用smtp认证
	$mail->Username = C ( 'MAIL_USERNAME' ); // 你的邮箱名
	$mail->Password = C ( 'MAIL_PASSWORD' ); // 邮箱密码
	$mail->From = C ( 'MAIL_FROM' ); // 发件人地址（也就是你的邮箱地址）
	$mail->FromName = C ( 'MAIL_FROMNAME' ); // 发件人姓名
	$mail->AddAddress ( $to, "name" );
	$mail->WordWrap = 50; // 设置每行字符长度
	$mail->IsHTML ( C ( 'MAIL_ISHTML' ) ); // 是否HTML格式邮件
	$mail->CharSet = C ( 'MAIL_CHARSET' ); // 设置邮件编码
	$mail->Subject = $subject; // 邮件主题
	$mail->Body = $content; // 邮件内容
	$mail->AltBody = "This is the body in plain text for non-HTML mail clients"; // 邮件正文不支持HTML的备用显示
	// echo "消息发送成功。".C ( 'MAIL_SMTPAUTH' )."O(∩_∩)O";
	if (! $mail->Send ()) {
		echo "消息不能发送。<p>";
		echo "邮箱发送出现错误: " . $mail->ErrorInfo;
		// exit ();
	} else {
		// $text="消息发送成功。O(∩_∩)O";
        // return $text;//注册返回
		// echo "消息发送成功。O(∩_∩)O";//问题返回
		return true;
	}
}
// 这样在模版中调用的话，只需要用 {$vo.title|subtext=10} 这样即可，同时实现了，如果没超出长度，则不追加省略号的效果。
function subtext($text, $length) {
	if (mb_strlen ( $text, 'utf8' ) > $length)
		return mb_substr ( $text, 0, $length, 'utf8' ) . '...';
	return $text;
}
// 短信发送函数方法
// function sendsms($mob, $content) {
// 	$uid = $msgconfig ['sms'] ['user3']; // 分配给你的账号
// 	$pwd = $msgconfig ['sms'] ['pass3']; // 密码
// 	$mob = $mob; // 发送号码用逗号分隔
// 	$content = urlencode ( auto_charset ( $content, "utf-8", 'gbk' ) ); // 短信内容
	
// 	$sendurl = "http://106.ihuyi.cn/webservice/sms.php?method=Submit&";

// 	$sendurl .= 'account=cf_gonghecaifu&password=1234567&mobile=' . $mob . '&content=' . $content;
// 	$d = @file_get_contents ( $sendurl, false );
	
// 	preg_match_all ( '/
//     <response>
//     (.*)<\/response>/isU', $d, $arr );
	
// 	foreach ( $arr [1] as $k => $v ) {
// 		preg_match_all ( '#
//     <error>(.*)</error>
//     #isU',$v,$ar[$k]);
//     $data[]=$ar[$k][1];
//     }

//     if($data[0][0]=="0"){
//     return true;
//     echo "消息发送成功。O(∩_∩)O";
//     }else{
//     return false;
    
//     echo "消息发送失败。";
//     }
//     #isU', $v, $ar [$k] );
// 		$data [] = $ar [$k] [1];
// 	}
	
// 	if ($data [0] [0] == "0") {
// 		return true;
// 		echo "消息发送成功。O(∩_∩)O";
// 	} else {
// 		return false;
// 		echo "消息发送失败。";
// 	}
	// function random($length = 6 , $numeric = 0) {
	// 	PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
	// 	if($numeric) {
	// 		$hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
	// 	} else {
	// 		$hash = '';
	// 		$chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
	// 		$max = strlen($chars) - 1;
	// 		for($i = 0; $i < $length; $i++) {
	// 			$hash .= $chars[mt_rand(0, $max)];
	// 		}
	// 	}
	// 	return $hash;
	// }
	function Post($curlPost,$url){
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_NOBODY, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
		$return_str = curl_exec($curl);
		curl_close($curl);
		return $return_str;
    }
    function xml_to_array($xml){
		$reg = "/<(\w+)[^>]*>([\\x00-\\xFF]*)<\\/\\1>/";
		if(preg_match_all($reg, $xml, $matches)){
			$count = count($matches[0]);
			for($i = 0; $i < $count; $i++){
			$subxml= $matches[2][$i];
			$key = $matches[1][$i];
				if(preg_match( $reg, $subxml )){
					$arr[$key] = xml_to_array( $subxml );
				}else{
					$arr[$key] = $subxml;
				}
			}
		}
		return $arr;
	}
    function sendsms($mobile,$content){
    	$mobile = $_POST['mobile'];
        $send_code = $_POST['send_code'];
        // $mobile_code = random(4,1);
    	$account=C ( 'SMS_ACCOUNT' );
		$password=C ( 'SMS_PASSWORD' );

    	// $account="cf_gonghecaifu";
        //    $password="1234567";
    	$target = "http://106.ihuyi.cn/webservice/sms.php?method=Submit";
    	$post_data = "account=".$account."&password=".$password."&mobile=".$mobile."&content=".rawurlencode("您的验证码是：".$mobile_code."。请不要把验证码泄露给其他人。");

        //密码可以使用明文密码或使用32位MD5加密
        $gets =  xml_to_array(Post($post_data, $target));
  //       $gets['SubmitResult']['msg']='已发送';
		// echo $gets['SubmitResult']['msg'];
		if($gets['SubmitResult']['code']==2){
			$_SESSION['mobile'] = $mobile;
			$_SESSION['mobile_code'] = $mobile_code;
		}
		$gets['SubmitResult']['msg']='已发送';
		// echo $gets['SubmitResult']['msg'];
		return true;
    }
    function isPersonalCard($username) {
        if (!$username) {
            return false;
        }
        return preg_match('#^[\d]{15}$|^[\d]{18}$#', $username) ? true : false;
    }
    function isEmail($username) {
        if (!$username) {
            return false;
        }
        return preg_match('#[a-z0-9&\-_.]+@[\w\-_]+([\w\-.]+)?\.[\w\-]+#is', $username) ? true : false;
    }
    function isMobile($username) {
        if (!$username) {
            return false;
        }
        return preg_match('#^13[\d]{9}$|14^[0-9]\d{8}|^15[0-9]\d{8}$|^18[0-9]\d{8}$#', $username) ? true : false;
    }
    function isInvalidStr($username) {
        if (!$username) {
            return false;
        }
        return preg_match('#[!#$%^&*(){}~`"\';:?+=<>/\[\]]+#', $username) ? true : false;
    }
    function isusername($username) {
        if (!$username) {
            return false;
        }
        return preg_match('/^[a-z\d_]{5,20}$/i', $username) ? true : false;
    }
    //消息发送站
    function inner_msg($uid,$opertype,$action,$title){
    	//站内信
    	$title=opertype($opertype);

		$data['uid']=$uid;
		$data['tid']=$uid;
		$data['title']=$title;
		$data['msg']=$action;
		$data['msgclass']=$opertype;
		$data['way']='123';
		$data['send_time']=time();


	    // if ($result['sys_msg']=='1'){
	     if ($msgs =M('z_inner_msg')->add($data)) {
	     	return true;
	     }
	     return false;

	    // }
    	//邮件
    	//短信
    	// $a = SendMail($email,'工合财富账户通知',':'.$content.'，请注意账户安全！如有任何疑问，可拨打客服电话:<u style="color:red;text-decoration:underline">400-123-4567</u>，或者登陆官网：www.ghcf.com.cn，以确认账户信息！');
    }
    function opertype($opertype){
    	static $type = array(
            // Informational 1xx
            1 => '账户通知',
            2 => '系统通知',
            // Success 2xx
            3 => '活动通知',
            4 => '好友通知',
            5 => '审核通知',
            6 => '工合团队通知'
    	);
    	if(isset($type[$opertype])) {
    	return $type[$opertype];
       }
       return false;

    }
   //  function system_msg($action){
   //     $uid=is_login();
   //  	$sysdata= M('z_systemset');
	  //   $arr['uid']=$uid;
	  //   $sysresult=$sysdata->where($arr)->select();
	  //   $result=$sysresult[0];
	  //   if ($result['sys_msg']=='1'){
	  //   	 $danger =array(
   //              "username"=>$_SESSION[gica_home]['user_auth']['username'],
   //              "uid" =>$_SESSION[gica_home]['user_auth']['uid'],
   //              "action" =>$action,
   //              "status" =>'0'
	  //           );
	  //    	$msgs =M('z_system_msg')->add($danger);
	  //   }
	  //   if ($result['email_msg']=='1'){
	  //   		$arrs['id']=$uid;
	  //   		$userdata=M('ucenter_member');
	  //   		$userresult=$userdata->where($arrs)->select();
	  //   		$email=$userresult[0]['email'];
	  //   		$username=$userresult[0]['username'];
			// 	$realnames=M('z_member_info');
			// 	$real['uid']=$uid;
			// 	$realname=$realnames->where($real)->select();
			// 	$real_name=$realname[0]['real_name'];
			// 	$content="尊敬的会员：<u style='color:red;text-decoration:underline'>".$real_name."</u>，您好，您的工合财富登录账户：".$username."<u style='color:red;text-decoration:underline'>".$action."</u>";
			// 	$a = SendMail($email,'工合财富账户通知',':'.$content.'，请注意账户安全！如有任何疑问，可拨打客服电话:<u style="color:red;text-decoration:underline">400-123-4567</u>，或者登陆官网：www.ghcf.com.cn，以确认账户信息！');
	  //   }
	  //   if ($result["short_msg"]=='1'){
			// $arrs['id']=$uid;
			// $userdata=M('ucenter_member');
			// $userresult=$userdata->where($arrs)->select();
			// $email=$userresult[0]['email'];
			// $username=$userresult[0]['username'];
			// $realnames=M('z_member_info');
			// $real['uid']=$uid;
			// $realname=$realnames->where($real)->select();
			// $real_name=$realname[0]['real_name'];
			// $content="尊敬的会员：".$real_name."，您好，您的工合财富注册账户：".$username."，".$action."，请注意账户安全！如有任何疑问，可拨打客服电话:400-123-4567，或者登陆官网：www.ghcf.com.cn，以确认账户信息！";
	  //   	$userdata=M('ucenter_member');
   //  		$arrs['id']=$uid;
   //  		$userresult=$userdata->where($arrs)->select();
   //  		$mobile=$userresult[0]['mobile'];
	  //   	$account=C ( 'SMS_ACCOUNT' );
			// $password=C ( 'SMS_PASSWORD' );
	  //   	$target = "http://106.ihuyi.cn/webservice/sms.php?method=Submit";
	  //   	$post_data = "account=".$account."&password=".$password."&mobile=".$mobile."&content=".$content;
	  //   	$gets =  xml_to_array(Post($post_data, $target));
	  //   }

   //  }
	function register($uid){
			$arrs['id']=$uid;
			$userdata=M('ucenter_member');
			$userresult=$userdata->where($arrs)->select();
			$email=$userresult[0]['email'];
			$username=$userresult[0]['username'];
			$content="恭喜您成功注册工合财富账户，登录名为".$username."，请及时验证注册邮箱：".$email."，请注意账户安全！如有任何疑问，可拨打客服电话:400-123-4567。";
	    	$userdata=M('ucenter_member');
    		$userresult=$userdata->where($arrs)->select();
			$mobile=$userresult[0]['mobile'];
	    	$account=C ( 'SMS_ACCOUNT' );
			$password=C ( 'SMS_PASSWORD' );
	    	$target = "http://106.ihuyi.cn/webservice/sms.php?method=Submit";
	    	$post_data = "account=".$account."&password=".$password."&mobile=".$mobile."&content=".$content;
	    	$gets =  xml_to_array(Post($post_data, $target));
	}
