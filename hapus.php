<?php
include 'koneksi.php';

$nim = $_GET['nim'];

mysqli_query($koneksi, "DELETE FROM siswa WHERE nim='$nim'");

header("Location: index.php");
exit();
?>
