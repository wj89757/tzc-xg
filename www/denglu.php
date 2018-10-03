<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
if(!empty($_POST["submit"])&&$_POST["username"]!="")
{
	session_start();
	$_SESSION["User"]=$_POST["username"];
	
	}
?>
<body>
<form id="form1" name="form1" method="post">
  <label for="username">用户名 :</label>
  <input type="text" name="username" id="username">
  <input type="submit" name="submit" id="submit" value="登录">
</form>


</body>
</html>