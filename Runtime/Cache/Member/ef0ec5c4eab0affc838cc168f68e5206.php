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
	   <block
	name="body"> <!--content start-->
<div class="zh_cont_out">
	<div class="zh_cont">

		<!--zh_cont_l-->
<div class="zh_cont_l">
	<ul style="padding-top: 16px;">
		<li class="head" style="background:#e9e9e9 url(/Public/Home/images/icons_head.png) no-repeat 8px 14px;">个人中心</li>
		<li class="current" style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px 20px;"><a href="<?php echo U('Member/Index');?>">账户详情</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -24px;"><a href="<?php echo U('Member/Userinfo/userselfset');?>">基本认证</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -66px;"><a href="<?php echo U('Home/User/profile');?>">安全设置</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -110px;"><a href="<?php echo U('System/usermailindex');?>">消息中心</a></li>
	</ul>

	<ul>
		<li class="head" style="background:#e9e9e9 url(/Public/Home/images/icons_head.png) no-repeat 8px -26px;">借款管理</li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -156px;"><a href="<?php echo U('Member/Borrow/myborrowapply');?>">申请记录</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -200px;"><a href="<?php echo U('Member/Borrow/myborrowmanager');?>">借款记录</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -245px;"><a href="<?php echo U('Member/Borrow/borrowmanager');?>">还款记录</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -291px;"><a href="<?php echo U('Member/Finance/borrowloanstatis');?>">借款统计</a></li>
	</ul>

	<ul>
		<li class="head" style="background:#e9e9e9 url(/Public/Home/images/icons_head.png) no-repeat 8px -63px;">投资管理</li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -336px;"><a href="<?php echo U('Member/Invest/investindex');?>">投资记录</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -380px;"><a href="<?php echo U('Member/Finance/financestatis');?>">投标统计</a></li>
		<li class="tipshang" style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -426px;"><a href="<?php echo U('Member/Invest/autoinvest');?>">自动投标</a></li>
	</ul>

	<ul>
		<li class="head" style="background:#e9e9e9 url(/Public/Home/images/icons_head.png) no-repeat 8px -98px;">资金管理</li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -472px;"><a href="<?php echo U('Member/Userinfo/userchagerwithdraw');?>">资金明细</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 16px -517px;"><a href="<?php echo U('Member/Userinfo/userbankset');?>">银行卡设置</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -562px;"><a href="<?php echo U('Member/System/recharge');?>">充值提现</a></li>
	</ul>

	<ul>
		<li class="head" style="background:#e9e9e9 url(/Public/Home/images/icons_head.png) no-repeat 8px -134px;">推广管理</li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -608px;"><a href="<?php echo U('Member/Friends/friends');?>">友情推广</a></li>
		<li style="background:url(/Public/Home/images/icons_aside.png) no-repeat 25px -651px;"><a href="<?php echo U('Member/Friends/friendsgeneralize');?>">推广管理</a></li>
	</ul>

</div>
<!--zh_cont_r-->
<script type="text/javascript">
		var urlstring = location.href;
  		//alert((urlstr + '/').indexOf($(this).attr('href')));
  		var urlstatus=false;
 		$(".zh_cont_l ul li a").each(function (index,element) {
    		if ((urlstring + '/').indexOf($(this).attr('href')) > -1 && $(this).attr('href')!='') {
      			$(element).parent().addClass('current'); 
      			urlstatus = true;

    		} 
    		else {
      			$(element).parent().removeClass('current');
    		}
  		});
  		if (!urlstatus) {$(".zh_cont_l ul li").eq(0).addClass('current'); }
