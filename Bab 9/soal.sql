-- 1. Tampilkan jml_mhs, kelas pada tabel ae
SELECT jml_mhs, kelas FROM ae;

-- 2. Tampilkan semua data_ae dengan prodi diurutkan secara Ascending
SELECT * FROM ae ORDER BY prodi ASC;

-- 3. Tampilkan semua data_ae dengan jml_mhs diurutkan secara Descending
SELECT * FROM ae ORDER BY jml_mhs DESC;

-- 4. Tambahkan field kaprodi varchar(50) setelah field prodi
ALTER TABLE ae ADD kaprodi VARCHAR(50) AFTER prodi;

-- 5. Tambahkan nomor int(1) pada awal field (sebelum kode_jrs)
ALTER TABLE ae ADD nomor INT(1) FIRST;

-- 6. Ubah data jml_mhs menjadi 88 untuk kode_jrs = BBB
UPDATE ae SET jml_mhs = 88 WHERE kode_jrs = 'BBB';

-- 7. Tampilkan semua data pada tabel ae
SELECT * FROM ae;

-- 8. Ganti Field kaprodi menjadi ketua_prodi pada tabel ae
ALTER TABLE ae CHANGE kaprodi ketua_prodi VARCHAR(50);

-- 9. Isikan total_mhs= semua jumlah ditambahkan yang berada pada jml_mhs untuk semua data ae
SELECT SUM(jml_mhs) AS total_mhs FROM ae;

-- 10. Hapus data ae yang berkode CCC
DELETE FROM ae WHERE kode_jrs = 'CCC';