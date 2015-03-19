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
	   <!--banner start-->
<div class="banner_out">
	<div class="banner">
		<!--banner图-->
		<ul style="z-index: 0">
			<li style="z-index: 1;background: url(/Public/Home/images/banner1.png) no-repeat center top;"></li>
			<li style="background: url(/Public/Home/images/banner2.png) no-repeat center top;"></li>
			<li style="background: url(/Public/Home/images/banner3.png) no-repeat center top;"></li>
		</ul>
		<!--序号点-->
		<ol style="z-index: 2">
			<li class="current"></li>
			<li></li>
			<li></li>
		</ol>
		<!--爆竹-->
		<!--<div class="baozhu_l">
			<img src="/Public/Home/images/baozhu.gif" />
		</div>
		<div class="baozhu_r">
			<img src="/Public/Home/images/baozhu.gif" />
		</div>-->
	</div>
</div>
<!--banner end--> <!--content start-->
<div class="cont_out">
	<div class="cont">
		<!--content_top start-->
		<div class="cont_top">
			<!--网站公告-->
			<!--<div class="wzgg">
				<dl>
					<dt>网站公告：</dt>
					<?php if(is_array($lists3)): $i = 0; $__LIST__ = $lists3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list3): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo U('Article/detail?id='.$list3['id']);?>"><?php echo ($list3["title"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
				</dl>
				<a href="<?php echo U('Article/lists?category='.get_category_name(43));?>" class="more">更多...</a>
			</div>					-->
			<!--网站公告  结束-->
			
			<!--top start-->
			<div class="cont_top_con">
				<dl>
					<dt><h2></a><a href="<?php echo U('Home/Finance/index');?>">理财投资</a></h2></dt>
					<dd>投资理财 成为理财人，通过主动投标或加入U计划将资金进行投资，最高获得12%-18%的预期年化收益。</dd>
				</dl>
				<dl class="rongzi">
					<dt><h2><a href="<?php echo U('Home/Borrow/index');?>">融资借款</a></h2></dt>
					<dd>如果你现在需要资金周转，可以向我们提交借款申请，通过考察、资料审核、办理借款手续后手续后，可以及时解决资金问题。</dd>
				</dl>
				<dl class="safety">
					<dt><h2><a href="<?php echo U('Home/Newhelp/safetypromise');?>">安全保障</a></h2></dt>
					<dd>我们的客户来自于公司业务一手客户及银行合作推荐客户，借助于银行大数据风控团队及自身专业的风控体系，更有第三方担保公司兜底，让您放心投资。</dd>
				</dl>
				<dl class="helpCenter">
					<dt><h2><a href="<?php echo U('Home/Newhelp/borrowhelp');?>">新手指引</a></h2></dt>
					<dd>注册成为会员，充值后选择优质借款项目进行投资，将闲散资金借给有需要的人，获得年化12%-18%的投资收益。</dd>
				</dl>
			</div>
			<!--top end-->
		</div>
		<!--content_top end-->

		<!--content_bottom start-->
		<div class="cont_bot">
			<!-- 网站行业动态 start -->
			<div class="cont_bot1">
				<h2><span>行业动态  | 媒体新闻</span></h2>
				<div class="cont_bot1_con">
					<div class="cont_bot1_con01">
						<div class="cont_bot1_con01_in">
							<h3>累计成交额</h3>
							<p style="background: url(/Public/Home/images/money.png) no-repeat left top;">100,0000</p>
						</div>
						<div class="cont_bot1_con01_in">
							<h3>累计为客户挣取收益</h3>
							<p style="background: url(/Public/Home/images/human.png) no-repeat left top;">60,0000</p>
						</div>
					</div>
					<!--<dl>
			                	<dt><span></span> <a href="<?php echo U('Article/lists?category='.get_category_name(2));?>" class="more"></a></dt>
			                	 <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><!-- class="current" 
			                         <dd><a href="<?php echo U('Article/detail?id='.$list['id']);?>"><?php echo ($list["title"]); ?></a><span><?php echo (date('Y-m-d',$list["create_time"])); ?></span></dd><?php endforeach; endif; else: echo "" ;endif; ?>
			                </dl>-->

					<dl>
						<dt>
							<span>网站公告</span> <a
								href="<?php echo U('Article/lists?category='.get_category_name(43));?>"
								class="more">更多</a>
						</dt>
						<?php if(is_array($lists3)): $i = 0; $__LIST__ = $lists3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list3): $mod = ($i % 2 );++$i;?><dd>
							<a href="<?php echo U('Article/detail?id='.$list3['id']);?>"><?php echo ($list3["title"]); ?></a><span><?php echo (date('Y-m-d',$list1["create_time"])); ?></span>
						</dd><?php endforeach; endif; else: echo "" ;endif; ?>

					</dl>

					<dl>
						<dt>
							<span>行业资讯</span> <a href="<?php echo U('Article/lists?category='.get_category_name(40));?>"class="more">更多</a>
						</dt>
						<?php if(is_array($lists1)): $i = 0; $__LIST__ = $lists1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list1): $mod = ($i % 2 );++$i;?><dd>
							<a href="<?php echo U('Article/detail?id='.$list1['id']);?>"><?php echo ($list1["title"]); ?></a><span><?php echo (date('Y-m-d',$list1["create_time"])); ?></span>
						</dd><?php endforeach; endif; else: echo "" ;endif; ?>
					</dl>

				</div>
			</div>
			<!-- 网站行业动态 end -->

			<!--投资列表 start-->
			<div class="cont_bot2">
				<h2><a href="<?php echo U('Finance/index');?>">投资列表</a></h2>
				<div class="cont_bot2_con">
					<?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="cont_bot2_con_in">
						<h3><a href="<?php echo U('borrow/detail?id='.$vo['id']);?>"><?php echo ($vo["borrow_name"]); ?></a></h3>
						<p style="height: 30px;font-size: 14px;line-height: 30px;">借款金额</p>
						<p style="color: #f56627;font-weight: bold;font-size: 24px;line-height: 30px;">￥<?php echo ($vo["borrow_money"]); ?></p>
						
						<ul>
							<li><p style="font-size: 16px;"><?php echo ($vo["borrow_interest_rate"]); ?>%</p><p>年化收益率</p></li>
							<li><p style="font-size: 16px;"><?php echo ($vo["borrow_duration"]); ?>个月</p><p>期限</p></li>
							<li style="text-align: center;padding: 5px 0 0;height: 45px;"><img
							src="/Public/Home/images/bao.png" /><img
							src="/Public/Home/images/jian.png" /></li>
						</ul>
						
						<div class="jdt">
							<p>进度</p>
							<span class="out"><span class="in" style="width:<?php echo ($vo['has_borrow']/$vo['borrow_money']*100); ?>%;line-height:18px;color:white;text-align: center;"><?php echo ($vo['has_borrow']/$vo['borrow_money']*100); ?>%</span></span>
						</div>
						<div class="fb_date endTime"  value="<?php echo ($vo['djtime']); ?>"></div>
						<div class="fb_date">发标时间：<?php echo (date('Y-m-d',$vo['add_time'])); ?></div>
						
						<div class="button">
							<?php if($vo["borrow_status"] == 2): if($login == 1): ?><a  href="<?php echo U('Finance/invest?id='.$vo['id']);?>"><img  src="/Public/Home/images/toubiao_260x40.png"/></a>
                                  <?php elseif($login == 0): ?>
                                    <a class="ajax-get"  href="<?php echo U('Finance/invest?id='.$vo['id']);?>"><img  src="/Public/Home/images/toubiao_260x40.png"/><?php endif; ?>
	                          <?php elseif($vo["borrow_status"] == 0): ?>
	                          <img alt="" src="/Public/Home/images/shenhe_260x40.png" />
	                           <?php elseif($vo["borrow_status"] == 4): ?>
	                          <img alt="" src="/Public/Home/images/fushen_260x40.png" />
	                          <?php elseif($vo["borrow_status"] == 6): ?>
	                          <img alt="" src="/Public/Home/images/huankuan_260x40.png" />
	                           <?php elseif($vo["borrow_status"] == 7): ?>
	                           <img alt="" src="/Public/Home/images/manbiao_260x40.png"  /><?php endif; ?>
						</div>					
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<a href="<?php echo U('Finance/index');?>" class="more">查看更多</a>
			</div>
			<!--投资列表 end-->

			<!--合作伙伴 start-->
			<div class="partner">
				<h2><a href="javascript:;">合作伙伴</a></h2>
				<ul>
					<li><a href="http://www.ccb.com" target="_blank"><img
							src="/Public/Home/images/jsyh.jpg" width="122px" height="45" /></a></li>
					<li><a href="http://www.gzcb.com.cn" target="_blank"><img
							src="/Public/Home/images/gfyh.jpg" width="122px" height="45" /></a></li>
					<li><a href="http://www.rongerong.com/" target="_blank"><img
							src="/Public/Home/images/rer.jpg" width="122px" height="45" /></a></li>
					<li><a href="http://www.singpao.com/" target="_blank"><img
							src="/Public/Home/images/xgcb.jpg" width="122px" height="45" /></a></li>
				</ul>
			</div>
			<!--合作伙伴 end-->

			<!--友情链接  start-->
			<!--<div class="yqlj">
		        	<h2>友情链接</h2>
		        	<ul>
		        		<li><a href="http://www.ccb.com" target="_blank"><img src="/Public/Home/images/jsyh.jpg" width="122px" height="45"/></a></li>
		        		<li><a href="http://www.jsbchina.cn/" target="_blank"><img src="/Public/Home/images/js.jpg" width="122px" height="45"/></a></li>
		        		<li><a href="http://www.cib.com.cn" target="_blank"><img src="/Public/Home/images/xingyeyinhang.jpg" width="122px" height="45"/></a></li>
		        		<li><a href="http://www.gzcb.com.cn" target="_blank"><img src="/Public/Home/images/gfyh.jpg" width="122px" height="45"/></a></li>
		        		<li><a href="http://www.rongerong.com/" target="_blank"><img src="/Public/Home/images/rer.jpg" width="122px" height="45"/></a></li>
		        		<li><a href="http://www.singpao.com/" target="_blank"><img src="/Public/Home/images/xgcb.jpg" width="122px" height="45"/></a></li>
		        	</ul>
		        </div>-->
			<!--友情链接  end-->

		</div>
		<!--content_bottom end-->
	</div>
