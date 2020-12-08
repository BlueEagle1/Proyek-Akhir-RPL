<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta charset="viewport" content="width=device-width, initial-scale=1">
	<title>E-Clean | Situs Layanan Sepatu Online</title>
	<link rel="stylesheet" type="text/css" href="/css/Style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
	<nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="/" class="text-gray">E-Clean</a>
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
                    if(!empty(session()->get('username'))) {
			                echo '<li class="nav-link">';
                      echo  '<a href="/order">Order</a>';
                      echo '</li>';
                    }               
                    ?>
                    <li class="nav-link">
                        <a href="/review/review">Review</a>
                    </li>
                    <?php
                    if(!empty(session()->get('username'))) {
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
			<p>Home / About</p>
		</div>
	</section>
	<!-- about -->
	<section class="about">
		<div class="container">
			<img src="/assets/Blog-post/care.jpg" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
            <h3>ABOUT</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</strong>, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</strong>, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
			<h3>VISI</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</strong></p>
			<h3>MISI</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</strong></p>
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
                    <img src="/assets/instagram/thumb-card3.png" alt="insta1">
                    <img src="/assets/instagram/thumb-card4.png" alt="insta2">
                    <img src="/assets/instagram/thumb-card5.png" alt="insta3">
                </div>
                <div class="flex-row">
                    <img src="/assets/instagram/thumb-card6.png" alt="insta4">
                    <img src="/assets/instagram/thumb-card7.png" alt="insta5">
                    <img src="/assets/instagram/thumb-card8.png" alt="insta6">
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
                <a href="www.youtube.com/c/dailytuition" target="_black">E-Clean <i class="fab fa-youtube"></i>
                    Channel</a>
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>
</body>
</html>