<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>" />
  <title>Login Glow in the Dark</title>

</head>

<body>
  <div class="box">
    <div class="form">
      <h2>Sign in</h2>
      <form action="prosesLogin" method="post">
        <div class="inputBox">
          <input type="text" name="username" required>
          <span>Username</span>
          <i></i>
        </div>
        <div class="inputBox">
          <input type="password" name="password" required>
          <span>Password</span>
          <i></i>
        </div>
        <div class="links">
          <a href="#">Forgot Password</a>
          <a href="registrasi">Signup</a>
        </div>
        <input type="submit" value="Login">
        <?php if (isset($error)) { ?>
          <div class="alert alert-danger">
            <?php echo $error; ?>
          </div>
        <?php } ?>

      </form>
    </div>
  </div>
</body>


</html>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://startbootstrap.com/templates/agency/font-awesome-4.1.0/css/font-awesome.min.css">
  <style>
    body {
      overflow-x: hidden;
      font-family: "Roboto Slab", "Helvetica Neue", Helvetica, Arial, sans-serif;
      background-color: #000;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      transition: background 2s ease;
    }

    body.day {
      background: #fff;
      transition: background 
      2s ease;
    }
    .dayNight {
      cursor: pointer;
      position: absolute;
      top: 10%;left: 50%;
      transform: translate(
        -50%, -50%);
    }
    .dayNight input {
      display: none;
    }

    .dayNight input+div {
      border-radius: 50%;
      width: 36px;
      height: 36px;
      position: relative;
      box-shadow: inset 16px -16px 0 0 #fff;
      transform: scale(1) rotate(-2deg);
      transition: box-shadow 0.5s ease 0s, transform 0.4s ease 0.1s;
    }

    .dayNight input+div:before 
    {
      content: "";
      width: inherit;
      height: inherit;
      border-radius: inherit;
      position: absolute;
      left: 0;top: 0;
      transition: background 
      0.3s ease;
    }

    .dayNight input+div:after {
      content: "";
      width: 8px;
      height: 8px;
      border-radius: 50%;
      margin: -4px 0 0 -4px;
      position: absolute;
      top: 50%;
      left: 50%;
      box-shadow: 0 -23px 0 
      #ffff00, 0 23px 0 #ffff00, 
      23px 0 0 #ffff00, -23px 0 0 
      #ffff00, 15px 15px 0 #ffff00, 
      -15px 15px 0 #ffff00, 15px -15px 0 
      #ffff00, -15px -15px 0 #ffff00;
      transform: scale(0);
      transition: all 0.3s ease;
    }

    .dayNight input:checked+div {
      box-shadow: inset 32px -32px 0 0 #fff;
      transform: scale(0.5) rotate(0deg);
      transition: transform 0.3s ease 0.1s, box-shadow 0.2s ease 0s;
    }

    .dayNight input:checked+div:before {
      background: #ffff00;
      transition: background 0.3s ease 0.1s;
    }

    .dayNight input:checked+div:after {
      transform: scale(1.5);
      transition: transform 0.5s ease 0.15s;
    }

    /* 
    login form codings here */
    
    .box {
      width: 400px;
      height: 450px;
      border: 2px solid #625d5d;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 20px;
      backdrop-filter: blur(15px);
      background: transparent;
      background: linear-gradient(
      180deg,transparent, #00fffc);
      transition: background 2s ease;

      /* background-color: transparent;
      animation: colorReveal 5s infinite; */
    }

    /* @keyframes colorReveal {
      0% {
        background-color: transparent;
      }

      50% {
        background-color: black;
      }
      100% {
        background-color: transparent;
      }

    } */
    h2 {
      font-size: 2em;
      color: #fff;
      font-weight: 800;
      text-align: center;
    }

    .inputbox {
      position: relative;
      margin: 30px 0;
      width: 300px;
      border-bottom: 2px solid#fff;
    }

    .inputbox label {
      position: absolute;
      top: 50%;
      left: 5px;
      transform: translateY(-50%);
      color: #fff;
      font-size: 1em;
      pointer-events: none;
      transition: 0.5s;
    }

    input:focus~label {
      top: -5px;
    }

    input:focus~label {
      top: -5px;
    }

    .inputbox input {
      width: 100%;
      height: 50px;
      background: transparent;
      border: none;
      outline: none;
      font-size: 1em;
      padding: 0 35px 0 5px;
      color: #000;
    }

    .inputbox ion-icon {
      position: absolute;
      right: 8px;
      color: #fff;
      font-size: 1.2em;
      top: 20px;
    }


    button {
      width: 100%;
      height: 40px;
      border-radius: 40px;
      background-color: #e6e2e2;
      border: none;
      outline: none;
      cursor: pointer;
      font-size: 1.3em;
      font-weight: 700;
    }

    .forget {
      display: flex;
      justify-content: space-between;
      margin: 10px 0 15px;
      font-size: 0.9em;
      color: #fff;
    }

    .forget label:nth-child(2) {
      order: 1;
    }

    .forget label {
      display: flex;
      align-items: center;
    }

    .forget label input[ type="checkbox"] {
      margin-right: 6px
    }

    .forget label a {
      color: #fff;
      text-decoration: none;
    }

    .forget label a:hover {
      text-decoration: underline;
    }

    .register {
      font-size: 0.9em;
      color: #fff;
      text-align: center;
      margin: 20px 0 15px;
    }

    .register p a {
      text-decoration: none;
      color: #fff;
      font-weight: 800;
    }

    .register p a:hover {
      text-decoration: underline;
    }

    body.day .box {
      border: 2px solid #000;
      color: #000;
      background: rgba(255, 255, 255, 0.9);
    }

    body.day .forget label {
      color: #000;
    }

    body.day .box {
      border: 2px solid #000;
      color: #000;
      background: rgba(255, 255, 255, 0.9);
    }

    body.day .forget label {
      color: #000;
    }

    .inputbox input,
    .inputbox label {
      color: #fff;

    }

    h2 {
      color: #fff;
    }

    .forget label {
      color: #fff;
    }

    body.day .inputbox input,
    body.day .inputbox label {
      color: #000;
    }

    body.day h2 {
      color: #000;
    }

    body.day .forget label {
      color: #000;
    }

    body.day .register {
      color: #000;
    }

    body.day .register p a {
      color: #000;
    }

    body.day .inputbox {
      border-bottom: 2px solid#000;
    }

    body.day .inputbox ion-icon {
      color: #000;
    }

    body.day .box {
      background: linear-gradient(180deg, transparent, #ffff00);
      transition: background 2s ease;
    }
  </style>
</head>

<body>

  <body id="page-top" class="index" data-pinterest-extension-installed="cr1.3.4">

    <label class="dayNight">
      <input type="checkbox">
      <div></div>
    </label>
    <div class="box">

      <form action="prosesLogin" method="post">

        <h2>Login Here</h2>

        <div class="inputbox">
          <ion-icon name=""></ion-icon>
        <input type="text" name="username" required>
          <label for="">Username:</label>
        </div>

        <div class="inputbox">
          <ion-icon name="lock-closed-outline"></ion-icon>
         <input type="password" name="password" required>
          <label for="">Password:</label>
        </div>

        <div class="forget">
          <label for="">
            <input type="checkbox">Remember me
          </label>
          <label for="">
            Forget Password
          </label>
        </div>
       
         <input type="submit" value="Log In">
              <?php if (isset($error)) { ?>
            <div class="alert alert-danger">
                <?php echo $error; ?>
            </div>
        <?php } ?>


        <div class="register">
          <p>Don't have an account ? <a href="registrasi">register</a></p>
        </div>
      </form>

    </div>



    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>


  </body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $('.dayNight input').change(function () {
      $('body').toggleClass('day', $(this).is(':checked'))
    });
  </script>

</body>

</html> -->