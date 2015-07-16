<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title><?php echo ($pagetitle); ?></title>
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">

<link rel="Shortcut Icon" href="/Public/Home/images/CLOG.ico"><!--网页标题显示--> 
<link rel="Bookmark" href="/Public/Home/images/CLOG.ico"><!--被收藏后，收藏夹显示--> 

<link href="/Public/Static/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/Public/Static/bootstrap/css/docs.css" rel="stylesheet">
<script type="text/javascript" src="/Public/Static/jquery.js"></script>
<script type="text/javascript" src="/Public/Static/jquery-2.1.1.js"></script>
<script type="text/javascript" src="/Public/Static/jquery.form.js"></script>
<link rel="stylesheet" href="/Public/Static/rzg_css/css.css" type="text/css">

<!-- 引入JQUERY UI器   当局  有冲突-->
<link rel="stylesheet" type="text/css" href="/Public/Static/datepicker/css/jquery-ui.css">
<!--表单验证-->
<link rel="stylesheet" href="/Public/Home/css/style.css" type="text/css">
<link rel="stylesheet" href="/Public/Home/css/h.css" type="text/css">
<link rel="stylesheet" href="/Public/Home/css/ysx.css" type="text/css">
<script type="text/javascript" src="/Public/Home/js/banner.js"></script>
<script type="text/javascript" src="/Public/Home/js/common.js"></script>
<script type="text/javascript" src="/Public/Home/common.js"></script>
<script type="text/javascript" src="/Public/Home/js/xszy_cont.js"></script>
<script type="text/javascript" src="/Public/Home/js/anquanshezhi.js"></script>
<script type="text/javascript" src="/Public/Home/js/biaodexiangqing.js"></script>
<script type="text/javascript" src="/Public/Home/js/guanyuwomen.js"></script>
<script type="text/javascript" src="/Public/Home/js/wodezhanghu.js"></script>
<script type="text/javascript" src="/Public/Home/js/fabujiekuan.js"></script>
<script type="text/javascript" src="/Public/Home/js/location.js"></script>

<link rel="stylesheet" href="/Public/Home/css/yhk.css" media="all">



<!--表单验证-->
<link rel="stylesheet" href="/Public/static/zyUpload/control/css/zyUpload.css" type="text/css">
<script type="text/javascript" src="/Public/static/zyUpload/core/zyFile.js"></script>
<script type="text/javascript" src="/Public/static/zyUpload/control/js/zyUpload.js"></script>
<script type="text/javascript" src="/Public/static/zyUpload/demo.js"></script>
<!-- 引入layer -->
<script type="text/javascript" src="/Public/Static/layer/layer.js"></script>
<script type="text/javascript" src="/Public/Static/layer/extend/layer.ext.js"></script>

<script src="/Public/Home/js/jQuery.cookie.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>
	<!-- 头部 -->
	<!--header start-->
<div class="header_out">
	<a name="returntop" id="returntop"> </a>
	<div class="header">
		<ul>
			<li class="weibo"><div></div><a href="http://weibo.com/u/5385565766?topnav=1&wvr=6&topsug=1" target="_blank">微博</a></li>
			<li class="weixin"><div></div><a href="javascript:;">微信</a></li>
			<li class="QQ"><div></div><a href="tencent://message/?uin=3058467611">&nbsp;QQ</a></li>
			<li class="call"><div></div><a href="">&nbsp;热线</a></li>
			<!-- <li class="fankui hot" ><div></div><a href="javascript:void(0);">问题反馈</a></li> -->
			<!-- <li class="hot" ><div></div><a href="<?php echo U('Home/Borrow/borrowapply');?>">新手体验</a></li> -->
		</ul>
		<?php if(is_login()): ?><p>
			
			<a href="<?php echo U('Member/Index/index');?>"class="zc">
			<img src="/<?php echo get_member_logo_img();?>" style="border-radius: 25px;height: 25px; background-color:white;" width="25" height="25" />&nbsp;&nbsp;Hi, <?php echo get_username();?></a>&nbsp;|&nbsp;<a href="<?php echo U('Home/User/logout');?>"class="dl">安全退出</a>
		<?php if(is_sysmsg() == 0): else: ?>
				<img style="margin-left: 10px;" src="/Public/Home/images/zhanneixin.png"/>(<a href="<?php echo U('Member/System/usermailindex');?>" style="color:white;font-size: 10px;"><?php echo is_sysmsg();?></a>)<?php endif; ?>
		</p>
		<?php else: ?>
		<p>
			<a href="<?php echo U('/User/register');?>" class="zc btn">免费注册</a> |&nbsp;<a href="javascript:void();" class="dl btn" id="modaltrigger">立即登录</a>
	      </p><?php endif; ?>
		
		<!--鼠标划上效果-->
		<div class="weibo_eweima"><img src="/Public/Home/images/weibo_eweima.png"/></div>
		<div class="weixin_eweima"><img src="/Public/Home/images/weixin_eweima.jpg" width="100" height="100"/></div>
		<div class="QQ_eweima"><img src="/Public/Home/images/QQ_eweima.jpg"/></div>
		<div class="phonenumber">400-123-4567</div>
		
	</div>

