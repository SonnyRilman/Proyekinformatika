<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="profil.css">
    <link rel="stylesheet" href="intro.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/ikan.css') ?>" />
    <title>Profil </title>
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

    <section>
        <div class="box">
            <div class="card">
                <div class="imgBox">
                    <img src="foto/sr.png" alt="Foto Sonny Rilman">
                </div>
                <div class="details">
                    <h2>Sonny Rilman<br><span>214314123</span></h2>
                </div>
            </div>

            <div class="card">
                <div class="imgBox">
                    <img src="jj.png" alt="Foto Angel">
                </div>
                <div class="details">
                    <h2>Angel <br><span>215314122</span></h2>
                </div>
            </div>

            <div class="card">
                <div class="imgBox">
                    <img src="uss.png" alt="Foto Mateus">
                </div>
                <div class="details">
                    <h2>Mateus <br><span>215314128</span></h2>
                </div>
            </div>

            <div class="card">
                <div class="imgBox">
                    <img src="valen.png" alt="Foto Valen">
                </div>
                <div class="details">
                    <h2>Valen <br><span>215314121</span></h2>
                </div>
            </div>

            <!-- Profil Baru -->
            <div class="card">
                <div class="imgBox">
                    <img src="foto/irvandy.png" alt="Foto irvandy">
                </div>
                <div class="details">
                    <h2>Irvandy <br><span>215314124</span></h2>
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