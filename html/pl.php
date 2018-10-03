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
	<title>评论提交</title>
</head>
<body>
	<?php
		if($_POST['username']=="")
		{
			?>
				<script>
					document.location='login.php';
					alert('您尚未登录！显示为匿名提交');
				</script>
           <?php
		}
		?>
        <?php
			echo "文章内容:".$_POST['content'];echo "<br>";
			echo "文章id:".$_POST['artid'];echo "<br>";
			echo "文章撰写人:".$_POST['artpeople'];echo "<br>";
			echo "评论时间:".date('20y-m-d',time());echo "<br>";
			$nowtime=date('20y-m-d',time());
			echo "文章评论人：".$name;echo "<br>";
			echo "文章类型：".$_POST['artype'];
			echo "grade：".$_POST['gradenum'];
			$link=mysqli_connect("localhost","root","") or die("数据库连接失败！<br/>");
			mysqli_select_db($link,"xg"); 
			mysqli_query($link,"set names 'utf8'");
			$sql="SELECT * FROM comment WHERE ctype='".$_POST['artype']."' AND aid='".$_POST['artid']."'";
			$result=mysqli_query($link,$sql);
			$ArticleRow=array();
			$t=0;
			while($row=mysqli_fetch_array($result))
			{
				$ArticleRow[]=$row;
				$t++;
			}
			var_dump($ArticleRow[$t-1]);
			$nowpid=$ArticleRow[$t-1]['pid']+1;
			echo $nowpid;
		   $tql = "INSERT INTO `comment`(`aid`, `cperson`, `cwperson`, `ctype`, `ctime`, `content`, `pid`) VALUES ('".$_POST['artid']."','".$name."','".$_POST['artpeople']."','".$_POST['artype']."','".$nowtime."','".$_POST['content']."','".$nowpid."')";
			$result1 = mysqli_query($link,$tql);
			?>
			<script>
				document.location='show-article/freshshow.php?id=<?php echo $_POST['artid'];?>&name=<?php $logauthor=$_POST['artpeople'];if($logauthor=="") echo "匿名"; else echo $logauthor;?>&grade=<?php echo $_POST['gradenum'];?>'
			</script>
        <?php
		?>
        
</body>
</html>