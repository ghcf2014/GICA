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
                    <li class="current"><a class="current" href="<?php echo U('Index');?>">个人中心</a></li>
                    <li><a href="<?php echo U('Userinfo/userselfset');?>">基本认证</a></li>
                   <!--  <li>融资认证</li> -->
                </ul>  
                
                <ul>
                    <li>安全设置</li>
                    <li><a href="<?php echo U('Userinfo/userchagerwithdraw');?>">充值提现</a></li>
                    <li><a href="<?php echo U('Friends/friends');?>">好友管理</a></li>
                    <li><a href="<?php echo U('System/usermailindex');?>">通知管理</a></li>
                </ul> 
                 
                <ul>
                    <li>借款管理</li>
                    <li><a href="<?php echo U('Invest/borrowmanager');?>">我的借款</a></li>
                    <li><a href="<?php echo U('Finance/borrowloanstatis');?>">借款统计</a></li>
                    <li><a href="<?php echo U('Invest/borrowmanager');?>">还款明细</a></li>
                </ul>  
                
                <ul>
                    <li>投资管理</li>
                    <li><a href="<?php echo U('Invest/investindex');?>">我的投资</a></li>
                    <li><a href="<?php echo U('Finance/financestatis');?>">投标统计</a></li>
                    <li>关注投标</li>
                    <li>自动投标</li>
                </ul>  
                
                <ul class="ul_last">
                    <li>债权管理</li>
                    <li>我的债权</li>
                </ul>  
            </div>
            
 <!--zh_cont_r-->

            <div class="zh_cont_r">
           	  	<h3>当前位置>个人中心</h3>
                <dl>
                    	<dt><div class="img">
                            <?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["logo_url"] == ''): ?><img src="/Public/static/rzg_images/default-img.jpg" width="200" height="200">
                                <?php elseif($vo["logo_url"] != ''): ?>
                                        <img src="Uploads/<?php echo ($vo["logo_url"]); ?>" width="200" height="200" /><?php endif; endforeach; endif; else: echo "" ;endif; ?><p>
                             <a id="test2">更换图像</a></p>
                             </div>
                        </dt>
                    <dd>
                    	<p>用户名称：<span style="color:#66ccfb;"><?php echo get_username();?></span></p>
                    	<p>会员积分：<span>98分</span></p>
                    	<p>注册时间：<span><?php echo (date('Y-m-d',$vo["reg_time"])); ?></span></p>
                    	<p>所属客服：<span>客服-丫丫</span></p>
                    	<p>登录时间：<span><?php echo (date('Y-m-d H:i:s',$vo["last_login_time"])); ?></span></p>
                    	<p>站内信：<span>（<a href="#"><font color="#66ccfb;">5</font></a>）</span>条</p>
                    	<p>登录IP:<span><?php echo get_client_ip();?></span></p>
                    </dd>
                </dl>
                <ul class="ul01">
                	<li>认证管理：</li>
                    <li><input type="button" class="btn" value="邮箱"></li>
                    <li><input type="button" class="btn" value="手机"></li>
                    <li><input type="button" class="btn" value="身份证"></li>
                    <li><input type="button" class="btn" value="银行卡"></li>
                    <li><input type="button" class="btn" value="VIP"></li>
                </ul>
                
                <ul class="ul02">
                	<li class="ul02_li01">会员续费</li>
                	<li><a href="<?php echo U('Home/Borrow/index');?>">我要借款</a></li>
                	<li><a href="<?php echo U('System/recharge');?>">我要充值</a></li>
                	<li>我要还款</li>
                	<li><a href="<?php echo U('System/withdrawdeposit');?>">我要提现</a></li>
                	<li>待收金额</li>
                </ul>
                <h4>账户详情：</h4>
                <div class="zh_cont_r_bot">
                	<p>账户总汇</p>
                    <ul>
                    	<li><p>账户总额：￥</p><span>485740.00</span></li>
                    	<li><p>可用余额：￥</p><span>485740.00</span></li>
                    	<li><p>冻结金额：￥</p><span>0.00</span></li>
                    	<li><p>总收益：￥</p><span>0.00</span></li>
                    	<li><p>利息收益：￥</p><span>0.00</span></li>
                    	<li><p>其它收益：￥</p><span>0.00</span></li>
                    </ul>
                </div>
                
                <div class="zh_cont_r_bot">
                	<p>投资总汇</p>
                    <ul>
                    	<li><p>账户总额：￥</p><span>485740.00</span></li>
                    	<li><p>可用余额：￥</p><span>485740.00</span></li>
                    	<li><p>冻结金额：￥</p><span>0.00</span></li>
                    	<li><p>总收益：￥</p><span>0.00</span></li>
                    	<li><p>利息收益：￥</p><span>0.00</span></li>
                    	<li><p>其它收益：￥</p><span>0.00</span></li>
                    </ul>
                </div>
                
                <div class="zh_cont_r_bot">
                	<p>借款总汇</p>
                    <ul>
                    	<li><p>账户总额：</p><span>￥485740.00</span></li>
                    	<li><p>可用余额：</p><span>￥485740.00</span></li>
                    	<li><p>冻结金额：</p><span>￥0.00</span></li>
                    	<li><p>总收益：</p><span>￥0.00</span></li>
                    	<li><p>利息收益：</p><span>￥0.00</span></li>
                    	<li><p>其它收益：</p><span>￥0.00</span></li>
                    </ul>
                </div>
                
                <div class="zh_cont_r_bot last">
                	 <!--<p>借款总汇</p>
                    <ul>
                    	<li><p>最近还款日：</p><span>无</span></li>
                    	<li><p>最近还款金额：￥</p><span>0.00</span></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
	<!--content end-->
    
								
		
		 <!-- 引用底部公共部分  -->
		<script type="text/javascript" src="script/jquery.shove-1.0.js"></script>
		<script type="text/javascript"src="script/jbox/jquery.jBox-2.3.min.js"></script>
		<script type="text/javascript" src="script/jbox/jquery.jBox-zh-CN.js"></script>

 <!--<script type="text/javascript">
 function validate(){
   document.getElementByIdx_x('myform').submit();
 }
 window.load=validate();
 </script>-->
<script>
$('#test1').on('click', function(){
    layer.prompt({title: '随便上传个东东，并确认',type: 2}, function(file){   
    	$.ajax({
type: "post",
url: "<?php echo U('Member/index/test');?>",
data: "all_school=" + all_school,
beforeSend: function() {
	alert(file);
},
error: function(request) {
},
success: function(data) {
}
});
    	  
});
});
</script>
<script>
	$('#test2').on('click', function(){
		// layer.msg('正在施工，无法更换')
    $.layer({
        type: 1,
        title: [
            '图片上传', 
            'background:#2B2E37; height:40px; color:#fff; border:none;' //自定义标题样式
        ],  //不显示默认标题栏
        offset : ['250px', ''],
        shade: [1], //不显示遮罩
        area: ['260px', '100px'],
        page: {html: '<form action="/index.php?s=/Member/Index/upload" enctype="multipart/form-data" method="post"><input type="file"  name="filename" value=""><input  type="submit"  value="上传"></from>'},
    });
 });

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