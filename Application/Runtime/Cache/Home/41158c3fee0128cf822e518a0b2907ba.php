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

    <?php
 $user = getUsername(); ?>

<link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/bookAllNotes.less">

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

	<!-- 添加新评论 -->
	<div id="addNote">
		<h5>添加新笔记</h5>
		<a href="/Xitong/index.php/Home/Notes/addNote">点击这...</a>
	</div>


	<!-- 笔记列表 -->
	<h5>笔记列表</h5>
	<?php $__FOR_START_1530217604__=0;$__FOR_END_1530217604__=$allNotesCount;for($i=$__FOR_START_1530217604__;$i < $__FOR_END_1530217604__;$i+=1){ ?><div class="bookAllNotesList">
			<div class="NoteBasic">
				<a href="profile">用户: <?php echo ($allNotes[$i][username]); ?></a>
				<p>章节:  <?php echo ($allNotes[$i][chapter]); ?></p>
				<p>页码:  <?php echo ($allNotes[$i][page]); ?></p>
			</div>
			<div class="NoteInfo">
				<p><?php echo ($allNotes[$i][note]); ?></p>
				<img src="/Xitong/Uploads/NotePhotoes/<?php echo ((isset($allNotes[$i][photo] ) && ($allNotes[$i][photo] !== ""))?($allNotes[$i][photo] ):'55850c7b8b5b3.jpg'); ?>" alt=".">
				<span><?php echo date("Y-m-d ", $allNotes[$i][create_time]) ?></span>
			</div>
		</div><?php } ?>
</div>

  </div>
</body>
  <script src="/Xitong/Public/js/Less.js"></script>
</html>