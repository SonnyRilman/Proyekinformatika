<!-- File: app/Views/Admin/success.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukses - MAVIS</title>

    <!-- Tambahkan link Bootstrap CSS di sini -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f8f8f8;
        }
    </style>
</head>

<body class="container mt-5">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Operasi Berhasil!</h4>
        <p>
            <?= session('success') ?>
        </p>
        <hr>
        <p class="mb-0"><a href="<?= base_url('/costumer_home') ?>" class="alert-link">Kembali ke Halaman Costumer</a></p>
    </div>

    <!-- Tambahkan link Bootstrap JS dan Popper.js di sini -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>