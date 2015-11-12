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
		<link rel="stylesheet" href="spoiler_hardcore.css">
		<title>Ваша домашняя страница</title>
	</head>
	<body>
		<div class="user_form">
			<img src="../source/bull.png" width="120px" height="150px" id="avatar"/>
			<h1 class="login"><?php echo $login; ?></h1>
			<a href="../index.php" class="link_button_sign_out">Выйти</a><br>
		</div>
		
		<div class="stat_form">
			<a href="game_start.php" class="link_button">Начать игру</a><br>
			
			<div class="spoiler_hardcore">
			<input style="width:360px;height:45px;" type="checkbox" tabindex="-1" >
				<div class="box">
					<span class=close>Скрыть</span><span class=open>Показать</span>
					<blockquote class="Untext">
						Текст под спойлером
					</blockquote>
				</div>
			</div>
			
			<div class="spoiler_simple">
				<label>
					<input type="checkbox"/>
					<span class="btn">СПОЙЛЕР</span>
					<div class="text">
						Текст под спойлером
					</div>
				</label>
			</div>
		</div>
	</body>
</html>
