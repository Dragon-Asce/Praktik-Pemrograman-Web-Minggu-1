<?php
include 'koneksi.php';

$Kode_MK = $_POST['Kode_MK'];
$Nama_MK = $_POST['Nama_MK'];
$SKS = $_POST['SKS'];
$Semester = $_POST['Semester'];

mysqli_query($koneksi, "INSERT INTO matakuliah VALUES('$Kode_MK','$Nama_MK','$SKS','$Semester')");
header("location:index.php");
?>