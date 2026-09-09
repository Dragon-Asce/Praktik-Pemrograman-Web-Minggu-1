<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM matakuliah WHERE Kode_MK='$id'");
header("location:index.php");
?>