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
                    <li><a class="nav-link scrollto" href="<?= base_url("/ #cari") ?>">Cari</a></li>
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
            <a href="<?= base_url("/nonup2d/tim") ?>" class="nav-link">
                <i class="fas fa-building"></i>
                <span class="judul">Profil</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url("/nonup2d/profile") ?>" class="nav-link">
                <i class="fas fa-solid fa-sitemap"></i>
                <span class="judul">Tim</span>
        </li>
        <li class="nav-item">
            <a href="<?= base_url("/nonup2d/proteksi") ?>" class="nav-link">
                <i class="fas fa-solid fa-bolt"></i>
                <span class="judul">Proteksi</span>
            </a>
        </li>
    </ul>

    <main id="main">
        <!-- ======= Profil Section ======= -->
        <section id="team" class="Profile">
            <div class="container" data-aos="fade-up">
                <div class="profil">
                    <div class="sec-title text-center mb-5">
                        <p class="sec-sub-title mb-3 mt-5">Tentang</p>
                        <h2 class="h2-title">Setting <span>Proteksi</span></h2>
                        <!-- <div class="sec-title-shape mb-4">
                            <img src="<?= base_url("assets/images/Setting Proteksi.png") ?>" alt="header">
                        </div> -->
                        <p>
                            Setting proteksi dalam dunia listrik adalah pengaturan terhadap sistem pengaman yang digunakan untuk melindungi peralatan listrik dari gangguan. Gangguan yang dimaksud bisa berupa arus lebih, hubungan pendek ke tanah, ataupun kondisi abnormal lainnya pada sistem tenaga listrik.
                        </p>
                        <p>
                            Komponen utama dari sistem proteksi ini biasanya berupa relai proteksi. Relai ini berfungsi untuk mendeteksi adanya gangguan pada listrik. Nantinya, setelah mendeteksi gangguan, relai akan memberikan sinyal untuk memutuskan aliran listrik pada bagian yang terganggu. Dengan memutuskan aliran listrik ini, diharapkan kerusakan yang lebih parah pada peralatan listrik dapat dicegah
                        </p>
                        <h2 class="h2-title">Fungsi <span>Setting Proteksi</span></h2>
                        <div class="row">
                            <div class="column">
                                <div class="card">
                                    <div class="icon-wrapper">
                                        <i class="fa-solid fa-screwdriver-wrench"></i>
                                    </div>
                                    <h3>Jenis Gangguan</h3>
                                    <p>
                                        Setting proteksi menentukan jenis gangguan yang akan dideteksi oleh sistem proteksi
                                    </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="icon-wrapper">
                                        <i class="fa-solid fa-business-time"></i>
                                    </div>
                                    <h3>Waktu Tunda Operasi</h3>
                                    <p>
                                        Setting Proteksi dapat menentukan waktu tunda operasi untuk bereaksi terhadap gangguan
                                    </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="icon-wrapper">
                                        <i class="fa-solid fa-bolt-lightning"></i>
                                    </div>
                                    <h3>Tingkat Sensitivitas</h3>
                                    <p>
                                        Setting proteksi juga menentukan tingkat sensitivitas sistem proteksi
                                    </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="icon-wrapper">
                                        <i class="fa-solid fa-user-shield"></i>
                                    </div>
                                    <h3>Tingkat Keamanan</h3>
                                    <p>
                                        Setting proteksi juga menentukan tingkat keamanan sistem proteksi
                                    </p>
                                </div>
                            </div>
                        </div>
                        <h2 class="h2-title">Relay <span>Proteksi</span></h2>
                        <p>
                            Proteksi dasar merupakan sistem pengamanan yang digunakan untuk melindungi peralatan dan sistem kelistrikan dari kerusakan akibat gangguan. Gangguan tersebut dapat berupa:
                        </p>
                        <ul class="relay">
                            <li>1. <span>Korsleting: </span>Arus listrik yang mengalir melalui jalur yang tidak normal.</li>
                            <li>2. <span>Beban berlebih: </span> Arus listrik yang mengalir melebihi batas kemampuan peralatan.</li>
                            <li>3. <span>Tegangan berlebih: </span>Tegangan listrik yang melebihi batas kemampuan peralatan.</li>
                            <li>4. <span>Penurunan tegangan: </span>Tegangan listrik yang turun di bawah batas kemampuan peralatan.</li>
                        </ul>
                        <p>
                            Sistem proteksi dasar umumnya terdiri dari:
                        </p>
                        <ul class="relay">
                            <li>
                                1. <span>Relai: </span> Alat yang mendeteksi gangguan dan memberikan sinyal kepada alat pemutus.
                            </li>
                            <li>
                                2. <span>Alat pemutus: </span> Alat yang memutus aliran listrik saat terjadi gangguan.
                            </li>
                            <li>
                                3. <span>Sekering: </span> Alat yang memutus aliran listrik saat terjadi arus berlebih.
                            </li>
                            <li>
                                4. <span>Pemutus sirkuit (MCB): </span>Alat yang memutus aliran listrik saat terjadi korsleting atau beban berlebih.
                            </li>
                        </ul>
                        <h4>Penjelasan mengenai berbagai relay lainnya dapat dilihat di video</h4>
                        <div class="col-lg-8">
                                    <iframe class="play-btn-wp" src="https://www.youtube.com/embed/FcePp1aKlPA?si=Z1a6zoXplmrSdtcp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Skills Section -->
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
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("/ #carosuel") ?>">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("/ #cari") ?>">Cari</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("/ #team") ?> ">Tentang Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("/ ##why-us") ?>">Pertanyaan</a></li>
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