</script>
		<div class="zh_cont_r">
			<h3>
				当前位置 > <span style="color: #D41010;">我的还款</span>
			</h3>
			<div class="r_main">
				<div class="mes_con">
									<div class="tabtil">
					<ul>
						<li id="lab_1" class="on"><a href="javascript:void(0);">我要还款</a></li>
						<li id="lab_1" ><a href="<?php echo U('Member/Borrow/myborrowmanager');?>">返回</a></li>
					</ul>
				</div>
				<div class="box">
					<div class="boxmain2">
						<div class="biaoge"><?php if(is_array($list1)): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><h2 style="text-align: center;font-weight: normal;font-size: 18px;">【<?php echo ($vo["borrow_name"]); ?>】</h2>

          <div class="panel-body">
                <div class="text-item six-width clearfix">
               <ul>
                <li>借款金额</li>
                <li>借款利息</li>
                <li>借款年化率</li>
                <li>募集时间</li>
                <li>已还期数</li>
                <li>借款期限</li>
               </ul>
            </div>
          <div class="list-con-count clearfix">
               <ul>
                <li>￥<span class="cn_borrow_count countfont-2"><?php echo ($vo["borrow_money"]); ?></span></li>
                <li><span class="countfont-2"><?php echo ($vo["borrow_interest"]); ?></span></li>
                <li><span class="cn_recycle_count countfont-2"><?php echo ($vo["borrow_interest_rate"]); ?>%</span></li>
                <li><span class="countfont-2"><?php echo ($vo["total"]); ?>天</span></li>
                <li><span class="cn_wait_count countfont-2"><?php echo ($vo["has_pay"]); ?>/<?php echo ($vo["total"]); ?></span></li>
                <li><span class="countfont-2"><?php echo ($vo["borrow_duration"]); ?>个月</span></li>
               </ul>
            </div>
             <div class="text-item six-width clearfix">
               <ul>
                <li>借款类型</li>
                <li>还款方式</li>
                <li>投资人数</li>
               </ul>
            </div>
          <div class="list-con-count clearfix">
               <ul>
                <li><span class="cn_borrow_count countfont-2"><?php echo (get_borrow_type_name($vo["borrow_type"])); ?></span></li>
                <li><span class="countfont-2"><?php echo (get_repayment_type($vo["repayment_type"])); ?></span></li>
                <li><span class="cn_recycle_count countfont-2"><?php echo ($vo["repayment_type"]); ?>人</span></li>
               </ul>
            </div>
            <p style="padding-top: 20px;color: red;">* 被叫停的项目不在统计范围内</p>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
							<table width="98%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<th>期号</th>
									<th>还款时间</th>
									<th>应还本息</th>
									<th>本息余额</th>
									<th>状态</th>
									<th>操作</th>

								</tr>
                <form>
								<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ho): $mod = ($i % 2 );++$i;?><tr>
									<td align="center"><input  id="h_<?php echo ($i); ?>" value="<?php echo ($ho[0]['id']); ?>" style="display: none;" /><?php echo ($i); ?></td>
									<td align="center"><?php echo (date('Y-m-d',$ho['repayment_time'])); ?></td>
									<td align="center"><input  id="h2_<?php echo ($i); ?>" value="<?php echo ($ho[0]['capital']); ?>" style="display: none;" /><?php echo ($ho['capital']); ?></td>
									<td align="center"><span id="checktip_<?php echo ($i); ?>"><?php echo ($ho['interest']); ?></span></td>
									<td align="center">正常</td>
									<td align="center">
                    <!-- <?php if($ho['status'] == '4' ): ?>复审中<?php endif; ?> -->
  									  <?php if($ho['status'] < '4' ): ?>未满<?php endif; ?>
                      <?php if($ho['status'] == '4' ): ?>审核中<?php endif; ?>
                      <?php if($ho['status'] == '6' ): ?><a href="<?php echo U('Member/Borrow/reimbursement_del?id='.$i.'&bid='.$ho['borrow_id'].'&m='.$ho['yuehaibx']);?>">还款</a><?php endif; ?>
                      <?php if($ho['status'] == '7' ): ?>已还<?php endif; ?>
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                <tr>
                  <td align="center">合计</td>
                  <td align="center"></td>
                  <td align="center"><?php if(is_array($list1)): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>总：<?php echo ($vo['repayment_money']); endforeach; endif; else: echo "" ;endif; ?></td>
                  <td align="center"><?php if(is_array($list1)): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>总：<?php echo ($vo['repayment_interest']); endforeach; endif; else: echo "" ;endif; ?></td>
                  <td align="center"></td>
                  <td align="center"></td>
                </tr></form>
								<tr>
								<?php if($i == null): ?><td align="center" colspan="10">亲！还没有数据。</td><?php endif; ?>
								</tr>
							</table>
							<div class="page">
								<shove:page url="homeBorrowInvestList.htm"
									curPage="${pageBean.pageNum}" showPageCount="10"
									pageSize="${pageBean.pageSize }" theme="number"
									totalCount="${pageBean.totalNum}">
								</shove:page>
							</div>
						</div>
					</div>
				</div>
				</div>

			</div>
		</div>
	</div>