</div>
<!--content end--> <!-- <?php echo hook('indexAliPlay');?> --> <script
	type="text/javascript" src="/Public/Admin/js/common.js"></script> 
	  <script language="JavaScript">
    function GetRTime(){
      $('.endTime').each(function(){
          var endtime=$(this).attr('value');
          var nowtime = new Date().getTime(); 
          var leftTime=endtime-nowtime/1000; 
          var seconds =leftTime;
          var minutes = Math.floor(seconds/60);
          var hours = Math.floor(minutes/60);
          var days = Math.floor(hours/24);
          var CDay= days;
          var CHour= hours % 24;
          var CMinute= minutes % 60;
          var CSecond= Math.floor(seconds%60);
		  var aa=$(this).attr('align')

          if (aa==6 ||aa==7) {

               $(this).html("<h4><strong>00:00:00</strong></h4>");

          }else{
                if (leftTime>0) {
                   $(this).html("<strong>"+CDay+"</strong>天<strong>"+CHour+"</strong>时<strong>"+CMinute+"</strong>分<strong>"+CSecond+"</strong>秒");
                }else{
                   $(this).html("<h4><strong>00:00:00</strong></h4>");
                }

          }
          
      });  
       setTimeout("GetRTime()",1000); 
    }
  window.onload=GetRTime;
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