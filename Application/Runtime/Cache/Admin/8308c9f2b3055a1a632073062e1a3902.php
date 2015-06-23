<?php if (!defined('THINK_PATH')) exit();?><h1>Users </h1><br/>
userCount:<?php echo ($userCount); ?>
<h2>firstUser</h2><br/>
username:<?php echo ($userAll[0][username]); ?><br/>
password:<?php echo ($userAll[0][password]); ?><br/>
email:<?php echo ($userAll[0][email]); ?><br/>

<form method="post" action="/Xitong/index.php/Admin/User/deleteUser">
					<input type="hidden" name="id" value="<?php echo ($userAll[0][id]); ?>" />
					<input type="submit" value="删除用户" />
</form>

<form method="post" action="/Xitong/index.php/Admin/User/background">
					<input type="submit" value="回到首页" />
</form>