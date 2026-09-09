<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['admin'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    
    mysqli_query($conn, "INSERT INTO matakuliah VALUES ('$kode', '$nama', '$sks', '$semester')");
    header("Location: index.php?p=matakuliah");
}
?>