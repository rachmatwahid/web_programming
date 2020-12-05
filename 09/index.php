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
	<title></title>
</head>
<body>
<?php foreach ($datas as $data) {
	echo $data['name'];
	echo ' ';
	echo $data['gender'];
	echo ' | ';
} ?>
</body>
</html>
