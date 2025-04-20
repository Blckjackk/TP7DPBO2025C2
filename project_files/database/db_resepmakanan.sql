CREATE DATABASE db_resepmakanan;

USE db_resepmakanan;

-- Tabel Resep
CREATE TABLE resep (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_resep VARCHAR(255) NOT NULL,
    deskripsi TEXT,
    waktu_masak INT
);

-- Tabel Bahan
CREATE TABLE bahan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_bahan VARCHAR(255) NOT NULL
);

-- Tabel DetailResep (relasi antara Resep dan Bahan)
CREATE TABLE detail_resep (
    id INT AUTO_INCREMENT PRIMARY KEY,
    resep_id INT,
    bahan_id INT,
    takaran VARCHAR(255),
    FOREIGN KEY (resep_id) REFERENCES resep(id),
    FOREIGN KEY (bahan_id) REFERENCES bahan(id)
);
