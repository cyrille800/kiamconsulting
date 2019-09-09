<?php
session_start();
if(isset($_SESSION["id"])|| isset($_SESSION["id_admin"])){
	$_SESSION=[];
	session_destroy();
	header("location:login-reg.php");
}else{
header("location:../pages_error/404.html");
}
?>