</div>
<!--header end-->
<!--nav start-->
<div class="nav_out">
	<!--nav_l-->	
	<div class="nav_l">
		<!--nav_r-->
		<div class="nav_r">
			<!--nav-->
			<div class="nav">
				
				<h1>
					<a href="<?php echo U('/Index/index');?>"><img src="/Public/Home/images/logo.png" width="62" height="47" /><img src="/Public/Home/images/gonghe.png" width="136" height="50" /></a>
				</h1>
				<ul class="nav_wrap">
			    	<li style="width: 40px;"><a href="<?php echo U('Home/Index/index');?>" class="current">首页</a></li>
					<li><a href="<?php echo U('/Borrow/borrowapply');?>">我要融资</a></li>
					<li><a href="<?php echo U('/Finance/index');?>">我要投资</a></li>
					<li><a href="<?php echo U('Member/Index/index');?>">我的账户</a></li>
					<li><a href="<?php echo U('/Newhelp/borrowhelp');?>">新手指引</a></li>
					
				</ul>
			</div>
		</div>
	</div>
</div>

<!--浮动新手任务广告-->
<div id="top_ads">
<div class="outer"  >
    <div class="inner">
    <!-- <div class="closeBtn"><img src="/Public/Home/images/closeBtn.png"/></div> -->
  <div id="header_ad"></div>
    <div class="loading_con">
			<h2>活动说明：（活动时限3个月）</h2>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;平台新用户注册，立即送10元体验金(可进行提现),并奖励200积分;完成实名制认证、银行卡绑定以及VIP认证奖励200积分;邀请好友注册，立即送3元邀请奖励,并奖励100分积分。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;充值投资累计达到1000元以上即送50积分+50元现金卷</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;充值投资累计达到10000元 以上即送120积分+150元现金卷</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;充值投资累计达到100000元以上即送200积分+300元现金卷</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;充值投资累计达到1000000元以上即送300积分+500元现金卷</p>
		
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;总积分累计达到1000分以上，奖励10元现金红包</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;总积分累计达到10000分以上，奖励30元现金红包</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;总积分累计达到100000分以上，奖励50元现金红包</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;总积分累计达到1000000分以上，奖励100元现金红包</p>
			<p style="text-align: center;">...... ......&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...... ......</p>
			<p style="text-align: right;"><a href="huodong.html">点此进入详情 =></a></p>  
	</div>
  <div id="close"><img onclick="closeAd();" src="/Public/Home/images/closeBtn.png" /></div>

  </div>
</div>
</div>
<!-- 登录弹出框 -->
<div id="loginmodal" style="display:none;">
	<h1 style="margin-top: 20px;"><img src="/Public/Home/images/logo-denglu.png" /></h1>
	<form class="login-form" action="<?php echo U('Home/User/login');?>" method="post" id="loginform">
	<div class="input_layout" >
					<dl style="margin-top: 20px;">
						<input type="text" name="username" value="" id="username" style="width: 96%;"placeholder="请输入用户名／邮箱／手机号" tabindex="1" />
					</dl>
					<dl style="margin-top: 20px;">
					<input type="password" name="password" id="password" style="width: 96%;"placeholder="请输入密码" tabindex="2" />
					</dl>
					<a href="<?php echo U('Home/System/findpassword');?>">忘记密码？</a>
<!-- 					<dl style="margin-top: 20px;">
						<dt><img style=" margin-left: -159px;" src="/Public/Home/images/jiantou-yanzhengma.png" /></dt>
						<dd><input type="text" name="verify" style="width:50px;" /><img class="verifyimg reloadverify" src="<?php echo U('Home/User/verify');?>" width="100"height="44" alt="点击切换">
						</dd>
					</dl> -->
					<dl style="text-align: center;margin-top: 40px;">
						<input  type="submit" id="login_btn" class="a-btn" style="width: 99%;" value="登陆"/>
					</dl>
					<dl style="text-align: center;margin-top: 20px;">
						还没有账号？<a href="<?php echo U('Home/User/register');?>">立即注册</a>
					</dl>
					
	</div>	
</form>
  <script type="text/javascript">
	//验证码刷新
	$(document).ajaxStart(function() {
		$("button:submit").addClass("log-in").attr("disabled", true);
	}).ajaxStop(function() {
		$("button:submit").removeClass("log-in").attr("disabled", false);
	});
	// 异步验证
	$(".utip").blur(function() {
	 var username = document.getElementById("username").value;
		  var bid =1;
		  var index = layer.load(1,{time: 5*1000});	
          $.post('Home/User/login_array',{bid:bid,username:username},function success(data){
		    //     if(data.nuser=='用户不存在')
		    //     {
				// layer.msg(data.nuser);
				// layer.closeAll('loading');
			 //    } 
			 //    else{
			    	layer.closeAll('loading');
			    // }
          		});
	});
	$("loginform").submit(function() {
		var index = layer.load(1);
		var self = $(this);
		$.post(self.attr("action"), self.serialize(), success, "json");
		return false;

		function success(data) {

			if (data.status) {
				layer.msg('成功登陆');
				window.location.href = data.url;
			} else {
				if (data.info =='验证码输入错误！') {
				layer.msg(data.info);
			    } 
			    else if(data.info =='密码错误！') {
				layer.msg(data.info);
				}
				else if(data.info =='验证码错误！') {
				layer.msg(data.info);
				}
				else{
					self.find(".Validform_checktip").text(data.info);
				}
				//刷新验证码
				$(".reloadverify").click();
				layer.closeAll('loading');
			}
		}
	});

	$(function() {
		var verifyimg = $(".verifyimg").attr("src");
		$(".reloadverify").click(
				function() {
					if (verifyimg.indexOf('?') > 0) {
						$(".verifyimg").attr("src",
								verifyimg + '&random=' + Math.random());
					} else {
						$(".verifyimg").attr(
								"src",
								verifyimg.replace(/\?.*$/, '') + '?'
										+ Math.random());
					}
				});
	});
