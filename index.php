<!DOCTYPE html>
<html>
<head>
	<title>Pendataan PIC</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body {
		background-image: url('mitraku jaya.jpeg');
		background-repeat: no-repeat;
		background-size: cover;
}
	</style>
</head>
<body>
	<div class="judul">		
		<h2>Form Pendataan Karyawan MKU 2022</h2>
		<h3>Central Java</h3>
	</div>

	<br />
	<div class="sub judul">
	<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a></li>
	<a href="form_tambah.php">+ Tambah Data Baru</a>
	<h3>Employee Presence</h3>
	</div>
	<div style="overflow: auto;">
		<table align="center" border="3" class="table">
			<tr>
				<th>No.</th>
				<th>PIC Name</th>
				<th>Cluster</th>
				<th>Region</th>
				<th>NIK</th>
				<th>No. HP</th>
				<th>Email</th>
					
			</tr>
			<?php 
			session_start();
			if (!isset($_SESSION["nama"])){
				header("Locaion: login.php");
			}	
			include "Untitled-1.php";
			$query = mysqli_query($host, "SELECT * FROM tabel_fme") or die(mysqli_error());
			$nomor = 1;
			while($data = mysqli_fetch_array($query)) { ?>
				<tr>
					<td align="center"><?php echo $nomor++; ?>.</td>
					<td><?php echo $data['PIC_Name']; ?></td>
					<td><?php echo $data['Cluster']; ?></td>
					<td><?php echo $data['Region']; ?></td>
					<td><?php echo $data['NIK']; ?></td>
					<td><?php echo $data['No_HP']; ?></td>
					<td><?php echo $data['Email']; ?></td>
					<td width="90px" align="center">
						<a href="form_edit.php?id=<?php echo $data['id']; ?>">Edit</a> | 
						<a href="proses_hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin hapus data?')">Hapus</a>					
					</td>
				</tr>
			<?php
			} ?>
		</table>
	</div>
</body>
</html>