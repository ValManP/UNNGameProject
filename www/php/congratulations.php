<?php
	session_start();
	header("Content-Type: text/html; charset=utf-8");
	include("connect_db.php");
	
	$unknown_number = $_SESSION["unknown_number"];
	if (isset($_SESSION["history"]))
		$history = $_SESSION["history"];
	else
		$history = array();
	
	$score = count($history);
	
	$game_id = $_SESSION["game_id"];
	
	$retval = mysql_query("UPDATE games_t SET score = $score WHERE game_id = $game_id", $db);
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="stylesheet.css">
		<title>Поздравляем!</title>
	</head>
	<body>
		<div class="wrapper">
			<div class="content" style="font-size: 30px; text-align: center; margin: 0 auto;">
				Поздравляем, вы угадали число! :)<br/>
				<img src="../source/congratulations.png"/><br/>
				Вы угадали загаданное число: <?php echo $unknown_number; ?>.<br/>
				Вы сделали попыток: <?php echo $score; ?>.<br/>
				<a href="home.php" class="link_button">Вернуться на домашнюю страницу</a>
			</div>
			<div class="footer">
				<div class="copyright">© Румянцев Александр, Поздяев Валерий 2015</div>
			</div>
		</div>
	</body>
</html>
