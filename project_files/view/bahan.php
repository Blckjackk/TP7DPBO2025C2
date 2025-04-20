<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Bahan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Tambah Bahan Baru</h2>
        <form action="" method="POST">
            <label for="nama_bahan">Nama Bahan:</label><br>
            <input type="text" id="nama_bahan" name="nama_bahan" required><br><br>

            <input type="submit" name="add_bahan" value="Tambah Bahan">
        </form>
        <!-- Tombol Kembali -->
        <a href="index.php" class="btn-back">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
