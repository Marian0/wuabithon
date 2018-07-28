<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Wuabi Thon</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="apple-touch-icon" sizes="76x76" href="<?= asset('assets/img/apple-icon.png') ?>" />
    <link rel="icon" type="image/png" href="<?= asset('assets/img/favicon.png') ?>" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="<?= asset('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?= asset('assets/css/material-bootstrap-wizard.css') ?>" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= asset('assets/css/demo.css') ?>" rel="stylesheet" />
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('<?= asset('assets/img/wizard-book.jpg') ?>')">
    <!--   Creative Tim Branding   -->
    <a href="http://creative-tim.com">
        <div class="logo-container">
            <div class="logo">
                <img src="<?= asset('assets/img/new_logo.png') ?>">
            </div>
            <div class="brand">
                Creative Tim
            </div>
        </div>
    </a>

    <!--  Made With Material Kit  -->
    <a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
        <div class="brand">MK</div>
        <div class="made-with">Made with <strong>Material Kit</strong></div>
    </a>

    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                @yield('content')
            </div>
        </div> <!-- row -->
    </div> <!--  big container -->

    <div class="footer">
        <div class="container text-center">
            Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/material-bootstrap-wizard">here.</a>
        </div>
    </div>
</div>

</body>
<!--   Core JS Files   -->
<script src="<?= asset('assets/js/jquery-2.2.4.min.js') ?>" type="text/javascript"></script>
<script src="<?= asset('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?= asset('assets/js/jquery.bootstrap.js') ?>" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="<?= asset('assets/js/material-bootstrap-wizard.js') ?>"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="<?= asset('assets/js/jquery.validate.min.js') ?>"></script>
@yield('scripts')
</html>
