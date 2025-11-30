<?php
include "koneksi.php";

$nim     = $_POST['nim'];
$nama    = $_POST['nama'];
$jk      = $_POST['jk'];
$telepon = $_POST['telepon'];
$alamat  = $_POST['alamat'];

// ambil foto
$foto = $_FILES['foto']['name'];
$tmp  = $_FILES['foto']['tmp_name'];

$folder = "foto/" . $foto;

// upload ke folder foto
move_uploaded_file($tmp, $folder);

// simpan ke database
$query = "INSERT INTO siswa (nim, nama, jk, telepon, alamat, foto) 
          VALUES ('$nim', '$nama', '$jk', '$telepon', '$alamat', '$foto')";

mysqli_query($koneksi, $query);

header("Location: index.php");
?>
