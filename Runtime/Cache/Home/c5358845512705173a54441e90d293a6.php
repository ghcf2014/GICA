<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	   <title>工合基金_首页</title>
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
    	<!-- one样式 -->
    
    <!--<script type="text/javascript" src="/Public/static/bootstrap/js/bootstrap.min.js"></script>-->
    <!-- <link href="/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet"> -->
    <!-- <link href="/Public/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> -->
    <link href="/Public/static/bootstrap/css/docs.css" rel="stylesheet">
    <!-- <link href="/Public/static/bootstrap/css/onethink.css" rel="stylesheet"> -->

	<script type="text/javascript" src="/Public/static/rzg_js/i_banner1.js"></script>
	<script type="text/javascript" src="/Public/static/rzg_js/banner.js"></script>
	<script type="text/javascript" src="/Public/static/rzg_js/common.js"></script>
	<script type="text/javascript" src="/Public/static/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/Public/static/jquery.form.js"></script>
	<!-- 引入弹窗 -->
	<!--<script type="text/javascript" src="/Public/static/ymPrompt-4.0-B-20090302/ymPrompt.js"></script>-->
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/module.css">
	<link rel="stylesheet" href="/Public/static/rzg_css/style.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/base.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/css.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/cjwt.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/css.css"  type="text/css" />
	<!-- 引入弹窗样式 -->
    <!--<link rel="stylesheet" type="text/css" href="/Public/static/ymPrompt-4.0-B-20090302/skin/qq/ymPrompt.css" />-->
    <!--<link rel="stylesheet" href="/Public/static/kindeditor/themes/default/default.css" />-->
    <!--<script charset="utf-8" src="/Public/static/kindeditor/kindeditor-min.js"></script>-->
    <!--<script charset="utf-8" src="/Public/static/kindeditor/lang/zh_CN.js"></script>-->
    <!--<script charset="utf-8" src="/Public/static/kindeditor/jquery-1.9.1.min.js"></script>-->
	<!-- 引入layer -->
	<script type="text/javascript" src="/Public/static/layer/layer.min.js"></script>
	<script type="text/javascript" src="/Public/static/layer/extend/layer.ext.js"></script>
</head>
<body>
	<!-- 头部 -->
	<!--header-->
<div class="topline_box1">
	<div class="top_line">
		<div class="top_phone">
			4888-888-888
		</div>
			<div class="topline_right">
				<ul>
					<li>
						<a href="javascript:void(0);" class="xsrw"></a>
					</li>
					<li>
						<a href="javascript:void(0);" class=" tipxia">策划中的活动</a>
					</li>
					<!--<li>
						<a href="newguide.htm" class="xsrw">新手任务</a>
					</li>-->
					<li id="gfq">
						官方群
						<div id="rzggf" class="list" style="display: none;">
							<a>官A群:888888888</a>
							<a>官B群:666666666</a>
						</div>
					</li>

					<?php if(is_login()): ?><li><a href="<?php echo U('Member/Index/index');?>"><?php echo get_username();?></a></li>
                                <li><a href="<?php echo U('Home/User/profile');?>">修改密码</a></li>
                                <li><a href="<?php echo U('Home/User/logout');?>">退出</a></li>
					<?php else: ?>

					<li>
						<a href="<?php echo U('Home/User/register');?>" class="mfzc">免费注册</a>
					</li>
					<li>
						<a href="<?php echo U('Home/User/login');?>" class="ljdl"> 立即登录</a>
					</li><?php endif; ?>
				</ul>
			</div>
	</div>
