<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="intro.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/ikan.css') ?>" />
    <title>ABOUT- Penjualan Ikan Cupang</title>
</head>

<body>

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
                <li><a href="/"  style="--navAni:1">Home</a></li>
                <li class="dropdown">
                    <a href="#"  class="active" style="--navAni:2">About <i class='bx bx-chevron-down'></i></a>
                    <ul class="dropdown-content">
                        <li><a href="/about">About MAVIS</a></li>
                        <li><a href="/profilfounders" >Pofile Founders</a></li>
                    </ul>
                </li>
                <li><a href="/jenis-ikan" style="--navAni:3">Produk Ikan</a></li>
                <li><a href="/testimoni" style="--navAni:4">Testimoni</a></li>
                <li><a href="/kontak" style="--navAni:5">Contact</a></li>
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
                    <h1>About <span style="color:#f9532d;">MAVIS</span></h1>
                    <br>
                    <p>MAVIS adalah toko online yang spesialis dalam penjualan ikan cupang berkualitas tinggi. Kami
                        menawarkan
                        berbagai jenis ikan cupang dengan warna dan bentuk yang indah. Dengan pengalaman bertahun-tahun
                        dalam
                        industri ini, kami berkomitmen untuk menyediakan ikan cupang terbaik untuk para pecinta ikan
                        hias.</p>

                    <p>Tim kami terdiri dari para ahli yang peduli dengan kesejahteraan ikan cupang dan memiliki
                        pengetahuan
                        mendalam tentang pemeliharaan dan pembiakan ikan ini. Kami selalu berusaha untuk memberikan
                        layanan
                        terbaik kepada pelanggan kami dan menjaga kualitas produk kami.</p>

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
        </script>

    </body>

</html>