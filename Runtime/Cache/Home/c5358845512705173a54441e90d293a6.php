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
	 
<!-- 引用头部公共部分 -->
	
    
    
<!-- content start -->
<div class="tz_cont_out">	
  <div class="tz_cont" id="tz_cont">
      <!--tz_cont_head01-->
      <ul class="tz_cont_head01">
          <li ><a class="current" href="<?php echo U('Finance/index?type=0#tz_cont');?>">全部借款</a></li>
          <li><a href="<?php echo U('Finance/index?order=add_time#tz_cont');?>">最近借款</a></li>
          <li><a href="<?php echo U('Finance/index?order=borrow_status#tz_cont');?>">成功借款</a></li>
          <li class="tz_cont_head01_li_last">
          <div class="search-form fr cf">
             <div class="sleft">
                <input type="text" name="nickname" class="search-input" value="<?php echo I('nickname');?>" placeholder="请输入项目名称">
                <a class="sch-btn" href="javascript:;" id="search" url="<?php echo U('index');?>"><i class="btn-search"></i></a>
              </div>
          </div>
            </li>            
        </ul>
<!--信用标 净值标 秒还标 担保标 抵押标-->
      <!--tz_cont_head02-->
        <ul class="tz_cont_head02">
          <li class="tz_cont_head02_li01">标的类型:</li>
            <li class="current"><a href="<?php echo U('Finance/index?type=1#tz_cont');?>"><img src="/Public/Home/images/xin.png"/></a></li>
            <li><a href="<?php echo U('Finance/index?type=2#tz_cont');?>"><img src="/Public/Home/images/jing.png"/></a></li>
            <li><a href="<?php echo U('Finance/index?type=3#tz_cont');?>"><img src="/Public/Home/images/miao.png"/></a></li>
            <li><a href="<?php echo U('Finance/index?type=4#tz_cont');?>"><img src="/Public/Home/images/bao.png"/></a></li>
            <li><a href="<?php echo U('Finance/index?type=5#tz_cont');?>"><img src="/Public/Home/images/ya.png"/></a></li>
        </ul>

      <!--tz_cont_head03-->       
        <ul class="tz_cont_head03">
          <li class="tz_cont_head03_title">项目</li>
          <li class="li02">借款金额</li>
          <li>年利率</li>
          <li>期限</li>
          <li>保障方式</li>
          <li class="li_jd">进度</li>
          <li>发布时间</li>
          <li>立即投标</li>
          
        </ul>
        <div id="top-alert" class="alert alert-error" style="display: none;">
            <button class="close fixed" style="margin-top: 4px;">&times;</button>
            <div class="alert-content">这是内容</div>
        </div>
        <?php if(is_array($list2)): $k = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><!--tz_cont_head04-->  
            <ul class="tz_cont_head04">
                <li class="tz_cont_head03_title"><a href="<?php echo U('Borrow/detail?id='.$vo['id']);?>"><?php echo ($vo["borrow_name"]); ?></a></li>
                <li class="li02"><span>￥</span><?php echo ($vo["borrow_money"]); ?></li>
                <li><?php echo ($vo["borrow_interest_rate"]); ?>%</li>
                <li><?php echo ($vo["borrow_duration"]); ?>月</li>
                <li>本息保护</li>
                <li class="li_jd"><div id="jdbox_<?php echo ($k); ?>" class="jdbox"><?php echo ($vo['has_borrow']/$vo['borrow_money']*100); ?></div></li>
                <li><?php echo (date('Y-m-d',$vo["add_time"])); ?></li>
                <li class="li_last">
                        <?php if($vo["borrow_status"] == 2): if($login == 1): ?><a  href="<?php echo U('Finance/invest?id='.$vo['id']);?>"><img  src="/Public/Home/images/toubiao.png" style="width:80px;height:30px;" /></a>
                                  <?php elseif($login == 0): ?>
                                    <a class="ajax-get"  href="<?php echo U('Finance/invest?id='.$vo['id']);?>"><img  src="/Public/Home/images/toubiao.png" style="width:80px;height:30px;" /><?php endif; ?>
                          <?php elseif($vo["borrow_status"] == 0): ?>
                          <img alt="" src="/Public/Home/images/shenhe.png" style="width:80px;height:30px;" />
                           <?php elseif($vo["borrow_status"] == 4): ?>
                          <img alt="" src="/Public/Home/images/fushen.png" style="width:80px;height:30px;" />
                          <?php elseif($vo["borrow_status"] == 6): ?>
                          <img alt="" src="/Public/Home/images/huankuan.png" style="width:80px;height:30px;" />
                           <?php elseif($vo["borrow_status"] == 7): ?>
                           <img alt="" src="/Public/Home/images/manbiao.png" style="width:80px;height:30px;" /><?php endif; ?>
                      </li>
	        </ul><?php endforeach; endif; else: echo "" ;endif; ?>
                    <?php if($k == null): ?><ul class="tz_cont_head04">
                                <li style="width: 100%;text-align: center;">亲！找不到与“<?php echo I('nickname');?>”信息相关的内容。╮(╯_╰)╭</li>
                            </ul><?php endif; ?>
        <!--tz_cont_bottom-->
        <!-- <ul class="tz_cont_bottom">
          <li>首页</li>
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>...</li>
          <li>尾页</li>
          <li><input type="text" value="1" class="txt"></li>
          <li><input type="button" class="btn" value="go"></li>
        </ul>  -->  
        <div class="page"> <?php echo ($page); ?></div>
    </div>
  </div>
  <!--content end-->
    <script src="/Public/static/thinkbox/jquery.thinkbox.js"></script>
  <script type="text/javascript">
  //搜索功能
  $("#search").click(function(){
    var url = $(this).attr('url');
        var query  = $('.search-form').find('input').serialize();
        query = query.replace(/(&|^)(\w*?\d*?\-*?_*?)*?=?((?=&)|(?=$))/g,'');
        query = query.replace(/^&/g,'');
        if( url.indexOf('?')>0 ){
            url += '&' + query;
        }else{
            url += '?' + query;
        }
    window.location.href = url;
  });
  //回车搜索
  $(".search-input").keyup(function(e){
    if(e.keyCode === 13){
      $("#search").click();
      return false;
    }
  });
    //导航高亮
    highlight_subnav('<?php echo U('User/index');?>');
  </script>
  <script type="text/javascript" src="/Public/Admin/js/common.js"></script>
  <script type="text/javascript">
