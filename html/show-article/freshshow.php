

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
                        	<a href="../../index.php">首页</a>
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
                                	<a href="../report-article/AritcleReport.php">发表文章</a>
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
        
	<?php
		if($_GET['grade']==1)
		{
			$dbname="freshlog";
		}
		else if($_GET['grade']==2)
		{
			$dbname="SophomoreLog";
		}
		else if($_GET['grade']==3)
		{
			$dbname="JuniorLog";
		}
		else if($_GET['grade']==4)
		{
			$dbname="SeniorLog";
		}
			 mysqli_select_db($link,"xg"); 
			 mysqli_query($link,"set names 'utf8'");
			 $sql1 ="select `LogHead` from $dbname where LogId='".$_GET['id']."'";
			 $result1=mysqli_query($link,$sql1);
			 $row1=mysqli_fetch_array($result1);
			 
		?>
     <div class="clear"></div>
     <h2 style="text-align:center; font-size:24px;  margin-bottom:15px;">
	 <a href="../personalspace/PersonCenter.php?name=<?php echo $_GET['name'];?>"><?php echo $_GET['name'];?></a>
     发表的“<?php echo $row1[0];?>”
     </h2>
    <div class="container_12 bottomserver">
     	<?php
			 mysqli_select_db($link,"xg"); 
			 mysqli_query($link,"set names 'utf8'");
			 $sql ="select `LogContent` from $dbname where LogId='".$_GET['id']."'";
			 $result=mysqli_query($link,$sql);
			 $row=mysqli_fetch_array($result);
			 echo "<div style='text-align:center'>";
			 echo $dbname;
			echo "   ";
			echo $row1[0];
			echo "   ";
			$time=date('Y-m-d'); 
			echo $time;
			echo "</div>";
			 echo $row[0];
		?>
    </div>
    <?php 
		$link=mysqli_connect("localhost","root","") or die("数据库连接失败！<br/>");
        mysqli_select_db($link,"xg"); 
		mysqli_query($link,"set names 'utf8'");
        $sql="SELECT * FROM comment WHERE ctype='".$dbname."' AND aid='".$_GET['id']."' ORDER BY pid DESC";
        $result=mysqli_query($link,$sql);
		$ArticleRow=array();
		$t=0;
		while($row=mysqli_fetch_array($result))
		{
			$ArticleRow[]=$row;
			$t++;
		}
	?>
     <div style="height:10%; width:90%;background-color:#6699ff; float:left; margin-left:5%; margin-top:20px;margin-bottom:20px;">
        <h2 style="color:#fff; font-size:18px; margin:15px;">评论列表</h2>
        <?php
			if($t==0)
			{
				echo "<p style='margin-left:15px; color:#fff;'>";
				echo "暂无评论";
				echo "</p>";
			}
			else 
			{
				for($i=0;$i<$t;$i++)
				{
		?>
        <p style="color:#fff;margin:15px;"><span style="color:#666666;">评论人：</span><?php echo $ArticleRow[$i]['cperson'];?></p><p style="color:#fff;margin:15px;"><span style="color:#666666;">评论时间：</span><?php echo $ArticleRow[$i]['ctime'];?></p>
        <p style="margin:15px;color:#666666;">评论内容：</p>
        <div style="height:100%; width:300px; margin:15px; word-wrap: break-word; padding:5px; -webkit-box-shadow:0 5px 10px #666; -moz-box-shadow:0 5px 10px #666;box-shadow:0 5px 10px #666; -moz-border-radius:5px;-webkit-border-radius:5px;-o-border-radius:5px; border-radius:5px; min-height:100px; color:#fff;">
            <?php echo $ArticleRow[$i]['content'];?>
        </div >
        <hr style="width:300px; height:3px;margin-left:15px; background-color:#cc9999; ">
        <?php
        	}
			}
        ?>
        <h2 style="color:#fff; font-size:18px; margin:15px;">发表评论</h2>
        <form action="../pl.php"  method="post">
            <textarea name="content" style="height:100px; width:300px;margin:15px; -webkit-box-shadow:0 5px 10px #666; -moz-box-shadow:0 5px 10px #666;box-shadow:0 5px 10px #666; -moz-border-radius:5px;-webkit-border-radius:5px;-o-border-radius:5px; border-radius:5px; "></textarea>
            <input type="text" style="display:none" name="artid" value="<?php echo $_GET['id'];?>">
            <input type="text" style="display:none" name="artpeople" value="<?php echo $_GET['name'];?>">
            <input type="text" style="display:none" name="artype" value="<?php echo $dbname;?>">
            <input type="text" style="display:none" name="gradenum" value="<?php echo $_GET['grade'];?>">
            
            <input type="hidden" name="username" value="<?php echo $name;?>">
            <br><input type="submit" style="margin:15px;">
        </form>
        
       
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
                    <p class="grid_4" style="color:#FFF">
                    </p>
                </div>
            </div>
         </footer>
      </body>
</html>