</div>
<div class="header">
	<div class="logo">
		<a href=""><img src="/Public/static/rzg_images/img/logo.gif"/>
		</a>
	</div>
	<div class="nav">
	    <?php $__NAV__ = M('Channel')->field(true)->where("status=1")->order("sort")->select(); if(is_array($__NAV__)): $i = 0; $__LIST__ = $__NAV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if(($nav["pid"]) == "0"): ?><a href="<?php echo (get_nav_url($nav["url"])); ?>" target="<?php if(($nav["target"]) == "1"): ?>_blank<?php else: ?>_self<?php endif; ?>"><?php echo ($nav["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>

<!-- header end-->、
<script>
	//alert("dafdadfafasfasfa");
	//$(function() {
	//alert("123464677");

	//  alert("1234567");
	//  $("#gfq").mouseover(function(){
	//  alert("123456789flajfalfj");
	//	 $("#rzggf").show();
	// });
	//  $("#gfq").mouseout(function(){
	//  alert("123456789flajfalfj");
	// $("#rzggf").hide();
	// });
    //Q群号滑动效果
	$("#gfq").hover(function() {
		$("#rzggf").slideToggle();
	});
	//});
</script>
	<!-- /头部 -->
	
	<!-- 主体 -->
	 

<block name="body">
<!-- 引用头部公共部分 -->
<jsp:include page="/include/topref.jsp"></jsp:include>	
<div class="nymain">
  <div class="lcnav">
    <div class="tab">
    <div class="srh">
    <form action="javascript:void(0);" id="searchLink" method="post">
    标题： <input type="text" id="title"  name="title" class="inp200" maxlength="200" value=""/> <input type="submit" id="searchLink" class="chaxun shigong" style="margin-left:6px;" value="查询"/>
    </form>
    </div>
<div class="tabmain">
  <ul><li id="tab_1" class="on">全部借款列表</li>
<!--<li id="tab_2">实地认证</li>
<li id="tab_3">信用认证</li> -->
<!--   <li id="tab_4">机构担保</li>
<li id="tab_5">最近成功的借款</li></ul> -->
    </div>
    </div>
    <div class="line">
    </div>
  </div>
  <div class="lcmain">
    <div class="lcmain_l" style="padding:0">
    <div class="lctab" id="content">
                    <ul id="lastestborrow">
                    <?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- 标开始 -->
                                <li>
                                    <?php if($vo["borrow_status"] == 0): ?><div class="bottm"><a href="<?php echo U('Finance/invest?id='.$vo['id']);?>">立即投标</a></div>
                                    <?php elseif($vo["borrow_status"] == 2): ?>
                                        <div class="bottm2"><a href="javascript:void(0);">初审中</a></div>
                                    <?php elseif($vo["borrow_status"] == 4): ?>
                                        <div class="bottm2"><a href="javascript:void(0);">复审中</a></div>&nbsp;
                                    <?php elseif($vo["borrow_status"] == 6): ?>
                                        <div class="bottm2"><a href="javascript:void(0);">还款中</a></div>&nbsp;
                                    <?php elseif($vo["borrow_status"] == 7): ?>
                                        <div class="bottm2">
                                        <a href="javascript:void(0);">已完成</a>
                                        </div>&nbsp;<?php endif; ?>


                                    <div class="list_txt">
                                        <table width="600" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <th colspan="3" align="left">
                                                    <a href="financeDetail.htm?id=${finance.id}" target="_blank">
                                                        <shove:sub value="#finance.borrowTitle" suffix="..."
                                                            size="15" /> </a>
                                                <span class="list_txtjl"><span><?php echo ((isset($vo["reward_num"]) && ($vo["reward_num"] !== ""))?($vo["reward_num"]):"0.00"); ?>
<!--                                                     <s:if test="#finance.excitationType==2">
                                                        <span class="list_txtjl"><span>￥${finance.excitationSum
                                                                }</span> </span>
                                                    </s:if>
                                                    <s:if test="#finance.excitationType==3">
                                                        <span class="list_txtjl"><span>${finance.excitationSum
                                                                }%</span> </span>
                                                    </s:if> -->
                                                </th>
                                            </tr>
                                            <tr>
                                                <h2><?php echo ($vo["borrow_name"]); ?></h2>
                                            </tr>
                                            <tr>
                                                <td width="180">
                                                    借款金额：
                                                    <span>￥ <?php echo (money_upper($vo["borrow_money"])); ?> </span>
                                                </td>
                                                <td width="180">
                                                    年利率：
                                                    <span>￥ <?php echo ($vo["borrow_interest_rate"]); ?></span>
                                                </td>
                                                <td width="170">
                                                    借款期限：
                                                    <span><?php echo ($vo["borrow_duration"]); ?> <s:property value="#finance.deadline"
                                                            default="0" /> <s:if test="%{#finance.isDayThe ==1}">个月</s:if>
                                                        <s:else>天</s:else> </span>
                                                </td>
                                                   <td width="170">
                                                    发标时间：
                                                    <span><?php echo (date('Y-m-d',$vo["add_time"])); ?></span>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>借款类型：
                                                        <img src="/Public/static/rzg_images/ico_7.jpg" title="本息保障,推荐标" />
<!--                                                     <s:if test="#finance.borrowWay ==1">
                                                    借款类型：净值借款
                                                        <img src="/Public/static/rzg_images/neiye1_53.jpg" title="净值借款" />
                                                    </s:if>
                                                    <s:if test="#finance.borrowWay ==2">
                                                    借款类型： 秒还借款
                                                        <img src="/Public/static/rzg_images/ico_1.jpg" title="秒还借款" />
                                                    </s:if>
                                                    <s:if test="#finance.borrowWay ==4">
                                                    借款类型：实地考察借款
                                                        <img src="/Public/static/rzg_images/tubiao2.png" title="实地考察借款" />
                                                    </s:if>
                                                    <s:if test="#finance.borrowWay ==5">
                                                     借款类型：机构担保借款
                                                        <img src="/Public/static/rzg_images/ico_7.jpg" title="本息保障,推荐标" />
                                                    </s:if>
                                                    <s:if test="#finance.isDayThe ==2">
                                                     借款类型： 天标
                                                        <img src="/Public/static/rzg_images/neiye1_67.jpg" title="天标" />
                                                    </s:if>
                                                    <s:if test="#finance.hasPWD ==1">
                                                    借款类型：
                                                        <img src="/Public/static/rzg_images/lock.png" title="投标时需要填写密码" />
                                                   </s:if>
                                                    <s:if test="#finance.auditStatus ==3">
                                                    借款类型：
                                                        <img src="/Public/static/rzg_images/neiye1_62.jpg" title="该用户通过抵押认证" />
                                                    </s:if> -->
                                                </td>
                                                <td>
                                                    <div>
                                                        <div style="float: left;">
                                                            借款进度：
                                                        </div>
                                                        <div class="progeos">
                                                            <div
                                                                style="width: <?php echo ($vo['has_borrow']/$vo['borrow_money']*100); ?>%"></div>
                                                        </div>
                                                        <div style="float: left;">
                                                            <span> <s:property value="#finance.schedules"
                                                                    default="0" /> %</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    完成投标：<?php echo ($vo["has_borrow"]); ?>
                                                    <span> <s:property value="#finance.investNum"
                                                            default="---" /> </span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div style="clear: both"></div>
                                </li>
                            <!-- 标结束 --><?php endforeach; endif; else: echo "" ;endif; ?>
                        <s:else>
                            <li style="text-align: center;">
                                <div class="page"> <?php echo ($page); ?></div><!-- 没有数据 -->
                            </li>
                        </s:else>
                    </ul>
              </ul>
          <s:else>
            <!-- <li style="text-align: center;padding-top: 20px;padding-bottom: 20px;">没有数据</li> -->
          </s:else>
        <s:if test="pageBean.page!=null || pageBean.page.size>0">
    <div class="page" ></div>    
    
    </s:if>

    </div>
    </div>
   <div class="lcmain_r">
<!-- 
      <div class="lbox">
      <h2>借款标志说明</h2>
      <div  class="lboxmain" style="background-image: url(images/neiye1_50.jpg); background-position: 136px 35px; background-repeat: no-repeat; ">
      <ul><li>信用借款：无标志</li>
      <li></li>
	  
      <li>净值借款：<img src="images/neiye1_53.jpg" width="15" height="16" /></li>
      <li>秒还借款：<img src="images/neiye1_55.jpg" width="15" height="16" /></li>
    
	  <li>担保借款：<img src="images/tubiao1.png" alt="" /></li>
      <li>通过抵押认证：<img src="images/neiye1_62.jpg" width="15" height="16" /></li>
     
	  <li>实地考察：<img src="images/tubiao2.png"/></li>
      
	  <li>按天借款：<img src="images/neiye1_67.jpg" width="15" height="16" /></li>
      </ul>
      </div>
      </div> -->

      <div class="lbox">
      <h2>按条件搜索</h2>
      <div class="lboxmain">
      <form id="searchForm" action="finance.htm" >
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right">还款方式: </td>
    <td>
    <input id="pageNum" name="curPage" type="hidden"/>
    <input  id="m" name="m" type="hidden"  />
    <input  name="title" type="hidden" value=""/>
    
    <s:select id="paymentMode" name="paymentMode" list="#{'':'没有限制',1:'按月分期还款',2:'按月付息,到期还本',3:'秒还',4:'一次性还款'}" value="paramMap.paymentMode" cssClass="sel_140" ></s:select>
    </td>
  </tr>
  <tr>
    <td align="right">借款目的：</td>
    <td>
    <s:select name="purpose" value="paramMap.purpose" list="borrowPurposeList" listKey="selectValue" listValue="selectName" headerKey="" headerValue="没有限制" cssClass="sel_140"></s:select>
    
    </td>
  </tr>
  <tr>
    <td align="right">期限：</td>
    <td>
    <s:select name="deadline" value="paramMap.deadline" list="borrowDeadlineList" listKey="selectValue" listValue="selectName" headerKey="" headerValue="没有限制" cssClass="sel_140"></s:select>
   
    </td>
  </tr>
  <tr>
    <td align="right">奖励：</td>
    <td><s:select id="reward" name="reward" list="#{'':'没有限制',2:'只显示有奖励的',1:'只显示无奖励的'}" value="paramMap.reward" cssClass="sel_140" ></s:select></td>
  </tr>
  <tr>
    <td align="right">金额范围：</td>
    <td>
    <s:select name="arStart" value="paramMap.arStart" list="borrowAmountList" listKey="selectValue" listValue="selectName" headerKey="" headerValue="没有限制" cssClass="sel_70"></s:select>
         到
     <s:select name="arEnd" value="paramMap.arEnd" list="borrowAmountList" listKey="selectValue" listValue="selectName" headerKey="" headerValue="没有限制" cssClass="sel_70"></s:select>
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td><a href="javascript:void(0);" id="search" class="chaxun">确认</a></td>
  </tr>
      </table>
      </form>
      </div>
      </div>
      <div class="lbox" style="padding-bottom:88px;">
      <h2>收益计算器</h2>
      <div class="lboxmain">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right">投资金额：</td>
    <td><input type="text" class="inp140" id="borrowSum"/></td>
  </tr>
  <tr>
    <td align="right">年利率：</td>
    <td><input type="text" class="inp140" id="yearRate" />%</td>
  </tr>
  <tr>
    <td align="right">投资期限：</td>
    <td><input type="text" class="inp140" id="borrowTime"/>月</td>
  </tr>
  <tr>
    <td align="right" >还款方式：</td>
    <td><select name="select3" class="sel_140" id="repayWay">
      <option selected="selected">按月还款</option>
      <option>先息后本</option>
    </select></td>
  </tr>
  <tr>
    <td align="right">投标奖励：</td>
    <td><input type="text" style="text-align:center;height: 20px; width: 50px; border: 1px solid #ccc; line-height: 20px;" id="bidReward"  value="0"/>%&nbsp;
    加现金<input type="text" style="text-align:center;height: 20px; width: 50px; border: 1px solid #ccc; line-height: 20px;" id="bidRewardMoney"  value="0"/>元
    </td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td><a href="javascript:void(0);" class="chaxun" onclick="javascript:rateCalculate()">计算</a></td>
  </tr>
    <tr><td colspan="2"><strong><span style="color: red; float: none;" class="formtips" id="show_error"></span></strong></td></tr>
      </table>
      <span id="showIncome"></span>
      </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="script/jquery.shove-1.0.js"></script>
<script type="text/javascript" src="script/jbox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="script/jbox/jquery.jBox-zh-CN.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	    var ck_type = "${paramMap.type}";
	    var no = ck_type.split(',');
	    if(no != ''){
	       for(var i=0;i<no.length;i++){
	          $('#ck_mode_'+no[i]).attr('checked','checked');
	       }
	    }	
});

