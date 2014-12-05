<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	   <title>工合基金_首页</title>
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
    	<!-- one样式 -->
    
    <!--<script type="text/javascript" src="/Public/static/bootstrap/js/bootstrap.min.js"></script>-->
    <!-- <link href="/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet"> -->
    <!-- <link href="/Public/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> -->
    <link href="/Public/static/bootstrap/css/docs.css" rel="stylesheet">
    <!-- <link href="/Public/static/bootstrap/css/onethink.css" rel="stylesheet"> -->

	<script type="text/javascript" src="/Public/static/rzg_js/i_banner1.js"></script>
	<script type="text/javascript" src="/Public/static/rzg_js/banner.js"></script>
	<script type="text/javascript" src="/Public/static/rzg_js/common.js"></script>
	<script type="text/javascript" src="/Public/static/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/Public/static/jquery.form.js"></script>
	<!-- 引入弹窗 -->
	<!--<script type="text/javascript" src="/Public/static/ymPrompt-4.0-B-20090302/ymPrompt.js"></script>-->
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/module.css">
	<link rel="stylesheet" href="/Public/static/rzg_css/style.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/base.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/css.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/cjwt.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/css.css"  type="text/css" />
	<!-- 引入弹窗样式 -->
    <!--<link rel="stylesheet" type="text/css" href="/Public/static/ymPrompt-4.0-B-20090302/skin/qq/ymPrompt.css" />-->
    <!--<link rel="stylesheet" href="/Public/static/kindeditor/themes/default/default.css" />-->
    <!--<script charset="utf-8" src="/Public/static/kindeditor/kindeditor-min.js"></script>-->
    <!--<script charset="utf-8" src="/Public/static/kindeditor/lang/zh_CN.js"></script>-->
    <!--<script charset="utf-8" src="/Public/static/kindeditor/jquery-1.9.1.min.js"></script>-->
	<!-- 引入layer -->
	<script type="text/javascript" src="/Public/static/layer/layer.min.js"></script>
	<script type="text/javascript" src="/Public/static/layer/extend/layer.ext.js"></script>
</head>
<body>
	<!-- 头部 -->
	<!--header-->
<div class="topline_box1">
	<div class="top_line">
		<div class="top_phone">
			4888-888-888
		</div>
			<div class="topline_right">
				<ul>
					<li>
						<a href="javascript:void(0);" class="xsrw"></a>
					</li>
					<li>
						<a href="javascript:void(0);" class=" tipxia">策划中的活动</a>
					</li>
					<!--<li>
						<a href="newguide.htm" class="xsrw">新手任务</a>
					</li>-->
					<li id="gfq">
						官方群
						<div id="rzggf" class="list" style="display: none;">
							<a>官A群:888888888</a>
							<a>官B群:666666666</a>
						</div>
					</li>

					<?php if(is_login()): ?><li><a href="<?php echo U('Member/Index/index');?>"><?php echo get_username();?></a></li>
                                <li><a href="<?php echo U('Home/User/profile');?>">修改密码</a></li>
                                <li><a href="<?php echo U('Home/User/logout');?>">退出</a></li>
					<?php else: ?>

					<li>
						<a href="<?php echo U('Home/User/register');?>" class="mfzc">免费注册</a>
					</li>
					<li>
						<a href="<?php echo U('Home/User/login');?>" class="ljdl"> 立即登录</a>
					</li><?php endif; ?>
				</ul>
			</div>
	</div>
