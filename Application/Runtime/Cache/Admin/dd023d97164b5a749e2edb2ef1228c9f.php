<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>书语后台管理</title>
  <link rel="stylesheet" href="/Xitong/Public/css/bootstrap.min.css">
  <script src="/Xitong/Public/js/jquery-2.0.0.js"></script>
  <script src="/Xitong/Public/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">书语后台</a>
    <ul style="float: none" class="nav">
      <li><a href="/Xitong/index.php/Admin/User/background">首 页</a></li>
      <li><a href="/Xitong/index.php/Admin/User/manageUser">管理用户</a></li>
      <li><a href="/Xitong/index.php/Admin/User/manageBook">管理图书</a></li>
      <li style="float: right"><a href="/Xitong/index.php/Admin/User/logout">登 出</a></li>
      <li style="float: right; font-size: 12px; margin-right: 50px"><a href="#">当前时间: <?php echo date("Y-m-d ", $nowTime) ?></a></li>
    </ul>
  </div>
</div>
<script>
	$(document).ready(function() {
		var path = window.location.href;
		if (path.indexOf('BackGround') >= 0)
			$('ul.nav li').eq(0).addClass('active');
		else if (path.indexOf('User') >= 0)
			$('ul.nav li').eq(1).addClass('active');
		else
			$('ul.nav li').eq(2).addClass('active');
	});
</script>
  <div>

    <link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/Blogin.less">

<div id="Blogin" class="container">
	<form action="/Xitong/index.php/Admin/User/loginin" method="post" class="form-horizontal" role="form">
		<div>
	    <label for="username" class="col-sm-2">用户名</label>
      <input type="text" class="form-control" name="username" placeholder="username">
	  </div>
	  <div>
	    <label for="password" class="col-sm-2">密码 </label>
	    <input type="password" class="form-control" name="password" placeholder="password">
	  </div>
	    <input type="submit" class="btn btn-default" value="登录" />
	</form>
</div>

  </div>
</body>
  <script src="/Xitong/Public/js/Less.js"></script>
</html>