</script>
 </div>
 <!--浮动侧边栏  计算器  客服QQ-->
<!--联系我们-->


<script type="text/javascript">
	$(document).ready(function(){
		
		$('.outer').slideDown(1000);
		$('.inner').slideDown(2000);
		$('.inner .closeBtn').click(function(){
			$('.outer').fadeOut(1000); 
		});
	});
			if($.cookie('isClose') != 'yes'){
				// alert($.cookie('isClose'));
				// document.getElementById("top_ads").style.display = "block";

					// $.cookie("isClose",'yes',{ expires:1/8640});	//测试十秒
				$.cookie('isClose','yes',{expires:1});		//一天

			}
				// document.getElementById("float_ad").style.display = "block";

</script>
<script type="text/javascript">
showAds(500,0,500,500);
scorll_y();
var str = "<img src='images/chivas_ad.jpg' width=950 height=500 border=0 />"
document.getElementById("header_ad").innerHTML = str;
</script>
<script type="text/javascript">
	$(function(){
		//alert(1);	
		//浮动侧边栏
		$('.flo_aside').hover(function(){
			//alert(2);
			$('.flo_aside .flo_l li').each(function(index,element){
				$(element).hover(function(){
					if($(element).index()!=2)
					{
						$('.flo_aside .flo_r').show();
						$('.flo_aside .flo_r ul').eq($(this).index()).show().siblings().hide();
					}
				});
			})	
		},function(){
			$('.flo_aside .flo_r').hide();	
		});
		
		//返回顶部
		$(document).scroll(function(){
			if($(document).scrollTop() > $(window).height())
			{
				$('.returnTop').show();				
			}
			else
			{
				$('.returnTop').hide();
			}
		});	
		
		//导航栏
		var urlstr = location.href;
  		//alert((urlstr + '/').indexOf($(this).attr('href')));
  		var urlstatus=false;
 		$(".nav_out .nav .nav_wrap li a").each(function (index,element) {
    		if ((urlstr + '/').indexOf($(this).attr('href')) > -1 && $(this).attr('href')!='') {
      			$(element).addClass('current'); 
      			urlstatus = true;

    		} 
    		else {
      			$(element).removeClass('current');
    		}
  		});
  		if (!urlstatus) {$(".nav_out .nav .nav_wrap li").eq(0).children().addClass('current'); }
  		
  		//顶部 微博 微信 QQ 热线
  		//微博
  		$('.header_out .header ul .weibo').hover(function(){
  			$('.header_out .header ul .weibo').children('div').css('background','url(/Public/Home/images/top_icons.png) repeat scroll 40px 8px transparent');
  			$('.weibo_eweima').stop().slideDown();
  		},function(){
  			$('.header_out .header ul .weibo').children('div').css('background','url(/Public/Home/images/top_icons2.png) repeat scroll 0px 8px transparent');
  			$('.weibo_eweima').stop().slideUp();
  		})
  		//微信
  		$('.header_out .header ul .weixin').hover(function(){
  			$('.header_out .header ul .weixin').children('div').css('background','url(/Public/Home/images/top_icons.png) repeat scroll 40px -36px transparent');
  			$('.weixin_eweima').stop().slideDown();
  		},function(){
  			$('.header_out .header ul .weixin').children('div').css('background','url(/Public/Home/images/top_icons2.png) repeat scroll 0px -30px transparent');
  			$('.weixin_eweima').stop().slideUp();
  		})
  		//QQ
  		$('.header_out .header ul .QQ').hover(function(){
  			$('.header_out .header ul .QQ').children('div').css('background','url(/Public/Home/images/top_icons.png) repeat scroll 40px -81px transparent');
  			$('.QQ_eweima').stop().slideDown();
  		},function(){
  			$('.header_out .header ul .QQ').children('div').css('background','url(/Public/Home/images/top_icons2.png) repeat scroll 0px -69px transparent');
  			$('.QQ_eweima').stop().slideUp();
  		})
  		//热线
  		$('.header_out .header ul .call').hover(function(){
  			$('.header_out .header ul .call').children('div').css('background','url(/Public/Home/images/top_icons.png) repeat scroll 40px -119px transparent');
  			$('.phonenumber').stop().fadeIn();
  		},function(){
  			$('.header_out .header ul .call').children('div').css('background','url(/Public/Home/images/top_icons2.png) repeat scroll 0px -111px transparent');
  			$('.phonenumber').stop().fadeOut();
  		})
  		
  		
  		//导航栏固定在顶部
  		$(document).scroll(function(){
//			if($(document).scrollTop() > $('.header_out').height()+$('.nav_out').height()+$('.banner').height())
			if($(document).scrollTop() > $(window).height())
			{
				$('.nav_out').css({'position':'fixed','top':'0','z-index':'1000','box-shadow':'2px 0 5px #ccc'})
				//$('.nav2_out').css({'position':'fixed','top':'0','z-index':'1000','display':'block'})
			}
			else
			{
				$('.nav_out').css({'position':'static','box-shadow':'none'})
				//$('.nav2_out').css({'position':'static','display':'none'})
			}
			
		});	
  		
  		
  		
		
})
</script>














	<!-- /头部 -->
	
	<!-- 主体 -->
	   
<block	name="body"> <!--content start-->
<div class="zh_cont_out">
	<div class="zh_cont">
		<!--zh_cont_l-->
