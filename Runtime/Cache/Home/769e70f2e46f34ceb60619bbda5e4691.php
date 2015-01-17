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
	<!--header start-->
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
	 

     <!--banner start-->
     <div class="banner_out">	     
	    <div class="banner">
	        <ul style="z-index:0">
	           
	            <li style="z-index:1"><img src="/Public/Home/images/banner_pic5.jpg" width="1600" height="339" /></li>
	            <li><img src="/Public/Home/images/banner_pic6.jpg" width="1600" height="339" /></li>
	            <li><img src="/Public/Home/images/banner_pic8.jpg" width="1600" height="339" /></li>
	            
	            <li><img src="/Public/Home/images/banner_pic4.jpg" width="1600" height="339" /></li>
	            
	        </ul>
	        <ol style="z-index:2">
	        	<li class="current">1</li>
	        	<li>2</li>
	        	<li>3</li>
	            <li>4</li>
	        </ol>
	    </div>
	</div>
    <!--banner end-->

	<!--content start-->
	<div class="cont_out">		
		  <div class="cont">
		    	<!--content_top start-->
		    	<div class="cont_top">
		        	<dl>
		            	<dt>
		                	<h2><a href="<?php echo U('Home/RichFunds/index');?>">理财投资</a></h2>
		                	<p>了解我们</p>
		                </dt>
		                <dd>投资理财 成为理财人，通过主动投标或加入U计划将资金进行投资，最高获得12%-18%的预期年化收益。 </dd>
		            </dl>
		            <dl class="rongzi">
		            	<dt>
		                	<h2><a href="javascript:;">融资借款</a></h2>
		                	<p>帮助您解决所有问题</p>
		                </dt>
		                <dd>如果你现在需要资金周转，可以向我们提交借款申请，通过考察、资料审核、办理借款手续后手续后，可以及时解决资金问题。 </dd>
		            </dl>
		            <dl class="safety">
		            	<dt>
		                	<h2><a href="<?php echo U('Home/Newhelp/compare_tools');?>">安全保障</a></h2>
		                	<p>100%本息担保</p>
		                </dt>
		                <dd>我们的客户来自于公司业务一手客户及银行合作推荐客户，借助于银行大数据风控团队及自身专业的风控体系，更有第三方担保公司兜底，让您放心投资。</dd>
		            </dl>
		            <dl  class="helpCenter">
		            	<dt>
		                	<h2><a href="#">新手指引</a></h2>
		                	<p>了解我们</p>
		                </dt>
		                <dd>注册成为会员，充值后选择优质借款项目进行投资，将闲散资金借给有需要的人，获得年化12%-18%的投资收益。</dd>
		            </dl>
		        </div>
		        <!--content_top end-->
		        
		        <!--content_bottom start-->
		        <div class="cont_bot">
		        	<div class="cont_bot_l">
		           	  <h2><span style="display: inline-block;width: auto;height: 41px;border-bottom: 3px solid #66ccfb;">投资列表</span></h2>
		           	     <?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><h4><a href="<?php echo U('borrow/detail?id='.$vo['id']);?>"><?php echo ($vo["borrow_name"]); ?></a></h4>
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
		                	   <?php if($vo["borrow_status"] == 2): ?><a  href="<?php echo U('Finance/invest?id='.$vo['id']);?>"><img alt="" src="/Public/Home/images/invest.png"></a>
		                	    <?php elseif($vo["borrow_status"] == 0): ?>
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
		                         <dd><a href="<?php echo U('Article/detail?id='.$list['id']);?>"><?php echo ($list["title"]); ?></a><span><?php echo (date('Y-m-d',$list["create_time"])); ?></span></dd><?php endforeach; endif; else: echo "" ;endif; ?>
		                </dl>
		                
		                <dl>
		                	<dt><span>行业动态</span> <a href="<?php echo U('Article/lists?category='.get_category_name(40));?>" class="more"></a></dt>
		                     <?php if(is_array($lists1)): $i = 0; $__LIST__ = $lists1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list1): $mod = ($i % 2 );++$i;?><dd> <a href="<?php echo U('Article/detail?id='.$list1['id']);?>"><?php echo ($list1["title"]); ?></a><span><?php echo (date('Y-m-d',$list1["create_time"])); ?></span></dd><?php endforeach; endif; else: echo "" ;endif; ?>
		                </dl>
		
		                <dl>
		                    <dt><span>媒体新闻</span> <a href="<?php echo U('Article/lists?category='.get_category_name(43));?>" class="more"></a></dt>
		                     <?php if(is_array($lists3)): $i = 0; $__LIST__ = $lists3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list3): $mod = ($i % 2 );++$i;?><dd> <a href="<?php echo U('Article/detail?id='.$list3['id']);?>"><?php echo ($list3["title"]); ?></a><span><?php echo (date('Y-m-d',$list1["create_time"])); ?></span></dd><?php endforeach; endif; else: echo "" ;endif; ?>
		                    
		                </dl>
		          <!-- 网站行业动态 end -->
		            </div>
		        </div>
		        <!--content_bottom end-->
		    </div>
    </div>
	<!--content end-->
    <?php echo hook('indexAliPlay');?>

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