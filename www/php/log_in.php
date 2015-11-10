<?php
session_start();
$db = mysql_connect ("bullsandcows", "root", "");
mysql_select_db("game_db", $db);
$password = $login = "";
$errMess = "";
 if(! $db )
   {
      die('Could not connect: ' . mysql_error());
   }
   

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if ((!empty($_POST['login'])) && (!empty($_POST['password'])))
	{
		$login = $_POST['login'];
		$pass = $_POST['password'];
		
		$password = md5($pass);                 
		$result = mysql_query ("SELECT * FROM users_t WHERE user_name='$login' AND user_password='$password'", $db) or die("Invalid query: " . mysql_error()); 
		$myrow = mysql_fetch_array ($result);
		
		$count=mysql_num_rows($result);

		if ($count==1)
		{
			
			//$_SESSION['user_password']=$myrow['user_password']; 
			$_SESSION['user_name']=$myrow['user_name'];
			$_SESSION['user_id']=$myrow['user_id'];

			//header("location: home.php");
			echo ('<script type="text/javascript"> location="php/home.php"</script>;');
		}
		else
		{
			//header("location: ../index.php");
			echo ('<script> alert("Неправильный логин или пароль")</script>;');
		}
	}
}
?>