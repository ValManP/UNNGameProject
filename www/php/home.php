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
		<div class="wrapper">
			<div class="header" style="text-align: center;">
				<img src="../source/logo.png" width="450"/>
			</div>
			<div class="content">
				<div class="user_form">
					<img src="../source/empty_avatar.jpg" width="170px" height="170px" id="avatar"/>
					<h1 class="login"><?php echo $login; ?></h1>
					<a href="../index.php" class="link_button_sign_out">Выйти</a><br>
				</div>


				<div class="stat_form">
					<a href="game_start.php" class="link_button" style="margin-left: 40%; margin-bottom: 20px; opacity: 0.7;">Начать игру</a><br>
					<div class="left">
						<p style="font-size: 24px; margin-bottom: 0;">Игры</p>
						<div id="style-7" class="game_stat" style = "width:110px; height:230px;">
							<form name="stat_form" action="home.php" method="post" style="margin: 0;">
								<?php for ($number = 1; $row = mysql_fetch_array ($result); $number += 1): ?>
									<button type="submit" name="game" class="btn" value="<?php echo $row['game_id']; ?>">Игра <?php echo $row['rank']; ?></button>
									<input type="hidden" name="<?php echo $row['game_id']; ?>" value="<?php echo $number; ?>"/>
								<?php endfor; ?>
							</form>
						</div>
					</div>
					
					<div class="right">
						<p style="font-size: 24px; margin-bottom: 0; margin-left: 19%;">Информация об игре</p>
						<div id="style-7" class="game_stat" style = "width:330px; height:230px; margin-left: 10%;">
						<?php if (isset($game_history)): ?>
							Игра <?php echo $game_number; ?><br/>
							Дата: <?php echo $time; ?><br/>
							Задуманное число: <?php echo $unknown_number; ?><br/>
							<?php if ($score > 0): ?>
								Вы угадали число!<br/>
							<?php elseif ($score == 0): ?>
								Вы сдались. =(<br/>
							<?php else: ?>
								Вы не закончили игру. =(<br/>
							<?php endif; ?>
							Количество попыток: <?php echo $tries; ?><br/>
							<br/>
							<?php $counter = 1; ?>
							<?php while ($row = mysql_fetch_array ($game_history)): ?>
									<?php echo $counter.". ".substr($row['value'], 0, 4)." : "; ?>
									<?php echo substr($row['value'], 4, 1); ?><img src="../source/bull.png" width="20px"/>
									<?php echo substr($row['value'], 5, 1); ?><img src="../source/cow.png" width="20px"/><br/>
									<?php $counter += 1; ?>
							<?php endwhile; ?>
						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="copyright">© Румянцев Александр, Поздяев Валерий ННГУ 2015</div>
			</div>
		</div>
	</body>
</html>
