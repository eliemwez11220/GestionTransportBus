
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ? $title : 'Bienvenue' ?> | BusManagement Applicattion !</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/global/img/logo/coding.png">
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

<body style="background-image: url('<?php echo base_url("global/bus001.jpg"); ?>'); font-family: Segoe UI, Roboto, sans-serif !important;"
      class="bg-image">
<div class="error-pagewrap" style="padding-top: 0px!important; margin-top: 0px!important;">
    <div class="error-page-int" >
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body">
                    <div class="text-center m-b-md custom-login">
                        <?php if (isset($page_error)) { ?>
                            <span class="text-danger"><?= $page_error; ?></span>
                        <?php } elseif (isset($page_success)) { ?>
                            <span class="text-success"><?= $page_success; ?></span>
                        <?php } else { ?>
                            <b>BusManagement Application</b>
                        <?php } ?>
                        <hr>
                       
                    </div>
                    <form action="<?= base_url('authenticate/login'); ?>" id="loginForm" method="post">
                        <div class="form-group">
                            <label class="control-label" for="username">Pseudo ou Email</label>
                            <input type="text" placeholder="Nom utilisateur" title="Please enter your username or your email address"
                                   required value="<?= set_value('username'); ?>" name="username" id="username"
                                   class="form-control bg-light border-primary" autofocus style="border-radius: 100px!important;">
                            <span class="help-block small"><?= form_error('username'); ?></span>
                        </div>
                        <div class="form-group">
                                <label class="control-label" for="password">Mot de passe</label>
                            <input type="password" title="Please enter your password" placeholder="*********" required=""
                                   value="" name="password" id="password"
                                   class="form-control bg-light border-primary"  style="border-radius: 100px!important;">
                            <span class="help-block small"><?= form_error('password'); ?></span>
                        </div>
                        <!--

                        <div class="checkbox login-checkbox">
                            <label>
                                    <input type="checkbox" class="i-checks"> Remember me </label>
                            <p class="help-block small">(if this is a private computer)</p>
                        </div>
                      -->
                        <!-- forget password -->

                        <button class="btn btn-primary btn-block loginbtn text-uppercase"
                        style="border-radius:100px!important;">Se connecter
                        </button>
                    
                    </form>
                </div>
            </div>
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

                        <img src="<?= base_url(); ?>global/img/logo/coding.png"
                             height="50" width="50"> <span style="background-color: transparent; color: white; font-weight: bold;">
                            © 2020 -
                            <script>document.write(new Date().getFullYear());</script>
                            | <a href="https://congoagile.com" style="background-color: transparent; color: white; font-weight: bold;">BusManagement Application</a>
                        </span>
                         <span style="background-color: transparent; color: #ffffff; font-weight: bold;">Powered by
                            <a href="https://congoagile.com" target="_blank" style="background-color: transparent; color: white; font-weight: bold;">Trecazad Team</a>.

                        </span>
                    </div>
                </div>
                <div class="col-sm-6" >
                    <div class="float-right text-right" style="margin-right: 10px!important;">

                       
                        <br>
                        <span class="small" style="background-color: transparent; color: #ffffff; font-weight: bold;">
                           
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


</body>

</html>
