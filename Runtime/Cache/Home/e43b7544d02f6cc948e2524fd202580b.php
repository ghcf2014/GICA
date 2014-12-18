<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	   <title>工合基金_首页</title>
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
    <!-- one样式 -->
    
    <!--<script type="text/javascript" src="/Public/static/bootstrap/js/bootstrap.min.js"></script>-->
    <link href="/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- <link href="/Public/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> -->
    <link href="/Public/static/bootstrap/css/docs.css" rel="stylesheet">
    <!-- <link href="/Public/static/bootstrap/css/onethink.css" rel="stylesheet"> -->

	<script type="text/javascript" src="/Public/static/rzg_js/i_banner1.js"></script>
	<script type="text/javascript" src="/Public/static/rzg_js/banner.js"></script>
	<script type="text/javascript" src="/Public/static/rzg_js/common.js"></script>
	<script type="text/javascript" src="/Public/static/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/Public/static/jquery.form.js"></script>

	<!-- <link rel="stylesheet" type="text/css" href="/Public/Admin/css/module.css">

	<link rel="stylesheet" href="/Public/Admin/css/module.css" type="text/css">
	<link rel="stylesheet" href="/Public/static/rzg_css/style.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/base.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/css.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/cjwt.css" type="text/css"></link>

	<link rel="stylesheet" href="/Public/static/rzg_css/css.css"  type="text/css" />  -->
	<link rel="stylesheet" href="/Public/static/rzg_css/css.css"  type="text/css"/>
	<!-- 引入弹窗样式 -->
    <!--<link rel="stylesheet" type="text/css" href="/Public/static/ymPrompt-4.0-B-20090302/skin/qq/ymPrompt.css" />-->
    <!--<link rel="stylesheet" href="/Public/static/kindeditor/themes/default/default.css" />-->
    <!--<script charset="utf-8" src="/Public/static/kindeditor/kindeditor-min.js"></script>-->
    <!--<script charset="utf-8" src="/Public/static/kindeditor/lang/zh_CN.js"></script>-->
    <!--<script charset="utf-8" src="/Public/static/kindeditor/jquery-1.9.1.min.js"></script>-->
	<!-- 引入layer -->
	<script type="text/javascript" src="/Public/static/layer/layer.min.js"></script>
	<script type="text/javascript" src="/Public/static/layer/extend/layer.ext.js"></script>

	<!-- 引入JQUERY UI器   当局  有冲突--> 
	<link rel="stylesheet" type="text/css" href="/Public/static/datepicker/css/jquery-ui.css" /> 
	<!--<script type="text/javascript" src="/Public/static/datepicker/js/jquery.min.js"></script>--> 
    <!--<script type="text/javascript" src="/Public/static/datepicker/js/jquery-ui-datepicker.js"></script> -->
    
    <!--表单验证-->
    <!--<script type="text/javascript" src="/Public/static/jquery.validate.js"></script>-->
    <!--<script type="text/javascript" src="/Public/static/validate.js"></script>-->
    <!--<script type="text/javascript" src="/Public/static/validate_expand.js"></script>-->

    
    
	<link rel="stylesheet" href="/Public/Home/css/style.css" type="text/css" />
	<script type="text/javascript" src="/Public/Home/js/banner.js"></script>
	<!--<script type="text/javascript" src="/Public/Home/js/jquery-1.7.2.min.js"></script>-->
	<script type="text/javascript" src="/Public/Home/js/common.js"></script>
	<!--<script type="text/javascript" src="/Public/Home/js/jquery.js"></script>-->
	<script type="text/javascript" src="/Public/Home/js/xszy_cont.js"></script>
	<script type="text/javascript" src="/Public/Home/js/anquanshezhi.js"></script>
    <script type="text/javascript" src="/Public/Home/js/biaodexiangqing.js"></script>
     <script type="text/javascript" src="/Public/Home/js/guangyuwomen.js"></script>
     <script type="text/javascript" src="/Public/Home/js/wodezhanghu.js"></script>
      <script type="text/javascript" src="/Public/Home/js/fabujiekuan.js"></script>
    


</head>
<body>
	<!-- 头部 -->
	<!--header start-->
