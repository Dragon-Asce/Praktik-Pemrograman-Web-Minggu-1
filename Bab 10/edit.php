<?php
include 'koneksi.php';

$Kode_MK_lama = $_POST['Kode_MK_lama'];
$Kode_MK = $_POST['Kode_MK'];
$Nama_MK = $_POST['Nama_MK'];
$SKS = $_POST['SKS'];
$Semester = $_POST['Semester'];

mysqli_query($koneksi, "UPDATE matakuliah SET Kode_MK='$Kode_MK', Nama_MK='$Nama_MK', SKS='$SKS', Semester='$Semester' WHERE Kode_MK='$Kode_MK_lama'");
header("location:index.php");
?>