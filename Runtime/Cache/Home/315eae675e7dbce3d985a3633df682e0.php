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
                <ul>
                    <li><a href="<?php echo U('Borrow/userinfo');?>">基本资料</a></li>
                    <li><a href="<?php echo U('Borrow/papersinfo');?>">上传资料</a></li>
                    <li><a href="<?php echo U('Borrow/borrowinfo');?>">发布贷款</a></li>
                   <!--  <li>融资认证</li> -->
                </ul>  
            </div>
 <!--zh_cont_r-->

            <div class="zh_cont_r">
            	<div class="r-main">
						<div class="til01">
							<ul>
								<li class="on">
									<h3>当前位置>上传资料</h3>
								</li>

							</ul>
						</div>
						<p style="background:#d3cbc7;width:948px;height:1px;"></p>
						<div class="rmainbox">

							<p class="tips">
								温馨提示：工合财富对于用户上传的所有信息，都将进行加密处理。您可以在此放心上传个人材料，您的个人信息将不会被以任何形式外泄。
								<br />
								<span class="fred">注：认证资料上传完毕后，等待后台进行审核。</span>
							</p>
							<div class="rzbox">
								<h3>
									必要认证
								</h3>
								<p class="txt">&nbsp;0
									
								</p>
								<div class="jbrz">
									<ul>
										<li>
											<div class="pic">
												<img src="/Public/static/rzg_images/baseimage_1.jpg" width="62"
													height="62" id="img_identiy" />
											</div>
											<div class="shangchuan">
												<h3></h3>
 <input type="button" id="test2" class="scbtn" style="cursor: pointer;width:78px;" value="添加" onclick="fff()"/>						
											</div>
											<div class="shico">
												待上传
											</div>
										</li>
										
									</ul>
									<div class="clear"></div>
								</div>
							</div>
							<div class="rzbox">
								<h3>
									已上传的认证
								</h3>
								<p class="txt">&nbsp;
									
								</p>
								<div class="kxrz">
									<ul>
										<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="padding:0px;width:200px;height:90px;">
												<img src="Uploads/<?php echo ($vo["data_url"]); ?>" width="200"height="90" id="img_identiy" />
										</li><?php endforeach; endif; else: echo "" ;endif; ?>
												<!-- <li>
													<div class="shangchuan">
														<h3>
														</h3>
														<img src="" width="62" height="62" id="img_fc"	style="display: none;" />
														<input type="button" class="scbtn"style="cursor: pointer;" sd="${tmid }" value="点击上传"onclick=fff(this);;;;;/>
														<div class="shico">
															<s:else>待上传</s:else>
														</div>
													</div>
												</li> -->
									</ul>
									<div class="clear"></div>
								</div>
								
							</div>
							<div>
								<input type="button" style='border-radius:1px;background:#66CCFB;width:35%;height:100%'; value="下一步"/>
							</div>
						</div>
					</div>
            	
            </div>
            </div>
        </div>
    </div>
	<!--content end-->		



<!-- 		 这个是layer插件的 
 <a  id="parentImg" style="display: none;">
  <input type="button" value="放大" onclick="PhotoSize.action(1);" /> <input type="button" value="缩小" onclick="PhotoSize.action(-1);" /> <input type="button" value="还原大小" onclick="PhotoSize.action(0);" /> <input type="button" value="查看当前倍数" onclick="alert(PhotoSize.cpu);" /><br> 
<img id="focusphoto" src="http://files.jb51.net/upload/201107/20110713233007487.jpg" /> 
  <img  id="paramtImgscr" src=""/></a>
  <script src="layer/layer.js" type="text/javascript"></script>
