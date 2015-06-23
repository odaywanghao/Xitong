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

    <link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/addNote.less">

<link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/common.less">

<div id="header">
	<p>
		<a href="User/login"><?php echo ((isset($user ) && ($user !== ""))?($user ):"未登录"); ?></a>
		<?php if(!empty($user)): ?><a href="/Xitong/index.php/Admin/Books/logout">登出</a><?php endif; ?>
		<a class="showMore" href="#">更多</a>
	</p>
	<ul class="hidden_menu">
		<li>
			<a class="clickNote" href="/Xitong/index.php/Admin/Books/myAllNotes">我的笔记</a>
		</li>
		<li>
			<a class="clickNote" href="/Xitong/index.php/Admin/Books/allNotes">所有笔记</a>
		</li>
		<li>
			<a class="clickNote" href="/Xitong/index.php/Admin/Books/allBooks">所有书目</a>
		</li>
	</ul>
</div>


	

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