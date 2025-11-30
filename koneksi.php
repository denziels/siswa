<?php
$koneksi = mysqli_connect("localhost", "root", "root", "db_siswa");

if (!$koneksi) {
    echo "Koneksi gagal: " . mysqli_connect_error();
}
?>
