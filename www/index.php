<?php
	include "php/log_in.php";
?>
<!DOCTYPE HTML> 
<html>
	<head>
		<link rel="stylesheet" href="php/style.css">
		<link rel="stylesheet" href="php/stylesheet.css">
		<title>Быки и коровы</title>
	</head>

	<body> 
		<div class="wrapper">
			<div class="content">
				<form class="regform" method="post" action="index.php">
					<div class="logo" style="margin-left:35%;"><h1 style="margin-top:-75px;">БЫКИ И КОРОВЫ</h1></div>
					<input id = "login" type="text" required placeholder="Логин" class="form-control" name="login" autocomplete="off">
					<br><br>
					<input type="password" required placeholder="Пароль" class="form-control" name="password" autocomplete="off" type="password">
					<br><br>
					<button id = "login_button" type="submit">Войти</button>	
					<br><br>
					<a class="ref" href="php/registration.php" >РЕГИСТРАЦИЯ</a>
				</form>
			</div>
			<div class="footer">
				<div class="copyright">© Румянцев Александр, Поздяев Валерий 2015</div>
			</div>
		</div>
	</body>
</html>