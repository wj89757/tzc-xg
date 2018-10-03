<!DOCTYPE html>
<head>
<meta  charset="utf-8"/>
<link rel="stylesheet" href="../css/login-style.css" />
<title>注册信息写入数据库</title>
</head>

<body class="bgimage">
	
	<?php
	
        $link=mysqli_connect("localhost","root","") or die("数据库连接失败！<br/>");
         mysqli_select_db($link,"xg"); 
		 mysqli_query($link,"set names 'utf8'");
         $sql="SELECT * FROM user_fdata WHERE userName='".$_POST["username"]."'";
         $result=mysqli_query($link,$sql);
         $row=mysqli_fetch_array($result);
         if	($row)
         {
			echo "<script>";
           echo "document.location='../register.php'; alert('该用户名已被注册，请重新注册。')";
            echo "</script>";
            die();
         }
          $sql = "INSERT INTO `user_fdata` (`userName`, `userPassword`, `userMail`, `userNumber`) VALUES ('".$_POST["username"]."','". $_POST["password"]."','". $_POST["email"]."','". $_POST["phone_number"]."')";

         
         if(mysqli_query( $link,$sql))
         {
			 echo "<script>";
            echo "document.location='../login.php'; alert('注册成功，请登录。')";
            echo "</script>";
         }
		 else
         {
			 echo "Error creating database: " . mysqli_error();
         	 echo "<script>";
            echo "document.location='../register.php'; alert('注册失败，请重新注册。')";
            
            echo "</script>";
         }
    ?>
</body>
</html>