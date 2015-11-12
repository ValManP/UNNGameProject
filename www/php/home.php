<?php
	session_start(); 
	$login = $_SESSION["user_name"];
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="home.css">
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="stylesheet" href="spoiler_simple.css">
		<!-- <link rel="stylesheet" href="spoiler_hardcore.css"> -->
		<title>Ваша домашняя страница</title>
	</head>
	<body>
		<div class="user_form">
			<img src="../source/bull.png" width="120px" height="150px" id="avatar"/>
			<h1 class="login"><?php echo $login; ?></h1>
			<a href="../index.php" class="link_button_sign_out">Выйти</a><br>
		</div>
		
		<div class="stat_form">
			<!-- После класса можно изменять индивидуальные свойства элемента: -->
			<a href="game_start.php" class="link_button" style="margin-left: 40%;">Начать игру</a><br>
			
			<!-- После класса можно изменять индивидуальные свойства элемента: -->
			<div class="spoiler_simple" style="margin: 10px; color: red;">
				<label>
					<input type="checkbox"/>
					<span class="btn">Игра 1</span>
					<div class="text">
						Количество попыток: СТОЛЬКО<br/>
						1. ТАКАЯ<br/>
						2. СЯКАЯ<br/>
					</div>
				</label>
			</div>
			<div class="spoiler_simple" style="margin: 10px;">
				<label>
					<input type="checkbox"/>
					<span class="btn">Игра 2</span>
					<div class="text">
						Количество попыток: ВОТ СТОЛЬКО<br/>
						1. ТУДА<br/>
						2. СУДА<br/>
					</div>
				</label>
			</div>
		</div>
	</body>
</html>
