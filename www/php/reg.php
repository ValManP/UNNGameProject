<?php 
$db = mysql_connect ("bullsandcows", "root", "");
mysql_select_db("game_db", $db);

 if(! $db )
   {
      die('Could not connect: ' . mysql_error());
   }
   

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if ((!empty($_POST['login'])) && (!empty($_POST['password'])))
	{
		$login = $_POST['login'];
		$pass = $_POST['password'];
		
		$password    = md5($pass); 		
				
		$result = mysql_query ("SELECT * FROM users_t WHERE user_name='$login'", $db) or die("Invalid query: " . mysql_error());  
		$count=mysql_num_rows($result);
		//echo $result;
		//mysql_free_result($result);
		if ($count==0)
		{
      
		    $retval = mysql_query( "INSERT INTO users_t (user_name, user_password) VALUES ('$login', '$password')", $db );
		   
		    if(! $retval )
		    {
			  die('Could not enter data: ' . mysql_error());
		    }
			//header("location: home.php");
			echo ('<script type="text/javascript"> location="home.php"</script>;');
		}
		else
		{
			echo "<script>alert('User already exist!');</script>";
		}
	}
}
?>