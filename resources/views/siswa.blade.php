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

	<title>Import Excel Ke Database Dengan Laravel</title>
	{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
</head>
<body>
    <div class="page-wrapper">
        <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar bg-dark">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="" href="index.html">
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
                                <a class="text-light" href="indeks.html"><i class="fas fa-tachometer-alt text-warning"></i>Lapor</a>
                            </li>
                            <li class="has-sub">
                                <a class="text-light" href="daftar.html"><i class="fas fa-table text-success"></i>Daftar Laporan</a>
                            </li>
                            <li class="has-sub">
                                <a class="text-light" href="upload.html"><i class="fas fa-copy text-primary"></i>Upload Data Siswa</a>
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
                    <a class="" href="index.html">
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
                                <a class="text-light" href="#"><i class="fas fa-sign-out-alt text-danger"></i>Keluar</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <div class="page-container">

                    <!-- MAIN CONTENT-->
                    <div class="pl-md-5 pr-md-5" style="min-height: 100vh; padding-top: 15px;">
                        <div class="col-lg-12">
                            <div class="card">
                                        <div class="card-header bg-dark">
                                            <strong class="text-light">Daftar Laporan</strong>
                                        </div>
                                        <h3 class="m-3">Import data santri :</h3>

                                        @if ($errors->has('file'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('file') }}</strong>
                                        </span>
                                        @endif

                                        {{-- notifikasi sukses --}}
                                        @if ($sukses = Session::get('sukses'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $sukses }}</strong>
                                        </div>
                                        @endif

                                        <button type="button" class="btn btn-primary m-3" style="width:150px" data-toggle="modal" data-target="#importExcel">
                                            IMPORT EXCEL
                                        </button>
                                        <h3 class="m-3">Hapus semua data santri :</h3>

                                        <form method="get" action="/siswa/truncate" enctype="multipart/form-data">
                                        <button type="submit" class="btn btn-danger m-3" style="width:170px" >
                                            DELETE ALL DATA
                                        </button>
                                        </form>
                                        <div class="mb-5"></div>

                                        @if(isset($details))
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>NIS</th>
                                                    <th>Name</th>
                                                    <th>Telp</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($details as $user)
                                                <tr>
                                                    <td>{{$user->nis}}</td>
                                                    <td>{{$user->nama}}</td>
                                                    <td>{{$user->telp}}</td>
                                                    <td><a class="btn-danger pl-4 pr-4 pb-2 pt-2" href="/{{ $user->nis }}">Laporkan</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @endif

                                        <!-- Import Excel -->
                                        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <form method="post" action="/siswa/import_excel" enctype="multipart/form-data">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                                        </div>
                                                        <div class="modal-body">

                                                            {{ csrf_field() }}

                                                            <label>Pilih file excel</label>
                                                            <div class="form-group">
                                                                <input type="file" name="file" required="required">
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Import</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>

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


	<div class="page-container">


		{{-- notifikasi form validasi --}}
		</div>


{{--
		<a href="/siswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a> --}}
        {{-- <table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>NIS</th>
					<th>Telp</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($siswa as $s)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$s->nama}}</td>
					<td>{{$s->nis}}</td>
					<td>{{$s->telp}}</td>
				</tr>
				@endforeach
			</tbody>
        </table> --}}

    </div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
