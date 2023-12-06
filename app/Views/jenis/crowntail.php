<!-- detail_ikan_cupang.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="intro.css">


    <title>MAVIS - Detail Ikan Cupang</title>
    <style>
        /* Add this CSS to your existing styles or replace the existing styles in your <style> tag */
        .betta_taital {
            width: 100%;
            font-size: 40px;
            color: #f26522;
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
            margin-top: 20px;
            /* text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.8); */
        }

        /* Tambahkan CSS ini pada gaya yang sudah ada atau gantikan gaya yang sudah ada di tag <style> atau file style.css eksternal Anda */

        .betta_section_2 .row {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 0 -10px;
            /* Tambahkan margin negatif untuk mengkompensasi margin antar kolom */
        }

        .col-lg-4 {
            flex: 0 0 calc(33.333% - 70px);
            /* 20px adalah total margin antar kolom */
            margin-bottom: 20px;
            padding: 0 10px;
            /* Tambahkan padding untuk membuat ruang antar kolom */
        }

        /* Sesuaikan gaya untuk penataan ruang yang lebih baik */
        .betta_text {
            width: 100%;
            font-size: 20px;
            color: #30302e;
            text-align: center;
            font-weight: bold;
            padding-bottom: 5px;
        }

        .price_text {
            width: 100%;
            font-size: 16px;
            color: #f26522;
            text-align: center;
            margin: 0px;
        }

        .betta_img img {
            max-width: 300px;
            max-height: 200px;
            object-fit: cover;
            border-radius: 5px;

        }

        .box_main {
            width: 100%;
            background-color: #ffffff;
            height: auto;
            padding: 20px;
            /* box-shadow: 0px 0 30px 10px #f0f0f0; */
            margin-bottom: 20px;
            text-align: center;
            transition: box-shadow 0.3s ease;
            border-radius: 30px;
        }

        .box_main:hover {
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
        }

        .btn_main {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .buy_bt a,
        .seemore_bt a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            background-color: #f26522;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            overflow: hidden;
        }

        .buy_bt a::before,
        .seemore_bt a::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, #fff, transparent);
            /* Gradient garis putih */
            transition: left 0.3s ease;
            /* Efek transisi perpindahan garis */
        }

        .buy_bt a:hover::before,
        .seemore_bt a:hover::before {
            left: 100%;
            /* Pindahkan garis ke kanan saat tombol dihover */
            animation: moveLine 1s linear infinite;
            /* Animasi berjalan terus, hanya ketika tombol dihover */
        }

        @keyframes moveLine {
            0% {
                left: -100%;
                /* Awal animasi di luar kiri */
            }

            100% {
                left: 100%;
                /* Akhir animasi di luar kanan */
            }
        }



        .buy_bt a:hover,
        .seemore_bt a:hover {
            background-color: #262626;
        }
    </style>
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
                <li><a href="/about" style="--navAni:2">About</a></li>
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

    <div class="betta_section">
        <div id="betta_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="betta_taital">Betta Shop</h1>
                        <div class="betta_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="betta_text">Halfmoon Betta</h4>
                                        <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                                        <div class="betta_img"><img
                                                src="assets/foto-ikan/halfmoon/halfmoon-avatarRed.png"></div>
                                        <div class="btn_main">
                                            <!-- <div class="buy_bt"><a href="#">Buy Now</a></div> -->
                                            <div class="seemore_bt"><a href="halfmoon.html">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="betta_text">Plakat Betta</h4>
                                        <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                                        <div class="betta_img"><img src="assets/foto-ikan/plakat/plakat-avatar.png">
                                        </div>
                                        <div class="btn_main">
                                            <!-- <div class="buy_bt"><a href="#">Buy Now</a></div> -->
                                            <div class="seemore_bt"><a href="plakat.html">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="betta_text">Giant Betta</h4>
                                        <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                                        <div class="betta_img"><img
                                                src="assets/foto-ikan/plakat/plakat-multicolors.png"></div>
                                        <div class="btn_main">
                                            <!-- <div class="buy_bt"><a href="#">Buy Now</a></div> -->
                                            <div class="seemore_bt"><a href="giant.html">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="betta_text">Female Halfmoon</h4>
                                        <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                                        <div class="betta_img"><img src="assets/foto-ikan/female/female-halfmoon.png">
                                        </div>
                                        <div class="btn_main">
                                            <!-- <div class="buy_bt"><a href="#">Buy Now</a></div> -->
                                            <div class="seemore_bt"><a href="halfmoon">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="betta_text">Female Plakat</h4>
                                        <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                                        <div class="betta_img"><img src="assets/foto-ikan/female/female-plakat.png">
                                        </div>
                                        <div class="btn_main">
                                            <!-- <div class="buy_bt"><a href="#">Buy Now</a></div> -->
                                            <div class="seemore_bt"><a href="plakat.html">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="betta_text">Crowntail Betta</h4>
                                        <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                                        <div class="betta_img"><img src="assets/foto-ikan/crowntail/crowntail-red.png">
                                        </div>
                                        <div class="btn_main">
                                            <!-- <div class="buy_bt"><a href="#">Buy Now</a></div> -->
                                            <div class="seemore_bt"><a href="giant.html">See More</a></div>
                                        </div>
                                    </div>
                                </div>
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