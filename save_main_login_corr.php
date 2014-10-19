<?php 
session_start();
if ($_SESSION["login"]!="1") {
	header("location: /index.php");
}
if ($_POST["save_main_login"]!="123") {
	header("location: /main.php");
}
else {
	session_start();
	$_SESSION["login"]="2";
	header("location: /save_main.php");
}
?>