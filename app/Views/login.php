<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/style2.css" />
  <title>Daftar dan Masuk E-Clean</title>
</head>

<body>
  <!-- navbar -->

  <!-- end navbar -->


  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="/otorisasi/masuk/" class="sign-in-form" method="post">
          <h2 class="title">Masuk</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" />
          </div>
          <input type="submit" value="Login" class="btn solid" />
          <p class="social-text">Atau masuk dengan akun Anda yang lain :</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-yahoo"></i>
            </a>
          </div>
        </form>
        <form action="<?php echo base_url('otorisasi/daftar'); ?>" class="sign-up-form" method="post">
          <h2 class="title">Daftar</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="conf_password" placeholder="Confirm Password" />
          </div>
          <div class="input-field">
            <i class="fas fa-house-user"></i>
            <input type="address" name="address" placeholder="Address" />
          </div>
          <div class="input-field">
            <i class="fas fa-mobile"></i>
            <input type="text" name="phone_number" placeholder="Phone Number" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="full_name" placeholder="Full Name" />
          </div>
          <input type="submit" class="btn" value="Sign up" />
          <p class="social-text">Atau daftar dengan akun Anda yang lain :</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-yahoo"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Belum punya akun?</h3>
          <p>
            Kuy daftar sekarang dan nikmati sensasinya!!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Daftar
          </button>
        </div>
        <img src="/assets/adidas.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Sudah punya akun?</h3>
          <p>
            Bisa langsung masuk aja bosquuh!
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Masuk
          </button>
        </div>
        <img src="/assets/jordan.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="/app.js"></script>
  <?php
  if (session()->get('salah_password')) {
    echo '<script type="text/javascript">
      alert(\'' . session()->get('salah_password') . '\');
      </script>';
  }
  ?>
  <?php
  if (session()->get('username_tidak_terdaftar')) {
    echo '<script type="text/javascript">
      alert(\'' . session()->get('username_tidak_terdaftar') . '\');
      </script>';
  }
  ?>
</body>

</html>