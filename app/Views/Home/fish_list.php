<!-- detail_ikan_cupang.php -->

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" href="<?= base_url('assets/css/ikan.css') ?>" />
   <link rel="stylesheet" href="intro.css">
   <title>MAVIS - Detail Ikan Cupang</title>

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
               <a href="/about" style="--navAni:2">About <i class='bx bx-chevron-down'></i></a>
               <ul class="dropdown-content">
                  <li><a href="#">About MAVIS</a></li>
                  <li><a href="#">Pofile Founders</a></li>
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
                              <div class="betta_img"><img src="assets/foto-ikan/halfmoon/halfmoon-avatarRed.png"></div>
                              <div class="btn_main">
                                 <!-- <div class="buy_bt"><a href="#">Buy Now</a></div> -->
                                 <div class="seemore_bt"><a href="<?= base_url('jenis/halfmoon') ?>">See More</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                           <div class="box_main">
                              <h4 class="betta_text">Plakat Betta</h4>
                              <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                              <div class="betta_img"><img src="assets/foto-ikan/plakat/plakat-avatar.png"></div>
                              <div class="btn_main">
                                 <!-- <div class="buy_bt"><a href="#">Buy Now</a></div> -->
                                 <div class="seemore_bt"><a href="jenis/plakat">See More</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                           <div class="box_main">
                              <h4 class="betta_text">Giant Betta</h4>
                              <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                              <div class="betta_img"><img src="assets/foto-ikan/plakat/plakat-multicolors.png"></div>
                              <div class="btn_main">
                                 <!-- <div class="buy_bt"><a href="#">Buy Now</a></div> -->
                                 <div class="seemore_bt"><a href="jenis/giant">See More</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                           <div class="box_main">
                              <h4 class="betta_text">Female Halfmoon</h4>
                              <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                              <div class="betta_img"><img src="assets/foto-ikan/female/female-halfmoon.png"></div>
                              <div class="btn_main">
                                 <!-- <div class="buy_bt"><a href="#">Buy Now</a></div> -->
                                 <div class="seemore_bt"><a href="jenis/femalehalfmoon">See More</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                           <div class="box_main">
                              <h4 class="betta_text">Female Plakat</h4>
                              <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                              <div class="betta_img"><img src="assets/foto-ikan/female/female-plakat.png"></div>
                              <div class="btn_main">
                                 <!-- <div class="buy_bt"><a href="#">Buy Now</a></div> -->
                                 <div class="seemore_bt"><a href="jenis/femaleplakat">See More</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                           <div class="box_main">
                              <h4 class="betta_text">Crowntail Betta</h4>
                              <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                              <div class="betta_img"><img src="assets/foto-ikan/crowntail/crowntail-red.png"></div>
                              <div class="btn_main">
                                 <!-- <div class="buy_bt"><a href="#">Buy Now</a></div> -->
                                 <div class="seemore_bt"><a href="jenis/crowntail">See More</a></div>
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