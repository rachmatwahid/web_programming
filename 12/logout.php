<?php 

session_start();

// Menghapus SESSION
session_destroy();

// Tampilkan halaman login
header('Location: login.php');

exit;

 ?>