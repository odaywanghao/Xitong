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
      <li><a href="/Xitong/index.php/Admin/Books/background">首 页</a></li>
      <li><a href="/Xitong/index.php/Admin/Books/manageUser">管理用户</a></li>
      <li><a href="/Xitong/index.php/Admin/Books/manageBook">管理图书</a></li>
      <li style="float: right"><a href="/Xitong/index.php/Admin/Books/logout">登 出</a></li>
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

    <link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/addNote.less">

<div class="container">
	<h5>添加新的书籍</h5>
	<form method="post" action="/Xitong/index.php/Admin/Books/addBookin" enctype="multipart/form-data">
		<div>
			<label for="chapter">书名</label>
			<input type="text" name="bookname" placeholder="一" />
		</div>
		<div>
			<label for="page">出版社</label>
			<input type="text" name="press" placeholder="1" />
		</div>
		<div>
			<label for="page">ISBN</label>
			<input type="text" name="ISBN" placeholder="1" />
		</div>
		<div>
			<label for="page">作者</label>
			<input type="text" name="author" placeholder="1" />
		</div>

		<div>
			<label for="note">简介</label>
			<textarea name='summary' id='note' rows="6" placeholder="......简介......"></textarea>
		</div>
		<div>
			<label for="photo">上传图片</label>
			<input type="file" name="photo" />
		</div>
		<input type="submit" value="提交">
	</form>
</div>

  </div>
</body>
  <script src="/Xitong/Public/js/Less.js"></script>
</html>