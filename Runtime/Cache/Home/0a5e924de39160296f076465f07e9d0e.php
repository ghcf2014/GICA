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
<script type="text/javascript" src="/Public/Home/js/banner.js"></script>
<script type="text/javascript" src="/Public/Home/js/common.js"></script>
<script type="text/javascript" src="/Public/Home/js/xszy_cont.js"></script>
<script type="text/javascript" src="/Public/Home/js/anquanshezhi.js"></script>
<script type="text/javascript" src="/Public/Home/js/biaodexiangqing.js"></script>
<script type="text/javascript" src="/Public/Home/js/guanyuwomen.js"></script>
<script type="text/javascript" src="/Public/Home/js/wodezhanghu.js"></script>
<script type="text/javascript" src="/Public/Home/js/fabujiekuan.js"></script>


</head>
<body>
	<!-- 头部 -->
	﻿<!--header start-->
<div class="header_out">
	<div class="header">
		<ul>
			<li class="weibo"><div></div><a href="">微博</a></li>
			<li class="weixin"><div></div><a href="">微信</a></li>
			<li class="QQ"><div></div><a href="">&nbsp;QQ</a></li>
			<li class="call"><div></div><a href="">&nbsp;热线：400-123-4567</a></li>
			<li class="fankui hot" ><div></div><a href="javascript:void(0);">问题反馈</a></li>
		</ul>
		<?php if(is_login()): ?><p>
			<a href="<?php echo U('Member/Index/index');?>"class="zc"><?php echo get_username();?>[个人中心]</a>&nbsp;|&nbsp;<a href="<?php echo U('Home/User/logout');?>"class="dl">安全退出</a>
		</p>
		<?php else: ?>
		<p>
			<a href="<?php echo U('Home/User/register');?>" class="zc btn">免费注册</a> |&nbsp;<a href="<?php echo U('Home/User/login');?>" class="dl btn">立即登录</a>
	      </p><?php endif; ?>

	</div>
    <a name="returntop" id="returntop"></a>
</div>
<!--header end-->

<!--nav start-->
<div class="nav_out">
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
<!--nav end-->


<!--浮动侧边栏  计算器  客服QQ-->
<!--联系我们-->
<div class="flo_aside">
	<!--浮动框标题-->
    <ul class="flo_l">
    	<li style="padding-top: 30px;">计<br />算<br />器</li>
        <li>联<br />系<br />我<br />们</li>
        <li class="returnTop" style="display:none;height: 130px;"><a href="#returntop" style="color: #fff;">返<br />回<br />顶<br />部<br />top</a></li>
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
            <li><a href="javascript:;">客服QQ</a></li>
            <li>
                <dl>
                    <dt>官方微信</dt>
                    <dd>微信号：ghcf</dd>
                    <dd><img src="../../../../../Public/Home/images/code.png" width="100" height="100" /></dd>    
                </dl>
            </li>
            <li>
                <dl>
                    <dt>官方微博</dt>
                    <dd style="margin-bottom:0;"><a href="javascript:;">点击关注</a></dd>
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
		
})
</script>













	<!-- /头部 -->
	<!-- 主体 -->
	 

