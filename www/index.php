<!DOCTYPE HTML> 
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<?php
 
	include "log_in.php";
	if (isset($_SESSION['id']) == FALSE) echo "���� ���";
?>

<body background="source/fon.png"> 
<form class="regform" method="post" action="log_in.php"> 
	<img src="Image URL" alt="Logo"/>
	<h2>���� � ������</h2>
   <input id = "login" type="text" required placeholder="�����" class="form-control" name="login">
   <br><br>
   <input type="text" required placeholder="������" class="form-control" name="password">
   <br><br>
   <p class="submit"><button type="submit">�����</button></p>		
   <br>
   <a id="s1" href="registration.php" target="_self" >�����������</a>
</form>


</body>
</html>