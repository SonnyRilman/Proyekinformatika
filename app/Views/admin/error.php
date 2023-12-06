<!-- File: app/Views/Admin/error.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error - MAVIS</title>
</head>

<body>
    <h2>Error</h2>
    <p>
        <?= session('error') ?>
    </p>

    <a href="<?= base_url('admin/fish_list') ?>">Kembali ke Daftar Ikan</a>
</body>

</html>