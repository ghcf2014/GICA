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
			<a href="<?php echo U('Home/User/register');?>" class="zc btn">免费注册</a> |&nbsp;<a
				href="<?php echo U('Home/User/login');?>" class="dl btn">立即登录</a>
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
	 

<block name="body">
		<!--content start-->
	<div class="zh_cont_out">
    	<div class="zh_cont">
            <h2><a href="<?php echo U('Index');?>">我的账户</a></h2>	
            	<!--zh_cont_l-->
<div class="zh_cont_l">
	<ul>
		<li style="color: #ef681f;" class="head"><a class="current"
			href="<?php echo U('Member/Index');?>" style="color: #fff;">个人中心</a></li>
		<li><a href="<?php echo U('Userinfo/userselfset');?>">基本认证</a></li>
		<!--  <li>融资认证</li> -->
	</ul>

	<ul>
		<li class="head"><a href="<?php echo U('Home/User/profile');?>"
			style="color: #fff;">安全设置</a></li>
		<li><a href="<?php echo U('Userinfo/userchagerwithdraw');?>">充值提现</a></li>
		<li><a href="<?php echo U('Friends/friends');?>">好友管理</a></li>
		<li><a href="<?php echo U('System/usermailindex');?>">通知管理</a></li>
	</ul>

	<ul>
		<li class="head" style="color: #fff;"><a
			href="<?php echo U('Member/Borrow/borrowmanager');?>">借款管理</a></li>
		<li><a href="<?php echo U('Member/Borrow/borrowmanager');?>">我的借款</a></li>
		<li><a href="<?php echo U('Member/Finance/borrowloanstatis');?>">借款统计</a></li>
		<li><a href="<?php echo U('Member/Invest/borrowmanager');?>">还款明细</a></li>
	</ul>
	<ul style="border-bottom: 0;">
		<li style="color: #fff;" class="head"><a
			href="<?php echo U('Invest/investindex');?>">投资管理</a></li>
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
							<li id="lab_1" class="on">
								我的融资
							</li>
							<!-- <li id="lab_2" onclick="jumpUrl('homeBorrowTenderInList.htm');">
								招标中的借款
							</li>
							<li id="lab_3" onclick="jumpUrl('homeBorrowRecycleList.htm');">
								回收中的借款
							</li>
							<li id="lab_4" onclick="jumpUrl('homeBorrowRecycledList.htm');">
								已回收的借款
							</li>
							<li id="lab_5" onclick="jumpUrl('homeBorrowBackAcountList.htm');">
								回账查询
							</li> -->
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
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<!-- <th>
											借款人
										</th> -->
										<th>
											标题
										</th>
										<th>
											借资
										</th>
										<!-- <th>
											还款方式
										</th> -->
										<th>
											已融资金
										</th>
										<th>
											年利率
										</th>
										<!-- <th>
											期限
										</th> -->
										<th>
											发布时间
										</th>
										<th>
											还款时间
										</th>
										<th>
											借款类型
										</th>
										<th>
											协议书
										</th>
									</tr>
									<!-- <s:if test="pageBean.page==null || pageBean.page.size==0">
										<tr align="center">
											<td colspan="10">
												暂无数据
											</td>
										</tr>
									</s:if> -->
									<s:else>
										<s:iterator value="pageBean.page" var="bean"><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
												<!-- <td align="center"><?php echo ($vo["borrow_uid"]); ?>
												</td> -->
												<td align="center"><a href="<?php echo U('Home/borrow/detail?id='.$vo['id']);?>"><?php echo ($vo["borrow_name"]); ?></a>
												</td>
												<td align="center"><?php echo ($vo["borrow_money"]); ?>
												</td>
												<!-- <td align="center"><?php echo ($vo["repayment_type"]); ?>
												</td> -->
												<td align="center"><?php echo ($vo["has_borrow"]); ?>
												</td>
												<td align="center"><?php echo ($vo["borrow_interest_rate"]); ?>%
												</td>
												<!-- <td align="center"><?php echo ($vo["borrow_duration"]); ?>个月
												</td> -->
												<td align="center"><?php echo (date('Y-m-d',$vo["add_time"])); ?>
												</td>
												<td align="center"><?php echo (date('Y-m-d',$vo["deadline"])); ?>
												</td>
												<td align="center">
													<?php if($vo["borrow_type"] == '1'): ?>净值
													<?php elseif($vo["borrow_type"] == 2): ?>
													秒还
													<?php elseif($vo["borrow_type"] == 4): ?>
													普通
													<?php elseif($vo["borrow_type"] == 5): ?>
													实地
													<?php elseif($vo["borrow_type"] == 6): ?>
													担保<?php endif; ?>
												</td>
												<td align="center">
												<a href="<?php echo U('Invest/borrowprotocol?id='.$vo['id']);?>" target="_blank">查看协议</a>
												</td><?php endforeach; endif; else: echo "" ;endif; ?>
											</tr>
										</s:iterator>
									</s:else>
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