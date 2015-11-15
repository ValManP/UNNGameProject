<?php 
	include "reg.php";
?>
<!DOCTYPE HTML> 
<html>
	<head>
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="stylesheet" href="style.css">
		<title>Регистрация</title>
	</head>
	<body>
		<div class="wrapper">
			<div class="content">
				<form class="regform"  method="post" action="registration.php"> 
					<div class="logo">
						<img src="../source/logo.png"/><br/>
						<h1 style="margin-top: 0;">Регистрация</h1>
					</div>
					<input id = "login" type="text" required placeholder="Логин" class="form-control" name="login" autocomplete="off">
					<br><br>
					<input type="text" required placeholder="Пароль" class="form-control" name="password" autocomplete="off" type="password">
					<br><br>
					<button id = "login_button" type="submit">Зарегестрироваться</button>	
					<br><br>
					<a class="ref" href="../index.php" >Вернуться</a>
				</form>
			</div>
			<div class="footer">
				<div class="copyright">© Румянцев Александр, Поздяев Валерий 2015</div>
			</div>
		</div>
	</body>
</html>