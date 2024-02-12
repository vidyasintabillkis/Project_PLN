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
            <h1 class="logo me-auto">
                <a href="#">
                    <img src="<?= base_url("assets/images/logo_pln.png") ?>" alt="UP2D Logo" class="img-fluid">
                    UP2D LAMPUNG
                </a>
            </h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#">Cari</a></li>
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
                    <h6 class="m-0 font-weight-bold text-req">Tambah Data Relay Proteksi</h6>
                </div>
                <form method="POST" action="<?= base_url('admin/relay/' . $relay['id_relay'] . '/edit') ?>" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <?= csrf_field() ?>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="small mb-1" for="unit">Unit Layanan Pelanggan (ULP)<b style="color: red;">*</b></label>
                            <select class="form-select" aria-label="Default select example" name="nama_ulp" required>
                                <option selected value="">Pilih Unit Layanan Pelanggan (ULP)</option>
                                <?php
                                foreach ($ulp as $ulp) {
                                ?>
                                    <option value="<?= $ulp['id_ulp'] ?>" <?= $relay['id_ulp'] == $ulp['id_ulp'] ? 'selected' : "" ?>>
                                        <?= $ulp['nama_ulp'] ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="unit">Penyulang<b style="color: red;">*</b></label>
                            <select class="form-select" aria-label="Default select example" name="nama_penyulang_lama" required>
                                <option selected value="">Pilih Penyulang</option>
                                <?php
                                foreach ($penyulang as $p) {
                                ?>
                                    <option value="<?= $p['id_penyulang'] ?>" <?= $relay['id_penyulang'] == $p['id_penyulang'] ? 'selected' : "" ?>>
                                        <?= $p['nama_penyulang_lama'] ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <div class="mb-2">
                                    <label for="small mb-1 label-width" for="unit">Nama Relay<b style="color: red;">*</b></label>
                                    <input type="text" class="form-control" aria-label="First name" name="nama_relay" value="<?= $relay['nama_relay'] ?>" required>
                                </div>
                                <div class="mb-2">
                                    <label for="small mb-1 label-width" for="unit">Status Relay</label>
                                    <input type="text" class="form-control" aria-label="First name" name="status_relay" value="<?= $relay['status_relay'] ?>">
                                </div>
                                <div class="mb-2">
                                    <label for="small mb-1 label-width" for="unit">Urutan Pemutus<b style="color: red;">*</b></label>
                                    <input type="number" class="form-control" aria-label="First name" name="urutan_keypoint" value="<?= $relay['urutan_keypoint'] ?>" required>
                                </div>
                                <div class="mb-2">
                                    <label for="small mb-1 label-width" for="unit">Nama Pemutus<b style="color: red;">*</b></label>
                                    <input type="text" class="form-control" aria-label="First name" name="nama_keypoint" value="<?= $relay['nama_keypoint'] ?>" required>
                                </div>
                                <div class="mb-2">
                                    <label for="small mb-1 label-width" for="unit">Merk Relay</label>
                                    <input type="text" class="form-control" aria-label="First name" name="merk_relay" value="<?= $relay['merk_relay'] ?>">
                                </div>
                                <div class="mb-2">
                                    <label for="small mb-1 label-width" for="unit">Tipe Relay</label>
                                    <input type="text" class="form-control" aria-label="First name" name="type_relay" value="<?= $relay['type_relay'] ?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-2">
                                    <label for="small mb-1 label-width" for="unit">Seri Relay</label>
                                    <input type="text" class="form-control" aria-label="First name" name="seri_relay" value="<?= $relay['seri_relay'] ?>">
                                </div>
                                <div class="mb-2">
                                    <label for="small mb-1 label-width" for="unit">Tahun Relay</label>
                                    <input type="number" class="form-control" aria-label="First name" name="tahun_relay" value="<?= $relay['tahun_relay'] ?>">
                                </div>
                                <div class="mb-2">
                                    <label for="small mb-1 label-width" for="unit">Umur Relay</label>
                                    <input type="number" class="form-control" aria-label="First name" name="umur_relay" value="<?= $relay['umur_relay'] ?>">
                                </div>
                                <div class="mb-2">
                                    <label for="small mb-1 label-width" for="unit">Com Relay</label>
                                    <input type="text" class="form-control" aria-label="First name" name="com_relay" value="<?= $relay['com_relay'] ?>">
                                </div>
                                <div class="mb-2">
                                    <label for="small mb-1 label-width" for="unit">Rasio CT Primer<b style="color: red;">*</b></label>
                                    <input type="number" class="form-control" aria-label="First name" name="rasio_ct_primer" value="<?= $relay['rasio_ct_primer'] ?>" required>
                                </div>
                                <div class="mb-2">
                                    <label for="small mb-1 label-width" for="unit">Rasio CT Sekunder<b style="color: red;">*</b></label>
                                    <input type="number" class="form-control" aria-label="First name" name="rasio_ct_sekunder" value="<?= $relay['rasio_ct_sekunder'] ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <a href="<?= base_url("admin/relay") ?>" type="button" class="btn btn-warning btn-sm" style="margin-right: 10px; color:#ffff; ">Kembali</a>
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