<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="http://localhost:8080/assets/images/filkom.jpg" type="image/ico" />

    <title> Halaman Pemilik E-CLEAN </title>

    <!-- Bootstrap -->
    <link href="http://localhost:8080/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://localhost:8080/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="http://localhost:8080/assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="http://localhost:8080/assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="http://localhost:8080/assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="http://localhost:8080/assets/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <center>
                            &nbsp; <a href="index_pemilik" class="fa fa-mortar-board fa-2x" style="color:#fff;"><span>
                                    <font size="4.95" color="white" face="Helvetica Neue">E-CLEAN SYSTEM</font>
                                </span></a>
                        </center>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="http://localhost:8080/assets/images/lol.png" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Selamat Datang</span>
                            <h2>Alfen Hasiholan Napitupulu</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                            <li><a href="http://localhost:8080/index_pemilik"><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a>
                                <li><a href="#"><i class="fa fa-table"></i> Data Service Sepatu <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/layanan/daftar_layanan">Tampil Data</a></li>
                                        <li><a href="/layanan/tambah_layanan">Tambah Data</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-table"></i> Data Pemesanan<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/pemesanan/daftar_pemesanan">Tampil Data</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-table"></i> Data Promo<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/promo/daftar_promo">Tampil Data</a></li>
                                        <li><a href="/promo/tambah_promo">Tambah Data</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-table"></i> Data Review<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/review/daftar_review">Tampil Data</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-table"></i> Data Transaksi<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/transaksi/daftar_transaksi">Tampil Data</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings" href="#">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen" href="#">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock" href="#">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open">
                                <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="http://localhost:8080/assets/images/lol.png" alt="">Alfen Hasiholan Napitupulu
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out pull-right"></i>Keluar</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content - HALAMAN UTAMA ISI DISINI -->
            <div class="right_col" role="main">
                <center>
                    <font size="6">Sunting Data</font>
                </center>
                <hr>
                <form action="http://localhost:8080/pemesanan/proses_sunting_pemesanan/<?php echo $pemesanan['id_pemesanan'];?>" method="post">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">ID Pemesanan</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="id_pemesanan" class="form-control" size="4" value="<?php echo $pemesanan['id_pemesanan']; ?>" readonly>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">ID Layanan</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="id_layanan" class="form-control" size="4" value="<?php echo $pemesanan['id_layanan']; ?>" readonly>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Pelanggan</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="id_pelanggan" class="form-control" size="4" value="<?php 
                            use App\Models\ModelPelanggan;
                            $pelanggan = new ModelPelanggan();
                                            $data_pelanggan = $pelanggan->peroleh_pelanggan2($pemesanan['id_pelanggan']);
                                            echo $data_pelanggan['nama_lengkap']; ?>" readonly>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Jumlah Pasang Sepatu</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" name="jumlah_pasang_sepatu" class="form-control" value="<?php echo $pemesanan['jumlah_pasang_sepatu']; ?>" readonly>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Pengurangan Harga</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" name="pengurangan_harga" class="form-control" value="<?php echo $pemesanan['pengurangan_harga']; ?>" readonly>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Foto Sepatu</label>
                        <div class="col-md-6 col-sm-6">
                        <img src="<?= base_url('unggahan/'.$pemesanan['foto_sepatu']) ?>" width="519.5" height="400"/>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Total Harga</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" name="pengurangan_harga" class="form-control" value="<?php echo $pemesanan['total_harga']; ?>" readonly>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Pemesanan</label>
                        <div class="col-md-6 col-sm-6">
                        <input type="text" name="pengurangan_harga" class="form-control" value="<?php echo $pemesanan['tanggal_pemesanan']; ?>" readonly>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
                        <div class="col-md-6 col-sm-6">
                        <input type="text" name="status" class="form-control" value="<?php echo $pemesanan['status']; ?>">
                        </div>
                    </div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                        </div>
                </form>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Copyright @ 2020 E-Clean : Hosea Goldstein Mangunsong-Marbun
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
    </div>

    <!-- jQuery -->
    <script src="http://localhost:8080/assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="http://localhost:8080/assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="http://localhost:8080/assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="http://localhost:8080/assets/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="http://localhost:8080/assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="http://localhost:8080/assets/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="http://localhost:8080/assets/skycons/skycons.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="http://localhost:8080/assets/js/custom.min.js"></script>

</body>

</html>