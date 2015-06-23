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

    <link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/background.less">

<?php
 $arrayBook = ""; $arrayNoteEvery = ""; $arrayComment = ""; $arrayNoteCount = ""; foreach($bookCount as $key=>$value) { $arrayBook = $arrayBook.$value.'-'; } $arrayBook = $arrayBook.$bookAllCount; foreach ($noteEveryCount as $key => $value) { $arrayNoteEvery = $arrayNoteEvery.$value.'-'; } $arrayNoteEvery = strrev(substr($arrayNoteEvery, 0, -1)); foreach ($commentCount as $key => $value) { $arrayComment = $arrayComment.$value.'-'; } $arrayComment = $arrayComment.$commentAllCount; foreach ($noteCount as $key => $value) { $arrayNoteCount = $arrayNoteCount.$value.'-'; } $arrayNoteCount = $arrayNoteCount.$noteAllCount; ?>

<h1>Users </h1><br/>
userCount:<?php echo ($userCount); ?>
<h2>firstUser</h2><br/>
username:<?php echo ($userAll[0][username]); ?><br/>
password:<?php echo ($userAll[0][password]); ?><br/>
email:<?php echo ($userAll[0][email]); ?><br/>

nowTime:<?php echo ($nowTime); ?><br/>

<div class="container">
	<div class="canvas">
		<canvas id="noteCount" width="400" height="400" data-data="<?php echo ($arrayNoteCount); ?>"></canvas>
		<h3>笔记数目统计</h3>
	</div>
	<div class="canvas">
		<canvas id="bookCount" width="400" height="400" data-data="<?php echo ($arrayBook); ?>"></canvas>
		<h3>书数目统计</h3>
	</div>
</div>

<form method="post" action="/Xitong/index.php/Admin/BackGround/manageUser">
	<input type="submit" value="管理用户" />
</form>


<form method="post" action="/Xitong/index.php/Admin/BackGround/manageBook">
	<input type="submit" value="管理图书" />
</form>

<div class="container">
	<div class="canvas">
		<canvas id="commentCount" width="400" height="400" data-data="<?php echo ($arrayComment); ?>"></canvas>
		<h3>评论数目统计</h3>
	</div>
	<div class="canvas">
		<canvas id="noteEveryCount" width="400" height="400" data-data="<?php echo ($arrayNoteEvery); ?>"></canvas>
		<h3>笔记数目统计</h3>
	</div>
</div>

<script src="/Xitong/Public/js/char.js"></script>
<script src="/Xitong/Public/js/chart.js"></script>

  </div>
</body>
  <script src="/Xitong/Public/js/Less.js"></script>
</html>