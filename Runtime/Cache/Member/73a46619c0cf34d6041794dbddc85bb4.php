<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>工合财富</title>
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<link href="/Public/Static/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/Public/Static/bootstrap/css/docs.css" rel="stylesheet">
<script type="text/javascript" src="/Public/Static/jquery.js"></script>
<script type="text/javascript" src="/Public/Static/jquery-2.1.1.js"></script>
<script type="text/javascript" src="/Public/Static/jquery.form.js"></script>
<link rel="stylesheet" href="/Public/Static/rzg_css/css.css" type="text/css">
<!-- 引入layer -->
<script type="text/javascript" src="/Public/Static/layer/layer.min.js"></script>
<script type="text/javascript" src="/Public/Static/layer/extend/layer.ext.js"></script>
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
	<a name="returntop" id="returntop"> </a>
	<div class="header">
		<ul>
			<li class="weibo"><div></div><a href="http://weibo.com/u/5385565766?topnav=1&wvr=6&topsug=1" target="_blank">微博</a></li>
			<li class="weixin"><div></div><a href="javascript:;">微信</a></li>
			<li class="QQ"><div></div><a href="tencent://message/?uin=3058467611">&nbsp;QQ</a></li>
			<li class="call"><div></div><a href="">&nbsp;热线</a></li>
			<li class="fankui hot" ><div></div><a href="javascript:void(0);">问题反馈</a></li>
			<!-- <li class="hot" ><div></div><a href="<?php echo U('Home/Borrow/borrowapply');?>">新手体验</a></li> -->
		</ul>
		<?php if(is_login()): ?><p>
			<?php if(is_sysmsg() == 0): else: ?>
				站内消息[<a href="<?php echo U('Member/System/usermailindex');?>" style="color:white;"><?php echo is_sysmsg();?></a>]<?php endif; ?>
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
					
				</ul>
			</div>
		</div>
	</div>
</div>
<!--nav end-->

<!--浮动导航-->
<!--<div class="nav2_out">		
	<ul class="nav2">
    	<li style="width: 60px;"><a href="<?php echo U('Home/Index/index');?>" class="current">首页</a></li>
		<li><a href="<?php echo U('Home/Borrow/index');?>">我要融资</a></li>
		<li><a href="<?php echo U('Home/Finance/index');?>">我要投资</a></li>
		<li><a href="<?php echo U('Member/Index/index');?>">我的账户</a></li>
		<li><a href="<?php echo U('Home/Newhelp/borrowhelp');?>">新手指引</a></li>		
	</ul>
</div>-->







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
<div class="zh_cont_out">
	<div class="zh_cont">

		<!--zh_cont_l-->
