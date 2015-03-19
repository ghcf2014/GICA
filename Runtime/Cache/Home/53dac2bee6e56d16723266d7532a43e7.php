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
	 

<block name="body">
	<!--content start-->
	<div class="xszy_cont_out">
  		<div class="xszy_cont_in"> 						
    		<div class="xszy_cont">
    			<div class="xszy_cont_l_out">
	    			<h2>新手指引</h2>
			        <ul class="xszy_cont_l">
						<li class="current">平台原理</li>
						<li><a href="<?php echo U('Home/Newhelp/safetypromise');?>">安全保障</a></li>
						<li>常见问题</li>
					</ul>
				</div>
				
            	<div class="xszy_cont_r">
            		<div>
						<!--平台原理-->
						<div class="tab">
							<div class="xszy_cont_r_cont">
								<div style="overflow: hidden;">
									<div class="descrition">
										<h2>平台原理</h2>
										<p>工合财富以创新的网贷模式，将个人与个人，个人与机构等实现有效的点对点的网络连接，通过建立多方合作机制，帮助有借贷需求的人减轻融资负担，帮助有投资需求的人增加财富增长效率，以健全的风险控制体系，创造一个安全、高效、诚信、互惠互助的网络借贷平台。</p>
									</div>
									<div class="picture"><img src="/Public/Home/images/ptyl.png"/></div>
								</div>
								
								
								<ul class="advantage">
									<li style="height: 50px;line-height: 50px;color:#0aaae6;font-size: 24px;padding-left: 0;padding-bottom: 20px;">我们的优势</li>
									<li style="background: url(/Public/Home/images/intro-icon1.png) no-repeat 15px center;">经营理念：致力于解决小微企业融资难融资贵；致力于搭建投资者安全理财平台。</li>
									<li style="background: url(/Public/Home/images/intro-icon2.png) no-repeat 15px center;">实力雄厚：由广东省工业合作协会联合多家实力会员单位发起成立；注册资本雄厚，权威合作机构。</li>
									<li style="background: url(/Public/Home/images/intro-icon3.png) no-repeat 15px center;">安全保障：优选优质项目；银行级信息安全系统</li>
									<li style="background: url(/Public/Home/images/intro-icon4.png) no-repeat 15px center;">收益稳健：<b>12%~18%</b>  稳定收益率</li>
									<li style="background: url(/Public/Home/images/intro-icon5.png) no-repeat 15px center;">灵活便捷：投资门槛低；期限灵活；转让便捷。</li>
								</ul>
								
								<dl class="rhtz">
									<dt>如何投资?</dt>
									<dd><img src="/Public/Home/images/rhtz.png"/></dd>
									<dd><p>工合财富！您的私人理财专家！</p></dd>
									<dd><a href="<?php echo U('User/register');?>">立即注册</a></dd>
								</dl>
								
							</div>			
						</div>
						
						<!--安全保障-->
						<div class="tab" style="display:none"></div>
      
			             <!--常见问题-->
						 <div class="tab" style="display: none">
							<div class="xszy_cont_r_cont">
								<h4>VIP用户有什么服务？</h4>
								<ul>
									<li>1.普通会员，享本金保障；VIP 会员，享本息保障。</li>
								</ul>
							</div>
			
							<div class="xszy_cont_r_cont">
								<h4>如何成为VIP用户？</h4>
								<ul>
									<li>1.登陆工股平台财富账户，点击"我的账户"，在账户总览头像右侧有5个标识，最后一个"V"字标识，点击申请即可，VIP费用元/年，到期后须重新申请并付费。</li>
								</ul>
							</div>
						</div>
					</div>		
            	</div>
        	</div>
       	</div>
	</div>
	
	
	
	
	
	
	
	<!--帮助中心页面-->
  	<div class="xszy_cont_out" style="display: none;">
  		<div class="xszy_cont_in"> 						
    		<div class="xszy_cont">
    			<div class="xszy_cont_l_out">
	    			<h2>帮助中心</h2>
			        <ul class="xszy_cont_l">
						<li class="current">注册登录</li>
						<li>实名认证</li>	
						<li>我要借款</li>
						<li>我要投资</li>
						<li>我要充值</li>
						<li>我要提现</li>					
					</ul>
				</div>
				
            	<div class="xszy_cont_r">
            		<div>          		
	            		<!--注册与登录-->
	            		<div class="tab">
	                    	<div class="xszy_cont_r_cont">
	                        	<h4>如何登录?</h4>
	                        	<ul>
									<li>1.在工合基金完成注册后登录（推荐）</li>
									<li>2.在工合基金，您的用户名、认证手机号码和注册邮箱一样，都可以用来登录。您可以输入其中任意一项进行登录。</li>
								</ul>
	                    	</div>
	                    
	                    	<div class="xszy_cont_r_cont">
	                        	<h4>如何注册？</h4>
								<ul>
									<li>1.进入工股平台财富首页（），点击右上角的"免费注册"。2.进入注册页面，根据提示信息，填写您的用户名、密码、推荐人（可以不填写）、验证码，点击"立即注册"。</li>
								</ul>
	                    	</div>
	                	</div>
                
                
		                <!--实名认证-->
		                <div class="tab" style="display:none">
	                    	<div class="xszy_cont_r_cont">
								<h4>为什么要进行实名认证？</h4>
								<ul>
									<li>1.为了保障用户资金的安全性和合同的有效性，工股平台财富要求所有理财人及借款人必须通过身份证绑定、手机绑定以及提现密码设置。安全认证的过程简单便捷，工股平台财富对于所有个人资料均作严格保密。</li>							
								</ul>
							</div>
	                    
		                    <div class="xszy_cont_r_cont">
								<h4>如何进行实名认证？</h4>
								<ul>
									<li>1.用户注册成功之后，会直接跳转到实名认证页面，然后填写姓名、身份证号码、验证码，即可完成实名认证。</li>
									<li>2.用户可以在"我的账户--账户安全管理--实名认证"页面输入姓名、身份证号码，即可完成实名认证。</li>
								</ul>
							</div>
							<div class="xszy_cont_r_cont">
								<h4>身份证信息都是正确的，为什么不能实名认证成功？</h4>
								<ul>
									<li>1.可能是由于第三方认证系统没有及时更新您的身份信息导致的，可以联系在线客服或者致电客服热线 进行人工咨询。</li>
								</ul>
							</div>
							<div class="xszy_cont_r_cont">
								<h4>认证成功后，身份证号码可以更换吗？</h4>
								<ul>
									<li>1.为保障投资者账号安全，实名认证通过后不能修改。如因客户填写操作失误，可以联系在线客服或者客服热线4000-521-600进行人工审核操作。</li>
								</ul>
							</div>
							<div class="xszy_cont_r_cont">
								<h4>如何绑定手机和邮箱？</h4>
								<ul>
									<li>1.一个手机号或者邮箱能绑定几个工合平台财富账户？</li>
								</ul>
							</div>
							<div class="xszy_cont_r_cont">
								<h4>如何更换绑定手机号？</h4>
								<ul>
									<li>1.原手机号还在使用：在"我的账户--账户安全管理--手机变更"里面进行申请，申请后会有人工联系进行审核。</li>
									<br />
									<li>2.原手机号不在使用或已丢失：因个人原因更换手机号码，按如下流程进行：我们会给您发送一份手机号码变更申请书模板，您填写好之后，签字按手印，然后扫描申请书（或拍照）并附上本人身份证扫描件（或拍照）、工合平台财富用户名发送至这个邮箱：
										，详细情况可以咨询在线客服。</li>
								</ul>
							</div>
							<div class="xszy_cont_r_cont">
								<h4>如何更换绑定邮箱？</h4>
								<ul>
									<li>1.邮箱更改需按如下流程进行：我们会发送给您一份邮箱变更申请书模板，您填写好之后，签字按手印，然后扫描申请书（或拍照）并附上本人身份证扫描件（或拍照）、工合平台财富用户名发送至这个邮箱：，详细情况可以咨询在线客服。</li>
								</ul>
							</div>
						</div>
						       
		                <!--我要借款-->
		                <div class="tab" style="display:none">
		                    <div class="xszy_cont_r_cont">
		                        <h4>我要借款</h4>
		                        <ul>
		                            <li>1.进入工合财富首页（www.gonghejijin.com ），点击右上角的"注册"。</li>
		                            <li>2.进入注册页面，根据提示信息，填写您的用户名、密码、验证码，点击"立即注册"。</li>
		                        </ul>
		                    </div>
		                    
		                    <div class="xszy_cont_r_cont">
		                        <h4>登录</h4>
		                        <ul>
		                            <li>1.在工合基金完成注册后登录（推荐）</li>
		                            <li>2.在工合基金，您的用户名、认证手机号码和注册邮箱一样，都可以用来登录。您可以输入其中任意一项进行登录。</li>
		                        </ul>
		                    </div>
		                </div>
                
		                <!--我要投资-->
		                <div class="tab" style="display: none">
						<div class="xszy_cont_r_cont">
							<h4>如何进行投资？</h4>
							<ul>
								<li>1.在工合财富注册一个账户</li>
								<li>2.然后进行实名认证，绑定手机号码邮箱</li>
								<li>3.在账户进行充值</li>
								<li>4.进入工合财富首页，点击"我要理财"，可以选、"理财项目"、进行投资。</li>
		
							</ul>
						</div>
		
						<div class="xszy_cont_r_cont">
							<h4>为什么投资后资金会冻结？</h4>
							<ul>
								<li>1.为了避免客户忘记资金已经使用，再次操作，当资金投资之后还没开始计息前的期间内会处于冻结状态。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>投资后什么时候开始计息？</h4>
							<ul>
								<li>1.理财项目：购买的项目投满复审之后开始计息；计息之后会在"我的账户--我的投资--投资记录"中显示。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>投资后什么时候有回款？</h4>
							<ul>
								<li>1.从计息之日为准，每个月的当天24点之前会收到当月回款。具体金额和时间可以在"我的账户--我的投资--回款查询"和"我的账户--我的投资--交易记录"中查看。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>需要收取的费用有哪些？</h4>
							<ul>
								<li>工股平台财富对投资者只收取两笔费用：</li>
								<li>1 . VIP会费15元/年；</li>
								<li>2、除了定投宝项目，普通理财项目将收取所赚利息的为管理费 。</li>
							</ul>
						</div>
					</div>          
            
                
                	<!--我要充值-->
					<div class="tab" style="display: none">
						<div class="xszy_cont_r_cont">
							<h4>有哪些充值渠道？</h4>
							<ul>
								<li>1.工股平台财富网可以通过有开通网银的银行卡或者第三方支付财付通转账进行充值。</li>
							</ul>
						</div>
		
						<div class="xszy_cont_r_cont">
							<h4>有哪些第三方支付平台？</h4>
							<ul>
								<li>1.第三方支付平台工股平台财富网目前合作的有财付通、网银在线、丰付支付。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>如何通过网上银行充值？</h4>
							<ul>
								<li>1.登陆工股平台财富账户，进入"我的账户--充值提现--充值"，然后输入充值金额，选择支付银行，点击下一步，跳转到银行界面，根据页面提示进行操作，即可进行充值。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>充值需要收费吗？</h4>
							<ul>
								<li>1.工股平台财富网充值都是不收取手续费的。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>如何开通网上银行？</h4>
							<ul>
								<li>1.开通网上银行需要您携带有效身份证件，到当地您所持银行卡的发卡行任意营业网点，即可申请开通网上银行业务。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>为什么网银充值的时候，页面打不开，不能进入到银行的交易页面？</h4>
							<ul>
								<li>1.一般情况下，不能进入到银行的交易页面有可能是您的上网助手或者防火墙拦截了，在充值的时候您可以暂时关闭后再尝试操作，也有可能是您的浏览器原因导致的，建议您使用稳定性较高的Microsoft
									IE浏览器，如果您是使用IE浏览器操作的，您可以尝试清理您的浏览器缓存，设置兼容性视图。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>充值是否限额？</h4>
							<ul>
								<li>1.工股平台财富充值金额无限制，充值限额是由银行支付限额、第三方支付平台支付限额和用户自己设定的支付限额三者共同决定，取三者最小值。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>可以使用手机充值吗？</h4>
							<ul>
								<li>1.目前工股平台财富手机上可使用微信端进行充值。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>是否支持信用卡给账户充值？</h4>
							<ul>
								<li>1.工股平台财富不支持信用卡充值。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>充值不成功的原因？</h4>
							<ul>
								<li>1.您的银行卡未开通网银，请开通网银支付功能</li>
								<li>2.您的银行卡余额不足</li>
								<li>3.您的银行卡或已过期、作废、挂失</li>
								<li>4.您输入的银行卡号或密码错误</li>
								<li>5.银行数据传输异常请稍后再试</li>
								<li>6.超过银行充值限额，请联系银行提供支付额度。</li>
							</ul>
						</div>
					</div>
		             <!--我要提现-->
					<div class="tab" style="display: none">
						<div class="xszy_cont_r_cont">
							<h4>如何提现？</h4>
							<ul>
								<li>1.登陆工股平台财富账户，在有绑定银行卡的前提下，点击"我的账户--充值提现--提现"，然后输入"交易密码"、"提现金额"、"验证码"，点击确认提交，即可完成提现。</li>
							</ul>
						</div>
		
						<div class="xszy_cont_r_cont">
							<h4>为什么提现后资金会冻结？</h4>
							<ul>
								<li>1.为了避免客户忘记资金已经使用，再次操作，当资金申请提现之后还没到账前的期间内都会处于冻结状态。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>提现有次数限制和收费吗？</h4>
							<ul>
								<li>1.每个用户每月可享免费提现5次，超过5次按提现金额的千分之二收取费用（手续费最低2元，无上限），每月剩余免费提现次数，当月月底归零，不累计至下月。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>提现有金额限制吗？</h4>
							<ul>
								<li>1.单笔提现最小限额为100元，最大金额为50万元。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>冻结状态下可以取消提现吗？</h4>
							<ul>
								<li>1.用户申请提现之后，金额处于冻结状态，在财务处理之前可以取消，在"我的账户--充值提现--提现--提现记录"里面可以查看具体状态，财务处理之前状态为"审核中"，可操作"取消"。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>提现需要多长时间？</h4>
							<ul>
								<li>登陆工合财富账户，点击"我的账户--充值提现--提现--到账时间说明"即可查看，具体如下：提现到账时间：</li>
								<li>工商、农业、建设、交通、招商、中行、平安、浦发、光大、民生以及兴业银行到账情况如下：</li>
								<li><img alt="" src="/Public/Home/images/drawvalue.jpg"></li>
								<li>周六日：周五15:00至周六15:00的提现申请的到账时间为周六晚24:00前；</li>
								<li>周六15:00至周日15:00的提现申请的到账时间为周日晚24:00前。</li>
								<li>其他银行到账情况如下：工作日：提现处理时间依照上表，但是提现到账时间为T+1（T指提现处理当日，T+1指下一个工作日）。周六日：则依财付通具体情况为准。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>何种情况会造成提现失败？</h4>
							<ul>
								<li>1. 银行账号/户名错误，或是账号和户名不符</li>
								<li>2. 银行账户冻结或正在办理挂失</li>
								<li>3.开户行等银行信息错误</li>
								<li>4.使用信用卡提现</li>
								<li>5.银行卡身份证名字信息跟在工合财富实名认证身份证名字信息不一致</li>
								<li>6.第一次提现工合财富会有专门的财务人员与您进行联系，若没有联系上，则审核不通过，提示失败。</li>
							</ul>
						</div>
						<div class="xszy_cont_r_cont">
							<h4>提现失败会造成一次免费提现机会的浪费吗？</h4>
							<ul>
								<li>1.提现失败不会使用免费提现机会。</li>
							</ul>
						</div>
					</div>   
             
	             <!--其他指引-->
				<div class="tab" style="display: none">
					<div class="xszy_cont_r_cont">
						<h4>VIP用户有什么服务？</h4>
						<ul>
							<li>1.普通会员，享本金保障；VIP 会员，享本息保障。</li>
						</ul>
					</div>
	
					<div class="xszy_cont_r_cont">
						<h4>如何成为VIP用户？</h4>
						<ul>
							<li>1.登陆工股平台财富账户，点击"我的账户"，在账户总览头像右侧有5个标识，最后一个"V"字标识，点击申请即可，VIP费用元/年，到期后须重新申请并付费。</li>
						</ul>
					</div>
				</div>
			</div>
            </div>
        </div>
       </div>
    </div>


	<!--content end-->
<script>
    $(function(){
		$('.xszy_cont_out .xszy_cont .xszy_cont_l li').each(function(index,element)
		{
			$(element).click(function(){
				//alert(1);
				$(element).addClass('current').siblings().removeClass('current');
				
			});
		});		
	});
	
	
	$(function(){
		var num = 0;
		var timer =null;
		var myFn = function()
		{
			num++;
			if(num > $('.xszy_cont .xszy_cont_r .xszy_cont_r_picR ul li').length - 1){ num = 0;}
			
			$('.xszy_cont .xszy_cont_r .xszy_cont_r_picR ul li').eq(num).fadeIn().siblings().hide();
		}
		timer =setInterval(myFn,2500);
		
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