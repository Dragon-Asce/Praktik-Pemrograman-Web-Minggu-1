<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "KampusMajalengka");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $cek = mysqli_query($conn, "SELECT * FROM user WHERE User_name='$user' AND Password='$pass'");
    if (mysqli_num_rows($cek) > 0) {
        $_SESSION['admin'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error_msg = "Login Gagal! Username atau password salah.";
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

$is_admin = isset($_SESSION['admin']);
$menu = isset($_GET['menu']) ? $_GET['menu'] : 'matakuliah';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akademik Kampus</title>
    <style>
        :root {
            --primary: #4e73df;
            --sidebar: #224abe;
            --bg: #f8f9fc;
            --text: #5a5c69;
            --white: #ffffff;
        }
        * { box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { margin: 0; display: flex; height: 100vh; background-color: var(--bg); color: var(--text); }
        
        .sidebar { width: 260px; background-color: var(--sidebar); color: var(--white); display: flex; flex-direction: column; box-shadow: 2px 0 5px rgba(0,0,0,0.1); z-index: 10; }
        .sidebar-header { padding: 25px 20px; font-size: 1.3rem; font-weight: bold; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.1); margin-bottom: 15px;}
        .menu-list { flex: 1; padding: 0 10px; }
        .menu-list a { display: block; color: rgba(255,255,255,0.8); text-decoration: none; padding: 12px 15px; margin-bottom: 5px; border-radius: 5px; transition: 0.3s; font-weight: 500; }
        .menu-list a:hover, .menu-list a.active { background-color: rgba(255,255,255,0.2); color: var(--white); }
        
        .login-box { padding: 25px 20px; background-color: rgba(0,0,0,0.15); border-top: 1px solid rgba(255,255,255,0.1); }
        .login-box h4 { margin-top: 0; margin-bottom: 15px; font-size: 1rem; color: var(--white); text-align: center; }
        .login-box input { width: 100%; padding: 10px 12px; margin-bottom: 12px; border: none; border-radius: 4px; outline: none; }
        .login-box button { width: 100%; padding: 10px; background-color: var(--primary); color: white; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; transition: 0.2s; }
        .login-box button:hover { background-color: #2e59d9; }
        .alert { background-color: #ffb3b3; color: #a94442; padding: 8px; border-radius: 4px; margin-bottom: 12px; font-size: 0.85rem; text-align: center; }
        .admin-status p { margin: 0 0 10px 0; text-align: center; color: #d4edda; }
        .btn-logout { display: block; text-align: center; color: #ffb3b3; text-decoration: none; padding: 8px; border: 1px solid #ffb3b3; border-radius: 4px; transition: 0.3s;}
        .btn-logout:hover { background-color: #ffb3b3; color: var(--sidebar); }
        
        .content { flex: 1; padding: 40px; overflow-y: auto; }
        .content-header { margin-bottom: 25px; }
        .content-header h2 { margin: 0; color: #3a3b45; font-size: 1.8rem; }
        
        .table-container { background: var(--white); border-radius: 8px; box-shadow: 0 0 15px rgba(0,0,0,0.05); padding: 25px;}
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 15px; text-align: left; border-bottom: 1px solid #e3e6f0; }
        th { background-color: #f8f9fc; color: var(--primary); font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.5px; }
        tr:hover { background-color: #f8f9fc; }
        
        .btn { display: inline-block; padding: 8px 15px; border-radius: 4px; text-decoration: none; font-size: 0.9rem; font-weight: bold; cursor: pointer; border: none; }
        .btn-add { background-color: #1cc88a; color: white; margin-bottom: 15px; }
        .btn-add:hover { background-color: #17a673; }
        .btn-edit { background-color: #f6c23e; color: white; padding: 6px 12px; font-size: 0.8rem; border-radius: 3px; margin-right: 5px;}
        .btn-edit:hover { background-color: #dda20a; }
        .btn-delete { background-color: #e74a3b; color: white; padding: 6px 12px; font-size: 0.8rem; border-radius: 3px;}
        .btn-delete:hover { background-color: #be2617; }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">Admin Panel</div>
        <div class="menu-list">
            <a href="?menu=matakuliah" class="<?= $menu == 'matakuliah' ? 'active' : '' ?>">List Matakuliah</a>
            <a href="?menu=user" class="<?= $menu == 'user' ? 'active' : '' ?>">List User</a>
        </div>
        
        <div class="login-box">
            <?php if(!$is_admin): ?>
                <h4>Form Login</h4>
                <?php if(isset($error_msg)) echo "<div class='alert'>$error_msg</div>"; ?>
                <form method="POST">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" name="login">Login</button>
                </form>
            <?php else: ?>
                <div class="admin-status">
                    <p>Status: <strong>Admin Aktif</strong></p>
                    <a href="?logout=1" class="btn-logout">Logout</a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="content">
        <?php if ($menu == 'matakuliah'): ?>
            <div class="content-header">
                <h2>Data Matakuliah</h2>
            </div>
            <div class="table-container">
                <?php if ($is_admin): ?>
                    <a href='form_tambah.php' class='btn btn-add'>+ Tambah Data</a>
                <?php endif; ?>
                
                <table>
                    <thead>
                        <tr>
                            <th>Kode MK</th>
                            <th>Nama Matakuliah</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <?php if ($is_admin) echo "<th>Aksi</th>"; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $q = mysqli_query($conn, "SELECT * FROM matakuliah");
                        while ($r = mysqli_fetch_assoc($q)):
                        ?>
                        <tr>
                            <td><?= htmlspecialchars($r['Kode_MK']) ?></td>
                            <td><?= htmlspecialchars($r['Nama_MK']) ?></td>
                            <td><?= htmlspecialchars($r['SKS']) ?></td>
                            <td><?= htmlspecialchars($r['Semester']) ?></td>
                            <?php if ($is_admin): ?>
                            <td>
                                <a href='form_edit.php?id=<?= $r['Kode_MK'] ?>' class='btn btn-edit'>Edit</a> 
                                <a href='hapus.php?id=<?= $r['Kode_MK'] ?>' class='btn btn-delete' onclick="return confirm('Yakin menghapus matakuliah ini?');">Hapus</a>
                            </td>
                            <?php endif; ?>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>

        <?php elseif ($menu == 'user'): ?>
            <div class="content-header">
                <h2>Daftar User</h2>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <?php if ($is_admin): ?>
                                <th>Username</th>
                                <th>Password</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $q = mysqli_query($conn, "SELECT * FROM user");
                        while ($r = mysqli_fetch_assoc($q)):
                        ?>
                        <tr>
                            <td><?= htmlspecialchars($r['Nama_pengguna']) ?></td>
                            <td><?= htmlspecialchars($r['alamat']) ?></td>
                            <?php if ($is_admin): ?>
                                <td><?= htmlspecialchars($r['User_name']) ?></td>
                                <td><?= htmlspecialchars($r['Password']) ?></td>
                            <?php endif; ?>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>