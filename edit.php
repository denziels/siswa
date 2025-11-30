<?php
include 'koneksi.php';

$nim = $_GET['nim'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nim='$nim'");
$row = mysqli_fetch_assoc($data);
?>

<h2>Edit Data Siswa</h2>

<form action="update.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="nim" value="<?php echo $row['nim']; ?>">

    Nama:<br>
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br><br>

    Jenis Kelamin:<br>
    <select name="jk">
        <option value="L" <?php if ($row['jk']=='L') echo 'selected'; ?>>Laki-laki</option>
        <option value="P" <?php if ($row['jk']=='P') echo 'selected'; ?>>Perempuan</option>
    </select><br><br>

    Telepon:<br>
    <input type="text" name="telepon" value="<?php echo $row['telepon']; ?>"><br><br>

    Alamat:<br>
    <textarea name="alamat"><?php echo $row['alamat']; ?></textarea><br><br>

    Foto Baru (opsional):<br>
    <input type="file" name="foto"><br><br>

    <button type="submit">Update</button>
</form>
