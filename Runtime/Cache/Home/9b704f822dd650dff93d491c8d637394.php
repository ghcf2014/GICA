<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	   <title>工合基金_首页</title>
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
    <!-- one样式 -->
    
    <!--<script type="text/javascript" src="/Public/static/bootstrap/js/bootstrap.min.js"></script>-->
    <link href="/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- <link href="/Public/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> -->
    <link href="/Public/static/bootstrap/css/docs.css" rel="stylesheet">
    <!-- <link href="/Public/static/bootstrap/css/onethink.css" rel="stylesheet"> -->

	<script type="text/javascript" src="/Public/static/rzg_js/i_banner1.js"></script>
	<script type="text/javascript" src="/Public/static/rzg_js/banner.js"></script>
	<script type="text/javascript" src="/Public/static/rzg_js/common.js"></script>
	<script type="text/javascript" src="/Public/static/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/Public/static/jquery.form.js"></script>

	<!-- <link rel="stylesheet" type="text/css" href="/Public/Admin/css/module.css">

	<link rel="stylesheet" href="/Public/Admin/css/module.css" type="text/css">
	<link rel="stylesheet" href="/Public/static/rzg_css/style.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/base.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/css.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/cjwt.css" type="text/css"></link>

	<link rel="stylesheet" href="/Public/static/rzg_css/css.css"  type="text/css" />  -->
	<link rel="stylesheet" href="/Public/static/rzg_css/css.css"  type="text/css"/>
	<!-- 引入弹窗样式 -->
    <!--<link rel="stylesheet" type="text/css" href="/Public/static/ymPrompt-4.0-B-20090302/skin/qq/ymPrompt.css" />-->
    <!--<link rel="stylesheet" href="/Public/static/kindeditor/themes/default/default.css" />-->
    <!--<script charset="utf-8" src="/Public/static/kindeditor/kindeditor-min.js"></script>-->
    <!--<script charset="utf-8" src="/Public/static/kindeditor/lang/zh_CN.js"></script>-->
    <!--<script charset="utf-8" src="/Public/static/kindeditor/jquery-1.9.1.min.js"></script>-->
	<!-- 引入layer -->
	<script type="text/javascript" src="/Public/static/layer/layer.min.js"></script>
	<script type="text/javascript" src="/Public/static/layer/extend/layer.ext.js"></script>

	<!-- 引入JQUERY UI器   当局  有冲突--> 
	<link rel="stylesheet" type="text/css" href="/Public/static/datepicker/css/jquery-ui.css" /> 
	<!--<script type="text/javascript" src="/Public/static/datepicker/js/jquery.min.js"></script>--> 
    <!--<script type="text/javascript" src="/Public/static/datepicker/js/jquery-ui-datepicker.js"></script> -->
    
    <!--表单验证-->
    <!--<script type="text/javascript" src="/Public/static/jquery.validate.js"></script>-->
    <!--<script type="text/javascript" src="/Public/static/validate.js"></script>-->
    <!--<script type="text/javascript" src="/Public/static/validate_expand.js"></script>-->

    
    
	<link rel="stylesheet" href="/Public/Home/css/style.css" type="text/css" />
	<script type="text/javascript" src="/Public/Home/js/banner.js"></script>
	<!--<script type="text/javascript" src="/Public/Home/js/jquery-1.7.2.min.js"></script>-->
	<script type="text/javascript" src="/Public/Home/js/common.js"></script>
	<!--<script type="text/javascript" src="/Public/Home/js/jquery.js"></script>-->
	<script type="text/javascript" src="/Public/Home/js/xszy_cont.js"></script>
	<script type="text/javascript" src="/Public/Home/js/anquanshezhi.js"></script>
    <script type="text/javascript" src="/Public/Home/js/biaodexiangqing.js"></script>
     <script type="text/javascript" src="/Public/Home/js/guangyuwomen.js"></script>
     <script type="text/javascript" src="/Public/Home/js/wodezhanghu.js"></script>
      <script type="text/javascript" src="/Public/Home/js/fabujiekuan.js"></script>
    


</head>
<body>
	<!-- 头部 -->
	<!--header start-->
<div class="header_out">
	<div class="header">
		<ul>
			<li class="weibo"><div></div><a href="">官方微博</a></li>
			<li class="weixin"><div></div><a href="">官方微信</a></li>
			<li class="call"><div></div><a href="">客户热线：400-123-4567</a></li>
		</ul>
		<?php if(is_login()): ?><p>
			<a href="<?php echo U('Member/Index/index');?>"class="zc"><?php echo get_username();?>[个人中心]</a>&nbsp;|&nbsp;<a href="<?php echo U('Home/User/logout');?>"class="dl">安全退出</a>
		</p>
		<?php else: ?>
		<p>
			<a href="<?php echo U('Home/User/register');?>" class="zc btn">免费注册</a> |&nbsp;<a
				href="<?php echo U('Home/User/login');?>" class="dl btn">立即登录</a>
		</p><?php endif; ?>

	</div>
