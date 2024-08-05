<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/dashboardassets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/dashboardassets/img/favicon.png">
    <title>
        Sistem Latihan Industri | Maklumat Pelajar
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="assets/dashboardassets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/dashboardassets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/dashboardassets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />

    <style>
        .card.card-plain {
            width: 100%;
            max-width: 900px; /* Adjust the max-width as needed */
            margin: auto;
            border: 2px solid #000; /* Add a black border */
            padding: 20px; /* Add padding to create space between the content and the border */
            border-radius: 10px; /* Optional: Add rounded corners */
        }
        .page-header {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin-top: -100px; /* Adjust this value to move the form higher or lower */
        }
    </style>
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
                    <a class="nav-link text-white " href="<?= base_url('dashboardadmin') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-building"></i>
                        </div>
                        <span class="nav-link-text ms-1">Permohonan Pelajar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?= base_url('WaktuAdmin') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-clock"></i>
                        </div>
                        <span class="nav-link-text ms-1">Waktu Masuk/Keluar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?= base_url('jadualadmin') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-building"></i>
                        </div>
                        <span class="nav-link-text ms-1">Jadual Giliran</span>
                    </a>
                </li>
                <a class="nav-link text-white active" href="<?= base_url('maklumatpenyelia') ?>" style="background-color: #FFDB58; color: black;">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-user"></i>
                        </div>
                        <span class="nav-link-text ms-1">Maklumat Penyelia</span>
                    </a>


            </ul>
            <div class="container-fluid px-2 px-md-4">
        
    </div>
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
                    <h6 class="font-weight-bolder mb-0">Maklumat Penyelia</h6>
                </nav>
               
            </div>
        </nav>
        <!-- End Navbar -->
        <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Daftar Maklumat Penyelia</h4>
                  <p class="mb-0">Masukkan Nama, Email, dan Seksyen Penyelia</p>
                </div>
                <div class="card-body">
                <form action="<?= base_url('adviser_create') ?>" method="post" enctype="multipart/form-data">
                <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Nama</label>
                      <input type="text" class="form-control" name="staff_name" id="staff_name">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="staff_email" id="staff_email">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <select name="dept_id" id="dept_id" class="form-control">
                        <option value="">Select Department</option>
                        <?php foreach ($departments as $department): ?>
                                <option value="<?= $department['dept_id'] ?>">
                                    <?= $department['dept_name'] ?>
                                </option>
                            <?php endforeach; ?>
                    </select>

                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Hantar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>

    
    <!--   Core JS Files   -->
    <script src="assets/dashboardassets/js/core/popper.min.js"></script>
    <script src="assets/dashboardassets/js/core/bootstrap.min.js"></script>
    <script src="assets/dashboardassets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/dashboardassets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="assets/dashboardassets/js/plugins/chartjs.min.js"></script>
    
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/dashboardassets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>
