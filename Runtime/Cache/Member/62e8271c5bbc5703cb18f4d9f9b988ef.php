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
<link rel="stylesheet" href="/Public/Home/css/ysx.css" type="text/css" >
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
			<?php else: endif; ?>
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
					<li><a href="<?php echo U('Home/Borrow/borrowapply');?>">我要融资</a></li>
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
	   <block
	name="body"> <!--content start-->
<div class="zh_cont_out">
	<div class="zh_cont">

		<!--zh_cont_l-->
<div class="zh_cont_l">
	<!--<ul>
		<li
			style="color: #ef681f; overflow: hidden; background: url(/Public/Home/images/zh_cont_l_ul_li_bg.png) no-repeat left 15px; height: 72px;"
			class="head"><a class="current" href="<?php echo U('Member/Index');?>"
			style="color: #fff; display: block; width: 114px; height: 56px; line-height: 56px; border-top: 1px solid #ddd; padding-top: 15px; float: right;">个人中心</a></li>	
			
			<li><a href="<?php echo U('Userinfo/userselfset');?>">基本认证</a></li>
			
	</ul>

	<ul>
		<li class="head"><a href="<?php echo U('Home/User/profile');?>"
			style="color: #fff;">安全设置</a></li>
		<li><a href="<?php echo U('Userinfo/userchagerwithdraw');?>">充值提现</a></li>
		<li><a href="<?php echo U('Invest/autoinvest');?>">自动投标</a></li>
		<li><a href="<?php echo U('Friends/friends');?>">好友管理</a></li>
		<li><a href="<?php echo U('System/usermailindex');?>">通知管理</a></li>
	</ul>

	<ul>
		<li class="head" style="color: #fff;">借款管理</li>
		<li><a href="<?php echo U('Borrow/myborrowmanager');?>">我的借款</a></li>
		<li><a href="<?php echo U('Borrow/borrowmanager');?>">还款明细</a></li>
		<li><a href="<?php echo U('Finance/borrowloanstatis');?>">借款统计</a></li>
	</ul>
	<ul style="border-bottom: 0;">
		<li style="color: #fff;" class="head">投资管理</li>
		<li><a href="<?php echo U('Invest/investindex');?>">我的投资</a></li>
		<li><a href="<?php echo U('Finance/financestatis');?>">投标统计</a></li>
		<li class="tipshang">关注投标</li>
		
	</ul>-->

	<ul>
		<li
			style="color: #ef681f; overflow: hidden; background: url(/Public/Home/images/zh_cont_l_ul_li_bg.png) no-repeat left 15px; height: 72px;"
			class="head"><a href="javascript:;"
			style="color: #fff; display: block; width: 114px; height: 56px; line-height: 50px; border-top: 1px solid #ddd; padding-top: 15px; float: right; cursor: auto;">个人中心</a></li>
		<li><a href="<?php echo U('Member/Index');?>">账户详情</a></li>
		<li><a href="<?php echo U('Userinfo/userselfset');?>">基本认证</a></li>
		<li><a href="<?php echo U('Home/User/profile');?>">安全设置</a></li>
		<li><a href="<?php echo U('System/usermailindex');?>">消息中心</a></li>
	</ul>

	<ul>
		<li style="color: #fff; cursor: auto;" class="head">借款管理</li>
		<li><a href="<?php echo U('Member/Borrow/myborrowapply');?>">申请记录</a></li>
		<li><a href="<?php echo U('Borrow/myborrowmanager');?>">借款记录</a></li>
		<li><a href="<?php echo U('Borrow/borrowmanager');?>">还款记录</a></li>
		<li><a href="<?php echo U('Finance/borrowloanstatis');?>">借款统计</a></li>
	</ul>

	<ul>
		<li style="color: #fff; cursor: auto;" class="head">投资管理</li>
		<li><a href="<?php echo U('Invest/investindex');?>">投资记录</a></li>
		<li><a href="<?php echo U('Finance/financestatis');?>">投标统计</a></li>
		<li class="tipshang"><a href="<?php echo U('Invest/autoinvest');?>">自动投标</a></li>
	</ul>

	<ul>
		<li class="head" style="color: #fff; cursor: auto;">资金管理</li>
		<li><a href="<?php echo U('Member/Userinfo/userchagerwithdraw');?>">资金明细</a></li>
		<li><a href="<?php echo U('Member/Userinfo/userbankset');?>">银行卡设置</a></li>
		<li><a href="<?php echo U('Member/System/recharge');?>">充值提现</a></li>
	</ul>

	<ul style="border-bottom: 0;">
		<li class="head" style="color: #fff; cursor: auto;">推广管理</li>
		<li><a href="">友情推广</a></li>
		<li><a href="">推广管理</a></li>
	</ul>

