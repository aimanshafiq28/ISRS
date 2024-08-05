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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">

    <style>
        /* Custom styles for the table and buttons */
        .card-header {
            background: linear-gradient(90deg, rgba(0,123,255,1) 0%, rgba(0,123,255,0.8) 100%);
            color: white;
        }
        .table thead th {
            background-color: #f8f9fa;
            color: #495057;
        }
        .status-button {
            display: inline-block;
            padding: 0.55em 0.9em;
            font-size: 0.75em;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.45rem; 
            border: 2px solid; /* Border style */
            color: white; /* Text color */
        }
        .status-diluluskan {
            background-color: #198754; /* Green background */
            border-color: #198754; /* Green border */
        }
        .status-tidak-diluluskan {
            background-color: #dc3545; /* Red background */
            border-color: #dc3545; /* Red border */
        }
        .status-dalam-proses {
            background-color: #6c757d; /* Grey background */
            border-color: #6c757d; /* Grey border */
        }

        .btn-right {
            display: flex;
            justify-content: flex-end;
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
                    <a class="nav-link text-white " href="<?= base_url('dashboard') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-user"></i>
                        </div>
                        <span class="nav-link-text ms-1">Maklumat Pelajar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " >
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
                    <a class="nav-link text-white " >
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
       

        <div class="container-fluid py-4">
        <div class="btn-right mb-3">
                                <button type="button" class="btn btn-primary" onclick="window.location.href='<?= base_url('cutipelajar') ?>'">Permohonan Baru</button>
                            </div>
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Permohonan Cuti Pelajar</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Kad Pengenalan</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tarikh Permohonan</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status Permohonan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($studentleaves as $leave): ?>
                                <tr>
                                    <td class="text-xs font-weight-bold"><?= esc($leave['ic_number']) ?></td>
                                    <td class="text-xs font-weight-bold"><?= esc($leave['apply_date']) ?></td>
                                    <td class="text-xs font-weight-bold">
                                        <?php 
                                            $statusClass = '';
                                            $statusText = '';

                                            if ($leave['leave_status'] == 'diluluskan') {
                                                $statusClass = 'status-diluluskan';
                                                $statusText = 'Diluluskan';
                                            } elseif ($leave['leave_status'] == 'tidak diluluskan') {
                                                $statusClass = 'status-tidak-diluluskan';
                                                $statusText = 'Tidak Diluluskan';
                                            } else {
                                                $statusClass = 'status-dalam-proses';
                                                $statusText = 'Dalam Proses';
                                            }
                                        ?>
                                        
                                        <span class="status-button <?= $statusClass ?>"><?= esc($statusText) ?></span>                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </main>

    
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