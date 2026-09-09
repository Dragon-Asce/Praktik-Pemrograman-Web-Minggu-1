# 📘 Praktik Pemrograman Web

Proyek praktikum mata kuliah **Pemrograman Web** — berisi kumpulan latihan dari Bab 3 hingga Bab 11, mencakup materi **HTML, CSS, JavaScript, PHP, dan MySQL/SQL**.

> Disusun oleh: **Farhan Maulana** — @2026

---

## 📑 Daftar Isi / Rangkuman Bab

| Bab | Topik | Materi yang Dipelajari | File Utama |
|-----|-------|------------------------|------------|
| [Bab 3](#bab-3--pengenalan-html) | Pengenalan HTML | Tag dasar HTML, list (ol/ul), gambar, link, atribut warna | `index.html`, `JamGadang.jpg` |
| [Bab 4](#bab-4--layout-halaman-dengan-css-grid-dan-iframe) | Layout Halaman (CSS Grid + iframe) | CSS Grid 3 kolom, navbar/footer, menu kiri-kanan, iframe | `index.html`, `menu1–5.html`, `welcome.html` |
| [Bab 5](#bab-5--layout-halaman-dengan-css-eksternal) | Layout Halaman (CSS Eksternal) | Layout grid + CSS eksternal (`style.css`), menu & iframe | `index.html`, `menu1–6.html`, `welcome.html` |
| [Bab 6](#bab-6--form-dan-javascript) | Form & JavaScript | Form pemesanan barang, kalkulasi otomatis (total, diskon), event `onclick` | `index.html`, `style.css`, `script.js` |
| [Bab 7](#bab-7--form-penjualan-barang--javascript) | Form Penjualan (JavaScript) | Validasi form, perhitungan harga & diskon, radio button | `index.html`, `script.js` — juga versi PHP |
| [Bab 8](#bab-8--form-penjualan-barang--versi-php) | Form Penjualan (PHP) | Logika bisnis penjualan ditulis ulang menggunakan PHP (GET/POST) | `index.html` — juga `Pake PHP/index.php` |
| [Bab 9](#bab-9--sql-dasar) | SQL Dasar | `CREATE DATABASE`, `CREATE TABLE`, `INSERT`, query dasar | `query.sql`, `soal.sql` |
| [Bab 10](#bab-10--php-dan-mysql-crud) | PHP & MySQL (CRUD) | Koneksi MySQL, CRUD (**C**reate-**R**ead-**U**pdate-**D**elete) tabel Matakuliah | `index.php`, `koneksi.php`, `tambah.php`, `edit.php`, `hapus.php` |
| [Bab 11](#bab-11--php-dan-mysql-sistem-akademik) | PHP & MySQL (Sistem Akademik) | Login/logout user, sesi PHP, CRUD matakuliah dengan autentikasi | `index.php`, `koneksi.php`, `form_tambah.php`, `form_edit.php`, `database.sql` |

---

## 🧪 Cara Menjalankan

- **Bab 3–8 (HTML/CSS/JS)** — cukup buka file `index.html` di browser.
- **Bab 8, 7 versi PHP** — jalankan melalui server lokal (XAMPP/Laragon) di folder `htdocs`.
- **Bab 9 (SQL)** — impor file `.sql` ke phpMyAdmin/MySQL CLI.
- **Bab 10 & 11 (PHP + MySQL)** — letakkan folder di `htdocs`, impor database (`Bab 11/database.sql`), lalu akses via `http://localhost/Bab-11/`.

---

## 📂 Detail Per Bab

### Bab 3 — Pengenalan HTML
Latihan dasar HTML: tag `<div>`, list berurutan (`<ol>`) dan tidak berurutan (`<ul>`), penyisipan gambar, serta link/hyperlink.

**File:**
- [`Bab 3/index.html`](Bab 3/index.html) — halaman utama
- `Bab 3/JamGadang.jpg` — gambar pendukung

---

### Bab 4 — Layout Halaman (CSS Grid + iframe)
Membangun layout web 3 baris × 3 kolom dengan **CSS Grid** inline: header/footer biru (#0461af), menu kiri-kanan, konten tengah berisi **iframe** yang menampilkan halaman menu.

**File:**
- [`Bab 4/index.html`](Bab 4/index.html) — halaman utama layout grid
- `Bab 4/menu1.html` – `menu5.html`, `Bab 4/welcome.html` — konten yang dimuat di iframe
- `Bab 4/logo_polman.png` — logo pada menu kanan

---

### Bab 5 — Layout Halaman (CSS Eksternal)
Pengembangan lanjutan layout grid dengan pemisahan gaya ke **file CSS eksternal** (`style.css`), menu memakai tag `<table>`, dan target `layar_utama` agar link terbuka di iframe tengah.

**File:**
- [`Bab 5/index.html`](Bab 5/index.html) — halaman utama
- [`Bab 5/style.css`](Bab 5/style.css) — styling eksternal
- `Bab 5/menu1.html` – `menu6.html`, `Bab 5/welcome.html` — konten iframe

---

### Bab 6 — Form & JavaScript
Formulir **Pemesanan Barang** dengan logika JavaScript (`script.js`): tombol *Tebak* mencari data barang berdasarkan kode, tombol *Hitung* menghitung total harga, diskon, dan total bayar, serta tombol *Cetak*.

**File:**
- [`Bab 6/index.html`](Bab 6/index.html) — halaman form
- [`Bab 6/style.css`](Bab 6/style.css) — styling
- [`Bab 6/script.js`](Bab 6/script.js) — logika kalkulasi JavaScript

---

### Bab 7 — Form Penjualan Barang (JavaScript)
Formulir **Penjualan Barang** dengan validasi, radio button untuk jumlah barang, perhitungan total & diskon berdasarkan metode bayar (Cash/Transfer/Debit) menggunakan JavaScript.

**File:**
- [`Bab 7/index.html`](Bab 7/index.html) — halaman form versi HTML+JS
- [`Bab 7/script.js`](Bab 7/script.js) — logika pemrosesan
- [`Bab 7/style.css`](Bab 7/style.css) — styling
- `Bab 7/Pake PHP/` — versi yang diimplementasikan ulang memakai **PHP** (`index.php`, `style.css`)

---

### Bab 8 — Form Penjualan Barang (Versi PHP)
Pendekatan serupa dengan Bab 7, namun logika penjualan ditulis ulang dengan **PHP** (metode POST), termasuk cek kode barang, perhitungan total, diskon, dan total bayar di sisi server.

**File:**
- [`Bab 8/index.html`](Bab 8/index.html) — tampilan form versi HTML + CSS inline
- [`Bab 8/Pake PHP/index.php`](Bab 8/Pake PHP/index.php) — implementasi PHP dengan logika diskon
- `Bab 8/Pake PHP/style.css` — styling

---

### Bab 9 — SQL Dasar
Latihan SQL tingkat dasar: membuat **database** `jurusan`, membuat **tabel** `ae`, dan **INSERT** data program studi.

**File:**
- [`Bab 9/query.sql`](Bab 9/query.sql) — contoh query (CREATE + INSERT)
- [`Bab 9/soal.sql`](Bab 9/soal.sql) — latihan soal SQL

---

### Bab 10 — PHP & MySQL (CRUD)
Implementasi **CRUD** (Tambah, Lihat, Edit, Hapus) data **Matakuliah** menggunakan PHP dan MySQL: `Kode_MK`, `Nama_MK`, `SKS`, `Semester`.

**File:**
- [`Bab 10/index.php`](Bab 10/index.php) — halaman daftar data
- [`Bab 10/koneksi.php`](Bab 10/koneksi.php) — konfigurasi koneksi MySQL
- `Bab 10/tambah.php`, `Bab 10/form_tambah.php` — tambah data
- `Bab 10/edit.php`, `Bab 10/form_edit.php` — edit data
- `Bab 10/hapus.php` — hapus data
- `Bab 10/style.css` — styling

---

### Bab 11 — PHP & MySQL (Sistem Akademik)
Aplikasi **Sistem Akademik Kampus** lengkap: halaman login/logout menggunakan **session PHP**, tabel `matakuliah` dan `user`, serta CRUD terproteksi (hanya admin yang bisa mengelola data).

**File:**
- [`Bab 11/index.php`](Bab 11/index.php) — halaman utama + login
- [`Bab 11/koneksi.php`](Bab 11/koneksi.php) — koneksi database `Kampus`
- `Bab 11/form_tambah.php`, `Bab 11/form_edit.php` — form input data
- `Bab 11/database.sql` — skema & data awal database `Kampus`

---

## 🛠️ Teknologi

| Teknologi | Pemakaian |
|-----------|-----------|
| **HTML** | Struktur semua halaman (Bab 3–8) |
| **CSS** | Layout grid, styling halaman (Bab 4–8) |
| **JavaScript** | Interaktivitas & kalkulasi form (Bab 6–7) |
| **PHP** | Logika server (Bab 7–8), CRUD & login (Bab 10–11) |
| **MySQL/SQL** | Basis data (Bab 9–11) |