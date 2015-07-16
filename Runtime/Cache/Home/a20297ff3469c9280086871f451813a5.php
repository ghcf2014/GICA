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
	   <block
	name="body">
<div class="sqjk_cont_out">
	<div class="sqjk_cont">
		<div class="sqjk_cont_top">
			<h2>借款流程</h2>
			<div class="sqjk_pic">
				<img src="/Public/Home/images/jklc.png" width="1000" height="374" />
			</div>
		</div>
		
		<!--sqjk_cont_cen 开始-->
		<div class="sqjk_cont_cen">
			<dl>
				<dt><img src="/Public/Home/images/zrtj.png"/></dt>
				<dd>
					<ul class="zrtj">
						<li>在深圳居住6个月以上</li>
						<li>22-60周岁，大陆公民</li>
						<li>在深圳单位工作满6个月以上</li>
						<li>个人信用记录良好，无不良嗜好</li>
						<li>银行代发工资人民币4000元以上</li>
					</ul>
				</dd>
			</dl>
			<dl style="border-right: 0;float: right;">
				<dt><img src="/Public/Home/images/sqzl.png"/></dt>
				<dd>
					<ul class="sqzl">
						<?php if($file['identity_report'] == 1): ?><li><span>身份证明</span><span><img src="/Public/Home/images/cont_bot_r_hover_ok.png"/></span></li>
						<?php else: ?>
							<li><span>身份证明</span><span><a href="<?php echo U('Borrow/borrowfile_upload');?>"><img src="/Public/Home/images/cont_bot_r_hover_no.png" title="点击上传"/></a></span></li><?php endif; ?>
						<?php if($file['credit_report'] == 1): ?><li><span>征信证明</span><span><img src="/Public/Home/images/cont_bot_r_hover_ok.png"/></span></li>
						<?php else: ?>
							<li><span>征信证明</span><span><a href="<?php echo U('Borrow/borrowfile_upload');?>"><img src="/Public/Home/images/cont_bot_r_hover_no.png"title="点击上传"/></a></span></li><?php endif; ?>
						<?php if($file['work_report'] == 1): ?><li><span>工作证明</span><span><img src="/Public/Home/images/cont_bot_r_hover_ok.png"/></span></li>
						<?php else: ?>
							<li><span>工作证明</span><span><a href="<?php echo U('Borrow/borrowfile_upload');?>"><img src="/Public/Home/images/cont_bot_r_hover_no.png" title="点击上传"/></a></span></li><?php endif; ?>
						
						<?php if($file['income_report'] == 1): ?><li><span>收入证明</span><span><img src="/Public/Home/images/cont_bot_r_hover_ok.png"/></span></li>
						<?php else: ?>
							<li><span>收入证明</span><span><a href="<?php echo U('Borrow/borrowfile_upload');?>"><img src="/Public/Home/images/cont_bot_r_hover_no.png" title="点击上传"/></a></span></li><?php endif; ?>
						<?php if($file['living_report'] == 1): ?><li><span>居住证明</span><span><img src="/Public/Home/images/cont_bot_r_hover_ok.png"/></li>
						<?php else: ?>
							<li><span>居住证明</span><span><a href="<?php echo U('Borrow/borrowfile_upload');?>"><img src="/Public/Home/images/cont_bot_r_hover_no.png" title="点击上传"/></a></span></li><?php endif; ?>
						<?php if($file['other_report'] == 1): ?><li><span>辅助证明</span><span><img src="/Public/Home/images/cont_bot_r_hover_ok.png"/></li>
						<?php else: ?>
							<li><span>辅助证明</span><span><a href="<?php echo U('Borrow/borrowfile_upload');?>"><img src="/Public/Home/images/cont_bot_r_hover_no.png" title="点击上传"/></a></span></li><?php endif; ?>
					</ul>
				</dd>
			</dl>
		</div>
		<!--sqjk_cont_cen 结束-->
		
		<!--sqjk_cont_bot 开始-->
		<div class="sqjk_cont_bot">
			<div class="sqjk_cont_foucs">
				<dl>
					<dt>借款须知</dt>
					<dd>
						1．仅适用于非VIP会员用于提交借款意向，非正式借款申<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请。
					</dd>
					<dd>
						2．提交后工合或担保机构进行初步审核，并可能与您本人沟<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;通，出具受理意见,但在您成为VIP会员之前不会在本网站<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发布您的借款标。
					</dd>
					<dd>
						3．工合或担保机构进行审核后，并与您本人沟通，出具受理<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;意见，会在本网站发布您的借款标，并呈现具体借款的详<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;情附带资料。
					</dd>				
					<dd><a href="<?php echo U('Borrow/borrowfile_upload');?>"><img src="/Public/Home/images/sqzldown.png"/></a></dd>				
				</dl>
				<p style="background: #f3a616 url(/Public/Home/images/warning.png) no-repeat 5px center; color: #fff; padding-left: 40px; width: 88%;line-height: 32px;">您必须成为VIP会员后，才能提交正式借款申请。</p>
			</div>
			
			<div class="input_layout" style="width: 50%;float: right;border: 1px solid #ddd;margin-top: 0;padding: 20px 35px;" onload="setup();preselect('陕西省');promptinfo();">
				<h2 style="width: 100%;height: 40px;font-size: 20px;font-weight:normal;color: #0597D9;line-height: 40px;border-bottom: 1px solid #ddd;margin-bottom: 15px;">借款意向</h2>
				<dl>
					<dt><b style="color:red">*</b>姓名</dt>
					<dd>
						<input type="text" id="uname"   />
					</dd>
				</dl>
				<dl>
					<dt><b style="color:red">*</b>手机号码 </dt>
					<dd>
						<input type="text" id="phone_num" />
					</dd>
				</dl>
				<dl>
					<dt><b style="color:red">*</b>借款金额</dt>
					<dd>
						<input type="text"  id="borrow_money"  />
					</dd>
				</dl>
				<dl>
					<dt>借款类型</dt>
					<dd>
						<select id="borrow_type" style="width: 42%;"/>
							<option selected="selected" value="">请选择</option>
							<option value="1">信用标</option>
							<option value="2">净值标</option>
							<option value="3">秒还标</option>
							<option value="4">担保标</option>
							<option value="5">抵押标</option>
							<option value="6">实地考察标</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dt><b style="color:red">*</b>借款年利率：</dt>
					<dd valign="top" colspan="2" rowspan="1" style="word-break: break-all;">
                	<div class="User_ratings User_grade" id="div_fraction0">
                      <div class="ratings_bars"> 
                        <span class="bars_10" style="display:none;">0</span>
                        <div class="scale" id="bar0">
                          <div></div>
                          <span id="btn0"></span>
                        </div>
                        <span class="bars_10" style="display:none;">100</span><input name="borrow_interest_rate" id="title0" type="text" title="年化率" value="0"  leipiplugins="text" orghide="0" orgalign="left" orgwidth="150" orgtype="text" style="text-align: left; width: 30px;"/><span class="span" >%</span>
                      </div>
                    </div>
					</dd>
				</dl>
				<dl>
					<dt>借款期限</dt>
					<dd>						
						<select id="day_time">
							<option value="" checked>请选择</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
						</select>
						<select  style="display:none" id="month_time">
							<option value="" checked>请选择</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
						<select style="display:none" id="year_time">
							<option value="" checked>请选择</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
						<select class="date" id="time_type" >
							<option value="3" id="c_days">日</option>
							<option value="2" id="c_month">月</option>
							<option value="1" id="c_year" >年</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dt>所在地区</dt>
					<dd>
						<select class="select" name="province" id="s1" style="width: 28%;padding: 0;">
							<option></option>
						</select>
						<select class="select" name="city" id="s2" style="width: 38%;padding: 0;">
							<option></option>
						</select>
						<select class="select" name="town" id="s3" style="width: 28%;padding: 0;">
							<option></option>
						</select>
						
					</dd>
				</dl>
				<dl style="height:auto;">
					<dt> <b style="color:red">*</b>借款说明</dt>
					<dd style="height:auto;" >
						<textarea id="borrow_info" style="width: 87%;"></textarea>
					</dd>
				</dl>
				<p style="color: orange; padding-left: 40px; width: 88%;line-height: 32px;margin: 10px 0;text-align: center;">带<b style="color:red;"> * </b>号为必填项，申请资料提交后将不能修改！</p>
					
				<dl>
					<dt></dt>
					<dd>
						<input type="button" class="large button blue" id="apply_btn" value="提交申请" />
					</dd>
				</dl>
				
			</div>
		</div>
		<!--sqjk_cont_bot 结束-->

	</div>
