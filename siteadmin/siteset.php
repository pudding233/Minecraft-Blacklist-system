<?php
/**
 * 站点设置
**/
$mod='blank';
include("../include/common.php");
$title='站点设置';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">导航按钮</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">黑名单查询系统后台</a>
      </div><!-- /.navbar-header -->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="./"><span class="glyphicon glyphicon-user"></span> 平台首页</a>
          </li>
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-pushpin"></span> 黑名单管理<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="./add.php">添加黑名单</a><li>
			  <li><a href="./list.php">黑名单列表</a></li>
			  <li><a href="./search.php">搜索黑名单</a><li>
            </ul>
          </li>
		  <li class="active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> 系统管理<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="active"><a href="./siteset.php">站点设置</a><li>
			  <li><a href="./passwd.php">修改密码</a></li>
            </ul>
          </li>
          <li><a href="./login.php?logout"><span class="glyphicon glyphicon-off"></span> 退出登陆</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav><!-- /.navbar -->
  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<?php
if(isset($_POST['submit'])) {
	$sitename=daddslashes($_POST['sitename']);
	$description=daddslashes($_POST['description']);
	$keywords=daddslashes($_POST['keywords']);
                $limit=daddslashes($_POST['limit']);
	saveconfig('sitename',$sitename);
	saveconfig('description',$description);
	saveconfig('keywords',$keywords);
	saveconfig('limit',$limit);
	showmsg('修改成功！',1);
}else{
?>
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">站点设置</h3></div>
        <div class="panel-body">
          <form action="" method="post" class="form-horizontal" role="form">
            <div class="form-group">
              <label class="col-sm-2 control-label">站点名称</label>
              <div class="col-sm-10"><input type="text" name="sitename" value="<?php echo $sitename; ?>" class="form-control" required/></div>
            </div><br/>
			<div class="form-group">
              <label class="col-sm-2 control-label">SEO描述</label>
              <div class="col-sm-10"><input type="text" name="description" value="<?php echo $description; ?>" class="form-control" required/></div>
            </div><br/>
			<div class="form-group">
              <label class="col-sm-2 control-label">SEO关键词</label>
              <div class="col-sm-10"><input type="text" name="keywords" value="<?php echo $keywords; ?>" class="form-control" required/></div>
            </div><br/>
			<div class="form-group">
              <label class="col-sm-2 control-label">数据库上限(单位:MB)</label>
              <div class="col-sm-10"><input type="text" name="limit" value="<?php echo $limit; ?>" class="form-control" required/></div>
            </div><br/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-primary form-control"/>
            </div>
          </form>
        </div>
      </div>
<?php
}?>
    </div>
  </div>