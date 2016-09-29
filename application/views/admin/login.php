<meta charset='UTF-8'>
<base href="<?php echo site_url();?>" target=""/>
<form action="admin/user/do_login" method="post">
	用户名:<input type="text" name="username" value="" id="username"/><br />
	密&nbsp;码:<input type="password" name="pass" value="" id="some_name"/><br />
	<input type="submit" name="sub" value="登陆" id="sub"/>
	<input type="reset" name="rst" value="重置" id="rst"/>
</form>