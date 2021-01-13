
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ? $title : 'Bienvenue' ?> | Cash Money Agency !</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/global/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/normalize.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/main.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/form/all-type-forms.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?= base_url(); ?>/global/js/vendor/modernizr-2.8.3.min.js"></script>
    <style type="text/css">
        body {
            font-family: Segoe UI, Roboto, sans-serif !important;
        }

        .bg-image {
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .bg-light {
            background: #f1f3f8 !important;
        }

        .border-primary {
            border-color: #4285f4 !important;
        }
    </style>
</head>

<body style="background-image: url('<?php echo base_url("global/img/product/profile-bg.jpg"); ?>'); font-family: Segoe UI, Roboto, sans-serif !important;"
      class="bg-image">

    <?php
    if ((isset($_SESSION['success'])) OR (isset($_SESSION['error']))) { ?>
        <div class="container mt-2">
            <h6 class="text-dark">
                <?php include_once "application/views/alertes/alert-index.php"; ?>
            </h6>
        </div>
    <?php } ?>
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="content-error">

                <h1 class="display-1 text-danger font-title font-weight-bold">ERROR <span class="counter"> 404</span></h1>
                <h3 class="display-4 font-title text-danger font-weight-bold">Page non trouvée.
                    La page que vous tentez d'afficher n'existe pas ou une autre erreur s'est produite.
                </h3>
                <p style="color: white">Sorry, but the page you are looking for has note been found.
                    Try checking the URL for the error, then hit the refresh button on your browser or try found something else in our app.</p>
                    <a href="<?php echo base_url(); ?>"
                       class="ps-recovered" style="background-color: transparent; color: blue; font-weight: bold;">
                        <span class="fa fa-home fa-lg">  </span>Accueil
                </a> <a href="javascript:history.back()"
                   class="ps-recovered" style="background-color: transparent; color: blue; font-weight: bold;">
                    <span class="fa fa-arrow-left fa-lg">  </span>Précédente
                </a><a href="javascript:history.back()"
                   class="ps-recovered" style="background-color: transparent; color: blue; font-weight: bold;">
                    Signaler<span class="fa fa-arrow-right fa-lg">  </span>
                </a>
            </div>
        </div>
    </div>

    

<!--Footer-->
<footer class="page-footer text-center font-small navbar-fixed-bottom" style="color: #ffffff">

    <div class="card" >
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="float-left text-left">

                        <img src="<?= base_url(); ?>global/img/logo/educaza100.png"
                             height="75"> <span style="background-color: transparent; color: blue; font-weight: bold;">
                            © 2020 -
                            <script>document.write(new Date().getFullYear());</script>
                            | <a href="https://congoagile.com" style="background-color: transparent; color: blue; font-weight: bold;">Cash Money Application</a>
                        </span>
                    </div>
                </div>
                <div class="col-sm-6" >
                    <div class="float-right text-right" style="margin-right: 10px!important;">

                        <span class="small" style="background-color: transparent; color: #ffffff; font-weight: bold;">Powered by
                            <a href="https://congoagile.com" target="_blank" style="background-color: transparent; color: blue; font-weight: bold;">Trecazad Team</a>. Assistance et
                            services informatiques !
                        </span>
                        <br>
                        <span class="small" style="background-color: transparent; color: #ffffff; font-weight: bold;">
                            Educazad et son logo sont des marques déposées de
                            <a href="https://congoagile.com" style="background-color: transparent; color: blue; font-weight: bold;">Trecazad,
                                Inc.</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/.Footer-->

<!-- jquery
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/wow.min.js"></script>
<!-- price-slider JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/jquery-price-slider.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/owl.carousel.min.js"></script>
<!-- sticky JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/jquery.sticky.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= base_url(); ?>/global/js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/metisMenu/metisMenu.min.js"></script>
<script src="<?= base_url(); ?>/global/js/metisMenu/metisMenu-active.js"></script>
<!-- tab JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/tab.js"></script>
<!-- icheck JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/icheck/icheck.min.js"></script>
<script src="<?= base_url(); ?>/global/js/icheck/icheck-active.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/plugins.js"></script>
<!-- main JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/main.js"></script>
<!-- tawk chat JS-->
    
<script src="<?= base_url(); ?>/global/js/tawk-chat.js"></script>


</body>

</html>
