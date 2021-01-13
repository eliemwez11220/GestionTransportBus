<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= (!empty($title) ? $title: "User"); ?> | Trecazad - Agence digitale</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/global/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/font-awesome.min.css">
    <!-- fontawesome icones
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/fonts/fa.css">
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
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/educate-custon-icon.css">
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
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/global/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?= base_url(); ?>/global/js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript">
        function reduire(){
            window.zoomStep(90);
        }
        function reduirezoom(){
            document.body.style.zoom=0.9;
        }
    </script>
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

<body>
<?php
$expe_date = new DateTime($this->session->created);
$d2 = new DateTime(date('Y-m-d'));
$date_time = new DateTime(date('Y-m-d H:i:s'));
$diff_experience = $expe_date->diff($date_time, true);
$nb_ans_experience = $diff_experience->y;    // total annees experiences
/*
$nb_mois = $diff->m;
$nb_jrs = $diff->d;
//total de jours calculés
$total_mois = ($nb_ans * 12) + $nb_mois;
$total_jours = ($total_mois * 30) + $nb_jrs;*/
?>
<?php
if ((isset($_SESSION['success'])) OR (isset($_SESSION['error']))) { ?>
    <div class="container">
        <h6 class="text-dark">
            <?php include_once "application/views/alertes/alert-index.php"; ?>
        </h6>
    </div>
<?php } ?>

