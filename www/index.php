<?php
	include "php/log_in.php";
?>
<!DOCTYPE HTML> 
<html>
<head>
<link rel="stylesheet" href="php/style.css">
</head>


<body background="source/fon.png"> 
<form class="regform" method="post" action="index.php"> 
	<img src="Image URL" alt="Logo"/>
	<h2>���� � ������</h2>
   <input id = "login" type="text" required placeholder="�����" class="form-control" name="login" autocomplete="off">
   <br><br>
   <input type="password" required placeholder="������" class="form-control" name="password" autocomplete="off">
   <br><br>
   <p class="submit"><button type="submit">�����</button></p>		
   <br>
   <a id="s1" href="php/registration.php" target="_self" >�����������</a>
</form>


</body>
</html>