<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>用户登录</title>
<link rel="stylesheet" href="css/login-style.css" />
</head>
<body class="bgimage">

<div class="login-container">
	
	<div class="connect">
    	<img src="../images/xgBig.png" width="100px" height="100px">
		<p>Link the world. Share to world.</p>
        
	</div>
	
	<form action="upload/LogUpload.php" method="post" id="loginForm">
		<div>
			<input id="username" type="text" name="username" class="username" placeholder="用户名" autocomplete="on" />
		</div>
		<div>
			<input type="password" name="password" class="password" placeholder="密码" oncontextmenu="return false" onpaste="return false" />
		</div>
		<input id="submit" name="submit" type="submit" data-submit="...登录中" value="登录"></input>
	</form>

	<a href="register.php">
		<button type="button" class="register-tis">没有账号？</button>
	</a>

</div>

<script src="../JS/jquery.min.js"></script>
<script src="../JS/common.js"></script>
<!--表单验证-->
<script src="../JS/jquery.validate.min.js?var1.14.0"></script>

</body>
</html>