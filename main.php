<?php 
session_start();
if ($_SESSION["login"]!="1") {
	header("location: /index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
	
	  <link rel="stylesheet" type="text/css" href="style.css" /> 
  
 	 <title>Lukas Droste</title>
	
</head>

<body>
		<p id="main_menue">
		<a href="/main.php" id="main_menue_sel">Hauptmenü</a>
		<a href="/save_main_login.php" id="main_menue_sel">Login</a>
		<a href="/NAS/index.html" id="main_menue_sel">Minecraft</a>
		</p>
</body>

</html>