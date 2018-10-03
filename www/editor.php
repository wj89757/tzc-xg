<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<script src="ckeditor/ckeditor.js"></script>
<?php
if(!empty($_POST["Save"]))
{
$res=fopen("edit.txt","w");
 
fwrite($res, $_POST["editor1"] );
}
 
 

?>
</head>

<body>
        <form action="" method="post" id="editor">
            <p>
              <textarea name="editor1" id="editor1" rows="10" cols="80">
                <?php 
					if(file_exists("edit.txt"))
					echo fread(fopen("edit.txt","r"),filesize("edit.txt"));
				
				 ?>
            </textarea>
              <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
            </p>
            <p>
              <input type="submit" name="Save" value="保存" />
</p>
        </form>
</body>
</html>
