<!DOCTYPE html>
<html>
<head>
    <title>Laporan Transaksi</title>
</head>
<body>
    <h1>Laporan Transaksi</h1>

    <table>
        <thead>
            <tr>
                <th>No Transaksi</th>
                <th>Tanggal</th>
                <th>Nama Pelanggan</th>
                <th>Total Harga</th>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactions as $transaction): ?>
                    <tr>
                        <td><?= $transaction['transaction_id']; ?></td>
                        <td><?= $transaction['transaction_date']; ?></td>
                        <td><?= $transaction['customer_name']; ?></td>
                        <td>Rp <?= number_format($transaction['total_price'], 0, ',', '.'); ?></td>
                        <!-- Tambahkan data lain sesuai kebutuhan -->
                    </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
