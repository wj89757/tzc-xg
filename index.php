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
    <link href="CSS/master.css" rel="stylesheet" type="text/css">
    <link href="CSS/style.css" rel="stylesheet" type="text/css">
    <link href="CSS/loader/fakeLoader.css" type="text/css" >
    <script type="text/javascript" src="JS/jquery.1.4.2-min.js"></script>
    
    <script type="text/javascript" src="JS/jquery.min.js"></script>
	<title>欢迎光临</title>
</head>
<body>
	
    
	<div class="fakeloader"></div>
   
    <div class="mainDiv">
    	<div id="container">
            <div class="container_12">
                <div class="grid_6">
                    <div id="logo_default">
                        <img alt="Logo" src="images/xg.jpg" width="200px" height="37px">
                        </img>
                    </div>
                </div>
                <nav class="menu grid_17">
                	<ul>
                    	<li>
                        	<a href="index.php">首页</a>
                        </li>
                        <li>
                        	<a href="javascript:void(0)">信管日志</a>
                            <ul>
                            	<li>
                                	<a href="html/log/FreshLog.php">大一日志</a>
                                </li>
                                <li>
                                	<a href="html/log/SophomoreLog.php">大二日志</a>
                                </li>
                                <li>
                                	<a href="html/log/JuniorLog.php">大三日志</a>
                                </li>
                                <li>
                                	<a href="html/log/SeniorLog.php">大四日志</a>
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
                        	<a class="changecolor" href="<?php if($name!="") echo"html/personalspace/PersonCenter.php"?>"><?php if($name=="") echo "未登录"; else echo $name; ?></a>
                            <ul>
                            	<li <?php if($name!="") echo "style='display:none'"; else echo "style='display:block'" ?>>
                                	<a href="html/login.php">用户登陆</a>
                                </li>
                               
                                <li <?php if($name!="") echo "style='display:none'"; else echo "style='display:block'" ?>>
                                	<a href="html/register.php">用户注册</a>
                                </li>
                                <li <?php if($name!="") echo "style='display:block'"; else echo "style='display:none'" ?>>
                                	<a href="html/report-article/AritcleReport.php">发表文章</a>
                                </li>
                                <li <?php if($name!="") echo "style='display:block'"; else echo "style='display:none'" ?>>
                                	<a href="html/cancel.php">注销</a>
                                </li>
                             </ul>
                        </li>
                    </ul>
                </nav>
             </div>
             
             <div class="clear"></div>
            <div id="featured">
             	<div class="top-shadow">
                </div>
                <div id="slideshow">
                	<div>
                    	<img id="magic" alt="Information Management and System Program" src="images/xinguan.png">
                        </img>
                    </div>
                </div>
                <div class="bottom-shadow">
                </div>
              </div>
            <div class="clear"></div>
        	<div class="container_12">	
            	<div id="gallery-menu" class="grid_12">
                	<ul>
                    	<li>
                        	<a href="html/ProfessionRelated.php">专业有关</a>
                        </li>
                        <li>
                        	<a href="html/DataInte.php">资料整合</a>
                        </li>
                        <li>
                        	<a href="html/InformaInte.php">信息整合</a>
                        </li>
                        <li class="last">
                        	<a href="html/TeachAdvice.php">老师建议</a>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="entrytext grid_6">
                	<h2>信管专业介绍</h2>
                    <p>信息管理与信息系统（Information Management and Information System，简称IMIS）是集信息技术与管理科学于一体、实践性和创新性很强的交叉学科。本专业旨在培养具备现代管理学理论基础、计算机科学技术知识及应用能力，掌握系统思想和信息系统分析与设计方法以及信息管理等方面的知识与能力，从事信息管理以及信息系统分析、设计、实施、管理和评价的复合型人才。其简称信息管理学或管理信息学，属于管理科学与工程范畴...</p>
                </div>
                <div class="entrytext grid_6">
                	<h2>信管发展情况</h2>
                    <p>信息管理与信息系统专业是由经济信息管理专业、科技信息学专业、管理信息系统、信息学和林业信息管理5个专业整合成信息管理与信息系统专业(简称:信管专业)。还有一些专业如图书馆学专业、档案学专业、情报学专业等是根据时代发展的需要将其改名为信息管理与信息系统专业,一起隶属于管理类一级学科,管理科学与工程下的二级学科。而且管理信息学是信息管理与信息系统等专业的专业基础理论课程。
这门专业的教育是在20世纪60年代后期到70年代中期产生的管理信息系统理论与实践的基础上发展而来的....</p>
                </div>
                <div class="clear"></div>
            </div>
         </div>
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
    <script type="text/javascript" src="js/scrolltopcontrol.js"></script>
	<div style="height:1000px;"></div>
    <script src="http://libs.useso.com/js/jquery/1.11.1/jquery.min.js"></script>
    <script src="JS/loader/fakeLoader.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".fakeloader").fakeLoader({
                timeToHide:2000,
                bgColor:"#000",
                spinner:"spinner5",
				imagePath:"images/loader.gif",
            });
        });
    </script>
</body>
</html>