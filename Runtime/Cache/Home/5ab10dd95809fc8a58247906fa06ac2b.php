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
	 

    <!--content start-->
    <div class="jk_cont_out">
        <div class="jk_cont">
            <div class="jk_cont_in">
                <h2><span>我要借款</span></h2>
                <!--模块1-->
                <div class="jk_cont_in_cont">
                    <div class="jk_cont_in_cont_in">
                        <h3 class="h3_01">信用标</h3>
                        <h4>申请条件</h4>
                        <ul>
                            <li>21-25岁的大陆公民</li>
                            <li>手机绑定</li>
                            <li>借出信用大于20分</li>
                            <li>申请额度大于2000元</li>
                        </ul>
                        <h4>申请资料</h4>
                        <ul>
                            <li>身份证</li>
                          
                        </ul>

                        <?php if(($session == true)): ?><div class="jk_btn"><a href="<?php echo U('Borrow/circulation?type=1');?>">立即申请</a></div>
                        
                        <?php else: ?>
                            <div class="jk_btn" style="background:#5C5D63"><a href="<?php echo U('Home/User/login?type=1');?>">立即申请</a></div><?php endif; ?>  
                        
                    </div>
                </div>
                
                <!--模块2-->
                <div class="jk_cont_in_cont">
                    <div class="jk_cont_in_cont_in">                    
                        <h3 class="h3_02">净值标</h3>
                        <h4>申请条件</h4>
                        <ul>
                            <li>21-25岁的大陆公民</li>
                            <li>手机绑定</li>
                            <li>有固定工作</li>
                        </ul>
                        <h4>申请资料</h4>
                        <ul>
                            <li>身份证</li>
                            <li>房产证</li>
                       
                        </ul>
                        <?php if(($session == true)): ?><div class="jk_btn"><a href="<?php echo U('Borrow/circulation?type=2');?>">立即申请</a></div>
                        
                        <?php else: ?>
                            <div class="jk_btn" style="background:#5C5D63"><a href="<?php echo U('Home/User/login?type=2');?>">立即申请</a></div><?php endif; ?>
                    </div>
                </div>
                
                <!--模块3-->
                <div class="jk_cont_in_cont">
                    <h3 class="h3_03">秒还标</h3>
                    <h4>申请条件</h4>
                    <ul>
                        <li>21-50岁的大陆公民</li>
                        <li>借出信用大于20分</li>
                        <li>有固定工作</li>
                    </ul>
                    <h4>申请资料</h4>
                    <ul>
                        <li>身份证</li>
                   
                  
                    </ul>
                    <?php if(($session == true)): ?><div class="jk_btn"><a href="<?php echo U('Borrow/circulation?type=3');?>">立即申请</a></div>
                        
                    <?php else: ?>
                        <div class="jk_btn" style="background:#5C5D63"><a href="<?php echo U('Home/User/login?type=3');?>">立即申请</a></div><?php endif; ?>
                </div>
                
                <!--模块4-->
                <div class="jk_cont_in_cont" style="border-bottom:0">
                    <div class="jk_cont_in_cont_in">               
                        <h3 class="h3_04">担保标</h3>
                        <h4>申请条件</h4>
                        <ul>
                            <li>21-50岁的大陆公民</li>
                            <li>手机绑定</li>
                            <Li>借出信用大于20分</Li>
                        </ul>
                        <h4>申请资料</h4>
                        <ul>
                            <li>身份证</li>
                            <li>房产证</li>
                      
                        </ul>
                        <?php if(($session == true)): ?><div class="jk_btn"><a href="<?php echo U('Borrow/circulation?type=4');?>">立即申请</a></div>
                        
                        <?php else: ?>
                            <div class="jk_btn" style="background:#5C5D63"><a href="<?php echo U('Home/User/login?type=4');?>">立即申请</a></div><?php endif; ?>
                    </div>
                </div>
                
                <!--模块5-->
                <div class="jk_cont_in_cont" style="border-bottom:0">
                    <div class="jk_cont_in_cont_in">
                        <h3 class="h3_05">抵押标</h3>
                        <h4>申请条件</h4>
                        <ul>
                            <li>21-25岁的大陆公民</li>
                            <li>借出信用大于20分</li>
                            <li>有固定工作</li>
                        </ul>
                        <h4>申请资料</h4>
                        <ul>
                            <li>身份证</li>
                            <li>抵押产物复印件</li>
                           
                        </ul>
                        <?php if(($session == true)): ?><div class="jk_btn"><a href="<?php echo U('Borrow/circulation?type=5');?>">立即申请</a></div>
                        
                        <?php else: ?>
                            <div class="jk_btn" style="background:#5C5D63"><a href="<?php echo U('Home/User/login?type=5');?>">立即申请</a></div><?php endif; ?>
                    </div>
                </div>

                <!--模块6-->
                <div class="jk_cont_in_cont" style="border-bottom:0">
                    <h3 class="h3_06">实地考察标</h3>
                    <h4>申请条件</h4>
                    <ul>
                        <li>21-25岁的大陆公民</li>
                        <li>手机绑定</li>
                        <li>有固定工作</li>
                    </ul>
                    <h4>申请资料</h4>
                    <ul>
                        <li>身份证</li>
                        <li>各项台帐资料</li>
                        
                    </ul>
                    <?php if(($session == true)): ?><div class="jk_btn"><a href="<?php echo U('Borrow/circulation?type=6');?>">立即申请</a></div>
                        
                        <?php else: ?>
                            <div class="jk_btn" style="background:#5C5D63"><a href="<?php echo U('Home/User/login?type=6');?>">立即申请</a></div><?php endif; ?>
                </div>
                
            </div>
        </div>
    </div>
        
    <!--content end-->

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