<block name="body">
<!--content start-->
	<div class="bdxq_cont_out">
    	<div class="bdxq_cont">
        	<h2>标的详情</h2>
            <dl>
                <dt>
                    <div class="header"></div>
                    <ul>
                        <li>用户名称：<span><?php echo (get_borrow_username($vb["borrow_uid"])); ?></span></li>
                        <li>注册时间：<span><?php echo (date('Y-m-d',$vb["reg_time"])); ?></span></li>
                        <li>最后登录：<span><?php echo (date('Y-m-d',$vb["last_login_time"])); ?></span></li>
                        <li>居住地：<span>深圳市</span></li>
                    </ul>
                    <a href="#">关注此人</a><a href="#">关注此借款</a>
                </dt>
                <dd>
                    <ul><?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vb): $mod = ($i % 2 );++$i;?><li><h3><?php echo ($vb["borrow_name"]); ?></h3></li>
                        <li><h3>（机构担保借款）</h3><?php if($vb["borrow_status"] == 0): ?><a  href="<?php echo U('Finance/invest?id='.$vb['id']);?>" style="background: none;width: 92px;height: 23px;"><img alt="" src="/Public/Home/images/invest.png"></a>
                	    <?php elseif($vb["borrow_status"] == 2): ?>
                	    <img alt="" src="/Public/Home/images/checking.png">
                	     <?php elseif($vb["borrow_status"] == 4): ?>
                	    <img alt="" src="/Public/Home/images/checkref.png">
                	    <?php elseif($vb["borrow_status"] == 6): ?>
                	    <img alt="" src="/Public/Home/images/returning.png">
                	     <?php elseif($vb["borrow_status"] == 7): ?>
                	     <img alt="" src="/Public/Home/images/full.png"><?php endif; ?></li>
                        <li>借款金额：<span style="color:#ef681f;">￥<?php echo ($vb["borrow_money"]); ?>元</span></li>
                        <li>借款目的：<span>短期周转</span></li>
                        <li>借款年利率：<span><?php echo ($vb["borrow_interest_rate"]); ?>%</span>（月利率：<span><?php echo ($vb[borrow_interest_rate]/12); ?>%</span>）</li>
                        <li>借款期限：<span><?php echo ($vb["borrow_duration"]); ?>月</span></li>
                        <li>还差：<span>￥<?php echo ($vb['borrow_money']-$vb['has_borrow']); ?></span></li>
                        <li><strong>投标进度：</strong><span class="out"><span class="width:<?php echo ($vb['has_borrow']/$vb['borrow_money']*100); ?>%;"></span></span><span class="data"><?php echo ($vb['has_borrow']/$vb['borrow_money']*100); ?>%</span></li>
                        <li style="color:#ef681f;">还款方式：<span>一次性还款</span></li>
                        <li>交易类型：<span>线下交易</span></li>
                        <li>最小投标金额：<span>￥<?php echo ($vb["borrow_min"]); ?></span></li>
                        <li>最大投标金额：<span>￥<?php echo ($vb["borrow_max"]); ?></span></li>
                        <li>总投标数：<span style="margin-right:20px;">0</span>   浏览量：<span>0</span></li><?php endforeach; endif; else: echo "" ;endif; ?>                             
                    </ul>
                    <p>投标<span>10000.0</span>元，年利率：<span>15.0%</span>，期限<span>1个月</span>，可获得利息收益：<span>￥150.00元</span></p>
                    <p><input type="button" class="share" style="background:url(../../../../../Public/Home/images/share.png) no-repeat 0 0"><input type="button" class="share" style="background:url(../../../../../Public/Home/images/share.png) no-repeat -22px 0"><input type="button" class="share" style="background:url(../../../../../Public/Home/images/share.png) no-repeat -44px 0"><a href="#" class="more">更多</a></p>
                </dd>
            </dl>
        	
            <!--项目详情-->
            <div class="xmxq_out">
                <!--<div class="xmxq">
                    <h3>项目详情</h3><?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vb): $mod = ($i % 2 );++$i;?><p>借款人用户名：<span><?php echo (get_borrow_username($vb["borrow_uid"])); ?></span></p>
                    <p>借款标类型：<span>其他个人经营性贷款</span></p>
                    <p>借款说明：<span><?php echo ($vb["borrow_info"]); ?></span></p>
                    <p>借款用途：<span><?php echo ($vb["borrow_use"]); ?></span></p>
                    <p>还款来源：<span>营业收入</span></p><?php endforeach; endif; else: echo "" ;endif; ?> 
                </div>-->
                <!--<div class="jyjl">
                    <h4>工合交易信用记录</h4>
                    <p>发布借款笔数：<span>3</span>笔</p>
                    <p>累计逾期次数：<span>0</span></p>
                    <p>成功借入笔数：<span>0</span>笔</p>
                    <p>当前是否有逾期：<span>无</span></p>
                    <p>累计借入总额：<span>￥0.00</span></p>
                    <p>当前逾期待还金额：<span>0.00</span></p>
                </div>-->
                <table border="0" cellspacing="0" cellpadding="0" class="jyjl_table">
                	<tr>
                		<th>工合交易信用记录</th>
                	</tr>
                	<tr>
                		<td>发布借款笔数</td>
                		<td>累计逾期次数</td>
                		<td>成功借入笔数</td>
                		<td>当前是否有逾期</td>
                		<td>累计借入总额</td>
                		<td>当前逾期待还金额</td>
                	</tr>
                	<tr>
                		<td>3</td>
                		<td>0</td>
                		<td>0</td>
                		<td>无</td>
                		<td>0.00</td>
                		<td>0.00</td>
                	</tr>
                </table>
            </div>
        	
            <!--审核-->
            
            <ul class="title">
                <li class="current">审核记录</li>
                <li>还款计划</li>
                <li>信息披露</li>
            </ul>
            <div class="sh">
                <div class="tab">
                    <ul class="tit">
                        <li>审核项目</li>
                        <li>状态</li>
                        <li>通过时间</li>
                    </ul>
                
                    <ul class="con">
                        <li>身份认证</li>
                        <li style="background:url(../../../../../Public/Home/images/pass_Bg.png) no-repeat center center">pass</li>
                        <li>2014-11-22</li>
                    </ul>
                    <ul class="con">
                        <li>工作认证</li>
                        <li style="background:url(../../../../../Public/Home/images/pass_Bg.png) no-repeat center center">pass</li>
                        <li>2014-11-22</li>
                    </ul>
                    <ul class="con">
                        <li>居住地认证</li>
                        <li style="background:url(../../../../../Public/Home/images/pass_Bg.png) no-repeat center center">pass</li>
                        <li>2014-11-22</li>
                    </ul>
                    <ul class="con">
                        <li>信用报告</li>
                        <li style="background:url(../../../../../Public/Home/images/pass_Bg.png) no-repeat center center">pass</li>
                        <li>2014-11-22</li>
                    </ul>
                    <ul class="con">
                        <li>房产</li>
                        <li style="background:url(../../../../../Public/Home/images/pass_Bg.png) no-repeat center center">pass</li>
                        <li>2014-11-22</li>
                    </ul>
                    <ul class="con">
                        <li>购车</li>
                        <li style="background:url(../../../../../Public/Home/images/pass_Bg.png) no-repeat center center">pass</li>
                        <li>2014-11-22</li>
                    </ul>
                    <ul class="con">
                        <li>其它资料</li>
                        <li style="background:url(../../../../../Public/Home/images/pass_Bg.png) no-repeat center center">pass</li>
                        <li>2014-11-22</li>
                    </ul>
                </div>
                <div class="tab" style="display:none">
                <p>此为计划表，还款日期以实际日期为准</p>
                <ul class="tit2">
                    <li>期次</li>
                    <li>还款日期</li>
                    <li>还款金额</li>
                    <li>应还本金</li>
                    <li>应还利息</li>
                </ul>
                <ul class="con2">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            </div>
            
                
            
            
            
            <!--标的详情-->
            <div class="bdxq">
            	<h4>标的详情</h4>
                <p>借款人是四川南充人，来深十多年，已婚并育有两个孩子，名下还有多套物业，资金实力强。<br/>客户做实体经营起家，经营电子显示屏多年，上下游客户出名，还款能力强。其抵押物现值90万元。</p>
            </div>
            
            <!--留言板-->
            <div class="message">
            	<h4>留言板</h4>
                <p>字数1~120之间</p>
                <textarea class="txta"></textarea>
                <div class="submit">
                	<a class="sub" href="#">提交</a>
                    <p>4489</p>
                    <input type="text" class="txt">
                    <p>验证码</p>
                </div>
            </div>
            
            <!--投资记录-->
            <div class="tzjl">
                <h4>投资记录</h4>
                <ul class="tit">
                	<li>投资人</li>
                    <li>投资利率</li>
                    <li>投资金额</li>
                    <li>投资时间</li>
                    <li>投资方式</li>
                    <li>状态</li>
                </ul>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vb): $mod = ($i % 2 );++$i;?><ul class="con">
                	<li><?php echo (hidestr(get_investor_username($vb["investor_uid"]),0,3)); ?></li>
                    <li><?php echo ($vb['invest_fee']*1); ?>%/年</li>
                    <li><?php echo ($vb["investor_capital"]); ?></li>
                    <li><?php echo (date('Y-m-d',$vb["add_time"])); ?></li>
                    <li>手动投标</li>
                    <li>已中标</li>
                </ul><?php endforeach; endif; else: echo "" ;endif; ?>

                <ul class="tzjl_fy">
                    没有更多数据了
                	<!-- <li><</li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>></li> -->
                </ul>
            </div>
        </div>
    </div>
	<!--content end-->

		<!-- 引用底部公共部分 -->
		<jsp:include page="/include/footer.jsp"></jsp:include>

		<script type="text/javascript" src="script/jquery.shove-1.0.js">
	
