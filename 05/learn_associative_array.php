<?php 
/*
ASSOCIATIVE ARRAY
*/

// Deklarasi Associative Array
$shampo = [
	'nama_barang' => 'Shampoo',
	'harga' => 'Rp. 30,000',
	'deskripsi' => 'Shampo ini baik untuk mata',
	'url_gambar' => 'https://img20.jd.id/Indonesia/s404x404_/amZzL3Q0MC83Ni80MTEzOTYzMTg5LzExMTQwNS83NzlhMTljYy81ZjY0ZDJiME4yN2Q3YWZjNQ.jpg.webp'
];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Shampoo</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
 </head>
 <body class="container px-4">

 	<img src="<?php echo $shampo['url_gambar']; ?>" class="img-thumbnail">
 	<h5 class="display-4"><?php echo $shampo['nama_barang']; ?></h5>
 	<p class="lead"><?php echo $shampo['deskripsi']; ?></p>
 	<div class="alert alert-primary" role="alert"><?php echo $shampo['harga']; ?></div>

 </body>
 </html>