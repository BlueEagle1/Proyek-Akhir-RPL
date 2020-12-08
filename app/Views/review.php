<!DOCTYPE html>
<html>

<head>
    <title>Sepatu | Halaman Review</title>
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/stylereview.css">
    <link rel="stylesheet" type="text/css" href="/css/navbar.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
</head>

<body>
<nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="#" class="text-gray">E-Clean</a>
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
                        <a href="/review">Review</a>
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

    <section id="deskripsi">
        <div class="container">
            <h1>Halaman Review</h1>
            <p>
                Ini review boongan jangan dibawa serius
            </p>
        </div>
    </section>


    <section id="add">
        <div class="container">
            <h1>Komentar Kuyy!!</h1>
            <form action="sisip_review" method="post">
                <input type="text" name="name" id="name" value="" placeholder="Name">
                <textarea name="comment" id="comment" value="" placeholder="Comment"></textarea>
                <input type="submit" name="submit" value="Add Comment">
            </form>
        </div>
    </section>

    <section id="isi">
        <div class="container">
            <?php
            foreach ($review as $key => $data) { 
                echo '<div class="box">';
                echo '<h3>'.$data['nama_pelanggan'].'</h3>';
                echo '<p>'.$data['komen_pelanggan'].'</p>';
                echo '</div>';
            }
            ?>
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