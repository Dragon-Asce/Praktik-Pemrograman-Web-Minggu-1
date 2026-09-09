CREATE DATABASE jurusan;
USE jurusan;

CREATE TABLE ae (
    kode_jrs VARCHAR(10),
    prodi VARCHAR(50),
    jml_mhs INT,
    kelas VARCHAR(10)
);

INSERT INTO ae (kode_jrs, prodi, jml_mhs, kelas) VALUES
('AAA', 'Mekatronika', 93, 'AEA'),
('BBB', 'Otomasi', 96, 'AEB'),
('CCC', 'Informatika', 90, 'AEC'),
('DDD', 'Teknik Mekatron', 4, 'AED');