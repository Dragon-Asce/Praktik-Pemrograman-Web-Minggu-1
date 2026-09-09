<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penjualan Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="form-container">
        <div class="header">
            <h1>FORM PENJUALAN BARANG</h1>
        </div>
        <div class="body-form">
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Kode Barang</td>
                        <td><input type="text" name="kodeBarang" value="<?= isset($_POST['kodeBarang']) ? htmlspecialchars($_POST['kodeBarang']) : '' ?>" required></td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td><input type="text" name="namaBarang" class="input-panjang" value="<?= isset($_POST['namaBarang']) ? htmlspecialchars($_POST['namaBarang']) : '' ?>" required></td>
                    </tr>
                    <tr>
                        <td>Harga Barang</td>
                        <td><input type="text" name="hargaBarang" value="<?= isset($_POST['hargaBarang']) ? htmlspecialchars($_POST['hargaBarang']) : '' ?>" required></td>
                    </tr>
                    <tr>
                        <td>Jumlah Barang</td>
                        <td class="radio-group">
                            <?php 
                                $jml = isset($_POST['jumlahBarang']) ? $_POST['jumlahBarang'] : '';
                            ?>
                            <input type="radio" name="jumlahBarang" value="10" <?= ($jml == '10') ? 'checked' : '' ?> required> 10
                            <input type="radio" name="jumlahBarang" value="20" <?= ($jml == '20') ? 'checked' : '' ?>> 20
                            <input type="radio" name="jumlahBarang" value="30" <?= ($jml == '30') ? 'checked' : '' ?>> 30
                            <input type="radio" name="jumlahBarang" value="40" <?= ($jml == '40') ? 'checked' : '' ?>> 40
                        </td>
                    </tr>
                    <tr>
                        <td>Metode Bayar</td>
                        <td>
                            <select name="metodeBayar" required>
                                <?php $metode = isset($_POST['metodeBayar']) ? $_POST['metodeBayar'] : ''; ?>
                                <option value="Cash" <?= ($metode == 'Cash') ? 'selected' : '' ?>>Cash</option>
                                <option value="Kredit" <?= ($metode == 'Kredit') ? 'selected' : '' ?>>Kredit</option>
                            </select>
                            <button type="submit" name="proses">Proses</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <?php if (isset($_POST['proses'])): ?>
    <div class="hasil-container">
        <h3>Hasil Input:</h3>
        <p><strong>Kode Barang:</strong> <?= htmlspecialchars($_POST['kodeBarang']); ?></p>
        <p><strong>Nama Barang:</strong> <?= htmlspecialchars($_POST['namaBarang']); ?></p>
        <p><strong>Harga Barang:</strong> <?= htmlspecialchars($_POST['hargaBarang']); ?></p>
        <p><strong>Jumlah Barang:</strong> <?= htmlspecialchars($_POST['jumlahBarang']); ?></p>
        <p><strong>Metode Bayar:</strong> <?= htmlspecialchars($_POST['metodeBayar']); ?></p>
    </div>
    <?php endif; ?>

</body>
</html>