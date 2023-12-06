<!-- app/Views/Admin/history.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Pembelian</title>
</head>

<body>
    <h1>History Pembelian</h1>
    <!-- Tabel untuk menampilkan history pembelian -->
    <table>
        <thead>
            <tr>
                <th>ID Cupang</th>
                <th>History</th>
                <th>Tanggal History</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($history as $item): ?>
                <tr>
                    <td>
                        <?= $item['Id_Cupang']; ?>
                    </td>
                    <td>
                        <?= $item['History']; ?>
                    </td>
                    <td>
                        <?= $item['Tanggal_History']; ?>
                    </td>
                    <td>
                        <?= $item['Harga']; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>