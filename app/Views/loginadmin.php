<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TAGCODE');
    </script>
    <!-- End Google Tag Manager -->
    
    <title>Logee - Login and Register HTML5 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

</head>

<body id="top">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <div class="page_loader"></div>

    <!-- Login start -->
    <div class="login-8">
        <div class="container">
            <div class="row login-box">
                <div class="col-lg-5 col-md-12 bg-img none-992 align-self-center">
                    <div class="info">
                        <div class="logo clearfix">
                            <!-- <a href="login-7.html"> -->
                                <!-- <img src="assets/img/logos/ppkt1.png" alt="logo" class="h-20 inline logo-border"> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 bg-color-16 align-self-center">
                    <div class="form-section">
                        <div class="logo-2 clearfix">
                            <a href="login-7.html">
                                <!-- <img src="assets/img/logos/logo-2.png" alt="logo"> -->
                            </a>
                        </div>
                        <h3>Log Masuk Admin</h3>
                        <div class="login-inner-form">
                            <form action="<?= base_url('admin-login') ?>" method="post">
                                <?php if (session()->getFlashdata('msg')) : ?>
                                    <div class="alert alert-warning">
                                        <?= session()->getFlashdata('msg') ?>
                                    </div>
                                <?php endif; ?>
                                <div class="form-group form-box">
                                    <input type="text" id="ad_username" name="ad_username" class="input-text" placeholder="Usename">
                                    <i class="flaticon-mail-2"></i>
                                </div>
                                <div class="form-group form-box">
                                    <input type="password" name="ad_password" class="input-text" placeholder="Password">
                                    <i class="flaticon-password"></i>
                                </div>
                                <div class="checkbox clearfix">
                                    <a href="forgot-password-7.html">Lupa Kata Laluan</a>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn-md btn-theme btn-block" style="background-color: #BA68C8; color: #ffffff;">Log Masuk</button>
                                </div>
                                <p class="text">Don't have an account?<a href="register-7.html"> Register here</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login end -->

    <!-- External JS libraries -->
    <script src="assets/js/jquery-2.2.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Custom JS Script -->
</body>

</html>
