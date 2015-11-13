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
		<div class="wrapper">
			<div class="content">
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
			</div>
			<div class="footer">
				<div class="copyright">© Румянцев Александр, Поздяев Валерий 2015</div>
			</div>
		</div>
	</body>
</html>