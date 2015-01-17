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
              <form action="<?php echo U('circulation_save?id='.$id);?>" method="post" enctype="multipart/form-data">
                  <div class="r-main">
              <!-- <div class="til01"> -->
              <div class="til01">
                <ul id="ul">
                  <li class="on" style="font-size:18px;">发布贷款</li><span class="fred" style="color: red;font-size: 12px; padding-left: 80px;line-height: 50px;display:block;"><s:fielderror fieldName="enough"></s:fielderror></span>
                </ul>
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
                        <td align="right"><span class="fred ">*</span>借款标题：</td>
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
                    <td align="right">&nbsp;</td>
                    <td class="tishi">（<b>温馨提示</b>：与借款用途相关的图片，
                      有助于增加借款成功几率，严禁上传虚假信息图片！） </td>
                  </tr>
                  <tr>
                    <td align="right"><span class="fred">*</span>上传必要资料：</td>
                    <td>
                      <select name="bid" id="pid">
                        <option value="0">--请选择--</option>
                        <option value="1">房产</option>
                        <option value="2">担保</option>
                        <option value="3">抵押</option>
                        <option value="4">驾照</option>
                      </select>
                      <input type="file" id="nscBtn" name="img"  style="background: url(/Public/Home/images/button.gif) no-repeat;" />
                      <input type="hidden" name="typeid" value="<?php echo ($type); ?>">
                    </td>          
                  </tr>
                  
                  <tr>
                    <td align="right"></td>
                    <td>
                      <div style="width: auto;height: auto;margin-bottom: 10px;display: none;" class="yscfile">
                        <ul class="fbdk_ziliao_con">
                          <li>示意图：</li>
                          <li class="slt"><img src="./Uploads/Image/fangchan.jpg" width="200" height="200"/></li>
                        </ul>
                      </div>
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

<script type="text/javascript">
  $(function(){
    
    $('#pid').change(function(event) {
                var txt=$(this).val();
                if(txt!=0){
                 if(txt==1)
                 {
                     alert('你选择了房产证');
                 }
                 else if(txt==2)
                 {
                     alert('你选择了担保凭证');
                 }
                 else if(txt==3)
                 {
                     alert('你选择了抵押凭证');
                 }
                 else
                 {
                     alert('你选择了驾照');
                 }
            
                 $('.yscfile').show();
                }
            });
    
    
  })
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