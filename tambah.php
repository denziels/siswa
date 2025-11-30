<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
</head>
<body>
<h2>Tambah Data Siswa</h2>

<form action="simpan.php" method="POST" enctype="multipart/form-data">
    NIM <br>
    <input type="text" name="nim"><br><br>

    Nama <br>
    <input type="text" name="nama"><br><br>

    Jenis Kelamin <br>
    <input type="radio" name="jk" value="Laki-laki"> Laki-laki
    <input type="radio" name="jk" value="Perempuan"> Perempuan
    <br><br>

    Telepon <br>
    <input type="text" name="telepon"><br><br>

    Alamat <br>
    <textarea name="alamat"></textarea><br><br>

    Foto <br>
    <input type="file" name="foto"><br><br>

    <button type="submit">Simpan</button>
    <a href="index.php">Batal</a>
</form>

</body>
</html>
