<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PT PLN UP2D LAMPUNG</title>
    <link rel="shortcut icon" href="<?= base_url("assets/images/logo_pln.png") ?>">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Bootstarp -->
    <link href="<?= base_url("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css") ?>" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url("assets/vendor/aos/aos.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/bootstrap-icons/bootstrap-icons.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/boxicons/css/boxicons.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/glightbox/css/glightbox.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/remixicon/remixicon.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/swiper/swiper-bundle.min.css") ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url("assets/css/styles.css") ?>" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto">
                <a href="landingpage.php">
                    <img src="<?= base_url("assets/images/logo_pln.png") ?>" alt="UP2D Logo" class="img-fluid">
                    UP2D LAMPUNG
                </a>
            </h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#carosuel">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#cari">Cari</a></li>
                    <li><a class="nav-link scrollto" href="#team">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="#why-us">Pertanyaan</a></li>
                    <li><a class="getstarted scrollto" href="<?= base_url("/login") ?>">Masuk</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
    <!-- ======= Carosuel Section ======= -->
    <section id="carosuel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <!-- slider -->
            <div class="slider">
                <!-- list Items -->
                <div class="list">
                    <div class="item active">
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="hero-title fw-bold mt-5">
                                        Solusi Energi yang Handal dan Berkelanjutan!
                                    </div>
                                    <p class="mt-3 text-secondary">
                                        PT PLN UP2D Lampung hadir untuk memastikan pasokan energi yang stabil dan andal untuk memenuhi kebutuhan masyarakat dan industri.
                                    </p>
                                    <div class="mt-5 d-flex gap-5">
                                        <div class="col-2">
                                            <h2>3</h2>
                                            <p class="text-secondary">UP3</p>
                                        </div>
                                        <div class="col-2">
                                            <h2>20+</h2>
                                            <p class="text-secondary">ULP</p>
                                        </div>
                                        <div class="col-2">
                                            <h2>200+</h2>
                                            <p class="text-secondary">Penyulang</p>
                                        </div>
                                    </div>
                                    <div class="cta mt-5 d-flex">
                                        <a href="#cari" class="btn btn-light shadow-none me-4">Cari Penyulang</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="<?= base_url("assets/images/kegiatan.png") ?>" alt="pln" class="hero-img w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mt-5 hero-title fw-bold">
                                        Meraih keandalan dan efisiensi dalam distribusi listrik!
                                    </div>
                                    <p class="mt-5 text-secondary">
                                        Dengan infrastruktur yang canggih dan tim yang berpengalaman, kami memastikan bahwa listrik tersedia secara konsisten!
                                    </p>
                                    <div class="cta mt-5 d-flex">
                                        <a href="#cari" class="btn btn-light shadow-none me-4">Cari Penyulang</a>
                                    </div>
                                </div>
                                <div class="col-md-5 mt-5">
                                    <img src="<?= base_url("assets/images/slider (1).png") ?>" alt="pln" class="hero-img w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mt-5 hero-title fw-bold">
                                        Keamanan adalah prioritas utama kami dalam setiap aspek bisnis kami
                                    </div>
                                    <p class="mt-5 text-secondary">
                                        PT PLN UP2D Lampung mengambil langkah-langkah proaktif untuk memastikan bahwa setiap aspek dari operasi kami memenuhi standar keamanan tertinggi
                                    </p>
                                    <div class="cta mt-5 d-flex">
                                        <a href="#cari" class="btn btn-light shadow-none me-4">Cari Penyulang</a>
                                    </div>
                                </div>
                                <div class="col-md-5 mt-5">
                                    <img src="<?= base_url("assets/images/slider (2).png") ?>" alt="pln" class="hero-img w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- button arrows -->
                <div class="arrows">
                    <button id="prev"></button>
                    <button id="next"></button>
                </div>
                <!-- thumbnail -->
                <div class="thumbnail">
                    <div class="item active">
                        <img src="<?= base_url("/assets/images/up2d.jpeg") ?>">
                        <div class="content">
                            UP2D LAMPUNG
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/img2.jpg">
                        <div class="content">
                            UP2D LAMPUNG
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/img3.jpg">
                        <div class="content">
                            UP2D LAMPUNG
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Hero -->
    <main id="main">
        <!-- ======= cari Section ======= -->
        <section id="cari" class="Cari">
            <div class="container" data-aos="fade-up">
                <div class="main">
                    <div class="container-fluid" data-aos="fade-up">
                        <div class="section-title">
                            <h2>Cari Penyulang</h2>
                        </div>
        </section>
        <!-- End Skills Section -->
        <!-- ======= Profil Section ======= -->
        <section id="team" class="Profile">
            <div class="container" data-aos="fade-up">
                <div class="main">
                    <img src="<?= base_url("assets\images\About.png") ?>" alt="pln">
                    <div class="all-text">
                        <h4>Tentang Kami</h4>
                        <h1>PT PLN <span>UP2D</span> Lampung</h1>
                        <p>Pada <span>1 Oktober 2018</span>, PT PLN (Persero) APD Lampung mengalami perubahan menjadi <span>PT PLN (Persero) UP2D Lampung</span> Saat ini PT PLN (Persero) UP2D Lampung mengelola 3 unit pelaksana, yaitu</p>
                        <li> UP3 Tanjung Karang</li>
                        <li> UP3 Metro</li>
                        <li> UP3 Kotabumi</li>
                        <div class="btn">
                            <a href="<?= base_url("/nonup2d/tim") ?>">
                                <button type="button">Tim Kami</button>
                            </a>
                            <a href="<?= base_url("/nonup2d/profile") ?>">
                                <button type="button" class="btn2">Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Skills Section -->
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">
                <div class="section-title">
                    <h2>Pertanyaan</h2>
                </div>
                <div class="row">
                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                        <div class="content">
                            <h3>Pertanyaan yang <strong>Sering Ditanyakan</strong> Terkait Setting Proteksi</h3>
                            <p>
                                Berikut ini 3 pertanyaan umum yang sering ditanyakan mengenai setting proteksi antara lain:
                            </p>
                        </div>
                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Mengapa proteksi dapat mengalami kegagalan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p>
                                            Kegagalan proteksi dapat terjadi karena berbagai alasan, seperti kerusakan peralatan, kesalahan konfigurasi, atau serangan yang berhasil melewati sistem pertahanan.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Apa saja faktor-faktor yang dapat menyebabkan kegagalan proteksi?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Faktor-faktor penyebab kegagalan proteksi meliputi perhitungan setting yang salah, kerusakan relay, kerusakan mekanik SB, perhitungan grading time open close svb yang tidak tepat.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Apa langkah tindak lanjut yang dapat diambil untuk mengatasi kegagalan proteksi? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Tindak lanjut untuk mengatasi kegagalan proteksi melibatkan Scaning dan setting proteksi, dilakukan uji relay proteksi hingga simulasi gangguan untuk memastikan peralatan proteksi bekerja sesuai skenario yang diinginkan.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("/assets/images/electrical.jpg");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                </div>
            </div>
        </section><!-- End Why Us Section -->
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3 style="display: flex; align-items: center;">
                            <img src="<?= base_url("assets/images/logo_pln.png") ?>" alt="PLN UP2D Logo" style="max-width: 35px; margin-right: 10px;">
                            PLN UP2D
                        </h3>
                        JL. Z.A Pagar Alam No.05 <br>
                        Bandar Lampung, 35144<br><br>
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>SubUnit UP2D Lampung</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i>K3L</li>
                            <li><i class="bx bx-chevron-right"></i>Perencanaan</li>
                            <li><i class="bx bx-chevron-right"></i>Pemeliharaan</li>
                            <li><i class="bx bx-chevron-right"></i>Operasi Distribusi</li>
                            <li><i class="bx bx-chevron-right"></i>Fasilitas Operasi</li>
                            <li><i class="bx bx-chevron-right"></i>Keuangan dan Umum</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Link Alternatif</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#carosuel">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#cari">Cari</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#team">Tentang Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#why-us">Pertanyaan</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Kontak Kami</h4>
                        <div class="social-links mt-3">
                            <a href="https://youtube.com/@up2dlampung529?feature=shared" class="youtube"><i class="bx bxl-youtube"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/pln.up2dlampung?igsh=NjRvaHN2a2N0aWIz" class="instagram"><i class="bx bxl-instagram"></i></a>
                        </div><br>
                        <p><b>Telepon</b> : (0721) 773296</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright 2024 <strong><span>PLN UP2D LAMPUNG</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url("assets/vendor/aos/aos.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/glightbox/js/glightbox.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/isotope-layout/isotope.pkgd.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/swiper/swiper-bundle.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/waypoints/noframework.waypoints.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/php-email-form/validate.js") ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url("assets/js/main.js") ?>"></script>
    <script src="<?= base_url("assets/js/app.js") ?>"></script>
    <script src="<?= base_url("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js") ?>"></script>

</body>

</html>