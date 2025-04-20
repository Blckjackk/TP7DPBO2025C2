<?php

include_once 'config/db.php';
include_once 'class/Resep.php';

$resep = new Resep($pdo);

if (isset($_GET['id'])) {
    $id_resep = $_GET['id'];

    $data_resep = $resep->getResepById($id_resep);

    if (!$data_resep) {
        echo "<p>Resep tidak ditemukan.</p>";
        exit;
    }
} else {
    echo "<p>ID Resep tidak ditemukan.</p>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_resep = $_POST['nama_resep'];
    $deskripsi = $_POST['deskripsi'];
    $waktu_masak = $_POST['waktu_masak'];

    // Update resep
    if ($resep->updateResep($id_resep, $nama_resep, $deskripsi, $waktu_masak)) {
        echo "<p>Resep berhasil diperbarui.</p>";
    } else {
        echo "<p>Gagal memperbarui resep.</p>";
    }
}

?>

<h2>Edit Resep</h2>
<form method="POST" action="">
    <label for="nama_resep">Nama Resep</label>
    <input type="text" name="nama_resep" id="nama_resep" value="<?= htmlspecialchars($data_resep['nama_resep']) ?>" required>

    <label for="deskripsi">Deskripsi</label>
    <textarea name="deskripsi" id="deskripsi" required><?= htmlspecialchars($data_resep['deskripsi']) ?></textarea>

    <label for="waktu_masak">Waktu Masak (menit)</label>
    <input type="number" name="waktu_masak" id="waktu_masak" value="<?= htmlspecialchars($data_resep['waktu_masak']) ?>" required>

    <button type="submit">Simpan Perubahan</button>
</form>

<a href="index.php">Kembali ke Daftar Resep</a>
