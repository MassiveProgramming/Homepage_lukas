<?php 
session_start();
if ($_SESSION["login"]!="2") {
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
		<p id="save_main_menue">
		<a href="save_main.php" id="save_main_menue_sel">Hauptmenü</a>
		<a href="save_logout.php" id="save_main_menue_sel">Logout</a>
		</p>
</body>

</html>