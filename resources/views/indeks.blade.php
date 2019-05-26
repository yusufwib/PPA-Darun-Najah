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
                            <a class="text-light" href="login"><i class="fas fa-sign-out-alt text-danger"></i>Keluar</a>
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
                                    <strong class="text-light">Form Pelaporan</strong>
                                </div>
                                <div class="card-body card-block">



	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		NIS <input type="number" name="nis" required="required" placeholder="Masukkan NIS Siswa" class="form-control"> <br/>
		Pelanggaran <input type="text" name="pelanggaran" required="required" placeholder="Keterangan Pelanggaran" class="form-control"> <br/>
		Kategori   <select name="kategori" class="form-control">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            {{-- <option value="audi">Audi</option> --}}
          </select>
           <br/>
		Takzir <textarea name="takzir" class="form-control"     required="required"></textarea> <br/>
		Pengurus <input type="text" name="pengurus" required="required" class="form-control"> <br/>
		{{-- <input type="submit" value="Simpan Data"> --}}




                                        {{-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">NIK</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="text-input" placeholder="Masukkan NIK Siswa" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Pelanggaran</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="text-input" placeholder="Keterangan Pelanggaran" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Kategori</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="select" id="select" class="form-control">
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Takzir</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Keterangan Takzir" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </form> --}}
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn mb-5" value="Simpan Data">
                                            Upload
                                        </button>
                                    </form>
                                    </div>
                                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
