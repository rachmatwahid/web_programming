<?php 

/*
	INDEX.PHP
	=========
	Menampilkan tabel yang berisi data siswa
*/

# Menghubungkan index.php dengan functions.php
require 'functions.php';	


# Mempersiapkan query
$query = "SELECT * FROM student";

# Mengirimkan query
$datas = send_query($query);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Index Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="container">

	<h1>Index Page</h1>
	
	<table class="table">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Gender</th>
				<th>Photo</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($datas as $data) :?>
			<tr>
				<td><?php echo $data['name'] ?></td>
				<td><?php echo $data['gender'] ?></td>
				<td><?php echo $data['photo'] ?></td>
				<td>
					<a href="edit.php?id=<?php echo $data['id_student'] ?>">Edit</a>
					|
					<a href="delete.php?id=<?php echo $data['id_student'] ?>">Delete</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>


</body>
</html>
