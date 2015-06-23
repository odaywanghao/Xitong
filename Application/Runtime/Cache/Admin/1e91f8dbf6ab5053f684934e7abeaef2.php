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
      <li><a href="/Xitong/index.php/Admin/BackGround/background">首 页</a></li>
      <li><a href="/Xitong/index.php/Admin/BackGround/manageUser">管理用户</a></li>
      <li><a href="/Xitong/index.php/Admin/BackGround/manageBook">管理图书</a></li>
      <li style="float: right"><a href="/Xitong/index.php/Admin/BackGround/logout">登 出</a></li>
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

    <link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/background.less">

<?php
 $arrayBook = ""; $arrayNoteEvery = ""; $arrayComment = ""; $arrayUserEvery = ""; foreach($bookCount as $key=>$value) { $arrayBook = $arrayBook.$value.'-'; } $arrayBook = $arrayBook.$bookAllCount; foreach ($noteEveryCount as $key => $value) { $arrayNoteEvery = $arrayNoteEvery.$value.'-'; } $arrayNoteEvery = strrev(substr($arrayNoteEvery, 0, -1)); foreach ($commentCount as $key => $value) { $arrayComment = $arrayComment.$value.'-'; } $arrayComment = $arrayComment.$commentAllCount; foreach ($userEveryCount as $key => $value) { $arrayUserEvery = $arrayUserEvery.$value.'-'; } $arrayUserEvery = strrev(substr($arrayUserEvery, 0, -1)); ?>


	<div class="container">
		<div class="canvas">
			<canvas id="userEveryCount" data-data="<?php echo ($arrayUserEvery); ?>"></canvas>
			<h3>用户数目统计</h3>
		</div>
		<div class="canvas">
			<canvas id="bookCount" data-data="<?php echo ($arrayBook); ?>"></canvas>
			<h3>书数目统计</h3>
		</div>
	</div>

	<div class="container">
		<div class="canvas">
			<canvas id="commentCount" data-data="<?php echo ($arrayComment); ?>"></canvas>
			<h3>评论数目统计</h3>
		</div>
		<div class="canvas">
			<canvas id="noteEveryCount" data-data="<?php echo ($arrayNoteEvery); ?>"></canvas>
			<h3>笔记数目统计</h3>
		</div>
	</div>

<script src="/Xitong/Public/js/char.js"></script>
<script src="/Xitong/Public/js/chart.js"></script>

  </div>
</body>
  <script src="/Xitong/Public/js/Less.js"></script>
</html>