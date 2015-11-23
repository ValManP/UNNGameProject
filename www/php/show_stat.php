<?php
	$stat = "";
	
	if (!isset($result)) {
		include("connect_db.php");
		$user_id = $_SESSION['user_id'];
		$result = mysql_query ("SELECT t . * , @rownum := @rownum +1 AS rank FROM games_t t, ( SELECT @rownum :=0)r WHERE t.user_id='$user_id' ORDER BY t.time", $db);
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (!empty($_POST['game']))
		{
			$game_id = $_POST['game'];
			$game_number = $_POST["$game_id"];
			$game_info = mysql_fetch_array (mysql_query ("SELECT * FROM games_t WHERE game_id='$game_id'", $db));
			$unknown_number = $game_info['unknown_number'];
			$time = $game_info['time'];
			$score = $game_info['score'];

			$game_history = mysql_query ("SELECT * FROM gametab_t WHERE game_id='$game_id'", $db);
			$tries = mysql_num_rows($game_history);
		}
	}
?>
