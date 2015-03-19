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
			<h3>当前位置 > <span style="color:#D41010;">投资记录</span></h3>
			<div class="r_main">
				<div class="mes_con">
					<div class="tabtil">
					<ul>
						<li id="lab_1" class="on"><a href="<?php echo U('Member/Invest/investindex');?>">我的投资</a></li>
						<li id="lab_2">
							<a href="<?php echo U('Member/Invest/investindex?st=2');?>">招标中的借款</a></li>
						<li id="lab_3">
							<a href="<?php echo U('Member/Invest/investindex?st=6');?>">回收中的借款</a></li>
						<li id="lab_4">
							<a href="<?php echo U('Member/Invest/investindex?st=7');?>">已回收的借款</a></li>
						<li id="lab_5">
							<a href="<?php echo U('Member/Invest/investindex?st=8');?>">回账查询</a></li>
					</ul>
				</div>
				<div class="box">
					<div class="boxmain2">
						<!-- <div class="srh">
								<form action="homeBorrowInvestList.htm" id="searchForm">
									<input type="hidden" name="type" value="${paramMap.type}" />
									<input type="hidden" name="curPage" id="pageNum" />
									发布时间：
									<input type="text" id="publishTimeStart"
										name="publishTimeStart" value="${paramMap.publishTimeStart }"
										class="inp90 Wdate"
										onclick="WdatePicker({dateFmt:'yyyy-MM-dd',readOnly:'readOnly'})" />
									到
									<input type="text" id="publishTimeEnd" name="publishTimeEnd"
										value="${paramMap.publishTimeEnd }" class="inp90 Wdate"
										onclick=WdatePicker( {
		dateFmt : 'yyyy-MM-dd',
		readOnly : 'readOnly'
	});
/>
									<span style="margin-left: 20px;">关键字：</span>
									<input id="titles" name="title" value="${paramMap.title }"
										type="text" maxlength="200" class="inp90" />
									<a href="javascript:void(0);" id="search" class="scbtn"> 搜索</a>
								</form>
							</div> -->
						<div class="biaoge">
							<table width="98%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<th>借款人</th>
									<th>标题</th>
									<th>起始时间</th>
									<th>回款时间</th>
									<th>投资本金</th>
									<th>年利率</th>
									<th>回款利息</th>
									<th>协议书</th>
								</tr>
							
										<?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
											<td align="center"><?php echo (get_borrow_username($vo["borrow_uid"])); ?>
											</td>
											<td align="center"><a
												href="<?php echo U('Home/Borrow/detail?id='.$vo['borrow_id']);?>"
												target="_blank"><?php echo (get_borrow_name($vo["borrow_id"])); ?></a></td>
											<td align="center"><?php echo (date('Y-m-d',$vo["add_time"])); ?></td>
											<td align="center"><?php echo (date('Y-m-d',$vo["deadline"])); ?></td>
											<td align="center"><?php echo ($vo["investor_capital"]); ?></td>
											<td align="center"><?php echo ($vo['invest_fee']*1); ?>% <!-- <s:if test="%{#bean.borrowWay ==1}">净值借款</s:if>
													<s:if test="%{#bean.borrowWay ==2}">秒还借款</s:if>
													<s:if test="%{#bean.borrowWay ==3}"> 普通借款</s:if>
													<s:if test="%{#bean.borrowWay ==4}"> 实地考察借款</s:if>
													<s:if test="%{#bean.borrowWay ==5}">  机构担保借款</s:if> -->
											</td>
											<td align="center"><?php echo ($vo["investor_interest"]); ?>
											</td>
											<td align="center"><a href="<?php echo U('Member/Invest/investdetail?id='.$vo['borrow_id']);?>">详情</a><!-- <a href="javascript:void(0);" class="xiangqing_<?php echo ($k); ?>">详情</a> --><a href="<?php echo U('Invest/borrowprotocol?id='.$vo['borrow_id']);?>" target="_blank">|查看协议</a><input  id="borrow_id_<?php echo ($k); ?>" value="<?php echo ($vo["borrow_id"]); ?>" style="display: none;" /></td>
										</tr><?php endforeach; endif; else: echo "" ;endif; ?>
										<tr>
										<?php if($k == null): ?><td align="center" colspan="10">亲！还没有内容哦。</td><?php endif; ?>
										</tr>
							</table>
							<div class="page">
								<?php echo ($page); ?>
							</div>
						</div>
					</div>
				</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<!--  -->