</div>
<body onload="setup();preselect('广东省');promptinfo();">     
</body>
<script type="text/javascript">
   $('#apply_btn').click(function(){
   		var uname=$('#uname').val().replace(/(^\s*)|(\s*$)/g, "");
		var phone_num=$('#phone_num').val().replace(/(^\s*)|(\s*$)/g, "");
		var borrow_money=$('#borrow_money').val().replace(/(^\s*)|(\s*$)/g, "");
		var borrow_type=$('#borrow_type').val().replace(/(^\s*)|(\s*$)/g, "");
		var title0=$('#title0').val();
		var day_time=$('#day_time').val();
		var month_time=$('#month_time').val();
		var year_time=$('#year_time').val();
		var time_type=$('#time_type').val();
		var s1=$('#s1').val();
		var s2=$('#s2').val();
		var s3=$('#s3').val();
		var borrow_info=$('#borrow_info').val();
		var pattern = new RegExp("[`~!@#$^&*()=|{}':;',\\[\\].<>/?~！@#￥……&*（）——|{}【】‘；：”“'。，、？]"); 
		var phone = new RegExp("^[1]{1}[3,4,5,7,8]{1}[0-9]{9}$"); 
		var card=new RegExp("^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{4}$");
   		if (uname==''){
   			$('#uname').focus();
   			document.getElementById("uname").style.borderColor = "red";
   			layer.msg('请填写姓名！');
   		}else{
   			if (pattern.test(uname)) {
   				$('#uname').focus();
   				document.getElementById("uname").style.borderColor = "red";
				alert('姓名不能有特殊字符');
			}else{
				document.getElementById("uname").style.borderColor = "green";
	   			if (phone_num==''){
	   				$('#phone_num').focus();
	   				document.getElementById("phone_num").style.borderColor = "red";
	   				layer.msg('请填写联系方式');	
	   			}else{
	   				if (!phone.test(phone_num)){
	   					$('#phone_num').focus();
	   					document.getElementById("phone_num").style.borderColor = "red";
						layer.msg('手机号码格式不对！');
					}else{
						document.getElementById("phone_num").style.borderColor = "green";
		   				if(borrow_money==''){
		   					$('#borrow_money').focus();
		   					document.getElementById("borrow_money").style.borderColor = "red";
		   					layer.msg('请输入借款金额');
		   				}else{
		   					document.getElementById("borrow_money").style.borderColor = "green";
		   					if (borrow_type==''){
		   						$('#borrow_type').focus();
			   					document.getElementById("borrow_type").style.borderColor = "red";
			   					layer.msg('请选择借款类型');
		   					}else{
		   						document.getElementById("borrow_type").style.borderColor = "green";
		   						if(title0==0 ||title0<=10||title0>=18){
		   							$('#title0').focus();
				   					document.getElementById("title0").style.borderColor = "red";
				   					layer.msg('借款利率范围不正确（10%-18%）');
		   						}else{
		   							document.getElementById("title0").style.borderColor = "green";
		   							if (day_time==''){
					   					document.getElementById("day_time").style.borderColor = "red";
					   					layer.msg('请选择借款期限');
		   							}else{
		   								document.getElementById("day_time").style.borderColor = "green";
		   								if(s1==''||s2=='地级市'||s3=='市、县级市、县'){
		   									document.getElementById("s1").style.borderColor = "red";
		   									document.getElementById("s2").style.borderColor = "red";
		   									document.getElementById("s3").style.borderColor = "red";
					   						layer.msg('请选择所在地');
		   								}else{
		   									document.getElementById("s1").style.borderColor = "green";
		   									document.getElementById("s2").style.borderColor = "green";
		   									document.getElementById("s3").style.borderColor = "green";
		   									if(borrow_info==''){
		   										document.getElementById("borrow_info").style.borderColor = "red";
		   										layer.msg('请填写借款说明');
		   									}else{
		   										document.getElementById("borrow_info").style.borderColor = "green";
		   										var index = layer.load(1,{time: 7*1000});
		   										$.post('/Home/Borrow/borrowapply_save',{username:uname,
												tel:phone_num,borrow_money:borrow_money,
												borrow_type:borrow_type,borrow_interest_rate:title0,
												day_time:day_time,month_time:month_time,year_time:year_time,
												time_type:time_type,province:s1,city:s2,town:s3,borrow_info:borrow_info},
												function success(data){
													if(data.status){
														layer.alert(data.info);
														layer.closeAll('loading');
														location.reload(); 
													}else{
														layer.alert(data.info);
														layer.closeAll('loading');
													}
												});
		   									}
		   								}
		   							}	
		   						}
		   					}
		   				}
					}
	   			}
			}
   		}
   });
	$('#c_days').click(function(){
		document.getElementById('year_time').style.display="none";
		document.getElementById('month_time').style.display="none";
		document.getElementById('day_time').style.display="inline-block";
	});
	$('#c_month').click(function(){
		document.getElementById('year_time').style.display="none";
		document.getElementById('month_time').style.display="inline-block";
		document.getElementById('day_time').style.display="none";
	});
	$('#c_year').click(function(){
		document.getElementById('year_time').style.display="inline-block";
		document.getElementById('month_time').style.display="none";
		document.getElementById('day_time').style.display="none";
	});		