</script>
		<script type="text/javascript" src="css/popom.js">
	
</script>
		<script type="text/javascript"
			src="script/jbox/jquery.jBox-2.3.min.js">
	
</script>
		<script type="text/javascript" src="script/jbox/jquery.jBox-zh-CN.js">
	
</script>
		<script>
	var param = {};
	function initListInfo(param) {
		param['paramMap.id'] = '${borrowDetailMap.id}';
		$.shovePost('borrowmessage.htm', param, function(data) {
			$('#msg').html(data);
		});
	}
	initListInfo(param);
	$('#sendmail').click(function() {
		var id = '${borrowUserMap.userId}';
		var username = '${borrowUserMap.username}';
		var url = "mailInit.htm?id=" + id + "&username=" + username;
		var uname = '${user.userName}';
		if (username == uname) {
			alert("您不能给自己发送站内信");
			return false;
		}
		$.shovePost('mailInit.htm', param, function(data) {
			$.jBox("iframe:" + url, {
				title : "发送站内信",
				width : 500,
				height : 400,
				buttons : {}
			});
		});
	});
	$('#reportuser').click(function() {
		var id = '${borrowUserMap.userId}';
		var username = '${borrowUserMap.username}';
		var url = "reportInit.htm?id=" + id + "&username=" + username;
		var uname = '${user.userName}';
		if (username == uname) {
			alert("您不能举报自己");
			return false;
		}
		$.shovePost('reportInit.htm', param, function(data) {
			$.jBox("iframe:" + url, {
				title : "举报此人",
				width : 500,
				height : 400,
				buttons : {}
			});
		});
	});
	$('#audit').click(function() {
		var id = $('#idStr').val();
		$(this).addClass('on');
		$('#repay').removeClass('on');
		$('#collection').removeClass('on');
		$('#info').removeClass('on');
		param['paramMap.id'] = id;
		$.shovePost('financeAudit.htm', param, function(data) {
			$('#contentList').html(data);
		});
	});
	$('#repay').click(function() {
		var id = $('#idStr').val();
		$(this).addClass('on');
		$('#audit').removeClass('on');
		$('#collection').removeClass('on');
		$('#info').removeClass('on');
		param['paramMap.id'] = id;
		$.shovePost('financeRepay.htm', param, function(data) {
			$('#contentList').html(data);
		});

	});

	$('#info').click(function() {
		var id = $('#idStr').val();
		$(this).addClass('on');
		$('#audit').removeClass('on');
		$('#repay').removeClass('on');
		$('#collection').removeClass('on');
		param['paramMap.id'] = id;
			$.shovePost('showImg.htm', param, function(data) {
				$('#contentList').html(data);
			});

		});
	$('#collection').click(function() {
		var id = $('#idStr').val();
		$(this).addClass('on');
		$('#audit').removeClass('on');
		$('#repay').removeClass('on');
		$('#info').removeClass('on');
		param['paramMap.id'] = id;
		$.shovePost('financeCollection.htm', param, function(data) {
			$('#contentList').html(data);
		});

	});