<div class="zh_cont_l">
	<ul style="padding-top: 16px;">
		<li class="head" style="background:#e9e9e9 url(/Public/Home/images/icons_head.png) no-repeat 8px 14px;">账户管理</li>
		<li class="current" style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px 20px;"><a href="<?php echo U('Member/Index/Index');?>">个人中心</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -66px;"><a href="<?php echo U('Home/User/profile');?>">安全认证</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -110px;"><a href="<?php echo U('Member/System/usermailindex');?>">消息中心</a></li>
	</ul>
	<ul>
		<li class="head" style="background:#e9e9e9 url(/Public/Home/images/icons_head.png) no-repeat 8px -26px;">借款服务</li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -156px;"><a href="<?php echo U('Member/Borrow/myborrowapply');?>">借款申请</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -200px;"><a href="<?php echo U('Member/Borrow/myborrowmanager');?>">我的借款</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -245px;"><a href="<?php echo U('Member/Borrow/borrowmanager');?>">还款记录</a></li>
		<!-- <li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -291px;"><a href="<?php echo U('Member/Finance/borrowloanstatis');?>">借款统计</a></li> -->
	</ul>
	<ul>
		<li class="head" style="background:#e9e9e9 url(/Public/Home/images/icons_head.png) no-repeat 8px -63px;">投资理财</li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -336px;"><a href="<?php echo U('Member/Invest/investindex');?>">投资记录</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -380px;"><a href="<?php echo U('Member/Finance/financestatis');?>">投标统计</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -426px;"><a href="<?php echo U('Member/Invest/autoinvest');?>">自动投标</a></li>
	</ul>
	<ul>
		<li class="head" style="background:#e9e9e9 url(/Public/Home/images/icons_head.png) no-repeat 8px -98px;">财务交易</li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -472px;"><a href="<?php echo U('Member/Userinfo/userchagerwithdraw');?>">交易记录</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -517px;"><a href="<?php echo U('Member/Userinfo/userbankset');?>">银行卡</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -562px;"><a href="<?php echo U('Member/System/recharge');?>">充值提现</a></li>
	</ul>

	<ul>
		<li class="head" style="background:#e9e9e9 url(/Public/Home/images/icons_head.png) no-repeat 8px -134px;">推广管理</li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -608px;"><a href="<?php echo U('Member/Friends/friends');?>">会员邀请</a></li>
		
	</ul>

</div>
<!--zh_cont_r-->
<script type="text/javascript">
		var urlstring = location.href;
  		//alert((urlstr + '/').indexOf($(this).attr('href')));
  		var urlstatus=false;
 		$(".zh_cont_l ul li a").each(function (index,element) {
    		if ((urlstring + '/').indexOf($(this).attr('href')) > -1 && $(this).attr('href')!='') {
      			$(element).parent().addClass('current'); 
      			urlstatus = true;

    		} 
    		else {
      			$(element).parent().removeClass('current');
    		}
  		});
  		if (!urlstatus) {$(".zh_cont_l ul li").eq(0).addClass('current'); }
