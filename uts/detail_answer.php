<?php 

$products = [
	1 => [
		'name' => 'Doraemon',
		'img' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1465387128l/6131590._SX318_.jpg',
		'price' => 'Rp 25.000',
		'category' => 'Manga',
		'about' => 'Doraemon dikirim kembali ke masa kehidupan Nobita oleh cicit Nobita, Sewashi. Ia dikirim untuk memperbaiki kehidupan Nobita agar keturunannya merasakan kehidupan yang lebih baik. Dalam kehidupan aslinya tanpa dibantu Doraemon, Nobita sering gagal dalam pelajaran sekolahnya, gagal dalam pekerjaan, dan mempunyai masalah keuangan.', 
		'related_product' => [
			['Detective Conan', 'https://www.detectiveconanworld.com/wiki/images/thumb/b/b1/Volume_1.jpg/275px-Volume_1.jpg', 'Rp 25.000'],
			['Bleach', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1388508611l/2880.jpg', 'Rp 25.000'],
			['Crayon Shinchan', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1343795426l/15780355.jpg', 'Rp 30.000'],
		]
	],
	2 => [
		'name' => 'Tribun Pontianak',
		'img' => 'https://ebooks.gramedia.com/ebook-covers/625/image_highres/ID_TRPNT2020MTH03DT16.jpg',
		'price' => 'Rp 2.000',
		'category' => 'Newspaper',
		'about' => 'Tribun Pontianak adalah sebuah surat kabar harian yang terbit di Kalimantan Barat, Indonesia. Surat kabar ini termasuk dalam grup Kompas Gramedia. Kantor pusatnya terletak di kota Pontianak. Koran ini pertama kali terbit tahun 2008.',
		'related_product' => [
			['Pontianak Post', 'https://image.isu.pub/121229050823-b6d9532450794ff98eccb2fdaddeb4ad/jpg/page_1.jpg', 'Rp 2.000'],
			['KOMPAS', 'https://ebooks.gramedia.com/ebook-covers/1498/image_highres/ID_KOMPAS2018MTH12DT03.jpg', 'Rp 2.500'],
			['Harian Pontianak', 'https://image.isu.pub/121229050823-b6d9532450794ff98eccb2fdaddeb4ad/jpg/page_1.jpg', 'Rp 3.000'],
		] 
	],
	3 => [
		'name' => 'Majalah Bobo',
		'img' => 'https://asset-a.grid.id/gridstore/frontend/asset/upload/brand/large/51-other-bobo-5.jpeg',
		'price' => 'Rp 47.000',
		'category' => 'Magazine',
		'about' => 'Majalah Bobo adalah bacaan populer anak-anak Indonesia yang terbit sejak 14 April 1973. Majalah ini adalah versi Indonesia dari majalah serupa di Belanda dengan penyesuaian isi. Di Indonesia, terdapat 2 versi Majalah Bobo. ',
		'related_product' => [
			['TRUBUS', 'https://ebooks.gramedia.com/ebook-covers/76/image_highres/ID_TRU2019MTH06.jpg', 'Rp 32.000'],
			['Femina', 'https://www.femina.co.id/images/images/FEMINA-36.jpg', 'Rp 40.500'],
			['Tempo', 'https://majalah.tempo.co/assets/majalah/images/25.jpg', 'Rp 55.000'],
		] 
	]
];

function get_related_products() {
	global $products;
	return $related_product = $products[$_GET['id']]['related_product'];
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Detail of <?= $products[$_GET['id']]['name']; ?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class='container'>

	<a href="home_answer.php">Back to Home</a>

	<div class="row">
		<div class="col">
			<img src="<?= $products[$_GET['id']]['img']; ?>">
		</div>
		<div class="col">
			<h1><?= $products[$_GET['id']]['name']; ?></h1>
			<p><?= $products[$_GET['id']]['category']; ?></p>
			<p class="bg-primary text-light"><?= $products[$_GET['id']]['price']; ?></p>
			<p><?= $products[$_GET['id']]['about']; ?></p>
		</div>
	</div>

	<hr>

	<div class="card-deck mx-auto" style="max-width:1280px;">
		<?php foreach (get_related_products() as $related_product): ?>
			<div class="card">
				<img src="<?= $related_product[1]; ?>" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title"><?= $related_product[0]; ?></h5>
					<p class="card-text"><?= $related_product[2]; ?></p>
				</div>
			</div>
		<?php endforeach; ?>	
	</div>
</body>
</html>