<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>工合基金_首页</title>
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<link href="/Public/Static/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/Public/Static/bootstrap/css/docs.css" rel="stylesheet">
<script type="text/javascript" src="/Public/Static/rzg_js/i_banner1.js"></script>
<script type="text/javascript" src="/Public/Static/rzg_js/banner.js"></script>
<script type="text/javascript" src="/Public/Static/rzg_js/common.js"></script>
<script type="text/javascript" src="/Public/Static/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/jquery-2.1.1.js"></script>
<script type="text/javascript" src="/Public/Static/jquery.form.js"></script>
<link rel="stylesheet" href="/Public/Static/rzg_css/css.css" type="text/css">
<!-- 引入layer -->
<script type="text/javascript" src="/Public/Static/layer/layer.min.js"></script>
<script type="text/javascript" src="/Public/Static/layer/extend/layer.ext.js"></script>
<!-- 引入JQUERY UI器   当局  有冲突-->
<link rel="stylesheet" type="text/css" href="/Public/Static/datepicker/css/jquery-ui.css" >
<!--表单验证-->
<link rel="stylesheet" href="/Public/Home/css/style.css" type="text/css" >
<link rel="stylesheet" href="/Public/Home/css/h.css" type="text/css" >
<link rel="stylesheet" href="/Public/Home/css/page.css" type="text/css" >
<script type="text/javascript" src="/Public/Home/js/banner.js"></script>
<script type="text/javascript" src="/Public/Home/js/common.js"></script>
<script type="text/javascript" src="/Public/Home/js/xszy_cont.js"></script>
<script type="text/javascript" src="/Public/Home/js/anquanshezhi.js"></script>
<script type="text/javascript" src="/Public/Home/js/biaodexiangqing.js"></script>
<script type="text/javascript" src="/Public/Home/js/guanyuwomen.js"></script>
<script type="text/javascript" src="/Public/Home/js/wodezhanghu.js"></script>
<script type="text/javascript" src="/Public/Home/js/fabujiekuan.js"></script>


<!--表单验证-->
<link rel="stylesheet" href="/Public/static/zyUpload/control/css/zyUpload.css" type="text/css">
<script type="text/javascript" src="/Public/static/zyUpload/core/zyFile.js"></script>
<script type="text/javascript" src="/Public/static/zyUpload/control/js/zyUpload.js"></script>
<script type="text/javascript" src="/Public/static/zyUpload/demo.js"></script>

</head>
<body>
	<!-- 头部 -->
	<!--header start-->