<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-cards-item">
                    <div class="single-product-image">
                        <a href="<?php echo base_url() . trim($this->session->avatar); ?>"><img
                                    src="<?= base_url(); ?>/global/img/product/profile-bg.jpg" alt="Avatar"></a>
                    </div>
                    <div class="single-product-text">

                        <?php if (!empty($this->session->avatar)) { ?>

                        <img src="<?php echo base_url() . trim($this->session->avatar); ?>"
                         alt="Avatar"/>

                            <?php } else { ?>
                          <img src="<?php echo base_url(); ?>global/img/avatars/avatar.png"
                           alt="Avatar"/>
                              <?php } ?>

                        <!--
                        <img src="<?php //echo base_url() . trim($this->session->avatar); ?>" alt="Avatar">-->

                        <h3><a class="cards-hd-dn" href="#"><?= $this->session->fullname; ?></a></h3>
                        <h5 class="text-capitalize"><?= $this->session->fonction; ?></h5>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="cards-dtn">
                                    <h3><span class="counter"><?= $nb_ans_experience; ?></span> <span
                                                class="small">ans</span></h3>
                                    <p>Usage</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="cards-dtn">
                                    <h3><span class="counter">5</span> <span
                                                class="small">ans</span></h3>
                                    <p>Anciennete</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="cards-dtn">
                                    <h3><span class="counter">75</span></h3>
                                    <p>Views</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p>Email ID<br/>
                                        <span class="text-lowercase">
                                        <a href="mailto:<?= $this->session->email; ?>"
                                           style="font-size: small; font-weight: bold"><?= $this->session->email; ?></a>
                                        </span></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p>Phone<br/>
                                        <a href="tel:<?= $this->session->phone; ?>"
                                           style="font-size: small; font-weight: bold"><?= $this->session->phone; ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                        <?php if (isset($error)) { ?>
                            <div class="alert alert-danger text-center">
                                <span class="h5"><?= $error; ?></span>
                            </div>
                        <?php } elseif (isset($success)) { ?>
                            <div class="alert alert-success text-center">
                                <span class="h5"><?= $success; ?></span>
                            </div>
                        <?php } ?>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                        <ul class="breadcome-menu">
                            <li>
                                <a href="<?php echo base_url('dashboard/index'); ?>"
                                   class="ps-recovered"
                                   style="background-color: transparent; color: blue; font-weight: bold;">
                                    <span class="fa fa-arrow-left fa-lg">  </span>Reveniir a l'accueil
                                </a> <span class="bread-slash">/</span>
                            </li>
                            <li>
                                <a href="<?php echo base_url('dashboard/logOut'); ?>"
                                   onclick="return confirm('Voulez-vous vraiment fermer votre session ? notez que toutes les opéations encours seront annulées') "
                                   class="ps-recovered"
                                   style="background-color: transparent; color: blue; font-weight: bold;">
                                    <span class="fa fa-lock fa-lg">  </span> Deconnexion
                                </a> <span class="bread-slash">/</span>
                            </li>
                        
                        </ul>
                    </div>
                </div>
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#INFORMATION">Mon compte</a></li>
                        <li><a href="#avatar">Photo profil</a></li>
                        <li><a href="#password">Security & Password</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        
                        <div class="product-tab-list tab-pane fade"
                             id="avatar">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">

                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12">
                                                <h5 class="grey-text">Modifier Photo de profil</h5>
                                                <p class="small">
                                                    Veuillez selectionner une photo sur votre ordinateur ou sur votre
                                                    telephone
                                                    pour changer le profil actuel.
                                                </p>
                                                <p class="small">
                                                    <?php if (isset($error)) {
                                                        echo $error;
                                                    } ?>
                                                </p>

                                            </div>
                                        </div>
                                        <div class="row mt-t-30">
                                            <div class="col-lg-2 col-sm-2">
                                                <div class="profile-img">
                                                    <?php if (!empty($this->session->avatar)) { ?>
                                                        <img src="<?php echo base_url() . trim($this->session->avatar); ?>"
                                                             alt="Avatar"
                                                             style="border-radius: 10px!important; width:100px!important;"/>
                                                    <?php } else { ?>
                                                        <img src="<?php echo base_url(); ?>global/img/avatars/avatar.png"
                                                             alt="Avatar" style="border-radius: 10px!important;"/>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-10 col-sm-10">

                                                <form enctype="multipart/form-data" id="loginForm" method="POST"
                                                      action="<?= base_url('user/uploadPicture'); ?>">
                                                    <div class="form-group">
                                                        <input type="file" placeholder="Selectionnez un fichier"
                                                               title="Please select the picture in your gallery"
                                                               value="<?= set_value('userfile'); ?>"
                                                               name="userfile" id="userfile"
                                                               class="form-control bg-light border-primary" autofocus
                                                               style="border-radius: 15px!important;" required>
                                                        <span class="help-block small"><?= form_error('userfile'); ?></span>
                                                    </div>

                                                    <button class="btn btn-primary btn-block loginbtn"
                                                            style="border-radius:20px!important;">Changer ma photo de
                                                        profil
                                                    </button>
                                                </form>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade"
                             id="password">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">

                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12">

                                                <div class="text-center">
                                                    <h5 class="grey-text">Modifier le mot de passe</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hpanel">
                                            <div class="panel-body">
                                                <form action="<?= base_url('user/changePassword'); ?>" id="loginForm"
                                                      method="post">
                                                    <div class="form-group">
                                                        <input type="email" placeholder="yourname@gmail.com"
                                                               title="Please enter your email address" name="email"
                                                               id="email"
                                                               class="form-control bg-light" autofocus
                                                               style="border-radius: 15px!important;"
                                                               value="<?= ($this->session->email !== '') ? $this->session->email : set_value('email'); ?>"
                                                               readonly>
                                                        <span class="help-block small text-danger"><?php echo form_error('email'); ?></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label" for="old_password">Mot de passe
                                                            actuel <span class="small">(celui que vous utilisez presentement)</span></label>
                                                        <input type="text" title="Please enter your password"
                                                               placeholder="******" name="old_password"
                                                               id="old_password"
                                                               class="form-control bg-light border-primary"
                                                               style="border-radius: 15px!important;"
                                                               value="<?= set_value('old_password'); ?>">
                                                        <span class="help-block small text-danger"><?php echo form_error('old_password'); ?></span>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label" for="new_password">Nouveau mot de
                                                            passe</label>
                                                        <input type="text" title="Please enter your password"
                                                               placeholder="******" name="new_password"
                                                               id="new_password"
                                                               class="form-control bg-light border-primary"
                                                               style="border-radius: 15px!important;"
                                                               value="<?= set_value('new_password'); ?>">
                                                        <span class="help-block small text-danger"><?php echo form_error('new_password'); ?></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label" for="password_confirm">Confirmer le
                                                            nouveau mot de passe</label>
                                                        <input type="text" title="Please enter your confirm password"
                                                               placeholder="******"
                                                               name="password_confirm" id="password_confirm"
                                                               class="form-control bg-light border-primary"
                                                               style="border-radius: 15px!important;"
                                                               value="<?= set_value('password_confirm'); ?>">
                                                        <span class="help-block small text-danger"><?php echo form_error('password_confirm'); ?></span>
                                                    </div>

                                                    <button class="btn btn-primary btn-block loginbtn"
                                                            style="border-radius:20px!important;">Changer mon mot de
                                                        passe actuel
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-tab-list tab-pane fade active in" id="INFORMATION">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <form action="<?= base_url('user/updateAccount'); ?>" id="loginForm"
                                              method="post">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Votre nom complet"
                                                           data-toggle="tooltip" data-placement="top"
                                                           title="Nom, Post-nom et Prenom" name="fullname"
                                                           id="fullname"
                                                           class="form-control bg-light border-primary" autofocus
                                                           style="border-radius: 15px!important;"
                                                           value="<?= (!empty($this->session->fullname)) ? $this->session->fullname : set_value('fullname'); ?>">
                                                    <span class="help-block small text-danger"><?php echo form_error('fullname'); ?></span>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Votre nom utilisateur connexion"
                                                           data-toggle="tooltip" data-placement="top"
                                                           title="Nom utilisateur ou login" name="username"
                                                           id="username"
                                                           class="form-control bg-light border-primary"
                                                           style="border-radius: 15px!important;"
                                                           value="<?= (!empty($this->session->username)) ? $this->session->username : set_value('username'); ?>">
                                                    <span class="help-block small text-danger"><?php echo form_error('username'); ?></span>
                                                </div>


                                                <div class="form-group">
                                                    <input type="email" placeholder="Votre adresse mail de service"
                                                           data-toggle="tooltip" data-placement="top"
                                                           title="Adresse email service" name="email"
                                                           id="email"
                                                           class="form-control bg-light border-primary"
                                                           style="border-radius: 15px!important;"
                                                           value="<?= (!empty($this->session->email)) ? $this->session->email : set_value('email'); ?>">
                                                    <span class="help-block small text-danger"><?php echo form_error('email'); ?></span>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"
                                                           placeholder="Votre numero de telephone de service"
                                                           data-toggle="tooltip" data-placement="top"
                                                           title="Numero telephone service" name="phone"
                                                           id="phone"
                                                           class="form-control bg-light border-primary"
                                                           style="border-radius: 15px!important;"
                                                           value="<?= (!empty($this->session->phone)) ? $this->session->phone : set_value('phone'); ?>">
                                                    <span class="help-block small text-danger"><?php echo form_error('phone'); ?></span>
                                                </div>
                                                <div class="form-group sm-res-mg-15 tbpf-res-mg-15">
                                                    <input type="text" placeholder="Votre numero matricule de service"
                                                           data-toggle="tooltip" data-placement="top"
                                                           title="Numero matricule" name="matricule"
                                                           id="matricule"
                                                           class="form-control bg-light border-primary"
                                                           style="border-radius: 15px!important;"
                                                           value="<?= (!empty($this->session->matricule)) ? $this->session->matricule : set_value('matricule'); ?>">
                                                    <span class="help-block small text-danger"><?php echo form_error('matricule'); ?></span>
                                                </div>

                                                <div class="form-group">
                                                    <select class="form-control bg-light border-primary" name="sexe"
                                                            style="border-radius: 15px!important;">
                                                        <option>Selectionnez Sexe</option>
                                                        <option <?= ($this->session->sexe == "homme") ? "selected" : set_select('sexe', "homme"); ?>>
                                                            <?= ($this->session->sexe == "homme") ? "Homme" : "Femme"; ?>
                                                        </option>
                                                        <option <?= ($this->session->sexe == "femme") ? "selected" : set_select('sexe', "femme"); ?>>
                                                            <?= ($this->session->sexe == "femme") ? "Femme" : "Homme"; ?>
                                                        </option>
                                                    </select>
                                                    <span class="help-block small text-danger"><?php echo form_error('sexe'); ?></span>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="payment-adress mg-t-15">
                                                    <button type="submit" style="border-radius: 20px!important;"
                                                            class="btn btn-primary">
                                                        Enregistrer mes infos
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="footer-copyright-area fixed-bottom">
    <div class="container-fluid">
        <div class="row"> <div class="col-sm-6" >

            </div>
            <div class="col-sm-6">
                <div class="text-right">

                    <span class="small" style="background-color: transparent; color: #ffffff; font-weight: bold;">
                            © 2020 -
                            <script>document.write(new Date().getFullYear());</script>
                            | <a href="https://congoagile.com" style="background-color: transparent; color: #050505; font-weight: bold;">Trecazad - Agence digitale. </a>
                      Powered by
                            <a href="https://congoagile.com" target="_blank" style="background-color: transparent; color: #050505; font-weight: bold;">Trecazad Team</a>
                        </span>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

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
<!-- counterup JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/counterup/jquery.counterup.min.js"></script>
<script src="<?= base_url(); ?>/global/js/counterup/waypoints.min.js"></script>
<script src="<?= base_url(); ?>/global/js/counterup/counterup-active.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= base_url(); ?>/global/js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/metisMenu/metisMenu.min.js"></script>
<script src="<?= base_url(); ?>/global/js/metisMenu/metisMenu-active.js"></script>
<!-- morrisjs JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/morrisjs/raphael-min.js"></script>
<script src="<?= base_url(); ?>/global/js/morrisjs/morris.js"></script>
<script src="<?= base_url(); ?>/global/js/morrisjs/morris-active.js"></script>
<!-- morrisjs JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/sparkline/jquery.sparkline.min.js"></script>
<script src="<?= base_url(); ?>/global/js/sparkline/jquery.charts-sparkline.js"></script>
<script src="<?= base_url(); ?>/global/js/sparkline/sparkline-active.js"></script>
<!-- calendar JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/calendar/moment.min.js"></script>
<script src="<?= base_url(); ?>/global/js/calendar/fullcalendar.min.js"></script>
<script src="<?= base_url(); ?>/global/js/calendar/fullcalendar-active.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/plugins.js"></script>
<!-- main JS
    ============================================ -->
<script src="<?= base_url(); ?>/global/js/main.js"></script>
<!-- tawk chat JS
    ============================================
<script src="<?= base_url(); ?>/global/js/tawk-chat.js"></script>
-->

<script>
    //talk to chat
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f6227b2f0e7167d0010ec99/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();


    // Material Design example
    $(document).ready(function () {
        $('#dtMaterialDesignExample').DataTable();
        $('#dtMaterialDesignExample_wrapper').find('label').each(function () {
            $(this).parent().append($(this).children());
        });
        $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function () {
            const $this = $(this);
            $this.attr("placeholder", "Recherche ...");
            $this.className("form-control-lg");
            $this.removeClass('form-control-sm');
        });
        $('#dtMaterialDesignExample_wrapper .dataTables_length').addClass('d-flex flex-row');
        $('#dtMaterialDesignExample_wrapper .dataTables_filter').addClass('md-form');
        $('#dtMaterialDesignExample_wrapper select').removeClass(
            'custom-select custom-select-sm form-control form-control-sm');
        $('#dtMaterialDesignExample_wrapper select').addClass('mdb-select');
        $('#dtMaterialDesignExample_wrapper .mdb-select').materialSelect();
        $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('label').remove();
    });
    $('#demoDate').datepicker({
        format: "dd/mm/yyyy",
        autoclose: true,
        todayHighlight: true
    });

    $('#demoSelect').select2();

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
    //Money Euro
    $('[data-mask]').inputmask()

</script>
</body>
</html>