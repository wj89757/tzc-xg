<?php
		$link=mysqli_connect("localhost","root","") or die("数据库连接失败！<br/>"); 
		mysqli_select_db($link,"xg"); 
		mysqli_query($link,"set names 'utf8'");
		$sql = "SELECT * FROM `freshlog`  ORDER BY `LogId` DESC";
		$result=mysqli_query($link,$sql);
		$ArticleRow=array();
		$t=0;
		while($row=mysqli_fetch_array($result))
		{
			$ArticleRow[]=$row;
			$t++;
		}
?>