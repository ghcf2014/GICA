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
<block name="body">

<div class="qrb_cont_out">
	<div class="qrb_cont">
		<h2>确认投标</h2>
		<!--qrb_cont_top-->
		<div class="qrb_cont_top">
			<!--qrb_cont_top 左边-->
			<?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vb): $mod = ($i % 2 );++$i;?><dl>
				<dt>
					<img src="/Public/Home/images/qrb_cont_top_pic.png" width="200"
						height="200" />
				</dt>
				<dd>
					<p>
						<strong>借款用户：</strong><span><?php echo (get_username($vb["borrow_uid"])); ?></span>
					</p>
					<p>
						<strong>借款日期：</strong><span><?php echo (date('Y-m-d',$vo["add_time"])); ?></span>
					</p>
					<p>
						<strong>居 住 地 ：</strong><span><?php echo ($vb["location"]); ?>&nbsp;<?php echo ($vblocation_now); ?></span>
					</p>
				</dd>
			</dl><?php endforeach; endif; else: echo "" ;endif; ?>
			<!--qrb_cont_top 右边-->
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul>
				<li><strong>您的账户总额：</strong><span id="totalMoney">￥<?php echo ($vo["account_money"]); ?></span></li>
				<li><strong>您的可用余额：</strong><span id="leaveMoney">￥<?php echo ($vo["account_money"]); ?></span></li>
				<li><input type="button" class="btn" value="我要充值"
					onclick="javascript:;" id="recharge"></li>
			</ul><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<!--qrb_cont_bot-->
		<div class="qrb_cont_bot">
			<!--qrb_cont_bot 左边-->
			<?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vb): $mod = ($i % 2 );++$i;?><ul class="qrb_cont_bot_l">
				<li class="li01"><h3>
					借款标题：<b><?php echo ($vb["borrow_name"]); ?></b>
					</h3></li>
				<li>借款金额：<span>￥<?php echo ($vb["borrow_money"]); ?></span></li>
				<li>借款年利率：<span><?php echo ($vb["borrow_interest_rate"]); ?>%</span></li>
				<li>已经完成：<span><?php echo ($vb['has_borrow']/$vb['borrow_money']*100); ?>%</span></li>
				<li>还要借款：<span id="needMoney">￥<?php echo ($vb['borrow_money']-$vb['has_borrow']); ?></span></li>
				<li>借款期限：<span><?php echo ($vb["borrow_duration"]); ?>月</span></li>
				<li class="li_last">还款方式： <?php if($vb["repayment_type"] == 1): ?><span>按月分期</span> <?php elseif($vb["repayment_type"] == 2): ?> <span>按月分期</span> <?php elseif($vb["repayment_type"] == 3): ?> <span>按月分期</span> <?php elseif($vb["repayment_type"] == 4): ?> <span>按月分期</span><?php endif; ?>
				</li>
				<li class="li_last">交易类型：<span>线上</span></li>
			</ul><?php endforeach; endif; else: echo "" ;endif; ?>
			<!--qrb_cont_bot 右边-->
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="qrb_cont_bot_r">
				<h3>请填写并确认下面投标金额</h3>
				<ul>
					<s:if test="#request.subscribes!=1">
						<li><span id="investMinMoney">最低投标金额：<?php echo ($vb["borrow_min"]); ?></span>元</li>
					</s:if>
					<s:else>
						<li><span id="investMaxMoney">最多投标金额：<?php echo ($vb["borrow_max"]); ?>元</span></li>
					</s:else>
					<li>年化利率：<span><?php echo ($vb["borrow_interest_rate"]); ?>%</span></li>
					<!-- <li>最小认购金额：11元</li>
					<li>认购总分数：10份</li>
					<li>还有：<span>10</span>份
					</li> -->
				</ul>
				<?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vb): $mod = ($i % 2 );++$i;?><form id="form" action="<?php echo U('add?id='.$vb['id']);?>" method="post"><?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="tzje">
					<span>投资金额</span><input type="text" class="txt" style="color: red;"id="amount" name="capital" maxlength="20" value=""/><span>元</span><input type="button" value="最大金额" class="btn" id="maxMoney"onclick="javascript:;">
									</p>
								</div>
								<p>注意：点击按钮表示您将确认投标金额并同意支付贷款</p>
				<!-- <input type="button" value="确认投标" class="btn2" id="confirmInvest"/> -->
				<input type="submit" value="确认投标" class="btn2"/>

								</div>
							</div>
						</div>
						<div class="tbbot"></div>
					</div>
				</div>
				</from>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>

		</div>
	</div>
</div>

<script>
   //确认投标
	$("#confirmInvest").click(
			function() {
				var amount = parseFloat($("#amount").val());
				var needMoney = parseFloat($("#needMoney").html().substring(1,
						$("#needMoney").html().length));
				if (amount <= 0) {
					$("#errorMsg").html("<font color='red'>投标金额小于零元！</font>");
					return false;
				}
				if (amount > needMoney) {
					$("#errorMsg").html(
							"<font color='red'>投标金额不能大于还需借款！</font>");
					return false;
				}
				$("#form").submit();
			});
</script> <script>
//我要充值
	$("#recharge").click(function() {
		window.location.href = "<?php echo U('Member/System/recharge');?>";
	});
</script> <script>
//最大金额计算
	$("#maxMoney").click(
			function() {
				var totalMoney = parseFloat($("#totalMoney").html().substring(
						1, $("#totalMoney").html().length));
				var leaveMoney = parseFloat($("#leaveMoney").html().substring(
						1, $("#leaveMoney").html().length));
				var needMoney = parseFloat($("#needMoney").html().substring(1,
						$("#needMoney").html().length));
				var investMaxMoney = parseFloat($("#investMaxMoney").html()
						.substring(1, $("#investMaxMoney").html().length));
				var investMinMoney = parseFloat($("#investMinMoney").html()
						.substring(1, $("#investMinMoney").html().length));
				if (leaveMoney <= needMoney) {
					$("#amount").val(leaveMoney);
				}
				if (leaveMoney >= needMoney) {
					$("#amount").val(needMoney);
				}
				if (investMaxMoney > leaveMoney) {
					if (investMaxMoney >= needMoney) {
						$("#amount").val(needMoney);
					}
				}
				if (investMaxMoney > leaveMoney) {
					if (investMaxMoney <= needMoney) {
						$("#amount").val(investMaxMoney);
					}
				}

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