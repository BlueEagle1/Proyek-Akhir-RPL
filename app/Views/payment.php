<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta charset="viewport" content="width=device-width, initial-scale=1">
    <title>E-Clean | Situs Layanan Sepatu Online</title>
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/css/Style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="http://localhost:8080/" class="text-gray">E-Clean</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="/">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="/about">About</a>
                    </li>
                    <li class="nav-link">
                        <a href="/promo/promo">Promo</a>
                    </li>
                    <?php
                    if (!empty(session()->get('username'))) {
                        echo '<li class="nav-link">';
                        echo  '<a href="/order">Order</a>';
                        echo '</li>';
                    }
                    ?>
                    <li class="nav-link">
                        <a href="/review">Review</a>
                    </li>
                    <?php
                    if (!empty(session()->get('username'))) {
                        echo '<li class="nav-link">';
                        echo '<a href="/logout">Logout</a>';
                        echo '</li>';
                    } else {
                        echo '<li class="nav-link">';
                        echo '<a href="/login">Login User</a>';
                        echo '</li>';
                        echo '<li class="nav-link">';
                        echo '<a href="/login_owner">Login Owner</a>';
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="social text-gray">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>

    <!-- label -->
    <section class="label">
        <div class="container">
            <p>Home / Order / New Order</p>
        </div>
    </section>
    <!-- about -->
    <section class="about">
        <div class="container">
            <h1>HALAMAN PEMBAYARAN</h1>
            <h3>SILAKAN TRANSFER MELALUI BANK KELOMPOK 2 DENGAN NO. REK. 123456</h3>
            <form action="http://localhost:8080/order/new_order/confirm_payment" class="formulir" method="get">
                <h3>Anda harus membayar sebesar Rp. <?php
                    $hargaAwal = $layanan_dipesan['harga_layanan'];
                    $harga = $layanan_dipesan['harga_layanan'];
                    if (isset($promo)) {
                        if ($promo['opsi_pengurangan'] == 'Angka Langsung') {
                            $harga = $harga - ($promo['pengurangan'] * $jumlah);
                        } else {
                            $harga = ($harga * $jumlah) * ((100 - $promo['pengurangan']) / 100);
                        }
                    } else {
                        $harga = $harga * $jumlah;
                    }
                    echo $harga?></h3>
                <p>Unggah Bukti Pembayaran Anda</p>
                <div class="pembungkus-tombol">
                    <label class="tombol-unggah" for="berkas-yang-diunggah">Unggah Foto</label>
                    <input accept=".jpeg,.png,.tiff" id="berkas-yang-diunggah" multiple name="foto_bukti" required type="file" />
                </div>
                <p>Unggah Foto Sepatu Anda</p>
                <div class="pembungkus-tombol">
                    <label class="tombol-unggah" for="berkas-yang-diunggah2">Unggah Foto</label>
                    <input accept=".jpeg,.png,.tiff" id="berkas-yang-diunggah2" multiple name="foto_sepatu" required type="file" />
                </div>
                <input type="text" hidden name="id_layanan" value="<?php echo cache()->get('cache_layanan')?>">
                <input type="text" hidden name ="id_pelanggan" value="<?php echo $pelanggan['id_pelanggan']?>">
                <input type="text" hidden name ="jumlah" value="<?php echo $jumlah?>">
                <input type="text" hidden name="pengurangan" value="<?php 
                if (isset($promo)) {
                    $pengurangan = ($hargaAwal * $jumlah) * ($promo['pengurangan'] / 100);
                    echo $pengurangan;
                    } else {
                        echo 0;
                    }?>">
                <input type="text" hidden name ="total_harga" value="<?php echo $harga?>">
                <input type="text" hidden name ="tanggal_pemesanan" value="<?php
                date_default_timezone_set("Asia/Jakarta");
                echo date("Y-m-d H:i:s");?>">
                <input id="tombol-cek" type="submit" value="BAYAR SEKARANG"></input>
            </form>
            <div class="tombol-link">
                <a class="link-putih" href="http://localhost:8080/cancel_order/" onclick="return confirm('Yakin ingin membatalkan pemesanan ini?')">BATALKAN PEMESANAN</a>
            </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia atque nemo ad modi officiis
                    iure, autem nulla tenetur repellendus.</p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>Newsletter</h2>
                <p>Stay update with our latest</p>
                <div class="form-element">
                    <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
            <div class="instagram" data-aos="fade-left" data-aos-delay="200">
                <h2>Instagram</h2>
                <div class="flex-row">
                    <img src="http://localhost:8080/assets/instagram/thumb-card3.png" alt="insta1">
                    <img src="http://localhost:8080/assets/instagram/thumb-card4.png" alt="insta2">
                    <img src="http://localhost:8080/assets/instagram/thumb-card5.png" alt="insta3">
                </div>
                <div class="flex-row">
                    <img src="http://localhost:8080/assets/instagram/thumb-card6.png" alt="insta4">
                    <img src="http://localhost:8080/assets/instagram/thumb-card7.png" alt="insta5">
                    <img src="http://localhost:8080/assets/instagram/thumb-card8.png" alt="insta6">
                </div>
            </div>
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Follow us</h2>
                <p>Let us be Social</p>
                <div>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2019 All rights reserved | made by
                <a href="https://www.youtube.com/c/dailytuition" target="_black">E-Clean <i class="fab fa-youtube"></i>
                    Channel</a>
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>
</body>

</html>