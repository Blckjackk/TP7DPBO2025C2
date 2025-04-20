<h2>Daftar Resep</h2>

<!-- Form Pencarian -->
<form method="GET" action="">
    <input type="text" name="search" placeholder="Cari resep..." value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
    <button type="submit">Cari</button>
    <button type="submit" name="reset" value="1">Tampilkan Semua</button>
</form>

<?php
// Mengecek apakah tombol reset ditekan
if (isset($_GET['reset'])) {
    $search_term = '';
} else {
    $search_term = isset($_GET['search']) ? $_GET['search'] : '';
}

// Ambil data resep (semua atau hasil search)
$resep_data = $resep->search($search_term);

// Menampilkan data
if ($resep_data && count($resep_data) > 0) {
    foreach ($resep_data as $resep) {
        if (isset($resep['id'])) {
            echo "<div class='card'>
                    <h3>{$resep['nama_resep']}</h3>
                    <p>{$resep['deskripsi']}</p>
                    <p>Waktu Masak: {$resep['waktu_masak']} menit</p>
                    <a href='edit_resep.php?id={$resep['id']}' class='btn-edit'>Edit</a>
                    <a href='delete_resep.php?id={$resep['id']}' class='btn-delete' onclick='return confirm(\"Apakah Anda yakin ingin menghapus resep ini?\")'>Delete</a>
                  </div>";
        } else {
            echo "<p>Data resep tidak lengkap.</p>";
        }
    }
} else {
    echo "<p>Resep tidak ditemukan.</p>";
}
?>
