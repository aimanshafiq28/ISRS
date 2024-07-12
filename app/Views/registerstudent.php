<!DOCTYPE html>
<html>
<head>
<title>Account registration form</title>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<style>
    html, body {
        min-height: 100%;
    }
    body, div, form, input, select, p {
        padding: 0;
        margin: 0;
        outline: none;
        font-family: Roboto, Arial, sans-serif;
        font-size: 14px;
        color: #666;
    }
    h1 {
        margin: 0;
        font-weight: 400;
    }
    h3 {
        margin: 12px 0;
        color: #8ebf42;
    }
    .main-block {
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fff;
    }
    form {
        width: 100%;
        padding: 20px;
    }
    fieldset {
        border: none;
        border-top: 1px solid #8ebf42;
    }
    .account-details, .personal-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .account-details > div, .personal-details > div > div {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    .account-details > div, .personal-details > div, input, label {
        width: 100%;
    }
    label {
        padding: 0 5px;
        text-align: right;
        vertical-align: middle;
    }
    input {
        padding: 5px;
        vertical-align: middle;
    }
    .checkbox {
        margin-bottom: 10px;
    }
    select, .children, .gender, .bdate-block {
        width: calc(100% + 26px);
        padding: 5px 0;
    }
    select {
        background: transparent;
    }
    .gender input {
        width: auto;
    }
    .gender label {
        padding: 0 5px 0 0;
    }
    .bdate-block {
        display: flex;
        justify-content: space-between;
    }
    .birthdate select.day {
        width: 35px;
    }
    .birthdate select.month {
        width: calc(100% - 94px);
    }
    .birthdate input {
        width: 38px;
        vertical-align: unset;
    }
    .checkbox input, .children input {
        width: auto;
        margin: -2px 10px 0 0;
    }
    .checkbox a {
        color: #8ebf42;
    }
    .checkbox a:hover {
        color: #82b534;
    }
    button {
        width: 100%;
        padding: 10px 0;
        margin: 10px auto;
        border-radius: 5px;
        border: none;
        background: #8ebf42;
        font-size: 14px;
        font-weight: 600;
        color: #fff;
    }
    button:hover {
        background: #82b534;
    }
    @media (min-width: 568px) {
        .account-details > div, .personal-details > div {
            width: 50%;
        }
        label {
            width: 40%;
        }
        input {
            width: 80%;
        }
        select, .children, .gender, .bdate-block {
            width: calc(80% + 16px);
        }
    }
</style>
</head>
<body>
<div class="main-block">
    <form action="<?= base_url('student_create') ?>" method="post" enctype="multipart/form-data">
        <h1>Borang Pendaftaran Pelajar Latihan Industri</h1>
        <fieldset>
            <legend>
                <h3>Maklumat Log Masuk</h3>
            </legend>
            <div class="account-details">
                <div><label for="ic_number">Nombor Kad Pengenalan*</label><input type="text" id="ic_number" name="ic_number" required></div>
                <div><label for="stu_password">Kata Laluan*</label><input type="password" id="stu_password" name="stu_password" required></div>
            </div>
            </fieldset>
            <fieldset>
                <legend>
            <h3>Maklumat Peribadi</h3>
                </legend>
                <div class="personal-details">
                    <div>
                        <div><label for="stu_name">Nama Pelajar*</label><input type="text" id="stu_name" name="stu_name" required></div>
                        <div><label for="stu_matrik">Nombor Matrik*</label><input type="text" id="stu_matrik" name="stu_matrik" required></div>
                        <div><label for="end_li">Tarikh Lahir*</label><input type="date" id="stu_dob" name="stu_dob" required></div>
                    
                    <div><label for="stu_address">Alamat*</label><input type="text" id="stu_address" name="stu_address" required></div>
                    <div><label for="stu_home_no">Nombor Telefon Rumah*</label><input type="text" id="stu_home_no" name="stu_home_no" required></div>
                    <div><label for="stu_fon_no">Nombor Telefon Bimbit*</label><input type="text" id="stu_fon_no" name="stu_fon_no" required></div>
                    
                    <div><label for="stu_email">Alamat Email*</label><input type="email" id="stu_email" name="stu_email" required></div>
                    <div><label for="stu_pic">Gambar Pelajar*</label><input type="file" id="stu_pic" name="stu_pic" accept="image/*" required></div>
                </div>
            </fieldset>
            <fieldset>
                <legend>
            <h3>Maklumat Latihan Industri</h3>
                </legend>
                <div class="personal-details">
                    <div>
                        <div><label for="start_li">Tarikh Mula*</label><input type="date" id="start_li" name="start_li" required></div>
                        <div><label for="end_li">Tarikh Tamat*</label><input type="date" id="end_li" name="end_li" required></div>
                        <div><label for="stu_course">Jangkamasa Latihan*</label><input type="text" id="stu_course" name="stu_course" required></div>
                        <div><label for="ipt_name">Nama IPTA/IPTS*</label><input type="text" id="ipt_name" name="ipt_name" required></div>
                        <div><label for="ipt_add">Alamat IPTA/IPTS*</label><input type="text" id="ipt_add" name="ipt_add" required></div>
                        <div><label for="ipt_no">Nombor Telefon IPTA/IPTS*</label><input type="text" id="ipt_no" name="ipt_no" required></div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>
            <h3>Kontak Kecemasan</h3>
                </legend>
                <div class="personal-details">
                    <div>
                        <div><label for="emergency_contact_name">Nama*</label><input type="text" id="emergency_contact_name" name="emergency_contact_name" required></div>
                        <div><label for="emergency_contact_no">Nombor Telefon Bimbit*</label><input type="text" id="emergency_contact_no" name="emergency_contact_no" required></div>
                        <div>
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
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>
            <h3>Maklumat Penyelia</h3>
                </legend>
                <div class="personal-details">
                    <div>
                        <div><label for="ipt_supervisor_name">Nama Penyelia IPTA/IPTS*</label><input type="text" id="sv_ipt" name="sv_ipt" required></div>
                        <div><label for="ipt_supervisor_phone">Nombor Telefon Bimbit*</label><input type="text" id="sv_fon_no" name="sv_fon_no" required></div>
                        <div><label for="ppkt_supervisor_name">Nama Penyelia PPKT*</label><input type="text" id="sv_ppkt" name="sv_ppkt" required></div>
                    </div>
                </div>
            </fieldset>
        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>
