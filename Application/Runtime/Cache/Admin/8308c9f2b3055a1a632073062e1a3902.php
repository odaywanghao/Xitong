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
    <ul class="nav">
      <li><a href="/Xitong/index.php/Admin/User/background">首 页</a></li>
      <li><a href="/Xitong/index.php/Admin/User/manageUser">管理用户</a></li>
      <li><a href="/Xitong/index.php/Admin/User/manageBook">管理图书</a></li>
      <li><a href="#">当前时间: <?php echo date("Y-m-d ", $nowTime) ?></a></li>
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
	<h3>用户列表</h3>
	<table id="list" class="table table-hover table-condensed">
		<thead>
			<tr>
				<th>用户名</th>
				<th>用户密码</th>
				<th>用户邮箱</th>
				<th>.</th>
			</tr>
		</thead>
		<tbody>
			<?php $__FOR_START_1367529497__=0;$__FOR_END_1367529497__=$userCount;for($i=$__FOR_START_1367529497__;$i < $__FOR_END_1367529497__;$i+=1){ ?><tr>
					<td align="center"><?php echo ($userAll[$i][username]); ?></td>
					<td align="center"><?php echo ($userAll[$i][password]); ?></td>
					<td align="center"><?php echo ($userAll[$i][email]); ?></td>
					<td align="center"><button class="btn-warning" data-toggle="modal" data-target="#delete" data-id="<?php echo ($userAll[$i][id]); ?>" data-user="<?php echo ($userAll[$i][username]); ?>" data-url="/Xitong/index.php/Admin/User/deleteUser">Delete</button></td>
				</tr><?php } ?>
		</tbody>
	</table>
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
	     <div class="modal-body">
	        确定要删除用户 “ <span class="delUserName"></span> ” 吗？
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
		var userId;
		var url;
		$('button.btn-warning').click(function() {
			$('span.delUserName').text($(this).attr('data-user'));
			userId = $(this).attr('data-id');
			url = $(this).attr('data-url');
		});
		$('.btn-danger').click(function() {
			$.ajax({
				type: "post",
				data: {id: userId},
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