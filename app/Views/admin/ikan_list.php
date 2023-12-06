<!-- app/Views/ikan_list.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('assets/css/ikan.css') ?>" />
   <link rel="stylesheet" href="intro.css">
    <title>Daftar Ikan - MAVIS</title>
</head>

<body>
     <header class="container">
       <div class="page-header">
             <div class="logo">
                
                <img src="<?= base_url('assets/foto/logo.png'); ?>" alt="MAVIS">
    
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
      
        <div class="betta_section">
            <div id="betta_main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="betta_section_2">
                                <div class="row">

                                  <?php foreach ($ikanList as $ikan): ?>
    <div class="col-lg-4 col-sm-4">
        <div class="box_main">
            <h4 class="betta_text"><?= $ikan['Nama_Ikan']; ?></h4>
            <!-- Pengaturan ukuran gambar di sisi view -->
            <img src="<?= base_url('uploads/' . $ikan['Foto_Ikan']); ?>" alt="Foto <?= $ikan['Nama_Ikan']; ?>" class="ikan-image" width="200" height="150">
            <p class="price_text">Jenis Ikan: <span style="color: #262626;"><?= $ikan['Jenis_Ikan']; ?></span></p>
            <p class="price_text">Gender Ikan: <span style="color: #262626;"><?= $ikan['Gender_Ikan']; ?></span></p>
            <p class="price_text">Stock: <span style="color: #262626;"><?= $ikan['Stock']; ?></span></p>
            <p class="price_text">Harga Per Ekor: <span style="color: #262626;"><?= $ikan['Harga_Per_Ekor']; ?></span></p>
        </div>
    </div>
<?php endforeach; ?>

                                </div>
                            </div
                        </div>
                    </div>
                </div>
            </div>
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
    </script>

</body>

</html>
