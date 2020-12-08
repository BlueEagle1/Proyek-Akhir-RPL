<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta charset="viewport" content="width=device-width, initial-scale=1">
	<title>E-Clean | Situs Layanan Sepatu Online</title>
	<link rel="stylesheet" type="text/css" href="/css/Style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        .malasngoding-slider {
            border: 10px solid #efefef;
            position: relative;
            overflow: hidden;
            background: #efefef;
        }

        .malasngoding-slider {
            margin: 20px auto;
            width: 768px;
            height: 450px;
        }

        .isi-slider img {
            width: 768px;
            height: 450px;
            float: left;
        }

        .isi-slider {
            position: absolute;
            width: 3900px;

            /*pengaturan durasi lama tampil gambar bisa di atur di bawah ini*/
            animation-name: slider;
            animation-duration: 16s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
            -webkit-animation-name: slider;
            -webkit-animation-duration: 16s;
            -webkit-animation-timing-function: ease-in-out;
            -webkit-animation-iteration-count: infinite;
            -moz-animation-name: slider;
            -moz-animation-duration: 16s;
            -moz-animation-timing-function: ease-in-out;
            -moz-animation-iteration-count: infinite;
            -o-animation-name: slider;
            -o-animation-duration: 16s;
            -o-animation-timing-function: ease-in-out;
            -o-animation-iteration-count: infinite;
        }


        /*saat gambar di hover oleh cursor mouse maka berhenti slide*/
        .isi-slider:hover {
            -webkit-animation-play-state: paused;
            -moz-animation-play-state: paused;
            -o-animation-play-state: paused;
            animation-play-state: paused;
        }
        }

        .isi-slider img {
            float: right;
        }

        .malasngoding-slider:after {
            font-size: 150px;
            position: absolute;
            z-index: 12;
            color: rgba(255, 255, 255, 0);
            left: 300px;
            top: 80px;
            -webkit-transition: 1s all ease-in-out;
            -moz-transition: 1s all ease-in-out;
            transition: 1s all ease-in-out;
        }

        .malasngoding-slider:hover:after {
            color: rgba(255, 255, 255, 0.6);
        }



        @-moz-keyframes slider {
            0% {
                left: 0;
                opacity: 0;
            }

            2% {
                opacity: 1;
            }

            20% {
                left: 0;
                opacity: 1;
            }

            21% {
                opacity: 0;
            }

            24% {
                opacity: 0;
            }

            25% {
                left: -768px;
                opacity: 1;
            }

            45% {
                left: -768px;
                opacity: 1;
            }

            46% {
                opacity: 0;
            }

            48% {
                opacity: 0;
            }

            50% {
                left: -1536px;
                opacity: 1;
            }

            70% {
                left: -1536px;
                opacity: 1;
            }

            72% {
                opacity: 0;
            }

            74% {
                opacity: 0;
            }

            75% {
                left: -2304px;
                opacity: 1;
            }

            95% {
                left: -2304px;
                opacity: 1;
            }

            97% {
                left: -2304px;
                opacity: 0;
            }

            100% {
                left: 0;
                opacity: 0;
            }
        }

        @-webkit-keyframes slider {
            0% {
                left: 0;
                opacity: 0;
            }

            2% {
                opacity: 1;
            }

            20% {
                left: 0;
                opacity: 1;
            }

            21% {
                opacity: 0;
            }

            24% {
                opacity: 0;
            }

            25% {
                left: -768px;
                opacity: 1;
            }

            45% {
                left: -768px;
                opacity: 1;
            }

            46% {
                opacity: 0;
            }

            48% {
                opacity: 0;
            }

            50% {
                left: -1536px;
                opacity: 1;
            }

            70% {
                left: -1536px;
                opacity: 1;
            }

            72% {
                opacity: 0;
            }

            74% {
                opacity: 0;
            }

            75% {
                left: -2304px;
                opacity: 1;
            }

            95% {
                left: -2304px;
                opacity: 1;
            }

            97% {
                left: -2304px;
                opacity: 0;
            }

            100% {
                left: 0;
                opacity: 0;
            }
        }


        @keyframes slider {
            0% {
                left: 0;
                opacity: 0;
            }

            2% {
                opacity: 1;
            }

            20% {
                left: 0;
                opacity: 1;
            }

            21% {
                opacity: 0;
            }

            24% {
                opacity: 0;
            }

            25% {
                left: -768px;
                opacity: 1;
            }

            45% {
                left: -768px;
                opacity: 1;
            }

            46% {
                opacity: 0;
            }

            48% {
                opacity: 0;
            }

            50% {
                left: -1536px;
                opacity: 1;
            }

            70% {
                left: -1536px;
                opacity: 1;
            }

            72% {
                opacity: 0;
            }

            74% {
                opacity: 0;
            }

            75% {
                left: -2304px;
                opacity: 1;
            }

            95% {
                left: -2304px;
                opacity: 1;
            }

            97% {
                left: -2304px;
                opacity: 0;
            }

            100% {
                left: 0;
                opacity: 0;
            }
        }

        .asw {
            background-color: red;
            width: 480px;
            border: 5px solid #214122;
        }

        .asu {
            background-color: red;
            width: 480px;
            border: 5px solid blue;
        }

        .asa {
            background-color: red;
            width: 480px;
            border: 5px solid blue;
        }

        .promo2 {
            position: relative;
            margin-top: -314px;
            margin-left: 520px;
        }

        .promo3 {
            position: relative;
            margin-top: -314px;
            margin-left: 1041px;
        }

        .http://localhost:8080/foto3 {
            width: 480px;
            height: 200px;
        }

        h4 {
            font-size: 25px;
        }

        input[type="text"],
        button[type="button"] {
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 5px;
        }

        input[type="text"] {
            width: 100px;
            border: 1px solid #bbb;
        }

        button[type="button"] {
            background: #7aac42;
            border: 1px solid #7aac42;
            color: #fff;
            cursor: pointer;
        }

        .tombol {
            margin-left:10px;
        }
    </style>
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
                        <a href="http://localhost:8080/review/review">Review</a>
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
			<p>Home / Promo</p>
		</div>
	</section>
	<!-- about -->
	<section class="about">
		<div class="container">
            <h1>Halaman Promo</h1>
            <?php
            foreach ($promo as $key => $data) { 
                if ($data['judul_artikel'] != null && $data['isi_artikel'] != null) {
                    echo '<h3>'.$data['judul_artikel'].'</h3>';
                    echo '<p>'.$data['isi_artikel'].'</p>';
                    echo '<input type="text" value='.$data['kode_promo'].' id="pilih" readonly />';
                    echo '<button type="button" class="tombol" onclick="copy_text()">Salin</button>';
                    echo '</br></br>';
                }
            }
            ?>
            
        </div>
            <br><br>
		</div>
	</section>
    <script type="text/javascript">
        function copy_text() {
            document.getElementById("pilih").select();
            document.execCommand("copy");
            alert("Kode Promo berhasil dicopy");
        }
    </script>

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