<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<script language="javascript">
 	function	checkState()
	{
	 document.getElementById("remember_pass").checked=<?php echo $_COOKIE["remember_pass"][0]?>;
	 document.getElementById("auto_login").checked=<?php echo $_COOKIE["auto_login"][0]?>;
	 if(<?php echo $_COOKIE["auto_login"][0]?>==1)	
	 {
	 	AutoLogin();
	 }			
	}
	function AutoLogin()
	{
		setTimeout(function(){document.forms["login"]["Login"].click();},2000);
	}	  
	 
</script>
</head>

<?php
	 
	if(!empty($_POST["Login"])&&$_POST["Login"]=="��¼")
	{
	
	$username=trim($_POST["username"]);   
	$password=trim($_POST["password"]);  
	
	$cookie_time=time()+60*60*24*365;
	//var_dump($_POST["remember_pass"]);
 
	if(!empty($_POST["remember_pass"])&&intval($_POST['remember_pass'])==1)
	{
		
		setcookie("username",$username,$cookie_time);
		setcookie("password",$password,$cookie_time);
		setcookie("remember_pass",true,$cookie_time);
	}
	else
	{
		setcookie("username",null,$cookie_time);
		setcookie("password",null,$cookie_time);
		setcookie("remember_pass",null,$cookie_time);  
	}
	
	if(!empty($_POST["auto_login"])&&intval($_POST['auto_login'])==1)
	{
		setcookie("auto_login", true, $cookie_timeout);   
	}
	else
	{
		setcookie("auto_login", null, $cookie_timeout); 
	}
	
	$res=	fopen("log.txt","a");
	fwrite($res,"username:$username\tpassword:$password\tcookie_time:$cookie_time \r\n");
	}
?>

<body onload="checkState();">
<form action=<?php echo $_SERVER['PHP_SELF']  ?> method="post" name="login">
�û���:
<input name="username" type="text" value="<?php  echo $_COOKIE["username"]?>" />
<br/>
�� ��:
<input name="password" type="text"  value="<?php echo $_COOKIE["password"]?>"/>

<br/>
��֤��:<input name="validCode" type="text" size="8" maxlength="4" /> 
<img src="verification.php" alt="�����壬ˢ�����ԡ�" />
<br/>
<input name="remember_pass[]" type="checkbox" value=""  id="remember_pass"/>
��ס����
<input name="auto_login[]" type="checkbox" value=""  id="auto_login" on/>�Զ���¼
<br/>
<input name="Login" type="submit" value="��¼" />
<input name="Reset" type="reset" value="����" />
</form>
</body>
</html>