function  checkTou(id,type){
	 var param = {};
	 param["id"] = id;
     $.shovePost('financeInvestInit.htm',param,function(data){
	   var callBack = data.msg;
	   if(callBack !=undefined){
	     alert(callBack);
	   }else{
		   if(type==2){
				var url = "subscribeinit.htm?borrowid="+id;
		     	 $.jBox("iframe:"+url, {
			    		title: "我要购买",
			    		width: 450,
			    		height: 450,
			    		buttons: {  }
			    		});
			}else{
				 window.location.href= 'financeInvestInit.htm?id='+id;
		   }
	   }
	 });
}
function closeMthod(){
	window.jBox.close();
	window.location.reload();
}

function clearComponentVal(){
        param = {};
        $('#titles').val('');
        $('#paymentMode').get(0).selectedIndex=0;
        $('#purpose').get(0).selectedIndex=0;
        $('#deadline').get(0).selectedIndex=0;
        $('#reward').get(0).selectedIndex=0;
        $('#arStart').get(0).selectedIndex=0;
}


		function rateNumJudge()else 
	 	   if(!/^(([0-9]+\.[0-9]*[1-9][0-9]*)|([0-9]*[1-9][0-9]*\.[0-9]+)|([0-9]*[1-9][0-9]*))$/.test($("#borrowSum").val())){
	 	       $("#show_error").html("&nbsp;&nbsp;请输入正确的投资金额进行计算");
	 	       $("#showIncome").html("");
	 	   }else 
	 	   if($("#yearRate").val()==""){
	 	      $("#show_error").html("&nbsp;&nbsp;年利率不能为空");
	 	      $("#showIncome").html("");
	 	   }else 
	 	   if(!/^(([0-9]+\.[0-9]*[1-9][0-9]*)|([0-9]*[1-9][0-9]*\.[0-9]+)|([0-9]*[1-9][0-9]*))$/.test($("#yearRate").val())){
	 	      $("#show_error").html("&nbsp;&nbsp;请输入正确的年利率");
	 	      $("#showIncome").html("");
	 	   }else 
	 	   if($("#borrowTime").val()==""){
	 	       $("#show_error").html("&nbsp;&nbsp;投资期限不能为空");
	 	       $("#showIncome").html("");
	 	   }else 
	 	   if(!/^[0-9]*[1-9][0-9]*$/.test($("#borrowTime").val())){
		 	    $("#show_error").html("&nbsp;&nbsp;请输入正确投资期限");
		 	    $("#showIncome").html("");
	 	   }else 
	 	    if(!/^[0-9].*$/.test($("#bidReward").val())){
		 	      $("#show_error").html("&nbsp;&nbsp;请输入正确的投资奖励");
		 	      $("#showIncome").html("");
	 	   }else 
		 	if(!/^[0-9].*$/.test($("#bidRewardMoney").val())){
			 	      $("#show_error").html("&nbsp;&nbsp;请输入正确的现金奖励 ");
			 	      $("#showIncome").html("");
	 	    }else{
	 	      $("#show_error").html("");
	 	   }
	 	}
	 	
	 	function rateCalculate()
			$.shovePost("incomeCalculate.htm",param,function(data){
			   //只有一条记录
			   if(data == 1){
			     $("#show_error").html("请填写完整信息进行计算");
			     return;
			   }
			   _array.push("<table>");
			    for(var i = 0; i < data.length; i ++){
			    	data[i].income2year = data[i].income2year < 1 ? "0" + data[i].income2year : data[i].income2year;
			    	data[i].rateSum = data[i].rateSum < 1 ? "0" + data[i].rateSum : data[i].rateSum;
					_array.push("<tr><td style='padding-left:20px'><span>投标奖励：</span><span>"+data[i].reward+"元</span><br/>"
					+"<span>年化收益：</span><span>"+data[i].income2year+"%</span><br/>"
					+"<span>总计利息：</span><span>"+data[i].rateSum+"元</span><br/>"
					+"<span>每月还款：</span><span>"+data[i].monPay+"元</span><br/>"
					+"<span>总共收益：</span><span>"+data[i].allSum+"元</span><br/>");
					/*+"<span>总计收益：</span><span>"+data[i].netIncome+"元(扣除10%管理费)</span></td></tr>"
					_array.push("<p>投标奖励："+data[i].reward+"元</p><br /><br />"
					+"<p>年化收益："+data[i].income2year+"元</p><br /><br />"
					+"<p>总收益："+data[i].allSum+"元</p><br /><br />"
					+"<p>每月还款："+data[i].monPay+"元</p><br /><br />"
					+"<p>总计收益(扣除10%管理费)："+data[i].netIncome+"元</p>");*/
				}
				//_array.push("</table>");
				$("#showIncome").html(_array.join(""));
			});
	 	}

