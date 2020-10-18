<?php 

//IF ELSE IF
$warna = 'merah';
if ($warna == 'merah') {
	echo 'saya beli 2';
} else if ($warna == 'hitam') {
	echo "saya beli 3";
} else if ($warna == 'putih') {
	echo "saya beli 1";
}
 else {
	echo 'saya dak jadi beli';
}

// SWITCH
switch ($warna) {

	case 'putih':
		echo 'saya beli 1';
		break;

	case 'merah':
		echo 'saya beli 2';
		break;

	case 'hitam':
		echo 'saya beli 3';
		break;
	
	default:
		echo 'saya dak jadi beli';
		break;
}
 ?>