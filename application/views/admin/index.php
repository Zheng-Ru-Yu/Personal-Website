<meta charset='UTF-8'>
<base href="<?php echo site_url();?>" target=""/>
<a href="admin/admin_lesson/add">添加</a>
<?php foreach($lesson as $v){	?>
	<h2>标题：<a href="admin/admin_lesson/view/<?php echo $v->lesson_id?>"><?php echo $v->lesson?></a>|<a href="admin/admin_lesson/update/<?php echo $v->lesson_id?>">修改</a>|
		<a href="admin/admin_lesson/del/?id=<?php echo $v->lesson_id?>">删除</a></h2>
	<p><?php echo $v->lesson_power?></p>
	<li><?php echo $v->lesson_date?></li>
	<hr />
	
<?php } ?>