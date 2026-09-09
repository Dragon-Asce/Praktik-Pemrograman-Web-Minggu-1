<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="max-width: 500px;">
        <h2>Edit Matakuliah</h2>
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE Kode_MK='$id'");
        while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="edit.php">
            <table>
                <tr>
                    <td>Kode_MK</td>
                    <td>
                        <input type="hidden" name="Kode_MK_lama" value="<?php echo $d['Kode_MK']; ?>">
                        <input type="text" name="Kode_MK" value="<?php echo $d['Kode_MK']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Nama_MK</td>
                    <td><input type="text" name="Nama_MK" value="<?php echo $d['Nama_MK']; ?>" required></td>
                </tr>
                <tr>
                    <td>SKS</td>
                    <td><input type="number" name="SKS" value="<?php echo $d['SKS']; ?>" required></td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td><input type="number" name="Semester" value="<?php echo $d['Semester']; ?>" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Update"></td>
                </tr>
            </table>
        </form>
        <?php } ?>
    </div>
</body>
</html>