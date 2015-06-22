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
		<a href="{U:(profile)}"><?php echo ((isset($user ) && ($user !== ""))?($user ):"未登录"); ?></a>
		<?php if(!empty($user)): ?><a href="/Xitong/index.php/Home/Notes/logout">登出</a><?php endif; ?>
		<a class="showMore" href="#">更多</a>
	</p>
	<ul class="hidden_menu">
		<li>
			<a class="clickNote" href="/Xitong/index.php/Home/Notes/myAllNotes">我的笔记</a>
			<!-- <a class="clickNote" href="<?php echo U(myBookNotes);?>">我的笔记</a> -->

		</li>
		<li>
			<a class="clickNote" href="/Xitong/index.php/Home/Notes/bookAllNotes">所有笔记</a>
			<a class="clickNote" href="<?php echo U(bookAllNotes);?>">所有笔记</a>
		</li>
	</ul>
</div>


<div class="container">

	<!-- 添加新评论 -->
	<div id="addNote">
		<h5>添加新评论</h5>
		<a href="/Xitong/index.php/Home/Notes/addNote">点击这...</a>
	</div>


	<!-- 笔记列表 -->
	<h5>笔记列表</h5>
	<?php $__FOR_START_17186__=0;$__FOR_END_17186__=$allNotesCount;for($i=$__FOR_START_17186__;$i < $__FOR_END_17186__;$i+=1){ ?><div class="commentsList">
			<img src="<?php echo ((isset($userHead ) && ($userHead !== ""))?($userHead ):'/Xitong/Public/img/1.jpg'); ?>" alt="用户头像" />
			<div>
				<a href="#"><?php echo ($allNotes[$i][username]); ?></a>
				<p><?php echo ($allNotes[$i][page]); ?></p>
				<p><?php echo ($allNotes[$i][chapter]); ?></p>
				<p><?php echo ($allNotes[$i][note]); ?></p>
				<img src="/Xitong/Uploads/NotePhotoes/<?php echo ($allNotes[0][photo]); ?>" alt=".">
				<span><?php echo ($allNotes[$i][create_time]); ?></span>
			</div>
		</div><?php } ?>
	<div class="bookAllNotesList">
		<div class="NoteBasic">
			<a href="profile">用户: 阿三</a>
			<p>章节:  十</p>
			<p>页码:  80</p>
		</div>
		<div class="NoteInfo">
			<p>这是一个神奇的国度, 然后这又跟我有什么关系呢?</p>
			<img src="/Xitong/Public/img/1.jpg" alt=".">
			<span>2014 - 4 - 4</span>
		</div>
	</div>
</div>

  </div>
</body>
  <script src="/Xitong/Public/js/Less.js"></script>
</html>