<!--content end--> 
<script>
  // $('#test2')
  //     .on(
  //         'click',
  //         function() {
  //           // layer.msg('正在施工，无法更换')
  //           $.layer({
  //                 type : 1,
  //                 title : [ '图片上传',
  //                     'background:#2B2E37; height:40px; color:#fff; border:none;' //自定义标题样式
  //                 ], //不显示默认标题栏
  //                 offset : [ '250px', '' ],
  //                 shade : [ 1 ], //不显示遮罩
  //                 area : [ '260px', '100px' ],
  //                 page : {
  //                   html : '<form action="/index.php?s=/Member/Invest/upload" enctype="multipart/form-data" method="post"><input type="file"  name="filename" value=""><input  type="submit"  value="上传"></from>'
  //                 },
  //               });
  //         });


            // $('.xiangqing').on('click',function() {
            //         $.layer({
            //         type: 2,
            //         shade: [0],
            //         fix: false,
            //         title: [ '图片上传','background:#4AC0FF; height:40px; color:#fff; border:none;'],
            //         maxmin: true,
            //         iframe: {src : 'iframe.html'},
            //         area: ['800px' , '440px'],
            //         close: function(index){
            //             layer.msg('您获得了子窗口标记：' + layer.getChildFrame('#name', index).val(),3,1);
            //         }
            //     }); 
            // });

$('.xiangqing_1').click(function(){
               var bid = document.getElementById("borrow_id_1").value;
             $.post('/index.php?s=/Member/Invest/investindex_ajax',{bid:bid},function success(data){
             	// alert(data.borrow_id);
             	var pagei = $.layer({
				    type: 1,   //0-4的选择,
				    title: false,
				    border: [0],
				    closeBtn: [0],
				    shadeClose: true,
				    area: ['680px', '600px'],
				    page: {
				        html: '<div class="hfb-modal-container"><div class="hfb-modal-header">投资详情</div><div class="hfb-modal-content tender-detail"><div class="t-top">投资概览</div><ul><li style="width: 96.4%;"><span class="t">投资项目</span><span>：'+data.get_borrow_name+'</span></li><li ><span class="t">投资期限</span><span>：'+data.collect_day+'天</span></li><li><span class="t">年化利率</span><span>：'+data.borrow_interest_rate*1+'%</span></li><li ><span class="t">收益方式</span><span>：'+data.repayment_type+'</span></li><li ><span class="t">起息日</span><span>：'+data.add_time+'</span></li><li ><span class="t">到期日</span><span>：'+data.deadline+'</span></li><li><span class="t">投资金额</span><span>：<?php echo ($vo["investor_capital"]); ?></span></li><li><span class="t">投资奖励</span><span>：'+data.reward_vouch_money+'</span></li><li ><span class="t">总收益</span><span>：'+data.investor_interest+'</span></li><li ><span class="t">已收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">待收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">已收奖励</span><span>：'+data.reward_vouch_money+'</span></li></ul><div class="t-top">收益详情</div><div class="t-table-wrap"><table class="table1"><tbody><tr><th>收款期数</th><th>收款日</th><th>应收金额(元)</th><th>实收本金(元)</th><th>实收收益(元)</th><th>状态</th></tr><tr><td>'+data.borrow_duration+'</td><td>'+data.deadline+'</td><td>'+data.yingshou+'</td><td><?php echo ($vo["investor_capital"]); ?></td><td>'+data.investor_interest+'</td><td>待收</td></tr></tbody></table></div></div><div class="hfb-modal-footer"><a class="tbtn" id="pagebtn">关闭</a></div></div>' //此处放了防止html被解析，用了\转义，实际使用时可去掉
				    }
				});
				$('#pagebtn').on('click', function(){
				    layer.close(pagei);
				});
             });
         });
