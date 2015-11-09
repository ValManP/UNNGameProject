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
	// TODO: sql request to create 1 row in GAMES_T database
	
	header("Location: game.php");
?>
<font align="center">Подождите немного, вы будите перенаправлены на страницу с игрой...</font>
