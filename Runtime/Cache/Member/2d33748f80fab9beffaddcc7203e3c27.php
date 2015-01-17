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
	 

<block name="body">
		<!--content start-->
	<div class="zh_cont_out">
    	<div class="zh_cont">
            <h2><a href="<?php echo U('Index');?>">我的账户</a></h2>	
            	<!--zh_cont_l-->
            <div class="zh_cont_l">
                <ul style="padding-top: 15px;">
                    <li style="color:#ef681f;" class="head"><a class="current" href="<?php echo U('Member/Index');?>" style="color: #fff;">个人中心</a></li>
                    <li><a href="<?php echo U('Userinfo/userselfset');?>">基本认证</a></li>
                   <!--  <li>融资认证</li> -->
                </ul>  
                
                <ul>
                    <li class="head"><a href="<?php echo U('Home/User/profile');?>" style="color: #fff;">安全设置</a></li>
                    <li><a href="<?php echo U('Userinfo/userchagerwithdraw');?>">充值提现</a></li>
                    <li><a href="<?php echo U('Friends/friends');?>">好友管理</a></li>
                    <li><a href="<?php echo U('System/usermailindex');?>"
                    
                    >通知管理</a></li>
                </ul> 
                 
                <ul>
                    <li class="head" style="color: #fff;">借款管理</li>
                    <li><a href="<?php echo U('Borrow/borrowmanager');?>">我的借款</a></li>
                    <li><a href="<?php echo U('Finance/borrowloanstatis');?>">借款统计</a></li>
                    <li><a href="<?php echo U('Invest/borrowmanager');?>">还款明细</a></li>
                </ul>  
                <ul style="border-bottom:0;"> 
                    <li style="color: #fff;" class="head">投资管理</li>
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
							<li class="on" onclick=showSysMails();;>
								系统消息
							</li>
							<li onclick=showReceiveMails();;>
								收件箱
							</li>
							<li onclick=showSendMails();;>
								发件箱
							</li>
							<li>
								发信息
							</li>
						</ul>
					</div>
					<div class="box">
						<span id="sysInfo">
							<div class="boxmain2">
							          <div class="srh" id="srh">
							        <input class="scbtn" onclick="delSys();" value="删除" type="button" id="delSys">
							        <input class="scbtn" onclick="readedSys();" value="标记为已读" type="button" id="readedSys">
							        <input class="scbtn" onclick="unReadSys();" value="标记为未读" type="button" id="unReadSys">
							        <a href="javascript:void(0);" class="scbtn" onclick="showUnReadSys();">未读邮件</a>
							        </div>
							        <span id="sys_mail_list"><div class="biaoge" id="biaoge">
							        <input type="hidden" id="curPage" value="1">
							          <table width="100%" border="0" cellspacing="0" cellpadding="0">
							  <tbody>

							  <tr>
							    <th><input type="checkbox" name="checkbox" id="checkbox" onclick="checkAll_Sys(this)"></th>
							    <th>标记</th>
							    <th>发件人</th>
							    <th>标题</th>
							    <th>发送时间</th>
							  </tr>
							  <!--系统消息-->
							  <?php if(is_array($sysdata)): foreach($sysdata as $key=>$vals): ?><tr>
									<th><input type="checkbox" name="checkbox" id="checkbox" onclick="checkAll_Sys(this)"></th>
									<th><?php echo ($vals['status']); ?></th>
									<th><?php echo ($vals[sysname]); ?></th>
									<th><?php echo ($vals['title']); ?></th>
									<th><?php echo ($vals['send_time']); ?></th>
								</tr><?php endforeach; endif; ?>
							  	<tr><td colspan="10" align="center">暂无信息</td></tr>
									</tbody></table>
							<div class="page">
									<p>
									</p>
								</div> 
							          </div></span>
							           <span id="show_mail"></span> 
							    </div>
						</span>
					</div>
								
					<div class="box" style="display: none;">
						<span id="receiveInfo">
							<div class="boxmain2">
							      <div class="srh" id="re_srh">
							    <a href="javascript:void(0);" class="scbtn" onclick="delReceives();">删除</a> 
							    <a href="javascript:void(0);" class="scbtn" onclick="readedReceives();">标记为已读</a> 
							    <a href="javascript:void(0);" class="scbtn" onclick="unReadReceives();">标记为未读</a>
							    <a href="javascript:void(0);" class="scbtn" onclick="showUnReadReceives();">未读邮件</a>
							    </div>
							    <span id="receive_mail_list"><div class="biaoge" id="re_biaoge">
							      <table width="100%" border="0" cellspacing="0" cellpadding="0">
									  <tbody><tr> 
									    <th><input type="checkbox" name="checkbox" id="checkbox" onclick="checkAll_Receive(this)"></th>
									    <th>标记</th>
									    <th>发件人</th>
									    <th>标题</th>
									    <th>发送时间</th>
									    <th>操 作</th>
									  </tr>
									  <!--收件箱信息-->
									  <?php if(is_array($receive)): foreach($receive as $key=>$val): ?><tr>
										  	<th><input type="checkbox" name="checkbox" id="checkbox" onclick="checkAll_Receive(this)"></th>
										  	<th><?php echo ($val['status']); ?></th>
										  	<th><?php echo ($val['postname']); ?></th>
										  	<th><?php echo ($val['title']); ?></th>
										  	<th><?php echo ($val['send_time']); ?></th>
										  	<th><input name="button" type="button" id="button" value="查看" />|<input type="button" onclick="{if(confirm('确定删除吗?')){window.location='/index.php?s=/Member/System/usermailindex_del?action=del&tablename=item&id=<%=id%>';return true;}return false;}" value="删除消息" />

										 
									  	</tr>
										<tr id="table" style="display:none;">
										    <th colspan="6" >这是站内信详情</td>
									    </tr><?php endforeach; endif; ?>
									 
									  
									  <tr><td colspan="11" align="center">暂无信息</td></tr>
									</tbody></table>
							  
							  <div class="page">
									<p align="center">分页</p>
								</div> 
							</div>


							</span>
							<span id="show_receive_mail"></span> 
							</div>
						</span>
					</div>
					<div class="box" style="display: none;">
						<span id="sendInfo"><div class="boxmain2">
							          <div class="srh" id="send_srh">
							        <a href="javascript:void(0);" class="scbtn" onclick="delSends();">删除</a> 
							        
							        </div>
							        <span id="send_mail_list"><div class="biaoge" id="send_biaoge">
							          <table width="100%" border="0" cellspacing="0" cellpadding="0">
							     	<tbody><tr> 
									    <th><input type="checkbox" name="checkbox" id="checkbox" onclick="checkAll_Send(this)"></th>
									    <th>收件人</th>
									    <th>标题</th>
									    <th>发送时间</th>
							  		</tr>
									
									<!--发件箱信息-->
									<?php if(is_array($post)): foreach($post as $key=>$values): ?><tr>
								  			<th><input type="checkbox" name="checkbox" id="checkbox" onclick="checkAll_Send(this)"></th>
								  			<th><?php echo ($values['recvname']); ?></th>
								  			<th><a href="#"><?php echo ($values['title']); ?></a></th>
								  			<th><?php echo ($values['send_time']); ?></th>
								  		</tr><?php endforeach; endif; ?>
							  		
							  		<tr><td colspan="9" align="center">暂无信息</td></tr>
									</tbody></table>

								<div class="page">
									<p>
									</p>
								</div> 
								
								</div>
							          </span>
							        
							          
							          <span id="show_send_mail"></span> 
							    </div>
							
						</span>
					</div>
					<div class="box" style="display: none;">
								        <div class="boxmain2">
								        <div class="biaoge2">
								    <form method="post" action="<?php echo U('Member/System/usermailindex_add');?>">
									  	<table width="100%" border="0" cellspacing="0" cellpadding="0">
											  <tbody>
												  <tr> 
												    <td width="11%">发件人：</td>
												    <td width="89%"><input type="text"value="<?php echo ($sendname); ?>" style="color:red" readonly/>
																	<input type="hidden" name="uid" value="<?php echo ($uid); ?>">
												   	</td>
												  </tr>
												  <tr>
												    <td>收件人：</td>
												    <td><input type="text" name="username" class="inp140" id="receiver" value="">
												    <span style="color: red; float: none;" id="s_receiver" class="formtips"></span>
												    </td>
												  </tr>
												  <tr>
												    <td>标题：</td>
												    <td><input type="text" name="title" class="inp280" id="title_s" maxlength="200">
												    <span style="color: red; float: none;" id="s_title" class="formtips"></span>
												    </td>
												  </tr>
												  <tr>
												    <td valign="top">内容：</td>
												    <td><textarea class="txt420" name="msg" id="content"></textarea>
												    <span style="color: red; float: none;" id="s_content" class="formtips"></span>
												    </td>
												  </tr>
												  <tr>
												    <td>&nbsp;</td>
												    <td style="padding-top:20px;">
												    <input type="submit" class="bcbtn " style='border-radius:1px;background:#66CCFB;width:35%;height:100%';onclick="addMail()" id="btnSave" value="提交发送" style="width:88px;"></td>
												  </tr>
												  <tr>
												    <td>&nbsp;</td>
												    <td class="txt">* 温馨提示：如果要给管理员发送信息，请输入收件人admin</td>
												  </tr>
											  </tbody>
									    </table>
								    </form>

								    </div>
								    </div>
								</div>
					<jsp:include page="usersendmail.jsp"></jsp:include>
            	
            </div>
            </div>
        </div>
    </div>
	<!--content end-->		
		<script type="text/javascript">
		   $(document).ready(function(){
		         $("#table").hide();
		         $("#button").click(function(){
				   if($("#button").val()=="查看") {
				     $("#button").val("关闭");
				     $("#table").show();
				   }else {
				   	$("#button").val("查看");
				   	$("#table").hide();
				   }

				});
		   });

		</script>


		<script type="text/javascript"
			src="${path}/script/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="script/jquery.shove-1.0.js"></script>
		<script type="text/javascript" src="script/nav-zh.js"></script>
		<script type="text/javascript" src="css/popom.js"></script>
		<script>
	$(function() {
		//样式选中
		$("#zh_hover").attr('class', 'nav_first');
		$("#zh_hover div").removeClass('none');
		$('#li_4').addClass('on');
		$('.tabmain').find('li').click(function() {
			$('.tabmain').find('li').removeClass('on');
			$(this).addClass('on');
			$('.lcmain_l').children('div').hide();
			$('.lcmain_l').children('div').eq($(this).index()).show();
		})
	})
