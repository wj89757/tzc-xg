<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="http://libs.useso.com/js/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="umeditor.min.js"></script>
<script type="text/javascript" src="lang/zh-cn/zh-cn.js"></script>
<link href="themes/default/css/umeditor.min.css" type="text/css" rel="stylesheet">
<style>
/*******************************************
	 input 提交表单
********************************************/


input{width:70%;height:42px;line-height:42px;margin-top:20px 0px 25px 0px;padding:15 15px;background:#2d2d2d;background:rgba(45,45,45,.15);-moz-border-radius:6px;-webkit-border-radius:6px;border-radius:6px;border:1px solid #3d3d3d;border:1px solid rgba(255,255,255,.15);-moz-box-shadow:0 2px 3px 0 rgba(0,0,0,.1) inset;-webkit-box-shadow:0 2px 3px 0 rgba(0,0,0,.1) inset;box-shadow:0 2px 3px 0 rgba(0,0,0,.1) inset;font-family:"Microsoft YaHei",Helvetica,Arial,sans-serif;font-size:14px;color:#fff;text-shadow:0 1px 2px rgba(0,0,0,.1);-o-transition:all .2s;-moz-transition:all .2s;-webkit-transition:all .2s;-ms-transition:all .2s}
input:-moz-placeholder{color:#fff;}
input:-ms-input-placeholder{color:#fff}
input::-webkit-input-placeholder{color:#fff}
input:focus{outline:0;-moz-box-shadow:0 2px 3px 0 rgba(0,0,0,.1) inset,0 2px 7px 0 rgba(0,0,0,.2);-webkit-box-shadow:0 2px 3px 0 rgba(0,0,0,.1) inset,0 2px 7px 0 rgba(0,0,0,.2);box-shadow:0 2px 3px 0 rgba(0,0,0,.1) inset,0 2px 7px 0 rgba(0,0,0,.2)}
select{cursor:pointer;width:100px;height:30px;margin:20px 0px -10px 0px;padding:0;  background: rgba(6, 127, 228, 0.71);-moz-border-radius:6px;-webkit-border-radius:6px;border-radius:6px;border:0;-moz-box-shadow:0 15px 30px 0 rgba(255,255,255,.25) inset,0 2px 7px 0 rgba(0,0,0,.2);font-family:"Microsoft YaHei",Helvetica,Arial,sans-serif;font-size:14px;font-weight:700;color:#fff;text-shadow:0 1px 2px rgba(0,0,0,.1);-o-transition:all .2s;-moz-transition:all .2s;-webkit-transition:all .2s;-ms-transition:all .2s;}
input[type="submit"]{cursor:pointer;width:100px;height:44px;margin:25px auto;padding:0;  background: rgba(6, 127, 228, 0.71);-moz-border-radius:6px;-webkit-border-radius:6px;border-radius:6px;border:0;-moz-box-shadow:0 15px 30px 0 rgba(255,255,255,.25) inset,0 2px 7px 0 rgba(0,0,0,.2);font-family:"Microsoft YaHei",Helvetica,Arial,sans-serif;font-size:14px;font-weight:700;color:#fff;text-shadow:0 1px 2px rgba(0,0,0,.1);-o-transition:all .2s;-moz-transition:all .2s;-webkit-transition:all .2s;-ms-transition:all .2s;}
input[type="submit"]:hover{-moz-box-shadow:0 15px 30px 0 rgba(255,255,255,.15) inset,0 2px 7px 0 rgba(0,0,0,.2);-webkit-box-shadow:0 15px 30px 0 rgba(255,255,255,.15) inset,0 2px 7px 0 rgba(0,0,0,.2);box-shadow:0 15px 30px 0 rgba(255,255,255,.15) inset,0 2px 7px 0 rgba(0,0,0,.2)}
input[type="submit"]:active{-moz-box-shadow:0 15px 30px 0 rgba(255,255,255,.15) inset,0 2px 7px 0 rgba(0,0,0,.2);-webkit-box-shadow:0 15px 30px 0 rgba(255,255,255,.15) inset,0 2px 7px 0 rgba(0,0,0,.2);box-shadow:0 5px 8px 0 rgba(0,0,0,.1) inset,0 1px 4px 0 rgba(0,0,0,.1);border:0 solid #016FCB}
.big
{
	color:#fff;
	width:100%;
	height:80%;
	padding:10px;
	padding-top:30px;
	margin-bottom:10px;
	border-style:dashed;
	border-left: 1px solid #C1DAD7; 
	border-right: 1px solid #C1DAD7; 
	border-bottom: 1px solid #C1DAD7; 
	border-top: 1px solid #C1DAD7; 
	letter-spacing: 2px;
	font-size:14px;
	background-image:url(../images/grain.jpg);
}
.inputbottom
{
	margin-bottom:30px;
}
</style>
</head>

<body>
	
	<div class="big">
		<h2 style="text-align:center; font-size:25px;">发表文章页</h2>
	<form action="server.php" method="post" >
      文章标题:<input name="head" type="text" class="inputbottom">
     
      
	   <script id="container" name="content" style="width:90%;height:400px; margin-top:10px; color:#000;">这里写你的初始化内容</script>
       请选择文章类型：<select id="artype" name="grade" style="width:100px;">
        	<option value="freshlog">大一日志</option>
            <option value="SophomoreLog">大二日志</option>
            <option value="JuniorLog">大三日志</option>
            <option value="SeniorLog">大四日志</option>
            <option value="ProfessionGuide">专业指导</option>
            <option value="EmployIdea">就业想法</option>
       </select>
       <br>
	<input type="submit" ></input>
    
	</form>
	</div>
    
	
<script>
//实例化编辑器
var um = UM.getEditor('myEditor');
function getContent(){
	var cont = UM.getEditor('myEditor').getContent();
	alert(cont);
}

	
var editor = UM.getEditor('container',{
	toolbar: 
        ['bold italic underline fullscreen', 'link unlink','| justifyleft justifycenter justifyright justifyjustify |', 'emotion image video  | map']
    
});
</script>



</body>
</html>
