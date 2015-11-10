<?php include("game_logic.php"); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="stylesheet.css">
		<title>Игра Быки-Коровы</title>
	</head>
	<body>
		<div class="header">
			<?php echo $unknown_number; ?>
		</div>
		<div class="content">
			<div class="top">
				<?php print_report(); ?><br/>
			</div>
			
			<div class="middle">
				<div class="game_form">
					<form name="guess_form" action="game.php" method="post">
						<p style="font-size: 30px; font-weight: bold; margin: 0;">Угадать число</p><br/>
						<input type="text" name="user_guess" maxlength="4" autocomplete="off" class="user_guess"><br/>
						<input type="submit" value="Угадать"><br/>
					</form>
					<form name="give_up" action="give_up.php">
						<input type="submit" value="Сдаться">
					</form>
				</div>
				<div class="history">
					<?php print_history(); ?>
				</div>
				<div class="clear">
				</div>
			</div>
		</div>
		
	</body>
</html>