</script>
<script type="text/javascript">
		//$(function(){
			dqzt(1);
			$("span#tit").each(function(){
				if($(this).text().length > 6){
					$(this).text($(this).text().substring(0,8)+"..");
				}
			});
	
			var m = '${paramMap.m}';
			if(m == ''){
				m = 1;
			}
			$("#tab_"+m).addClass("on");
			$("#tab_1").click(function(){
			    window.location.href = "finance.htm?m=1"
			});
			$("#tab_2").click(function(){
			   window.location.href = "finance.htm?m=2"
			});
			$("#tab_3").click(function(){
               window.location.href = "finance.htm?m=3"
			});
			$("#tab_4").click(function(){
			   window.location.href = "finance.htm?m=4"
			});
			$("#tab_5").click(function(){
			   window.location.href = "finance.htm?m=5"
			});
			
			
			$("#search").click(function(){
				var chk_value = [];
				$('input[name="ck_mode"]:checked').each(function(){  
		             chk_value.push($(this).val());  
		        });
		        if(chk_value.length != 0){
		             $("#type").val(chk_value);
		            $("#m").val('1');             
		        }else{
		            $("#type").val("");
		        }
                $("#searchForm").submit();
			});
			$("#arEnd").change(function(){
			    var arStart = $('#arStart').val();
			    arStart = parseInt(arStart);
			    var arEnd = $(this).val();
			    arEnd = parseInt(arEnd);
			    if(arEnd < arStart){
			      alert('金额范围不能小于开始!');
			    }
			});
			$("#arStart").change(function(){
			    var arEnd = $('#arEnd').val();
			    arEnd = parseInt(arEnd);
			    var arStart = $(this).val();
			    arStart = parseInt(arStart);
			    if(arEnd < arStart){
			      alert('金额范围不能小于开始!');
			    }
			});
			
			$("#jumpPage").click(function(){
			     var curPage = $("#curPageText").val();
			    
				 if(isNaN(curPage)){
					alert("输入格式不正确!");
					return;
				 }
				 $("#pageNum").val(curPage);
   				var chk_value = [];
				$('input[name="ck_mode"]:checked').each(function(){  
		             chk_value.push($(this).val());  
		        });
		        if(chk_value.length != 0){
		             param['paramMap.m'] = '1';
		             $("#type").val(chk_value);                  
		        }else{
		            $("#type").val("");
		        }
                $("#searchForm").submit();
			});
		//});
		
	
