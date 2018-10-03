<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
session_start();
if($_SESSION["User"]==null)
{
	header("Location:Login.php");
}
else
{
	echo $_SESSION["User"]."<br/>";
	echo session_id();
}

if(!empty($_POST["submit"]))
{
	session_unset($_SESSION["User"]);
	header("Location:".$_SERVER['PHP_SELF']);
}
?>

<form action="" method="post" name="Reset"> <input name="submit" type="submit" value="注销" /></form>
</body>
</html>
