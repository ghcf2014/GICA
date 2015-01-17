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
	   <block
	name="body"> <!--content start-->
<div class="zh_cont_out">
	<div class="zh_cont">
		<h2>
			<a href="<?php echo U('Index');?>">我的账户</a>
		</h2>
		<!--zh_cont_l-->
            <div class="zh_cont_l">
                <ul style="padding-top: 15px;">
                    <li style="color:#ef681f;" class="head"><a class="current" href="<?php echo U('Member/Index');?>" style="color: #fff;">个人中心</a></li>
                    <li><a href="<?php echo U('Userinfo/userselfset');?>">基本认证</a></li>
                   <!--  <li>融资认证</li> -->
                </ul>  
                
                <ul>
                    <li class="head"><a href="<?php echo U('Home/User/profile');?>" style="color: #fff;">安全设置</a></li>
                    <li><a href="<?php echo U('Userinfo/userchagerwithdraw');?>">充值提现</a></li>
                    <li><a href="<?php echo U('Friends/friends');?>">好友管理</a></li>
                    <li><a href="<?php echo U('System/usermailindex');?>"
                    
                    >通知管理</a></li>
                </ul> 
                 
                <ul>
                    <li class="head" style="color: #fff;">借款管理</li>
                    <li><a href="<?php echo U('Borrow/borrowmanager');?>">我的借款</a></li>
                    <li><a href="<?php echo U('Finance/borrowloanstatis');?>">借款统计</a></li>
                    <li><a href="<?php echo U('Invest/borrowmanager');?>">还款明细</a></li>
                </ul>  
                <ul style="border-bottom:0;"> 
                    <li style="color: #fff;" class="head">投资管理</li>
                    <li><a href="<?php echo U('Invest/investindex');?>">我的投资</a></li>
                    <li><a href="<?php echo U('Finance/financestatis');?>">投标统计</a></li>
                    <li class="tipshang">关注投标</li>
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
						<!--<a href="friendManagerInit.htm">-->
						<li class="on">邀请好友</li>
						<!--</a>-->
						<!--<a href="friendManagerInits.htm">-->
						<li>好友列表</li>
						<!--</a>-->
					</ul>
				</div>
				<div class="box">
					<div class="friend_tab">
						<div class="boxmain2 yqhy">
							<!-- <div class="rrdslcj">
								<img src="./images/yqhy.jpg" alt="邀请好友，挣金币，兑大礼" />
							</div> -->
							<div class="bdsharebuttonbox">
								<a href="#" class="bds_more" data-cmd="more"></a> <a href="#"
									class="bds_qzone" data-cmd="qzone"></a> <a href="#"
									class="bds_tsina" data-cmd="tsina"></a> <a href="#"
									class="bds_tqq" data-cmd="tqq"></a> <a href="#"
									class="bds_renren" data-cmd="renren"></a> <a href="#"
									class="bds_weixin" data-cmd="weixin"></a>
							</div>
							<script>
								window._bd_share_config = {
									"common" : {
										"bdSnsKey" : {},
										"bdText" : "中国工合实业集团旗下 网贷平台，P2P理财首选平台。综合年化收益18%以上，100%本息安全保障！您的好友邀请链接:${url}reg.htm?param=${userId}",
										"bdMini" : "2",
										"bdPic" : "",
										"bdStyle" : "0",
										"bdSize" : "16"
									},
									"share" : {},
									"image" : {
										"viewList" : [ "qzone", "tsina", "tqq",
												"renren", "weixin" ],
										"viewText" : "分享到：",
										"viewSize" : "16"
									},
									"selectShare" : {
										"bdContainerClass" : null,
										"bdSelectMiniList" : [ "qzone",
												"tsina", "tqq", "renren",
												"weixin" ]
									}
								};
								with (document)
									0[(getElementsByTagName('head')[0] || body)
											.appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='
											+ ~(-new Date() / 36e5)];
							</script>
							<div class="yqhy_text1">
								<h4>复制链接发给QQ/MSN上的好友</h4>
								<div style="width: auto; height: auto; overflow: hidden;">
									<span id="testcopy"
										style="float: left; width: 180px; height: 19px; padding-top: 5px; color: red; margin-right: 400px;">http://www.gitback.com/Home/register.html&&reffer=<?php echo ($username); ?></span><a
										href="javascript:;" id="copy" style="float: left;"><embed
											width="62" height="24" align="middle"
											flashvars="txt=http://www.gitback.com/Home/User/register.html?reffer=<?php echo ($username); ?>"
											src="/Public/copy.swf" quality="high" wmode="transparent"
											allowscriptaccess="sameDomain"
											pluginspage="http://www.adobe.com/go/getflashplayer"
											type="application/x-shockwave-flash"></a>
								</div>



								<!--复制代码-->
								<br> <br> <br> <br> <span
									id="url_box_clippy" style="display: none">http://www.gitback.com/Home/User/register.html?reffer=<?php echo ($username); ?></span>
								<span id="clippy_tooltip_url_box_clippy"
									class="clippy-tooltip tooltipped" title="copy to clipboard">
									<object id="clippy" class="clippy" width="14" height="14"
										classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000">
										<param
											value="https://d3nwyuy0nl342s.cloudfront.net/flash/clippy.swf?v5"
											name="movie">
										<param value="always" name="allowScriptAccess">
										<param value="high" name="quality">
										<param value="noscale" name="scale">
										<param value="id=url_box_clippy&copied=&copyto="
											name="FlashVars">
										<param value="#FFFFFF" name="bgcolor">
										<param value="opaque" name="wmode">
										<embed width="14" height="14" wmode="opaque" bgcolor="#FFFFFF"
											flashvars="id=url_box_clippy&copied=&copyto="
											pluginspage="http://www.macromedia.com/go/getflashplayer"
											type="application/x-shockwave-flash"
											allowscriptaccess="always" quality="high" name="clippy"
											src="https://d3nwyuy0nl342s.cloudfront.net/flash/clippy.swf?v5">
									</object>
								</span>

								<!-- <textarea class="txta_1" name="contents" id="contents">中国工合实业集团旗下 网贷平台【ghcf】，P2P理财首选平台。综合年化收益18%以上，100%本息安全保障，50元超低门槛，是草根、家庭的理财专属通道！你也赶快来投资，别被银行榨取我们的存款利息！进入平台先注册:${url}reg.htm?param=${userId}</textarea>
								<div class="fzfx_an">
									<a href="javascript:void(0);" onclick=
	jsCopy();
