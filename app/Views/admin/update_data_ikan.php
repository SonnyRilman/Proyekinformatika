<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <link rel="stylesheet" href="intro.css">
    <title>Update Data Ikan Cupang - MAVIS</title>
</head>

<body>
    <header class="container">
          <div class="page-header">
            <div class="logo">
                <img src="Mavis.png" alt="Logo MAVIS">
            </div>
            <input type="checkbox" id="click">

            <label for="click" class="mainicon">
                <div class="menu">
                    <i class='bx bx-menu'></i>
                </div>
            </label>
            <ul>
                <li><a href="/" style="--navAni:1">Home</a></li>
                <li><a href="/update" class="active" style="--navAni:2">Update Data Ikan Cupang</a></li>
                <li><a href="/konfirmasi" style="--navAni:3">Konfirmasi Pesanan</a></li>
                <li><a href="/keuangan" style="--navAni:4">Kelola Keuangan</a></li>
            </ul>

            <label class="mode">
                <input type="checkbox" id="darkModeToggle">
                <i class='bx bxs-moon'></i>
            </label>
        </div>
    </header>

    <section class="container">
        <div class="main">
            <h2>Update Data Ikan Cupang</h2>
            <!-- File: app/Views/Admin/update.php -->
<form action="<?= base_url('admin/updateDataIkanProcess') ?>" method="post">
    <label for="cupangName">Nama Ikan Cupang:</label>
    <input type="text" id="cupangName" name="cupangName" required>

    <label for="jenisIkan">Jenis Ikan:</label>
    <input type="text" id="jenisIkan" name="jenisIkan" required>

    <label for="genderIkan">Gender Ikan:</label>
    <input type="text" id="genderIkan" name="genderIkan" required>

    <label for="stock">Stok:</label>
    <input type="text" id="stock" name="stock" required>

    <label for="hargaPerEkor">Harga Per Ekor:</label>
    <input type="text" id="hargaPerEkor" name="hargaPerEkor" required>

    <input type="hidden" name="id" value="<?= $idIkan ?>">

    <button type="submit">Update Data</button>
</form>

        </div>
    </section>

    <script>
        const darkModeToggle = document.getElementById('darkModeToggle');
        const body = document.body;
        const isDarkMode = localStorage.getItem('darkMode') === 'enabled';
        if (isDarkMode) {
            body.classList.add('dark-mode');
            darkModeToggle.checked = true;
        }
        darkModeToggle.addEventListener('change', () => {
            if (darkModeToggle.checked) {
                body.classList.add('dark-mode');
                localStorage.setItem('darkMode', 'enabled');
            } else {
                body.classList.remove('dark-mode');
                localStorage.setItem('darkMode', 'disabled');
            }
        });
    </script>
</body>

</html>