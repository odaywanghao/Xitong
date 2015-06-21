<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>书语</title>
  <link rel="stylesheet" href="/Xitong/Public/css/bootstrap.css">
  <link rel="stylesheet/less" href="/Xitong/Public/css/common.less">
  <script src="/Xitong/Public/js/jquery-2.0.0.js"></script>
  <script src="/Xitong/Public/js/bootstrap.min.js"></script>
  <script src="/Xitong/Public/js/common.js"></script>
</head>

<body>
  <div>

    <link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/login.less">

<div class="container">
  
	<form class="form-inline" method="post" action="/Xitong/index.php/Home/User/loginin/<?php echo ($gogo); ?>">
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