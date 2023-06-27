<?php 
include 'Untitled-1.php';
$id = $_GET['id'];
$query = mysqli_query($host, "DELETE FROM tabel_fme WHERE id = '$id'") or die(mysqli_error());
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='index.php';</script>";
}
?>