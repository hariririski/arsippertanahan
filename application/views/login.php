<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Login Aplikasi Arsip Pertanahan</title>
    <link href="dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="dist/css/pages/authentication.css" rel="stylesheet">

</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Arsip Pertanahan</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(assets/images/big/bg.jpg) no-repeat left center;">
            <div class="container">
                <!-- <div class="row">
                    <div class="col s12 l8 m6 demo-text">
                        <span class="db"><img src="assets/images/logo-icon.png" alt="logo" /></span>
                        <span class="db"><img src="assets/images/logo-text.png" alt="logo" /></span>
                        <h1 class="font-light m-t-40">Welcome to the <span class="font-medium black-text">Material Admin</span></h1>

                    </div>
                </div> -->
                <div class="auth-box auth-sidebar">
                    <div id="loginform">
                        <div class="p-l-10">
                            <h5 class="font-medium m-b-0 m-t-40">Sign In to Admin</h5>

                        </div>
                        <!-- Form -->
                        <div class="row">
                            <form class="col s12" method="post" action="<?php echo base_url(); ?>Login/proses_login">
                                <!-- email -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input  type="text" class="validate" required name="username" autofocus>
                                        <label for="email">Username</label>
                                    </div>
                                </div>
                                <!-- pwd -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate" required name="password">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <!-- pwd -->

                                <!-- pwd -->
                                <div class="row m-t-40">
                                    <div class="col s12">
                                        <button class="btn-large w100 blue accent-4" type="submit">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/js/materialize.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('.tooltipped').tooltip();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $(function() {
        $(".preloader").fadeOut();
    });
    </script>
</body>

</html>
