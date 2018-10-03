<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>
<?php
session_start();
if(!empty($_POST["Login"])&&$_POST["username"]!="")
{
	$_SESSION["User"]=	$_POST["username"];
}
?>
<body>
 <form action="" method="post" name="Login">
 用户名<input name="username" type="text" />
 
 <input name="Login"   type="submit"  value="登录"/>
 </form>
</body>
</html>