</script>
		<div class="zh_cont_r">
			<h3>当前位置 > <span style="color: #D41010;">账户详情</span></h3>
			<dl style="padding-bottom: 10px;">
				<dt>
					<div class="img">
						<ul class="clearfix img-title title-alpha">
							<li><a href="#">
								<?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["logo_url"] == ''): ?><img src="/Public/Home/images/default-img.jpg" style="border-radius: 100px;"width="200" height="200"> 
										<strong title="标题" id="test2">求真像</strong>
										<?php elseif($vo["logo_url"] != ''): ?>
										<img src="/Uploads/User/<?php echo ($vo["logo_url"]); ?>" style="border-radius: 100px;height: 200px;" width="200" height="200" />
										<strong title="标题" id="test2">更换图像</strong><?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</a></li>
							</ul>
						</div>
					</dt>
					<dd>
						<div>
							<div class="a-c-r-t-m">
								<div style="border:none;">
									<span style="color: #66ccfb;font-size: 18px;"><?php echo get_username(); if($vo["user_leve"] == 1): ?><a href="<?php echo U('Userinfo/userrenewalvip');?>"> <img src="/Public/Home/images/img/ltxx.png" title="VIP已认证" /> </a>
										<?php else: ?>
										<a href="<?php echo U('Userinfo/userrenewalvip');?>"> <img src="/Public/Home/images/img/ltxx_h.png" title="VIP未认证" /></a><?php endif; if($member_level == 0): ?><img src="/Public/Home/images/level_p.png" title="普通会员" />
									<?php elseif($member_level == 1): ?>
									<img src="/Public/Home/images/level_a.png" title="A级会员" />
									<?php elseif($member_level == 2): ?>
									<img src="/Public/Home/images/level_b.png" title="B级会员" />
									<?php elseif($member_level == 3): ?>
									<img src="/Public/Home/images/level_c.png" title="C级会员" /><?php endif; ?>	
							</span>
						</div>
						<ul>
							<?php if(is_array($mstatus)): $i = 0; $__LIST__ = $mstatus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ms): $mod = ($i % 2 );++$i;?><li class="a-c-r-t-m-i-full">
									<?php if($ms["phone_status"] == 1): ?><a href="<?php echo U('/Member/Userinfo/userfindpassbyphone');?>" title="已认证"><img src="/Public/Home/images/img/iconfont-shoujitianchong.png" style="border-radius: 100px;"width="32" height="32"></a>

										<?php else: ?>
										<a href="<?php echo U('/Member/Userinfo/userfindpassbyphone');?>" title="未认证"><img src="/Public/Home/images/img/iconfont-shoujitianchong_h.png" style="border-radius: 100px;"width="32" height="32"></a><?php endif; ?>
								</li>
								<li class="a-c-r-t-m-p-full">
									<?php if($ms["email_status"] == 1): ?><a href="<?php echo U('Userinfo/usermailbanding');?>" title="已认证"><img src="/Public/Home/images/img/iconfont-xinfengtianchong.png" style="border-radius: 100px;"width="32" height="32"></a> 
										<?php else: ?> 
										<a href="<?php echo U('Userinfo/usermailbanding');?>" title="未认证"><img src="/Public/Home/images/img/iconfont-xinfengtianchong_h.png" style="border-radius: 100px;"width="32" height="32"></a><?php endif; ?>
								</li>	
								<li class="a-c-r-t-m-e-full">
									<?php if($ms["id_status"] == 1): ?><a href="<?php echo U('Userinfo/userselfset');?>"title="已认证"><img src="/Public/Home/images/img/iconfont-iconfontmingpian.png" style="border-radius: 100px;"width="32" height="32"> </a> 
										<?php else: ?>
										<a href="<?php echo U('Userinfo/userselfset');?>" title="未认证"><img src="/Public/Home/images/img/iconfont-iconfontmingpian_h.png" style="border-radius: 100px;"width="32" height="32"></a><?php endif; ?>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<div class="m-roll-bg">
							<div class="m-roll-one" style="width:<?php echo ($sshow); ?>%;background: #72d0eb;margin-left:0px;"></div>
							<div class="m-roll-show" style="width:100%"></div>
						</div>
						<p>资料完整度</p>
					</div>
				</div>
				<div class="a-c-r-t-m">
					<a class="now now1" href="<?php echo U('Member/System/recharge');?>"><img src="/Public/Home/images/img/iconfont-chongzhi(1).png" style="border-radius: 100px;"width="32" height="32">充值</a>
					<a class="now now2" href="<?php echo U('Member/System/withdrawdeposit');?>"><img src="/Public/Home/images/img/font-100498-.png" style="border-radius: 100px;"width="32" height="32">提现</a>
					<a class="now now3" href="<?php echo U('Member/Borrow/myborrowmanager');?>"><img src="/Public/Home/images/img/iconfont-huafeiqiazhuanrang.png" style="border-radius: 100px;"width="32" height="32">还款</a>
					<a class="now now4" href="<?php echo U('Member/System/usermailindex');?>"><span class="tip_span"><?php echo is_sysmsg();?></span><img src="/Public/Home/images/img/iconfont-fxiconyoujian.png" style="border-radius: 100px;"width="32" height="32">站内信<a><!-- <a href="javascript:;">增值服务</a> -->
				</div>

				<ul class="a-c-u">
					<li>用户积分：<span><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["score"]); ?>分<?php endforeach; endif; else: echo "" ;endif; ?></span></li>
					<li>VIP到期时间：<span><?php echo (date('Y-m-d',$vo["time_limit"])); ?></span></li>
					<li>注册时间：<span><?php echo (date('Y-m-d',$vo["reg_time"])); ?></span></li>
					<li>专属客服：<span><?php if($vo["user_leve"] == 1): ?><a href="<?php echo U('Member/Userinfo/kf_index');?>" ><?php echo ($qqtitle); ?><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo ($qqnum); ?>&amp;site=qq&amp;menu=yes"><img style="border:0;" src="http://wpa.qq.com/pa?p=2:<?php echo ($qqnum); ?>:52" alt="点击这里给我发消息" title="点击这里给我发消息"></a></a><?php else: ?>无<?php endif; ?></span></li>
					<li>注册时间：<span><?php echo (date('Y-m-d',$vo["reg_time"])); ?></span></li>
					<li>登录IP:<span><?php echo get_client_ip();?></span></li>
				</ul>		
			</dd>
		</dl>
			
			<div class="ul01">
			<?php if($tasks["main"] == ''): ?><div class="lg-confirml" >
					        <p class="i-btn-typical" id="i-btn-typical">暂无新任务</p>
					</div>
					<div class="lg-confirm" >
					    <a data-spm="d4919529" target="_self" class="i-btn-typical" title="<?php echo ($tasks["task_detail"]); ?>" href="#"><?php echo ($tasks["task_detail"]); ?></a>
					</div>
			<?php else: ?>
				<div class="lg-confirml" >
					<p class="i-btn-typical" id="i-btn-typical"><?php echo ($tasks["task_detail"]); ?></p>
				</div>
				<div class="lg-confirm" >
					<a data-spm="d4919529" target="_blank" class="i-btn-typical" title="<?php echo ($tasks["task_detail"]); ?>" href="/Member/Userinfo/<?php echo ($tasks["main"]); ?>">去认证</a>
				</div><?php endif; ?>
			</div>
			<!-- 账户详情 -->
			<div class="m-r-bot">
				<div class="m-list-bot">
					<h4 class="h4"><img src="/Public/Home/images/img/iconfont-icon.png" style="border-radius: 100px;"width="32" height="32">账户详情：</h4>
					<div>
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="m-list">
								<h4 >账户总额（元）</h4>
								<div><?php echo ($vo['account_money']+$vo['money_freeze']); ?></div>
							</div>
							<div class="m-list">
								<h4 >可用余额（元）</h4>
								<div><?php echo ((isset($vo["account_money"]) && ($vo["account_money"] !== ""))?($vo["account_money"]):"0.00"); ?></div>
							</div>
							<div class="m-list">
								<h4 >冻结金额（元）</h4>
								<div><?php echo ((isset($vo["money_freeze"]) && ($vo["money_freeze"] !== ""))?($vo["money_freeze"]):"0.00"); ?></div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
				<!-- 投资总汇 -->
				<!-- 借款总汇 -->
				<div class="m-list-bot">
				<h4 class="h4"><img src="/Public/Home/images/img/iconfont-lijin.png" style="border-radius: 100px;"width="32" height="32">收益统计：</h4>
				<div>
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="m-list" style="width: 20%;">
							<h4 >已收总收益（元）</h4>
							<div><?php echo ($bm['interest']+$bm['reward']+$bm['oter_reward']); ?></div>
						</div>
						<div class="m-list" style="width: 20%;">
							<h4 >已收投资收益（元）</h4>
							<div><?php echo ((isset($vo["money_freeze"]) && ($vo["money_freeze"] !== ""))?($vo["money_freeze"]):"0.00"); ?></div>
						</div>
						<div class="m-list" style="width: 20%;">
							<h4 >已收奖励（元）</h4>
							<div><?php echo ((isset($bm["reward"]) && ($bm["reward"] !== ""))?($bm["reward"]):"0.00"); ?></div>
						</div>
						<div class="m-list" style="width: 20%;">
							<h4 >其他收益（元）</h4>
							<div><?php echo ((isset($bm["oter_reward"]) && ($bm["oter_reward"] !== ""))?($bm["oter_reward"]):"0.00"); ?></div>
						</div>
						<div class="m-list" style="width: 20%;">
							<h4 >其他收益（元）</h4>
							<div><?php echo ((isset($bm["borrow_money"]) && ($bm["borrow_money"] !== ""))?($bm["borrow_money"]):"0.00"); ?></div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				</div>
				<div class="m-list-bot">
				<h4 class="h4"><img src="/Public/Home/images/img/iconfont-jianzhi.png" style="border-radius: 100px;"width="32" height="32">待收统计：</h4>
				<div>
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="m-list">
							<h4 >待收本息（元）</h4>
							<div><?php echo ($vo['money_collect']+$interest); ?></div>
						</div>
						<div class="m-list">
							<h4 >待收本金（元）</h4>
							<div><?php echo ((isset($vo['money_collect']) && ($vo['money_collect'] !== ""))?($vo['money_collect']):"0.00"); ?></div>
						</div>
						<div class="m-list">
							<h4 >待收利息（元）</h4>
							<div><?php echo ((isset($interest) && ($interest !== ""))?($interest):"0.00"); ?></div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				</div>
				<div class="m-list-bot">
				<h4 class="h4"><img src="/Public/Home/images/img/iconfont-zhuanzhang.png" style="border-radius: 100px;"width="32" height="32">充值提现：</h4>
				<div class="t-a-c">
					<?php if(is_array($paymoney)): $i = 0; $__LIST__ = $paymoney;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="m-list">
							<h4 >充值总金额（元）</h4>
							<div><?php echo ((isset($vo["money"]) && ($vo["money"] !== ""))?($vo["money"]):"0.00"); ?></div>
						</div>
						<div class="m-list">
							<h4 >提现总金额（元）</h4>
							<div><?php echo ((isset($bm["borrow_money"]) && ($bm["borrow_money"] !== ""))?($bm["borrow_money"]):"0.00"); ?></div>
						</div><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
				</div>
			  </div>
			</div>
		</div>
	</div>
