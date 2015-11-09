<!DOCTYPE HTML> 
<html>
<head>
<link rel="stylesheet" href="php/style.css">
</head>

<?php
	include "php/log_in.php";
?>

<body background="source/fon.png"> 
<form class="regform" method="post" action="index.php"> 
	<img src="Image URL" alt="Logo"/>
	<h2>Быки и коровы</h2>
   <input id = "login" type="text" required placeholder="Логин" class="form-control" name="login">
   <br><br>
   <input type="text" required placeholder="Пароль" class="form-control" name="password">
   <br><br>
   <p class="submit"><button type="submit">Войти</button></p>		
   <br>
   <a id="s1" href="php/registration.php" target="_self" >Регистрация</a>
</form>


</body>
</html>