</script>

	<!-- /主体 -->

	<!-- 底部 -->
	<!--底部快捷导航 开始-->
<div class="bottom_box bottom_box1">
	<div class="bottom">
		<div class="bottom_con1">
			<div class="bottom_left">
				<div class="db_menu">
					<!-- <a href="<?php echo U('Member/index/test');?>" class="tipshang">关于我们</a> -->
					<a href="javascript:void(0);" class="tipshang">关于我们</a>
					<a href="javascript:void(0);" class="tipshang">法律法规</a>
					<a href="javascript:void(0);" class="tipshang">新手指引</a>
					<a href="javascript:void(0);" class="tipshang">诚聘英才</a>
					<a href="javascript:void(0);" class="tipshang">联系我们</a>
					<a href="javascript:void(0);" class="tipshang">问答</a>
					<a href="javascript:void(0);" class="tipshang">网站地图</a>
				</div>
				<div class="db_gzwm">
					<p class="gzwm">
						关注我们
					</p>
					<a class="xlwb tipshang" href="javascript:void(0);">新浪微博</a>
					<a class="gfwx" href="javascript:void(0);" id="id2">关注微信</a>
					<a class="scbz" href="javascript:void(0);"onclick=AddFavorite('工合财富', location.href);>收藏本站</a>
				</div>
			</div>
			<div class="bottom_right">
				<p>
					客服热线\工作时间 9:30-17.30
				</p>
				<div class="kfdh">
					4000-888-888
				</div>
				
			</div>
		</div>
		<!-- 友情链接 -->
		<div class="bottom_con3">
        <h4>友情链接</h4>
        <ul>
                <li><a target="_blank" href="http://www.gopay.com.cn/" >国付宝</a>   </li>
				<li><a target="_blank" href="http://www.p2peye.com">网贷天眼</a></li>
				<li><a target="_blank" href="http://www.wangdaizhijia.com/">网贷之家</a> </li>
				<li><a target="_blank" href="http://www.shzfsoft.com/">网贷之星</a> </li>
				<li><a target="_blank" href="http://www.wangdaicaifu.com/">网贷财富</a> </li>
				<li><a target="_blank" href="http://www.wdlm.cn/">网贷联盟</a> </li>
				<li><a target="_blank" href="http://www.erongtu.com/">融途网</a> </li>
				<li><a target="_blank" href="http://www.p2pxing.com/">网贷之星</a> </li>
				<li><a target="_blank" href="http://www.p2pzhinan.com/">P2P网贷指南</a> </li>
				<li><a target="_blank" href="http://www.wangdai3.com/">网贷第三方</a> </li>
          </ul>
        </div>
		
		
		<div class="bottom_con2">
		Copyright © 2014 工合财富（www.ghjj.cn）版权所有 广东省工合股权基金有限公司 | 
			<a href="http://www.miitbeian.gov.cn">备案号：粤ICP备88888888号</a> &nbsp;
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

 	</script>



			<script type="text/javascript">
	var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://"
			: " http://");
	document
			.write(unescape("%3Cscript src='"
					+ _bdhmProtocol
					+ "hm.baidu.com/h.js%3F0d153ad81f03058ce80c0c3c697b77b5' type='text/javascript'%3E%3C/script%3E"));
