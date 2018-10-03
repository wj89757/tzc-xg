 <?php
 header("Content-Type:text/html;charset=gb2312");
 $password="123456".rand(1,10000);
 $res=fopen("pwd.txt","a");
 fwrite( $res,md5( $password)."\r\n");
 
 echo $password."¼ÓÃÜºóÊÇ£º". md5( $password);
 
 ?>
