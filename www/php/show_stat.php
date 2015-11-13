<?php

	$stat = "";
	
	if (!isset($result)) {
		include("connect_db.php");
		$user_id = $_SESSION['user_id'];
		$result = mysql_query ("SELECT * FROM games_t WHERE user_id='$user_id'", $db); 
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "hello";
		if (!empty($_POST['game']))
		{
			$game_id = $_POST['game'];
			echo "hello";
		}
	}
?>
