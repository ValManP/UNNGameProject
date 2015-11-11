<?php
	include "php/log_in.php";
?>
<!DOCTYPE HTML> 
<html>
<head>
<link rel="stylesheet" href="php/style.css">
<style>
  body { 
	background: url(source/background.jpg) no-repeat;
	background-size: 100%;	
	}
</style>
<title>Ѕыки и коровы</title>
</head>


<body> 
<form class="regform" method="post" action="index.php"> 
	<img src="Image URL" alt="Logo"/>
	<h2>Ѕыки и коровы</h2>
   <input id = "login" type="text" required placeholder="Ћогин" class="form-control" name="login" autocomplete="off">
   <br><br>
   <input type="password" required placeholder="ѕароль" class="form-control" name="password" autocomplete="off" type="password">
   <br><br>
   <button id = "login_button" type="submit">¬ойти</button>	
   <br><br>
   <a id="ref" href="php/registration.php" >–≈√»—“–ј÷»я</a>
</form>


</body>
</html>