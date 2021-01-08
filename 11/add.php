<?php 

/*

	ADD.PHP
	=======
	Menjadi media pengguna untuk memasukkan data

*/

// Variabel superglobal POST, untuk menjadi query penambahan data di database

require 'functions.php';	

// Menambah data ke database
function add_data() {

	global $connection;

	// Tangkap data dari user
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$photo = upload();

	# Memeriksa ada error ketika upload
	if (!$photo) { # Jika upload gagal
		return false;
	}

	// Query menambah data
	$query = "INSERT INTO student VALUES (
		'',
		'$name',
		'$gender',
		'$photo'
	)";

	// Kirim query ke database
	mysqli_query($connection, $query);
}

// Jika tombol diklik
if (isset($_POST['submit'])) {
	// Maka tambahkan data ke database
	add_data();
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Page</title>
</head>
<body>

<form method="POST" action="" enctype="multipart/form-data">
	<ul>
		<li>
			<label>Name</label>
			<input type="text" name="name">
		</li>
		<li>
			<label>Gender</label>
			<input type="text" name="gender">
		</li>
		<li>
			<label>Photo</label>
			<input type="file" name="photo">
		</li>
		<li>
			<button type="submit" name="submit">SUBMIT</button>
		</li>
	</ul>
</form>

</body>
</html>