<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['admin'])) {
    $kode_lama = $_POST['kode_lama'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    
    mysqli_query($conn, "UPDATE matakuliah SET Kode_MK='$kode', Nama_MK='$nama', SKS='$sks', Semester='$semester' WHERE Kode_MK='$kode_lama'");
    header("Location: index.php?p=matakuliah");
}
?>