<?php

/*
	IF
	=========================================
	Eksekusi dilakukan jika kondisi terpenuhi
*/


$category = 'magazine';
if ($category == 'magazine') {
	echo 50000;
}


/*
	IF-ELSE
	================================================
	Jika semua kondisi tidak dipenuhi, eksekusi ELSE 
*/

$number = 0;
if ($number == 1) {
	echo 'One';
} else {
	echo 'Not One';
}


/*
	IF-ELSEIF
	==========================================
	Beberapa kondisi untuk menentukan eksekusi
*/


$color = 'red';
if ($color == 'red') {
	echo 'Fire';
} elseif ($color == 'green') {
	echo 'Tree';
} elseif ($color == 'blue') {
	echo 'Sea';
} else {
	echo 'It is a wrong color';
}
?>