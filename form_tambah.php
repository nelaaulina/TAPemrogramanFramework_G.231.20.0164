<!DOCTYPE html>
<html>
<head>
	<title>Absensi Karyawan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="mitraku.png" type="image/png" >
</head>
<body>
	<div class="judul">		
		<h2>Form Absensi Karyawan MKU</h2>
		<h3>Central Java</h3>
	</div>
	<br />
	<a href="index.php">< Attendace</a>
	<h3>Creat New Attendace</h3>
	<form action="proses_tambah.php" method="post">		
		<table>
			<tr>
				<td>PIC Name</td>
				<td><input type="text" name="PIC_Name" required></td>					
			</tr>	
			<tr>
				<td>Cluster</td>
				<td><input type="text" name="Cluster" required></td>					
			</tr>	
			<tr>
				<td>Region</td>
				<td><input type="text" name="Region" required></td>					
			</tr>	
			<tr>
				<td>NIK</td>
				<td><input type="number" name="NIK" required></td>					
			</tr>
			<tr>
				<td>No. HP</td>
				<td><input type="text" name="No_HP" required></td>					
			</tr>	
			<tr>
				<td>Email</td>
				<td><input type="text" name="Email" required></td>					
			</tr>
			<tr>
			
				<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>