<form method="POST" action="">
    <label for="id_resep">Pilih Resep:</label>
    <select name="id_resep" required>
        <?php foreach ($resep->getAll() as $resep_data): ?>
            <option value="<?= $resep_data['id'] ?>"><?= $resep_data['nama_resep'] ?></option>
        <?php endforeach; ?>
    </select>
    
    <label for="id_bahan">Pilih Bahan:</label>
    <select name="id_bahan" required>
        <?php foreach ($bahan->getAll() as $bahan_data): ?>
            <option value="<?= $bahan_data['id'] ?>"><?= $bahan_data['nama_bahan'] ?></option>
        <?php endforeach; ?>
    </select>
    
    <label for="takaran">Takaran:</label>
    <input type="text" id="takaran" name="takaran" required>
    
    <button type="submit" name="add_detail">Tambah Detail</button>
</form>
