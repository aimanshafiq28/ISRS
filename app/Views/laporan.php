<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/dashboardassets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/dashboardassets/img/favicon.png">
    <title>
        Sistem Latihan Industri | Jadual Giliran
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/dashboardassets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/dashboardassets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/dashboardassets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
                <img src="assets/dashboardassets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?= base_url('dashboard') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-user"></i>
                        </div>
                        <span class="nav-link-text ms-1">Maklumat Pelajar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?= base_url('Laporan') ?>" style="background-color: #FFDB58; color: black;">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-clock"></i>
                        </div>
                        <span class="nav-link-text ms-1">Laporan Harian/span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?= base_url('Waktu') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-user"></i>
                        </div>
                        <span class="nav-link-text ms-1">Waktu Masuk/Keluar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?= base_url('ScheduleStudent') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-building"></i>
                        </div>
                        <span class="nav-link-text ms-1">Jadual Giliran</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="./pages/rtl.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-upload"></i>
                        </div>
                        <span class="nav-link-text ms-1">Permohonan Cuti</span>
                    </a>
                </li>


            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">SistemLI</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Admin</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Jadual Giliran</h6>
                </nav>
                
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- Under Construction -->
        <style>
		body {
			background-color: #f0f0f0;
			font-family: Arial, sans-serif;
			text-align: center;
		}
		
		.under-construction {
			margin: 100px auto;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #ddd;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
	</style>
        <body>
	<div class="under-construction">
		<h1>Under Construction</h1>
		<p>This page is currently under construction. Please check back soon for updates.</p>
		<p>In the meantime, you can contact us at <a href="mailto:info@example.com">info@example.com</a> for more information.</p>
	</div>
</body>
    <!--   Core JS Files   -->
    <script src="../assets/dashboardassets/js/core/popper.min.js"></script>
    <script src="../assets/dashboardassets/js/core/bootstrap.min.js"></script>
    <script src="../assets/dashboardassets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/dashboardassets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/dashboardassets/js/material-dashboard.min.js?v=3.0.0"></script>

   
</body>

</html>