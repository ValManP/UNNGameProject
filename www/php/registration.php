<!DOCTYPE HTML> 
<html>
	<head>
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="stylesheet" href="style.css">
		<title>�����������</title>
	</head>
<?php 
	include "reg.php";
?>
	<body>
		<div class="wrapper">
			<div class="content">
				<form class="regform"  method="post" action="registration.php"> 
					<div class="logo" style="margin-left:35%;"><h1 style="margin-top:-75px;">�����������</h1></div>
				   <input id = "login" type="text" required placeholder="�����" class="form-control" name="login" autocomplete="off">
				   <br><br>
				   <input type="text" required placeholder="������" class="form-control" name="password" autocomplete="off" type="password">
				   <br><br>
				   <button id = "login_button" type="submit">������������������</button>	
				   <br><br>
				   <a class="ref" href="../index.php" >���������</a>
				</form>
			</div>
			<div class="footer">
				<div class="copyright">� �������� ���������, ������� ������� 2015</div>
			</div>
		</div>
	</body>
</html>