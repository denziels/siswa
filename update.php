<?php
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

// cek apakah upload foto
if ($_FILES['foto']['name'] != "") {
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    move_uploaded_file($tmp, "foto/" . $foto);

    // Update dengan foto
    mysqli_query($koneksi, "UPDATE siswa SET 
        nama='$nama',
        jk='$jk',
        telepon='$telepon',
        alamat='$alamat',
        foto='$foto'
        WHERE nim='$nim'");
} else {
    // Update tanpa foto
    mysqli_query($koneksi, "UPDATE siswa SET 
        nama='$nama',
        jk='$jk',
        telepon='$telepon',
        alamat='$alamat'
        WHERE nim='$nim'");
}

header("Location: index.php");
exit();
?>
