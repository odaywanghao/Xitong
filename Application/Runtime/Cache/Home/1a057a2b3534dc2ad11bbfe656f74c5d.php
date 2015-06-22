<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>书语</title>
  <link rel="stylesheet" href="/newxx/Public/css/bootstrap.css">
  <link rel="stylesheet/less" href="/newxx/Public/css/common.less">
  <script src="/newxx/Public/js/jquery-2.0.0.js"></script>
  <script src="/newxx/Public/js/bootstrap.min.js"></script>
  <script src="/newxx/Public/js/common.js"></script>
</head>

<body>
  <div>

    <?php
 $user = getUsername(); ?>

<head>all notes information</head>
<h1> user </h1>
<table>
	<tr>
		<td>user:</td>
		<td><?php echo ($user); ?></td>
	</tr>
</table>


<h1>login out</h1>
<FORM method="post" action="/newxx/index.php/Home/Notes/logout/error/2">
<INPUT type="submit" value="登出">
</FORM>

<h1>my notes about this book</h1>
<FORM method="post" action="/newxx/index.php/Home/Notes/myBookNotes">
<INPUT type="submit" value="myBookNotes">
</FORM>


<h1>my all notes</h1>
<FORM method="post" action="/newxx/index.php/Home/Notes/myAllNotes">
<INPUT type="submit" value="myAllNotes">
</FORM>


<h1>add a note</h1>
<FORM method="post" action="/newxx/index.php/Home/Notes/addNote">
<INPUT type="submit" value="add note">
</FORM>

<h1>all public notes</h1>
<FORM method="post" action="/newxx/index.php/Home/Notes/bookAllNotes">
<INPUT type="submit" value="allNotes">
</FORM>


<h1>go to comments</h1>
<FORM method="post" action="/newxx/index.php/Home/Notes/gotoComments">
<INPUT type="submit" value="go to comments">
</FORM>

<h1> book name</h1>

<table>
 <tr>
    <td>bookname:</td>
    <td><?php echo ($bookInfo[bookname]); ?></td>
 </tr>
 <tr>
    <td>picture:</td>
    <td><?php echo ($bookInfo[picture]); ?></td>
 </tr>
 </table>


<h1>notes list</h1>
<h2>notesCount:<?php echo ($allNotesCount); ?></h2>
<h2>the first note</h2>
<table>
	<tr>
		<td>id:</td>
		<td><?php echo ($allNotes[0][id]); ?></td>
	</tr>
	<tr>
		<td>bookid:</td>
		<td><?php echo ($allNotes[0][bookid]); ?></td>
	</tr>
	<tr>
		<td>username:</td>
		<td><?php echo ($allNotes[0][username]); ?></td>
	</tr>
	<tr>
		<td>chapter:</td>
		<td><?php echo ($allNotes[0][chapter]); ?></td>
	</tr>
	<tr>
		<td>page:</td>
		<td><?php echo ($allNotes[0][page]); ?></td>
	</tr>
	<tr>
		<td>note:</td>
		<td><?php echo ($allNotes[0][note]); ?></td>
	</tr>
	<tr>
		<td>photo:</td>
		<!-- <td><?php echo ($allNotes[0][note]); ?></td> -->
		<br/>
<p>dsdsddsd  <?php echo ($allNotes[0][photo]); ?></p>
		<img src = "/Xitong/Uploads/NotePhotoes/<?php echo ($allNotes[0][photo]); ?>" alt = "yiya" title = "noto photo" />
		<!-- <img src = "/think/Uploads/NotePhotoes/55850203c0c89.jpg" alt = "yiya" title = "noto photo" /> -->

		<br/>
	</tr>
	<tr>
		<td>create_tiem:</td>
		<td><?php echo ($allNotes[0][create_time]); ?></td>
	</tr>
</table>

  </div>
</body>
  <script src="/newxx/Public/js/Less.js"></script>
</html>