</script>

		<script>
	$('#focusonUser').click(function() {
		var username = '${borrowUserMap.username}';
		var uname = '${user.userName}';
		if (username == uname) {
			alert("您不能关注自己");
			return false;
		}
		param['paramMap.id'] = '${borrowUserMap.userId}';
		$.shovePost('focusonUser.htm', param, function(data) {
			var callBack = data.msg;
			alert(callBack);
		});
	});
</script>

		<script>
	$('#focusonBorrow').click(function() {
		var username = '${borrowUserMap.username}';
		var uname = '${user.userName}';
		if (username == uname) {
			//alert("您不能关注自己发布的借款");
			return false;
		}
		param['paramMap.id'] = '${borrowDetailMap.id}';
		$.shovePost('focusonBorrow.htm', param, function(data) {
			var callBack = data.msg;
			alert(callBack);
		});
	});
</script>

		<script type="text/javascript">
	function showImg(typeId, userId, ids) {
		var user = $("ckImg");
		if (user == null) {
			window.location.href = "login.htm";
			return;
		}
		var url = "showImg.htm?typeId=" + typeId + "&userId=" + userId;
		$.jBox("iframe:" + url, {
			title : "查看认证图片(点击图片放大)",
			width : 600,
			height : 428,
			buttons : {}
		});
	}

	function close() {
		ClosePop();
	}
