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
	 
<!-- 引用头部公共部分 -->
<!-- woyaotouzi_banner start -->
    <div class="tz_banner">
    	<div class="tz_banner_in"></div>
    </div>
	<!-- woyaotouzi_banner end -->
    
    
<!-- content start -->
<div class="tz_cont_out">	
  <div class="tz_cont" id="tz_cont">
      <!--tz_cont_head01-->
      <ul class="tz_cont_head01">
          <li class="current">全部借款</li>
          <li>最近借款</li>
          <li>成功借款</li>
          <li class="tz_cont_head01_li_last">
              <span>标题</span>
                <input type="text" value="" class="text"/>
                <input type="button" value="" class="button"/>
            </li>            
        </ul>

      <!--tz_cont_head02-->
        <ul class="tz_cont_head02">
          <li class="tz_cont_head02_li01">标的类型:</li>
            <li class="current"><a href="<?php echo U('Finance/index?type=1#tz_cont');?>">信用标</a></li>
            <li><a href="<?php echo U('Finance/index?type=2#tz_cont');?>">净值标</a></li>
            <li><a href="<?php echo U('Finance/index?type=3#tz_cont');?>">秒还标</a></li>
            <li><a href="<?php echo U('Finance/index?type=4#tz_cont');?>">担保标</a></li>
            <li><a href="<?php echo U('Finance/index?type=5#tz_cont');?>">抵押标</a></li>
        </ul>

      <!--tz_cont_head03-->       
        <ul class="tz_cont_head03">
          <li>项目</li>
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
                <li><a href="<?php echo U('Borrow/detail?id='.$vo['id']);?>"><?php echo ($vo["borrow_name"]); ?></a></li>
                <li class="li02"><span>￥</span><?php echo ($vo["borrow_money"]); ?></li>
                <li><?php echo ($vo["borrow_interest_rate"]); ?>%</li>
                <li><?php echo ($vo["borrow_duration"]); ?>月</li>
                <li>本息保护</li>
                <li class="li_jd"><div id="jdbox_<?php echo ($k); ?>" class="jdbox"><?php echo ($vo['has_borrow']/$vo['borrow_money']*100); ?></div></li>
                <li><?php echo (date('Y-m-d',$vo["add_time"])); ?></li>
                <li class="li_last">
                      <?php if($vo["borrow_status"] == 0): if($login == 1): ?><a  href="<?php echo U('Finance/invest?id='.$vo['id']);?>"><img  src="/Public/Home/images/invest.png"></a>
                              <?php elseif($login == 0): ?>
                                <a class="ajax-get"  href="<?php echo U('Finance/invest?id='.$vo['id']);?>"><img  src="/Public/Home/images/invest.png"><?php endif; ?>
                	    <?php elseif($vo["borrow_status"] == 2): ?>
                	      <img alt="" src="/Public/Home/images/checking.png">
                	    <?php elseif($vo["borrow_status"] == 4): ?>
                	      <img alt="" src="/Public/Home/images/checkref.png">
                	    <?php elseif($vo["borrow_status"] == 6): ?>
                	      <img alt="" src="/Public/Home/images/returning.png">
                	    <?php elseif($vo["borrow_status"] == 7): ?>
                	     <img alt="" src="/Public/Home/images/full.png"><?php endif; ?></li>
            </ul><?php endforeach; endif; else: echo "" ;endif; ?>
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