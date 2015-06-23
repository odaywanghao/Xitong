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
    <ul class="nav">
      <li><a href="/Xitong/index.php/Admin/User/background">首 页</a></li>
      <li><a href="/Xitong/index.php/Admin/User/manageUser">管理用户</a></li>
      <li><a href="/Xitong/index.php/Admin/User/manageBook">管理图书</a></li>
      <li><a href="#">当前时间: <?php echo date("Y-m-d ", $nowTime) ?></a></li>
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

    <link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/login.less">

<div class="container">
  
	<form class="form-inline" method="post" action="/Xitong/index.php/Admin/User/loginin/<?php echo ($gogo); ?>">
		<div class="login_img"></div>

	  <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-addon">&ensp;</div>
	      <input type="text" class="form-control" name="username" id="userName" placeholder="用户名">
	    </div>
	    <div class="input-group">
	      <div class="input-group-addon">&ensp;</div>
	      <input type="password" class="form-control" name="password" id="password" placeholder="密码">
	    </div>
	  </div>
	  <button type="submit" class="btn btn-primary">登 录</button>
	  <a href="<?php echo U(register);?>" class="signUp">注 册</a>
	</form>

</div>

<script type="text/javascript">
	$('body').height($(window).height());
</script>


  </div>
</body>
  <script src="/Xitong/Public/js/Less.js"></script>
</html>