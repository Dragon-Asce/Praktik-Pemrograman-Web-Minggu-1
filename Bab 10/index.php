<!DOCTYPE html>
<html>
<head>
    <title>Data Matakuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Tabel 10.1: Tabel Matakuliah</h2>
        <a href="form_tambah.php" class="btn-tambah">+ Tambah Data</a>
        <table>
            <tr>
                <th>Kode_MK</th>
                <th>Nama_MK</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "SELECT * FROM matakuliah");
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['Kode_MK']; ?></td>
                <td><?php echo $d['Nama_MK']; ?></td>
                <td><?php echo $d['SKS']; ?></td>
                <td><?php echo $d['Semester']; ?></td>
                <td>
                    <a href="form_edit.php?id=<?php echo $d['Kode_MK']; ?>" class="btn-edit">Edit</a>
                    <a href="hapus.php?id=<?php echo $d['Kode_MK']; ?>" class="btn-delete" onclick="return confirm('Yakin hapus data?')">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>