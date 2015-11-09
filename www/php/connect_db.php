<?php
	$db = mysql_connect ("bullsandcows", "root", "");
	mysql_select_db("game_db", $db);
	
	if (!$db)
    {
		die('Could not connect: ' . mysql_error());
    }
?>