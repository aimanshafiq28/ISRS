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

    <style>
       /* Global styles */
       body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
}

.container {
    display: grid;
    gap: 10px;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: auto auto;
}

.block {
    background-color: #fff;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.block.profile {
    grid-column: span 1;
    grid-row: span 2;
}

.field {
    margin-bottom: 15px;
}

.field label {
    display: block;
    margin-bottom: 5px;
}

.field input[type="text"],
.field input[type="date"],
.field textarea,
.field select {
    width: calc(100% - 50px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.submit-button {
    text-align: center;
}

button[type="submit"] {
    width: 1270px; /* Adjust width as needed */
    height: 50px;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

button[type="submit"]:focus {
    outline: none;
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
                    <a class="nav-link text-white active" href="<?= base_url('dashboardadmin') ?>" style="background-color: #FFDB58; color: black;">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-user"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?= base_url('WaktuAdmin') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-building"></i>
                        </div>
                        <span class="nav-link-text ms-1">Waktu Masuk/Keluar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?= base_url('jadualadmin') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-building"></i>
                        </div>
                        <span class="nav-link-text ms-1">Jadual Admin</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-upload"></i>
                        </div>
                        <span class="nav-link-text ms-1">Notifikasi</span>
                    </a>
                </li>


            </ul>
            <div class="container-fluid px-2 px-md-4">
        
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
       <form action="<?= base_url('student/update/' . $student['ic_number']) ?>" method="post">
       <div class="container">
       
    <div class="block profile">
        <fieldset>
            <legend><h3>Maklumat Peribadi</h3></legend>
            <div class="field">
                <label for="stu_name">Nama Pelajar*</label>
                <input type="text" id="stu_name" name="stu_name" value="<?= $student['stu_name'] ?>" required>
            </div>
            <div class="field">
                <label for="stu_matrik">Nombor Matrik*</label>
                <input type="text" id="stu_matrik" name="stu_matrik" value="<?= $student['stu_matrik'] ?>" required>
            </div>
            <div class="field">
                <label for="stu_dob">Tarikh Lahir*</label>
                <input type="date" id="stu_dob" name="stu_dob" value="<?= $student['stu_dob'] ?>" required>
            </div>
            <div class="field">
                <label for="stu_address">Alamat*</label>
                <textarea id="stu_address" name="stu_address" rows="9" cols="87" required><?= $student['stu_address'] ?></textarea>
            </div>
            <div class="field">
                <label for="stu_home_no">Nombor Telefon Rumah*</label>
                <input type="text" id="stu_home_no" name="stu_home_no" value="<?= $student['stu_home_no'] ?>" required>
            </div>
            <div class="field">
                <label for="stu_fon_no">Nombor Telefon Bimbit*</label>
                <input type="text" id="stu_fon_no" name="stu_fon_no" value="<?= $student['stu_fon_no'] ?>" required>
            </div>
            <div class="field">
                <label for="stu_email">Alamat Email*</label>
                <input type="text" id="stu_email" name="stu_email" value="<?= $student['stu_email'] ?>" required>
            </div>
        </fieldset>
    </div>

    <div class="block">
        <fieldset>
            <legend><h3>Maklumat Latihan Industri</h3></legend>
            <div class="field">
                <label for="start_li">Tarikh Mula*</label>
                <input type="date" id="start_li" name="start_li" value="<?= $student['start_li'] ?>" required>
            </div>
            <div class="field">
                <label for="end_li">Tarikh Tamat*</label>
                <input type="date" id="end_li" name="end_li" value="<?= $student['end_li'] ?>" required>
            </div>
            <div class="field">
                <label for="stu_course">Jangkamasa Latihan*</label>
                <input type="text" id="stu_course" name="stu_course" value="<?= $student['stu_course'] ?>" required>
            </div>
            <div class="field">
                <label for="ipt_name">Nama IPTA/IPTS*</label>
                <input type="text" id="ipt_name" name="ipt_name" value="<?= $student['ipt_name'] ?>" required>
            </div>
            <div class="field">
                <label for="ipt_add">Alamat IPTA/IPTS*</label>
                <input type="text" id="ipt_add" name="ipt_add" value="<?= $student['ipt_add'] ?>" required>
            </div>
            <div class="field">
                <label for="ipt_no">Nombor Telefon IPTA/IPTS*</label>
                <input type="text" id="ipt_no" name="ipt_no" value="<?= $student['ipt_no'] ?>" required>
            </div>
        </fieldset>
    </div>

    <div class="block">
        <fieldset>
            <legend><h3>Kontak Kecemasan</h3></legend>
            <div class="field">
                <label for="emergency_contact_name">Nama*</label>
                <input type="text" id="emergency_contact_name" name="emergency_contact_name" value="<?= $student['emergency_contact_name'] ?>" required>
            </div>
            <div class="field">
                <label for="emergency_contact_no">Nombor Telefon Bimbit*</label>
                <input type="text" id="emergency_contact_no" name="emergency_contact_no" value="<?= $student['emergency_contact_no'] ?>" required>
            </div>
            <div class="field">
                <label for="relationship">Hubungan*</label>
                <select id="relationship" name="relay_contact" required>
                    <option value=""></option>
                    <option value="Ibu/Bapa">Ibu/Bapa</option>
                    <option value="Adik-Beradik">Adik-Beradik</option>
                    <option value="Bapa Saudara/Ibu Saudara">Bapa Saudara/Ibu Saudara</option>
                    <option value="Penjaga">Penjaga</option>
                    <option value="Datuk/Nenek">Datuk/Nenek</option>
                </select>
            </div>
        </fieldset>
    </div>

    <div class="block">
        <fieldset>
            <legend><h3>Maklumat Penyelia</h3></legend>
            <div class="field">
                <label for="sv_ipt">Nama Penyelia IPTA/IPTS*</label>
                <input type="text" id="sv_ipt" name="sv_ipt" value="<?= $student['sv_ipt'] ?>" required>
            </div>
            <div class="field">
                <label for="sv_fon_no">Nombor Telefon Bimbit*</label>
                <input type="text" id="sv_fon_no" name="sv_fon_no" value="<?= $student['sv_fon_no'] ?>" required>
            </div>
            <div class="field">
            <div class="input-group input-group-outline mb-3">
                        <select name="sv_ppkt" id="sv_ppkt" class="form-control">
                        <option value="">Pilih Penyelia</option>
                        <?php foreach ($advisers as $adviser): ?>
                                <option value="<?= $adviser['staff_id'] ?>">
                                    <?= $adviser['staff_name'] ?>
                                </option>
                            <?php endforeach; ?>
                    </select>

                    </div>
                </div>
        </fieldset>
    </div>

    <div class="block">
                <fieldset>
                    <legend><h3>Status</h3></legend>
                    <div class="field">
                        <label for="stu_status">Status*</label>
                        <select id="stu_status" name="stu_status" required>
                            <option value="aktif">Aktif</option>
                            <option value="tidak aktif">Tidak Aktif</option>
                        </select>
                    </div>
                </fieldset>
            </div>
                            </div>
        <button type="submit">Submit</button>
    </form>
</div>

</body>
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