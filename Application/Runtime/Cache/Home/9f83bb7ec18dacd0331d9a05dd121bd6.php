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

    <?php
 $user = getUsername(); ?>

<link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/addNote.less">

<link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/common.less">

<div id="header">
	<p>
		<a href="User/login"><?php echo ((isset($user ) && ($user !== ""))?($user ):"未登录"); ?></a>
		<?php if(!empty($user)): ?><a href="/Xitong/index.php/Home/Notes/logout">登出</a><?php endif; ?>
		<a class="showMore" href="#">更多</a>
	</p>
	<ul class="hidden_menu">
		<li>
			<a class="clickNote" href="/Xitong/index.php/Home/Notes/myAllNotes">我的笔记</a>
		</li>
		<li>
			<a class="clickNote" href="/Xitong/index.php/Home/Notes/allNotes">所有笔记</a>
		</li>
		<li>
			<a class="clickNote" href="/Xitong/index.php/Home/Notes/allBooks">所有书目</a>
		</li>
	</ul>
</div>


	

<div class="container">
	<h5>修改笔记</h5>
	<form method="post" action="/Xitong/index.php/Home/Notes/addNoteUp" enctype="multipart/form-data">
		<div>
			<input type="hidden" name="id" value="<?php echo ($note[id]); ?>" />
		</div>
		<div>
			<label for="chapter">章节</label>
			<input type="text" name="chapter" value="<?php echo ($note[chapter]); ?>" />
		</div>
		<div>
			<label for="page">页码</label>
			<input type="text" name="page" value="<?php echo ($note[page]); ?>" />
		</div>
		<div>
			<label for="note">内容</label>
			<textarea name='note' id='note' rows="6" value="<?php echo ($note[note]); ?>"><?php echo ($note[note]); ?></textarea>
		</div>
		<div>
			<label for="public">是否公开</label>
			<input type="radio" value="1" name="public" checked="checked" />所有人可见
			<input type="radio" value="0" name="public" />自仅己可见
		</div>
		<div>
			<img class="preImg" src="/Xitong/Uploads/NotePhotoes/<?php echo ($note[photo]); ?>" alt=".">
			<label for="photo">上传图片</label>
			<input type="file" name="photo" />
		</div>
		<input type="submit" value="修 改">
	</form>
</div>

  </div>
</body>
  <script src="/Xitong/Public/js/Less.js"></script>
</html>