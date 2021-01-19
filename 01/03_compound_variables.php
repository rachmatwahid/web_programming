<?php 

// Mendeklarasikan Array
$cars = ['avanza', 'xenia'];
$prices = [200, 210];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Car Prices</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>No.</th>
				<th>Cars</th>
				<th>Prices</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<!-- Mengakses elemen array -->
				<td><?php echo $cars[0]; ?></td>
				<td><?php echo $prices[0]; ?></td>
			</tr>
		</tbody>	
	</table>
</body>
</html>