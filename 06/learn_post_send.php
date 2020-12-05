<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>

	<!-- Mengirimkan variabel superglobal $_POST -->
	<!-- ke file learn_post_receive.php -->
	<form action="learn_post_receive.php" method="POST">
		<!-- 1 Key: username -->
		<input type="text" name="username">
		<!-- 2 Key: password -->
		<input type="password" name="password">
		<br>
		<!-- 3 Key: submit -->
		<input type="submit">
	</form>

</body>
</html>