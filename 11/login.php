<?php 

/*
	LOGIN.PHP
	=============
	User yang terdaftar dapat mengakses situs web
*/

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
		}
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<form action="" method="POST">
		<label for="userName">Username</label>
		<input type="text" name="userName" id="userName">
		<label for="passWord">Password</label>
		<input type="password" name="passWord" id="passWord">
		<input type="submit" name="logIn" value="Log In">
	</form>
</body>
</html>