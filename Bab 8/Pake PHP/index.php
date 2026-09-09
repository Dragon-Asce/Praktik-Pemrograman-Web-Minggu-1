<?php
$dbBarang = [
    "A001" => ["nama" => "Mouse", "harga" => 5000000],
    "A002" => ["nama" => "Headphone", "harga" => 750000],
    "A003" => ["nama" => "CPU", "harga" => 2300000]
];

$kode = $nama = $harga = $jumlah = $total_harga = $diskon = $total_bayar = "";
$metode = "Cash"; 
$alert = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode = strtoupper(trim($_POST['kode'] ?? ''));
    $jumlah = $_POST['jumlah'] ?? '';
    $metode = $_POST['metode'] ?? 'Cash';
    $action = $_POST['action'] ?? '';

    if ($action == "Cari" || $action == "Proses") {
        if (array_key_exists($kode, $dbBarang)) {
            $nama = $dbBarang[$kode]['nama'];
            $harga = $dbBarang[$kode]['harga'];
        } else {
            $alert = "Kode Barang tidak ditemukan!";
            $nama = "";
            $harga = "";
        }
    }

    if ($action == "Proses" && $harga !== "" && $jumlah !== "") {
        $harga_val = (float)$harga;
        $jumlah_val = (int)$jumlah;

        $total_harga_val = $harga_val * $jumlah_val;

        $diskon_val = 0;
        if ($metode == "Cash" || $jumlah_val > 5) {
            $diskon_val = 0.12 * $harga_val;
        } elseif ($metode == "Kredit" && $jumlah_val > 20) {
            $diskon_val = 0.05 * $total_harga_val;
        }

        $total_bayar_val = $total_harga_val - $diskon_val;

        $total_harga = round($total_harga_val);
        $diskon = round($diskon_val);
        $total_bayar = round($total_bayar_val);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penjualan Barang - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="header">FORM PENJUALAN BARANG</div>
        
        <?php if($alert): ?>
            <script>alert("<?php echo $alert; ?>");</script>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label>Kode Barang</label>
                <input type="text" name="kode" style="width: 120px;" value="<?php echo htmlspecialchars($kode); ?>" required>
                <button type="submit" name="action" value="Cari" class="btn">Cari</button>
            </div>
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" style="width: 250px;" value="<?php echo htmlspecialchars($nama); ?>" readonly>
            </div>
            <div class="form-group">
                <label>Harga Barang</label>
                <input type="text" style="width: 150px;" value="<?php echo htmlspecialchars($harga); ?>" readonly>
            </div>
            <div class="form-group">
                <label>Jumlah Barang</label>
                <input type="number" name="jumlah" style="width: 80px;" min="1" value="<?php echo htmlspecialchars($jumlah); ?>">
            </div>
            <div class="form-group">
                <label>Metode Bayar</label>
                <select name="metode" style="width: 100px;">
                    <option value="Cash" <?php if($metode == "Cash") echo "selected"; ?>>Cash</option>
                    <option value="Kredit" <?php if($metode == "Kredit") echo "selected"; ?>>Kredit</option>
                </select>
                <button type="submit" name="action" value="Proses" class="btn">Proses</button>
            </div>
            <div class="form-group">
                <label>Total Harga</label>
                <input type="text" style="width: 250px;" value="<?php echo htmlspecialchars($total_harga); ?>" readonly>
            </div>
            <div class="form-group">
                <label>Diskon</label>
                <input type="text" style="width: 250px;" value="<?php echo htmlspecialchars($diskon); ?>" readonly>
            </div>
            <div class="form-group">
                <label>Total Bayar</label>
                <input type="text" style="width: 250px;" value="<?php echo htmlspecialchars($total_bayar); ?>" readonly>
            </div>
        </form>
        
        <button type="button" class="btn btn-cetak" onclick="window.print()">Cetak</button>
    </div>

</body>
</html>