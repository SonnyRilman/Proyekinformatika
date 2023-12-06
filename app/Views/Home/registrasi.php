<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrasi</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/daftar.css') ?>" />
</head>

<body>
    <div class="register-box">
        <h2>Registrasi</h2>

        <form method="post" action="<?= site_url('registrasi/simpanRegistrasi') ?>">
            <div class="user-box">
                <input type="text" name="nama[]" required>
                <label for="">Username</label>
            </div>
            <div class="user-box">
                <input type="email" name="email[]" required>
                <label for="">Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password[]" required>
                <label for="">Password</label>
            </div>

            <div class="user-box">
                <input type="radio" id="user" name="pilihan[]" value="Costumer">
                <label for="user">Costumer</label>
            </div>

            <button type="submit">Daftar</button>
        </form>
    </div>
</body>

</html>