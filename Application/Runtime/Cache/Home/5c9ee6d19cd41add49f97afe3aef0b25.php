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

    <link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/Flogin.less">


	<div id="Flogin" class="container">
		<div class="login_img"></div>
		<form action="/Xitong/index.php/Home/User/loginin/<?php echo ($gogo); ?>" method="post" class="form-horizontal" role="form">
			<div>
		    <label for="username" class="col-sm-2">用户名</label>
	      <input type="text" class="form-control" name="username" placeholder="username">
		  </div>
		  <div>
		    <label for="password" class="col-sm-2">密码 </label>
		    <input type="password" class="form-control" name="password" placeholder="password">
		  </div>
		  <div>
		    <input type="submit" class="btn btn-primary" value="登 录" />
	  		<a href="<?php echo U(register);?>" class="signUp">注 册</a>
  		</div>
		</form>
	</div>


  </div>
</body>
  <script src="/Xitong/Public/js/Less.js"></script>
</html>