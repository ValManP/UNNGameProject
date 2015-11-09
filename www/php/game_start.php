<?php
	session_start();
	header("Content-Type: text/html; charset=utf-8");
	include("connect_db.php");
	
	$unknown_number = "" . rand(1, 9);
	for($i = 1; $i < 4; $i = $i + 1)
	{
		do
		{
			$digit = "" . rand(0, 9);
		} while(strpos($unknown_number, $digit) !== false);
		$unknown_number = $unknown_number . $digit;
	}
	$_SESSION["unknown_number"] = $unknown_number;
	
	$history = array();
	$_SESSION["history"] = $history;
	
	$user_id = $_SESSION["user_id"];
	
	$retval = mysql_query("INSERT INTO games_t(user_id, unknown_number, time) VALUES($user_id, $unknown_number, NOW())", $db);
	$result = mysql_query("SELECT MAX(game_id) game_id FROM games_t WHERE user_id = $user_id", $db);
	$game_id = mysql_fetch_array($result);
	
	$_SESSION["game_id"] = $game_id["game_id"];
	
	header("Location: game.php");
?>
<font align="center">Подождите немного, вы будите перенаправлены на страницу с игрой...</font>
