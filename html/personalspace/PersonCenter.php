<?php
	session_start();
	
	if(isset($_SESSION["User"])&&!empty($_SESSION["User"]))
	{
		//echo $_SESSION["User"];
		$name=$_SESSION["User"];
	}
	
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/style.css" />
<link href="../CSS/master.css" rel="stylesheet" type="text/css">
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
<section id="cd-timeline" class="cd-container">
	
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-picture">
			<img src="../images/cd-icon-location.svg" alt="Picture">
		</div>

		<div class="cd-timeline-content">
			<h2>HTML5+CSS3实现的响应式垂直时间轴</h2>
			<p>网页时间轴一般用于展示以时间为主线的事件，如企业网站常见的公司发展历程等。本文将给大家介绍一款基于HTML5和CSS3的漂亮的垂直时间轴，它可以响应页面布局，适用于HTML5开发的PC和移动手机WEB应用。</p>
			<a href="http://www.helloweba.com/view-blog-285.html" class="cd-read-more" target="_blank">阅读全文</a>
			<span class="cd-date">2015-01-06</span>
		</div>
	</div>
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-movie">
			<img src="../images/cd-icon-movie.svg" alt="Movie">
		</div>

		<div class="cd-timeline-content">
			<h2>jQuery+PHP动态数字展示效果</h2>
			<p>我们在一些应用中需要动态展示数据，比如当前在线人数，当前交易总额，当前汇率等等，前端页面需要实时刷新获取最新数据。本文将结合实例给大家介绍使用jQuery和PHP来实现动态数字展示效果。</p>
			<a href="http://www.helloweba.com/view-blog-284.html" class="cd-read-more" target="_blank">阅读全文</a>
			<span class="cd-date">2014-12-25</span>
		</div>
	</div>
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-picture">
			<img src="../images/cd-icon-picture.svg" alt="Picture">
		</div>

		<div class="cd-timeline-content">
			<h2>PHP操作Session和Cookie</h2>
			<p>我们跟踪用户信息时需要用到Session和Cookie，比如用户登录验证、记录用户浏览历史，存储购物车数据，限制用户会话有效时间等。今天我们来了解下PHP是如何操作Session和Cookie的。</p>
			<a href="http://www.helloweba.com/view-blog-283.html" class="cd-read-more" target="_blank">阅读全文</a>
			<span class="cd-date">2014-12-20</span>
		</div>
	</div>
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-movie">
			<img src="../images/cd-icon-movie.svg" alt="Movie">
		</div>

		<div class="cd-timeline-content">
			<h2>jQuery数字加减插件</h2>
			<p>我们在网上购物提交订单时，在网页上一般会有一个选择数量的控件，要求买家选择购买商品的件数，开发者会把该控件做成可以通过点击实现加减等微调操作，当然也可以直接输入数字件数。本文将介绍常见的几种使用spinner数字微调器来实现数字加减的功能的方法。</p>
			<a href="http://www.helloweba.com/view-blog-282.html" class="cd-read-more" target="_blank">阅读全文</a>
			<span class="cd-date">2014-12-14</span>
		</div>
	</div>
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-movie">
			<img src="../images/cd-icon-location.svg" alt="Location">
		</div>

		<div class="cd-timeline-content">
			<h2>收集整理的非常有用的PHP函数</h2>
			<p>项目中经常会需要一些让人头疼的函数，作为开发者应该整理一个自己的函数库，在需要之时复制过来即可。本文作者收集整理数十个PHP项目中常用的函数，保证能正常运行，你只要复制粘贴到你项目中即可。</p>
			<a href="http://www.helloweba.com/view-blog-281.html" class="cd-read-more" target="_blank">阅读全文</a>
			<span class="cd-date">2014-12-05</span>
		</div>
	</div>
    <div class="cd-timeline-block">
		<div class="cd-timeline-img cd-movie">
			<img src="../images/cd-icon-location.svg" alt="Location">
		</div>

		<div class="cd-timeline-content">
			<h2>收集整理的非常有用的PHP函数</h2>
			<p>项目中经常会需要一些让人头疼的函数，作为开发者应该整理一个自己的函数库，在需要之时复制过来即可。本文作者收集整理数十个PHP项目中常用的函数，保证能正常运行，你只要复制粘贴到你项目中即可。</p>
			<a href="http://www.helloweba.com/view-blog-281.html" class="cd-read-more" target="_blank">阅读全文</a>
			<span class="cd-date">2014-12-05</span>
		</div>
	</div>
    <div class="cd-timeline-block">
		<div class="cd-timeline-img cd-movie">
			<img src="../images/cd-icon-location.svg" alt="Location">
		</div>

		<div class="cd-timeline-content">
			<h2>收集整理的非常有用的PHP函数</h2>
			<p>项目中经常会需要一些让人头疼的函数，作为开发者应该整理一个自己的函数库，在需要之时复制过来即可。本文作者收集整理数十个PHP项目中常用的函数，保证能正常运行，你只要复制粘贴到你项目中即可。</p>
			<a href="http://www.helloweba.com/view-blog-281.html" class="cd-read-more" target="_blank">阅读全文</a>
			<span class="cd-date">2014-12-05</span>
		</div>
	</div>
</section>

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


</body>
</html>