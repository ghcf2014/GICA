<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<link href="http://res.sentsin.com/css/xu.css" type="text/css" rel="stylesheet" />
<script src="http://res.xiami.net/pc/lay/lib.js"></script>
<style>
body{padding:10px; font-size:14px; background:#fff; width:95%; margin:0 auto;}
p{margin-bottom:10px;}
button,input{border:1px solid #999; padding:5px 10px; margin:0 10px 10px 0;}
button{ cursor:pointer;}
.txt420{ width: 500px;height: 100px;}
</style>
<body><form action="<?php echo U('fankui_add');?>" method="post">
<p><strong><label>怎么称呼呢：</label></strong><input name="name" /></p>
<p>(=@__@=)哪里？么么哒。方便留下联系方式，以便日后参与我们的奖励回馈。</p>
<p><strong><label>问题内容细节：</label></strong></p>
<p><textarea class="txt420" name="content"></textarea></p>								   
<input type="submit" class="bcbtn"  value="上交问题" style="width:88px;">
 <p>* 温馨提示：如果要给管理员发送信息，请在内容里注明管理员字样。</p>

<script src="http://res.xiami.net/pc/lay/lib.js"></script>
<script src="http://res.sentsin.com/lay/lib/laycode/laycode.min.js"></script>
<script>
new Function($('.run').text())()
$('pre').show().laycode({height:180, title:'在iframe中对父页面的任何操作，都是借助于parent对象。'});
</script>
<script src='http://w.cnzz.com/c.php?id=30060348'></script>
</form>
</body>
</html>