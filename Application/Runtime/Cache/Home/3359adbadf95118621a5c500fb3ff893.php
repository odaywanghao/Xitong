<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>书语</title>
  <link rel="stylesheet" href="/Xitong/Public/css/bootstrap.min.css">
  <link rel="stylesheet/less" href="/Xitong/Public/css/common.less">
  <script src="/Xitong/Public/js/jquery-2.0.0.js"></script>
  <script src="/Xitong/Public/js/bootstrap.min.js"></script>
  <script src="/Xitong/Public/js/common.js"></script>
</head>

<body>
  <div>

    <link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/register.less">

	<div class="container">

		<form method="post" action="/Xitong/index.php/Home/User/addUsers">
		  <div>
		    <label for="username">用户名</label>
	      <input type="text" class="form-control" name="username" placeholder="username">
		  </div>
		  <div>
		    <label for="email">邮箱</label>
	      <input type="email" class="form-control" name="email" placeholder="1@qq.com">
		  </div>
		  <div>
		    <label for="password">密码</label>
	      <input type="password" class="form-control" name="password" placeholder="password">
		  </div>
		  <div>
		    <label for="repassword">确认密码</label>
	      <input type="password" class="form-control" name="repassword" placeholder="password">
		  </div>
		  
		  <div class="register_bt">
	      <button type="submit" class="btn btn-default">注 册</button>
	  		<a href="<?php echo U(login);?>" class="signIn">已注册? 返回登录</a>
		  </div>
		</form>
	</div>

	<div class="clear"></div>



  </div>
</body>
  <script src="/Xitong/Public/js/Less.js"></script>
</html>