<div class="zh_cont_l">
	<ul style="padding-top: 16px;">
		<li class="head" style="background:#e9e9e9 url(/Public/Home/images/icons_head.png) no-repeat 8px 14px;">个人中心</li>
		<li class="current" style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px 20px;"><a href="<?php echo U('Member/Index');?>">账户详情</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -24px;"><a href="<?php echo U('Member/Userinfo/userselfset');?>">基本认证</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -66px;"><a href="<?php echo U('Home/User/profile');?>">安全设置</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -110px;"><a href="<?php echo U('System/usermailindex');?>">消息中心</a></li>
	</ul>

	<ul>
		<li class="head" style="background:#e9e9e9 url(/Public/Home/images/icons_head.png) no-repeat 8px -26px;">借款管理</li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -156px;"><a href="<?php echo U('Member/Borrow/myborrowapply');?>">申请记录</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -200px;"><a href="<?php echo U('Member/Borrow/myborrowmanager');?>">借款记录</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -245px;"><a href="<?php echo U('Member/Borrow/borrowmanager');?>">还款记录</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -291px;"><a href="<?php echo U('Member/Finance/borrowloanstatis');?>">借款统计</a></li>
	</ul>

	<ul>
		<li class="head" style="background:#e9e9e9 url(/Public/Home/images/icons_head.png) no-repeat 8px -63px;">投资管理</li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -336px;"><a href="<?php echo U('Member/Invest/investindex');?>">投资记录</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -380px;"><a href="<?php echo U('Member/Finance/financestatis');?>">投标统计</a></li>
		<li class="tipshang" style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -426px;"><a href="<?php echo U('Member/Invest/autoinvest');?>">自动投标</a></li>
	</ul>

	<ul>
		<li class="head" style="background:#e9e9e9 url(/Public/Home/images/icons_head.png) no-repeat 8px -98px;">资金管理</li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -472px;"><a href="<?php echo U('Member/Userinfo/userchagerwithdraw');?>">资金明细</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 16px -517px;"><a href="<?php echo U('Member/Userinfo/userbankset');?>">银行卡设置</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -562px;"><a href="<?php echo U('Member/System/recharge');?>">充值提现</a></li>
	</ul>

	<ul>
		<li class="head" style="background:#e9e9e9 url(/Public/Home/images/icons_head.png) no-repeat 8px -134px;">推广管理</li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -608px;"><a href="<?php echo U('Member/Friends/friends');?>">友情推广</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -651px;"><a href="<?php echo U('Member/Friends/friendsgeneralize');?>">推广管理</a></li>
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
			<h3>
				当前位置 > <span style="color: #D41010;">充值提现</span>
			</h3>
			<div class="r_main">
				<div class="mes_con">
									<form id="form" action="<?php echo U('recharge_save');?>" method="post">
					<!--tabtil start-->
					<div class="tabtil">
						<ul>
							<!-- <li><a href="<?php echo U('Userinfo/userchagerwithdraw');?>">资金记录</a></li> -->
							<li class="on"><a href="<?php echo U('System/recharge');?>">充值</a></li>
							<li><a href="<?php echo U('System/withdrawdeposit');?>">提现</a></li>
						</ul>
					</div>
					<!--tabtil end-->
					<div class="box">
						<div class="boxmain2">
							<p class="tips">
								温馨提示：<br /> 1、充值手续费全免！<br />
								2、充值成功后，禁止当天提现，15天以内提现收取本金的0.3%，15天以后提现免费。<br />
								3、工合财富网贷禁止信用卡套现、虚假交易等行为，一经发现将予以处罚。<br />
								处罚包括但不限于以下几种方式：限制收款、冻结账户、永久停止服务，并对相关信用记录有影响。
							</p>
							<!--biaoge2 end-->
							<div class="biaoge2">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td width="11%">真实姓名：</td>
										<td width="89%"><?php echo ($memberdata['real_name']); ?></td>
									</tr>
									<tr>
										<td>平台账号：</td>
										<td><?php echo ($banksdata['bank_num']); ?></td>
									</tr>
									<tr>
										<td>充值金额：</td>
										<td><input id="money" type="text" class="inp140"
											name="account_money" /> <span
											style="color: red; float: none;" id="money_tip"
											class="formtips"></span></td>
									</tr>
									<tr>
										<td>充值类型：</td>
										<td style="">
											<!--      <s:if test="#request.gopay==2">
                                                        <input id="gopay" type="radio" name="pay" value="2"
                                                            style="float: none;" />&nbsp;
           <img src="/Public/Home/images/gopay.png" width="121px" height="33px" />&nbsp;&nbsp;&nbsp;&nbsp; 
           </s:if>
                                                    <s:if test="#request.IPS==2">
                                                        <input id="ipay" type="radio" name="pay" value="1"
                                                            style="float: none;" />&nbsp;&nbsp;
           <img src="/Public/Home/images/ipay.png" width="121px" height="33px" />
                                                    </s:if> --> <input
											type="radio" name="pay" id="xxpay" value="3"
											style="float: none;" checked="checked" /> &nbsp;线下充值<strong>(提交金额后,请联系客服进行线下充值)</strong>
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<div class="border_" id="div_gopay" style="display: none;">
												<table border="0" align="center" cellpadding="0"
													cellspacing="0">
													<tr>
														<td colspan="5"><strong>请选择支付方式：</strong></td>
													</tr>
													<tr valign="middle">
														<td><input type="radio" name="bankType" value="ICBC"
															id="rd_gopay_icbc" /> <img
															src="/Public/static/rzg_images/banks/bank_01.png" width="128"
															height="33" /></td>
														<td><input type="radio" name="bankType" value="CMB" />
															<img src="/Public/static/rzg_images/banks/bank_02.png"
															width="128" height="33" /></td>
														<td><input type="radio" name="bankType" value="CCB" />
															<img src="/Public/static/rzg_images/banks/bank_03.png"
															width="128" height="33" /></td>
														<td><input type="radio" name="bankType" value="ABC" />
															<img src="/Public/static/rzg_images/banks/bank_04.png"
															width="128" height="33" /></td>
														<td><input type="radio" name="bankType" value="BOC" />
															<img src="/Public/static/rzg_images/banks/bank_05.png"
															width="128" height="33" /></td>
													</tr>
													<tr>
														<td><input type="radio" name="bankType" value="SPDB" />
															<img src="/Public/static/rzg_images/banks/bank_06.png"
															width="128" height="33" /></td>
														<td><input type="radio" name="bankType" value="SDB" />
															<img src="/Public/static/rzg_images/banks/bank_07.png"
															width="128" height="33" /></td>
														<td><input type="radio" name="bankType" value="CIB" />
															<img src="/Public/static/rzg_images/banks/bank_08.png"
															width="128" height="33" /></td>
														<td><input type="radio" name="bankType" value="BOBJ" />
															<img src="/Public/static/rzg_images/banks/bank_09.png"
															width="128" height="33" /></td>
														<td><input type="radio" name="bankType" value="CEB" />
															<img src="/Public/static/rzg_images/banks/bank_10.png"
															width="128" height="33" /></td>
													</tr>
													<tr>
														<td><input type="radio" name="bankType" value="BOCOM" />
															<img src="/Public/static/rzg_images/banks/bank_11.png"
															width="128" height="33" /></td>
														<td><input type="radio" name="bankType" value="CMBC" />
															<img src="/Public/static/rzg_images/banks/bank_12.png"
															width="128" height="33" /></td>
														<td><input type="radio" name="bankType" value="CITIC" />
															<img src="/Public/static/rzg_images/banks/bank_13.png"
															width="128" height="33" /></td>
														<td><input type="radio" name="bankType" value="GDB" />
															<img src="/Public/static/rzg_images/banks/bank_14.png"
															width="128" height="33" /></td>
														<td><input type="radio" name="bankType" value="PAB" />
															<img src="/Public/static/rzg_mages/banks/bank_15.png"
															width="128" height="33" /></td>
													</tr>
													<tr>
														<td><input type="radio" name="bankType" value="PSBC" />
															<img src="/Public/static/rzg_images/banks/bank_16.png"
															width="128" height="33" /></td>

														<td><input type="radio" name="bankType" value="SRCB" />
															<img src="/Public/static/rzg_images/banks/bank_18.png"
															width="128" height="33" /></td>
														<td><input type="radio" name="bankType" value="BOS" />
															<img src="/Public/static/rzg_images/banks/bank_19.png"
															width="128" height="33" /></td>
														<td><input type="radio" name="bankType" value="HXBC" />
															<img src="/Public/static/rzg_images/banks/bank_20.png"
															width="128" height="33" /></td>

														<!--         <td><input type="radio"   name="bankType"   value="TCCB" />
                    <img src="images/banks/bank_30.png" width="128" height="33" /></td> -->
														<td></td>


													</tr>
													<tr>
														<td height="10"></td>
														<td height="10"></td>
														<td height="10"></td>
														<td height="10"></td>
														<td height="10"></td>
													</tr>
													<tr>
														<td colspan="2"><input type="radio" name="bankType"
															value="DEFAULT" /> <span
															style="float: left; margin-left: 10px">使用国付宝支付<font
																color="#999999"></font>
														</span></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>

													<!--         <tr>
          <td colspan="2">&nbsp;</td>
          <td><input name="下一步" type="submit" value="下一步" style="border:0px; color:#FFF; font-weight:bold; margin:10px; width:100px; background:#1064AC"/></td>
          <td></td>
          <td></td>
        </tr> -->
												</table>
											</div>
											<div class="border_" id="div_ipay" style="display: none;">
												<table border="0" align="center" cellpadding="0"
													cellspacing="0">
													<tr>
														<td colspan="5"><strong>请选择支付方式：</strong></td>
													</tr>
													<tr valign="middle">
														<td><input type="radio" name="bankType" value="01"
															id="rd_ipay_jieji" /> 人民币借记卡</td>
														<td><input type="radio" name="bankType" value="128" />
															信用卡支付</td>
														<td><input type="radio" name="bankType" value="04" />
															IPS账户支付</td>
														<td><input type="radio" name="bankType" value="16" />
															电话支付</td>
														<td><input type="radio" name="bankType" value="32" />
															手机支付</td>
													</tr>
													<tr>
														<td colspan="5"><input type="radio" name="bankType"
															value="1024" /> 手机语音支付</td>

													</tr>


													<tr>
														<td height="10"></td>
														<td height="10"></td>
														<td height="10"></td>
														<td height="10"></td>
														<td height="10"></td>
													</tr>

													<tr>

														<td></td>
														<td></td>
														<td></td>
													</tr>

													<!--         <tr>
                  <td colspan="2">&nbsp;</td>
                  <td><input name="下一步" type="submit" value="下一步" style="border:0px; color:#FFF; font-weight:bold; margin:10px; width:100px; background:#1064AC"/></td>
                  <td></td>
                  <td></td>
                </tr> -->
												</table>
											</div>
										</td>
									</tr>
									<tr>
										<td style="padding-top: 20px;" colspan="2">
											<div id="xxdiv" style="display: none;">
												<table style="line-height: 30px;">
													<tr align="center" height="30px">
														<td width="30px">&nbsp;</td>
														<td width="40px">银行</td>
														<td width="70px">账号</td>
														<td width="60px">开户人</td>
														<td width="70px">开户行</td>
													</tr>
													<s:iterator value="#request.banksList" var="bank"
														status="count">
														<tr align="center">
															<td><input type="radio" value="${bank.bankname }"
																name="paramMap.banks" style="float: none;"
															<s:if test="#count.count == 1"> checked="checked" </s:if>/></td>
															<td><image src="${bank.bankimage }"
																	style="width:130px;height:60px;" /></td>
															<td>${bank.Account }</td>
															<td>${bank.accountname }</td>
															<td>${bank.accountbank }</td>
														</tr>
													</s:iterator>
													<tr>
														<td align="right">交易编号：</td>
														<td align="center"><input type="text" class="inp140"
															style="margin-top: 2px; width: 180px; float: none;"
															id="rechargeNumber_text" /></td>
														<td colspan="3">填写网上交易流水号或ATM机汇款交易号或其他号码，只供查询用</td>
													</tr>
													<tr>
														<td align="right">线下充值备注：</td>
														<td align="center"><input type="text" class="inp140"
															style="margin-top: 2px; width: 180px; float: none;"
															id="remark_text" /></td>
														<td colspan="3">请注明您的用户名，转账银行卡和转账流水号，以及转账时间</td>
													</tr>
													<tr>
														<td colspan="5" align="center"><a id="saveii"
															class="bcbtn">提交充值</a></td>
													</tr>
												</table>
											</div>
										</td>
									</tr>
								</table>

							</div>
							<div id="btn_submit">
								<input type="button" class="btn" value="提交充值" id="addrecharge"
									style="text-align: center; padding-top: 15px; padding-bottom: 15px; margin: 15px 0 20px 120px;" />
								<!-- <input type="button" class="bcbtn" value="保存并继续"id="addrecharge" /> -->
								<!-- <a href="javascript:void(0);" class="bcbtn" onclick="addRechargeInfo();">保存并继续</a> -->
							</div>
							<p id="p_about" class="tips2" style="border: none;"></p>
							<div class="biaoge" style="margin-top: 25px;">
								<span id="rechargeInfo"></span>
							</div>
						</div>
					</div>
				</div>

			</div>
			</from>
		</div>
	</div>
</div>
</div>
<!--content end--> <script type="text/javascript"
	src="/script/jquery-1.7.1.min.js"></script> <script>
		$('#addrecharge').click(function() {
			var money = $("#money").val();
			if (money < 100) {
				alert("温馨提示:充值金额不能小于100元！");
				return false;
			}
			$("form").submit();
		});
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
			title : '平台问题反馈',
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