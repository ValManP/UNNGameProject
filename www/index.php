<?php
	include "php/log_in.php";
?>
<!DOCTYPE HTML> 
<html>
<head>
<link rel="stylesheet" href="php/style.css">
<style>
  body { 
	background: url(source/background.jpg) no-repeat;
	background-size: 100%;	
	}
</style>
<title>���� � ������</title>
</head>


<body> 
<form class="regform" method="post" action="index.php"> 
	<img src="Image URL" alt="Logo"/>
	<h2>���� � ������</h2>
   <input id = "login" type="text" required placeholder="�����" class="form-control" name="login" autocomplete="off">
   <br><br>
   <input type="password" required placeholder="������" class="form-control" name="password" autocomplete="off" type="password">
   <br><br>
   <button id = "login_button" type="submit">�����</button>	
   <br><br>
   <a id="ref" href="php/registration.php" >�����������</a>
</form>


</body>
</html>