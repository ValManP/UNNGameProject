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
	
	$retval = mysql_query("UPDATE games_t SET score = 0 WHERE game_id = $game_id", $db);
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="stylesheet.css">
		<title>Сдаться</title>
	</head>
	<body style="font-size: 30px; text-align: center;">
		Вы сдались. :(<br/>
		<img src="../source/give_up.png"/><br/>
		Было загадано число: <?php echo $unknown_number; ?>.<br/>
		Вы сделали попыток: <?php echo $score; ?>.<br/><br/>
		<a href="home.php" class="link_button">Вернуться на домашнюю страницу</a>
	</body>
</html>