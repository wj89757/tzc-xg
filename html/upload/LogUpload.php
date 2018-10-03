<?php
	if(!empty($_POST["submit"])&&$_POST["username"]!="")
	{
		session_start();
		$_SESSION["User"]=$_POST["username"];
		
	}
	
?>
<!DOCTYPE html>
<head>
<meta  charset="utf-8"/>
<link rel="stylesheet" href="../css/login-style.css" />
<title>匹配登录信息</title>
</head>

<body class="bgimage">
	
	<?php
		
        $link=mysqli_connect("localhost","root","") or die("数据库连接失败！<br/>");
         mysqli_select_db($link,"xg"); 
		 mysqli_query($link,"set names 'utf8'");
         $sql = "SELECT userPassword FROM `user_fdata` where userName = '".$_POST["username"]."'";
		  $result = mysqli_query($link,$sql);
		  $row = mysqli_fetch_array($result);
		  $DataPaw = $row['userPassword'];
		  if($row['userPassword'] == $_POST["password"])
			{
				echo "<script>";
				echo "document.location='../../index.php';"; 
				echo "</script>";
			}
			else
			{
				?>
				<script>
					document.location='../login.php';
					alert('用户名或密码错误！');
				</script>
                <?php
			}
    ?>
    

</div>
</body>
</html>