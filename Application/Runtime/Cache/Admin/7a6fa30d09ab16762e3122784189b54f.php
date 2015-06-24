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

    
<link rel="stylesheet/less" type="text/css" href="/Xitong/Public/css/manage.less">
<div class="container">

	<a href="/Xitong/index.php/Admin/Books/addBook">添加书籍--></a>

	<h3>书目列表</h3>
	<table id="list" class="table table-hover table-condensed">
		<thead>
			<tr>
				<th>封面</th>
				<th>书名</th>
				<th>作者</th>
				<th>出版社</th>
				<th>ISBN</th>
				<th>简介</th>
				<th>.</th>
			</tr>
		</thead>
		<tbody>
			<?php $__FOR_START_1706180209__=0;$__FOR_END_1706180209__=$countBooks;for($i=$__FOR_START_1706180209__;$i < $__FOR_END_1706180209__;$i+=1){ ?><tr>
					<td align="center">
						<img src="/Xitong/Uploads/BookPhotoes/<?php echo ((isset($allBooks[$i][picture] ) && ($allBooks[$i][picture] !== ""))?($allBooks[$i][picture] ):'1.jpg'); ?>">

					</td>
					<td align="center"><?php echo ($allBooks[$i][bookname]); ?></td>
					<td align="center"><?php echo ($allBooks[$i][author]); ?></td>
					<td align="center"><?php echo ($allBooks[$i][press]); ?></td>
					<td align="center"><?php echo ($allBooks[$i][isbn]); ?></td>
					<td align="center"><?php echo ($allBooks[$i][summary]); ?></td>
					<td align="center" class="buttons">
						<button class="btn-warning" data-toggle="modal" data-target="#delete" data-id="<?php echo ($allBooks[$i][id]); ?>" data-book="<?php echo ($allBooks[$i][bookname]); ?>" data-url="/Xitong/index.php/Admin/Books/deleteBook">Delete</button>
						<form method="post" action="/Xitong/index.php/Admin/Books/lookComments">
							<input type="hidden" name="id" value="<?php echo ($allBooks[$i][id]); ?>" />
							<input class="btn-link" type="submit" value="书评" />
						</form>
						<form method="post" action="/Xitong/index.php/Admin/Books/lookNotes">
							<input type="hidden" name="id" value="<?php echo ($allBooks[$i][id]); ?>" />
							<input class="btn-link" type="submit" value="笔记" />
						</form>
					</td>
				</tr><?php } ?>
		</tbody>
	</table>
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
	     <div class="modal-body">
	        确定要删除图书 “ <span class="delBook"></span> ” 吗？
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
		var bookId;
		var url;
		$('button.btn-warning').click(function() {
			$('span.delBook').text($(this).attr('data-book'));
			bookId = $(this).attr('data-id');
			url = $(this).attr('data-url');
		});
		$('.btn-danger').click(function() {
			$.ajax({
				type: "post",
				data: {id: bookId},
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