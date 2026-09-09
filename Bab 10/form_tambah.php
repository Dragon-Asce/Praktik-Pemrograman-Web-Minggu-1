<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="max-width: 500px;">
        <h2>Tambah Matakuliah</h2>
        <form method="post" action="tambah.php">
            <table>
                <tr>
                    <td>Kode_MK</td>
                    <td><input type="text" name="Kode_MK" required></td>
                </tr>
                <tr>
                    <td>Nama_MK</td>
                    <td><input type="text" name="Nama_MK" required></td>
                </tr>
                <tr>
                    <td>SKS</td>
                    <td><input type="number" name="SKS" required></td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td><input type="number" name="Semester" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>