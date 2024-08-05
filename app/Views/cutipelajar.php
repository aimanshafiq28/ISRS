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
<?php $session = session(); ?>
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
                    <a class="nav-link text-white " href="<?= base_url('Laporan') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-table"></i>
                        </div>
                        <span class="nav-link-text ms-1">Pelaporan Harian</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?= base_url('Waktu') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-clock"></i>
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
                    <a class="nav-link text-white " href="<?= base_url('leaveliststudent') ?>" style="background-color: #FFDB58; color: black;">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-clock"></i>
                        </div>
                        <span class="nav-link-text ms-1">Permohonan Cuti</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?= base_url('logout'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-upload"></i>
                        </div>
                        <span class="nav-link-text ms-1">Log Keluar</span>
                    </a>
                </li>


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
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Pelajar</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Cuti Pelajar</h6>
                </nav>
               
            </div>
        </nav>
        <!-- End Navbar -->
        <main class="container">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Pelajar Latihan Industri</h6>
        </div>
        <div class="card-body pt-4 p-3">
        <i class="bi bi-person-fill display-1 text-primary" style="font-size: 10rem"></i>
        <h1 class="display-1 h1">Permohonan Cuti Pelajar</h1>
      </header>
      <!-- Form -->
      <form id="LeaveRequestForm" action="<?= base_url('leave/submit') ?>" method="post">
        <!-- Name -->
        <div class="row mb-3">
  <div class="col-6">
    <label class="form-label">Nama Pelajar</label>
    <input type="text" class="form-control" value="<?= session()->get('stu_name'); ?>" id="stu_name" required />
  </div>
  <div class="col-6">
    <label class="form-label">Nama Institut Pengajian</label>
    <input type="text" class="form-control" id="EmployeeID" value="<?= session()->get('ipt_name'); ?>" required />
  </div>
</div>
   

        
<div class="row mb-3">
  <div class="col-6">
    <label class="form-label">Alamat Semasa Bercuti</label>
    <input type="text" class="form-control" id="leave_add" required />
  </div>
  <div class="col-6">
    <label class="form-label">Nombor Telefon</label>
    <input type="text" class="form-control" id="stu_fon_no" value="<?= session()->get('stu_fon_no'); ?>"required />
  </div>
</div>
        <!-- Tarikh Mula Cuti and Tarikh Akhir Cuti -->
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Tarikh Mula Cuti</label>
            <input type="date" class="form-control" id="start_date" required />
        </div>
        <div class="col">
            <label class="form-label">Tarikh Akhir Cuti</label>
            <input type="date" class="form-control" id="end_date" required />
        </div>
    </div>
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Alasan</label>
            <input type="text" class="form-control" id="reason" placeholder="Alasan" required />
          </div>
    </div>
          <div id="reasonsSection">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Alasan Khas</label>
                    <input type="text" class="form-control" id="special_reason" name="Reasons" placeholder="Alasan boleh dimasukkan sekiranya permohonan kurang dari tiga(3) hari" required disabled />
                </div>
            </div>
            <div>
    <div class="row mb-3">
        <label class="form-label">Tarikh Permohonan</label>
        <div class="col">
            <input type="date" class="form-control" id="apply_date" value="<?= date('Y-m-d'); ?>" readonly required />
        </div>
    </div>
</div>
 <!-- Rules Checkbox -->
 <div class="row mb-3">
                            <div class="col">
                                <input type="checkbox" id="rulesCheckbox" onclick="toggleSubmitButton()">
                                <label class="form-label" for="rulesCheckbox">Permohonan mesti dihantar tiga(3) hari sebelum memulakan cuti anda.</label>
                            </div>
                            
                        </div>
        </div>

        <div class="row mb-3">
                            
                            <div class="col">
                                <input type="checkbox" id="rulesCheckbox" onclick="toggleSubmitButton()">
                                <label class="form-label" for="rulesCheckbox">Tindakan anda menghantar permohonan kurang dari tiga(3) hari akan ditolak oleh Penyelia, tanpa alasan yang kukuh.</label>
                            </div>
                        </div>
        </div>
        <button type="submit" id="submitButton" class="btn btn-primary w-100 shadow-sm" disabled>Submit</button>

      </form>
    </section>
  </div>

    
    <!--   Core JS Files   -->
    <script src="assets/dashboardassets/js/core/popper.min.js"></script>
    <script src="assets/dashboardassets/js/core/bootstrap.min.js"></script>
    <script src="assets/dashboardassets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/dashboardassets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="assets/dashboardassets/js/plugins/chartjs.min.js"></script>
    
    <script>
    // Function to initialize Scrollbar if on Windows platform
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        };
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

    // Function to toggle submit button based on checkbox state
    function toggleSubmitButton() {
        var checkbox = document.getElementById('rulesCheckbox');
        var submitButton = document.getElementById('submitButton');
        submitButton.disabled = !checkbox.checked;
    }

    function handleDateChange() {
    const startDateStr = document.getElementById('StartDate').value.trim();
    const applyDateStr = document.getElementById('ApplyDate').value.trim();

    const startDate = new Date(startDateStr);
    const applyDate = new Date(applyDateStr);

    // Calculate the difference in milliseconds
    const timeDifference = Math.abs(startDate.getTime() - applyDate.getTime());
    // Convert milliseconds to days
    const differenceInDays = Math.ceil(timeDifference / (1000 * 3600 * 24));

    // Enable or disable reasons input field based on the difference in days
    const reasonsInput = document.getElementById('Reasons');
    if (differenceInDays <= 3) {
        reasonsInput.disabled = false;
        reasonsInput.value = ''; // Clear reasons if enabled
    } else {
        reasonsInput.disabled = true;
        reasonsInput.value = ''; // Clear reasons if disabled
    }
}




document.addEventListener('DOMContentLoaded', function() {
    // Call handleDateChange initially to set the initial state
    handleDateChange();

    // Attach handleDateChange to the change event of StartDate and ApplyDate
    document.getElementById('StartDate').addEventListener('change', handleDateChange);
    document.getElementById('ApplyDate').addEventListener('change', handleDateChange);
});

    // Function to set current date in ApplyDate input on page load
    document.addEventListener('DOMContentLoaded', function() {
        var currentDate = new Date();
        var year = currentDate.getFullYear();
        var month = (currentDate.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-indexed
        var day = currentDate.getDate().toString().padStart(2, '0');

        var formattedDate = `${year}-${month}-${day}`;
        document.getElementById('ApplyDate').value = formattedDate;

        // Initialize reasons input state based on initial dates
        handleDateChange();
    });

</script>




<!-- Github buttons script -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Material Dashboard Control Center script -->
<script src="assets/dashboardassets/js/material-dashboard.min.js?v=3.0.0"></script>

</body>

</html>