<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM siswa");
?>

<table border="1" cellpadding="8">
    <tr>
        <th>Foto</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>JK</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Edit</th>
        <th>Hapus</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($data)) : ?>
    <tr>
        <td><img src="foto/<?php echo $row['foto']; ?>" width="120"></td>
        <td><?php echo $row['nim']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['jk']; ?></td>
        <td><?php echo $row['telepon']; ?></td>
        <td><?php echo $row['alamat']; ?></td>

        <td>
            <a href="edit.php?nim=<?php echo $row['nim']; ?>">Edit</a>
        </td>

        <td>
            <a href="hapus.php?nim=<?php echo $row['nim']; ?>" 
               onclick="return confirm('Yakin ingin menghapus data ini?')">
               Hapus
            </a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
