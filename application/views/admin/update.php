<meta charset="UTF-8"/>
<base href="<?php echo site_url()?>">
<form action="admin/admin_lesson/do_update" method="post" accept-charset="utf-8">
  	<input type="hidden" name="hid" value="<?php echo $up->lesson_id?>"/>
  	Lesson：<input type="text" name="lesson" value="<?php echo $up->lesson?>" id="some_name"/><br />	
  	Power：<input name="power" type="text" value="<?php echo $up->lesson_power?>"><br />
	Date:<input type="text" name="date" value="<?php echo $up->lesson_date?>" id="some_name"/><br />
	 <input type="submit" value="提交" name="sub"/>
</form>
<?php
?>