$('.xiangqing_2').click(function(){
               var bid = document.getElementById("borrow_id_2").value;
             $.post('/index.php?s=/Member/Invest/investindex_ajax',{bid:bid},function success(data){
             	// alert(data.borrow_id);
             	var pagei = $.layer({
				    type: 1,   //0-4的选择,
				    title: false,
				    border: [0],
				    closeBtn: [0],
				    shadeClose: true,
				    area: ['680px', '600px'],
				    page: {
				        html: '<div class="hfb-modal-container"><div class="hfb-modal-header">投资详情</div><div class="hfb-modal-content tender-detail"><div class="t-top">投资概览</div><ul><li style="width: 96.4%;"><span class="t">投资项目</span><span>：'+data.get_borrow_name+'</span></li><li ><span class="t">投资期限</span><span>：'+data.collect_day+'天</span></li><li><span class="t">年化利率</span><span>：'+data.borrow_interest_rate*1+'%</span></li><li ><span class="t">收益方式</span><span>：按天到期还款</span></li><li ><span class="t">起息日</span><span>：'+data.add_time+'</span></li><li ><span class="t">到期日</span><span>：'+data.deadline+'</span></li><li><span class="t">投资金额</span><span>：<?php echo ($vo["investor_capital"]); ?></span></li><li><span class="t">投资奖励</span><span>：'+data.reward_vouch_money+'</span></li><li ><span class="t">总收益</span><span>：'+data.investor_interest+'</span></li><li ><span class="t">已收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">待收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">已收奖励</span><span>：'+data.reward_vouch_money+'</span></li></ul><div class="t-top">收益详情</div><div class="t-table-wrap"><table class="table1"><tbody><tr><th>收款期数</th><th>收款日</th><th>应收金额(元)</th><th>实收本金(元)</th><th>实收收益(元)</th><th>状态</th></tr><tr><td>'+data.borrow_duration+'</td><td>'+data.deadline+'</td><td>'+data.yingshou+'</td><td><?php echo ($vo["investor_capital"]); ?></td><td>'+data.investor_interest+'</td><td>待收</td></tr></tbody></table></div></div><div class="hfb-modal-footer"><a class="tbtn" id="pagebtn">关闭</a></div></div>' //此处放了防止html被解析，用了\转义，实际使用时可去掉
				    }
				});
				$('#pagebtn').on('click', function(){
				    layer.close(pagei);
				});
             });
         });
$('.xiangqing_3').click(function(){
               var bid = document.getElementById("borrow_id_3").value;
             $.post('/index.php?s=/Member/Invest/investindex_ajax',{bid:bid},function success(data){
             	// alert(data.borrow_id);
             	var pagei = $.layer({
				    type: 1,   //0-4的选择,
				    title: false,
				    border: [0],
				    closeBtn: [0],
				    shadeClose: true,
				    area: ['680px', '600px'],
				    page: {
				        html: '<div class="hfb-modal-container"><div class="hfb-modal-header">投资详情</div><div class="hfb-modal-content tender-detail"><div class="t-top">投资概览</div><ul><li style="width: 96.4%;"><span class="t">投资项目</span><span>：'+data.get_borrow_name+'</span></li><li ><span class="t">投资期限</span><span>：'+data.collect_day+'天</span></li><li><span class="t">年化利率</span><span>：'+data.borrow_interest_rate*1+'%</span></li><li ><span class="t">收益方式</span><span>：按天到期还款</span></li><li ><span class="t">起息日</span><span>：'+data.add_time+'</span></li><li ><span class="t">到期日</span><span>：'+data.deadline+'</span></li><li><span class="t">投资金额</span><span>：<?php echo ($vo["investor_capital"]); ?></span></li><li><span class="t">投资奖励</span><span>：'+data.reward_vouch_money+'</span></li><li ><span class="t">总收益</span><span>：'+data.investor_interest+'</span></li><li ><span class="t">已收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">待收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">已收奖励</span><span>：'+data.reward_vouch_money+'</span></li></ul><div class="t-top">收益详情</div><div class="t-table-wrap"><table class="table1"><tbody><tr><th>收款期数</th><th>收款日</th><th>应收金额(元)</th><th>实收本金(元)</th><th>实收收益(元)</th><th>状态</th></tr><tr><td>'+data.borrow_duration+'</td><td>'+data.deadline+'</td><td>'+data.yingshou+'</td><td><?php echo ($vo["investor_capital"]); ?></td><td>'+data.investor_interest+'</td><td>待收</td></tr></tbody></table></div></div><div class="hfb-modal-footer"><a class="tbtn" id="pagebtn">关闭</a></div></div>' //此处放了防止html被解析，用了\转义，实际使用时可去掉
				    }
				});
				$('#pagebtn').on('click', function(){
				    layer.close(pagei);
				});
             });
         });