</div>
<!--header end-->

<!--nav start-->
<div class="nav">
	<h1>
		<a href="index.html"><img src="/Public/Home/images/logo.png"
			width="171" height="48" /></a>
	</h1>
	<ul class="nav_wrap">
		<li style="width: 40px;"><a href="<?php echo U('Home/Index/index');?>"
			class="current">首页</a></li>
		<li><a href="<?php echo U('Home/Borrow/index');?>">我要融资</a></li>
		<li><a href="<?php echo U('Home/Finance/index');?>">我要投资</a></li>
		<li><a href="<?php echo U('Member/Index/index');?>">我的账户</a></li>
		<li><a href="<?php echo U('Home/Newhelp/borrowhelp');?>">新手指引</a></li>
	</ul>
</div>
<!--nav end-->

	<!-- /头部 -->
	
	<!-- 主体 -->
	  <!--content start-->
<div class="dl_cont_out">
	<div class="dl_cont">
		<div class="top">
			<h2>用户注册</h2>
			<p>
				已有账户<a href="#">点击登录</a>
			</p>
		</div>
		<form id="form" action="/index.php?s=/Home/User/register.html" method="post">
			<dl>
				<dt>
					<span>* </span>手机号码:
				</dt>
				<dd>
					<input type="text" value="请输入您的手机号码" name="phone" id="phone"
						class="txt" />
				</dd>
				<span id="checkphone"></span>
			</dl>
			<dl>
				<dt>
					<span>* </span>电子邮箱:
				</dt>
				<dd>
					<input type="text" value="请输入您的电子邮箱" id="email"
						ajaxurl="/member/checkUserEmailUnique.html" errormsg="请填写正确格式的邮箱"
						nullmsg="请填写邮箱" datatype="e" name="email" class="txt" />
				</dd>
				<span id="checkemail"></span>
			</dl>
			<dl>
				<dt>
					<span>* </span>用户名:
				</dt>
				<dd>
					<input type="text" value="请输入您的3-5位用户名" id="username"
						name="username" class="txt"
						ajaxurl="/member/checkUserNameUnique.html" errormsg="请填写1-16位用户名"
						nullmsg="请填写用户名" datatype="*1-16" />
				</dd>
				<span id="checkuser"></span>
			</dl>
			<dl>
				<dt>
					<span>* </span>密码:
				</dt>
				<dd>
					<input type="password" value="" id="password"
						placeholder="请输入您的6-16位密码" errormsg="密码为6-20位" nullmsg="请填写密码"
						datatype="*6-20" name="password" class="txt" />
				</dd>
				<span id="checkpwd"></span>
			</dl>
			<dl>
				<dt>
					<span>* </span>确认密码:
				</dt>
				<dd>
					<input type="password" value="" id="repassword"
						placeholder="再次输入您的密码" name="repassword" recheck="password"
						errormsg="您两次输入的密码不一致" nullmsg="请填确认密码" datatype="*" class="txt" />
				</dd>
				<span id="checkrepwd"></span>
			</dl>

			<dl>
				<dt>
					<span>* </span>验证码:
				</dt>
				<dd>
					<input type="text" value="请输验证码"  class="yz"
						errormsg="请填写5位验证码" nullmsg="请填写验证码" datatype="*5-5" name="verify"
						id="verify" /> <img class="yzBtn" alt="点击切换" src="<?php echo U('verify');?>"
						style="cursor: pointer;">
					<!-- <input type="button" value="手机验证" name="" class="yzBtn"/>
                    <p class="yz_call">如果收不到验证码，请拨打<span>400-123-4567</span></p> -->
				</dd>
				<span id="checkcode"></span>
			</dl>
			<dl>
				<dt>
					<span>*</span>推荐人:
				</dt>
				<dd>
					<input type="text" value="推荐人手机号码或用户名" name="introduce" class="txt" />
				</dd>
				<span id="checkintroduce"></span>
			</dl>
			<div class="zcCheck">
				<input type="checkbox" value="" name="" class="check"
					checked="checked" />
				<p>
					我已阅读并同意<a href="#">《网站服务协议》</a>
				</p>
			</div>
			<input type="button" value="注册" name="zhuce" id="registerSub"
				class="zcBtn" onclick="javascript:;" />
		</form>
	</div>
