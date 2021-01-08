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
// Butuh query 
function send_query($query) {
	global $connection;
	$rows = [];
	$result = mysqli_query($connection, $query);
	// Agar datanya menjadi associative array
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

# Menghapus data dari database
function delete($id) {
	# Hubungkan dengan database
	global $connection;

	# Siapkan query hapus data
	$query = "
		DELETE FROM `student`
		WHERE `student`.`id_student` = '$id'
	";

	# Kirim query ke database
	mysqli_query($connection, $query);
}

function edit($data, $file) {
	# Hubungkan dengan database
	global $connection;

	# Menangkap data dari pengguna
	$id = $data['id_student'];
	$name = $data['name'];
	$gender = $data['gender'];

	# Menangkap data foto lama
	$old_photo = $data['old_photo'];
	# Menangkap data foto baru
	$new_photo = $file['photo'];

	if ($new_photo['error'] == 4) {
		$new_photo = $old_photo;
	} else {
		$new_photo = upload();
	}

	# Siapkan query untuk mengubah data dari database
	$query = "
		UPDATE student 
		SET 
			name = '$name',
			gender = '$gender',
			photo = '$new_photo' 
		WHERE id_student = '$id'
	";
	# Mengirimkan query ke database
	mysqli_query($connection, $query);
}
/**
* Mengupload file
*/
function upload() {
	# Menangkap data file yang diupload dari <form>
	$name = $_FILES['photo']['name'];
	$tmp_name = $_FILES['photo']['tmp_name'];
	$error = $_FILES['photo']['error'];
	$size = $_FILES['photo']['size'];
	$type = $_FILES['photo']['type'];

	# Memeriksa error di dalam file
	if ($error == 4) {
		echo "
			<script>
				alert('pilih gambar!');
			</script>
		";
		# Membatalkan upload
		return false;
	}

	# Memeriksa ekstensi file jpeg
	if (!($type == "image/jpeg")) { # Jika bukan file jpeg
		echo "
			<script>
				alert('pilih ekstensi jpeg!');
			</script>
		";
		# Membatalkan upload
		return false;
	}

	# Memeriksa ukuran file
	if ($size >= 1000000) { # Jika filesize >= 1MB
		echo "
			<script>
				alert('pilih gambar yang ukurannya kecil!');
			</script>
		";
		# Membatalkan upload
		return false;
	}

	# Memulai pengiriman file ke server
	move_uploaded_file($tmp_name, 'img/' . $name);
	return $name;
}

/*
* Mendaftarkan user
*/
function register($data) {

	global $connection;

	// Menerima data user saat mendaftar
	$username = $data['userName'];
	$password = $data['passWord'];
	$confirmation_password = $data['confirmationPassWord'];

	// Hilangkan strip slash di username
	$username = stripslashes($username);
	
	// Jadikan username lowercase/huruf kecil semua
	$username= strtolower($username);

	// Hilangkan real escape string
	$password = mysqli_real_escape_string($connection, $password);
	$confirmation_password = mysqli_real_escape_string($connection, $confirmation_password);

	// Cek apakah user typo memasukkan password
	if ($password != $confirmation_password) {
		echo "
			<script>
				alert('Password tidak sama!');
				document.location.href('registration.php');
			</script>
		";
		return false;
	}

	// Cek apakah username sudah ada kembaran di database
	$result = mysqli_query($connection, "
		SELECT *
		FROM users
		WHERE username = '$username'
		");
	
	if (mysqli_fetch_assoc($result)) { // Jika username sudah ada, beritahu user
		echo "
			<script>
				alert('Username sudah ada!');
				document.location.href('registration.php');
			</script>
		";
		return false;
	}

	// Enkripsi password agar lebih secure/aman
	$password = password_hash($password, PASSWORD_DEFAULT);

	// Simpan data user ke database
	mysqli_query($connection, "
		INSERT INTO users
		VALUES (
			'',
			'$username',
			'$password'
		)
		");
	return mysqli_affected_rows($connection);
}

 ?>
