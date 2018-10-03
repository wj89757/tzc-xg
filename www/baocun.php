<?php
$content=$_POST["neirong"];

$res=fopen("file.txt","w");

fwrite($res,$content);

header("Location:ck.php");

?>