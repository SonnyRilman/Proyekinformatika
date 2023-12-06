<!-- Di dalam admin/histori_keuangan.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Tambahkan tag head sesuai kebutuhan -->
</head>

<body>
    <header>
        <h1>Histori Keuangan</h1>
    </header>

    <section>
        <!-- Tabel untuk menampilkan histori keuangan -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cupang</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Harga</th>
                    <!-- Tambahkan kolom-kolom lain jika diperlukan -->
                </tr>
            </thead>
            <tbody>
                <!-- Data histori keuangan akan ditampilkan di sini -->
                <!-- Gunakan PHP untuk mengambil dan menampilkan data dari controller -->
                <?php foreach ($dataHistoriKeuangan as $historiKeuangan) : ?>
                    <tr>
                        <td><?= $historiKeuangan['Id_Cupang']; ?></td>
                        <td><?= $historiKeuangan['Cupang']; ?></td>
                        <td><?= $historiKeuangan['History_Description']; ?></td>
                        <td><?= $historiKeuangan['Tanggal_History']; ?></td>
                        <td><?= $historiKeuangan['Harga']; ?></td>
                        <!-- Tambahkan kolom-kolom lain jika diperlukan -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

    <!-- Tambahkan bagian lain dari tampilan jika diperlukan -->

    <script src="path/to/your/admin-keuangan.js"></script>
</body>

</html>
