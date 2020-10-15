<?php 

$status = true;

// IF

if ($status == true) {
	$teks = 'true';
} else {
	$teks = 'false';
}
echo $teks;

// TERNARY IF

$status2 = ($status == false) ? 'true' : 'false';
echo $status2;

 ?>