$('.xiangqing_4').click(function(){
               var bid = document.getElementById("borrow_id_4").value;
             $.post('/index.php?s=/Member/Invest/investindex_ajax',{bid:bid},function success(data){
             	// alert(data.borrow_id);
             	var pagei = $.layer({
				    type: 1,   //0-4的选择,
				    title: false,
				    border: [0],
				    closeBtn: [0],
				    shadeClose: true,
				    area: ['680px', '600px'],
				    page: {
				        html: '<div class="hfb-modal-container"><div class="hfb-modal-header">投资详情</div><div class="hfb-modal-content tender-detail"><div class="t-top">投资概览</div><ul><li style="width: 96.4%;"><span class="t">投资项目</span><span>：'+data.get_borrow_name+'</span></li><li ><span class="t">投资期限</span><span>：'+data.collect_day+'天</span></li><li><span class="t">年化利率</span><span>：'+data.borrow_interest_rate*1+'%</span></li><li ><span class="t">收益方式</span><span>：按天到期还款</span></li><li ><span class="t">起息日</span><span>：'+data.add_time+'</span></li><li ><span class="t">到期日</span><span>：'+data.deadline+'</span></li><li><span class="t">投资金额</span><span>：<?php echo ($vo["investor_capital"]); ?></span></li><li><span class="t">投资奖励</span><span>：'+data.reward_vouch_money+'</span></li><li ><span class="t">总收益</span><span>：'+data.investor_interest+'</span></li><li ><span class="t">已收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">待收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">已收奖励</span><span>：'+data.reward_vouch_money+'</span></li></ul><div class="t-top">收益详情</div><div class="t-table-wrap"><table class="table1"><tbody><tr><th>收款期数</th><th>收款日</th><th>应收金额(元)</th><th>实收本金(元)</th><th>实收收益(元)</th><th>状态</th></tr><tr><td>'+data.borrow_duration+'</td><td>'+data.deadline+'</td><td>'+data.yingshou+'</td><td><?php echo ($vo["investor_capital"]); ?></td><td>'+data.investor_interest+'</td><td>待收</td></tr></tbody></table></div></div><div class="hfb-modal-footer"><a class="tbtn" id="pagebtn">关闭</a></div></div>' //此处放了防止html被解析，用了\转义，实际使用时可去掉
				    }
				});
				$('#pagebtn').on('click', function(){
				    layer.close(pagei);
				});
             });
         });
$('.xiangqing_5').click(function(){
               var bid = document.getElementById("borrow_id_5").value;
             $.post('/index.php?s=/Member/Invest/investindex_ajax',{bid:bid},function success(data){
             	// alert(data.borrow_id);
             	var pagei = $.layer({
				    type: 1,   //0-4的选择,
				    title: false,
				    border: [0],
				    closeBtn: [0],
				    shadeClose: true,
				    area: ['680px', '600px'],
				    page: {
				        html: '<div class="hfb-modal-container"><div class="hfb-modal-header">投资详情</div><div class="hfb-modal-content tender-detail"><div class="t-top">投资概览</div><ul><li style="width: 96.4%;"><span class="t">投资项目</span><span>：'+data.get_borrow_name+'</span></li><li ><span class="t">投资期限</span><span>：'+data.collect_day+'天</span></li><li><span class="t">年化利率</span><span>：'+data.borrow_interest_rate*1+'%</span></li><li ><span class="t">收益方式</span><span>：按天到期还款</span></li><li ><span class="t">起息日</span><span>：'+data.add_time+'</span></li><li ><span class="t">到期日</span><span>：'+data.deadline+'</span></li><li><span class="t">投资金额</span><span>：<?php echo ($vo["investor_capital"]); ?></span></li><li><span class="t">投资奖励</span><span>：'+data.reward_vouch_money+'</span></li><li ><span class="t">总收益</span><span>：'+data.investor_interest+'</span></li><li ><span class="t">已收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">待收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">已收奖励</span><span>：'+data.reward_vouch_money+'</span></li></ul><div class="t-top">收益详情</div><div class="t-table-wrap"><table class="table1"><tbody><tr><th>收款期数</th><th>收款日</th><th>应收金额(元)</th><th>实收本金(元)</th><th>实收收益(元)</th><th>状态</th></tr><tr><td>'+data.borrow_duration+'</td><td>'+data.deadline+'</td><td>'+data.yingshou+'</td><td><?php echo ($vo["investor_capital"]); ?></td><td>'+data.investor_interest+'</td><td>待收</td></tr></tbody></table></div></div><div class="hfb-modal-footer"><a class="tbtn" id="pagebtn">关闭</a></div></div>' //此处放了防止html被解析，用了\转义，实际使用时可去掉
				    }
				});
				$('#pagebtn').on('click', function(){
				    layer.close(pagei);
				});
             });
         });