</script>

		<script>
	$(function() {

		$('.tabtil').find('li').click(function() {
			$('.tabtil').find('li').removeClass('on');
			$(this).addClass('on');
			$('.tabtil').nextAll('div').hide();
			$('.tabtil').nextAll('div').eq($(this).index()).show();
		});
		initListInfo();

	});

	function initListInfo() {
		$.shovePost("querySysMailsInit.htm", param, function(data) {
			$("#sysInfo").html(data);
		});
	}

	function switchCode() {
		var timenow = new Date();
		$("#codeNum").attr("src",
				"admin/imageCode.do?pageId=userlogin&d=" + timenow);
	}

	//收件人
	$("#receiver").blur(function() {
		if ($("#receiver").val() == "") {
			$("#s_receiver").html("*收件人不能为空");
		} else {
			checkRegister();
		}
	});
	//标题
	$("#title").blur(function() {
		if ($("#title").val() == "") {
			$("#s_title").html("*标题不能为空");
		} else {
			$("#s_title").html("");
		}
	});
	//验证码
	$("#code").blur(function() {
		if ($("#code").val() == "") {
			$("#s_code").html("*验证码不能为空");
		} else {
			$("#s_code").html("");
		}
	});

	//内容框
	$("#content").blur(function() {
		if ($("#content").val() == "") {
			$("#s_content").html("*内容不能为空");
		} else {
			$("#s_content").html("");
		}
	});