</div>
<!--zh_cont_r-->

		<div class="zh_cont_r">
			<h3 style="border-bottom: 1px solid #ddd;">
				当前位置 > <span style="color: #D41010;">充值提现</span>
			</h3>
			<div class="r_main">
				<div class="tabtil">
					<ul>
						<!-- 	<li><a href="<?php echo U('Userinfo/userchagerwithdraw');?>">资金记录</a></li> -->
						<li><a href="<?php echo U('Member/System/recharge');?>">充值</a></li>
						<li class="on"><a
							href="<?php echo U('Member/System/withdrawdeposit');?>">提现</a></li>
					</ul>
				</div>

				<div class="box" style="display: -none;">
					<div class="boxmain2">

						<p class="tips">
							凡是在工合财富网贷充值未投标的资金，15天以内提现收取本金0.3%，15天以后提现免费 <br />
							注：1、请输入您要取出金额,我们将在1至2个工作日(国家节假日除外)之内将钱转入您网站上填写的银行账号。 <br />
							2、如你急需要把钱转到你的账号或者24小时之内网站未将钱转入到你的银行账号,请联系客服中心。 <br />
							3、确保您的银行账号的姓名和您的网站上的真实姓名一致。 <br /> 4、在钱打到您账号时会发一封站内信通知你。 <br />
							5、每笔提现金额至少为100元以上（备注：如101、632等） <br /> 6、每笔提现金额最高不能超过50000元。 <br />
							7、您目前能提取的最高额度是
							<s:property value="#request.usableSum" default="---"></s:property>
							元。
						</p>
						<div class="biaoge2">
							<form id="form" action="<?php echo U('withdrawdeposit_add');?>"
								method="post">
								<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td width="11%">真实姓名：</td>
										<td width="89%"><?php echo ($userinfo[0]['real_name']); ?></td>
									</tr>
									<tr>
										<td>电话号码：</td>
										<td><?php echo ($userinfo[0]['cell_phone']); ?> <br />
										</td>
									</tr>
									<tr>
										<td>账户余额：</td>
										<td><strong><?php echo ($vo["account_money"]); ?>元 </strong></td>
									</tr>
									<tr>
										<td>可用余额：</td>
										<td><strong><?php echo ($vo["account_money"]); ?>元 </strong></td>
									</tr>
									<tr>
										<td>冻结总额：</td>
										<td><strong><?php echo ($vo["money_freeze"]); ?>元 </strong></td>
									</tr>
									<tr>
										<td>提现的银行：</td>
										<td><span style="float: none;" class="formtips"> *
												以下是绑定的银行卡信息，如果没有银行卡请先进行提现银行卡设置</span></td>
									</tr>
									<s:if test="#request.banks!=null && #request.banks.size>0">
										<s:iterator value="#request.banks" var="bean" status="sta">

											<!-- 并且银行卡的状态为绑定状态 -->
											<s:if test="#bean.cardStatus==1">
												<tr>
													<td></td>
													<td><input type="radio" name="wbank"
														value="<?php echo ($userinfo[0]['bank_address']); ?>" id="bankradio" />
														<!-- ${bean.bankName}&nbsp;&nbsp;${bean.branchBankName} -->&nbsp;<?php echo ($userinfo[0]['bank_address']); ?>
														<span style="color: red; float: none;" id="wbank_tip"
														class="formtips"></span></td>
												</tr>
											</s:if>
										</s:iterator>
									</s:if>
									<tr>
										<td>交易密码： <strong>*</strong>
										</td>
										<td><input type="password" class="inp140" id="dealpwd"
											name="dealpwd" /> <span style="color: red; float: none;"
											id="pwd_tip" class="formtips"></span></td>
									</tr>
									<tr>
										<td>提现金额： <strong>*</strong>
										</td>
										<td><input type="text" class="inp140"
											name="withdraw_money" id="withdrawmoney" /> <span
											style="color: red; float: none;" id="money_tip"
											class="formtips"></span></td>
									</tr>
									<!-- 							<tr>
										<td>
											验证码：&nbsp;&nbsp;
											<strong>*</strong>
										</td>
										<td>
											<input type="text" class="inp100x" id="code" />
											<a id="clickCode" class="yzmbtn" href="javascript:void(0);">发送手机验证码</a>
											<input id="type" name="type" value="drawcash" type="hidden" />
											<span style="color: red; float: none;" id="code_tip"
												class="formtips"> <s:if test="#request.ISDEMO==1">* 不发送短信</s:if>
											</span>
										</td>
									</tr> -->
									<tr>
										<td>&nbsp;</td>
										<td class="txt">* 温馨提示：禁止信用卡套现</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td style="padding-top: 20px;"><input id="btn_submit"
											type="button" class="btn" value="确认提交" /> <!-- <a  href="javascript:void(0);" id="btn_submit" class="bcbtn" onclick="addWithdraw();" >确认提交</a> -->
										</td>
									</tr>

								</table>
							</form><?php endforeach; endif; else: echo "" ;endif; ?>

						</div>
						<div class="biaoge" style="margin-top: 25px;">
							<span id="withdraw"></span>

						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!--content end--> <script type="text/javascript"
	src="/script/jquery-1.7.1.min.js"></script> <script
	type="text/javascript" src="script/jquery.shove-1.0.js"></script> <script
	type="text/javascript" src="script/nav-zh.js"></script> <script
	language="javascript" type="text/javascript"
	src="My97DatePicker/WdatePicker.js"></script> <script>
		$("#btn_submit").click(function() {
			var bankradio = $("#bankradio:checked").val();
			var dealpwd = $("#dealpwd").val();
			var withdrawmoney = $("#withdrawmoney").val();
			if (bankradio == undefined) {
				$('#wbank_tip').html("请选择开发支行！");
				return false;
			}
			if (dealpwd == "") {
				$('#wbank_tip').hide();
				$('#pwd_tip').html("交易密码不能为空！");
				return false;
			}
			if (withdrawmoney == "" || withdrawmoney < 100) {
				$('#wbank_tip').hide();
				$('#pwd_tip').hide();
				$("#money_tip").html("提现金额不能空！");
				return false;
			}
			$("#form").submit();
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