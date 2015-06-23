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

    <link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/register.less">

	<div class="container col-xs-12 col-sm-6 col-md-4 col-lg-4">

		<form class="form-horizontal" method="post" action="/Xitong/index.php/Home/User/addUsers">
		  <div class="form-group">
		    <label for="username" class="col-xs-4 col-sm-3 col-md-4 control-label">用户名</label>
		    <div class="col-xs-8 col-sm-7 col-md-8 ">
		      <input type="text" class="form-control" name="username" placeholder="username">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="email" class="col-xs-4 col-sm-3 col-md-4 control-label">邮箱</label>
		    <div class="col-xs-8 col-sm-7 col-md-8">
		      <input type="email" class="form-control" name="email" placeholder="1@qq.com">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="password" class="col-xs-4 col-sm-3 col-md-4 control-label">密码</label>
		    <div class="col-xs-8 col-sm-7 col-md-8">
		      <input type="password" class="form-control" name="password" placeholder="password">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="repassword" class="col-xs-4 col-sm-3 col-md-4 control-label">确认密码</label>
		    <div class="col-xs-8 col-sm-7 col-md-8">
		      <input type="password" class="form-control" name="repassword" placeholder="password">
		    </div>
		  </div>
		  
		  <div class="form-group register_bt">
	      <button type="submit" class="btn btn-default">注 册</button>
	  		<a href="<?php echo U(login);?>" class="signIn">已注册? 返回登录</a>
		  </div>
		</form>
	</div>

	<div class="clear"></div>

<script type="text/javascript">
	$('body').height($(window).height());
</script>

  </div>
</body>
  <script src="/Xitong/Public/js/Less.js"></script>
</html>