</script>

		<script>
	//样式选中
	$("#licai_hover").attr('class', 'nav_first');
	//	var param = {};
	$('#invest').click(function() {
		var step = '${session.user.authStep}';
		var username = '${borrowUserMap.username}';
		var uname = '${user.userName}';
		var bid = $('#bid').val();
		if (username == uname) {
			alert("无效操作,不能投自己发布的标");
			return false;
		}
		param['id'] = '${borrowDetailMap.id}';
		if (step < 5) {
			window.location.href = 'financeInvestInit.htm?id=' + bid;
			return false;
		}
		$.shovePost('financeInvestInit.htm', param, function(data) {
			var callBack = data.msg;
			if (callBack != undefined) {
				alert(callBack);
			} else {
				window.location.href = 'financeInvestInit.htm?id=' + bid;
			}
		});
	});

	//$('#focusonBorrow').click(function() {
	//	var username = '${borrowUserMap.username}';
	//	var uname = '${user.userName}';
	//	if (username == uname) {
	//alert("您不能关注自己发布的借款");
	//	return false;
	//}
	//param['paramMap.id'] = '${borrowDetailMap.id}';
	//$.shovePost('focusonBorrow.htm', param, function(data) {
	//	var callBack = data.msg;
	//	alert(callBack);
	//});
	//});

	////$('#focusonUser').click(function() {
	//var username = '${borrowUserMap.username}';
	//var uname = '${user.userName}';
	//if (username == uname) {
	//	alert("您不能关注自己");
	//	return false;
	//}
	//param['paramMap.id'] = '${borrowUserMap.userId}';
	//$.shovePost('focusonUser.htm', param, function(data) {
	//	var callBack = data.msg;
	//	alert(callBack);
	//});
	//});
</script>

		<script type="text/javascript">
	var SysSecond;
	var InterValObj;
	$(document).ready(function() {
		SysSecond = parseInt($("#remainSeconds").html()); //这里获取倒计时的起始时间 
			InterValObj = window.setInterval(SetRemainTime, 1000); //间隔函数，1秒执行 
		});

	//将时间减去1秒，计算天、时、分、秒 
	function SetRemainTime() {
		if (SysSecond > 0) {
			SysSecond = SysSecond - 1;
			var second = Math.floor(SysSecond % 60); // 计算秒     
			var minite = Math.floor((SysSecond / 60) % 60); //计算分 
			var hour = Math.floor((SysSecond / 3600) % 24); //计算小时 
			var day = Math.floor((SysSecond / 3600) / 24); //计算天 
			var times = day + "天" + hour + "小时" + minite + "分" + second + "秒";
			$("#remainTimeOne").html(times);
			$("#remainTimeTwo").html(times);
		} else 
	}
</script>

	<!-- /主体 -->
	<!-- 底部 -->
	  
    <!--footer start-->
    <div class="footer">
  		<div class="footer_in">
            <ul>
                <li><a href="<?php echo U('Newhelp/aboutus');?>">关于我们</a></li>
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
  <script type="text/javascript">
  $('.shigong').on('click', function(){
     layer.msg('前方页面正在施工ing...', 2, 0);
     area: ['310px', '130px']
     });

  $('.tipshang').on('click', function(){
    layer.tips('此处正在施工ing...', this, {
        style: ['background-color:#0FA6D8; color:#fff', '#0FA6D8'],
        maxWidth:150
    });
    });
  $('.tipxia').on('click', function(){
      layer.tips('非常感谢大家对工合财富的支持，正因为你们，才让稳步的我们有了大大的关注。活动策划中，2015加油！', this, {
        guide: 2,
        maxWidth:150,
        time: 4
    });
    });
$('.fankui').on('click', function(){
  $.layer({
    type: 2,
    shade: [0],
    fix: false,
    title: '平台技术问题反馈',
    maxmin: true,
    iframe: {src :'Home/Index/fankui'},
    area: ['600px' , '440px'],
    shift: 'top'
  })
});

  </script>
	<!-- /底部 -->
</body>
</html>
<!-- 网站结构 -->