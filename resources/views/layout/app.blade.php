<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Wuabi Thon</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <link rel="apple-touch-icon" sizes="76x76" href="<?= asset('assets/img/apple-icon.png') ?>"/>
    <link rel="icon" type="image/png" href="<?= asset('assets/img/favicon.png') ?>"/>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>


    <!-- CSS Files -->
    <link href="<?= asset('assets/css/bootstrap.min.css') ?>" rel="stylesheet"/>
    <link href="<?= asset('assets/css/material-bootstrap-wizard.css') ?>" rel="stylesheet"/>
      <link href="<?= asset('css/mi.css') ?>" rel="stylesheet"/>

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= asset('assets/css/demo.css') ?>" rel="stylesheet"/>
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('<?= asset('images/slider1.jpeg') ?>')">
    <!--   Creative Tim Branding   -->

    <div class="col-md-6 col-md-offset-3">

        <a href="./">
            <div class="logo">
                <img src="<?= asset('images/wuabilogo.png') ?>">
            </div>
        </a>
    </div>

    <div class="container">
        <div class="row">
            <div class="@yield('width', 'col-sm-10 col-sm-offset-1')">
                @yield('content')
            </div>
        </div> <!-- row -->
    </div> <!--  big container -->

    <div class="footer">
        <div class="container text-center">
            <a href="http://www.wuabi.com.ar">Wuabi</a>
        </div>
    </div>
</div>

@include('loader')

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
