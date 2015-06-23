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

<link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/book.less">

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


	

<form method="post" action="/Xitong/index.php/Admin/Books/addBook">
					<input type="submit" value="addBook" />
</form>



<div class="container" id="bookList">
	<!-- 书的列表 -->
	<h5>书的列表</h5>
	<?php $__FOR_START_1909704370__=0;$__FOR_END_1909704370__=$countBooks;for($i=$__FOR_START_1909704370__;$i < $__FOR_END_1909704370__;$i+=1){ ?><div id="book">
			<h5><?php echo ($allBooks[$i][bookname]); ?></h5>
			<img src="<?php echo ((isset($allBooks[$i][picture] ) && ($allBooks[$i][picture] !== ""))?($allBooks[$i][picture] ):'/Xitong/Public/img/1.jpg'); ?>">
			<div id="bookInfo">
				<p><span>作&ensp;者:</span> <?php echo ($allBooks[$i][author]); ?></p>
				<p><span>出版社:</span> <?php echo ($allBooks[$i][press]); ?></p>
				<p><span>ISBN:</span> <?php echo ($allBooks[$i][isbn]); ?></p>		
				<p class="bookSummary"><span>内容简介:</span> <?php echo ($allBooks[$i][summary]); ?></p>
			</div>
			<div class="form">
				<form method="post" action="/Xitong/index.php/Admin/Books/lookComments">
					<input type="hidden" name="id" value="<?php echo ($allBooks[$i][id]); ?>" />
					<input type="submit" value="<<< 查看书评" />
				</form>
				<form method="post" action="/Xitong/index.php/Admin/Books/deleteBook">
					<input type="hidden" name="id" value="<?php echo ($allBooks[$i][id]); ?>" />
					<input type="submit" value="<<  删除书籍  >>" />
				</form>
				<form method="post" action="/Xitong/index.php/Admin/Books/lookNotes">
					<input type="hidden" name="id" value="<?php echo ($allBooks[$i][id]); ?>" />
					<input type="submit" value="查看笔记 >>>" />
				</form>
			</div>
		</div><?php } ?>

</div>

  </div>
</body>
  <script src="/Xitong/Public/js/Less.js"></script>
</html>