</div>
<!--content end--> 
<script>
	$('#test2')
			.on(
					'click',
					function() {
						// layer.msg('正在施工，无法更换')
						layer.open({
									type : 1,
									title : [ '头像上传',
											'background:#2B2E37; height:40px; color:#fff; border:none;' //自定义标题样式
									], //不显示默认标题栏
									offset : [ '270px', '40%' ],
									area : [ '320px', '238px' ],
									content: '<form action="/Member/Index/upload" enctype="multipart/form-data" method="post"><div style="width:94%;height:32px;position:relative;top:45px;left:18px;"><input class="file" type="file" name="filename" value="" style="position:absolute;filter:alpha(opacity=0);-moz-opacity:0;-khtml-opacity: 0;opacity:0;width:100%;height:30px;border:0;cursor:pointer;"><div style="overflow:hidden;"><input class="filename" type="text" value="" style="float:left;width:220px;height:20px;border-radius:0;border-right:0;border-color:#66ccfb;"><input type="button" value="浏 览" style="float:left;width:60px;height:30px;border-left:0;border-color:#66ccfb;background-color:#66ccfb;color:#fff;"></div><input  type="submit"  value="上 传" style="width:75px;height:25px;background-color:#66ccfb;border:0;color:#fff;margin-left:75px;"></div></from>'
								});
								
								$(".file").change(function(){
									$(this).parents().find(".filename").val($(this).val());
			
								});		
					});
					
	
		$('.img').hover(function(){
                       $("#test2").show();
                      },function(){
                              $("#test2").hide();
                         });
	
</script> 
<script type="text/javascript">
	$('.i-btn-typical').function(){
		layer.tips('我是另外一个tips，只不过我长得跟之前那位稍有些不一样。', '吸附元素选择器', {
		    tips: [1, '#3595CC'],
		    time: 4000
		});
	};
</script>>

	<!-- /主体 -->

	<!-- 底部 -->
	<!--浮动侧边栏  计算器  客服QQ-->
