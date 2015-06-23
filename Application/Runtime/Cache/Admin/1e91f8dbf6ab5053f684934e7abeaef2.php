<?php if (!defined('THINK_PATH')) exit();?><h1>Notes</h1><br/>
noteAllCount:<?php echo ($noteAllCount); ?><br/>
nowTime:<?php echo ($nowTime); ?><br/>
noteLast1DayCount:<?php echo ($noteCount[day]); ?><br/>
noteLast1WeekCount:<?php echo ($noteCount[week]); ?><br/>
noteLast1WeelCount:<?php echo ($noteCount[month]); ?><br/>

<form method="post" action="/Xitong/index.php/Admin/BackGround/manageUser">
	<input type="submit" value="管理用户" />
</form>


<form method="post" action="/Xitong/index.php/Admin/BackGround/manageBook">
	<input type="submit" value="管理图书" />
</form>





<h1>note everyCount</h1>
1:<?php echo ($noteEveryCount[1]); ?><br/>
2:<?php echo ($noteEveryCount[2]); ?><br/>
3:<?php echo ($noteEveryCount[3]); ?><br/>
4:<?php echo ($noteEveryCount[4]); ?><br/>
5:<?php echo ($noteEveryCount[5]); ?><br/>
6:<?php echo ($noteEveryCount[6]); ?><br/>
7:<?php echo ($noteEveryCount[7]); ?><br/>
8:<?php echo ($noteEveryCount[8]); ?><br/>
9:<?php echo ($noteEveryCount[9]); ?><br/>
10:<?php echo ($noteEveryCount[10]); ?><br/>
11:<?php echo ($noteEveryCount[11]); ?><br/>
12:<?php echo ($noteEveryCount[12]); ?><br/>
13:<?php echo ($noteEveryCount[13]); ?><br/>
<br/>