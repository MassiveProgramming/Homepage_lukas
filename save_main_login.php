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
		<a href="main.php" id="main_menue_sel">Hauptmenü</a>
		<a href="save_main_login.php" id="main_menue_sel">Login</a>
		</p>
		<form action="save_main_login_corr.php" method="post">Passwort :
		<input type="password" name="save_main_login"></input>
		<input type="submit" value="Login">
		</form>
</body>

</html>