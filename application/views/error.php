<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Error</title>
    <link href="dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="dist/css/pages/error-pages.css" rel="stylesheet">

</head>

<body>
    <section id="wrapper" class="error-page">
        <div class="error-box">
            <div class="error-body center-align">
                <h1>404</h1>
                <h3>Page Not Found!</h3>
                <p class="m-t-30 m-b-30">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
                <a href="<?php echo base_url(); ?>home" class="btn btn-round red waves-effect waves-light m-b-40">Back to home</a>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/js/materialize.min.js"></script>
</body>

</html>