<script src="layer/layer.min.js" type="text/javascript"></script> -->

		<script type="text/javascript" src="script/fancybox.js"></script>
		<script type="text/javascript" src="script/jbox/jquery.jBox-2.3.min.js"></script>
		<script type="text/javascript" src="script/jbox/jquery.jBox-zh-CN.js"></script>




		<script>
	//从子窗口返回的函数

	/*

	 function showbigpictur(data){
	 //data图片路径
	 //$("#paramtImgscr").attr("src",data);//将图片的值付给

	 var i = $.layer({
	 type : 1,
	 //move : ['#ddss'+data , true],
	 title : ['图片查看',false],
	 fix : false,
	 offset:['50%' , '50%'],
	 area : ['','0PX'],
	 page : {dom : '#parentImg'}
	 });
	 }

	 $('#gggd').on('click',function(){
	 layer.close(i);
	 });
	 */
	var photo_w;
	var photo_y;
	function showbigpictur(data) {
		//data图片路径
		if (1) {
			$("#imagesa").attr("src", data);//将图片的值付给

			if (1) {
				$('#fancybox').trigger("click");//触发单击事件
				photo_w = $('#imagesa').css('width');
				photo_y = $('#imagesa').css('height');
				$("#imagesa").css("width");
				$("#imagesa").css("height");
				setTimeout("", 10000);
			}
		}
		//.....
	}
</script>

		<script type="text/javascript">
	$(document).ready(function() {
		$("#fancybox").fancybox( {
			'onClosed' : function() {
				$('#imagesa').attr("style", "");
			}//关闭时候调用
			});
		// 还原
			$('#normal').click(function() {
				$('#imagesa').css('width', photo_w);
				$('#imagesa').css('height', photo_y);
				$('#fancybox').click();
			});
			// 放大
			$('#big').click(function() {
				var photoWidth = parseInt($('#imagesa').css("width"));
				var w = photoWidth + photoWidth * 0.1;
				var photoHeight = parseInt($('#imagesa').css("height"));
				var h = photoHeight + photoHeight * 0.1;
				$('#imagesa').css('width', w + 'px');
				$('#imagesa').css('height', h + 'px');
				$('#fancybox').click();
			});

			//缩小
			$('#small').click(function() {
				var photoWidth = parseInt($('#imagesa').css("width"));
				var w = photoWidth - photoWidth * 0.1;
				var photoHeight = parseInt($('#imagesa').css("height"));
				var h = photoHeight - photoHeight * 0.1;
				$('#imagesa').css('width', w + 'px');
				$('#imagesa').css('height', h + 'px');
				$('#fancybox').click();
			});
		});
</script>






		<script>
	$(function() {
		//样式选中
		dqzt(2)
		var sd = parseInt($(".l-nav").css("height"));
		var sdf = parseInt($(".r-main").css("height"));
		$(".l-nav").css("height", sd > sdf ? sd : sdf - 15);

		$("#btn_db")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall16','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_db").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 16;
								$.post("addImg.htm", param, function(data) {
									if (data == "-1") {
										alert("上传失败，请上传认证资料");
									}
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall16(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_db").attr("src", path);
		}
	}
</script>

		<script>
	$(function() {

		$("#btn_dy")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall15','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_dy").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 15;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
									//alert(data);
										// window.location.href=data;
									});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall15(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_dy").attr("src", path);
		}
	}
</script>

		<script>
	$(function() {

		$("#btn_xc")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall14','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_xc").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 14;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall14(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_xc").attr("src", path);
		}
	}
</script>
		<script>
	$(function() {

		$("#btn_sp")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall13','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_sp").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 13;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
									// alert("跳转到发布页面");
										//window.location.href='data';
									});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall13(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_sp").attr("src", path);
		}
	}
</script>
		<script>
	$(function() {
		//weibo
		$("#btn_wb")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall12','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_wb").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 12;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
									//window.location.href=data;
									});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall12(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_wb").attr("src", path);
		}
	}
</script>


		<script>
	$(function() {

		$("#btn_sj")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall11','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_sj").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 11;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall11(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_sj").attr("src", path);
		}
	}
</script>


		<script>
	$(function() {

		$("#btn_js")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall10','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_js").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 10;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall10(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_js").attr("src", path);
		}
	}