><img
											src="./images/img/fzfx_an.jpg" width="103" height="29" /> </a>
								</div>  -->
							</div>
							<form action="/index.php?s=/Member/Friends/friends.html" method="post" id="form">
								<div class="yqhy_text1">
									<h4>还可以通过邮件推荐</h4>
									<ul class="yjtj">
										<li><label class="lab1 "> 好友邮箱： </label> <input
											type="text" maxlength="100" value=""
											class="inp1 no_ol pl5 fc999 b_ddd" id="emails" name="email"></li>
										<li><label class="lab1"> 您的姓名： </label> <input
											type="text" maxlength="20" class="inp1 no_ol pl5 fc999 b_ddd"
											value="<?php echo ($realName); ?>" id="name" disabled="disabled"></li>
										<!--<li>
										<label class="lab1">
											邮件标题：
										</label>
										<input type="text" class="inp1 no_ol pl5 fc999 b_ddd"
											value="教您稳赚赢大奖" id="title">
									</li>-->
										<li><label class="lab1"> 邮件内容： </label> <textarea
												class="txta_2 no_ol b_ddd fc999" id="content" name="content"
												rows="20">特意邀请您注册“工合财富” 网贷平台【www.ghcf.cn】，P2P理财首选平台。综合年化收益18%，100%本息安全保障，50元起投，超低门槛，是草根、家庭的理财专属通道！你也赶快来投资吧，别被银行榨取我们的存款利息！进入平台先注:http://www.gitback.com/Home/User/register.html?reffer=<?php echo ($username); ?></textarea>
										</li>
									</ul>
									<div class="fzfx_an">
										<span style="color: red; float: none;" id="s_tip"
											class="formtips"></span> <a href="javascript:void(0);"
											id="sendmail"> <img
											src="/Public/Member/images/fs_an.png" width="103"
											height="29" />
										</a>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="friend_tab" style="display: none;">
						<table>
							<tr>
								<td>编号</td>
								<td>用户名</td>
								<td>注册时间</td>
								<td>投资</td>
								<td>投资时间</td>
							</tr>
							<?php if(is_array($friendList)): $i = 0; $__LIST__ = $friendList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td><?php echo ($i); ?></td>
								<td><?php echo ($vo["username"]); ?></td>
								<td><?php echo (date('Y-m-d',$vo["reg_time"])); ?></td>
								<td><?php echo ($vo["investor_capital"]); ?></td>
								<td><?php echo (date('Y-m-d',$vo["add_time"])); ?></td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</table>
					</div>
					<div class="page"><?php echo ($page); ?></div>
				</div>

			</div>

		</div>
	</div>
</div>
</div>
<!--content end--> <script src="/Public/Home/js/jquery-1.7.2.min.js"
	type="text/javascript" charset="utf-8"></script> <script>
		$("#sendmail").click(function() {
			var email = $('#emails').val();
			var content = $('#content').val();
			if (email == "") {
				alert("好友邮箱地址不能为空！");
				return false;
			}
			if (content == "") {
				alert("邮件内容不能为空！");
				return false;
			}
			$('#form').submit();
		});
	</script> <script type="text/javascript">
		$(function() {
			$('.zh_cont_out .zh_cont .r_main .tabtil ul li').each(
					function(index, element) {
						$(element).click(
								function() {
									$(element).addClass('on').siblings()
											.removeClass('on');
									$('.box .friend_tab')
											.eq($(element).index()).show()
											.siblings().hide();
								})
					})
		})
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