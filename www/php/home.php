<?php
	session_start(); 
	$login = $_SESSION["user_name"];
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="stylesheet" href="spoiler.css">
		<title>Ваша домашняя страница</title>
	</head>
	<body>
		<div class="spoiler">
			<!-- width: *px; - подгодяется вручную по длине текста под спойлером, height: *px; - по размеру шрифта -->
			<input style="width:500px;height:45px;" type="checkbox" tabindex="-1" >
			<div class="box">
				<span class=close>1. 15:00 10.11.2015</span><span class=open>1. 15:00 10.11.2015</span>
				<blockquote class="Untext">
					Загаданное число:<br>
					<ol style="margin: 0; padding-left: 30px;">
						<li>1234: 1 бык 1 коров.</li>
						<li>и так далее (как вариант)</li>
					</ol>
				</blockquote>
			</div>
		</div><br>
		<a href="game_start.php"><div class="div_button">Начать игру</div></a><br>
		<h1 class="login"><?php echo $login; ?></h1>
		<a href="../index.php"><div class="div_button_sign_out">Выйти</div></a><br>
	</body>
</html>