</script>
<script type="text/javascript">
scale = function (btn, bar, title) {
  this.btn = document.getElementById(btn);
  this.bar = document.getElementById(bar);
  this.title = document.getElementById(title);
  this.step = this.bar.getElementsByTagName("DIV")[0];
  this.init();
};
scale.prototype = {
  init: function () {
    var f = this, g = document, b = window, m = Math;
    f.btn.onmousedown = function (e) {
      var x = (e || b.event).clientX;
      var l = this.offsetLeft;
      var max = f.bar.offsetWidth - this.offsetWidth;
      g.onmousemove = function (e) {
        var thisX = (e || b.event).clientX;
        var to = m.min(max, m.max(-10, l + (thisX - x)));
        f.btn.style.left = to + 'px';
        f.ondrag(m.round(m.max(0, to / max) * 100), to);
        b.getSelection ? b.getSelection().removeAllRanges() : g.selection.empty();
      };
      g.onmouseup = new Function('this.onmousemove=null');
    };
  },
  ondrag: function (pos, x) {
    this.step.style.width = Math.max(0, x) + 'px';
    // this.title.innerHTML = pos / 1 + '';
    var rval= pos / 1 + '';
    $("#title0").val(rval);
  }
}
new scale('btn0', 'bar0', 'title0');
new scale('btn1', 'bar1', 'title1');
new scale('btn2', 'bar2', 'title2');
new scale('btn3', 'bar3', 'title3');
new scale('btn4', 'bar4', 'title4');
</script>

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