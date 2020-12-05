<?php 

# Menghubungkan ke MySQL
$connection = mysqli_connect('localhost', 'root', '', 'online_shop');

# Mempersiapkan string query
$query = "SELECT * FROM mahasiswa";

# Mengirimkan query ke MySQL
$result = mysqli_query($connection, $query);

# Mengambil data dari query
$datas = mysqli_fetch_assoc($result);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Table</h1>
	<table border="1">
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Foto</th>
		</tr>
		<tr>
			<td><?= $datas['id']; ?></td>
			<td><?= $datas['nim']; ?></td>
			<td><?= $datas['nama']; ?></td>
			<td><?= $datas['foto']; ?></td>
		</tr>
	</table>
</body>
</html>