</script>
		<script>
	//检查用户名是否有效
	function checkRegister() {
		param["paramMap.receiver"] = $("#receiver").val();
		$.post("judgeUserName.htm", param, function(data) {
			if (data == 1) {
				$("#s_receiver").html("*收件人不存在或者还不是您的好友！");
			} else {
				$("#s_receiver").html("");
			}
		});
	}
	function returnToPage_(pNum, type) {
		if (type == 2) { //系统邮件
			returnToPage_s(pNum);
			return;
		} else if (type == 1)  else if (type == 100) 
	}
	function addMail() {
		$("#btnSave").attr("disabled", true);
		param["paramMap.receiver"] = $("#receiver").val();
		param["paramMap.title"] = $("#title_s").val();
		param["paramMap.content"] = $("#content").val();
		param["paramMap.code"] = $("#code").val();
		param["paramMap.pageId"] = "userlogin";
		if ($("#receiver").val() == "") {
			$("#s_receiver").html("*收件人不能为空");
			$("#btnSave").attr("disabled", false);
			return;
		}
		if ($("#title_s").val() == "") {
			$("#s_title").html("*标题不能为空");
			$("#btnSave").attr("disabled", false);
			return;
		}
		if ($("#content").val() == "") {
			$("#s_content").html("*内容不能为空");
			$("#btnSave").attr("disabled", false);
			return;
		}
		if ($("#code").val() == "") {
			$("#s_code").html("*验证码不能为空");
			$("#btnSave").attr("disabled", false);
			return;
		}
		//有错误提示的时候不提交
		if ($("#s_receiver").text() != "" || $("#s_title").text() != ""
				|| $("#s_content").text() != "" || $("#s_code").text() != "") {
			return;
		}
		$.shovePost("addMail.htm", param, function(data) {
			if (data == 5) {
				$("#s_code").html("验证码错误");
				$("#btnSave").attr("disabled", false);
				return;
			} else if (data == 1) {
				alert("邮件发送失败，请重新发送");
				$("#btnSave").attr("disabled", false);
				return;
			} else if (data == 8) {
				alert("你是黑名单用户不能发生站内信");
				$("#btnSave").attr("disabled", false);
				return;
			} else {
				alert("邮件发送成功");
				$("#title_s").attr("value", "");
				$("#code").attr("value", "");
				$("#receiver").attr("value", "");
				$("#content").attr("value", "");
				$("#btnSave").attr("disabled", false);
			}
		});
	}

	function showReceiveMails() {
		param["pageBean.pageNum"] = 1;
		$.shovePost("queryReceiveMailsInit.htm", null, function(data) {
			$("#receiveInfo").html(data);
		});
	}

	function showSendMails() {
		param["pageBean.pageNum"] = 1;
		$.shovePost("querySendMailsInit.htm", null, function(data) {
			$("#sendInfo").html(data);
		});
	}
	//显示系统消息
	function showSysMails() {
		param["pageBean.pageNum"] = 1;
		$.shovePost("querySysMailsInit.htm", null, function(data) {
			$("#sysInfo").html(data);
		});
	}

	//收件箱全选
	function checkAll_Receive(e) {
		if (e.checked) {
			$(".re").attr("checked", "checked");
		} else {
			$(".re").removeAttr("checked");
		}
	}

	function checkAll_Send(e) {
		if (e.checked) {
			$(".se").attr("checked", "checked");
		} else {
			$(".se").removeAttr("checked");
		}
	}

	function checkAll_Sys(e) {
		if (e.checked) {
			$(".sys").attr("checked", "checked");
		} else {
			$(".sys").removeAttr("checked");
		}
	}

	//弹出窗口关闭
	function close() {
		ClosePop();
	}

	//设置邮件信息为已读
	/*function readedSends(){
		if(!window.confirm("确定要将所选邮件标记为已读吗?")){
			return;
		}
		var stIdArray = [];
		$("input[name='sendMail']:checked").each(function(){
			stIdArray.push($(this).val());
		});
		if(stIdArray.length == 0){
			alert("请选择要标记的内容");
			return ;
		}
		var ids = stIdArray.join(",");
		$.shovePost("updateSend2Readed.htm",{ids:ids},function(data){
	       $("#sendInfo").html(data);
	    });
	}*/

	//设置邮件信息为未读
	/*function unReadSends(){
		if(!window.confirm("确定要将所选邮件标记为未读吗?")){
			return;
		}
		var stIdArray = [];
		$("input[name='sendMail']:checked").each(function(){
			stIdArray.push($(this).val());
		});
		if(stIdArray.length == 0){
			alert("请选择要标记的内容");
			return ;
		}
		var ids = stIdArray.join(",");
		$.shovePost("updateSend2UNReaded.htm",{ids:ids},function(data){
	       $("#sendInfo").html(data);
	    });
	}*/
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