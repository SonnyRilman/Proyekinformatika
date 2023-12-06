<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="intro.css">
      <link rel="stylesheet" href="<?= base_url('assets/css/ikan.css') ?>" />
    <title>MAVIS - Admin Home</title>
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
                        <li><a href="/admin/edit/1">Edit</a></li>
                         <li><a href="delete/3">Hapus</a></li>
                    </ul>
                      </li>
                    
                </li>
             <li><a href="/admin/konfirmasi-pesanan">Konfirmasi Pesanan</a></li>
  <li><a href="/admin/kelola-keuangan">Kelola Keuangan</a></li>

                <li><a href="admin/ikan-list" style="--navAni:5">ProdukIkan</a></li>
              

            </ul>

            

            <label class="mode">
                <input type="checkbox" id="darkModeToggle">
                <i class='bx bxs-moon'></i>
            </label>
        </div>
    </header>


    <section class="container">
        <div class="main">
            <div class="detail">
                <h3>Welcome To </h3>
                <h1>Betafish <span style="color:#f9532d;">MAVIS</span></h1>
                <p>Toko online terbaik untuk ikan cupang berkualitas tinggi. </p>
                <div class="social">
                    <a href="#" style="--socialAni:2"><i class='bx bxl-instagram'></i></a>
                    <a href="#" style="--socialAni:4"><i class='bx bxl-facebook-circle'></i></a>
                </div>
            </div>
            <div class="img-sec">
                <div class="images">
                    <img src="h1.png" alt="" class="img-w">
                </div>
            </div>
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

        const logoutBtn = document.getElementById('logoutBtn');

        logoutBtn.addEventListener('click', () => {
              window.location.href = "/home";
        });
    </script>

</body>

</html>
