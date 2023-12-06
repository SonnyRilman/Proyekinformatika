<!-- Misalnya, di dalam tampilan admin/confirm.blade.php -->
<table>
    <thead>
        <tr>
            <th>ID Transaksi</th>
            <th>Status</th>
            <!-- Kolom-kolom lainnya -->
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($daftarTransaksi as $transaksi): ?>
            <tr>
                <td><?= $transaksi['Resi_Transaksi']; ?></td>
                <td><?= $transaksi['Status']; ?></td>
                <!-- Kolom-kolom lainnya -->
                <td>
                    <!-- Tombol konfirmasi untuk admin -->
                    <form method="post" action="/admin/confirmPembelian">
                        <input type="hidden" name="selectedTransaksi" value="<?= $transaksi['Resi_Transaksi']; ?>">
                        <button type="submit">Konfirmasi</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
