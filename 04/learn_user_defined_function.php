<?php 

/*
	USER DEFINED FUNCTION
	=====================
	Function yang dibuat sendiri oleh programmer

	Langkah:
	1. Deklarasi function
	2. Panggil function
*/


// DEKLARASI FUNCTION
function hello() {
	echo "Hello!";
}

// PANGGIL FUNCTION
hello();

/*
	FUNCTION WITH ARGUMENTS
*/

function add_one($number) {
	echo $number + 1;
}
add_one(3);

function addition($first_number, $second_number) {
	echo $first_number + $second_number;
}
addition(2,3);


/*
	FUNCTION WITH DEFAULT ARGUMENTS
*/

function substract($first_number = 0, $second_number = 0) {
	echo $first_number - $second_number;
}
substract(9,3);


/*
	FUNCTION WITH RETURNING VALUE
*/

function square($number) {
	return $number ** 2; 
}
echo square(3);

/*
	GLOBAL VARIABLE
*/

$PHI = 3.14;

function area_of_circle($radius) {
	global $PHI;
	return $PHI * square($radius);
}
echo area_of_circle(7);



 ?>