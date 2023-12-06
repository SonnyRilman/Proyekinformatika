<!-- app/Views/Admin/konfirmasi_pesanan.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pesanan - Admin</title>
    <!-- Tambahkan link stylesheet atau tambahan CSS sesuai kebutuhan -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<body>
    <header>
        <!-- Tambahkan header jika diperlukan -->
    </header>

    <h2>Daftar Pesanan Menunggu Konfirmasi</h2>

    <?php if (isset($pesananList) && !empty($pesananList)): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Resi Transaksi</th>
                    <th>Nama Costumer</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Nama Ikan</th>
                    <th>Jumlah Ikan</th>
                    <th>Jenis Payment</th>
                    <th>Total Harga</th>
                    <th>Tanggal Beli</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pesananList as $pesanan): ?>
                    <tr>
                        <td><?= $pesanan['Resi_Transaksi']; ?></td>
                        <td><?= $pesanan['Nama_Costumer']; ?></td>
                        <td><?= $pesanan['Alamat']; ?></td>
                        <td><?= $pesanan['Email']; ?></td>
                        <td><?= $pesanan['Nama_Ikan']; ?></td>
                        <td><?= $pesanan['Jumlah_Ikan']; ?></td>
                        <td><?= $pesanan['Jenis_Payment']; ?></td>
                        <td><?= $pesanan['Total_Harga']; ?></td>
                        <td><?= $pesanan['Tanggal_Beli']; ?></td>
                        <td><?= $pesanan['Status']; ?></td>
                        <td>
                            <a href="<?= base_url('admin/konfirmasi-pesanan/' . $pesanan['Resi_Transaksi']); ?>">Konfirmasi</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Tidak ada pesanan menunggu konfirmasi.</p>
    <?php endif; ?>

    <!-- Tambahkan elemen HTML atau elemen lainnya sesuai kebutuhan -->

    <!-- Tampilkan informasi konfirmasi -->
    <?php if (session()->has('success')): ?>
        <div class="success-message">
            <?= session('success'); ?>
        </div>
    <?php endif; ?>x`

    <footer>
        <!-- Tambahkan footer jika diperlukan -->
    </footer>
</body>

</html>