<div class="header_out">
	<div class="header">
		<ul>
			<li class="weibo"><div></div><a href="">官方微博</a></li>
			<li class="weixin"><div></div><a href="">官方微信</a></li>
			<li class="call"><div></div><a href="">客户热线：400-123-4567</a></li>
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
</div>
<!--header end-->

<!--nav start-->
<div class="nav">
	<h1>
		<a href="index.html"><img src="/Public/Home/images/logo.png"
			width="171" height="48" /></a>
	</h1>
	<ul class="nav_wrap">
		<li style="width: 40px;"><a href="<?php echo U('Home/Index/index');?>"
			class="current">首页</a></li>
		<li><a href="<?php echo U('Home/Borrow/index');?>">我要融资</a></li>
		<li><a href="<?php echo U('Home/Finance/index');?>">我要投资</a></li>
		<li><a href="<?php echo U('Member/Index/index');?>">我的账户</a></li>
		<li><a href="<?php echo U('Home/Newhelp/borrowhelp');?>">新手指引</a></li>
	</ul>
</div>
<!--nav end-->

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
                    <li class="current"><a class="current" href="javascript:void(0);">基本资料</a></li>
                    <li><a href="<?php echo U('Borrow/papersinfo');?>">上传资料</a></li>
                    <li><a href="<?php echo U('Borrow/circulation');?>">发布贷款</a></li>
                   <!--  <li>融资认证</li> -->
                </ul>  
            </div>
 <!--zh_cont_r-->
            <div class="zh_cont_r">
              <form action="<?php echo U('circulation_save');?>" method="post">
                  <div class="r-main">
    <!-- <div class="til01"> -->
    <div class="til01">
    <ul id="ul"><li class="on" style="font-size:18px;">发布贷款</li><span class="fred" style="color: red;font-size: 12px; padding-left: 80px;line-height: 50px;display:block;"><s:fielderror fieldName="enough"></s:fielderror></span></ul>
    </div>
    <!-- <ul id="ul"><li><span class="fred"><s:fielderror fieldName="enough"></s:fielderror></span></li></ul>
    </div> -->
  <div class="rmainbox">
    <p class="tips"><span class="fred">*</span> 为必填项，所有资料均会严格保密。 </p>
    <div class="tab">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th colspan="2" align="left">借款基本信息</th>
    </tr>
  <tr>
    <td align="right"><span class="fred">*</span>借款标题：</td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="30" id="s_borrow_name" value=""/>
    <span class="fred" id="t_borrow_name"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right"><span class="fred">*</span>借款总金额：</td>
    <td><input name="borrow_money" type="text" class="inp280" maxlength="12" id="s_borrow_money" value=""/>
    <span class="fred" id="t_borrow_money"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <!-- <tr>
    <td align="right">&nbsp;</td>
    <td>
    <form action="<?php echo U('upload');?>" enctype="multipart/form-data" method="post" >
    <div id="tab_1"><a href="javascript:void(0);" id="btn_personalHead" class="scbtn">上传图片</a></div>
    <div id="tab_2"><input type='file'  name='photo'></div>
    <div id="tab_3"><input type="submit" value="提交" class="btn trianglify-btn" ><div class="container">
