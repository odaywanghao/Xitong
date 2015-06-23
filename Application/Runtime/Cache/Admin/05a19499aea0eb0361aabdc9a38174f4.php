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

    <?php
 $user = getUsername(); ?>

<link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/comments.less">
<link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/manageBook.less">

<div class="container">
	<h3>书的信息</h3>
	<!-- 书的信息 -->
	<div id="book">
		<h5><?php echo ($bookInfo[bookname]); ?></h5>
		<img src="/Xitong/Uploads/BookPhotoes/<?php echo ((isset($bookInfo[picture] ) && ($bookInfo[picture] !== ""))?($bookInfo[picture] ):'1.jpg'); ?>">
		<div id="bookInfo">
			<p><span>作&ensp;者:</span> <?php echo ($bookInfo[author]); ?></p>
			<p><span>出版社:</span> <?php echo ($bookInfo[press]); ?></p>
			<p><span>ISBN:</span> <?php echo ($bookInfo[isbn]); ?></p>		
			<p class="bookSummary"><span>内容简介:</span> <?php echo ($bookInfo[summary]); ?></p>
		</div>
	</div>
</div>

<div class="container">
	<!-- 笔记列表 -->
	<h3>笔记列表</h3>
	<table id="list" class="table table-hover table-condensed">
		<thead>
			<tr>
				<th>用户头像</th>
				<th>用户名</th>
				<th>章节</th>
				<th>页码</th>
				<th>笔记内容</th>
				<th>附带图片</th>
				<th>是否公开</th>
				<th>记录时间</th>
				<th>.</th>
			</tr>
		</thead>
		<tbody>
			<?php $__FOR_START_916943526__=0;$__FOR_END_916943526__=$allNotesCount;for($i=$__FOR_START_916943526__;$i < $__FOR_END_916943526__;$i+=1){ ?><tr>
					<td align="center"><img src="<?php echo ((isset($userHead ) && ($userHead !== ""))?($userHead ):'/Xitong/Public/img/1.jpg'); ?>" alt="用户头像" /></td>
					<td align="center"><a href="#"><?php echo ($allNotes[$i][username]); ?></a></td>
					<td align="center"><?php echo ($allNotes[$i][chapter]); ?></td>
					<td align="center"><?php echo ($allNotes[$i][page]); ?></td>
					<td align="center"><?php echo ($allNotes[$i][note]); ?></td>
					<td align="center"><img src="/Xitong/Uploads/NotePhotoes/<?php echo ((isset($allNotes[$i][photo] ) && ($allNotes[$i][photo] !== ""))?($allNotes[$i][photo] ):'1.jpg'); ?>" alt="."></td>
					<td align="center"><?php echo ($allNotes[$i]['public']); ?></td>
					<td align="center"><span><?php echo date("Y-m-d ", $allNotes[$i][create_time]) ?></span></td>
					<td align="center"><button class="btn-warning" data-toggle="modal" data-target="#delete" data-id="<?php echo ($allNotes[$i][id]); ?>" data-url="/Xitong/index.php/Admin/Books/deleteNote">Delete</button></td>
				</tr><?php } ?>
		</tbody>
	</table>
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
	     <div class="modal-body">
	        确定要删除这条笔记吗？
	     </div>
	     <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
	        <button type="button" class="btn btn-danger">删除</button>
	     </div>
	  </div><!-- /.modal-content -->
	</div>
</div><!-- /.modal -->

<script>
	$(document).ready(function() {
		var noteId;
		var url;
		$('button.btn-warning').click(function() {
			noteId = $(this).attr('data-id');
			url = $(this).attr('data-url');
		});
		$('.btn-danger').click(function() {
			$.ajax({
				type: "post",
				data: {id: noteId},
				url: url,
				success: function(data) {
					window.location.reload();
				}
			});
		});
	});
</script>



  </div>
</body>
  <script src="/Xitong/Public/js/Less.js"></script>
</html>