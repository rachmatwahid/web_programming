<?php 

/*
	REGISTRATION.PHP
	=======
	User melakukan pendaftaran/registrasi sebagai pelanggan
*/

// Hubungkan dengan function.php
require 'functions.php';

if (isset($_POST['register'])) { // Cek apakah tombol register diklik
	if (register($_POST) > 0) { // Lakukan registrasi data user
		echo "
			<script>
				alert('You are registered!');
				document.location.href('registration.php');
			</script>
		";
	} else {
		echo "
			<script>
				alert('Registration failed!');
				document.location.href('registration.php');
			</script>
		";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<h1>Registration</h1>
	<form action="" method="POST">
		<label for="userName">Username</label>
		<input type="text" name="userName" id="userName">
		<label for="passWord">Password</label>
		<input type="password" name="passWord" id="passWord">
		<label for="confirmationPassWord">Confirmation Password</label>
		<input type="password" name="confirmationPassWord" id="confirmationPassWord">
		<input type="submit" name="register" value="Register">
	</form>
</body>
</html>