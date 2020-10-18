<?php 

/*
	KONDISI IF
	==========
	Mengeksekusi kode di dalam {} apabila kondisi di dalam () bernilai TRUE
*/


$usia = 65;

// IF

// Nilai dari $panggilan, tergantung dari $usia
if ($usia < 20) {
	$panggilan = 'abang';
} else {
	$panggilan = 'bapak';
}

echo $panggilan;

/*
	TERNARY IF
	==========
	Bentuk lain dari IF-ELSE
*/

$warna_favorit = 'pink';

// Nilai dari variabel $gender, tergantung dari $warna_favorit
$gender = ($warna_favorit != 'pink') ? 'pria' : 'wanita';

echo $gender;

 ?>