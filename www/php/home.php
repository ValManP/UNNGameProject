<?php
	session_start(); 
	$login = $_SESSION["user_name"];
	
	include("show_stat.php");
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="home.css">
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="stylesheet" href="spoiler_simple.css">
		<!-- <link rel="stylesheet" href="spoiler_hardcore.css"> -->
		<title>Ваша домашняя страница</title>
	</head>
	<body>
		<div class="user_form">
			<img src="../source/bull.png" width="120px" height="150px" id="avatar"/>
			<h1 class="login"><?php echo $login; ?></h1>
			<a href="../index.php" class="link_button_sign_out">Выйти</a><br>
		</div>
		
		<div class="stat_form">
			<!-- После класса можно изменять индивидуальные свойства элемента: -->
			<a href="game_start.php" class="link_button" style="margin-left: 40%;">Начать игру</a><br>
			<div class="left">
				<div class="game_stat" style = "width:110px; height:230px;">
						<?php while ($row = mysql_fetch_array ($result)){ ?>
						<button type="button" class="btn" name="game" value="<?php echo $row['game_id']; ?>">Игра <?php echo $row['game_id']; ?></button><br/><br/>
						<?php }; ?>
						<!--<button type="submit" class="btn" name="game" value="1">Игра 1.</button>-->
				</div>
			</div>
			
			<div class="right">
				<div class="game_stat" style = "width:330px; height:230px; margin-left: 10%;">
					<p><?php echo $stat; ?>:</p>
				</div>
			</div>
			
		</div>
	</body>
</html>