<div class="flo_aside">
	<!--浮动框标题-->
    <ul class="flo_l">
    	<li style="padding-top: 30px;">计<br />算<br />器</li>
        <li>联<br />系<br />我<br />们</li>
        <li style="padding-top: 40px;" class="fankui hot" >反<br />馈</li>	
        <li class="returnTop" style="display:none;height: 35px;padding-top: 0;"><a href="#returntop" style="color: #fff;display: block;width: 35px;height: 35px;background: url(/Public/Home/images/returntop.png) no-repeat center center;"></a></li>
    </ul>
    <div id="float_ad">
		<!-- <div><a href="#" target="_blank"><img height=172 src="images/chivas_ad1.jpg" width="20" border="0" /></a></div> -->
		<div><img onclick="show();" height="41" src="/Public/Home/images/index-loading-bgx.png" width="50" /></div>
	</div>
    <div class="flo_r" style="display:none">
    	<!--计算器-->
    	<ul class="flo_jsq" style="display:none">
            	<li><a href="<?php echo U('Home/Newhelp/compare_tools');?>">收益计算器</a></li>
            	<!--<li><a href="#">CPI计算器</a></li>
            	<li><a href="#">收益对比</a></li>
            	<li><a href="#">身价计算器</a></li>-->
        </ul>
        <!--联系我们-->
        <ul class="flo_lx" style="display:none">
            <li style="font-size:18px;line-height:30px">客服热线<br /><span>400-123-4567</span></li>
            <li><a href="tencent://message/?uin=3058467611">客服QQ</a></li>
            <li>
                <dl>
                    <dt>官方微信</dt>
                    <dd>微信号：3058467611@qq.com</dd>
                    <dd><img src="/Public/Home/images/weixin_eweima.jpg" width="100" height="100" /></dd>    
                </dl>
            </li>
            <li>
                <dl>
                    <dt>官方微博</dt>
                    <dd style="margin-bottom:0;"><a href="http://weibo.com/u/5385565766?topnav=1&wvr=6&topsug=1" target="_blank">点击关注</a></dd>
                    <dd><img src="/Public/Home/images/weibo_eweima.png" width="100" height="100" /></dd>
                </dl>
            </li>
    	</ul>
    </div>
</div>

<!--footer start-->
<div class="footer">
	<div class="footer_in">

		<ul>
			<li><a href="<?php echo U('Home/Newhelp/aboutus');?>">关于我们</a></li>
			<li><a href="#">帮助中心</a></li>
			<!-- <li><a href="#">理财攻略</a></li> -->
			<li><a href="<?php echo U('Home/Newhelp/websitemap');?>">网站地图</a></li>
		</ul>
		<ul>
			<li><a href="<?php echo U('Home/Newhelp/borrowhelp');?>">新手指引</a></li>
			<!-- <li><a href="#">论坛</a></li> -->
			<li><a href="<?php echo U('Home/Article/lists/category/default_blog');?>">行业动态</a></li>
			<li><a href="#">友情链接</a></li>
		</ul>
		<!--<dl>
			<dt>合作伙伴</dt>
			<dd>
				<ul>
					<li><a href="#"><img src="/Public/Home/images/jsyh.jpg"
							width="122" height="45" /></a></li>
					<li><a href="#"><img src="/Public/Home/images/js.jpg"
							width="122" height="45" /></a></li>
					<li><a href="#"><img
							src="/Public/Home/images/xingyeyinhang.jpg" width="122"
							height="45" /></a></li>
					<li><a href="#"><img src="/Public/Home/images/gfyh.jpg"
							width="122" height="45" /></a></li>
					<li><a href="#"><img src="/Public/Home/images/rer.jpg"
							width="122" height="45" /></a></li>
					<li><a href="#"><img src="/Public/Home/images/xgcb.jpg"
							width="122" height="45" /></a></li>
				</ul>
			</dd>
		</dl>-->
		<div class="footer_c">
			<dl style="margin-right: 40px;">
				<dt>
					<img src="/Public/Home/images/weixin_eweima.jpg" />
					<p style="text-align: center; line-height: 20px;">
						扫描微信二维码<br />关注工合财富
					</p>
				</dt>
				<dd>
					<a href="#" class="weixin"></a>
				</dd>
			</dl>
			<dl style="float: right;">
				<dd style="margin-right: 5px;">
					<a href="http://weibo.com/u/5385565766?topnav=1&wvr=6&topsug=1"
						class="weibo" target="_blank"></a>
				</dd>
				<dt>
					<img src="/Public/Home/images/weibo_eweima.png" />
					<p style="text-align: center; line-height: 20px;">
						扫描微博二维码<br />关注工合财富
					</p>
				</dt>
			</dl>
		</div>


		<div class="footer_r">
			<p style="font-size: 14px;">客服热线（工作时间8:00-22:00）</p>
			<p style="font-size: 30px;">400 123 4567</p>
			<p>客服邮箱 kefu@gog.com 在线服务</p>
		</div>

	</div>
</div>
<!--footer end-->

<!--banQuan start-->
<div class="banQuan">
	<div class="banQuan_in">
		<ul>
			<li><img src="/Public/Home/images/banQuan_pic1.png" /></li>
			<!--<li><img src="/Public/Home/images/banQuan_pic2.png" /></li>
			<li><img src="/Public/Home/images/banQuan_pic3.png" /></li>
			<li><img src="/Public/Home/images/banQuan_pic4.png" /></li>-->
		</ul>
		<p>Copyrightc2014-2015工合财富 All rights reserved</p>
	</div>
</div>

</div>