</script>

			<script type="text/javascript"
				src="http://tajs.qq.com/stats?sId=34570481" charset="UTF-8"></script>

		</div>

		<div class="bottom_aqpic">
			<script id="ebsgovicon"
				src="https://cert.ebs.gov.cn/govicon.js?id=d49f3614-19ad-47df-a3bf-4b8bf872e48b&width=52&height=70&type=1"
				type="text/javascript" charset="utf-8"></script>
			 &nbsp;
			<a href="http://webscan.360.cn/index/checkwebsite/url/www.ubanks.cn"><img
					border="0" style="width: 100px; height: 50px;"
					src="http://img.webscan.360.cn/status/pai/hash/8fd610857e7a8668e59488f645830bca" />
			</a> &nbsp;
			<a href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1305828394"><img
					alt="" src="/Public/static/rzg_images/wzzx.jpg" style="width: 100px; height: 50px;">
			</a>&nbsp;
			<a id='___szfw_logo___'
				href='https://search.szfw.org/cert/l/CX20140729008585008681'
				target='_blank'><img style="width: 100px; height: 50px;"
					src='https://search.szfw.org/cert.png?l=CX20140729008585008681'>
				&nbsp; <a key="53f6a580efbfb04a7b49c161" logo_size="124x47"
				logo_type="realname" href="http://www.anquan.org"><script
						src="http://static.anquan.org/static/outer/js/aq_auth.js"></script>
			</a>
		</div>

	</div>
</div>

<!--底部footer 结束-->
<!-- <script type="text/javascript" src="script/jqueryV172.js"></script> -->
<!-- <script type="text/javascript" src="script/xl.js"></script> -->
<script type='text/javascript'>
	(function() {
		document.getElementById('___szfw_logo___').oncontextmenu = function() {
			return false;
		}
	})();
</script>
<script type="text/javascript">
	//收藏本站
	function AddFavorite(title, url) {
		try {
			window.external.addFavorite(url, title);
		} catch (e) {
			try {
				window.sidebar.addPanel(title, url, "");
			} catch (e) {
				alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
			}
		}
	}
</script>
<!-- <script type="text/javascript" src="/Public/static/rzg_js/jquery.js"></script> -->
 <script type="text/javascript" src="/Public/static/rzg_js/banner.js"></script>

<div style="display: none" id=testID>
	<P>
		<img src="/Public/static/rzg_images/img/weixin.jpg" width="250" height="250" />
	</P>
	打开微信，点击底部的″发现″，使用″扫一扫″即可关注融资谷官方微信.
</div>
<script type=text/javascript>
	var environment = {
		userVo : '',
		role : '',
		userId : '',
		basePath : '',
		userCash : ''
	};