</div>
<div class="header">
	<div class="logo">
		<a href=""><img src="/Public/static/rzg_images/img/logo.gif"/>
		</a>
	</div>
	<div class="nav">
	    <?php $__NAV__ = M('Channel')->field(true)->where("status=1")->order("sort")->select(); if(is_array($__NAV__)): $i = 0; $__LIST__ = $__NAV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if(($nav["pid"]) == "0"): ?><a href="<?php echo (get_nav_url($nav["url"])); ?>" target="<?php if(($nav["target"]) == "1"): ?>_blank<?php else: ?>_self<?php endif; ?>"><?php echo ($nav["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>

<!-- header end-->、
<script>
	//alert("dafdadfafasfasfa");
	//$(function() {
	//alert("123464677");

	//  alert("1234567");
	//  $("#gfq").mouseover(function(){
	//  alert("123456789flajfalfj");
	//	 $("#rzggf").show();
	// });
	//  $("#gfq").mouseout(function(){
	//  alert("123456789flajfalfj");
	// $("#rzggf").hide();
	// });
    //Q群号滑动效果
	$("#gfq").hover(function() {
		$("#rzggf").slideToggle();
	});
	//});
</script>
	<!-- /头部 -->
	
	<!-- 主体 -->
	   <block
	name="body"> <!--header--> <jsp:include
	page="/include/topref.jsp"></jsp:include> <!-- header end--> <!--banner-->
<!-- banner end--> <!--收益计算器-->
<div class="main_kan_new" style="min-height: 0;">
	<div id="wrapper">
		<div class="title-sub">
			<h2 id="htop">收益计算器</h2>
			<b class="line"></b>
		</div>
		<div class="content_post">
			<div class="bid-opt">
				<ul class="items">
					<li class="txt">投入金额：</li>
					<li><input type="text" class="input" id="borrowSum" /> <label>
							元 </label> <span id="" class="tip error" style="display: none;"><i
							class="icons reg-error"></i><font color="red">该数值须为不小于200元的整数</font></span></li>
				</ul>
				<div class="clearfix" style="display: block">
					<ul class="items">
						<li class="txt">年化利率：</li>
						<li><input id="yearRate" type="text" class="input" /> <label>
								% </label> <span class="tip error"></span></li>
					</ul>
					<ul class="items">
						<li class="txt">投入时长：</li>
						<li><input id="borrowTime" type="text" class="input" /> <label
							id="timeType"> 月 </label> <span class="tip error"
							style="display: none;">增加您的资金利用率</span></li>
					</ul>
					<ul class="items">
						<li class="txt">还款方式：</li>
						<li><select id="repayWay" name="select">
								<option selected="selected" value="0">等额本息</option>
								<option value="1">先息后本</option>
								<option value="2">一次性还款</option>
						</select> <span class="tip" style="display: none;">这部分金额不会加入自动投标</span></li>
					</ul>
				</div>
				<div style="margin-left: 120px;">
					<strong><span style="color: red; float: none;"
						class="formtips" id="show_error"></span> </strong>
				</div>
				<div class="btn-submit">
					<a href="javascript:void(0);" id="calcultor" class="gbtn">计算</a> <a
						href="" class="gbtn gbtn-gray">重置</a> <!-- <input id="manual"
						class="helpId" type="checkbox" value="" name="cb_ids"
						onclick="changeStatus();" /> &nbsp;天标 -->
				</div>
			</div>
			<div class="jsq_right">
				<div class="jsqyb_con1" id="calcResult">
					<h2>计算结果</h2>
					<div id="totalResult">
						<p class="gjjg">
							每月收益： <strong id="aa" style="color: #166cb2;">0.00元</strong> 月利率：
							<strong id="bb" style="color: #166cb2;">0%</strong><br /> 本息总额：
							<strong id="cc" style="color: #166cb2;">0元</strong>
						</p>
						<p class="gjjg">
							<table border="1" style="display: none; color: blue"
							id="tabresult"><tr>
								<td align="center">期数</td>
								<td align="center">月收本息</td>
								<td align="center">月收本金</td>
								<td align="center">月收利息</td>
								<td align="center">本息余额</td>
							</tr>
							<tr>
								<td align="center" id="periods"></td>
								<td align="center" id="principal"></td>
								<td align="center" id="corpus"></td>
								<td align="center" id="interest"></td>
								<td align="center" id="remainder"></td>
							</tr>
						</table>
						</p>
					</div>
					<div id="result" style="display: none">
						<p class="gjjg">
							收款本息总额： <strong id="dd">0元</strong>
						</p>
					</div>
					<br /> <span id="showPayTable"></span>
				</div>
				<div class="jsqyb_con1" style="margin-top: 20px;">
					<h2>收益计算器简介</h2>
					<p>
						收益计算器用于计算您在工合财富投资将会获得的收益，理财更加透明高效，固定日还款项目由于计息方式略有不同，具体收益请参见投资后的统计。
					</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<script>
	
</script> <!--bottom--> <!-- bottom end--> <script type="text/javascript">
	$("#calcultor")
			.click(
					function() {
						//alert("123456");
						var repayWay = $("#repayWay").val();
						var investMoney = $("#borrowSum").val();
						if (!isNaN(investMoney)) { //判断是否是数字
							if (investMoney == "" || investMoney < 200) {
								$("#borrowSum").next().next().show();
								return false;
							}
						} else {
							$("#borrowSum")
									.next()
									.next()
									.show()
									.html(
											"<i class='icons reg-error'></i><font color='red'>请输入正确的数字!</font></span></li>");
							return false;
						}

						var yearRate = $("#yearRate").val();
						if (!isNaN(yearRate)) { //判断是否是数字
							if (yearRate == "") {
								$("#yearRate").next().next().show().html(
										"<font color='red'>年化利率不能为空！</font>");
								return false;
							}
						} else {
							$("#yearRate").next().next().show().html(
									"<font color='red'>请输入正确的年化利率!</font>");
							return false;
						}

						var borrowTime = $("#borrowTime").val();
						var ex = /^\d+$/;
						if (!isNaN(borrowTime) && ex.test(borrowTime)) { //判断是否是数字
							if (yearRate == "") {
								$("#borrowTime")
										.next()
										.next()
										.show()
										.html(
												"<font color='red'>投入时常不能为空并且为整数！</font>");
								return false;
							}
						} else {
							$("#borrowTime").next().next().show().html(
									"<font color='red'>请输入正常的投入时常!</font>");
							return false;
						}

						var totalMomey = "";//总金额全局变量
						var rate = yearRate / 100;//先转换为百分数
						var monthrate = yearRate / 12;//转换为月利率
						//等额本息计算方法
						if (repayWay == 0) {
							totalMoney = (investMoney * (rate / 12) * Math.pow(
									(1 + (rate / 12)), borrowTime))
									/ (Math.pow(1 + (rate / 12), borrowTime) - 1);
							$("#aa").html(
									"<font color='red'>" + totalMoney
											+ "元</font>");
							$("#bb").html(
									"<font color='red'>" + monthrate
											+ "%</font>");
							$("#cc")
									.html(
											"<font color='red'>"
													+ (parseFloat(totalMoney) * parseFloat(borrowTime))
													+ "元</font>");
							//等额本息列表清单循环代码结构
						}

						//先息后本的方法
						if (repayWay == 1) {
							totalMoney = investMoney * (rate / 12);
							$("#aa").html(
									"<font color='red'>" + totalMoney
											+ "元</font>");
							$("#bb").html(
									"<font color='red'>" + monthrate
											+ "%</font>");
							$("#cc")
									.html(
											"<font color='red'>"
													+ ((parseFloat(totalMoney) * parseFloat(borrowTime)) + parseFloat(investMoney))
													+ "元</font>");
							//先息后本列表清单循环结构代码
						}

						//一次性还款的计算方法
						if (repayWay == 2) {
							totalMoney = investMoney
									* Math.pow(((1 + (rate / 12))), borrowTime);
							$("#aa").html(
									"<font color='red'>" + totalMoney
											+ "元</font>");
							$("#bb").html(
									"<font color='red'>" + monthrate
											+ "%</font>");
							$("#cc").html(
									"<font color='red'>"
											+ (parseFloat(totalMoney))
											+ "元</font>");
							$("#tabresult").show();
							$("#periods").html(borrowTime);
							$("#principal").html(totalMoney);
							$("#corpus").html(investMoney);
							$("#interest").html(monthrate);
							$("#remainder").html('0.00');
						}
					});
</script> 
	<!-- /主体 -->

	<!-- 底部 -->
	<!--底部快捷导航 开始-->
<div class="bottom_box bottom_box1">
	<div class="bottom">
		<div class="bottom_con1">
			<div class="bottom_left">
				<div class="db_menu">
					<!-- <a href="<?php echo U('Member/index/test');?>" class="tipshang">关于我们</a> -->
					<a href="javascript:void(0);" class="tipshang">关于我们</a>
					<a href="javascript:void(0);" class="tipshang">法律法规</a>
					<a href="javascript:void(0);" class="tipshang">新手指引</a>
					<a href="javascript:void(0);" class="tipshang">诚聘英才</a>
					<a href="javascript:void(0);" class="tipshang">联系我们</a>
					<a href="javascript:void(0);" class="tipshang">问答</a>
					<a href="javascript:void(0);" class="tipshang">网站地图</a>
				</div>
				<div class="db_gzwm">
					<p class="gzwm">
						关注我们
					</p>
					<a class="xlwb tipshang" href="javascript:void(0);">新浪微博</a>
					<a class="gfwx" href="javascript:void(0);" id="id2">关注微信</a>
					<a class="scbz" href="javascript:void(0);"onclick=AddFavorite('工合财富', location.href);>收藏本站</a>
				</div>
			</div>
			<div class="bottom_right">
				<p>
					客服热线\工作时间 9:30-17.30
				</p>
				<div class="kfdh">
					4000-888-888
				</div>
				
			</div>
		</div>
		<!-- 友情链接 -->
		<div class="bottom_con3">
        <h4>友情链接</h4>
        <ul>
                <li><a target="_blank" href="http://www.gopay.com.cn/" >国付宝</a>   </li>
				<li><a target="_blank" href="http://www.p2peye.com">网贷天眼</a></li>
				<li><a target="_blank" href="http://www.wangdaizhijia.com/">网贷之家</a> </li>
				<li><a target="_blank" href="http://www.shzfsoft.com/">网贷之星</a> </li>
				<li><a target="_blank" href="http://www.wangdaicaifu.com/">网贷财富</a> </li>
				<li><a target="_blank" href="http://www.wdlm.cn/">网贷联盟</a> </li>
				<li><a target="_blank" href="http://www.erongtu.com/">融途网</a> </li>
				<li><a target="_blank" href="http://www.p2pxing.com/">网贷之星</a> </li>
				<li><a target="_blank" href="http://www.p2pzhinan.com/">P2P网贷指南</a> </li>
				<li><a target="_blank" href="http://www.wangdai3.com/">网贷第三方</a> </li>
          </ul>
        </div>
		
		
		<div class="bottom_con2">
		Copyright © 2014 工合财富（www.ghjj.cn）版权所有 广东省工合股权基金有限公司 | 
			<a href="http://www.miitbeian.gov.cn">备案号：粤ICP备88888888号</a> &nbsp;
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

 	</script>



			<script type="text/javascript">
	var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://"
			: " http://");
	document
			.write(unescape("%3Cscript src='"
					+ _bdhmProtocol
					+ "hm.baidu.com/h.js%3F0d153ad81f03058ce80c0c3c697b77b5' type='text/javascript'%3E%3C/script%3E"));
</script>

			<script type="text/javascript"
				src="http://tajs.qq.com/stats?sId=34570481" charset="UTF-8"></script>

		</div>

		<div class="bottom_aqpic">
			<script id="ebsgovicon"
				src="https://cert.ebs.gov.cn/govicon.js?id=d49f3614-19ad-47df-a3bf-4b8bf872e48b&width=52&height=70&type=1"
				type="text/javascript" charset="utf-8"></script>
			 &nbsp;
			<a href="http://webscan.360.cn/index/checkwebsite/url/www.ubanks.cn"><img
					border="0" style="width: 100px; height: 50px;"
					src="http://img.webscan.360.cn/status/pai/hash/8fd610857e7a8668e59488f645830bca" />
			</a> &nbsp;
			<a href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1305828394"><img
					alt="" src="/Public/static/rzg_images/wzzx.jpg" style="width: 100px; height: 50px;">
			</a>&nbsp;
			<a id='___szfw_logo___'
				href='https://search.szfw.org/cert/l/CX20140729008585008681'
				target='_blank'><img style="width: 100px; height: 50px;"
					src='https://search.szfw.org/cert.png?l=CX20140729008585008681'>
				&nbsp; <a key="53f6a580efbfb04a7b49c161" logo_size="124x47"
				logo_type="realname" href="http://www.anquan.org"><script
						src="http://static.anquan.org/static/outer/js/aq_auth.js"></script>
			</a>
		</div>

	</div>
</div>

<!--底部footer 结束-->
<!-- <script type="text/javascript" src="script/jqueryV172.js"></script> -->
<!-- <script type="text/javascript" src="script/xl.js"></script> -->
<script type='text/javascript'>
	(function() {
		document.getElementById('___szfw_logo___').oncontextmenu = function() {
			return false;
		}
	})();
</script>
<script type="text/javascript">
	//收藏本站
	function AddFavorite(title, url) {
		try {
			window.external.addFavorite(url, title);
		} catch (e) {
			try {
				window.sidebar.addPanel(title, url, "");
			} catch (e) {
				alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
			}
		}
	}
</script>
<!-- <script type="text/javascript" src="/Public/static/rzg_js/jquery.js"></script> -->
 <script type="text/javascript" src="/Public/static/rzg_js/banner.js"></script>

<div style="display: none" id=testID>
	<P>
		<img src="/Public/static/rzg_images/img/weixin.jpg" width="250" height="250" />
	</P>
	打开微信，点击底部的″发现″，使用″扫一扫″即可关注融资谷官方微信.
</div>
<script type=text/javascript>
	var environment = {
		userVo : '',
		role : '',
		userId : '',
		basePath : '',
		userCash : ''
	};
</script>
<script type="text/javascript">
	$("#id2").click(
			function() {
				tipsWindown("关注融资谷官方微信", "id:testID", "250", "300", "true", "",
						"true", "id");
			});

	// 关注微信
	var showWindown = true;
	var templateSrc = "http://leotheme.cn/wp-content/themes/Dreamy";
	function tipsWindown(title, content, width, height, drag, time, showbg,
			cssName) {
		$("#windown-box").remove();
		var width = width >= 950 ? this.width = 950 : this.width = width;
		var height = height >= 527 ? this.height = 527 : this.height = height;
		if (showWindown == true) {
			var simpleWindown_html = new String;
			simpleWindown_html = "<div id=\"windownbg\" style=\"height:"
					+ $(document).height()
					+ "px;;filter:alpha(opacity=0);opacity:0;z-index: 999901\"><iframe style=\"width:100%;height:100%;border:none;filter:alpha(opacity=0);opacity:0;\">__tag_149$151_</div>";
			simpleWindown_html += "__tag_150$25_";
			simpleWindown_html += "__tag_151$25_<h2>__tag_151$55_<span id=\"windown-close\">鍏抽棴__tag_151$90_</div>";
			simpleWindown_html += "__tag_152$25_<div id=\"windown-content\">__tag_152$88_</div>";
			simpleWindown_html += "__tag_153$25_";
			$("body").append(simpleWindown_html);
			show = false;
		}
		contentType = content.substring(0, content.indexOf(":"));
		content = content.substring(content.indexOf(":") + 1, content.length);
		switch (contentType) {
		case "text":
			$("#windown-content").html(content);
			break;
		case "id":
			$("#windown-content").html($("#" + content + "").html());
			break;
		case "img":
			$("#windown-content").ajaxStart(function() {
				$(this).html("__tag_172$12_");
			});
			$.ajax( {
				error : function() {
					$("#windown-content").html("__tag_178$32_</p>");
				},
				success : function(html) {
					$("#windown-content").html("__tag_182$7_");
				}
			});
			break;
		case "url":
			var content_array = content.split("?");
			$("#windown-content").ajaxStart(function() {
				$(this).html("__tag_193$12_");
			});
			$.ajax( {
				type : content_array[0],
				url : content_array[1],
				data : content_array[2],
				error : function() {
					$("#windown-content").html("__tag_202$32_</p>");
				},
				success : function(html) {
					$("#windown-content").html(html);
				}
			});
			break;
		case "iframe":
			$("#windown-content").ajaxStart(function() {
				$(this).html("__tag_215$12_");
			});
			$
					.ajax( {
						error : function() {
							$("#windown-content").html("__tag_223$9_</p>");
						},
						success : function(html) {
							$("#windown-content")
									.html(
											"<iframe src='/Public/static/rzg_js//"
													+ content
													+ " width=\"100%\" height=\""
													+ parseInt(height)
													+ "px"
													+ "\" scrolling=\"auto\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">__tag_233$92_");
						}
					});
		}
		$("#windown-title h2").html(title);
		if (showbg == "true") {
			$("#windownbg").show();
		} else {
			$("#windownbg").remove();
		}
		;
		$("#windownbg").animate( {
			opacity : "0.5"
		}, "normal");
		$("#windown-box").show();
		if (height >= 527) {
			$("#windown-title").css( {
				width : (parseInt(width) + 22) + "px"
			});
			$("#windown-content").css( {
				width : (parseInt(width) + 17) + "px",
				height : height + "px"
			});
		} else {

			$("#windown-title").css( {
				width : (parseInt(width) + 10) + "px"
			});
			$("#windown-content").css( {
				width : width + "px",
				height : height + "px"
			});
		}

		var cw, ch, est = document.documentElement.scrollTop;
		if (self.innerHeight) {
			cw = self.innerWidth;
			ch = self.innerHeight;
		} else if (document.documentElement
				&& document.documentElement.clientHeight) {
			cw = document.documentElement.clientWidth;
			ch = document.documentElement.clientHeight;
		} else if (document.body) {
			cw = document.body.clientWidth;
			ch = document.body.clientHeight;
		}
		var isIE6 = false;
		if (isIE6) {
			$("#windown-box").css( {
				left : "50%",
				top : (parseInt((ch) / 2) + est) + "px",
				marginTop : -((parseInt(height) + 53) / 2) + "px",
				marginLeft : -((parseInt(width) + 32) / 2) + "px",
				zIndex : "999999"
			});
		} else {
			$("#windown-box").css( {
				left : "50%",
				top : "50%",
				marginTop : -((parseInt(height) + 53) / 2) + "px",
				marginLeft : -((parseInt(width) + 32) / 2) + "px",
				zIndex : "999999"
			});
		}
		;
		var Drag_ID = document.getElementById("windown-box"), DragHead = document
				.getElementById("windown-title");

		var moveX = 0, moveY = 0, moveTop, moveLeft = 0, moveable = false;
		if (isIE6) {
			moveTop = est;
		} else {
			moveTop = 0;
		}
		var sw = Drag_ID.scrollWidth, sh = Drag_ID.scrollHeight;
		DragHead.onmouseover = function(e) {
			if (drag == "true") {
				DragHead.style.cursor = "move";
			} else {
				DragHead.style.cursor = "default";
			}
		};
		DragHead.onmousedown = function(e) {
			$("#windown-box").css( {
				opacity : "0.5"
			}, "normal");
			if (drag == "true") {
				moveable = true;
			} else {
				moveable = false;
			}
			e = window.event ? window.event : e;
			var ol = Drag_ID.offsetLeft, ot = Drag_ID.offsetTop - moveTop;
			moveX = e.clientX - ol;
			moveY = e.clientY - ot;
			document.onmousemove = function(e) {
				if (moveable) {

					e = window.event ? window.event : e;
					var x = e.clientX - moveX;
					var y = e.clientY - moveY;
					if (x > 0 && (x + sw < cw) && y > 0 && (y + sh < ch)) {
						Drag_ID.style.left = x + "px";
						Drag_ID.style.top = parseInt(y + moveTop) + "px";
						Drag_ID.style.margin = "auto";
					}
				}
			}
			document.onmouseup = function() {
				moveable = false;
				$("#windown-box").css( {
					opacity : "1"
				}, "normal");
			};
			Drag_ID.onselectstart = function(e) {
				return false;
			}
			$("#windown-content").attr("class", "windown-" + cssName);
			var closeWindown = function() {
				$("#windownbg").remove();
				$("#windown-box").fadeOut("slow", function() {
					$(this).remove();
				});
			}
			if (time == "" || typeof (time) == "undefined") {
				$("#windown-close").click(function() {
					$("#windownbg").remove();
					$("#windown-box").fadeOut("slow", function() {
						$(this).remove();
					});
				});
			} else {
				setTimeout(closeWindown, time);
			}
		}
	}
</script>-->
<!-- WPA Button Begin -->
<!-- <script charset="utf-8" type="text/javascript"
 	src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODAyNjA2MV8xNTgyNTlfNDAwMDkxMTgwNl8"></script>-->
<!-- WPA Button End -->
<!-- 弹窗脚本 -->
<script type="text/javascript">
		function cn(){
			ymPrompt.setDefaultCfg({title:'标题', message:"内容",okTxt:' 确 定 ',cancelTxt:' 取 消 ',closeTxt:'关闭',minTxt:'最小化',maxTxt:'最大化'});
		}
		function en(){
			ymPrompt.setDefaultCfg({title:'Default Title', message:"Default Message",okTxt:' OK ',cancelTxt:' Cancel ',closeTxt:'Close',minTxt:'Minimize',maxTxt:'Maximize'});
		}
		
		function slideHd(){
			ymPrompt.alert('看到效果了吗？');
		}

		function getInput(tp){
			if(tp!='ok') return ymPrompt.close();
			var v=$('myInput').value;
			if(v=='')
				alert('请输入您的名字！')
			else{
				alert('你输入的值为：'+v)
				ymPrompt.close();
			}
		}
		function getButtons(){
			var btnObjs=ymPrompt.getButtons(),arr=[];
			for(var i=0;i<btnObjs.length;i++)
				arr.push('按钮'+(i+1)+"内容:"+document.createElement("DIV").appendChild(btnObjs[i].cloneNode(true)).parentNode.innerHTML);
			alert(arr.join('\n\n'));
			ymPrompt.close();
		}
		function autoClose(){
			alert('三秒钟自动关闭');
			setTimeout(function(){ymPrompt.close()},3000)
		}
		function handlerIframe(){
			alert(ymPrompt.getPage().contentWindow.document.body.innerHTML);
			ymPrompt.close();
		}
		function noTitlebar(){
			alert('提示：除了可以通过增加按钮来控制，还可以在子页面中调用该页面的ymPrompt.close方法来关闭');
		}
		var Alert=ymPrompt.alert;
		function cancelFn(){
			Alert("点击了'取消'按钮");
		}
		function okFn(){
			Alert("点击了'确定'按钮");
		}
		function closeFn(){
			Alert("点击了'关闭'按钮");
		}
		function handler(tp){
			if(tp=='ok'){
				okFn();
			}
			if(tp=='cancel'){
				cancelFn();
			}
			if(tp=='close'){
				closeFn()
			}
		}
		function testHd(tp){
			Alert('你点击的按钮的标志为：'+tp);
		}
		function handler2(tp){
			if(tp=='ok'){
				ymPrompt.confirmInfo("保存成功!是否打印税票？",null,null,"问询提示",function(tp){tp=='ok'?ticketPrevie("print"):loadImposeInfo()})
			}
			if(tp=='cancel'){
				cancelFn();
			}
			if(tp=='close'){
				closeFn()
			}
		}
		function ticketPrevie(xx){
			Alert(xx)
		}
		function loadImposeInfo(){
			Alert("exit")
		}

		function stateHd(tp){
			ymPrompt[tp]();
		}
	</script>

	<!-- /底部 -->
</body>
</html>

<!-- 网站结构 -->