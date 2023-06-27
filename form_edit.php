<!DOCTYPE html>
<html>
<head>
	<title>Pendataan PIC</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Form Pendataan Karyawan MKU 2022</h2>
		<h3>Central Java</h3>
	</div>

	<br />
	<a href="index.php">< Showing Attendace</a>
	
	<h3>Edit Attendace</h3>
	<form action="proses_edit.php" method="post">
		<?php 
		include "Untitled-1.php";
		$id = $_GET['id'];
		$query = mysqli_query($host, "SELECT * FROM tabel_fme WHERE id = '$id'") or die(mysqli_error());
		$data = mysqli_fetch_array($query);
		?>		
		<table>
			<tr>
				<td>PIC Name</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="PIC_Name" value="<?php echo $data['PIC_Name'] ?>" required>
				</td>					
			</tr>	
			<tr>
				<td>Cluster</td>
				<td><input type="text" name="Cluster" value="<?php echo $data['Cluster'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Region</td>
				<td><input type="text" name="Region" value="<?php echo $data['Region'] ?>" required></td>					
			</tr>	
			<tr>
				<td>NIK</td>
				<td><input type="number" name="NIK" value="<?php echo $data['NIK'] ?>" required></td>					
			</tr>
			<tr>
				<td>NO HP</td>
				<td><input type="text" name="No_HP" value="<?php echo $data['No_HP'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Email</td>
				<td><input type="text" name="Email" value="<?php echo $data['Email'] ?>" required></td>					
			</tr>
			<tr>
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>