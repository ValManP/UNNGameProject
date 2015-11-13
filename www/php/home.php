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
					<form id="stat_form" action="home.php" method="post"></form>
					<?php while ($row = mysql_fetch_array ($result)): ?>
						<button type="submit" name="game" class="btn" form="stat_form" value="<?php echo $row['game_id']; ?>">Игра <?php echo $row['rank']; ?></button>
					<?php endwhile; ?>
				</div>
			</div>
			
			<div class="right">
				<form class="game_stat" action="home.php" style = "width:330px; height:230px; margin-left: 10%;">
				<?php if (isset($game_history)){ ?>
					<?php echo "Дата: ".$time; ?> <br/>
					<?php echo "Задуманное число: ".$unknown_number; ?> <br/>
					<?php if ($score != -1) echo "Угадано за ".$score." попыток."; else echo "Вы сдались =("; ?> <br/><br/>
					<?php while ($row = mysql_fetch_array ($game_history)): ?>							
							<?php echo "Ход ".substr($row['value'], 0, 4)." : "; ?>
							<?php echo substr($row['value'], 4, 1); ?><img src="../source/bull.png" width="20px" height="25px"/>
							<?php echo substr($row['value'], 5, 1); ?><img src="../source/cow.png" width="20px" height="23px"/><br/>
					<?php endwhile;} ?>
				</form>
			</div>
			
		</div>
	</body>
</html>
