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
		<title>Ваша домашняя страница</title>
	</head>
	<body>
		<div class="user_form">
			<img src="../source/bull.png" width="120px" height="150px" id="avatar"/>
			<h1 class="login"><?php echo $login; ?></h1>
			<a href="../index.php" class="link_button_sign_out">Выйти</a><br>
		</div>
		
		<div class="stat_form">
			<a href="game_start.php" class="link_button" style="margin-left: 40%;">Начать игру</a><br>
			<div class="left">
				<div class="game_stat" style = "width:110px; height:230px;">
					<!-- Кнопки должны сабмитить в какую-то форму, поэтому нужно сделать хотя бы пустую: -->
					<form id="stat_form" action="home.php" method="post"></form>
					<?php while ($row = mysql_fetch_array ($result)): ?>
						<!-- У кнопки нужно указать, к какой форме она привязана, а также тип submit, -->
						<!-- так как тип button нужен для того, чтобы забить на кнопку JavaScript функцию: -->
						<button type="submit" name="game" class="btn" form="stat_form" value="<?php echo $row['game_id']; ?>">Игра <?php echo $row['game_id']; ?></button>
					<?php endwhile; ?>
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