</div>
<script>
	$("#registerSub").click(function() {
		var phone = $("#phone").val();
		var email = $("#email").val();
		var username = $("#username").val();
		var password = $("#password").val();
		var repassword = $("#repassword").val();
		var verify = $("#verify").val();
		
		//var isMobile=/^(?:13\d|15\d|18\d)\d{5}(\d{3}|\*{3})$/;  //手机号码验证正则表达式
		if (phone == "") {
			$("#checkphone").html("<font color='red'>手机号码不能为空！</font>");
			return false;
		}else{
			/* if(!isMobile.test(phone)){
				$("#checkphone").html("<font color='red'>请输入正确的手机号码！</font>");
				return false;
			} */
		}
		
	//	var re = /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/;
		if (email == "") {
			if (phone != null) {
				$("#checkphone").hide();
			}
			$("#checkemail").html("<font color='red'>邮箱地址不能为空！</font>");
			return false;
		}else{
			/* if(！re.test(email)){
				$("#checkemail").html("<font color='red'>请输入正确的邮箱地址！</font>");
				return false;
			} */
		}
		if (username == "") {
			if (phone != null) {
				$("#checkphone").hide();
			}
			if (email != null) {
				$("#checkemail").hide();
			}
			$("#checkuser").html("<font color='red'>用户名不能为空！</font>");
			return false;
		}
		if (password == "") {
			if (phone != null) {
				$("#checkphone").hide();
			}
			if (email != null) {
				$("#checkemail").hide();
			}
			if (username != null) {
				$("#checkuser").hide();
			}
			$("#checkpwd").html("<font color='red'>注册密码不能为空！</font>");
			return false;
		}

		if (repassword == "") {
			if (phone != null) {
				$("#checkphone").hide();
			}
			if (email != null) {
				$("#checkemail").hide();
			}
			if (username != null) {
				$("#checkuser").hide();
			}
			if (password != null) {
				$("#checkpwd").hide();
			}
			$("#checkrepwd").html("<font color='red'>确认注册密码不能为空！</font>");
			return false;
		}else{
			if (phone != null) {
				$("#checkphone").hide();
			}
			if (email != null) {
				$("#checkemail").hide();
			}
			if (username != null) {
				$("#checkuser").hide();
			}
			if (password != null) {
				$("#checkpwd").hide();
			}
			if(password!=repassword){
				$("#checkrepwd").html("<font color='red'>两次输入的密码不一致！</font>");
				return false;
			}
		}
		
		if(verify==""){
			if (phone != null) {
				$("#checkphone").hide();
			}
			if (email != null) {
				$("#checkemail").hide();
			}
			if (username != null) {
				$("#checkuser").hide();
			}
			if (password != null) {
				$("#checkpwd").hide();
			}
			if(repassword!=null){
				$("#checkrepwd").hide();
			}
			$("#checkcode").html("<font color='red'>验证码不能为空！</font>");
			return false;
		}
		$("#form").submit();

	});
</script> <!--content end--> 
	<!-- /主体 -->

	<!-- 底部 -->
	  
    <!--footer start-->
    <div class="footer">
  		<div class="footer_in">
            <ul>
                <li><a href="#">关于我们</a></li>
                <li><a href="#">法律指引</a></li>
                <li><a href="#">新手指引</a></li>
                <li><a href="#">理财攻略</a></li>           
            </ul>
            <ul>
              <li><a href="#">论坛</a></li>
              <li><a href="#">帮助中心</a></li>
              <li><a href="#">网站地图</a></li>
              <li><a href="#">友情链接</a></li>           
            </ul>
          <dl>
              <dt>合作伙伴</dt>
              <dd>
                  <ul>
                      <li><a href="#"><img src="/Public/Home/images/footer_pic1.png" width="122" height="45" /></a></li>
                      <li><a href="#"><img src="/Public/Home/images/footer_pic2.png" width="122" height="45" /></a></li>
                      <li><a href="#"><img src="/Public/Home/images/footer_pic3.png" width="122" height="45" /></a></li>
                      <li><a href="#"><img src="/Public/Home/images/footer_pic4.png" width="122" height="45" /></a></li>
                      <li><a href="#"><img src="/Public/Home/images/footer_pic5.png" width="122" height="45" /></a></li>
                      <li><a href="#"><img src="/Public/Home/images/footer_pic6.png" width="122" height="45" /></a></li>
                  </ul>
              </dd>
          </dl>
          <div class="footer_r">
            <p style="font-size:14px;">客服热线（工作时间8:00-22:00）</p>
            <p style="font-size:30px;">400 123 4567</p>
            <p>客服邮箱 kefu@gog.com  在线服务</p>
          </div>
   		</div>
    </div>
    <!--footer end-->
	
    <!--banQuan start-->
    <div class="banQuan">
    	<div class="banQuan_in">
        	<ul>
            	<li><img src="/Public/Home/images/banQuan_pic1.png"/></li>
            	<li><img src="/Public/Home/images/banQuan_pic2.png"/></li>
                <li><img src="/Public/Home/images/banQuan_pic3.png"/></li>
                <li><img src="/Public/Home/images/banQuan_pic4.png"/></li>
            </ul>
            <p>Copyrightc2011-2014工合财富 All rights reserved</p>
        </div>
    </div>
	<!--banQuan end-->
	<!-- /底部 -->
</body>
</html>

<!-- 网站结构 -->