<div class="header_out">
	<div class="header">
		<ul>
			<li class="weibo"><div></div><a href="http://weibo.com/u/5385565766?topnav=1&wvr=6&topsug=1" target="_blank">微博</a></li>
			<li class="weixin"><div></div><a href="javascript:;">微信</a></li>
			<li class="QQ"><div></div><a href="tencent://message/?uin=3058467611">&nbsp;QQ</a></li>
			<li class="call"><div></div><a href="">&nbsp;热线</a></li>
			<li class="fankui hot" ><div></div><a href="javascript:void(0);">问题反馈</a></li>
			<li class="hot" ><div></div><a href="<?php echo U('Home/Borrow/borrowapply');?>">新手体验</a></li>
		</ul>
		<?php if(is_login()): ?><p>
			<?php if(is_danger()): ?><a href="<?php echo U('Member/System/usermailindex');?>"><img src="/Public/Home/images/notice.png" width="20" height="20" title="您有新的消息，请注意查看！"/></a>
			<?php else: ?>
				没有消息了<?php endif; ?>
			<a href="<?php echo U('Member/Index/index');?>"class="zc"><?php echo get_username();?>[个人中心]</a>&nbsp;|&nbsp;<a href="<?php echo U('Home/User/logout');?>"class="dl">安全退出</a>
		</p>
		<?php else: ?>
		<p>
			<a href="<?php echo U('Home/User/register');?>" class="zc btn">免费注册</a> |&nbsp;<a href="<?php echo U('Home/User/login');?>" class="dl btn">立即登录</a>
	      </p><?php endif; ?>
		
		<!--鼠标划上效果-->
		<div class="weibo_eweima"><img src="/Public/Home/images/weibo_eweima.png"/></div>
		<div class="weixin_eweima"><img src="/Public/Home/images/weixin_eweima.jpg" width="100" height="100"/></div>
		<div class="QQ_eweima"><img src="/Public/Home/images/QQ_eweima.jpg"/></div>
		<div class="phonenumber">400-123-4567</div>
		
	</div>
    <a name="returntop" id="returntop"></a>
    
    

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
					<a href="<?php echo U('Home/Index/index');?>"><img src="/Public/Home/images/logo.png" width="62" height="47" /><img src="/Public/Home/images/gonghe.png" width="136" height="50" /></a>
				</h1>
				<ul class="nav_wrap">
			    	<li style="width: 40px;"><a href="<?php echo U('Home/Index/index');?>" class="current">首页</a></li>
					<li><a href="<?php echo U('Home/Borrow/index');?>">我要融资</a></li>
					<li><a href="<?php echo U('Home/Finance/index');?>">我要投资</a></li>
					<li><a href="<?php echo U('Member/Index/index');?>">我的账户</a></li>
					<li><a href="<?php echo U('Home/Newhelp/borrowhelp');?>">新手指引</a></li>
					<li><a href="<?php echo U('Home/RichFunds/index');?>">工合基金</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--nav end-->


<!--浮动侧边栏  计算器  客服QQ-->
<!--联系我们-->
<div class="flo_aside">
	<!--浮动框标题-->
    <ul class="flo_l">
    	<li style="padding-top: 30px;">计<br />算<br />器</li>
        <li>联<br />系<br />我<br />们</li>
        <li class="returnTop" style="display:none;height: 35px;padding-top: 0;"><a href="#returntop" style="color: #fff;display: block;width: 35px;height: 35px;background: url(/Public/Home/images/returntop.png) no-repeat center center;"></a></li>
    </ul>
    <div class="flo_r" style="display:none">
    	<!--计算器-->
    	<ul class="flo_jsq" style="display:none">
            	<li><a href="<?php echo U('Home/Newhelp/compare_tools');?>">收益计算器</a></li>
            	<!--<li><a href="#">CPI计算器</a></li>
            	<li><a href="#">收益对比</a></li>
            	<li><a href="#">身价计算器</a></li>-->
        </ul>
        <!--联系方式-->
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






<script type="text/javascript" src="_PUBLIC_/Home/js/jquery-1.7.2.min.js"></script>
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
  			$('.weibo_eweima').stop().slideDown();
  		},function(){
  			$('.weibo_eweima').stop().slideUp();
  		})
  		//微信
  		$('.header_out .header ul .weixin').hover(function(){
  			$('.weixin_eweima').stop().slideDown();
  		},function(){
  			$('.weixin_eweima').stop().slideUp();
  		})
  		//QQ
  		$('.header_out .header ul .QQ').hover(function(){
  			$('.QQ_eweima').stop().slideDown();
  		},function(){
  			$('.QQ_eweima').stop().slideUp();
  		})
  		//热线
  		$('.header_out .header ul .call').hover(function(){
  			$('.phonenumber').stop().fadeIn();
  		},function(){
  			$('.phonenumber').stop().fadeOut();
  		})
  		
  		
		
})
</script>













	<!-- /头部 -->
	<!-- 主体 -->
	  
