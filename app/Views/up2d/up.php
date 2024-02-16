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
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="<?= base_url("assets/vendor/sweetalert/sweetalert2.css") ?>" rel="stylesheet">
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
            <h1 class="logo me-auto">
                <a href="#">
                    <img src="<?= base_url("assets/images/logo_pln.png") ?>" alt="UP2D Logo" class="img-fluid">
                    UP2D LAMPUNG
                </a>
            </h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="<?= base_url("/admin/cari") ?>">Cari</a></li>
                    <li class="dropdown"><a href="#"><span>Jenis Setting Proteksi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url("/admin/ocr") ?>">OCR</a></li>
                            <li><a href="<?= base_url("/admin/gfr") ?>">GFR</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href=""><span>Data</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url("/admin/up") ?>">Data UP</a></li>
                            <li><a href="<?= base_url("/admin/ulp") ?>">Data ULP</a></li>
                            <li><a href="<?= base_url("/admin/gi") ?>">Data GI</a></li>
                            <li><a href="<?= base_url("/admin/penyulang") ?>">Data Penyulang</a></li>
                            <li><a href="<?= base_url("/admin/relay") ?>">Data Relay</a></li>
                        </ul>
                    </li>
                    <li><a class="getstarted scrollto" href="<?= base_url("/logout")?>">Keluar</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    <main id="main">
        <div class="swal" data-swal="<?= session()->get('message'); ?>"></div>
        <!-- ======= Why Us Section ======= -->
        <section id="unit" class="unit section-bg"><br>
            <div class="container p-3 my-5">
                <!-- DataTable Code starts -->
                <div class="text-right">
                    <a href="<?= base_url("admin/tambah up") ?>" class="btn btn-req border-dark" style="margin-bottom: 20px;">Tambah Data</a>
                </div>
                <table id="example" class="table" style="width:100%; margin-top: 20px;">
                    <thead>
                        <tr>
                            <th class="table-info">No</th>
                            <th class="table-info">Unit Pelaksana (UP)</th>
                            <th class="table-info">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($nama_up as $up) {
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $up['nama_up'] ?></td>
                                <td class="d-flex justify-content">
                                    <a href="<?= base_url('admin/up/' . $up['id_up'] . '/edit') ?>" type="button" class="btn btn-warning btn-sm mr-2" style="margin-right: 10px; color:#ffff; ">
                                        Ubah
                                    </a>
                                    <form action="<?= base_url('admin/up/' . $up['id_up']) ?>" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <?= csrf_field() ?>
                                        <button type="submit" class="btn btn-danger btn-sm btn-hapus">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
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

    <!-- DataTable JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url("assets/js/main.js") ?>"></script>
    <script src="<?= base_url("assets/js/script.js") ?>"></script>
</body>

</html>