//验证码刷新
      // $(document)
      // $("#ajax1").click(function(){
      //   var self = $(this);
      //   $.post(self.attr("action"), self.serialize(), success, "json");
      //   return false;

      //   function success(data){
      //     if(data.status){
      //       window.location.href = data.url;
      //     } else {
      //       self.find(".Validform_checktip").text(data.info);
      //       // layer.alert(data.info);

      //     }
      //   }
      // });
</script>

<script type="text/javascript">
window.onload = function(){
  var object1 = document.getElementById('jdbox_1')
  var object2 = document.getElementById('jdbox_2')
  var object3 = document.getElementById('jdbox_3')
  var object4 = document.getElementById('jdbox_4')
  var object5 = document.getElementById('jdbox_5')
  var object6 = document.getElementById('jdbox_6')
  var object7 = document.getElementById('jdbox_7')
  var object8 = document.getElementById('jdbox_8')
  function loadImg1 (data){
      var i = 0;
      setInterval(function(){
        i++
        if(i>data){
          i=data
        }
        var imgLeft = -(i*44+(i*10))+'px'
        object1.style.backgroundPosition = imgLeft+'\t'+'0px'
        object1.innerHTML = i+'%';
      },50)
  }
  loadImg1(parseInt(document.getElementById('jdbox_1').innerHTML))
  
    function loadImg2 (data){
      var i = 0;
      setInterval(function(){
        i++
        if(i>data){
          i=data
        }
        var imgLeft = -(i*44+(i*10))+'px'
        object2.style.backgroundPosition = imgLeft+'\t'+'0px'
        object2.innerHTML = i+'%';
      },50)
  }
  loadImg2(parseInt(document.getElementById('jdbox_2').innerHTML))
  function loadImg3 (data){
      var i = 0;
      setInterval(function(){
        i++
        if(i>data){
          i=data
        }
        var imgLeft = -(i*44+(i*10))+'px'
        object3.style.backgroundPosition = imgLeft+'\t'+'0px'
        object3.innerHTML = i+'%';
      },50)
  }
  loadImg3(parseInt(document.getElementById('jdbox_3').innerHTML))
  function loadImg4 (data){
      var i = 0;
      setInterval(function(){
        i++
        if(i>data){
          i=data
        }
        var imgLeft = -(i*44+(i*10))+'px'
        object4.style.backgroundPosition = imgLeft+'\t'+'0px'
        object4.innerHTML = i+'%';
      },50)
  }
  loadImg4(parseInt(document.getElementById('jdbox_4').innerHTML))
  function loadImg5 (data){
      var i = 0;
      setInterval(function(){
        i++
        if(i>data){
          i=data
        }
        var imgLeft = -(i*44+(i*10))+'px'
        object5.style.backgroundPosition = imgLeft+'\t'+'0px'
        object5.innerHTML = i+'%';
      },50)
  }
  loadImg5(parseInt(document.getElementById('jdbox_5').innerHTML))
  function loadImg6 (data){
      var i = 0;
      setInterval(function(){
        i++
        if(i>data){
          i=data
        }
        var imgLeft = -(i*44+(i*10))+'px'
        object6.style.backgroundPosition = imgLeft+'\t'+'0px'
        object6.innerHTML = i+'%';
      },50)
  }
  loadImg6(parseInt(document.getElementById('jdbox_6').innerHTML))
  function loadImg7 (data){
      var i = 0;
      setInterval(function(){
        i++
        if(i>data){
          i=data
        }
        var imgLeft = -(i*44+(i*10))+'px'
        object7.style.backgroundPosition = imgLeft+'\t'+'0px'
        object7.innerHTML = i+'%';
      },50)
  }
  loadImg7(parseInt(document.getElementById('jdbox_7').innerHTML))
  function loadImg8 (data){
      var i = 0;
      setInterval(function(){
        i++
        if(i>data){
          i=data
        }
        var imgLeft = -(i*44+(i*10))+'px'
        object8.style.backgroundPosition = imgLeft+'\t'+'0px'
        object8.innerHTML = i+'%';
      },50)
  }
  loadImg8(parseInt(document.getElementById('jdbox_8').innerHTML))
}
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