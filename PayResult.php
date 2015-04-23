<?
		//MD5私钥
	$MD5key = "ekNEwsTK";

	//订单号
	$BillNo = $_POST["BillNo"];
	//金额
	$Amount = $_POST["Amount"];
	//支付状态
	$Succeed = $_POST["Succeed"];
	//支付结果
	$Result = $_POST["Result"];
	//取得的MD5校验信息
	$SignMD5info = $_POST["SignMD5info"]; 
	//备注
	$Remark = $_POST["Remark"];



	//校验源字符串
  $md5src = $BillNo."&".$Amount."&".$Succeed."&".$MD5key;
  //MD5检验结果
	$md5sign = strtoupper(md5($md5src));
	
?>
<html>
<head>
<title>php</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<!-- 请加上你们网站的框架。就是你们网站的头部top，左部left等。还有字体等你们都要做调整。 -->

 <?
 if ($SignMD5info==$md5sign){
 ?>
 <!-- MD5验证成功 -->
<table width="728" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td  align="right" valign="top">Your order number is:</td>
    <td  align="left" valign="top"><?=$BillNo?></td>
  </tr>
  <tr>
    <td  align="right" valign="top">Amount:</td>
    <td align="left" valign="top"><?=$Amount?> </td>
  </tr>
  <tr>
    <td  align="right" valign="top">Payment result:</td>
	<? if ($Succeed=="88") { ?>
    <td align="left" valign="top" style="color:green;"><?=urldecode($Result)?></td><!-- 提交支付信息成功，返回绿色的提示信息 -->
	<!-- 可修改订单状态为正在付款中 -->
	<?
    }
	else 
		{
	?>
	<td  align="left" valign="top" style="color:red;"><?=urldecode($Result)?>&nbsp;&nbsp;&nbsp;&nbsp;<?=$Succeed?></td><!-- 提交支付信息失败，返回红色的提示信息 -->
	<? } ?>
  </tr>

</table>
<?
 }
else
{
?>
 <!-- MD5验证失败 -->
<table width="728" border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
    <td  align="center" valign="top" style="color:red;">Validation failed!</td>
	</tr>
	</table>

<? }?>
<p align="center"><a href="#" onClick="javascript:window.close()"><font size=2 color=blove>Close</font></a></p>
</body>
</html>
