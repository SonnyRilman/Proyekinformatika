<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="intro.css">

    <title>CONTACT- Penjualan Ikan Cupang</title>
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
                <li><a href="/about" style="--navAni:2">About</a></li>
                <li><a href="/jenis-ikan" style="--navAni:3">Produk Ikan</a></li>
                <li><a href="/testimoni" style="--navAni:4">Testimoni</a></li>
                <li><a href="/contact" class="active" style="--navAni:5">Contact</a></li>
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
                <h1>Contact <span style="color:#f9532d;">MAVIS</span></h1>
                <br>
                <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, silakan hubungi kami melalui formulir di
                    bawah ini:</p>

                <form action="submit_form.php" method="post">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Pesan:</label>
                    <textarea id="message" name="message" required></textarea>

                    <button type="submit">Kirim Pesan</button>
                </form>
            </div>
            <div class="img-sec">
                <div class="images">
                    <img src="contact_image.jpg" alt="" class="img-w">
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