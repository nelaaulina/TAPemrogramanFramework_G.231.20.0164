<?php 
include 'Untitled-1.php';

$PIC_Name = $_POST['PIC_Name'];
$Cluster = $_POST['Cluster'];
$Region = $_POST['Region'];
$NIK = $_POST['NIK'];
$No_HP = $_POST['No_HP'];
$Email = $_POST['Email'];

$query = mysqli_query($host, "INSERT INTO tabel_fme (PIC_Name, Cluster, Region, NIK, No_HP, Email) VALUES ('$PIC_Name', '$Cluster', '$Region', '$NIK', '$No_HP', '$Email')") or die(mysql_error());

if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
?>