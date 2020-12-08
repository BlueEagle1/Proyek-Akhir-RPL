<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/style2.css" />
  <link rel="stylesheet" type="text/css" href="/css/navbar.css">
  <title>Masuk Pemilik E-Clean</title>
</head>

<body>
  <!-- navbar -->

  <!-- end navbar -->


  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="/otorisasi/masuk_pemilik/" class="sign-in-form" method="post">
          <h2 class="title">Masuk Pemilik</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name='username' placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name='password' placeholder="Password" />
          </div>
          <input type="submit" value="Login" class="btn solid" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <img src="/assets/adidas.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="/app.js"></script>
  <?php
    if (session()->get('salah_password')) {
      echo '<script type="text/javascript">
      alert(\''.session()->get('salah_password').'\');
      </script>';
    }
    ?>
    <?php
    if (session()->get('username_tidak_terdaftar')) {
      echo '<script type="text/javascript">
      alert(\''.session()->get('username_tidak_terdaftar').'\');
      </script>';
    }
    ?>  
</body>

</html>