$('.xiangqing_6').click(function(){
               var bid = document.getElementById("borrow_id_6").value;
             $.post('/index.php?s=/Member/Invest/investindex_ajax',{bid:bid},function success(data){
             	// alert(data.borrow_id);
             	var pagei = $.layer({
				    type: 1,   //0-4的选择,
				    title: false,
				    border: [0],
				    closeBtn: [0],
				    shadeClose: true,
				    area: ['680px', '600px'],
				    page: {
				        html: '<div class="hfb-modal-container"><div class="hfb-modal-header">投资详情</div><div class="hfb-modal-content tender-detail"><div class="t-top">投资概览</div><ul><li style="width: 96.4%;"><span class="t">投资项目</span><span>：'+data.get_borrow_name+'</span></li><li ><span class="t">投资期限</span><span>：'+data.collect_day+'天</span></li><li><span class="t">年化利率</span><span>：'+data.borrow_interest_rate*1+'%</span></li><li ><span class="t">收益方式</span><span>：按天到期还款</span></li><li ><span class="t">起息日</span><span>：'+data.add_time+'</span></li><li ><span class="t">到期日</span><span>：'+data.deadline+'</span></li><li><span class="t">投资金额</span><span>：<?php echo ($vo["investor_capital"]); ?></span></li><li><span class="t">投资奖励</span><span>：'+data.reward_vouch_money+'</span></li><li ><span class="t">总收益</span><span>：'+data.investor_interest+'</span></li><li ><span class="t">已收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">待收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">已收奖励</span><span>：'+data.reward_vouch_money+'</span></li></ul><div class="t-top">收益详情</div><div class="t-table-wrap"><table class="table1"><tbody><tr><th>收款期数</th><th>收款日</th><th>应收金额(元)</th><th>实收本金(元)</th><th>实收收益(元)</th><th>状态</th></tr><tr><td>'+data.borrow_duration+'</td><td>'+data.deadline+'</td><td>'+data.yingshou+'</td><td><?php echo ($vo["investor_capital"]); ?></td><td>'+data.investor_interest+'</td><td>待收</td></tr></tbody></table></div></div><div class="hfb-modal-footer"><a class="tbtn" id="pagebtn">关闭</a></div></div>' //此处放了防止html被解析，用了\转义，实际使用时可去掉
				    }
				});
				$('#pagebtn').on('click', function(){
				    layer.close(pagei);
				});
             });
         });
