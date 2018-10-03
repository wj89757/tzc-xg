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
    <link href="../CSS/master.css" rel="stylesheet" type="text/css">
    <link href="../CSS/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../JS/jquery.1.4.2-min.js"></script>
	<title>大一日志</title>
</head>
<body>
	 <div class="mainDiv">
    	<div id="container">
            <div class="container_12">
                <div class="grid_6">
                    <div id="logo_default">
                        <img alt="Logo" src="../images/xg.jpg" width="200px" height="37px">
                        </img>
                    </div>
                </div>
                <nav class="menu grid_17">
                	<ul>
                    	<li>
                        	<a href="../../index.php">首页</a>
                        </li>
                        <li>
                        	<a href="javascript:void(0)">信管日志</a>
                            <ul>
                            	<li>
                                	<a href="FreshLog.php">大一日志</a>
                                </li>
                                <li>
                                	<a href="SophomoreLog.php">大二日志</a>
                                </li>
                                <li>
                                	<a href="JuniorLog.php">大三日志</a>
                                </li>
                                <li>
                                	<a href="SeniorLog.php">大四日志</a>
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
                        	<a class="changecolor" href="<?php if($name!="") echo"../personalspace/PersonCenter.php"?>"><?php if($name=="") echo "未登录"; else echo $name; ?></a>                            <ul>
                            	<li <?php if($name!="") echo "style='display:none'"; else echo "style='display:block'" ?>>
                                	<a href="../login.php">用户登陆</a>
                                </li>
                               
                                <li <?php if($name!="") echo "style='display:none'"; else echo "style='display:block'" ?>>
                                	<a href="../register.php">用户注册</a>
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
        <div class="clear"></div>
        <div class="container_12">
            <div class="article-box upspace">
                <h2 class="cur-title">
                    <span>大一日志</span>
                </h2>
                <div class="clearfix"></div>
                <?php
					 include '../../Conn/conn.php';
				?>
                <div class="post">
                	<a href="../show-article/freshshow.php?id=<?php echo $ArticleRow[0]['LogId'];?>&name=<?php $logauthor=$ArticleRow[0]['LogAuthor']; if($logauthor=="") echo "匿名"; else echo $logauthor;?>&grade=1"  title="<?php echo $ArticleRow[0]['LogHead'];?>" >
                    	<img class="thumbnail" src="<?php
							$str=$ArticleRow[0]['LogContent'];;
                        	preg_match('/<img.+src=\"?(.+\.(jpg|gif|bmp|bnp|png))\"?.+>/i',$str,$match); 
							echo $match[1];
						?>" onerror="javascript:this.src='../images/default.png'">
                        
                        </img>
                    </a>
                    <h2 class="title">
                    	
                       <a href="../show-article/freshshow.php?id=<?php echo $ArticleRow[0]['LogId'];?>&name=<?php $logauthor=$ArticleRow[0]['LogAuthor']; if($logauthor=="") echo "匿名"; else echo $logauthor;?>&grade=1" title="<?php echo $ArticleRow[0]['LogHead'];?>"><?php $loghead=$ArticleRow[0]['LogHead']; if($loghead=="") echo "并没有标题"; else echo $loghead;?></a>
                    </h2>
                    <p class="postmeta">
                    	<span class="author">
                        	<a title="<?php echo "点击进入".$ArticleRow[0]['LogAuthor']."的个人中心";?>" href="javascript:void(0)"><?php echo $ArticleRow[0]['LogAuthor'];?></a>
                        </span>
                        |
                        <span>
                        	<a href="javascript:void(0)"><?php echo $ArticleRow[0]['UpTimes'];?></a>
                        </span>
                        |
                        <span>
                        	<a href="javascript:void(0)"><?php echo $ArticleRow[0]['LogType'];?></a>
                        </span>
                        	
                        <span class="views">
                            <span class="boldfont">阅读量:</span><?php echo $ArticleRow[0]['ReadTimes'];?>
                        </span>
                    </p>
                    <div class="excerpt">
                    	<?php 
							$pattern='/<img\s+src=[\\\'| \\\"](.*?(?:[\.gif|\.jpg]))[\\\'|\\\"].*?[\/]?>/';
							$str="";
							$txt=preg_replace($pattern,$str,$ArticleRow[0]['LogContent']);
							$str1 = strip_tags($txt);  
							echo substr($str1,0,150);
							echo "......";
						?>
                    </div>
                </div> 
                <?php
					for ($x=1; $x<=10; $x++) {
				?>
                <div class="post">
                	<a href="../show-article/freshshow.php?id=<?php echo $ArticleRow[$x]['LogId'];?>&name=<?php $logauthor=$ArticleRow[$x]['LogAuthor']; if($logauthor=="") echo "匿名"; else echo $logauthor;?>&grade=1">
                    	<img class="thumbnail" src="<?php
                        	$str=$ArticleRow[$x]['LogContent'];;
                        	preg_match('/<img.+src=\"?(.+\.(jpg|gif|bmp|bnp|png))\"?.+>/i',$str,$match); 
							echo $match[1];
							?>">
                        
                        </img>
                    </a>
                    <h2 class="title">
                    	<a href="../show-article/freshshow.php?id=<?php echo $ArticleRow[$x]['LogId'];?>&name=<?php $logauthor=$ArticleRow[$x]['LogAuthor']; if($logauthor=="") echo "匿名"; else echo $logauthor;?>&grade=1" title="<?php echo $ArticleRow[$x]['LogHead'];?>"><?php $loghead=$ArticleRow[$x]['LogHead']; if($loghead=="") echo "并没有标题"; else echo $loghead;?></a>
                    </h2>
                    <p class="postmeta">
                    	<span class="author">
                        	<a href="javascript:void(0)" title="<?php echo "点击进入".$ArticleRow[$x]['LogAuthor']."的个人中心";?>"><?php $logauthor=$ArticleRow[$x]['LogAuthor']; if($logauthor=="") echo "匿名发表"; else echo $logauthor;?></a>
                        </span>
                        |
                        <span>
                        	<a href="javascript:void(0)"><?php echo $ArticleRow[$x]['UpTimes'];?></a>
                        </span>
                        |
                        <span>
                        	<a href="javascript:void(0)"><?php echo $ArticleRow[$x]['LogType'];?></a>
                        </span>
                        	
                        <span class="views">
                            <span class="boldfont">阅读量:</span><?php echo $ArticleRow[$x]['ReadTimes'];?>
                        </span>
                    </p>
                    <div class="excerpt">
                    	<?php
							$pattern='/<img\s+src=[\\\'| \\\"](.*?(?:[\.gif|\.jpg]))[\\\'|\\\"].*?[\/]?>/';
							$str="";
							$txt=preg_replace($pattern,$str,$ArticleRow[$x]['LogContent']);
							$str1 = strip_tags($txt);  
							echo substr($str1,0,150);
							echo "......";
						?>
                    </div>
                </div> 
                <?php
					}
				?>
                
                <div class="clearfix"></div>
                <div id="ajax-load-posts">
                	<div id="count"></div>
                	<a onClick="count()" class="btn radius" href="javascript:void(0)">加载更多</a>
                   
                    <script type="text/javascript">
						var i=0;
						function count()
						{
						   i++;
						   document.getElementById("count").innerHTML=i;
						}
					</script>
                    
                    
                </div>
             </div>
             
        </div>
        
        <?php
					 $link=mysqli_connect("localhost","root","") or die("数据库连接失败！<br/>");
					 
					 mysqli_select_db($link,"xg"); 
					 mysqli_query($link,"set names 'utf8'");
					 $sql = "SELECT * FROM `SophomoreLog` ORDER BY `LogId` DESC";
					 $result=mysqli_query($link,$sql);
					 $ArticleRow=array();
					 $t=0;
					 while($row=mysqli_fetch_array($result))
					 {
						 $ArticleRow[]=$row;
						 $t++;
					 }
					 
	    ?>
        
       <aside class="sidebar">
       		<ul>
                <li class="wpyou">
                    <h3>
                        <span>
                            <a href="javascript:void(0)">大二日志</a>
                        </span>
                    </h3>
                    <ul>
                    	<li>
                        	<a href="javascript:void(0);">
                            	<img src="<?php
                        	$str=$ArticleRow[0]['LogContent'];;
                        	preg_match('/<img.+src=\"?(.+\.(jpg|gif|bmp|bnp|png))\"?.+>/i',$str,$match); 
							echo $match[1];
							?>">
                                </img>
                            </a>
                            <h4>
                            	<a href="javascript:void(0);">
                                    <?php echo $ArticleRow[0]['LogHead'];?>
                            	</a>
                            </h4>
                            <p>
                            	<?php echo $ArticleRow[0]['UpTimes'];?>
                                <span class="views">
                                	<span class="boldfont">阅读量:</span>
                                    <?php echo $ArticleRow[0]['ReadTimes'];?>
                                </span>
                            </p>
                        </li>
                       <!-- 我是华丽的分割线-->
                         <?php
								for ($x=1; $x<=2; $x++) {
						?>
                        
                      	<li>
                        	<a href="javascript:void(0);">
                            	<img <?php
                        	$str=$ArticleRow[$x]['LogContent'];;
                        	preg_match('/<img.+src=\"?(.+\.(jpg|gif|bmp|bnp|png))\"?.+>/i',$str,$match); 
							echo $match[1];
							?>">
                                </img>
                            </a>
                            <h4>
                            	<a href="javascript:void(0);">
                            		 <?php echo $ArticleRow[$x]['LogHead'];?>
                            	</a>
                            </h4>
                            <p>
                            	 <?php echo $ArticleRow[$x]['UpTimes'];?>
                                <span class="views">
                                	<span class="boldfont">阅读量:</span>
                                     <?php echo $ArticleRow[$x]['ReadTimes'];?>
                                </span>
                            </p>
                        </li>
                        
                        <?php
								}
						?>
            </ul>
       </aside>
       <?php
					 $link=mysqli_connect("localhost","root","") or die("数据库连接失败！<br/>");
					 
					 mysqli_select_db($link,"xg"); 
					 mysqli_query($link,"set names 'utf8'");
					 $sql = "SELECT * FROM `JuniorLog` ORDER BY `LogId` DESC";
					 $result=mysqli_query($link,$sql);
					 $ArticleRow=array();
					 $t=0;
					 while($row=mysqli_fetch_array($result))
					 {
						 $ArticleRow[]=$row;
						 $t++;
					 }
					 
	    ?>
       
       <aside class="sidebar sidebarnext">
       		<ul>
                <li class="wpyou">
                    <h3>
                        <span>
                            <a href="javascript:void(0)">大三日志</a>
                        </span>
                    </h3>
                    <ul>
                    	<li>
                        	<a href="javascript:void(0);">
                            	<img src="<?php
                        	$str=$ArticleRow[0]['LogContent'];;
                        	preg_match('/<img.+src=\"?(.+\.(jpg|gif|bmp|bnp|png))\"?.+>/i',$str,$match); 
							echo $match[1];
							?>">
                                </img>
                            </a>
                            <h4>
                            	<a href="javascript:void(0);">
                                    <?php echo $ArticleRow[0]['LogHead'];?>
                            	</a>
                            </h4>
                            <p>
                            	<?php echo $ArticleRow[0]['UpTimes'];?>
                                <span class="views">
                                	<span class="boldfont">阅读量:</span>
                                    <?php echo $ArticleRow[0]['ReadTimes'];?>
                                </span>
                            </p>
                        </li>
                       <!-- 我是华丽的分割线-->
                         <?php
								for ($x=1; $x<=2; $x++) {
						?>
                        
                      	<li>
                        	<a href="javascript:void(0);">
                            	<img <?php
                        	$str=$ArticleRow[$x]['LogContent'];;
                        	preg_match('/<img.+src=\"?(.+\.(jpg|gif|bmp|bnp|png))\"?.+>/i',$str,$match); 
							echo $match[1];
							?>">
                                </img>
                            </a>
                            <h4>
                            	<a href="javascript:void(0);">
                            		 <?php echo $ArticleRow[$x]['LogHead'];?>
                            	</a>
                            </h4>
                            <p>
                            	 <?php echo $ArticleRow[$x]['UpTimes'];?>
                                <span class="views">
                                	<span class="boldfont">阅读量:</span>
                                     <?php echo $ArticleRow[$x]['ReadTimes'];?>
                                </span>
                            </p>
                        </li>
                        
                        <?php
								}
						?>
            </ul>
       </aside>
       <?php
					 $link=mysqli_connect("localhost","root","") or die("数据库连接失败！<br/>");
					 
					 mysqli_select_db($link,"xg"); 
					 mysqli_query($link,"set names 'utf8'");
					 $sql = "SELECT * FROM `SeniorLog` ORDER BY `LogId` DESC";
					 $result=mysqli_query($link,$sql);
					 $ArticleRow=array();
					 $t=0;
					 while($row=mysqli_fetch_array($result))
					 {
						 $ArticleRow[]=$row;
						 $t++;
					 }
					 
	    ?>
       
       <aside class="sidebar sidebarnextdouble">
       		<ul>
                <li class="wpyou">
                    <h3>
                        <span>
                            <a href="javascript:void(0)">大四日志</a>
                        </span>
                    </h3>
                    <ul>
                    	<li>
                        	<a href="javascript:void(0);">
                            	<img src="<?php
                        	$str=$ArticleRow[0]['LogContent'];;
                        	preg_match('/<img.+src=\"?(.+\.(jpg|gif|bmp|bnp|png))\"?.+>/i',$str,$match); 
							echo $match[1];
							?>">
                                </img>
                            </a>
                            <h4>
                            	<a href="javascript:void(0);">
                                    <?php echo $ArticleRow[0]['LogHead'];?>
                            	</a>
                            </h4>
                            <p>
                            	<?php echo $ArticleRow[0]['UpTimes'];?>
                                <span class="views">
                                	<span class="boldfont">阅读量:</span>
                                    <?php echo $ArticleRow[0]['ReadTimes'];?>
                                </span>
                            </p>
                        </li>
                       <!-- 我是华丽的分割线-->
                         <?php
								for ($x=1; $x<=2; $x++) {
						?>
                        
                      	<li>
                        	<a href="javascript:void(0);">
                            	<img <?php
                        	$str=$ArticleRow[$x]['LogContent'];;
                        	preg_match('/<img.+src=\"?(.+\.(jpg|gif|bmp|bnp|png))\"?.+>/i',$str,$match); 
							echo $match[1];
							?>">
                                </img>
                            </a>
                            <h4>
                            	<a href="javascript:void(0);">
                            		 <?php echo $ArticleRow[$x]['LogHead'];?>
                            	</a>
                            </h4>
                            <p>
                            	 <?php echo $ArticleRow[$x]['UpTimes'];?>
                                <span class="views">
                                	<span class="boldfont">阅读量:</span>
                                     <?php echo $ArticleRow[$x]['ReadTimes'];?>
                                </span>
                            </p>
                        </li>
                        
                        <?php
								}
						?>
            </ul>
       </aside>
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
     </div>
     <script type="text/javascript" src="../JS/scrolltopcontrol.js"></script></p>
	<div style="height:1000px;"></div>
</body>
</html>