CREATE DATABASE KampusMajalengka;
USE KampusMajalengka;

CREATE TABLE matakuliah (
    Kode_MK VARCHAR(10) PRIMARY KEY,
    Nama_MK VARCHAR(50),
    SKS INT,
    Semester INT
);

CREATE TABLE user (
    Id INT PRIMARY KEY AUTO_INCREMENT,
    Nama_pengguna VARCHAR(50),
    alamat VARCHAR(100),
    User_name VARCHAR(50),
    Password VARCHAR(50)
);

INSERT INTO matakuliah VALUES 
('1802012', 'Kewarganegaraan', 2, 2),
('1802013', 'Arsitektur Komputer', 3, 2),
('1803012', 'Matematika Diskrit', 2, 3),
('1804013', 'Rekayasa Perangkat Lunak', 3, 4);

INSERT INTO user (Nama_pengguna, alamat, User_name, Password) VALUES 
('Budi Santosa', 'Jl. Merdeka No. 10 Medan', 'budi', 'budi123456'),
('Susanti Monalisa', 'Jl Sisingamangaraja NO. 9 Medan', 'santi', 'santi654321');