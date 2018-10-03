<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>用户注册</title>
<link rel="stylesheet" href="css/login-style.css" />
</head>
<body class="bgimage">

<div class="register-container">
	<div class="connect">
    <img src="../images/xgBig.png" width="100px" height="100px">
		<p>Link the world. Share to world.</p>
	</div>
	
	<form  id="registerForm" action="upload/RegUpload.php" method="post">
		<div>
			<input type="text" name="username" class="username" placeholder="用户名(年级+姓名如13张三)" autocomplete="off"/>
		</div>
		<div>
			<input type="password" name="password" class="password" placeholder="输入密码" oncontextmenu="return false" onpaste="return false" />
		</div>
		<div>
			<input type="password" name="confirm_password" class="confirm_password" placeholder="再次输入密码" oncontextmenu="return false" onpaste="return false" />
		</div>
		<div>
			<input type="text" name="phone_number" class="phone_number" placeholder="输入手机号码" autocomplete="off" id="number"/>
		</div>
		<div>
			<input type="email" name="email" class="email" placeholder="输入邮箱地址" oncontextmenu="return false" onpaste="return false" />
		</div>

		<input id="submit" type="submit" data-submit="...注册中" value="注册"></input>
	</form>
	<a href="login.php">
		<button type="button" class="register-tis" >已有账号？点击登录</button>
	</a>

</div>


<script src="../JS/jquery.min.js"></script>
<script src="../JS/common.js"></script>
<!--表单验证-->
<script src="../JS/jquery.validate.min.js?var1.14.0"></script>

</body>
</html>