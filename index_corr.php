<?php 

if ($_POST["master_password"]!="312") {
	header( "Location: /index.php" );
}
else {
	session_start();
	$_SESSION["login"]= 1;
	header("Location: /main.php");
}

?>