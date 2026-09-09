<?php
include 'koneksi.php';
if (isset($_GET['id']) && isset($_SESSION['admin'])) {
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM matakuliah WHERE Kode_MK='$id'");
    header("Location: index.php?p=matakuliah");
}
?>