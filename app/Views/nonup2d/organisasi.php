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

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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
    <link href="<?= base_url("assets/css/tim.css") ?>" rel="stylesheet">

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
                    <li><a class="nav-link scrollto" href="<?= base_url("/ #carosuel") ?>">Beranda</a></li>
                    <!-- <li><a class="nav-link scrollto" href="<?= base_url("/ #carosuel") ?>">Cari</a></li> -->
                    <li><a class="nav-link scrollto" href="<?= base_url("/ #team") ?>">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url("/ #why-us") ?>">Pertanyaan</a></li>
                    <li><a class="getstarted scrollto" href="<?= base_url("/login") ?>">Masuk</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
    <!-- ======= Header ======= -->

    <!-- side bar -->
    <ul class="sidebar">
        <li class="nav-item">
            <a href="<?= base_url("/nonup2d/profile") ?>" class="nav-link">
                <i class="fas fa-building"></i>
                <span class="judul">Profil</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url("/nonup2d/tim") ?>" class="nav-link">
                <i class="fas fa-solid fa-sitemap"></i>
                <span class="judul">Tim</span>
        </li>
        <!-- <li class="nav-item">
            <a href="" class="nav-link">
                <i class="fas fa-solid fa-camera-retro"></i>
                <span class="judul">Kegiatan</span>
            </a>
        </li> -->
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="fas fa-solid fa-bolt"></i>
                <span class="judul">Proteksi</span>
            </a>
        </li>
    </ul>

    <main id="main">
        <section id="team" class="Profile">
            <div class="container" data-aos="fade-up">
                <div class="tree">
                    <h2>Struktur Organisasi</h2>
                    <p>Struktur organisasi PT PLN (Persero) UP2D Lampung berdasarkan <span>Peraturan Direksi PT
                            PLN (Persero) nomor : 0115.P/DIR/2022 </span> tentang Organisasi dan Tata Kerja Unit
                        Pelaksana pada PT PLN (Persero) Unit Induk Distribusi Lampung ditunjukkan pada
                        gambar berikut di bawah ini :</p>
                    <img src="<?= base_url("assets/images/Struktur Organisasi PLN.png") ?>" alt="struktur organisasi">
                    <h2>Tugas Pokok</h2>
                    <p>Berdasarkan Perdir diatas, UP2D dipimpin, dibina, dan dikelola oleh <span>MUP UP2D</span> yang
                        bertanggung jawab kepada General Manager UID Lampung dalam merencanakan,
                        mengelola kegiatan operasi sistem distribusi 20 kV, dan pemeliharaan kubikel 20 kV,
                        keypoint, Supervisory Control and Data Acquisition (SCADA) dan telekomunikasi, dan
                        pengadaan barang dan jasa secara efektif dan efisien berbasis aspek keselamatan,
                        kesehatan kerja, lingkungan, dan keamanan sesuai dengan standar yang ditetapkan
                        guna menjamin mutu dan keandalan sistem pendistribusian tenaga listrik untuk
                        mencapai kinerja unit. <br><br>
                        Adapun tugas-tugas pokok sebagai berikut :
                        <li>
                            <span>#1</span> Merencanakan dan menyusun program kerja UP2D sebagai pedoman kerja dan
                            bahan untuk penyusunan RKA
                        </li>
                        <li>
                            <span>#2</span> Menjamin pelaksanaan kegiatan operasi jaringan distribusi real time dalam rangka
                            pencapaian target kinerja unit
                        </li>
                        <li>
                            <span>#3</span> Menetapkan prosedur tetap pengamanan pendistribusian tenaga listrik untuk
                            operasional harian dan acara khusus
                        </li>
                        <li>
                            <span>#4</span> Mengendalikan dan mengevaluasi proses pengelolaan keuangan dan umum
                        </li>
                        <li>
                            <span>#5</span> Memastikan perencanaan, pelaksanaan, dan evaluasi atas seluruh proses bisnis
                        </li>
                    </p>
                </div>
            </div>
        </section>
    </main>
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
                            <li><i class="bx bx-chevron-right"></i> <a href="#">K3L</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Perencanaan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Pemeliharaan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Operasi Distribusi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Fasilitas Operasi</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Link Alternatif</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Cari</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Pertanyaan</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Kontak Kami</h4>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
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
    <script>
        const timeline_wrapper = document.querySelector('.timeline-wrapper'),
            timeline = document.querySelectorAll('.timeline li .data');
        for (const time of timeline) {
            time.onclick = () => time.classList.toggle('show');
        }

        timeline_wrapper.addEventListener('mousemove', (event) => {
            const timeline = document.querySelector('.timeline');
            let scroll_width = event.pageX / timeline_wrapper.clientwidth * (timeline_wrapper.clientwidth - timeline.clientWidth);

            timeline.style.left = scroll_width.toFixed(1) + 'px';
        })
    </script>
    <script src="<?= base_url("assets/js/main.js") ?>"></script>
    <script src="<?= base_url("assets/js/app.js") ?>"></script>
    <script src="<?= base_url("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js") ?>"></script>

</body>

</html>