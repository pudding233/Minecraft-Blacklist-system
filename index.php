<?php
include("./include/common.php");
?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title><?php echo $sitename;?>-龙渊团队管理</title>
	<meta name="keywords" content="<?php echo $keywords;?>"/>
	<meta name="description" content="<?php echo $description;?>"/>
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	body{
		margin: 0 auto;
		text-align: center;
	}
	.container {
	  max-width: 580px;
	  padding: 15px;
	  margin: 0 auto;
	}
	</style>
</head>
<?php
$str = "123456789abcd";
$bj .= $str[mt_rand(0, strlen($str)-1)];
?>
<body background="./images/bj/bj-<?php echo $bj;?>.jpg">
<div class="container">    <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li role="presentation" class="active"><a href="./">查询</a></li>
          <li role="presentation"><a href="http://ban.longyuan.store/qq.html" target="_blank">举报熊孩子</a></li>
        </ul>
        <h3 class="text-muted" align="left"><font color="#8968CD"><?php echo $sitename?></font></h3>
     </div><hr>
	 <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">公告栏</h3></div>
		<ul class="list-group">
		<li class="list-group-item">一旦被收录资料，让熊孩子无处可逃！欢迎小伙伴来举报！举报需要提供有效证据</li>
		<li class="list-group-item">站长:QQ 2480751781 举报请联系QQ，或者发送邮件至2480751781@qq.com </li>
                                <li class="list-group-item">龙渊团队管理 </li>
</p><p></p><b><a class="btn btn-block btn-danger" data-toggle="collapse" data-parent="#accordion2" href="#faq1" aria-expanded="false">关于举报熊孩子</a></b><div id="faq1" class="accordion-body collapse" style="height: 0px;" aria-expanded="false"><h5>举报请把有效资料整理好，白天请QQ联系，晚上请邮件联系，通常周六周日整理<p></p></h5></div><p></p>
</marquee></a>
<p class="bg-primary" style="background-color:#FF9900;padding: 3px;"><img border="0" width="32" src="1.gif" />如果是被他人恶意举报，正版UUID被恶意收录，请联系解除</p
<ul class="list-group">
  <li class="list-group-item"><span class="glyphicon glyphicon-time"></span> <b>现在时间：</b> <?=$date?></li>
		</ul>
      </div>
	 <h3 class="form-signin-heading">输入UUID查询</h3>
	 <form action="" class="form-sign" method="post">
	 <input type="text" class="form-control" name="qq" placeholder="请输入查询UUID" value=""><br>
	 <input type="submit" class="btn btn-primary btn-block" value="点击查询"><br/>
	 <p style="text-align:left">
<?php
if($qq=$_POST['qq']) {
	$qq=$_POST['qq'];
	$row=$DB->get_row("SELECT * FROM black_list WHERE qq='$qq' limit 1");
	echo '<label>查询UUID：'.$qq.'</label><br>';
	if($row) {
		echo '
		<label>黑名单等级：</label>
		<font color="blue">'.$row['level'].'级</font><br>
		<label>黑名单时间：</label>
		<font color="blue">'.$row['date'].'</font><br>
		<label>黑名单来源：</label>
		<font color="blue">'.$row['source'].'</font><br>
		<label>黑名单原因：</label>
		<font color="blue">'.$row['note'].'</font><br>
		<label><font color="red">请腐竹及时拉黑</font></label>';
?>
<br>
<?php
	}else{
		echo '<label><font color="green">该玩家没有拉黑，但不保证安全</font></label>';
	}
}
$DB->close();
?>
	 </p><hr><div class="container-fluid">
  <a href="https://afdian.net/@longyuan" target="_blank" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-erase"></span>赞助</a>
  <a href="./siteadmin/" target="_blank" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-user"></span> 管理</a>
</div>
<p style="text-align:center">
<br><label>其他项目:</label><a href="http://daohang.longyuan.store/" target="_blank">网址导航 </a><label>|</label> <a href="https://ssl.longyuan.store/" target="_blank">自签ssl</a>
<br></label> <a href="https://longyuan.store/" target="_blank">布丁の基地(博客)</a>
</p></div>
</body>
</html>