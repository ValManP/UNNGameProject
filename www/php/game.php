<?php include("game_logic.php"); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="stylesheet.css">
		<title>Игра "Быки и Коровы"</title>
	</head>
	<body>
		<div class="wrapper">
			<div class="header" style="text-align: center;">
				<img src="../source/logo.png" width="350"/>
			</div>
			<div class="report">
				<?php if ($error_msg != ""): ?>
					<p style="color: red; margin: 0;"><?php echo $error_msg; ?></p>
				<?php else: ?>
					<?php if (count($history) > 0): ?>
						<p style="margin: 0;"><?php echo $user_guess; ?>:
						<?php echo $bull_count; ?><img src="../source/bull.png" width="36px" height="50px"/>
						<?php echo $cow_count; ?><img src="../source/cow.png" width="36px" height="42px"/></p>
					<?php endif; ?>
				<?php endif; ?>
			</div>
			<div class="content">
				<div class="left">
				</div>
				
				<div class="middle">
				
					<div class="game_form">
						<p style="font-size: 30px; font-weight: bold; margin: 0;">Угадать&nbsp;число</p>
						<form name="guess_form" action="game.php" method="post"><br>	
							<input type="text" name="user_guess" maxlength="4" autocomplete="off" class="user_guess"><br/>
							<input type="submit" value="Угадать"><br/>
						</form>
						<form name="give_up_form" action="give_up.php">
							<input type="submit" value="Сдаться">
						</form>
					</div>

				</div>
				
				<div class="right">
		
					<div class="history" id="style-7">
						<?php $reversed_history = array_reverse($history) ?>
						<?php foreach ($reversed_history as $key=>$value): ?>
							<?php echo count($reversed_history) - $key; ?>.
							<?php echo substr($value, 0, 4); ?>:
							<?php echo $value[4]; ?><img src="../source/bull.png" width="20px" height="25px"/>
							<?php echo $value[5]; ?><img src="../source/cow.png" width="20px" height="23px"/><br/>
						<?php endforeach; ?>
					</div>
					
				</div>
			</div>
			<div class="footer">
				<div class="copyright">© Румянцев Александр, Поздяев Валерий 2015</div>
			</div>
		</div>
	</body>
</html>