$('.xiangqing_7').click(function(){
               var bid = document.getElementById("borrow_id_7").value;
             $.post('/index.php?s=/Member/Invest/investindex_ajax',{bid:bid},function success(data){
             	// alert(data.borrow_id);
             	var pagei = $.layer({
				    type: 1,   //0-4的选择,
				    title: false,
				    border: [0],
				    closeBtn: [0],
				    shadeClose: true,
				    area: ['680px', '600px'],
				    page: {
				        html: '<div class="hfb-modal-container"><div class="hfb-modal-header">投资详情</div><div class="hfb-modal-content tender-detail"><div class="t-top">投资概览</div><ul><li style="width: 96.4%;"><span class="t">投资项目</span><span>：'+data.get_borrow_name+'</span></li><li ><span class="t">投资期限</span><span>：'+data.collect_day+'天</span></li><li><span class="t">年化利率</span><span>：'+data.borrow_interest_rate*1+'%</span></li><li ><span class="t">收益方式</span><span>：按天到期还款</span></li><li ><span class="t">起息日</span><span>：'+data.add_time+'</span></li><li ><span class="t">到期日</span><span>：'+data.deadline+'</span></li><li><span class="t">投资金额</span><span>：<?php echo ($vo["investor_capital"]); ?></span></li><li><span class="t">投资奖励</span><span>：'+data.reward_vouch_money+'</span></li><li ><span class="t">总收益</span><span>：'+data.investor_interest+'</span></li><li ><span class="t">已收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">待收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">已收奖励</span><span>：'+data.reward_vouch_money+'</span></li></ul><div class="t-top">收益详情</div><div class="t-table-wrap"><table class="table1"><tbody><tr><th>收款期数</th><th>收款日</th><th>应收金额(元)</th><th>实收本金(元)</th><th>实收收益(元)</th><th>状态</th></tr><tr><td>'+data.borrow_duration+'</td><td>'+data.deadline+'</td><td>'+data.yingshou+'</td><td><?php echo ($vo["investor_capital"]); ?></td><td>'+data.investor_interest+'</td><td>待收</td></tr></tbody></table></div></div><div class="hfb-modal-footer"><a class="tbtn" id="pagebtn">关闭</a></div></div>' //此处放了防止html被解析，用了\转义，实际使用时可去掉
				    }
				});
				$('#pagebtn').on('click', function(){
				    layer.close(pagei);
				});
             });
         });
$('.xiangqing_8').click(function(){
               var bid = document.getElementById("borrow_id_8").value;
             $.post('/index.php?s=/Member/Invest/investindex_ajax',{bid:bid},function success(data){
             	// alert(data.borrow_id);
             	var pagei = $.layer({
				    type: 1,   //0-4的选择,
				    title: false,
				    border: [0],
				    closeBtn: [0],
				    shadeClose: true,
				    area: ['680px', '600px'],
				    page: {
				        html: '<div class="hfb-modal-container"><div class="hfb-modal-header">投资详情</div><div class="hfb-modal-content tender-detail"><div class="t-top">投资概览</div><ul><li style="width: 96.4%;"><span class="t">投资项目</span><span>：'+data.get_borrow_name+'</span></li><li ><span class="t">投资期限</span><span>：'+data.collect_day+'天</span></li><li><span class="t">年化利率</span><span>：'+data.borrow_interest_rate*1+'%</span></li><li ><span class="t">收益方式</span><span>：按天到期还款</span></li><li ><span class="t">起息日</span><span>：'+data.add_time+'</span></li><li ><span class="t">到期日</span><span>：'+data.deadline+'</span></li><li><span class="t">投资金额</span><span>：<?php echo ($vo["investor_capital"]); ?></span></li><li><span class="t">投资奖励</span><span>：'+data.reward_vouch_money+'</span></li><li ><span class="t">总收益</span><span>：'+data.investor_interest+'</span></li><li ><span class="t">已收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">待收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">已收奖励</span><span>：'+data.reward_vouch_money+'</span></li></ul><div class="t-top">收益详情</div><div class="t-table-wrap"><table class="table1"><tbody><tr><th>收款期数</th><th>收款日</th><th>应收金额(元)</th><th>实收本金(元)</th><th>实收收益(元)</th><th>状态</th></tr><tr><td>'+data.borrow_duration+'</td><td>'+data.deadline+'</td><td>'+data.yingshou+'</td><td><?php echo ($vo["investor_capital"]); ?></td><td>'+data.investor_interest+'</td><td>待收</td></tr></tbody></table></div></div><div class="hfb-modal-footer"><a class="tbtn" id="pagebtn">关闭</a></div></div>' //此处放了防止html被解析，用了\转义，实际使用时可去掉
				    }
				});
				$('#pagebtn').on('click', function(){
				    layer.close(pagei);
				});
             });
         });
