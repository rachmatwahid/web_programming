<?php 

/*
	EDIT.PHP
	========
	Mengubah data dari database
*/

# Hubungkan dengan functions.php
require 'functions.php';

$id = $_GET['id'];

# Mempersiapkan query ambil 1 data dari database yang idnya tertentu
$query = "
	SELECT *
	FROM student
	WHERE id = '$id'
";

# Mengambil data dari database
$data = send_query($query);

# Jika pengguna mengklik tombol submit, maka data diubah
if (isset($_POST['submit'])) {
 	# Ubah data dari database
 	edit($_POST, $_FILES);
 	header('Location: index.php');
 } 

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="container">
	<h1>Edit</h1>

<form method="POST" action="" enctype="multipart/form-data">
	<ul>
		<input type="hidden" name="id" value="<?= $data[0]['id']; ?>">
		<li>
			<label>Name</label>
			<input type="text" name="name" value="<?= $data[0]['name']; ?>">
		</li>
		<li>
			<label>Gender</label>
			<input type="text" name="gender" value="<?= $data[0]['gender']; ?>">
		</li>
		<li>
			<label>Photo</label>
			<img src="img/<?= $data[0]['photo']; ?>" style="width: 50px;">
			<input type="file" name="photo">
			<input type="hidden" name="old_photo" value="<?= $data[0]['photo']; ?>">
		</li>
		<li>
			<button type="submit" name="submit">SUBMIT</button>
		</li>
	</ul>
</form>

</body>
</html>