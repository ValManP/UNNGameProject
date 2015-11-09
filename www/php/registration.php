<!DOCTYPE HTML> 
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<?php 
	include "reg.php";
?>
<body background="source/fon.png"> 
<form class="regform"  method="post" action="home.php"> 
	<img src="Image URL" alt="Logo"/>
	<h2>Регистрация</h2>
   <input id = "login" type="text" required placeholder="Логин" class="form-control" name="login">
   <br><br>
   <input type="text" required placeholder="Пароль" class="form-control" name="password">
   <br><br>
   <p class="submit"><button type="submit">Зарегестрироваться</button></p>		
</form>


</body>
</html>