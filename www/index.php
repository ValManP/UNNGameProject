<?php
	include "php/log_in.php";
?>
<!DOCTYPE HTML> 
<html>
	<head>
		<link rel="stylesheet" href="php/style.css">
		<link rel="stylesheet" href="php/stylesheet.css">
		<title>���� � ������</title>
	</head>

	<body> 
		<div class="wrapper">
			<div class="content">
				<form class="regform" method="post" action="index.php">
					<div class="logo" style="margin-left:35%;"><h1 style="margin-top:-75px;">���� � ������</h1></div>
					<input id = "login" type="text" required placeholder="�����" class="form-control" name="login" autocomplete="off">
					<br><br>
					<input type="password" required placeholder="������" class="form-control" name="password" autocomplete="off" type="password">
					<br><br>
					<button id = "login_button" type="submit">�����</button>	
					<br><br>
					<a class="ref" href="php/registration.php" >�����������</a>
				</form>
			</div>
			<div class="footer">
				<div class="copyright">� �������� ���������, ������� ������� 2015</div>
			</div>
		</div>
	</body>
</html>