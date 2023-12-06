<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="intro.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/ikan.css') ?>" />
     <link rel="stylesheet" href="<?= base_url('assets/css/add.css') ?>" />
    <title>Tambah data ikan-MAVIS</title>

      
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
                <li><a href="/" class="active" style="--navAni:1">Home</a></li>

                <li class="dropdown">
                    <a href="#" style="--navAni:2"> Kelola Ikan Cupang <i class='bx bx-chevron-down'></i></a>
                    <ul class="dropdown-content">
                        <li><a href="/add">Tambah</a></li>
                        <li><a href="/admin/edit/2">Edit</a></li>
                        <li><a href="delete/2">Hapus</a></li>
                    </ul>
                </li>

                <li><a href="/konfirmasi" style="--navAni:3">Konfirmasi Pesanan</a></li>
                <li><a href="/keuangan" style="--navAni:4">Kelola Keuangan</a></li>
            </ul>

            <label class="mode">
                <input type="checkbox" id="darkModeToggle">
                <i class='bx bxs-moon'></i>
            </label>
        </div>
    </header>

    <div class="container">
        <h2>Tambah Data Ikan</h2>

        <?php helper(['form']); ?>
    
        <?= form_open_multipart('/admin/simpanDataIkan'); ?>
    
        <label for="Nama_Ikan">Nama Ikan:</label>
        <input type="text" name="Nama_Ikan" required>
    
        <label for="Jenis_Ikan">Jenis Ikan:</label>
        <input type="text" name="Jenis_Ikan" required>
    
        <label for="Gender_Ikan">Gender Ikan:</label>
        <input type="text" name="Gender_Ikan" required>
    
        <label for="Stock">Stock:</label>
        <input type="number" name="Stock" required>
    
        <label for="Harga_Per_Ekor">Harga Per Ekor:</label>
        <input type="text" name="Harga_Per_Ekor" required>
    
        <label for="foto">Foto Ikan:</label>
        <input type="file" name="foto" accept="image/*" required>
    
        <button type="submit">Simpan</button>
        <?= form_close(); ?>
    </div>

    </div>

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

        const logoutBtn = document.getElementById('logoutBtn');

        logoutBtn.addEventListener('click', () => {
            window.location.href = "/home";
        });
    </script>
</body>

</html>