<?php include 'functions.php';?>
<!DOCTYPE html>
<meta charset="UTF-8" />
	<head>
		<link type="text/css" href="index.css" rel="stylesheet">
		<title></title>
	</head>
	<h1>Boka grupprum KTH Kista</h1>	
	
	<body>
		<?php echo H();?>
		<table>
			<tr>
				<th>Rum</th>
				<th>08.00-10.00</th>
				<th>10.00-12.00</th>
				<th>12.00-13.00</th>
				<th>13.00-15.00</th>
				<th>15.00-18.00</th>
				<th>18.00-21.00</th>
			</tr>
			<tr>	
				<td>Rum 1</br>platser:</td>
				<td class="expired"></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				
				<td>Rum 2</br>platser:</td>
				<td class="free"></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Rum 3</br>platser:</td>
				<td class="booked"></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Rum 4</br>platser:</td>
				<td class="confirm"></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
	</table>
	</body>
</html>