$('.xiangqing_9').click(function(){
               var bid = document.getElementById("borrow_id_9").value;
             $.post('/index.php?s=/Member/Invest/investindex_ajax',{bid:bid},function success(data){
             	// alert(data.borrow_id);
             	var pagei = $.layer({
				    type: 1,   //0-4的选择,
				    title: false,
				    border: [0],
				    closeBtn: [0],
				    shadeClose: true,
				    area: ['680px', '600px'],
				    page: {
				        html: '<div class="hfb-modal-container"><div class="hfb-modal-header">投资详情</div><div class="hfb-modal-content tender-detail"><div class="t-top">投资概览</div><ul><li style="width: 96.4%;"><span class="t">投资项目</span><span>：'+data.get_borrow_name+'</span></li><li ><span class="t">投资期限</span><span>：'+data.collect_day+'天</span></li><li><span class="t">年化利率</span><span>：'+data.borrow_interest_rate*1+'%</span></li><li ><span class="t">收益方式</span><span>：按天到期还款</span></li><li ><span class="t">起息日</span><span>：'+data.add_time+'</span></li><li ><span class="t">到期日</span><span>：'+data.deadline+'</span></li><li><span class="t">投资金额</span><span>：<?php echo ($vo["investor_capital"]); ?></span></li><li><span class="t">投资奖励</span><span>：'+data.reward_vouch_money+'</span></li><li ><span class="t">总收益</span><span>：'+data.investor_interest+'</span></li><li ><span class="t">已收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">待收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">已收奖励</span><span>：'+data.reward_vouch_money+'</span></li></ul><div class="t-top">收益详情</div><div class="t-table-wrap"><table class="table1"><tbody><tr><th>收款期数</th><th>收款日</th><th>应收金额(元)</th><th>实收本金(元)</th><th>实收收益(元)</th><th>状态</th></tr><tr><td>'+data.borrow_duration+'</td><td>'+data.deadline+'</td><td>'+data.yingshou+'</td><td><?php echo ($vo["investor_capital"]); ?></td><td>'+data.investor_interest+'</td><td>待收</td></tr></tbody></table></div></div><div class="hfb-modal-footer"><a class="tbtn" id="pagebtn">关闭</a></div></div>' //此处放了防止html被解析，用了\转义，实际使用时可去掉
				    }
				});
				$('#pagebtn').on('click', function(){
				    layer.close(pagei);
				});
             });
         });
$('.xiangqing_10').click(function(){
               var bid = document.getElementById("borrow_id_10").value;
             $.post('/index.php?s=/Member/Invest/investindex_ajax',{bid:bid},function success(data){
             	// alert(data.borrow_id);
             	var pagei = $.layer({
				    type: 1,   //0-4的选择,
				    title: false,
				    border: [0],
				    closeBtn: [0],
				    shadeClose: true,
				    area: ['680px', '600px'],
				    page: {
				        html: '<div class="hfb-modal-container"><div class="hfb-modal-header">投资详情</div><div class="hfb-modal-content tender-detail"><div class="t-top">投资概览</div><ul><li style="width: 96.4%;"><span class="t">投资项目</span><span>：'+data.get_borrow_name+'</span></li><li ><span class="t">投资期限</span><span>：'+data.collect_day+'天</span></li><li><span class="t">年化利率</span><span>：'+data.borrow_interest_rate*1+'%</span></li><li ><span class="t">收益方式</span><span>：按天到期还款</span></li><li ><span class="t">起息日</span><span>：'+data.add_time+'</span></li><li ><span class="t">到期日</span><span>：'+data.deadline+'</span></li><li><span class="t">投资金额</span><span>：<?php echo ($vo["investor_capital"]); ?></span></li><li><span class="t">投资奖励</span><span>：'+data.reward_vouch_money+'</span></li><li ><span class="t">总收益</span><span>：'+data.investor_interest+'</span></li><li ><span class="t">已收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">待收本息</span><span>：'+data.yingshou+'</span></li><li ><span class="t">已收奖励</span><span>：'+data.reward_vouch_money+'</span></li></ul><div class="t-top">收益详情</div><div class="t-table-wrap"><table class="table1"><tbody><tr><th>收款期数</th><th>收款日</th><th>应收金额(元)</th><th>实收本金(元)</th><th>实收收益(元)</th><th>状态</th></tr><tr><td>'+data.borrow_duration+'</td><td>'+data.deadline+'</td><td>'+data.yingshou+'</td><td><?php echo ($vo["investor_capital"]); ?></td><td>'+data.investor_interest+'</td><td>待收</td></tr></tbody></table></div></div><div class="hfb-modal-footer"><a class="tbtn" id="pagebtn">关闭</a></div></div>' //此处放了防止html被解析，用了\转义，实际使用时可去掉
				    }
				});
				$('#pagebtn').on('click', function(){
				    layer.close(pagei);
				});
             });
         });



