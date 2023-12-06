
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="intro.css">
    <title>Portfolio</title>
</head>

<body>
    <header class="container">
        <div class="page-header">
            <div class="logo">
                <a href="#">Logo.</a>
            </div>
            <input type="checkbox" id="click">

            <label for="click" class="mainicon">
                <div class="menu">
                    <i class='bx bx-menu'></i>
                </div>
            </label>
            <ul>
                <li><a href="#"  class="active" style="--navAni:1">Home</a></li>
                <li><a href="/about" style="--navAni:2">About</a></li>
                <li><a href="/jenis_ikan" style="--navAni:3">Produk Ikan</a></li>
                <li><a href="/testimoni" style="--navAni:4">Testimoni</a></li>
                <li><a href="#" style="--navAni:5">Contact</a></li>
            </ul>
            <div class="login-register">
            <a href="/login" style="text-decoration: none; color: #fff;">Login</a>
            <a href="/registrasi" style="text-decoration: none; color: #fff; margin-left: 20px;">Daftar</a>
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
    </script>
    
</body>

</html>