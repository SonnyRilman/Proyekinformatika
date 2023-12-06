<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="intro.css">

    <title>TESTIMONI- Penjualan Ikan Cupang</title>
</head>

<body>
    <header class="container">
        <div class="page-header">
            <div class="logo">
                <a href="logo.png">Logo.</a>
            </div>
            <input type="checkbox" id="click">

            <label for="click" class="mainicon">
                <div class="menu">
                    <i class='bx bx-menu'></i>
                </div>
            </label>
            <ul>
                <li><a href="/" style="--navAni:1">Home</a></li>
                <li><a href="/about" style="--navAni:2">About</a></li>
                <li><a href="/jenis-ikan" style="--navAni:3">Produk Ikan</a></li>
                <li><a href="/testimoni" class="active" style="--navAni:4">Testimoni</a></li>
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
                <h1>Testimoni <span style="color:#f9532d;">Pelanggan</span></h1>
                <br>
                <div class="testimonial">
                    <p>"Ikan cupang yang saya beli di MAVIS sangat cantik dan sehat. Pelayanan pelanggan mereka juga
                        sangat baik!"</p>
                    <p class="customer">-Valen</p>
                </div>

                <div class="testimonial">
                    <p>"MAVIS memberikan pengalaman belanja online yang menyenangkan. Saya sangat puas dengan pembelian
                        saya."</p>
                    <p class="customer">-Angel</p>
                </div>
            </div>
            <div class="img-sec">
                <div class="images">
                    <img src="testimony.jpg" alt="" class="img-w">
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