</div></div>
     -->
       <tr>
    <td align="right"><span class="fred">*</span>年利率：</td>
    <td><input name="borrow_interest_rate" type="text" class="inp100" maxlength="30" id="s_borrow_interest_rate" value=""/>%
    <span class="fred" id="t_borrow_interest_rate"></span>
    </td>
  </tr>
  <tr>
    <td align="right"><span class="fred">*</span>借款用途：</td>
    <td><input name="borrow_use" type="text" class="inp280" maxlength="12" id="s_borrow_use" value=""/>
    <span class="fred" id="t_borrow_use"></span>
    </td>
  </tr>
  <tr>
    <td align="right"><span class="fred">*</span>借款期限：</td>
    <td><input name="collect_day" type="text" class="inp280" maxlength="12" id="s_collect_day" value=""/>月
    <span class="fred" id="t_collect_day"></span>
    </td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td class="tishi">（推荐使用
    您的生活近照，或其他与借款用途相关的图片，<br />
      有助增加借款成功几率。严禁使用他人照片） </td>
  </tr>
  <tr>
    <td align="right"><span class="fred">*</span>最低投标金额：</td>
    <td><input name="borrow_min" type="text" class="inp280" maxlength="12" id="s_borrow_min" value=""/>元
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
    <tr>
    <td align="right"><span class="fred">*</span>最多投标金额：</td>
    <td><input name="borrow_max" type="text" class="inp280" maxlength="12" id="s_borrow_max" value=""/>元
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right"><span class="fred">*</span>有效时间：</td>
    <td>
    <select name="collect_time"  class="inp50">   
              <option value="1">1</option>   
              <option value="2">2</option>   
              <option value="3">3</option>   
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>    
            </select>   天
    <!-- <input type="text" id="date_8" readonly style="height:16px" name="collect_time"  class="inp100"/> -->
    <span class="fred"></span>
    </td>
  </tr>
  <tr>
    <td align="right"><span class="fred">*</span>还款方式：</td>
    <td>
          <select name="repayment_type"  class="inp50">   
              <option value="1">按天到期还款</option>   
              <option value="2">按月分期还款</option>   
              <option value="3">按季分期还款</option>   
              <option value="4">每月还息到期还本</option>    
            </select>   
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right"><span class="fred">*</span>投标奖励：</td>
    <td><input name="reward_vouch_rate" type="text" class="inp100" maxlength="12" value=""/>元
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right"><span class="fred">*</span>借款说明：</td>
    <td>
    <textarea name="borrow_info" class="txt420" style="resize:none"></textarea>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  
  <!--    <tr>
    <td align="right">筹标期限：<span class="fred">*</span></td>
    <td>
        <s:select list="borrowRaiseTermList" id="raiseTerm" name="paramMap.raiseTerm" cssClass="sel_140" listKey="key" listValue="value"  headerKey="" headerValue="--请选择--"></s:select>
        <span class="fred"><s:fielderror fieldName="paramMap['raiseTerm']"></s:fielderror></span>
    </td>
  </tr> -->
    <tr>
    <td align="right">&nbsp;</td>

    <td style="padding-top:20px;"><input  type="submit" class="bcbtn" value="保存发布" style="width:88px;"></td>

  </tr>
    </table>
    </div>
    </div>
    </div>
              </form>
            </div>
            </div>
        </div>
    </div>
  <!--content end-->    


 <script type="text/javascript" src="/Public/static/datepicker/js/jquery.min.js"></script> 
 <script type="text/javascript" src="/Public/static/datepicker/js/jquery-ui-datepicker.js"></script>  


 <script type="text/javascript" src="script/nav-jk.js"></script>

<script type="text/javascript">
$(function(){
 
  $("#date_8").datepicker({
    showOn: "button",
    buttonImage: "/Public/static/datepicker/images/calendar.gif",
    buttonImageOnly: true
  });
});
</script>
<script type="text/javascript">
//不能为空
  $("#s_borrow_name").blur(function() {
    if ($("#s_borrow_name").val() == "") {
      $("#t_borrow_name").html("*不能为空");
    } else {
      checkRegister();
    }
  });
  $("#s_borrow_money").blur(function() {
    if ($("#s_borrow_money").val() == "") {
      $("#t_borrow_money").html("*不能为空");
    } else {
      checkRegister();
    }
  });
  $("#s_borrow_interest_rate").blur(function() {
    if ($("#s_borrow_interest_rate").val() == "") {
      $("#t_borrow_interest_rate").html("*不能为空");
    } else {
      checkRegister();
    }
  });
  $("#s_collect_day").blur(function() {
    if ($("#s_collect_day").val() == "") {
      $("#t_collect_day").html("*不能为空");
    } else {
      checkRegister();
    }
  });
</script>

	<!-- /主体 -->

	<!-- 底部 -->
	  
    <!--footer start-->
    <div class="footer">
  		<div class="footer_in">
            <ul>
                <li><a href="#">关于我们</a></li>
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
	<!-- /底部 -->
</body>
</html>

<!-- 网站结构 -->