</script>
<script type="text/javascript">
	$("#id2").click(
			function() {
				tipsWindown("关注融资谷官方微信", "id:testID", "250", "300", "true", "",
						"true", "id");
			});

	// 关注微信
	var showWindown = true;
	var templateSrc = "http://leotheme.cn/wp-content/themes/Dreamy";
	function tipsWindown(title, content, width, height, drag, time, showbg,
			cssName) {
		$("#windown-box").remove();
		var width = width >= 950 ? this.width = 950 : this.width = width;
		var height = height >= 527 ? this.height = 527 : this.height = height;
		if (showWindown == true) {
			var simpleWindown_html = new String;
			simpleWindown_html = "<div id=\"windownbg\" style=\"height:"
					+ $(document).height()
					+ "px;;filter:alpha(opacity=0);opacity:0;z-index: 999901\"><iframe style=\"width:100%;height:100%;border:none;filter:alpha(opacity=0);opacity:0;\">__tag_149$151_</div>";
			simpleWindown_html += "__tag_150$25_";
			simpleWindown_html += "__tag_151$25_<h2>__tag_151$55_<span id=\"windown-close\">鍏抽棴__tag_151$90_</div>";
			simpleWindown_html += "__tag_152$25_<div id=\"windown-content\">__tag_152$88_</div>";
			simpleWindown_html += "__tag_153$25_";
			$("body").append(simpleWindown_html);
			show = false;
		}
		contentType = content.substring(0, content.indexOf(":"));
		content = content.substring(content.indexOf(":") + 1, content.length);
		switch (contentType) {
		case "text":
			$("#windown-content").html(content);
			break;
		case "id":
			$("#windown-content").html($("#" + content + "").html());
			break;
		case "img":
			$("#windown-content").ajaxStart(function() {
				$(this).html("__tag_172$12_");
			});
			$.ajax( {
				error : function() {
					$("#windown-content").html("__tag_178$32_</p>");
				},
				success : function(html) {
					$("#windown-content").html("__tag_182$7_");
				}
			});
			break;
		case "url":
			var content_array = content.split("?");
			$("#windown-content").ajaxStart(function() {
				$(this).html("__tag_193$12_");
			});
			$.ajax( {
				type : content_array[0],
				url : content_array[1],
				data : content_array[2],
				error : function() {
					$("#windown-content").html("__tag_202$32_</p>");
				},
				success : function(html) {
					$("#windown-content").html(html);
				}
			});
			break;
		case "iframe":
			$("#windown-content").ajaxStart(function() {
				$(this).html("__tag_215$12_");
			});
			$
					.ajax( {
						error : function() {
							$("#windown-content").html("__tag_223$9_</p>");
						},
						success : function(html) {
							$("#windown-content")
									.html(
											"<iframe src='/Public/static/rzg_js//"
													+ content
													+ " width=\"100%\" height=\""
													+ parseInt(height)
													+ "px"
													+ "\" scrolling=\"auto\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">__tag_233$92_");
						}
					});
		}
		$("#windown-title h2").html(title);
		if (showbg == "true") {
			$("#windownbg").show();
		} else {
			$("#windownbg").remove();
		}
		;
		$("#windownbg").animate( {
			opacity : "0.5"
		}, "normal");
		$("#windown-box").show();
		if (height >= 527) {
			$("#windown-title").css( {
				width : (parseInt(width) + 22) + "px"
			});
			$("#windown-content").css( {
				width : (parseInt(width) + 17) + "px",
				height : height + "px"
			});
		} else {

			$("#windown-title").css( {
				width : (parseInt(width) + 10) + "px"
			});
			$("#windown-content").css( {
				width : width + "px",
				height : height + "px"
			});
		}

		var cw, ch, est = document.documentElement.scrollTop;
		if (self.innerHeight) {
			cw = self.innerWidth;
			ch = self.innerHeight;
		} else if (document.documentElement
				&& document.documentElement.clientHeight) {
			cw = document.documentElement.clientWidth;
			ch = document.documentElement.clientHeight;
		} else if (document.body) {
			cw = document.body.clientWidth;
			ch = document.body.clientHeight;
		}
		var isIE6 = false;
		if (isIE6) {
			$("#windown-box").css( {
				left : "50%",
				top : (parseInt((ch) / 2) + est) + "px",
				marginTop : -((parseInt(height) + 53) / 2) + "px",
				marginLeft : -((parseInt(width) + 32) / 2) + "px",
				zIndex : "999999"
			});
		} else {
			$("#windown-box").css( {
				left : "50%",
				top : "50%",
				marginTop : -((parseInt(height) + 53) / 2) + "px",
				marginLeft : -((parseInt(width) + 32) / 2) + "px",
				zIndex : "999999"
			});
		}
		;
		var Drag_ID = document.getElementById("windown-box"), DragHead = document
				.getElementById("windown-title");

		var moveX = 0, moveY = 0, moveTop, moveLeft = 0, moveable = false;
		if (isIE6) {
			moveTop = est;
		} else {
			moveTop = 0;
		}
		var sw = Drag_ID.scrollWidth, sh = Drag_ID.scrollHeight;
		DragHead.onmouseover = function(e) {
			if (drag == "true") {
				DragHead.style.cursor = "move";
			} else {
				DragHead.style.cursor = "default";
			}
		};
		DragHead.onmousedown = function(e) {
			$("#windown-box").css( {
				opacity : "0.5"
			}, "normal");
			if (drag == "true") {
				moveable = true;
			} else {
				moveable = false;
			}
			e = window.event ? window.event : e;
			var ol = Drag_ID.offsetLeft, ot = Drag_ID.offsetTop - moveTop;
			moveX = e.clientX - ol;
			moveY = e.clientY - ot;
			document.onmousemove = function(e) {
				if (moveable) {

					e = window.event ? window.event : e;
					var x = e.clientX - moveX;
					var y = e.clientY - moveY;
					if (x > 0 && (x + sw < cw) && y > 0 && (y + sh < ch)) {
						Drag_ID.style.left = x + "px";
						Drag_ID.style.top = parseInt(y + moveTop) + "px";
						Drag_ID.style.margin = "auto";
					}
				}
			}
			document.onmouseup = function() {
				moveable = false;
				$("#windown-box").css( {
					opacity : "1"
				}, "normal");
			};
			Drag_ID.onselectstart = function(e) {
				return false;
			}
			$("#windown-content").attr("class", "windown-" + cssName);
			var closeWindown = function() {
				$("#windownbg").remove();
				$("#windown-box").fadeOut("slow", function() {
					$(this).remove();
				});
			}
			if (time == "" || typeof (time) == "undefined") {
				$("#windown-close").click(function() {
					$("#windownbg").remove();
					$("#windown-box").fadeOut("slow", function() {
						$(this).remove();
					});
				});
			} else {
				setTimeout(closeWindown, time);
			}
		}
	}
</script>-->
<!-- WPA Button Begin -->
<!-- <script charset="utf-8" type="text/javascript"
 	src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODAyNjA2MV8xNTgyNTlfNDAwMDkxMTgwNl8"></script>-->
<!-- WPA Button End -->
<!-- 弹窗脚本 -->
<script type="text/javascript">
		function cn(){
			ymPrompt.setDefaultCfg({title:'标题', message:"内容",okTxt:' 确 定 ',cancelTxt:' 取 消 ',closeTxt:'关闭',minTxt:'最小化',maxTxt:'最大化'});
		}
		function en(){
			ymPrompt.setDefaultCfg({title:'Default Title', message:"Default Message",okTxt:' OK ',cancelTxt:' Cancel ',closeTxt:'Close',minTxt:'Minimize',maxTxt:'Maximize'});
		}
		
		function slideHd(){
			ymPrompt.alert('看到效果了吗？');
		}

		function getInput(tp){
			if(tp!='ok') return ymPrompt.close();
			var v=$('myInput').value;
			if(v=='')
				alert('请输入您的名字！')
			else{
				alert('你输入的值为：'+v)
				ymPrompt.close();
			}
		}
		function getButtons(){
			var btnObjs=ymPrompt.getButtons(),arr=[];
			for(var i=0;i<btnObjs.length;i++)
				arr.push('按钮'+(i+1)+"内容:"+document.createElement("DIV").appendChild(btnObjs[i].cloneNode(true)).parentNode.innerHTML);
			alert(arr.join('\n\n'));
			ymPrompt.close();
		}
		function autoClose(){
			alert('三秒钟自动关闭');
			setTimeout(function(){ymPrompt.close()},3000)
		}
		function handlerIframe(){
			alert(ymPrompt.getPage().contentWindow.document.body.innerHTML);
			ymPrompt.close();
		}
		function noTitlebar(){
			alert('提示：除了可以通过增加按钮来控制，还可以在子页面中调用该页面的ymPrompt.close方法来关闭');
		}
		var Alert=ymPrompt.alert;
		function cancelFn(){
			Alert("点击了'取消'按钮");
		}
		function okFn(){
			Alert("点击了'确定'按钮");
		}
		function closeFn(){
			Alert("点击了'关闭'按钮");
		}
		function handler(tp){
			if(tp=='ok'){
				okFn();
			}
			if(tp=='cancel'){
				cancelFn();
			}
			if(tp=='close'){
				closeFn()
			}
		}
		function testHd(tp){
			Alert('你点击的按钮的标志为：'+tp);
		}
		function handler2(tp){
			if(tp=='ok'){
				ymPrompt.confirmInfo("保存成功!是否打印税票？",null,null,"问询提示",function(tp){tp=='ok'?ticketPrevie("print"):loadImposeInfo()})
			}
			if(tp=='cancel'){
				cancelFn();
			}
			if(tp=='close'){
				closeFn()
			}
		}
		function ticketPrevie(xx){
			Alert(xx)
		}
		function loadImposeInfo(){
			Alert("exit")
		}

		function stateHd(tp){
			ymPrompt[tp]();
		}
	</script>

	<!-- /底部 -->
</body>
</html>

<!-- 网站结构 -->