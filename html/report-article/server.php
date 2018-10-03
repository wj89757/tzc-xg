

<?php
	session_start();
	
	if(isset($_SESSION["User"])&&!empty($_SESSION["User"]))
	{
		//echo $_SESSION["User"];
		$name=$_SESSION["User"];
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../CSS/master.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
	<title><?php echo $name;?>发表的文章</title>
</head>
<body>
	<?php
		 $link=mysqli_connect("localhost","root","") or die("数据库连接失败！<br/>");
         mysqli_select_db($link,"xg"); 
		 mysqli_query($link,"set names 'utf8'");
		 $db=$_POST['grade'];
		 $time=date('Y-m-d'); 
		 $sql = "INSERT INTO `".$db."`(`LogHead`, `LogType`, `LogAuthor`,  `LogContent`, `UpTimes`) VALUES ('".$_POST["head"]."','". $_POST["grade"]."','". $name."','". $_POST["content"]."','". $time."')";
		  $result=mysqli_query($link,$sql);
	?>
	 <div class="mainDiv">
    	<div id="container">
            <div class="container_12">
                <div class="grid_6">
                    <div id="logo_default">
                        <img alt="Logo" src="../images/xg.jpg" width="200px" height="37px">
                        </img>
                    </div>
                </div>
                <nav class="menu grid_6">
                	<ul>
                    	<li>
                        	<a href="../../index.html">首页</a>
                        </li>
                        <li>
                        	<a href="javascript:void(0)">信管日志</a>
                            <ul>
                            	<li>
                                	<a href="../log/FreshLog.php">大一日志</a>
                                </li>
                                <li>
                                	<a href="../log/SophomoreLog.php">大二日志</a>
                                </li>
                                <li>
                                	<a href="../log/JuniorLog.php">大三日志</a>
                                </li>
                                <li>
                                	<a href="../log/SeniorLog.php">大四日志</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                        	<a href="javascript:void(0)">学长学姐</a>
                            <ul>
                            	<li>
                                	<a href="javascript:void(0)">专业指导</a>
                                </li>
                                <li>
                                	<a href="javascript:void(0)">就业想法</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                        	<a href="javascript:void(0)">专业风采</a>
                            <ul>
                            	<li>
                                	<a href="javascript:void(0)">风采事迹</a>
                                </li>
                                <li>
                                	<a href="javascript:void(0)">风采人物</a>
                                </li>
                             </ul>
                        </li>
                        <li class="last">
                        	<a class="changecolor" href="../personalspace/PersonCenter.php"><?php if($name=="") echo "未登录"; else echo $name; ?></a>
                            <ul>
                            	<li <?php if($name!="") echo "style='display:none'"; else echo "style='display:block'" ?>>
                                	<a href="login.php">用户登陆</a>
                                </li>
                               
                                <li <?php if($name!="") echo "style='display:none'"; else echo "style='display:block'" ?>>
                                	<a href="register.php">用户注册</a>
                                </li>
                                <li <?php if($name!="") echo "style='display:block'"; else echo "style='display:none'" ?>>
                                	<a href="AritcleReport.php">发表文章</a>
                                </li>
                                <li <?php if($name!="") echo "style='display:block'"; else echo "style='display:none'" ?>>
                                	<a href="../cancel.php">注销</a>
                                </li>
                             </ul>
                        </li>
                    </ul>
                </nav>
                
             </div>
             
        </div>
        

     <div class="clear"></div>
     <h2 style="text-align:center; font-size:24px; color:#06C; margin-bottom:15px;">
	 	<a href="../personalspace/PersonCenter.php"><?php echo $name;?></a>
     发表的文章
     </h2>
    <div class="container_12 bottomserver">
     <?php
			header("Content-Type:text/html;charset=UTF-8");
			if($_POST['content']=="")
			{
				echo "<script>";
			   echo "alert('未发表文章，请发表！');document.location='AritcleReport.php'; ";
				echo "</script>";
			}
			else
			{
				echo $_POST['grade'];
				echo "   ";
				echo $_POST['head'];
				echo "   ";
				$time=date('Y-m-d'); 
				echo $time;
				echo $_POST['content'];
				
			}
	?>
    </div>
    <div class="clear"></div>
       <footer class="dark">
         	<div id="footerlinks" class="container_12">
            	<p class="grid_6">
                	<a class="rss" href="javascript:void(0)">更多更新:wjun89757@foxmail.com</a>
                </p>
                <div class="grid_6">
                	<nav class="footernav">
                    	<ul class="alpha grid_2">
                        	<li>
                            	<a href="javascript:void(0)">Home</a>
                            </li>
                            <li>
                            	<a href="javascript:void(0)">Option</a>
                            </li>
                            <li>
                            	<a href="javascript:void(0)">Facilities</a>
                            </li>
                            <li>
                            	<a href="javascript:void(0)">Curri</a>
                            </li>
                        </ul>
                        <ul class="grid_2 bmoot">
                        	<li>
                            	<a href="javascript:void(0)">Courses</a>
                            </li>
                            <li>
                            	<a href="javascript:void(0)">Admissions</a>
                            </li>
                            <li>
                            	<a href="javascript:void(0)">Faculty</a>
                            </li>
                        </ul>
                        <ul class="grid_2 omega">
                        	<li>
                            	<a href="javascript:void(0)">Alumni</a>
                            </li>
                            <li>
                            	<a href="javascript:void(0)">Gallery</a>
                            </li>
                            <li>
                            	<a href="javascript:void(0)">Contact</a>
                            </li>
                            <li>
                            	<a href="javascript:void(0)">Resourse</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="clear">
                </div>
            </div>
            <div id="legal">
            	<div class="container_12">
                    <p class="grid_8">
                        © 2015
                        <a href="javascript:void(0)">XinguanHome ALL Rights Reserved,Created By 帅气的小俊子
                        </a>
                    </p>
                    <p class="grid_4">
                    
                    </p>
                </div>
            </div>
         </footer>
</body>
</html>