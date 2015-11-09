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
?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="stylesheet.css">
		<title>Поздравления</title>
	</head>
	<body align="center" style="font-size: 30px;">
		Поздравляем, вы угадали число! :)<br/>
		<img src="../source/congratulations.png"/><br/>
		Вы угадали загаданное число: <?php echo $unknown_number; ?>.<br/>
		Вы сделали попыток: <?php echo $score; ?>.<br/><br/>
		<a href="home.php"><div class="div_button">Вернуться на домашнюю страницу</div></a>
	</body>
</html>