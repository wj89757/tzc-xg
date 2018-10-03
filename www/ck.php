
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="ckeditor/ckeditor.js"></script>
<title>无标题文档</title>
</head>

<body>
<form action="baocun.php" method="post">
  <p>
    <textarea name="neirong" id="neirong" >
    <?php
	$res=fopen("file.txt","r");
	echo fread($res,filesize("file.txt"));
	
	?>
  </textarea>
    <script language="javascript">
CKEDITOR.replace('neirong');
  </script>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="提交">
  </p>
</form>
</body>
</html>