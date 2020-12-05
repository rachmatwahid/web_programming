<?php 

/*
	FUNCTIONS.PHP
	=============
	Menyimpan logika program PHP
*/

// Menghubungkan database dengan PHP
$connection = mysqli_connect(
	'localhost',
	'root',
	'',
	'school'
);

// Mengirimkan query ke database
function send_query($query) {
	global $connection;
	$rows = [];
	$result = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

 ?>
