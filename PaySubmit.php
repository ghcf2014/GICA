
<?
     
     $MD5key = "ekNEwsTK";		//MD5私钥
     $MerNo = "26798";					//商户号
     $BillNo =date("his");		//[必填]订单号(商户自己产生：要求不重复)
     $Amount = "0.01";				//[必填]订单金额
  
     $ReturnURL = "http://".$_SERVER['SERVER_NAME']."/PayResult.php"; 			//[必填]返回数据给商户的地址(商户自己填写):
     $Remark = "";  //[选填]升级。
     

    $md5src = $MerNo."&".$BillNo."&".$Amount."&".$ReturnURL."&".$MD5key;		//校验源字符串
    $SignInfo = strtoupper(md5($md5src));		//MD5检验结果


	 $AdviceURL ="http://".$_SERVER['SERVER_NAME']."/PayResult.php";   //[必填]支付完成后，后台接收支付结果，可用来更新数据库值;和ReturnURL接受的支付结果是一样的，这个是异步接受的。
	 $orderTime ="";   //[必填]交易时间YYYYMMDDHHMMSS
	 $defaultBankNumber ="CCBSH";   //[选填]银行代码s 

	 //送货信息(方便维护，请尽量收集！如果没有以下信息提供，请传空值:'')
	 //因为关系到风险问题和以后商户升级的需要，如果有相应或相似的内容的一定要收集，实在没有的才赋空值,谢谢。

    $products="金额充值";// '------------------物品信息

?>
<html>
<head>
<title>Payment By CreditCard online</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<form action="https://pay.ecpss.com/sslpayment" method="post" name="E_FORM">
  <table align="center">
    
    <tr>
      <td></td>
      <td><input type="hidden" name="MerNo" value="<?=$MerNo?>"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="hidden" name="BillNo" value="<?=$BillNo?>"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="hidden" name="Amount" value="<?=$Amount?>"></td>
    </tr>

    <tr>
      <td></td>
      <td><input type="hidden" name="ReturnURL" value="<?=$ReturnURL?>" ></td>
    </tr>
    
	 <tr>
      <td></td>
      <td><input type="hidden" name="AdviceURL" value="<?=$AdviceURL?>" ></td>
    </tr>
	 <tr>
      <td></td>
      <td><input type="hidden" name="orderTime" value="<?=$orderTime?>"></td>
    </tr>
    
	 <tr>
      <td></td>
      <td><input type="hidden" name="defaultBankNumber" value="<?=$defaultBankNumber?>"></td>
    </tr>

    <tr>
      <td></td>
      <td><input type="hidden" name="SignInfo" value="<?=$SignInfo?>"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="hidden" name="Remark" value="<?=$Remark?>"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="hidden" name="products" value="<?=$products?>"></td>
    </tr>
  </table>
  <p align="center">
    <input type="submit" name="b1" value="Payment">
  </p>
</form>
</body>
</html>
