<?php 

// Apakah variabel i nilainya 0 atau 1?
// Jika nilainya 0, tampilkan i == 0
// Jika nilainya 1, tampilkan i == 1
// Jika nilainya bukan nol ataupun 1, tampilkan i bukan nol dan 1

$i = 1;
// IF
if ($i == 0) {
	echo 'i sama dengan nol';
} else if ($i == 1) {
	echo 'i sama dengan satu';
} else {
	echo 'i bukan nol ataupun satu';
}

// SWITCH
$i = 0;
switch ($i) {
	case '0':
		echo 'i sama dengan nol';
		break;

	case '1':
		echo 'i sama dengan satu';
		break;	
	
	default:
		echo 'i bukan nol ataupun satu';
		break;
}


 ?>