<!--content start-->
<div class="dl_cont_out">
	<div class="dl_cont">
		<div class="top">
			<h2>用户注册</h2>
			<p>
				已有账户<a href="<?php echo U('User/login');?>">点击登录</a>
			</p>
		</div>
		<form id="form" action="/index.php?s=/Home/User/register.html" method="post">
			<dl>
				<dt>
					<span>* </span>手机号码:
				</dt>
				<dd>
					<input id="mobile" type="text" value="" placeholder="请输入您的手机号码" name="mobile" class="txt" />
				</dd>
				<span id="checkphone" style="line-height:48px;"></span>
			</dl>
			<!-- <dl>
				<dt>
					
				</dt>
				<dd>
					
					<input id="zphone" type="button" value=" 获取手机验证码 " onClick="get_mobile_code();" /><span style="color: red;">（手机验证码内部测试，无需填写）</span>
				</dd>
				<span id="checkphone" style="line-height:48px;color: red;"></span>
			</dl> -->
			<!-- <dl>
				<dt>
					<span>* </span>验证码:
				</dt>
				<dd>
					<input type="text" size="8" name="mobile_code" class="inputBg" />
				</dd>
				<span id="checkphone" style="line-height:48px;"></span>
			</dl> -->
			<dl>
				<dt>
					<span>* </span>电子邮箱:
				</dt>
				<dd>
					<input type="text" value="" placeholder="请输入您的电子邮箱" id="email"
						ajaxurl="/member/checkUserEmailUnique.html" errormsg="请填写正确格式的邮箱"
						nullmsg="请填写邮箱" datatype="e" name="email" class="txt" />
				</dd>
				<span id="checkemail" style="line-height:48px;"></span>
			</dl>
			<dl>
				<dt>
					<span>* </span>用户名:
				</dt>
				<dd>
					<input type="text" value="" placeholder="请输入您的5-20位用户名" id="username"
						name="username" class="txt"
						ajaxurl="/member/checkUserNameUnique.html" errormsg="请填写5-20位用户名"
						nullmsg="请填写用户名" datatype="*1-16" />
				</dd>
				<span id="checkuser" style="line-height:48px;"></span>
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
				<span id="checkpwd" style="line-height:48px;"></span>
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
				<span id="checkrepwd" style="line-height:48px;"></span>
			</dl>

			<dl>
				<dt>
					<span>* </span>验证码:
				</dt>
				<dd>
					<input type="text" value="" placeholder="请输验证码" class="yz"
						errormsg="请填写5位验证码" nullmsg="请填写验证码" datatype="*5-5" name="verify"
						id="verify" /> <img class="yzBtn verifyimg reloadverify" alt="点击切换" src="<?php echo U('verify');?>"
						style="cursor: pointer;">
					<!-- <input type="button" value="手机验证" name="" class="yzBtn"/>
                    <p class="yz_call">如果收不到验证码，请拨打<span>400-123-4567</span></p> -->
				</dd>
				<span id="checkcode" style="line-height:48px;"></span>
			</dl>
			<dl>
				<dt>
					<span>*</span>推荐人:
				</dt>
				<dd>
					<input type="text" value="<?php echo ($reffer); ?>" placeholder="推荐人(无则不用填写)" name="introduce" class="txt" />
				</dd>
				<span id="checkintroduce" style="line-height:48px;"></span>
			</dl><dl style="padding-left:215px;width:575px;height:40px; margin-bottom:0px;">
					<span style="color: red;line-height:40px;" id="checkcode" class="formtips Validform_checktip "></span>
			</dl>
			<div class="zcCheck">
				<input type="checkbox" class="check" checked="checked" id="testcheck"/>
				<p>
					<b>我已阅读并同意</b><a href="<?php echo U('Home/Newhelp/fuwutiaokuan');?>" target="_blank">《网站服务协议》</a><b>和</b><a href="<?php echo U('Home/Newhelp/shiyongtiaokuan');?>" target="_blank">《使用条款》</a>
				</p>
			</div>
			<button type="submit" class="btn" id="zc">注 册</button>
		</form>
	</div>
