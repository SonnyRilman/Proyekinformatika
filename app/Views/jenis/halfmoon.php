<!-- halfmoon.php -->

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('assets/css/ikan.css') ?>" />
    <title>MAVIS - Halfmoon</title>
    
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
                <li><a href="/home"  class="active" style="--navAni:1">Home</a></li>
                <li><a href="/about" style="--navAni:2">About</a></li>
            <li class="dropdown">
            <a href="/jenis-ikan" style="--navAni:3">Produk Ikan <i class='bx bx-chevron-down'></i></a>
            <ul class="dropdown-content">
                <li><a href="/jenis/halfmoon">Halfmoon</a></li>
                <li><a href="/jenis/plakat"style="--navAni:6">Plakat</a></li>
                <li><a href="/jenis/giant"style="--navAni:7">Giant</a></li>
                <li><a href="/jenis/femaleplakat"style="--navAni:8">Female Plakat</a></li>
                <li><a href="/jenis/femalehalfmoon"style="--navAni:9">Female Halfmoon</a></li>
                <li><a href="/jenis/crowntail"style="--navAni:10">Crowntail</a></li>

            </ul>
            </li>   
                     <li><a href="/testimoni" style="--navAni:4">Testimoni</a></li>
                <li><a href="/kontak" style="--navAni:5">Contact</a></li>
                </ul>
            <div class="login-register">
            <a href="/login" cllas="active" style="--navAni:5">Login</a>
            <a href="/registrasi" cllas="active" style="--navAni:6">Daftar</a>
        </div>
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
                     <h1 class="betta_taital">Halfmoon Betta</h1>
                     <div class="betta_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="betta_text">Halfmoon Betta</h4>
                                 <p class="price_text">$<span style="color: #262626;">100.00 USD</span></p>
                                 <div class="betta_img"><img src="assets/Foto-ikan/halfmoon/halfmoon-candyMulticolor"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <!-- <div class="seemore_bt"><a href="halfmoon.html">See More</a></div> -->
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                              <h4 class="betta_text">Halfmoon Betta</h4>
                              <p class="price_text">$<span style="color: #262626;">100.00 USD</span></p>
                                 <div class="betta_img"><img src="assets/foto-ikan/plakat/plakat-avatar.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <!-- <div class="seemore_bt"><a href="plakat.html">See More</a></div> -->
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                              <h4 class="betta_text">Halfmoon Betta</h4>
                              <p class="price_text">$<span style="color: #262626;">100.00 USD</span></p>
                                 <div class="betta_img"><img src="assets/foto-ikan/plakat/plakat-multicolors.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <!-- <div class="seemore_bt"><a href="giant.html">See More</a></div> -->
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                              <h4 class="betta_text">Halfmoon Betta</h4>
                              <p class="price_text">$<span style="color: #262626;">100.00 USD</span></p>
                                 <div class="betta_img"><img src="assets/foto-ikan/female/female-halfmoon.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <!-- <div class="seemore_bt"><a href="halfmoon.html">See More</a></div> -->
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                              <h4 class="betta_text">Halfmoon Betta</h4>
                              <p class="price_text">$<span style="color: #262626;">100.00 USD</span></p>
                                 <div class="betta_img"><img src="assets/foto-ikan/female/female-plakat.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <!-- <div class="seemore_bt"><a href="plakat.html">See More</a></div> -->
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                              <h4 class="betta_text">Halfmoon Betta</h4>
                                 <p class="price_text">$<span style="color: #262626;">100.00 USD</span></p>
                                 <div class="betta_img"><img src="assets/foto-ikan/crowntail/crowntail-red.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <!-- <div class="seemore_bt"><a href="giant.html">See More</a></div> -->
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
