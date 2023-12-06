<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAVIS - Produk Ikan Cupang</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        /* Tambahkan gaya CSS sesuai kebutuhan Anda */
        .produk-item {
            text-align: center;
            margin: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        .produk-item img {
            width: 200px;
            height: 150px;
            cursor: pointer;
            /* Mengubah kursor saat diarahkan ke gambar */
        }

        .deskripsi {
            display: none;
        }

        .nama-ikan {
            font-weight: bold;
            margin: 10px 0;
        }
    </style>
</head>

<body style="background-color: #f0f0f0;">
    <header style="background-color: #333; color: #fff; padding: 20px; text-align: center;">
        <nav>
            <div class="logo">
                <h1>MAVIS</h1>
            </div>
            <ul style="list-style: none; padding: 0;">
                <li style="display: inline; margin-right: 20px;"><a href="/admin/admin_dashboard"
                        style="text-decoration: none; color: #fff;">Beranda</a></li>
                <li style="display: inline; margin-right: 20px;"><a href="/admin/fish_list"
                        style="text-decoration: none; color: #fff;">Ikan Cupang</a></li>
                <li style="display: inline; margin-right: 20px;"><a href="/admin/manage_stock"
                        style="text-decoration: none; color: #fff;">Kelola Stok Ikan Cupang</a></li>
                <li style="display: inline; margin-right: 20px;"><a href="/admin/cart"
                        style="text-decoration: none; color: #fff;">Kelola Keranjang Belanja</a></li>
                <li style="display: inline; margin-right: 20px;"><a href="/admin/edit_fish"
                        style="text-decoration: none; color: #fff;">Kelola Edit</a></li>
            </ul>
        </nav>
    </header>
<h1>Tambah Data Ikan</h1>

    <form action="/admin/add_fish_process" method="post">
        <label for="nama">Nama Ikan:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" required>

        <label for="deskripsi">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi" required></textarea>

        <button type="submit">Tambahkan</button>
    </form>
</body>


    <script>
        // Fungsi untuk menampilkan deskripsi saat gambar diklik
        const produkItems = document.querySelectorAll('.produk-item');
        produkItems.forEach(item => {
            item.addEventListener('click', () => {
                const deskripsi = item.querySelector('.deskripsi');
                if (deskripsi.style.display === 'none' || deskripsi.style.display === '') {
                    deskripsi.style.display = 'block';
                } else {
                    deskripsi.style.display = 'none';
                }
            });
        });
    </script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Inisialisasi Swiper slider
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>