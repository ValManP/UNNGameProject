<!DOCTYPE HTML> 
<html>
<head>
<link rel="stylesheet" href="stylesheet.css">
<link rel="stylesheet" href="style.css">
<title>Регистрация</title>
</head>
<?php 
	include "reg.php";
?>
<body> 
<form class="regform"  method="post" action="registration.php"> 
	<img src="Image URL" alt="Logo"/>
	<h2>Регистрация</h2>
   <input id = "login" type="text" required placeholder="Логин" class="form-control" name="login" autocomplete="off">
   <br><br>
   <input type="text" required placeholder="Пароль" class="form-control" name="password" autocomplete="off" type="password">
   <br><br>
   <button id = "login_button" type="submit">Зарегестрироваться</button>	
   <br><br>
   <a class="ref" href="../index.php" >Вернуться</a>
</form>


</body>
</html>