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
	<title>老师建议</title>
</head>
<body>
	 <div class="mainDiv">
    	<div id="container">
            <div class="container_12">
                <div class="grid_6">
                    <div id="logo_default">
                        <img alt="Logo" src="images/xg.jpg" width="200px" height="37px">
                        </img>
                    </div>
                </div>
                <nav class="menu grid_6">
                	<ul>
                    	<li>
                        	<a href="../index.html">首页</a>
                        </li>
                        <li>
                        	<a href="javascript:void(0)">信管日志</a>
                            <ul>
                            	<li>
                                	<a href="javascript:void(0)">大一日志</a>
                                </li>
                                <li>
                                	<a href="javascript:void(0)">大二日志</a>
                                </li>
                                <li>
                                	<a href="javascript:void(0)">大三日志</a>
                                </li>
                                <li>
                                	<a href="javascript:void(0)">大四日志</a>
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
                        	<a class="changecolor" href="javascript:void(0)"><?php if($name=="") echo "未登录"; else echo $name; ?></a>
                            <ul>
                            	<li <?php if($name!="") echo "style='display:none'"; else echo "style='display:block'" ?>>
                                	<a href="login.php">用户登陆</a>
                                </li>
                               
                                <li <?php if($name!="") echo "style='display:none'"; else echo "style='display:block'" ?>>
                                	<a href="register.php">用户注册</a>
                                </li>
                                <li <?php if($name!="") echo "style='display:block'"; else echo "style='display:block'" ?>>
                                	<a href="cancel.php">注销</a>
                                </li>
                             </ul>
                        </li>
                    </ul>
                </nav>
             </div>
        </div>
     </div>
</body>
</html>