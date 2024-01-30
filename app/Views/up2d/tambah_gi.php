<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title ?></title>
    <link rel="shortcut icon" href="<?= base_url("assets/images/logo_pln.png") ?>">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url("assets/img/favicon.png") ?>" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
    <link href="<?= base_url("assets/css/data_up1.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/css/data_up2.css") ?>" rel="stylesheet">

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

            <h1 class="logo me-auto"><a href="#">UP2D</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#">Cari</a></li>
                    <li class="dropdown"><a href="#"><span>Jenis Setting Proteksi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">OCR</a></li>
                            <li><a href="#">GFR</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href=""><span>Data</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url("/admin/up")?>">Data UP</a></li>
                            <li><a href="<?= base_url("/admin/ulp")?>">Data ULP</a></li>
                            <li><a href="<?= base_url("/admin/gi")?>">Data GI</a></li>
                            <li><a href="<?= base_url("/admin/penyulang")?>">Data Penyulang</a></li>
                            <li><a href="#">Data Relay</a></li>
                        </ul>
                    </li>
                    <li><a class="getstarted scrollto" href="#about">Keluar</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="tambah" class="tambah section-bg"><br>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-req">Tambah Data Gardu Induk (GI)</h6>
                </div>
                <form method="POST" action="<?= base_url('/admin/simpan gi') ?>" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="card-body">
                        <!-- <div class="mb-3">
                            <label class="small mb-1" for="unit">Unit</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>pilih nama unit</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div> -->
                        <div class="mb-3">
                            <div class="col">
                                <label for="small mb-1" for="up">Gardu Induk (GI)</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama GI" name="nama_gardu_induk" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <a href="<?= base_url("admin/gi") ?>" type="button" class="btn btn-warning btn-sm" style="margin-right: 10px; color:#ffff; ">Kembali</a>
                            <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- End Why Us Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright 2024 <strong><span>PLN UP2D LAMPUNG</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="<?= base_url("assets/vendor/aos/aos.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/glightbox/js/glightbox.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/isotope-layout/isotope.pkgd.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/swiper/swiper-bundle.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/waypoints/noframework.waypoints.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/php-email-form/validate.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/sweetalert/sweetalert2.all.js") ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url("assets/js/main.js") ?>"></script>
    <script src="<?= base_url("assets/js/script.js") ?>"></script>
    <script src="<?= base_url("assets/js/tab.js") ?>"></script>
</body>

</html>