</div>
</div>
<!--content end-->

<script type="text/javascript">

$('.hbtn_1').click(function(){
               var bid = document.getElementById("h_1").value;
               var bid2 = document.getElementById("h2_1").value;
               $.post('/index.php?s=/Member/Borrow/reimbursement_del',{bid:bid,bid2:bid2},function success(data){

              document.getElementById('checktip_1').innerHTML ='<a href="">手动刷新</a>';
              if(data.borrow_status==6){

              	if(data.deadline != 0){
                document.getElementById('deadline_1').innerHTML ='已还';
                document.getElementById('hbtn_1').innerHTML ='';
                }

              }else{

              	document.getElementById('hbtn_1').innerHTML ='';

              }




               
              
             	alert(data.cs);
             });
         });
$('.hbtn_2').click(function(){
               var bid = document.getElementById("h_2").value;
               var bid2 = document.getElementById("h2_2").value;
               $.post('/index.php?s=/Member/Borrow/reimbursement_del',{bid:bid,bid2:bid2},function success(data){

               document.getElementById('checktip_2').innerHTML ='<a href="">手动刷新</a>';
               if(data.deadline != 0){
                document.getElementById('deadline_2').innerHTML ='已还';
                document.getElementById('hbtn_2').innerHTML ='';
              }
             	// alert(data.money);
             });
         });
$('.hbtn_3').click(function(){
               var bid = document.getElementById("h_3").value;
               var bid2 = document.getElementById("h2_3").value;
               $.post('/index.php?s=/Member/Borrow/reimbursement_del',{bid:bid,bid2:bid2},function success(data){

               document.getElementById('checktip_3').innerHTML ='<a href="">手动刷新</a>';
               if(data.deadline != 0){
                document.getElementById('deadline_3').innerHTML ='已还';
                document.getElementById('hbtn_3').innerHTML ='';
              }
             	// alert(data.money);
             });
         });
$('.hbtn_4').click(function(){
               var bid = document.getElementById("h_4").value;
               var bid2 = document.getElementById("h2_4").value;
               $.post('/index.php?s=/Member/Borrow/reimbursement_del',{bid:bid,bid2:bid2},function success(data){

               document.getElementById('checktip_4').innerHTML ='<a href="">手动刷新</a>';
               if(data.deadline != 0){
                document.getElementById('deadline_4').innerHTML ='已还';
                document.getElementById('hbtn_4').innerHTML ='';
              }
             	// alert(data.money);
             });
         });
$('.hbtn_5').click(function(){
               var bid = document.getElementById("h_5").value;
               var bid2 = document.getElementById("h2_5").value;
               $.post('/index.php?s=/Member/Borrow/reimbursement_del',{bid:bid,bid2:bid2},function success(data){

               document.getElementById('checktip_5').innerHTML ='<a href="">手动刷新</a>';
               if(data.deadline != 0){
                document.getElementById('deadline_5').innerHTML ='已还';
                document.getElementById('hbtn_5').innerHTML ='';
              }
             	// alert(data.money);
             });
         });
