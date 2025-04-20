<?php
include_once 'db.php';
include_once 'resep.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_resep = $_POST['nama_resep'];
    $deskripsi = $_POST['deskripsi'];
    $waktu_masak = $_POST['waktu_masak'];

    $resep = new Resep($pdo);
    $resep->addResep($nama_resep, $deskripsi, $waktu_masak);
    header("Location: index.php");
}
?>

<form method="POST" action="">
    <label for="nama_resep">Nama Resep:</label>
    <input type="text" id="nama_resep" name="nama_resep" required>

    <label for="deskripsi">Deskripsi:</label>
    <textarea id="deskripsi" name="deskripsi" required></textarea>

    <label for="waktu_masak">Waktu Masak (menit):</label>
    <input type="number" id="waktu_masak" name="waktu_masak" required>

    <button type="submit">Tambah Resep</button>
</form>
