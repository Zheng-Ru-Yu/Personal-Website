<meta charset="UTF-8"/>
<base href="<?php echo site_url()?>">
<form action="admin/admin_lesson/do_add" method="post" accept-charset="utf-8">
  	Lesson：<input type="text" name="lesson"  id="some_name"/><br />	
  	Power：<input name="power" type="text" placeholder="eg:**%"><br />
	Date:<input type="text" name="date" placeholder="eg:JUNE 2016 —— AUG 2016" id="some_name"/><br />
	 <input type="submit" value="提交" name="sub"/>
</form>
<?php
?>