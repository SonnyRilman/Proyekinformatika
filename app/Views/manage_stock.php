
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Stok Ikan Cupang - MAVIS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body style="background-color: #f0f0f0;">
    <header style="background-color: #25383C; color: #fff; padding: 20px; text-align: center; font-family: cursive;">
        <nav>
            <div class="logo">
                <h1>MAVIS</h1>
            </div>
            <ul style="list-style: none; padding: 0; position: relative;">
                <li style="display: inline; margin-right: 20px;"><a href="/"
                        style="text-decoration: none; color: #fff;">Beranda</a></li>
                <li style="display: inline; margin-right: 20px;"><a href="/fish"
                        style="text-decoration: none; color: #fff;">Ikan Cupang</a></li>
                <li style="display: inline; margin-right: 20px;"><a href="/manage_stock"
                        style="text-decoration: none; color: #fff;">Kelola Stok Ikan Cupang</a></li>
                <li style="display: inline; margin-right: 20px;"><a href="/cart"
                        style="text-decoration: none; color: #fff;">Kelola Keranjang Belanja</a></li>
                <li style="display: inline; margin-right: 20px;"><a href="/edit_fish"
                        style="text-decoration: none; color: #fff;">Kelola Edit</a></li>
                <li style="position: absolute; top: 0; right: 80px;"><a href="/login" class="btn-login">Login</a></li>
                <li style="position: absolute; top: 0; right: 20px;"><a href="/" class="btn-daftar">Daftar</a></li>
            </ul>
        </nav>
    </header>
    <section class="content" style="text-align: center; padding: 20px;">
        <h2>Kelola Stok Ikan Cupang</h2>
        <form method="post" action="/admin/manage_stock" style="max-width: 400px; margin: 0 auto;">
            <div class="form-group">
                <label for="fish_id">Pilih Ikan Cupang:</label>
                <select id="fish_id" name="fish_id" class="form-control">
                    <!-- Pilihan ikan cupang yang tersedia -->
                    <option value="1">Ikan Cupang A</option>
                    <option value="2">Ikan Cupang B</option>
                    <!-- Tambahkan pilihan lain sesuai kebutuhan -->
                </select>
            </div>
            <div class="form-group">
                <label for="stock">Stok Baru:</label>
                <input type="number" id="stock" name="stock" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Perbarui Stok</button>
        </form>
    </section>
    <footer style="text-align: center;">
        <p>&copy; 2023 Betafish MAVIS - Penjualan Ikan Cupang</p>
    </footer>
</body>
</html>