<!--banQuan end-->
<script type="text/javascript">
	$('.shigong').on('click', function() {
		layer.msg('前方页面正在施工ing...', 2, 0);
		area: [ '310px', '130px' ]
	});

	$('.tipshang').on('click', function() {
		layer.tips('此处正在施工ing...', this, {
			style : [ 'background-color:#0FA6D8; color:#fff', '#0FA6D8' ],
			maxWidth : 150
		});
	});
	$('.tipxia').on('click', function() {
		layer.tips('非常感谢大家对工合财富的支持，正因为你们，才让稳步的我们有了大大的关注。活动策划中，2015加油！', this, {
			guide : 2,
			maxWidth : 150,
			time : 4
		});
	});
	$('.fankui').on('click', function() {
	layer.open({
            type: 2,
            title: '平台问题反馈',
            shadeClose: true,
            shade: false,
            maxmin: true, //开启最大化最小化按钮
            area: ['505px', '450px'],
            content: 'http://www.ghcf.cn/Home/Index/fankui.html'
        });
// layer.open({
  //   type: 2,
  //   title: false,
  //   closeBtn: false,
  //   shade: [0],
  //   area: ['340px', '215px'],
  //   offset: 'rb', //右下角弹出
  //   time: 2000, //2秒后自动关闭
  //   shift: 2,
  //   content: ['Home/Index/fankui', 'no'], //iframe的url，no代表不显示滚动条
// });

});

	$('#modaltrigger').click(function(){
		layer.open({
		    type: 1,
		    title: false,
		    skin: 'layui-layer-demo', //样式类名
		    closeBtn: false, //不显示关闭按钮
		    shift: 0,
		    area: ['560px', '450px'],
		    shadeClose: true, //开启遮罩关闭
		    content: ''+$("#loginmodal").html()+''
		});
	});
</script>

<script type="text/javascript">
	$(function(){
		//alert(1);	
		//浮动侧边栏
		$('.flo_aside').hover(function(){
			//alert(2);
			$('.flo_aside .flo_l li').each(function(index,element){
				$(element).hover(function(){
					if($(element).index()!=2 && $(element).index()!=3)
					{
						$('.flo_aside .flo_r').show();
						$('.flo_aside .flo_r ul').eq($(this).index()).show().siblings().hide();
					}
				});
			})	
		},function(){
			$('.flo_aside .flo_r').hide();	
		});
		
		//返回顶部
		$(document).scroll(function(){
			if($(document).scrollTop() > $(window).height())
			{
				$('.returnTop').show();				
			}
			else
			{
				$('.returnTop').hide();
			}
		});	
		
		//导航栏
		var urlstr = location.href;
  		//alert((urlstr + '/').indexOf($(this).attr('href')));
  		var urlstatus=false;
 		$(".nav_out .nav .nav_wrap li a").each(function (index,element) {
    		if ((urlstr + '/').indexOf($(this).attr('href')) > -1 && $(this).attr('href')!='') {
      			$(element).addClass('current'); 
      			urlstatus = true;

    		} 
    		else {
      			$(element).removeClass('current');
    		}
  		});
  		if (!urlstatus) {$(".nav_out .nav .nav_wrap li").eq(0).children().addClass('current'); }

  		//顶部 微博 微信 QQ 热线
  		//微博
  		$('.header_out .header ul .weibo').hover(function(){
  			$('.header_out .header ul .weibo').children('div').css('background','url(/Public/Home/images/top_icons.png) repeat scroll 40px 8px transparent');
  			$('.weibo_eweima').stop().slideDown();
  		},function(){
  			$('.header_out .header ul .weibo').children('div').css('background','url(/Public/Home/images/top_icons2.png) repeat scroll 0px 8px transparent');
  			$('.weibo_eweima').stop().slideUp();
  		})
  		//微信
  		$('.header_out .header ul .weixin').hover(function(){
  			$('.header_out .header ul .weixin').children('div').css('background','url(/Public/Home/images/top_icons.png) repeat scroll 40px -36px transparent');
  			$('.weixin_eweima').stop().slideDown();
  		},function(){
  			$('.header_out .header ul .weixin').children('div').css('background','url(/Public/Home/images/top_icons2.png) repeat scroll 0px -30px transparent');
  			$('.weixin_eweima').stop().slideUp();
  		})
  		//QQ
  		$('.header_out .header ul .QQ').hover(function(){
  			$('.header_out .header ul .QQ').children('div').css('background','url(/Public/Home/images/top_icons.png) repeat scroll 40px -81px transparent');
  			$('.QQ_eweima').stop().slideDown();
  		},function(){
  			$('.header_out .header ul .QQ').children('div').css('background','url(/Public/Home/images/top_icons2.png) repeat scroll 0px -69px transparent');
  			$('.QQ_eweima').stop().slideUp();
  		})
  		//热线
  		$('.header_out .header ul .call').hover(function(){
  			$('.header_out .header ul .call').children('div').css('background','url(/Public/Home/images/top_icons.png) repeat scroll 40px -119px transparent');
  			$('.phonenumber').stop().fadeIn();
  		},function(){
  			$('.header_out .header ul .call').children('div').css('background','url(/Public/Home/images/top_icons2.png) repeat scroll 0px -111px transparent');
  			$('.phonenumber').stop().fadeOut();
  		})
  		//导航栏固定在顶部
  		$(document).scroll(function(){
//			if($(document).scrollTop() > $('.header_out').height()+$('.nav_out').height()+$('.banner').height())
			if($(document).scrollTop() > $(window).height())
			{
				$('.nav_out').css({'position':'fixed','top':'0','z-index':'99','box-shadow':'2px 0 5px #ccc'})
				//$('.nav2_out').css({'position':'fixed','top':'0','z-index':'99','display':'block'})
			}
			else
			{
				$('.nav_out').css({'position':'static','box-shadow':'none'})
				//$('.nav2_out').css({'position':'static','display':'none'})
			}
		});		
})
</script>
<script src="/Public/Home/js/floatad.js" type="text/javascript" charset="utf-8"></script>

	<!-- /底部 -->
</body>
</html>

<!-- 网站结构 -->