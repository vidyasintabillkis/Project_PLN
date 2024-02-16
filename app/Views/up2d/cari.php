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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

        <!-- ======= Why Us Section ======= -->
        <section id="tambah" class="tambah section-bg"><br>
            <form method="post">
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="keyword" id="cariSelect" required>
                        <option selected value="" >Cari Penyulang</option>
                        <?php
                        foreach ($penyulang as $penyulang) {
                        ?>
                            <option value="<?= $penyulang['nama_penyulang_lama'] ?>">
                                <?= $penyulang['nama_penyulang_lama'] ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

               
            </form>

            <div class="my-3" >
                    <table id="table-result" class="table table-striped" style="display: table-row;">
                        <thead id="thead-result" class="thead-primary " >
                        <tr>
                            <th scope="col">DEFAULT</th>
                            
                        </tr>
                        </thead>
                        <tbody id="tbody-result">
                                
                        
                        </tbody>
                        </table>
            </div>

            <div style="width:100%">
                 <canvas id="scatter-chart"></canvas>
            </div>

  

    <script>
        $('#cariSelect').change(function() {
            let keyword = $(this).val(); // Retrieve the selected value
            $.ajax({
                url: "<?php echo base_url('ajax/fetch-data/'); ?>" + keyword,
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                   
                    updateTable(data.dataTable);
                    updateScatterChart(data.datasets);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        

        function updateScatterChart(datasets) {
            var ctx = document.getElementById('scatter-chart').getContext('2d');
            var scatterChart = new Chart(ctx, {
                type: 'scatter',
                data: {
                    datasets: datasets.map(function(dataset) {
                        console.log(dataset.label);
                        return {
                            label: dataset.label,
                            data: dataset.data,
                            borderColor: null, 
                            backgroundColor: null,
                            showLine: true,
                            lineTension: 0
                        };
                    })
                },
                options: {
                    plugins: {
                        colors: {
                        forceOverride: true
                        },
                        colorschemes: {
                            scheme: 'tableau.Tableau20'
                        },
                        legend: {
                            display: true,
                            position: 'right',
                            align: 'start', // Align the legend items to the start of each column
                            labels: {
                                usePointStyle: true // Use point style for legend items
                            },
                            layout: {
                                padding: 20, // Padding between legend items
                                columns: 2 // Number of columns in the legend
                            }
                },
                    },
                    scales: {
                        x: {
                            type: 'logarithmic',
                            position: 'bottom',
                            ticks: {
                                callback: function(value, index, values) {
                                    return value.toLocaleString('en-US', {minimumFractionDigits: 0});
                                },
                                min: 1,
                                max: 10000,
                                padding: 20
                            }
                        },
                        y: {
                            type: 'logarithmic',
                            position: 'left',
                            ticks: {
                                callback: function(value, index, values) {
                                    return value.toLocaleString('en-US', {minimumFractionDigits: 2});
                                },
                                min: 0.01,
                                max: 1000,
                                padding: 20
                            }
                        }
                    }
                }
            });
        }


        function updateTable(dataTable) {
            let tableHead = $('#thead-result')
            var tableBody = $('#tbody-result');
            tableBody.empty();
            tableHead.empty();
            let row = `<tr>`
            for(let i = -2;i<dataTable.length-1;i++){
                let cur = (i == -1) ? dataTable.length - 1 : i;
                if(cur==-2){
                    row += '<th scope="col">Uraian</th>';
                    continue;
                    
                }
                let smHeader = (i == -1)? "Penyulang" : "Pemutus "+(i+1);
                row += '<th scope="col">' + dataTable[cur]['nama_keypoint'] +'<br><small>('+smHeader +')</small></th>';
            }
            row+='</tr>';
            tableHead.append(row);
            
            rowName = ["type_relay","karakteristik","Rasio CT","ocr_arus_1","ocr_tms","ocr_arus_2","ocr_td"]
            rowName2 = ["Merk/Type Rele","Karakteristik","Rasio CT","Setting 1> Amp","Setting t> tms","Setting I>> Amp","Setting t>> det"]
            for (let i = 0; i < 7; i++) {
                row = "<tr>";
                row += '<td>' + rowName2[i] + '</td>';
               
                for (let j = - 1; j < dataTable.length-1; j++) {
                    let cur = (j == -1) ? dataTable.length - 1 : j;
                    if(i==1){
                        row += '<td>Normal Inverse</td>';
                        continue;
                    }
                    row += '<td>' + dataTable[cur][rowName[i]] + '</td>';
                }

                row += "</tr>";
                tableBody.append(row);
            }
        }
    </script>
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