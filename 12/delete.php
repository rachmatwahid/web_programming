<?php 

# DELETE.PHP
# ==========
# Menghapus data dari database

# Hubungkan dengan functions.php
require 'functions.php';

# Panggil function delete()
delete($_GET['id']);

 ?>