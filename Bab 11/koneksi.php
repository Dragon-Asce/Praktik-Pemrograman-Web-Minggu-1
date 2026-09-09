<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$conn = mysqli_connect("localhost", "root", "", "KampusMajalengka");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>