</div>
<script language="javascript">
	function get_mobile_code(){

        // $.post('./Addons/Smsphp/sms.php', {mobile:jQuery.trim($('#mobile').val()),send_code:<?php echo $_SESSION['send_code'];?>}, function(msg) {
            alert(jQuery.trim(unescape(msg)));
			if(msg=='提交成功'){
				RemainTime();
			}
        });
	};
	var iTime = 59;
	var Account;
	function RemainTime(){
		document.getElementById('zphone').disabled = true;
		var iSecond,sSecond="",sTime="";
		if (iTime >= 0){
			iSecond = parseInt(iTime%60);
			iMinute = parseInt(iTime/60)
			if (iSecond >= 0){
				if(iMinute>0){
					sSecond = iMinute + "分" + iSecond + "秒";
				}else{
					sSecond = iSecond + "秒";
				}
			}
			sTime=sSecond;
			if(iTime==0){
				clearTimeout(Account);
				sTime='获取手机验证码';
				iTime = 59;
				document.getElementById('zphone').disabled = false;
			}else{
				Account = setTimeout("RemainTime()",1000);
				iTime=iTime-1;
			}
		}else{
			sTime='没有倒计时';
		}
		document.getElementById('zphone').value = sTime;
	}	
</script>
<script type="text/javascript">
//验证码刷新
    	$(document)
    	.ajaxStart(function(){
	    		$("button:submit").addClass("log-in").attr("disabled", true);
	    	})
	    	.ajaxStop(function(){
	    		$("button:submit").removeClass("log-in").attr("disabled", false);
	    	});
    	$("form").submit(function(){
    		var self = $(this);
    		$.post(self.attr("action"), self.serialize(), success, "json");
    		return false;

    		function success(data){
    			if(data.status){
    				layer.msg(data.info, 3,1, function(){
					
							window.location.href = data.url;
					});	
    			} else {
    				self.find(".Validform_checktip").text(data.info);
    				//刷新验证码
    				$(".reloadverify").click();
    			}
    		}
    	});
		$(function(){
			var verifyimg = $(".verifyimg").attr("src");
            $(".reloadverify").click(function(){
                if( verifyimg.indexOf('?')>0){
                    $(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
                }else{
                    $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
                }
            });
		});
	</script>
<script>
	$("#registerSub").click(function() {
		var phone = $("#phone").val();
		var email = $("#email").val();
		var username = $("#username").val();
		var password = $("#password").val();
		var repassword = $("#repassword").val();
		var verify = $("#verify").val();
		
		//var isMobile=/^(?:13\d|15\d|18\d)\d{5}(\d{3}|\*{3})$/;  //手机号码验证正则表达式
	// 	if (phone == "") {
	// 		$("#checkphone").html("<font color='red'>手机号码不能为空！</font>");
	// 		return false;
	// 	}else{
	// 		/* if(!isMobile.test(phone)){
	// 			$("#checkphone").html("<font color='red'>请输入正确的手机号码！</font>");
	// 			return false;
	// 		} */
	// 	}
		
	// //	var re = /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/;
	// 	if (email == "") {
	// 		if (phone != null) {
	// 			$("#checkphone").hide();
	// 		}
	// 		$("#checkemail").html("<font color='red'>邮箱地址不能为空！</font>");
	// 		return false;
	// 	}else{
	// 		/* if(！re.test(email)){
	// 			$("#checkemail").html("<font color='red'>请输入正确的邮箱地址！</font>");
	// 			return false;
	// 		} */
	// 	}
	// 	if (username == "") {
	// 		if (phone != null) {
	// 			$("#checkphone").hide();
	// 		}
	// 		if (email != null) {
	// 			$("#checkemail").hide();
	// 		}
	// 		$("#checkuser").html("<font color='red'>用户名不能为空！</font>");
	// 		return false;
	// 	}
	// 	if (password == "") {
	// 		if (phone != null) {
	// 			$("#checkphone").hide();
	// 		}
	// 		if (email != null) {
	// 			$("#checkemail").hide();
	// 		}
	// 		if (username != null) {
	// 			$("#checkuser").hide();
	// 		}
	// 		$("#checkpwd").html("<font color='red'>注册密码不能为空！</font>");
	// 		return false;
	// 	}

	// 	if (repassword == "") {
	// 		if (phone != null) {
	// 			$("#checkphone").hide();
	// 		}
	// 		if (email != null) {
	// 			$("#checkemail").hide();
	// 		}
	// 		if (username != null) {
	// 			$("#checkuser").hide();
	// 		}
	// 		if (password != null) {
	// 			$("#checkpwd").hide();
	// 		}
	// 		$("#checkrepwd").html("<font color='red'>确认注册密码不能为空！</font>");
	// 		return false;
	// 	}else{
	// 		if (phone != null) {
	// 			$("#checkphone").hide();
	// 		}
	// 		if (email != null) {
	// 			$("#checkemail").hide();
	// 		}
	// 		if (username != null) {
	// 			$("#checkuser").hide();
	// 		}
	// 		if (password != null) {
	// 			$("#checkpwd").hide();
	// 		}
	// 		if(password!=repassword){
	// 			$("#checkrepwd").html("<font color='red'>两次输入的密码不一致！</font>");
	// 			return false;
	// 		}
	// 	}
		
	// 	if(verify==""){
	// 		if (phone != null) {
	// 			$("#checkphone").hide();
	// 		}
	// 		if (email != null) {
	// 			$("#checkemail").hide();
	// 		}
	// 		if (username != null) {
	// 			$("#checkuser").hide();
	// 		}
	// 		if (password != null) {
	// 			$("#checkpwd").hide();
	// 		}
	// 		if(repassword!=null){
	// 			$("#checkrepwd").hide();
	// 		}
	// 		$("#checkcode").html("<font color='red'>验证码不能为空！</font>");
	// 		return false;
	// 	}
		$("#form").submit();

	});
</script> <!--content end--> 


<!--
	作者：1339070342@qq.com
	时间：2015-01-19
	描述：服务条款是否选择同意
-->
<script type="text/javascript">
	$(function(){
		//alert(1);			
		//alert($('.check').prop( "checked"));
//		$('.check').click(function(event) {
//          if($(this).prop( "checked", true)){
//              $('#zc').prop( "disabled", false);
//          }
//         
//      });

		$('.check').bind("change",function() {
           if($(this).is(':checked')){
                $('#zc').prop( "disabled", false);
           }else{
                $('#zc').prop( "disabled", true);
           }
        });
		
	})
</script>



























	<!-- /主体 -->
	<!-- 底部 -->
	
<!--footer start-->
<div class="footer">
	<div class="footer_in">
			
			<ul>
				<li><a href="<?php echo U('Home/Newhelp/aboutus');?>">关于我们</a></li>
				<li><a href="#">帮助中心</a></li>
				<!-- <li><a href="#">理财攻略</a></li> -->
				<li><a href="#">网站地图</a></li>
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
				<dt><img src="/Public/Home/images/weixin_eweima.jpg"/><p style="text-align: center;line-height: 20px;">扫描微信二维码<br />关注工合财富</p></dt>
				<dd><a href="#" class="weixin"></a></dd>
			</dl>
			<dl style="float: right;">		
				<dd style="margin-right: 5px;"><a href="http://weibo.com/u/5385565766?topnav=1&wvr=6&topsug=1" class="weibo" target="_blank"></a></dd>
				<dt><img src="/Public/Home/images/weibo_eweima.png"/><p style="text-align: center;line-height: 20px;">扫描微博二维码<br />关注工合财富</p></dt>
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
		<p>Copyrightc2011-2014工合财富 All rights reserved</p>
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
		$.layer({
			type : 2,
			shade : [ 0 ],
			fix : false,
			title : '平台技术问题反馈',
			maxmin : true,
			iframe : {
				src : 'Home/Index/fankui'
			},
			area : [ '600px', '440px' ],
			shift : 'top'
		})
	});
</script>
	<!-- /底部 -->
</body>
</html>
<!-- 网站结构 -->