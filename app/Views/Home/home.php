<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="intro.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/ikan.css') ?>" />

    <title>MAVIS - Penjualan Ikan Cupang</title>
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
                <li><a href="/home" class="active" style="--navAni:1">Home</a></li>
                <li class="dropdown">
                    <a href="#" style="--navAni:2">About <i class='bx bx-chevron-down'></i></a>
                    <ul class="dropdown-content">
                        <li><a href="/about">About MAVIS</a></li>
                        <li><a href="/profilfounders">Pofile Founders</a></li>
                    </ul>
                </li>
                <li><a href="/jenis-ikan" style="--navAni:3">Produk Ikan</a></li>
                <li><a href="/testimoni" style="--navAni:4">Testimoni</a></li>
                <li><a href="/kontak" style="--navAni:5">Contact</a></li>
            </ul>


            <div class="login-regiter">
                <div class="buttons">
                    <a href="/login">
                        <button class="button2" type="button">Login</button>
                    </a>
                    <a href="/registrasi">
                        <button class="button3" type="button">Daftar</button>
                    </a>
                </div>
            </div>
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
                <p>KO BELI DI SINI KO PASTI PUAS!!! </p>
                <div class="social">
                    <a href="https://instagram.com/halfmoon.indonesia99?igshid=YTQwZjQ0NmI0OA=="
                        style="--socialAni:2"><i class='bx bxl-instagram'></i></a>
                    <a href="https://www.facebook.com/irvandy.irvandy.3597" style="--socialAni:4"><i
                            class='bx bxl-facebook-circle'></i></a>
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
    </script>

</body>

</html>