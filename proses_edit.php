<?php 
include 'Untitled-1.php';

$id = $_POST['id'];
$PIC_Name = $_POST['PIC_Name'];
$Cluster = $_POST['Cluster'];
$Region = $_POST['Region'];
$NIK = $_POST['NIK'];
$No_HP = $_POST['No_HP'];
$Email = $_POST['Email'];

$query = mysqli_query($host, "UPDATE tabel_fme SET PIC_Name='$PIC_Name', Cluster='$Cluster', Region='$Region', NIK='$NIK', No_HP='$No_HP', Email='$Email' WHERE id='$id'") or die(mysqli_error());

if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}
?>