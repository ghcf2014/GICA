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
						<dt><img style="margin-left: -262px;"  src="/Public/Home/images/jiantou-denglu.png" /></dt>
						<dd><input type="text" name="username" value="" id="username"  tabindex="1" />
						</dd>
					</dl>
					<dl style="margin-top: 20px;">
						<dt><img style="margin-left: -24px;" src="/Public/Home/images/jiantou-denglu-2.png" /></dt>
						<dd><input type="password" name="password" id="password" tabindex="2" />
						</dd>
					</dl>
					<dl style="margin-top: 20px;">
						<dt><img style=" margin-left: -159px;" src="/Public/Home/images/jiantou-yanzhengma.png" /></dt>
						<dd><input type="text" name="verify" style="width:50px;" /><img class="verifyimg reloadverify" src="<?php echo U('Home/User/verify');?>" width="100"height="44" alt="点击切换">
						</dd>
					</dl>
					<dl style="text-align: center;margin-top: 20px;">
						<input  type="submit" id="login_btn" value=""/>
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
    //       	if (data.nuser=='用户不存在')
    //       	 {
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
				document.getElementById("top_ads").style.display = "block";

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
	name="body"> <!--content start-->
<div class="about_cont_out">
	<div class="about_cont_in">
		<div class="about_cont">	
		<!--zh_cont_l-->
		<div class="about_cont_l">
			<h2>关于我们</h2>
			<ul>
				<li class="about_cont_l_cur">公司简介</li>
				<li>团队力量</li>
				<li>经营理念</li>
				<li>媒体报道</li>
				<li>最新动态</li>
				<li>网站公告</li>
				<li>合作伙伴</li>
				<li>加入我们</li>
				<li class="about_li_last">联系我们</li>
			</ul>
		</div>

		<!--zh_cont_r-->
		<div class="about_cont_r">
			<!--公司简介-->
			<div class="about_tab">
				<!--<h3>公司简介</h3>-->
				<p class="about_tab_gsjj" style="background: url(/Public/Home/images/gsjj.png) no-repeat center 10px;">
					广东工合股权基金有限公司（以下简称“工合基金”）是由广东股权投资协会常务副会长单位、深圳市金环球股权基金有限公司分别出资70%与30%共同发起设立，注册资本（实收）1亿元，是一家由实力产业资本与资本运营、资产经营专家创立并管理的实力基金管理机构，总部位于最具金融创新活力的深圳经济特区。<br />
					“工合基金”定位于具有显著成长性和突出比较优势的创新型基金公司，依托广东省工业合作协会和广东股权投资协会丰富的优质企业资源和深圳经济特区丰富的优质资产存量，“工合基金”核心管理层在充分调研的基础上，制定了“优质资产并购运营”与“优质企业私募股权投资”并重的“双优”投资规划作为其确定性战略发展规划。<br />“工合基金”已与江苏银行股份有限公司深圳分行、广州银行深圳分行、杭州银行深圳分行经友好协商建立“金融服务战略合作关系”;依据相关《战略合作协议》，前述三家银行拟向广东省工业合作协会评选和推荐的“广东省全国名牌”企业、“最具成长性”企业以及其他优质会员等提供的资金支持合计高达人民币170亿元。
				</p>
			</div>

			<!--团队力量-->
			<div class="about_tab" style="display: none">
				<!--<h3>团队力量</h3>-->
				<p class="about_tab_gsjj" style="background: url(/Public/Home/images/tdll.png) no-repeat center 10px;">
					１．团队成员知识经验具有高度的互补性。团队成员主要来自实业界、投资银行界与财务管理界，管理团队对中国特色市场经济环境下周期性、方向性、阶段性投资机会的发现具有一定的前瞻性，对拟收购运营资产/项目动态性价比的判断、对资产并购运营交易时机的把握具有相当的准确性，对资产并购运营、商业模式创新、交易结构优化具有核心智力资源，对资产并购/运营的市场风险、财务风险、法律风险的识别、防范和控制有着深刻的理解和精确的把握。现阶段，广东工合针对“双优”投资规划，实施高端智力资本需要而精心打造的知识、资质、经验、创意“互补型”专家团队，以风险的预先识别和可控以及绝对收益为核心理念，以为投资者创造可预期的、稳定可靠的收益为首要目标。我们绝不片面追求资产并购运营规模，而是将基金投资人的投资回报水平及投资安全边际作为最重要的考核指标。以审慎自省的心态和专业勤勉之举善待每一位投资伙伴，任何时候都是广东工合基金管理团队如终如一的选择。<br />
					２．管理团队拥有“两会”平台上极为丰富的优质资产信息和项目来源，管理团队成员在私募投资领域和政府部门拥有的资深工作经历，所积累的中介机构渠道、人脉关系及政府资源均可带来优质而广阔的项目来源；基金管理人紧密依托的广东省工业合作协会、广东股权投资协会正源源不断为基金管理团队带来优质程度不等的资产项目信息。<br />
					３．专业到位的增值服务能力。本团队主要成员均是企业管理、资产运营及投资银行专家和财务专家，对中国原生态商业环境有透彻的了解，能够高质量地识别投资风险、高效率地执行投资后管理，有效管控运营风险，专业到位的增值服务能力是构筑我们核心竞争力的一大关键支柱。
				</p>
			</div>

			<!--集团公司-->
			<div class="about_tab" style="display: none">
				<!--<h3>经营理念</h3>-->
				<p class="about_tab_gsjj" style="background: url(/Public/Home/images/jyln.png) no-repeat center 10px;">
					一、诚信为本，尊重员工，倾听客户需求。 诚信是公司安身立命之本，也是做人、做事的原则。公司对员工守诚信，尊重员工的选择和人格，给员工提供更为身心愉悦的工作环境。公司对客户守诚信，秉承以客户为中心，快速响应客户的需求，为客户提供有价值的产品，有效的服务，与客户共同发展，让客户真正满意在工合，放心在工合。<br />
					二、艰苦奋斗，持续创新。 艰苦奋斗是广东工合股权基金有限公司赖以发展之根源，客户的需求就是我们创新的源泉，就是我们创新活动的动力所在。创新不是一蹴而就的，是需要艰苦奋斗的努力才能实现的。<br />
					三、团队合作，开放进取。一个团队的成功不是一个人的努力就能够造就的，积极向上的学习氛围，团队之间阳光、开放的心态，有效的沟通渠道，沟通方式，相互之间的包容合作是我们取得成功的保障。
				</p>
			</div>

			<!--媒体报道-->
			<div class="about_tab" style="display: none">
				<!--<h3>媒体报道</h3>-->
				<p class="about_tab_gsjj" style="background: url(/Public/Home/images/mtbd.png) no-repeat center 10px;">
					工合基金（www.gonghejijin.com）是国内首创P2C互联网金融交易模式的平台，于2013年3月31日上线。致力于为个人和企业搭建一个高效、直接的融资桥梁，构筑更轻松自由的投融资环境，寻找个人与企业之间安全与效率的平衡点，推动解决利率市场化进程中投资渠道窄和实体企业融资难的问题，实现合作共赢。<br />
					广东工合股权基金有限公司属于信盈集团，管理团队成员均毕业于清华、北大、中科院等知名高校，项目及风控高管来自于花旗银行、民生银行、平安银行等知名金融机构，具备丰富的从业实操经验；技术及运营团队皆由知名互联网企业从业多年的成员组成。<br />
					自成立以来，广东工合股权基金有限公司确定了先进的商业模式和交易结构，通过优秀的互联网技术及金融资源配置能力，秉承与投资人、企业、战略合作伙伴及员工相互依存，共同增值、共赢发展的基本使命，致力于成为名列行业前茅的互联网金融创新公司，打造新时代的互联网金融平台。公司凭借出众的资源配置能力、卓越的创新精神、良好的信誉及专业的形象，在业内赢得了良好口碑。经过对业务渠道的逐渐拓宽，公司已将业务开展到了全国，成为互联网金融行业中少有的全国性业务平台，目前已在国内开设6家分支机构，为几十万互联网用户及几百家实体企业提供便捷及时的投融资服务。<br />
					不忘初心，方得始终。服务广大投资用户及高效的对接企业的融资诉求永远是我们追求的目标，公司以支持实体企业发展为宗旨，始终秉承"专业机构做专业的事"和"风控作为第一要务"的经营理念，优质，高效，周到，细致的办事风格已赢得业内外肯定。鲸吞四海方知止，我们真诚期待与广大用户朋友及合作伙伴共同发展，并朝着更专业化、规模化、全球化的方向迈进。
				</p>
			</div>

			<!--最新动态-->
			<div class="about_tab" style="display: none">
				<!--<h3>最新动态</h3>-->
				<p class="about_tab_gsjj" style="background: url(/Public/Home/images/zxdt.png) no-repeat center 10px;">
					工合基金（www.gonghejijin.com）是国内首创P2C互联网金融交易模式的平台，于2013年3月31日上线。致力于为个人和企业搭建一个高效、直接的融资桥梁，构筑更轻松自由的投融资环境，寻找个人与企业之间安全与效率的平衡点，推动解决利率市场化进程中投资渠道窄和实体企业融资难的问题，实现合作共赢。<br />
					广东工合股权基金有限公司隶属于信盈集团，管理团队成员均毕业于清华、北大、中科院等知名高校，项目及风控高管来自于花旗银行、民生银行、平安银行等知名金融机构，具备丰富的从业实操经验；技术及运营团队皆由知名互联网企业从业多年的成员组成。<br />
					自成立以来，广东工合股权基金有限公司确定了先进的商业模式和交易结构，通过优秀的互联网技术及金融资源配置能力，秉承与投资人、企业、战略合作伙伴及员工相互依存，共同增值、共赢发展的基本使命，致力于成为名列行业前茅的互联网金融创新公司，打造新时代的互联网金融平台。公司凭借出众的资源配置能力、卓越的创新精神、良好的信誉及专业的形象，在业内赢得了良好口碑。经过对业务渠道的逐渐拓宽，公司已将业务开展到了全国，成为互联网金融行业中少有的全国性业务平台，目前已在国内开设6家分支机构，为几十万互联网用户及几百家实体企业提供便捷及时的投融资服务。<br />
					不忘初心，方得始终。服务广大投资用户及高效的对接企业的融资诉求永远是我们追求的目标，公司以支持实体企业发展为宗旨，始终秉承"专业机构做专业的事"和"风控作为第一要务"的经营理念，优质，高效，周到，细致的办事风格已赢得业内外肯定。鲸吞四海方知止，我们真诚期待与广大用户朋友及合作伙伴共同发展，并朝着更专业化、规模化、全球化的方向迈进。
				</p>
			</div>

			<!--网站公告-->
			<div class="about_tab" style="display: none">
				<!--<h3>网站公告</h3>-->
				<p class="about_tab_gsjj" style="background: url(/Public/Home/images/wzgg.png) no-repeat center 10px;">
					工合基金（www.gonghejijin.com）是国内首创P2C互联网金融交易模式的平台，于2013年3月31日上线。致力于为个人和企业搭建一个高效、直接的融资桥梁，构筑更轻松自由的投融资环境，寻找个人与企业之间安全与效率的平衡点，推动解决利率市场化进程中投资渠道窄和实体企业融资难的问题，实现合作共赢。<br />
					广东工合股权基金有限公司隶属于信盈集团，管理团队成员均毕业于清华、北大、中科院等知名高校，项目及风控高管来自于花旗银行、民生银行、平安银行等知名金融机构，具备丰富的从业实操经验；技术及运营团队皆由知名互联网企业从业多年的成员组成。<br />
					自成立以来，广东工合股权基金有限公司确定了先进的商业模式和交易结构，通过优秀的互联网技术及金融资源配置能力，秉承与投资人、企业、战略合作伙伴及员工相互依存，共同增值、共赢发展的基本使命，致力于成为名列行业前茅的互联网金融创新公司，打造新时代的互联网金融平台。公司凭借出众的资源配置能力、卓越的创新精神、良好的信誉及专业的形象，在业内赢得了良好口碑。经过对业务渠道的逐渐拓宽，公司已将业务开展到了全国，成为互联网金融行业中少有的全国性业务平台，目前已在国内开设6家分支机构，为几十万互联网用户及几百家实体企业提供便捷及时的投融资服务。<br />
					不忘初心，方得始终。服务广大投资用户及高效的对接企业的融资诉求永远是我们追求的目标，公司以支持实体企业发展为宗旨，始终秉承"专业机构做专业的事"和"风控作为第一要务"的经营理念，优质，高效，周到，细致的办事风格已赢得业内外肯定。鲸吞四海方知止，我们真诚期待与广大用户朋友及合作伙伴共同发展，并朝着更专业化、规模化、全球化的方向迈进。
				</p>
			</div>

			<!--合作伙伴-->
			<div class="about_tab" style="display: none">
				<!--<h3>合作伙伴</h3>-->
				<p class="about_tab_gsjj" style="background: url(/Public/Home/images/hzhb.png) no-repeat center 10px;">
					工合基金（www.gonghejijin.com）是国内首创P2C互联网金融交易模式的平台，于2013年3月31日上线。致力于为个人和企业搭建一个高效、直接的融资桥梁，构筑更轻松自由的投融资环境，寻找个人与企业之间安全与效率的平衡点，推动解决利率市场化进程中投资渠道窄和实体企业融资难的问题，实现合作共赢。<br />
					广东工合股权基金有限公司隶属于信盈集团，管理团队成员均毕业于清华、北大、中科院等知名高校，项目及风控高管来自于花旗银行、民生银行、平安银行等知名金融机构，具备丰富的从业实操经验；技术及运营团队皆由知名互联网企业从业多年的成员组成。<br />
					自成立以来，广东工合股权基金有限公司确定了先进的商业模式和交易结构，通过优秀的互联网技术及金融资源配置能力，秉承与投资人、企业、战略合作伙伴及员工相互依存，共同增值、共赢发展的基本使命，致力于成为名列行业前茅的互联网金融创新公司，打造新时代的互联网金融平台。公司凭借出众的资源配置能力、卓越的创新精神、良好的信誉及专业的形象，在业内赢得了良好口碑。经过对业务渠道的逐渐拓宽，公司已将业务开展到了全国，成为互联网金融行业中少有的全国性业务平台，目前已在国内开设6家分支机构，为几十万互联网用户及几百家实体企业提供便捷及时的投融资服务。<br />
					不忘初心，方得始终。服务广大投资用户及高效的对接企业的融资诉求永远是我们追求的目标，公司以支持实体企业发展为宗旨，始终秉承"专业机构做专业的事"和"风控作为第一要务"的经营理念，优质，高效，周到，细致的办事风格已赢得业内外肯定。鲸吞四海方知止，我们真诚期待与广大用户朋友及合作伙伴共同发展，并朝着更专业化、规模化、全球化的方向迈进。
				</p>
			</div>

			<!--加入我们-->
			<div class="about_tab" style="display: none">
				<!--<h3>加入我们</h3>-->
				<p class="about_tab_gsjj" style="background: url(/Public/Home/images/jrwm.png) no-repeat center 10px;">
					自2014年07月16日正式上线，工合财富的P2P借贷模式以及专业的服务深受市场认可与好评。随着工合财富互联网投融资业务在全国的开展，将有越来越多的融资性担保公司、融资租赁公司、保理公司等与我们建立了良好的战略合作关系。<br />
					工合财富力图打造一个高效、安全、透明、多赢的"互联网金融创新工厂"，在实现资源的合理配置，推进利率市场化进程中发挥着重要作用。工合财富结合其与生俱来的互联网基因与在金融创新方面的独特优势，以实际行动积极响应国家号召，鼓励和引导民间资本进入实体经济、社会事业领域。<br />
					我们期待对互联网金融有着强烈兴趣，丰富经验的有识之士加入我们！请将您的简历发到：hr@gonghejijin.com<br /> 在招职位<br />
					<a href="javascript:;">PHP高级研发工程师技术部</a> <br /> <a
						href="javascript:;">产品经理技术部</a> <br /> <a href="javascript:;">数据分析师技术部</a>
					<br /> <a href="javascript:;">融资租赁风控经理风控部</a> <br /> <a
						href="javascript:;">市场总监市场部</a> <br /> <a href="javascript:;">客服、客户关系维护专员客服部</a>
					<br /> 业务模式<br /> 爱担保模式<br /> 爱保理模式<br /> 爱融租模式<br /> 爱收藏模式<br />
					债权转让模式<br /> 安全保障<br />
				</p>
			</div>

			<!--联系我们-->
			<div class="about_tab" style="display: none">
				<!--<h3>联系我们</h3>-->
				<p class="about_tab_gsjj" style="background: url(/Public/Home/images/lxwm.png) no-repeat center 10px;">
					客户服务<br /> 客服电话：400-600-4300（工作日 09:00-21:00 节假日 09:00-18:00）<br />
					邮件反馈：service@gonghejijin.com<br /> <a href="javascript:;">在线客服</a><br />
					商务合作<br /> 媒体投放、商务合作、市场推广请联系marketing@gonghejijin.com<br /> 企业融资<br />
					如果您是有资金需求的企业，希望得到融资服务，您可以访问<br />
					http://www.gonghejijin.com
					进行线上申请或将您的企业和项目资料发送至partner@gonghejijin.com<br /> 
					公司地址：广东省深圳市福田区侨香路3085号岭南大厦8楼，518000<br />
					电话：+86 0755 3301 1818
				</p>
			</div>
		</div>
	  </div>
	</div>
</div>

<!--content end--> 
	<!-- /主体 -->
	<!-- 底部 -->
	<div class="flo_aside">
	<!--浮动框标题-->
    <ul class="flo_l">
    	<li style="padding-top: 30px;">计<br />算<br />器</li>
        <li>联<br />系<br />我<br />们</li>
        <li style="padding-top: 40px;" class="fankui hot" ><div></div>反<br />馈</li>
        	<div id="float_ad">
				<!-- <div><a href="#" target="_blank"><img height=172 src="images/chivas_ad1.jpg" width="20" border="0" /></a></div> -->
				<div><img onclick="show();" height="41" src="/Public/Home/images/index-loading-bgx.png" width="50" /></div>
			</div>
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
		    area: ['400px', '380px'],
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
<script src="/Public/Home/js/floatad.js" type="text/javascript" charset="utf-8"></script>

	<!-- /底部 -->
</body>
</html>
<!-- 网站结构 -->