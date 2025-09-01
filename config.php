<?php
$host = "localhost";
$user = "root";
$pass = "interist110";
$db   = "db_siswa";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
