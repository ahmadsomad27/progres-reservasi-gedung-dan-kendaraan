<?php
@session_start();
session_destroy();

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	    <form method = "post" action = "ceklogin.php">
	<title>Login</title>
	<link rel = "stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class = "login-box">
		<img src = "img/polinema.png" class="avatar">
			<h1> LOGIN </h1>
			<form>
				<p> Username</p>
				<input type="text" name="nama" placeholder="Masukkan Username">
				<p> Password</p>
				<input type="Password" name="password" placeholder="Masukkan Password"><br><br>
				<input type="submit" name="submit" value="login">
				<center>Belum punya akun? <a href="daftar.php">Daftar</a></center>
			</form>


	</div>

</body>
</html>