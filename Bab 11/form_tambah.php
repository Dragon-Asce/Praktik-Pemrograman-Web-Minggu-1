<?php 
include 'koneksi.php'; 
if(!isset($_SESSION['admin'])) { header("Location: index.php"); exit; }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Matakuliah</title>
    <style>
        :root { --primary: #4e73df; --bg: #f8f9fc; --text: #5a5c69; --white: #ffffff; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: var(--bg); color: var(--text); display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: var(--white); width: 100%; max-width: 450px; padding: 35px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-top: 4px solid #1cc88a; }
        h2 { margin-top: 0; color: #3a3b45; text-align: center; margin-bottom: 25px; font-size: 1.5rem; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 6px; font-weight: 500; font-size: 0.9rem; }
        input { width: 100%; padding: 10px 12px; border: 1px solid #d1d3e2; border-radius: 4px; box-sizing: border-box; outline: none; transition: 0.2s; font-size: 0.95rem;}
        input:focus { border-color: var(--primary); box-shadow: 0 0 0 2px rgba(78,115,223,0.25); }
        .btn-group { display: flex; gap: 10px; margin-top: 25px; }
        .btn { flex: 1; padding: 10px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer; text-align: center; text-decoration: none; font-size: 0.95rem; color: white; transition: 0.2s;}
        .btn-save { background-color: #1cc88a; }
        .btn-save:hover { background-color: #17a673; }
        .btn-cancel { background-color: #858796; }
        .btn-cancel:hover { background-color: #717384; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Tambah Matakuliah</h2>
        <form action="tambah.php" method="POST">
            <div class="form-group">
                <label>Kode MK</label>
                <input type="text" name="kode" required placeholder="Masukkan Kode MK">
            </div>
            <div class="form-group">
                <label>Nama Matakuliah</label>
                <input type="text" name="nama" required placeholder="Masukkan Nama Matakuliah">
            </div>
            <div class="form-group">
                <label>SKS</label>
                <input type="number" name="sks" required placeholder="Jumlah SKS">
            </div>
            <div class="form-group">
                <label>Semester</label>
                <input type="number" name="semester" required placeholder="Semester Berapa">
            </div>
            <div class="btn-group">
                <button type="submit" class="btn btn-save">Simpan Data</button>
                <a href="index.php" class="btn btn-cancel">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>