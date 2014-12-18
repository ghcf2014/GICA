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
	 

<block name="body">
		<!--content start-->
	<div class="zh_cont_out">
    	<div class="zh_cont">
            <h2><a href="<?php echo U('Index');?>">我的账户</a></h2>	
            	<!--zh_cont_l-->
            <div class="zh_cont_l">
                <ul>
                    <li style="color:#ef681f;"><a class="current" href="<?php echo U('Member/Index');?>">个人中心</a></li>
                    <li><a href="<?php echo U('Userinfo/userselfset');?>">基本认证</a></li>
                   <!--  <li>融资认证</li> -->
                </ul>  
                
                <ul>
                    <li><a href="<?php echo U('Userinfo/usersaftyset');?>">安全设置</a></li>
                    <li><a href="<?php echo U('Userinfo/userchagerwithdraw');?>">充值提现</a></li>
                    <li><a href="<?php echo U('Friends/friends');?>">好友管理</a></li>
                    <li><a href="<?php echo U('System/usermailindex');?>">通知管理</a></li>
                </ul> 
                 
                <ul>
                    <li style="color:#ef681f;">借款管理</li>
                    <li><a href="<?php echo U('Invest/borrowmanager');?>">我的借款</a></li>
                    <li><a href="<?php echo U('Finance/borrowloanstatis');?>">借款统计</a></li>
                    <li><a href="<?php echo U('Invest/borrowmanager');?>">还款明细</a></li>
                </ul>  
                <ul style="border-bottom:0;"> 
                    <li style="color:#ef681f;">投资管理</li>
                    <li><a href="<?php echo U('Invest/investindex');?>">我的投资</a></li>
                    <li><a href="<?php echo U('Finance/financestatis');?>">投标统计</a></li>
                    <li>关注投标</li>
                    <!-- <li>自动投标</li> -->
                </ul>  
                
