<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar bg-dark">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="" href="index">
                            <h1 class="text-light">Kesiswaan</h1>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile bg-dark">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled bg-dark">
                        <li class="has-sub">
                            <a class="text-light" href="indeks"><i class="fas fa-tachometer-alt text-warning"></i>Lapor</a>
                        </li>
                        <li class="has-sub">
                            <a class="text-light" href="daftar"><i class="fas fa-table text-success"></i>Daftar Laporan</a>
                        </li>
                        <li class="has-sub">
                            <a class="text-light" href="siswa"><i class="fas fa-copy text-primary"></i>Upload Data Siswa</a>
                        </li>
                        <li class="has-sub">
                            <a class="text-light" href="#"><i class="fas fa-sign-out-alt text-danger"></i>Keluar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo bg-dark">
                <a class="" href="index">
                    <h1 class="text-light">Kesiswaan</h1>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1 bg-dark">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="text-light" href="indeks"><i class="fas fa-tachometer-alt text-warning"></i>Lapor</a>
                        </li>
                        <li class="has-sub">
                            <a class="text-light" href="daftar"><i class="fas fa-table text-success"></i>Daftar Laporan</a>
                        </li>
                        <li class="has-sub">
                            <a class="text-light" href="siswa"><i class="fas fa-copy text-primary"></i>Upload Data Siswa</a>
                        </li>
                        <li class="has-sub">
                            <a class="text-light" href="login"><i class="fas fa-sign-out-alt text-danger"></i>Keluar</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <!-- MAIN CONTENT-->
            <div class="pl-md-5 pr-md-5" style="min-height: 100vh; padding-top: 15px;">
                <div class="col-lg-12">
                    <div class="card">
                                <div class="card-header bg-dark">
                                    <strong class="text-light">Daftar Laporan</strong>
                                </div>
                                <!-- DATA TABLE -->
                                {{-- <div class="table-data__tool">
                                    <div class="table-data__tool-left pt-4 pl-4">
                                            <div class="row form-group">
                                            <div class="col-1 pt-1">
                                                <label for="text-input" class=" form-control-label">NIK</label>
                                            </div>
                                            <div class="col-7">
                                                <input type="text" id="text-input" name="text-input" placeholder="Masukan NIK" class="form-control">
                                            </div>
                                            <div class="col-3">
                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            Cari</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <p style="color:white"> dwD</p>
		<a href="/siswa/export_excel" class="btn btn-success m-3" target="_blank" style="width:150px"  style="text-align:center" >EXPORT EXCEL</a>
{{--
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                </th>
                                                <th>Tanggal</th>
                                                <th>Pelanggaran</th>
                                                <th>Kategori</th>
                                                <th>Takzir</th>
                                                <th>Pengurus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <a href="" class="text-danger btn btn-lg"><i class="fas fa-trash"></i></a>
                                                </td>
                                                <td>2018-09-27 02:12</td>
                                                <td>Lompat Pager</td>
                                                <td>Z</td>
                                                <td>...</td>
                                                <td>Saya</td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <a href="" class="text-danger btn btn-lg"><i class="fas fa-trash"></i></a>
                                                </td>
                                                <td>2018-09-27 02:12</td>
                                                <td>Lompat Pager</td>
                                                <td>Z</td>
                                                <td>...</td>
                                                <td>Saya</td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <a href="" class="text-danger btn btn-lg"><i class="fas fa-trash"></i></a>
                                                </td>
                                                <td>2018-09-27 02:12</td>
                                                <td>Lompat Pager</td>
                                                <td>Z</td>
                                                <td>...</td>
                                                <td>Saya</td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <a href="" class="text-danger btn btn-lg"><i class="fas fa-trash"></i></a>
                                                </td>
                                                <td>2018-09-27 02:12</td>
                                                <td>Lompat Pager</td>
                                                <td>Z</td>
                                                <td>...</td>
                                                <td>Saya</td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <a href="" class="text-danger btn btn-lg"><i class="fas fa-trash"></i></a>
                                                </td>
                                                <td>2018-09-27 02:12</td>
                                                <td>Lompat Pager</td>
                                                <td>Z</td>
                                                <td>...</td>
                                                <td>Saya</td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                        </tbody>
                                    </table>
                                </div> --}}
                                <div class="mb-5"></div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
</div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
