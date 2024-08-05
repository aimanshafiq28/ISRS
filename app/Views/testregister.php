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
.requirement {
            color: red;
        }
        .requirement.valid {
            color: green;
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
                    <a class="nav-link text-white active" href="<?= base_url('LoginStudent') ?>" style="background-color: #FFDB58; color: black;">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="nav-icon fas fa-user"></i>
                        </div>
                        <span class="nav-link-text ms-1">Log Masuk</span>
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
       <form action="<?= base_url('student_create') ?>" method="post" enctype="multipart/form-data">
       <div class="container">
       
    <div class="block profile">
        <fieldset>
            <legend><h3>Maklumat Peribadi</h3></legend>
            <div class="field">
                <div><label for="stu_name">Nama Pelajar*</label><input type="text" id="stu_name" name="stu_name" required></div>
                </div>
            <div class="field">
                <div><label for="stu_matrik">Nombor Matrik*</label><input type="text" id="stu_matrik" name="stu_matrik" required></div>
                </div>
            <div class="field">
                <div><label for="stu_dob">Tarikh Lahir*</label><input type="date" id="stu_dob" name="stu_dob" required></div>
                </div>
            <div class="field">
                <div><label for="stu_address">Alamat*</label><textarea id="stu_address" name="stu_address" required rows="9" cols="87"></textarea></div>
                </div>
            <div class="field">
                <div><label for="stu_home_no">Nombor Telefon Rumah*</label><input type="text" id="stu_home_no" name="stu_home_no" required></div>
                </div>
            <div class="field">
                <div><label for="stu_fon_no">Nombor Telefon Bimbit*</label><input type="text" id="stu_fon_no" name="stu_fon_no" required></div>
                </div>
            <div class="field">
                <div><label for="stu_email">Alamat Email*</label><input type="email" id="stu_email" name="stu_email" required></div>
                </div>
        </fieldset>
    </div>

    <div class="block">
        <fieldset>
            <legend><h3>Maklumat Latihan Industri</h3></legend>
            <div class="field">
                <div><label for="start_li">Tarikh Mula*</label><input type="date" id="start_li" name="start_li" required></div>
                </div>
            <div class="field">
                <div><label for="end_li">Tarikh Tamat*</label><input type="date" id="end_li" name="end_li" required></div>
                </div>
            <div class="field">
                <div><label for="stu_course">Jangkamasa Latihan*</label><input type="text" id="stu_course" name="stu_course" required></div>
                </div>
            <div class="field">
                <div><label for="ipt_name">Nama IPTA/IPTS*</label><input type="text" id="ipt_name" name="ipt_name" required></div>
                </div>
            <div class="field">
                <div><label for="ipt_add">Alamat IPTA/IPTS*</label><input type="text" id="ipt_add" name="ipt_add" required></div>
                </div>
            <div class="field">
                <div><label for="ipt_no">Nombor Telefon IPTA/IPTS*</label><input type="text" id="ipt_no" name="ipt_no" required></div>
                </div>
        </fieldset>
    </div>

    <div class="block">
        <fieldset>
            <legend><h3>Kontak Kecemasan</h3></legend>
            <div class="field">
                <div><label for="emergency_contact_name">Nama*</label><input type="text" id="emergency_contact_name" name="emergency_contact_name" required></div>
                </div>
            <div class="field">
                <div><label for="emergency_contact_no">Nombor Telefon Bimbit*</label><input type="text" id="emergency_contact_no" name="emergency_contact_no" required></div>
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
                <div><label for="sv_ipt">Nama Penyelia IPTA/IPTS*</label><input type="text" id="sv_ipt" name="sv_ipt" required></div>
                </div>
            <div class="field">
                <div><label for="sv_fon_no">Nombor Telefon Bimbit*</label><input type="text" id="sv_fon_no" name="sv_fon_no" required></div>
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

    <div class="field">
            <label for="ic_number">Nombor Kad Pengenalan*</label>
            <input type="text" id="ic_number" name="ic_number" value="<?= old('ic_number') ?>" required>
        </div>
        <div class="field">
            <label for="stu_password">Kata Laluan*</label>
            <input type="password" id="stu_password" name="stu_password" required>
            <span class="toggle-password" id="toggle-password">&#128065;</span>
        </div>
        <div id="password-requirements">
            <ul>
                <li class="requirement" id="length-requirement">At least 8 characters</li>
                <li class="requirement" id="uppercase-requirement">At least one uppercase letter</li>
                <li class="requirement" id="number-requirement">At least one number</li>
                <li class="requirement" id="symbol-requirement">At least one symbol</li>
            </ul>
        </div>
        <?php if (isset($validation) && $validation->getErrors()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($validation->getErrors() as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
        <?php endif ?>
    </div>
                
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

   <script>
        document.getElementById('stu_password').addEventListener('input', function() {
            const password = this.value;
            const lengthRequirement = document.getElementById('length-requirement');
            const uppercaseRequirement = document.getElementById('uppercase-requirement');
            const numberRequirement = document.getElementById('number-requirement');
            const symbolRequirement = document.getElementById('symbol-requirement');
            
            // Check length
            if (password.length >= 8) {
                lengthRequirement.classList.add('valid');
            } else {
                lengthRequirement.classList.remove('valid');
            }
            
            // Check for uppercase letter
            if (/[A-Z]/.test(password)) {
                uppercaseRequirement.classList.add('valid');
            } else {
                uppercaseRequirement.classList.remove('valid');
            }
            
            // Check for number
            if (/\d/.test(password)) {
                numberRequirement.classList.add('valid');
            } else {
                numberRequirement.classList.remove('valid');
            }

            //check symbol
            if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
            symbolRequirement.classList.add('valid');
        } else {
            symbolRequirement.classList.remove('valid');
        }
        });

        document.querySelector('form').addEventListener('submit', function(event) {
        const lengthRequirement = document.getElementById('length-requirement').classList.contains('valid');
        const uppercaseRequirement = document.getElementById('uppercase-requirement').classList.contains('valid');
        const numberRequirement = document.getElementById('number-requirement').classList.contains('valid');
        const symbolRequirement = document.getElementById('symbol-requirement').classList.contains('valid');

        
        if (!lengthRequirement || !uppercaseRequirement || !numberRequirement) {
            event.preventDefault();
            alert('Please ensure the password meets all the requirements.');
        }
    });

    document.getElementById('toggle-password').addEventListener('click', function() {
        const passwordField = document.getElementById('stu_password');
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        this.textContent = type === 'password' ? '👁️' : '🔒';
    });
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function onSubmit(event) {
        event.preventDefault();
        const response = grecaptcha.getResponse();
        if (response.length === 0) {
            alert("Please complete the CAPTCHA!");
            return false;
        } else {
            document.getElementById("myForm").submit();
        }
    }
</script>
</body>

</html>