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
				$history[] = $user_guess . $bull_count . $cow_count;
				$_SESSION["history"] = $history;
				
				// Проверка на выигрыш игрока
				if ($bull_count == 4)
					header("Location: congratulations.php");
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
					 $bull_count . "<img src=\"../source/bull.png\" width=\"30px\" height=\"40px\"/> " .
					 $cow_count . "<img src=\"../source/cow.png\" width=\"30px\" height=\"35px\"/>";
		}
		else
			echo "<font color=\"red\">" . $error_msg . "</font>";
	}
?>
