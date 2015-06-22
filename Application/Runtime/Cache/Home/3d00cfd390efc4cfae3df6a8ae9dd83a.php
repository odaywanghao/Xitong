<?php if (!defined('THINK_PATH')) exit();?>countBooks:<?php echo ($countBooks); ?>
<br/>

<h1>first book information</h1>
bookname:<?php echo ($allBooks[0][bookname]); ?>


<FORM method="post" action="/newxx/index.php/Home/Books/lookComments">
<INPUT type="hidden" name="id" value="<?php echo ($allBooks[0][id]); ?>">
<br/>
<INPUT type="submit" value="lookComents">
</FORM>


<FORM method="post" action="/newxx/index.php/Home/Books/lookNotes">
<INPUT type="hidden" name="id" value="<?php echo ($allBooks[0][id]); ?>">
<br/>
<INPUT type="submit" value="lookNotes">
</FORM>