<!--                 <ul class="ul_last">
                    <li>债权管理</li>
                    <li>我的债权</li>
                </ul>  --> 
            </div>
 <!--zh_cont_r-->

	            <div class="zh_cont_r">
	            <div class="r_main">
					<div class="tabtil">
						<ul>
							<li class="on">
								<a href="<?php echo U('Userinfo/userchagerwithdraw');?>">资金记录</a>
							</li>
							<li>
								<!-- <a href="<?php echo U('Userinfo/userwithdrawrice');?>">充值</a> -->
								<a href="<?php echo U('System/recharge');?>">充值</a>
							</li>
							<li>
								<!-- <a href="<?php echo U('Userinfo/userwithdrawrice');?>">提现</a> -->
								<a href="<?php echo U('System/withdrawdeposit');?>">提现</a>
							</li>
						</ul>
					</div>
					<div class="box" id="zjjl">
					<div class="boxmain2"><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="tabmain">
								<div class="biaoge">
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tbody><tr>
											<th>
												账户总额
											</th>
											<th>
												可用余额
											</th>
											<th>
												冻结金额
											</th>
										</tr>
										<tr>
											<td align="center">
												￥<?php echo ($vo["account_money"]); ?></td>
											<td align="center">
												￥<?php echo ($vo["account_money"]); ?></td>
											<td align="center">
												￥<?php echo ($vo["money_freeze"]); ?></td>
										</tr>
									</tbody></table>

								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<h2 class="otherh2x">
							资金记录
						</h2>
						<div class="boxmain2">
							<div class="srh">
								查询时间 起始时间：
								<input id="startTime" type="text" class="inp140" onclick="WdatePicker({dateFmt:'yyyy-MM-dd',readOnly:'readOnly'})">
								结束时间：
								<input id="endTime" type="text" class="inp140" onclick="WdatePicker({dateFmt:'yyyy-MM-dd',readOnly:'readOnly'})">
								类型:
								<select name="momeyType" id="momeyType" class="inp80">
							    <option value="">--请选择--</option>
							    <option value="-1">国付宝</option>
							    <option value="804">扣除VIP会费</option>
							    <option value="251">好友邀请奖励</option>
							    <option value="-1">手工充值</option>
							    <option value="653">冻结投标金额</option>
							    <option value="101">借款成功</option>
							    <option value="601">扣除借款管理费</option>
							    <option value="654">扣除投标冻结金额</option>
							    <option value="804">申请VIP会员</option>
							    <option value="-1">好友邀请奖励</option>
							    <option value="-1">冻结提现金额</option>
							    <option value="-1">提现成功</option>
							    <option value="-1">奖励充值</option>
							    <option value="801">扣除短信服务费</option>
							    <option value="502">手动扣费</option>
							    <option value="151">投资收到还款</option>
							    <option value="156">收到逾期罚息</option>
							    <option value="604">扣除还款金额</option>
							    <option value="603">扣除逾期罚息</option>
							    <option value="-1">取消提现</option>
							    <option value="-1">提现失败</option>
							    <option value="602">冻结秒还借款费</option>
							    <option value="105">解冻秒还借款费</option>
							</select>

							<a href="javascript:void(0)" class="cxbtn" onclick="fundRecordList();;">查询</a>
														</div>
														<div class="biaoge" id="fundRecord">
							    <table width="100%" border="0" cellspacing="0" cellpadding="0">
									  <tbody><tr>
									    <th>序号</th>
									    <th>时间</th>
									    <th>操作类型</th>
									    <th>备注</th>
									    <th>收入</th>
									    <th>支出</th>
									    <th>可用余额</th>
									    <th>冻结金额</th>
									    <th>待收金额</th>
									    <th>总金额</th>
									  </tr>
									  
									  <tr><td colspan="11" align="center">暂无信息</td></tr>
									  </tbody></table>
								
								<div class="page">
								<p>
								</p>
							</div> </div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
	<!--content end-->
		<!-- 引用底部公共部分 -->
		<jsp:include page="/include/footer.jsp"></jsp:include>
		<script type="text/javascript" src="/script/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="script/jquery.shove-1.0.js"></script>
		<script type="text/javascript" src="script/nav-zh.js"></script>
		<script language="javascript" type="text/javascript"
			src="My97DatePicker/WdatePicker.js"></script>
		<script>
	$(function() {
		//样式选中
		$("#zh_hover").attr('class', 'nav_first');
		$('#li_2').addClass('on');
		$('.tabmain').find('li').click(function() {
			$('.tabmain').find('li').removeClass('on');
			window.location.href = 'queryFundrecordInit.htm';
		});
	});

	function jumpUrl(obj) {
		window.location.href = obj;
	}
</script>
		<script>
	function fundRecordList() {
		if ($("#startTime").val() == "" || $("#endTime").val() == "") {
			alert("请选择查询日期");
			return;
		} else if ($("#startTime").val() > $("#endTime").val()) {
			alert("结束日期要大于开始日期");
			return;
		}
		param["pageBean.pageNum"] = 1;
		param["paramMap.startTime"] = $("#startTime").val();
		param["paramMap.endTime"] = $("#endTime").val();
		$.shovePost("queryFundrecordList.htm", param, function(data) {
			$("#fundRecord").html(data);
		});
	}

	function addRechargeInfo() {
		if ($("#money").val() == "") {
			$("#money_tip").html("请输入充值金额");
			return;
		} else if (!/^(([0-9]+\.[0-9]*[1-9][0-9]*)|([0-9]*[1-9][0-9]*\.[0-9]+)|([0-9]*[1-9][0-9]*))$/
				.test($("#money").val())) {
			$("#money_tip").html("请输入正确的提现金额，必须为大于0的数字");
			return;
		} else if ($("#money").val() < 0.01) {
			$("#money_tip").html("最小金额不能低于0.01");
			return;
		} else {
			$("#money_tip").html("");
		}

		if (!window.confirm("确定进行帐户充值")) {
			return;
		}
		var money = $("#money").val();
		window.open("alipayPayment.htm?divType=li_2&money=" + money);

		/*param["paramMap.money"] = $("#money").val();
		$.shovePost("addRechargeInfo.htm",param,function(data){
		   if(data == 0){
		      alert("充值失败");
		      return ;
		   }
		   alert("充值成功");
		   $("#money").attr("value","");
		   $("#rechargeInfo").html(data);
		});*/
	}
</script>

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