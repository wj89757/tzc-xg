<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
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
 �û���<input name="username" type="text" />
 
 <input name="Login"   type="submit"  value="��¼"/>
 </form>
</body>
</html>
