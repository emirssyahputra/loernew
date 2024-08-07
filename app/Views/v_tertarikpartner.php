<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Partnership</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('plugins/bootstrap/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/animate-css/animate.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/slick/slick.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/slick/slick-theme.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/colorbox/colorbox.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>
    <div class="body-inner">

        <div id="top-bar" class="top-bar">

        </div>

        <!-- Header start -->
        <header id="header" class="header-web">
            <div class="site-navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0">

                                <div class="logo">
                                    <a class="d-block" href="<?php echo site_url('/'); ?>">
                                        <img loading="lazy" src="<?= base_url('images/logo.png'); ?>" alt="Loer Group">
                                    </a>
                                </div>

                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div id="navbar-collapse" class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav ml-auto align-items-center">
                                        <li class="nav-item"><a class="nav-link"
                                                href="<?php echo site_url('/'); ?>">Home</a></li>

                                        <li class="nav-item"><a class="nav-link"
                                                href="<?php echo site_url('Career'); ?>">Career</a></li>

                                        <li class="nav-item"><a class="nav-link"
                                                href="<?php echo site_url('About'); ?>">About</a></li>

                                        <li class="nav-item"><a class="nav-link"
                                                href="<?php echo site_url('Partnership'); ?>">Partner</a></li>

                                        <li class="header-get-a-quote">
                                            <a class="btn btn-primary" href="<?php echo site_url('Login'); ?>">LOGIN</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-heading">
                                <h1 class="banner-title" style="font-size: 36px;">Saya Tertarik Menjadi Partner</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="registration" class="registration">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mt-7 mt-lg-0">
                        <div class="registration-form">
                            <?php if (session()->getFlashdata('success')): ?>
                                <script>
                                    alert("<?= session()->getFlashdata('success') ?>");
                                </script>
                            <?php endif; ?>

                            <?php if (session()->getFlashdata('error')): ?>
                                <script>
                                    alert("<?= session()->getFlashdata('error') ?>");
                                </script>
                            <?php endif; ?>
                            <form action="TertarikPartner/save" method="post" enctype="multipart/form-data">
                                <h5 style="color: #000; margin-bottom: 15px;">Personal Information</h5>

                                <div class="form-group">
                                    <label for="email" class="required-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="form-group">
                                    <label for="nama" class="required-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>

                                <div class="form-group">
                                    <label for="telepon" class="required-label">Nomor HP</label>
                                    <input type="tel" class="form-control" id="telepon" name="hp" required>
                                </div>

                                <div class="form-group">
                                    <label for="alamat" class="required-label">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="2"
                                        required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="pekerjaan" class="required-label">Pekerjaan</label>
                                    <input type="pekerjaan" class="form-control" id="pekerjaan" name="pekerjaan"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="info" class="required-label">Darimakanah anda mengetahui informasi
                                        mengenai kemitraan Kopi Loer?</label>
                                    <textarea class="form-control" id="info" name="info" rows="4" required></textarea>
                                </div>

                                <div class="header-get-a-quote d-flex justify-content-end my-2">
                                    <button type="submit" class="btn btn-primary apply-button">KIRIM</button>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 mt-5 mt-lg-0">
                        <div id="page-slider" class="page-slider small-bg">
                            <div class="item special-height"
                                style="background-image:url(images/slider-partner/INFO.jpg); position: relative; min-height: 643px;">
                                <div class="container">
                                    <div class="box-slider-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer" class="footer bg-overlay">
            <div class="footer-main">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-6 footer-widget footer-about">
                            <h3 class="widget-title">About Us</h3>
                            <a href="index.html">
                                <img loading="lazy" class="footer-logo" src="images/footer-logo.png" alt="Constra">
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                            <h3 class="widget-title">Hubungi Kami</h3>
                            <div class="working-hours">
                                <p>Headquarter Office Jl. Brigjen Hasan Kasim, Ruko 30A Kecamatan Kalidoni, Kota
                                    Palembang Sumatera Selatan 30114.</p>
                                <p>Email: kopiloergroup@gmail.com</p>
                                <p>Phone: +628 131 799 3414</p>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://instagram.com/loergroup" aria-label="Instagram"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://id.linkedin.com/company/kopi-loer-group"
                                            aria-label="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 mt-5 mt-lg-0 footer-widget">
                            <h3 class="widget-title">Brands</h3>
                            <ul class="list-arrow">
                                <p>Kopi Loer</p>
                                <p>Rumah Loer</p>
                                <p>KORA Coffee</p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="copyright-info text-center">
                                <span>&copy;
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> PT. Loer Group Jaya. All rights reserved.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                        <button class="btn btn-primary" title="Back to Top">
                            <i class="fa fa-angle-double-up"></i>
                        </button>
                    </div>

                </div>
            </div>
        </footer>
        
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!-- Javascript Files -->
        <script src="<?php echo base_url() . 'plugins/jQuery/jquery.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'plugins/bootstrap/bootstrap.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'plugins/slick/slick.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'plugins/slick/slick-animation.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'plugins/colorbox/jquery.colorbox.js' ?>"></script>
        <script src="<?php echo base_url() . 'plugins/shuffle/shuffle.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'js/script.js' ?>"></script>
        <!-- Google Map API Key-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"
            defer></script>
        <!-- Google Map Plugin-->
        <script src="<?= base_url('plugins/google-map/map.js'); ?>" defer></script>
    </div>
</body>

</html>