// $('.xiangqing').on('click',function() {
// 	var pagei = $.layer({
// 	    type: 1,   //0-4的选择,
// 	    title: false,
// 	    border: [0],
// 	    closeBtn: [0],
// 	    shadeClose: true,
// 	    area: ['720px', '570px'],
// 	    page: {
// 	        html: '<volist name="list" id="vo"><div class="hfb-modal-container"><div class="hfb-modal-header">投资详情</div><div class="hfb-modal-content tender-detail"><div class="t-top">投资概览</div><ul class="ul-1 clearfix"><li style="width: 100%;"><span class="span-1">投资项目：</span><span class="span-2"><?php echo (get_borrow_name($bf["borrow_id"])); ?></span></li><li style="width: 33.33%;"><span class="span-1">投资期限：</span><span class="span-2">7天</span></li><li style="width: 33.33%;"><span class="span-1">年化利率：</span><span class="span-2">13.30%</span></li><li style="width: 33.33%;"><span class="span-1">收益方式：</span><span class="span-2">按天到期还款</span></li><li style="width: 49.999%;border-bottom:1px solid #d9d9de;padding-bottom: 10px;"><span class="span-1">起息日：</span><span class="span-2">2015-01-22</span></li><li style="width: 49.999%;border-bottom:1px solid #d9d9de;padding-bottom: 10px;"><span class="span-1">到期日：</span><span class="span-2">2015-01-30</span></li><li style="width: 49.999%; padding-top: 6px;"><span class="span-1">投资金额：</span><span class="span-2">300.00</span></li><li style="width: 49.999%; padding-top: 6px;"><span class="span-1">投资奖励：</span><span class="span-2">0.00%</span></li><li style="width: 25%;"><span class="span-1">总收益：</span><span class="span-2">0.78</span></li><li style="width: 25%;"><span class="span-1">已收本息：</span><span class="span-2 color-1">0.00</span></li><li style="width: 25%;"><span class="span-1">待收本息：</span><span class="span-2">300.78</span></li><li style="width: 25%;"><span class="span-1">已收奖励：</span><span class="span-2">0.00 </span></li></ul><div class="t-top">收益详情</div><div class="t-table-wrap"><table  cellpadding="0" cellspacing="1"><tbody><tr><th>收款期数</th><th>收款日</th><th>应收金额(元)</th><th>实收本金(元)</th><th>实收收益(元)</th><th>状态</th><th></th></tr><tr><td>1</td><td>2015-01-30</td><td>300.78</td><td>0.00</td><td>0.00</td><td>待收</td></tr></tbody></table></div></div><div class="hfb-modal-footer"><a class="t-close" id="pagebtn">关闭</a></div></div>' //此处放了防止html被解析，用了\转义，实际使用时可去掉
// 	    }
// 	});
// 	$('#pagebtn').on('click', function(){
// 	    layer.close(pagei);
// 	});

//  }); 




//显示当前位置   class="on"
var urlstr = location.href;
  		//alert((urlstr + '/').indexOf($(this).attr('href')));
  		var urlstatus=false;
 		$(".tabtil ul li a").each(function (index,element) {
    		if ((urlstr + '/').indexOf($(this).attr('href')) > -1 && $(this).attr('href')!='') {
      			$(element).parent().addClass('on'); 
      			urlstatus = true;

    		} 
    		else {
      			$(element).parent().removeClass('on');
    		}
  		});
  		if (!urlstatus) {$(".tabtil ul li").eq(0).addClass('on'); }


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