</script>

		<script>
	$(function() {

		$("#btn_xl")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall9','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_xl").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 9;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall9(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_xl").attr("src", path);
		}
	}
</script>




		<script>
	$(function() {
		//结婚
		$("#btn_jh")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall8','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_jh").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 8;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall8(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_jh").attr("src", path);
		}
	}
</script>




		<script>
	$(function() {

		$("#btn_gc")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall7','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_gc").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 7;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall7(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_gc").attr("src", path);
		}
	}
</script>




		<script>
	$(function() {

		$("#btn_fc")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall6','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_fc").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 6;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall6(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_fc").attr("src", path);
		}
	}
</script>





		<script>
	$(function() {

		$("#btn_response")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall4','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_response").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 4;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall4(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_response").attr("src", path);
		}
	}
</script>

		<script>
	$(function() {
		//收入
		$("#btn_income")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall3','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_income").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	

								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 5;
								$.post("addImg.htm", param, function(data) {
									if (data == -1) {
										window.location.reload();
									} else if (data == 1) {
										window.location.reload();
									} else {
										window.location.href = data;
									}
								});

							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall3(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_income").attr("src", path);
		}
	}
</script>
		<script>
	$(function() {
		//地址
		$("#btn_address")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall2','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_address").attr("src");
							if (headImgPath != "") {
								//window.location.href="addImage.htm?userHeadImg="+headImgPath+"&materAuthTypeId=1";
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 3;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall2(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_address").attr("src", path);
		}
	}
</script>



		<script>
	$(function() {
		//身份
		$("#bu_identiy")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall1','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPat = $("#img_identiy").attr("src");
							if (headImgPat != "") {
								var param = {};
								param["paramMap.userHeadImg"] = headImgPat;
								param["paramMap.materAuthTypeId"] = 1;
								$.post("addImg.htm", param, function(data) {
									if (data == -1) {
										window.location.reload();
									} else if (data == 1) {
										window.location.reload();
									} else {
										window.location.href = data;
									}

								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall1(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_identiy").attr("src", path);
		}
	}
</script>





		<script>
	$(function() {
		//工作
		$("#btn_personalHead")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img").attr("src");
							if (headImgPath != "") {
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 2;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img").attr("src", path);
			$("#setImg").attr("src", path);
		}
	}

	function getDirNum() {
		var date = new Date();
		var m = date.getMonth() + 1;
		var d = date.getDate();
		if (m < 10) {
			m = "0" + m;
		}
		if (d < 10) {
			d = "0" + d;
		}
		var dirName = date.getFullYear() + "" + m + "" + d;
		return dirName;
	}
</script>
		<script type="text/javascript">
	function fff(data) {
		var t = $(data).attr("sd");
		$.jBox("iframe:showpastpictur.htm?dm=" + t, {
			title : "上传",
			width : 520,
			height : 430,
			buttons : {}
		});
	}
	function ffff() {
		window.parent.window.jBox.close();
		window.location.reload();
	}
</script>
		<script>
	//视频上传验证
	function shipingcheck(data) {
		var t = $(data).attr("sd");
		jQuery.jBox.open("showshiping.htm?dm=" + t, "上传", 460, 400, {
			buttons : {}
		});
	}
	function shipingcheckf() {
		window.location.reload();
	}
</script>
<script>
//资料上传
	$('#test2').on('click', function(){
		// layer.msg('正在施工，无法更换');


    $.layer({
        type: 1,
        title: [
            '图片上传', 
            'background:#2B2E37; height:40px; color:#fff; border:none;' //自定义标题样式
        ],  //不显示默认标题栏
        offset : ['250px', ''],
        shade: [1], //不显示遮罩
        area: ['260px', '100px'],
        page: {html: '<form action="/index.php?s=/Home/Borrow/upload" enctype="multipart/form-data" method="post"><input type="file"  name="filename" value=""><input  type="submit"  value="上传"></from>'},
    });
 });

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