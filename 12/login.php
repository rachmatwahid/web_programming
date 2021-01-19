<?php 

/*
	LOGIN.PHP
	=============
	User yang terdaftar dapat mengakses situs web
*/

session_start();


// Jika user sudah login
if (isset($_SESSION['login'])) {
	// Kita tampilkan tulisan, Anda sudah login!
	echo "Anda sudah login";
	echo "<a href='index.php'>Kembali ke Index</a>";
}

// Hubungkan dengan functions.php
require 'functions.php';

if (isset($_POST['logIn'])) { // Cek apakah tombol log in diklik

	global $connection;

	// Menangkap data dari form
	$username = $_POST['userName'];
	$password =  $_POST['passWord'];

	// Cari data login user di database
	$result = mysqli_query($connection, "
		SELECT *
		FROM users
		WHERE username = '$username'
		");

	// Tangkap data user dari database
	$row = mysqli_fetch_assoc($result);

	if ($username == $row['username']) { // Jika username cocok dengan di database
		if (password_verify($password, $row['password'])) { // Periksa kesamaan password
			echo "
			<script>
				alert('You are logged in!');
			</script>
		";

			// Jika user mencentang Remember Me
			if (isset($_POST['remember'])) {
				// Simpan username dan passwordnya
				setcookie('username', $row['username'], time() + 60);
				setcookie('password', $password, time() + 60);
			}

			$_SESSION['login'] = true;
			header('Location: index.php');
		}
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="container">
	<h1>Login</h1>
	<form action="" method="POST">
		<label for="userName">Username</label>
		<input type="text" name="userName" id="userName" value="ABC">
		<label for="passWord">Password</label>
		<input type="password" name="passWord" id="passWord">
		<input type="submit" name="logIn" value="Log In">

		<input type="checkbox" name="remember" id="remember">
		<label id="remember">Remember Me</label>
	</form>
</body>
</html>