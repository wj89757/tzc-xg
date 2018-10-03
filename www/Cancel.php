<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
session_start();
if($_SESSION["User"]==null)
 header("Location:login.php");
if(isset($_SESSION["User"])&&!empty($_SESSION["User"]))
{
		echo session_id()."<br>";
	echo $_SESSION["User"];
	}
	
	if(!empty($_POST["cancel"]))
	unset($_SESSION["User"]);
?>
<body>
<form action="" method="post">
<input name="cancel" type="submit" id="cancel" value="注销">
</form>
</body>
</html>