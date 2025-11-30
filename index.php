<?php
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

<h2>Data Siswa</h2>
<a href="tambah.php">Tambah Data</a>
<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Foto</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($data)) : ?>
    <tr>
        <td><img src="foto/pasfotoNEW.jpg" width="150"></td>
        <td><?php echo $row['nim']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['jk']; ?></td>
        <td><?php echo $row['telepon']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $row['id']; ?>">Ubah</a> |
            <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>

</table>

</body>
</html>
