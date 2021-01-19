<?php 

$text = 'Hello World!';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Standard Output</title>
</head>
<body>
	<!-- Menampilkan output menggunakan function echo, print, dan var_dump -->
	<p><?php echo $text; ?></p>
	<p><?php print($text); ?></p>
 	<p><?php var_dump($text); ?></p>
</body>
</html>