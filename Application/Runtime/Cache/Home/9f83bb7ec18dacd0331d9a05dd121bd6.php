<?php if (!defined('THINK_PATH')) exit();?><h1>my all notes</h1>
<FORM method="post" action="/Xitong/index.php/Home/Notes/myAllNotes">
<INPUT type="submit" value="myAllNotes">
</FORM>



 <h1>add note</h1>
<FORM method="post" action="/Xitong/index.php/Home/Notes/addNoteUp" enctype="multipart/form-data">
<INPUT type="hidden" name="id" value="<?php echo ($note[id]); ?>">
chapter：<INPUT type="text" name="chapter"  value= <?php echo ($note[chapter]); ?>><br/></INPUT>
page：<INPUT type="text" name="page" value = <?php echo ($note[page]); ?>><br/>
<textarea name = 'note' id = 'note' cols="60" rows="10"><?php echo ($note[note]); ?></textarea>
<br/>
<label>public:</label>
    <label>所有人可见</label>
    <input type="radio" value="1"  name="public" />
    <label>仅自己可见</label>
    <input type="radio" value="0"  name="public" />
<br/>
<img src = "/Xitong/Uploads/NotePhotoes/<?php echo ($note[photo]); ?>" alt = "yiya" title = "noto photo" />
<br/>	
<input type="file" name="photo" />add photo

<br/>
<INPUT type="submit" value="提交">
</FORM>