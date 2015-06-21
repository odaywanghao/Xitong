<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>书语</title>
  <link rel="stylesheet" href="/think/Public/css/bootstrap.css">
  <link rel="stylesheet/less" href="/think/Public/css/common.less">
  <script src="/think/Public/js/jquery-2.0.0.js"></script>
  <script src="/think/Public/js/bootstrap.min.js"></script>
  <script src="/think/Public/js/common.js"></script>
</head>

<body>
  <div>

    <?php
 $user = getUsername(); ?>

<link rel="stylesheet/less" type="text/css" href="/think/Public/css/comments.less">

<link rel="stylesheet/less" type="text/css" href="/think/Public/css/common.less">

<div id="header">
	<p>
		<a href="#"><?php echo ((isset($user ) && ($user !== ""))?($user ):"未登录"); ?></a>
		<?php if(!empty($user)): ?><a href="/think/index.php/Home/Comments/logout">登出</a><?php endif; ?>
		<a class="showMore" href="#">更多</a>
	</p>
	<ul class="hidden_menu">
		<li>
			<a class="clickNote" href="<?php echo U(myBookNotes);?>">我的笔记</a>
		</li>
		<li>
			<a class="clickNote" href="<?php echo U(allNote);?>">所有笔记</a>
		</li>
	</ul>
</div>


<div class="container">
<!-- 书的信息 -->
	<div id="book">
		<h5><?php echo ($bookInfo[bookname]); ?></h5>
		<img src="<?php echo ((isset($bookInfo[picture] ) && ($bookInfo[picture] !== ""))?($bookInfo[picture] ):'/think/Public/img/1.jpg'); ?>">
		<div id="bookInfo">
			<p><span>作&ensp;者:</span> <?php echo ($bookInfo[author]); ?></p>
			<p><span>出版社:</span> <?php echo ($bookInfo[press]); ?></p>
			<p><span>ISBN:</span> <?php echo ($bookInfo[isbn]); ?></p>		
			<div id="clickZan">
		    <span><?php echo ($bookzanCount); ?></span>
				<?php if($userDianzan == 1): ?><div class="heart" data-url="/think/index.php/Home/Comments/dianzan/"> </div>
				<?php else: ?>
					<div class="heart active" data-url="/think/index.php/Home/Comments/dianzan/"> </div><?php endif; ?>
			</div>
			<p class="bookSummary"><span>内容简介:</span> <?php echo ($bookInfo[summary]); ?></p>
		</div>
	</div>

	<!-- 添加新评论 -->
	<div id="addComment">
		<h5>添加新评论</h5>
		<form method="post" action="/think/index.php/Home/Comments/addComment">
			<textarea name='comment' id='comment' rows="2" placeholder="......评论......"></textarea>
			<input type="submit" value="提交">
		</form>
	</div>

	<!-- 书评列表 -->
	<h5>书评列表</h5>
	<?php $__FOR_START_11037__=0;$__FOR_END_11037__=$commentsCount;for($i=$__FOR_START_11037__;$i < $__FOR_END_11037__;$i+=1){ ?><div class="commentsList">
			<img src="<?php echo ((isset($userHead ) && ($userHead !== ""))?($userHead ):'/think/Public/img/1.jpg'); ?>" alt="用户头像" />
			<div>
				<a href="#"><?php echo ($commentsList[$i][username]); ?></a>
				<p><?php echo ($commentsList[$i][comment]); ?></p>
				<span><?php echo ($commentsList[$i][create_time]); ?></span>
			</div>
		</div><?php } ?>
</div>


<script src="/think/Public/js/comments.js"></script>

  </div>
</body>
  <script src="/think/Public/js/Less.js"></script>
</html>