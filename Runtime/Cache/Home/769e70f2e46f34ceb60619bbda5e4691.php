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
	 

     <!--banner start-->
    <div class="banner">
        <ul>
            <li style="display: block;"><img src="/Public/Home/images/banner_pic1.png" width="1600" height="339" /></li>
            <li><img src="/Public/Home/images/banner_pic2.png" width="1600" height="339" /></li>
            <li><img src="/Public/Home/images/banner1.jpg" width="1600" height="339" /></li>
        </ul>
        <ol>
        	<li class="current">1</li>
        	<li>2</li>
        	<li>3</li>
        </ol>
    </div>
    <!--banner end-->

	<!--content start-->
  <div class="cont">
    	<!--content_top start-->
    	<div class="cont_top">
        	<dl>
            	<dt>
                	<h2><a href="#">理财投资</a></h2>
                	<p>了解我们</p>
                </dt>
                <dd>    投资理财 成为理财人，通过主动投标或加入U计划将资金进行投资，最高获得12-14%的预期年化收益。 
</dd>
            </dl>
            
            <dl>
            	<dt>
                	<h2><a href="#">融资借款</a></h2>
                	<p>帮助您解决所有问题</p>
                </dt>
                <dd>如果你现在需要资金周转，可以向我们提交借款申请，通过考察、资料审核、办理借款手续后手续后，可以及时解决资金问题。 </dd>
            </dl>
             <dl>
            	<dt style="background:url(/Public/Home/images/icons.png) no-repeat 0   -83px">
                	<h2><a href="#">安全保障</a></h2>
                	<p>100%本息担保</p>
                </dt>
                <dd>我们的客户来自于公司业务一手客户及银行合作推荐客户，借助于银行大数据风控团队及自身专业的风控体系，更有第三方担保公司兜底，让您放心投资。</dd>
            </dl>
            <dl  class="helpCenter">
            	<dt>
                	<h2><a href="#">新手指引</a></h2>
                	<p>了解我们</p>
                </dt>
                <dd>注册成为会员，充值后选择优质借款项目进行投资，将闲散资金借给有需要的人，获得年化12%-20%的投资收益。</dd>
            </dl>
        </div>
        <!--content_top end-->
        
        <!--content_bottom start-->
        <div class="cont_bot">
        	<div class="cont_bot_l">
           	  <h2>投资列表</h2>
           	     <?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><h4><a href="<?php echo U('Article/detail?id='.$vo['id']);?>"><?php echo ($vo["borrow_name"]); ?></a></h4>
            	<ul>
                	<li>借款金额:<span>￥<?php echo ($vo["borrow_money"]); ?></span></li>
                    <li>年利率:<span><?php echo ($vo["borrow_interest_rate"]); ?>%</span></li>
                	<li>借款期限:<span><?php echo ($vo["borrow_duration"]); ?></span> <s:if test="%{#finance.isDayThe ==1}">个月</s:if><span><!-- <s:else>天</s:else> --></span></li>
                	<li>发标时间:<span><?php echo (date('Y-m-d',$vo["add_time"])); ?></span></li>
                	<li><p>借款类型:</p><p><img src="/Public/Home/images/icon1.png" width="21" height="24" /></p><p><img src="/Public/Home/images/icon2.png" width="21" height="24" /></p>
                	</li>
                	<li><p>借款进度:</p><span class="out"><span class="in" style="width:<?php echo ($vo['has_borrow']/$vo['borrow_money']*100); ?>%;"><!-- <?php echo ($vo['has_borrow']/$vo['borrow_money']*100); ?>% --></span></span></li>
                	<li>完成投标:<span><?php echo ($vo["has_borrow"]); ?></span></li>
                	<li>&nbsp;&nbsp; 
                	   <?php if($vo["borrow_status"] == 0): ?><a  href="<?php echo U('Finance/invest?id='.$vo['id']);?>"><img alt="" src="/Public/Home/images/invest.png"></a>
                	    <?php elseif($vo["borrow_status"] == 2): ?>
                	    <img alt="" src="/Public/Home/images/checking.png">
                	     <?php elseif($vo["borrow_status"] == 4): ?>
                	    <img alt="" src="/Public/Home/images/checkref.png">
                	    <?php elseif($vo["borrow_status"] == 6): ?>
                	    <img alt="" src="/Public/Home/images/returning.png">
                	     <?php elseif($vo["borrow_status"] == 7): ?>
                	     <img alt="" src="/Public/Home/images/full.png"><?php endif; ?>
                	</li>
                </ul><?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo U('Finance/index');?>" class="more">点击查看更多</a>
            </div>
            
            <!-- 网站行业动态 start -->
            <div class="cont_bot_r">
            	<dl>
                	<dt><span>网站公告</span> <a href="<?php echo U('Article/lists?category='.get_category_name(2));?>" class="more"></a></dt>
                	 <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><!-- class="current" -->
                         <dd><a href="<?php echo U('Article/detail?id='.$list['id']);?>"><?php echo ($list["title"]); ?></a><span><?php echo ($list1["date"]); ?></span></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                </dl>
                <dl>
                	<dt><span>行业动态</span> <a href="<?php echo U('Article/lists?category='.get_category_name(40));?>" class="more"></a></dt>
                     <?php if(is_array($lists1)): $i = 0; $__LIST__ = $lists1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list1): $mod = ($i % 2 );++$i;?><dd> <a href="<?php echo U('Article/detail?id='.$list1['id']);?>"><?php echo ($list1["title"]); ?></a><span><?php echo ($list1["date"]); ?></span></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                </dl>

                <dl>
                    <dt><span>媒体新闻</span> <a href="<?php echo U('Article/lists?category='.get_category_name(43));?>" class="more"></a></dt>
                     <?php if(is_array($lists3)): $i = 0; $__LIST__ = $lists3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list3): $mod = ($i % 2 );++$i;?><dd> <a href="<?php echo U('Article/detail?id='.$list3['id']);?>"><?php echo ($list3["title"]); ?></a><span><?php echo ($list3["date"]); ?></span></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                </dl>
          <!-- 网站行业动态 end -->
            </div>
        </div>
        <!--content_bottom end-->
    </div>
	<!--content end-->

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