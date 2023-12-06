<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Ikan - MAVIS</title>
</head>
body>
    <h2>Edit Data Ikan</h2>
    <?php
    // Tambahkan var_dump untuk memeriksa nilai $ikan

    ?>

<?= $this->extend('Layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h2>Edit Data Ikan</h2>
    <form action="/admin/updateDataIkan" method="post">
    <label for="selectedIkan">Pilih Ikan yang Akan Diperbarui:</label>
    <select name="selectedIkan">
        <?php foreach ($ikanList as $ikan): ?>
                <option value="<?= $ikan['ID']; ?>"><?= $ikan['Nama_Ikan']; ?></option>
            <?php endforeach; ?>
    </select>

        <label for="Nama_Ikan">Nama Ikan Baru:</label>
    <input type="text" name="Nama_Ikan" placeholder="Nama Ikan Baru" required>

        <label for="Jenis_Ikan">Jenis Ikan Baru:</label>
    <input type="text" name="Jenis_Ikan" placeholder="Jenis Ikan Baru" required>

        <label for="Gender_Ikan">Gender Ikan Baru:</label>
    <input type="text" name="Gender_Ikan" placeholder="Gender Ikan Baru" required>

        <label for="Stock">Stock Baru:</label>
    <input type="number" name="Stock" placeholder="Stock Baru" required>


               <label for="Harga_Per_Ekor">Harga Per Ekor Baru:</label>
    <input type="text" name="Harga_Per_Ekor" placeholder="Harga Per Ekor Baru" required>

        <!-- Tambahkan kolom formulir untuk data lainnya -->

    <button type="submit">Update</button>
    </form>



<?= $this->endSection(); ?>