$('.hbtn_6').click(function(){
               var bid = document.getElementById("h_6").value;
               var bid2 = document.getElementById("h2_6").value;
               $.post('/index.php?s=/Member/Borrow/reimbursement_del',{bid:bid,bid2:bid2},function success(data){

               document.getElementById('checktip_6').innerHTML ='<a href="">手动刷新</a>';
               if(data.deadline != 0){
                document.getElementById('deadline_6').innerHTML ='已还';
                document.getElementById('hbtn_6').innerHTML ='';
              }
             	// alert(data.money);
             });
         });
$('.hbtn_7').click(function(){
               var bid = document.getElementById("h_7").value;
               var bid2 = document.getElementById("h2_7").value;
               $.post('/index.php?s=/Member/Borrow/reimbursement_del',{bid:bid,bid2:bid2},function success(data){

               document.getElementById('checktip_7').innerHTML ='<a href="">手动刷新</a>';
               if(data.deadline != 0){
                document.getElementById('deadline_7').innerHTML ='已还';
                document.getElementById('hbtn_7').innerHTML ='';
              }
             	// alert(data.money);
             });
         });
$('.hbtn_8').click(function(){
               var bid = document.getElementById("h_8").value;
               var bid2 = document.getElementById("h2_8").value;
               $.post('/index.php?s=/Member/Borrow/reimbursement_del',{bid:bid,bid2:bid2},function success(data){

               document.getElementById('checktip_8').innerHTML ='<a href="">手动刷新</a>';
               if(data.deadline != 0){
                document.getElementById('deadline_8').innerHTML ='已还';
                document.getElementById('hbtn_8').innerHTML ='';
              }
             	// alert(data.money);
             });
         });
$('.hbtn_9').click(function(){
               var bid = document.getElementById("h_9").value;
               var bid2 = document.getElementById("h2_9").value;
               $.post('/index.php?s=/Member/Borrow/reimbursement_del',{bid:bid,bid2:bid2},function success(data){

               document.getElementById('checktip_9').innerHTML ='<a href="">手动刷新</a>';
               if(data.deadline != 0){
                document.getElementById('deadline_9').innerHTML ='已还';
                document.getElementById('hbtn_9').innerHTML ='';
              }
             	// alert(data.money);
             });
         });
$('.hbtn_10').click(function(){
               var bid = document.getElementById("h_10").value;
               var bid2 = document.getElementById("h2_10").value;
               $.post('/index.php?s=/Member/Borrow/reimbursement_del',{bid:bid,bid2:bid2},function success(data){

               document.getElementById('checktip_10').innerHTML ='<a href="">手动刷新</a>';
               if(data.deadline != 0){
                document.getElementById('deadline_10').innerHTML ='已还';
                document.getElementById('hbtn_10').innerHTML ='';
              }
             	// alert(data.money);
             });
         });
$('.hbtn_11').click(function(){
               var bid = document.getElementById("h_11").value;
               var bid2 = document.getElementById("h2_11").value;
               $.post('/index.php?s=/Member/Borrow/reimbursement_del',{bid:bid,bid2:bid2},function success(data){

               document.getElementById('checktip_11').innerHTML ='<a href="">手动刷新</a>';
               if(data.deadline != 0){
                document.getElementById('deadline_11').innerHTML ='已还';
                document.getElementById('hbtn_11').innerHTML ='';
              }
             	// alert(data.money);
             });
         });
$('.hbtn_12').click(function(){
               var bid = document.getElementById("h_12").value;
               var bid2 = document.getElementById("h2_12").value;
               $.post('/index.php?s=/Member/Borrow/reimbursement_del',{bid:bid,bid2:bid2},function success(data){

               document.getElementById('checktip_12').innerHTML ='<a href="">手动刷新</a>';
               if(data.deadline != 0){
                document.getElementById('deadline_12').innerHTML ='已还';
                document.getElementById('hbtn_12').innerHTML ='';
              }
             	// alert(data.money);
             });
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