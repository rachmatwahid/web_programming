<?php 

/*
MULTI DIMENSIONAL ARRAY
*/

// Deklarasi Multidimensional Array

$produk = [
	'setrika' => [
		'img_url' => 'https://img20.jd.id/Indonesia/s240x240_/nHBfsgAA4wAAABMAADijtwABc1U.jpg.webp',
		'nama_produk' => 'Setrika',
		'harga' => '200.000'
	],
	'blender' => [
		'img_url' => 'https://img14.jd.id/Indonesia/s240x240_/amZzL3Q4Mi8xNTUvOTY1OTc4NzM3LzU5ODE2LzQzZDczNzJhLzVlZDkzN2UxTjg1YmM4ODQy.jpg.webp',
		'nama_produk' => 'Blender',
		'harga' => '300.000'
	],
	'air_fryer' => [
		'img_url' => 'https://img13.jd.id/Indonesia/s240x240_/amZzL3Q1OC81Mi8yMjc5ODUxMTgyLzI2OTQwMy8yZjE1ZjdkZi81Zjk2OGIwOE44NTAxMWM1Zg.jpg.webp',
		'nama_produk' => 'Air Fryer',
		'harga' => '500.000'
	]
];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Gallery Produk</title>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 </head>
 <body class="container">
 
<div class="card-group">
  <div class="card">
    <img src="<?php echo $produk['setrika']['img_url']; ?>" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title"><?php echo $produk['setrika']['nama_produk']; ?></h5>
      <p class="card-text"><small class="text-muted"><?php echo $produk['setrika']['harga']; ?></small></p>
    </div>
  </div>
  <div class="card">
    <img src="<?php echo $produk['blender']['img_url']; ?>" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title"><?php echo $produk['blender']['nama_produk']; ?></h5>
      <p class="card-text"><small class="text-muted"><?php echo $produk['blender']['harga']; ?></small></p>
    </div>
  </div>
  <div class="card">
    <img src="<?php echo $produk['air_fryer']['img_url']; ?>" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title"><?php echo $produk['air_fryer']['nama_produk']; ?></h5>
      <p class="card-text"><small class="text-muted"><?php echo $produk['air_fryer']['harga']; ?></small></p>
    </div>
  </div>
</div>

 </body>
 </html>