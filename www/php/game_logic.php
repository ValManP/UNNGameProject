<?php
	session_start();
	header("Content-Type: text/html; charset=utf-8");
	
	$error_msg = "";
	$bull_count = 0;
	$cow_count = 0;
	
	$unknown_number = $_SESSION["unknown_number"];
	if (isset($_SESSION["history"]))
		$history = $_SESSION["history"];
	else
		$history = array();
	
	// Обработка пользовательской попытки
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (empty($_POST["user_guess"]))
			$error_msg = "Введите 4 значное число!";
		else
		{
			$user_guess = test_input($_POST["user_guess"]);
			// Проверить, что были введены только цифры
			if ((!preg_match("/^[0-9]*$/", $user_guess)) || (strlen($user_guess)) < 4)
				$error_msg = "Введите 4 значное число!"; 
			else
			{
				// Проверить, что были введены 4 разные цифры и первая цифра не 0
				if ($user_guess[0] == "0")
					$error_msg = "Число не должно начинаться на цифру 0!";
				else
					for ($i = 0; $i < 3; $i = $i + 1)
					{
						for ($j = $i + 1; $j < 4; $j = $j + 1)
						{
							if ($user_guess[$i] == $user_guess[$j])
							{
								$error_msg = "Все цифры числа должны быть различными!";
								break;
							}
							if ($error_msg != "") break;
						}
					}
				
				if ($error_msg == "")
				{
					// Посчитать количество быков в числе пользователя
					for ($i = 0; $i < 4; $i = $i + 1)
						if ($unknown_number[$i] == $user_guess[$i])
							$bull_count = $bull_count + 1;
						
					// Подсчитать количество коров в числе пользователя
					for ($i = 0; $i < 4; $i = $i + 1)
						for ($j = 0; $j < 4; $j = $j + 1)
							if ($unknown_number[$i] == $user_guess[$j])
								$cow_count = $cow_count + 1;
					$cow_count = $cow_count - $bull_count;
					
					// Обновить историю вводимых чисел
					$new_attempt = $user_guess . $bull_count . $cow_count;
					$history[] = $new_attempt;
					$_SESSION["history"] = $history;
					
					// Внести попытку игрока в базу данных
					include("connect_db.php");
					$game_id = $_SESSION["game_id"];
					$retval = mysql_query("INSERT INTO gametab_t(game_id, value) VALUES($game_id, $new_attempt)", $db);
					
					// Проверка на выигрыш игрока
					if ($bull_count == 4)
						header("Location: congratulations.php");
				}
			}
		}
	}
	
	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	function print_history()
	{
		global $history;
		
		$n = count($history);
		while ($n > 0)
		{
			$value = $history[$n - 1];
			echo $n . ". " . substr($value, 0, 4) . ": " .
				 $value[4] . "<img src=\"../source/bull.png\" width=\"20px\" height=\"25px\"/> " .
				 $value[5] . "<img src=\"../source/cow.png\" width=\"20px\" height=\"23px\"/><br/>";
			$n = $n - 1;
		}
	}
	
	function print_report()
	{
		global $error_msg;
		global $history;
		global $user_guess;
		global $bull_count;
		global $cow_count;
		
		if ($error_msg == "")
		{
			if (count($history) > 0)
				echo $user_guess . ": " .
					 $bull_count . "<img src=\"../source/bull.png\" width=\"36px\" height=\"50px\"/> " .
					 $cow_count . "<img src=\"../source/cow.png\" width=\"36px\" height=\"42px\"/>";
		}
		else
			echo "<font color=\"red\">" . $error_msg . "</font>";
	}
?>
