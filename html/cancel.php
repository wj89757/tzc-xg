<?php
	session_start();
	unset($_SESSION["User"]);
	header("Location:../index.php");
?>