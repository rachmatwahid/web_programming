<?php 

/*
	ARRAY
*/

// Deklarasi Array
$produk = [
	'https://img11.jd.id/Indonesia/s240x240_/nHBfsgAAbAAAABsAMiEBsgACy7Q.jpg.webp',
	'https://img20.jd.id/Indonesia/s300x300_/amZzL3QyOC8yNzMvNDMzNTg0MDQwMS85NTg0NC9hZWY2ZjY5Yy81ZjY0YzZhN05kMmVhODk5MQ.jpg',
	'https://img10.jd.id/Indonesia/s240x240_/amZzL3Q3My8yNjYvMTYxMDIyNTg0Ni8zNzIzNS9mZTBkYzNiMy81ZjM2NTk4NE5iZWE0ZjViYg.jpg.webp'
];
?>

<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Hello, world!</title>
</head>
<body class="container">
	<!--Menggunakan Array di HTML-->
	<div class="card-group">
		<div class="card">
			<img style="max-width: 256px;" src="<?php echo $produk[0]; ?>" class="card-img-top"> 
		</div>
		<div class="card">
			<img style="max-width: 256px;" src="<?php echo $produk[1]; ?>" class="card-img-top">
		</div>
		<div class="card">
			<img style="max-width: 256px;" src="<?php echo $produk[2]; ?>" class="card-img-top">
		</div>
	</div>
</body>
</html>