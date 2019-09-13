<?php session_start(); 
require_once "../../entities/class_commentaire.php";
?>
<!DOCTYPE html>
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="zxx">

<head>
    <!-- TITLE OF SITE -->
    <title>Curricular - Responsive Bootstrap Education Template</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="description" content="app landing page template" />
    <meta name="keywords" content="app, landing page, bootstrap" />
    <meta name="developer" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- FAV AND ICONS   -->
    <!-- <link rel="icon" href="assets/images/favicon.png" sizes="32x32" /> -->
    <!-- <link rel="icon" href="assets/images/apple-icon-192.png" sizes="192x192" /> -->
    <!-- <link rel="apple-touch-icon-precomposed" href="assets/images/apple-icon-180.png" /> -->

    <!-- GOOGLE FONTS -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,700%7cVarela+Round" rel="stylesheet">

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="assets/icons/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Custom Icon Font -->
    <link rel="stylesheet" href="assets/font/flaticon.css">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="assets/plugins/css/bootstrap.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/plugins/css/animate.css">
    <!-- owl -->
    <link rel="stylesheet" href="assets/plugins/css/owl.css">
    <!-- selectize -->
    <link rel="stylesheet" href="assets/plugins/css/selectize.css">
    <link rel="stylesheet" href="assets/plugins/css//selectize.bootstrap3.css">
    <!-- Fancybox-->
    <link rel="stylesheet" href="assets/plugins/css/jquery.fancybox.min.css">
    <!--dropdown -->
    <link rel="stylesheet" href="assets/plugins/css/bootstrap-dropdownhover.min.css">
    <!-- mobile nav-->
    <link rel="stylesheet" href="assets/plugins/css/meanmenu.css">

    <!-- COUSTOM CSS link  -->
    <link rel="stylesheet" href="assets/less/style.css">
    <link rel="stylesheet" href="assets/less/responsive.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/plugins/css/demo.css" /> -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/css/elastic_grid.min.css" />
    <link rel="shortcut icon" href="../assets/Backoffice/media/logos/favicon.ico" />


    <!--[if lt IE 9]>
            <script src="js/plagin-js/html5shiv.js"></script>
            <script src="js/plagin-js/respond.min.js"></script>
        <![endif]-->

        <style>
        .invalid-feedback{
            color:"red";
        }
        </style>
</head>

<body>
    <!--
        |========================
        |  HEADER
        |========================
        -->
    <header class="xt-header">
        <div class="xt-header-top">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-sm-6 uv-header-contact ">
                            <a href=""> <i class="fa fa-phone"></i>+44 345 678 903</a>
                            <a href=""> <i class="fa fa-envelope-o"></i>adobexd@mail.com</a>
                        </div>
                        <div class="col-sm-6">
                            <img class="pull-right img-responsive" src="assets/images/logo.png" width="80.5" height="100%">

                        </div>
                    </div>

                </div>
                <!-- -->
            </div>
        </div>
        </div>
        <div class="clearfix"></div>
        <div class="xt-main-nav">
            <nav class="navbar nav-scroll home-1">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="uv-logo">
                                <a href="index.php">
                                    <img src="assets/images/logo2.png" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-10 ">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-action="#js-navbar-menu" aria-expanded="false">
                                    <span aria-hidden="true" class="icon"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse " id="js-navbar-menu" style="width:100%;">
                                <ul class="nav navbar-nav ep-mobile-menu pull-right" id="navbar-nav"  >
                                    <li class="dropdown xt-drop-nav">
                                        <a href="index.php" class=" " data-hover="dropdown" data-animations="fadeInDown fadeInDown fadeInDown">
                                            ACCUEIL
                                        </a>
                                        <!-- <ul class="dropdown-menu">
                                                <li><a href="index.php">Home (University)</a></li>
                                                <li><a href="index-1.php">Home (Online Course)</a></li>
                                            </ul> -->
                                    </li>
                                    <li class="dropdown xt-drop-nav">
                                        <a href="about.php" class="" data-hover="dropdown" data-animations="fadeInDown fadeInDown fadeInDown">
                                            A PROPOS
                                        </a>
                                        <!-- <ul class="dropdown-menu">
                                                    <li><a href="about.php">about</a></li>
                                                    <li><a href="course-listing.php">Course List</a></li>
                                                <li><a href="course-details.php">Single Course</a></li>
                                                <li><a href="course-details-2.php">Single Course 2</a></li>
                                                <li><a href="course-archive.php">Course Archive</a></li>
                                                <li><a href="course-quiz.php">Course Quiz</a></li>
                                            </ul> -->
                                    </li>
                                    <li class="dropdown xt-drop-nav">
                                        <a href="index-1.php" class="" data-hover="dropdown" data-animations="fadeInDown fadeInDown fadeInDown">
                                            tunisie
                                        </a>
                                        <!-- <ul class="dropdown-menu">
                                                <li><a href="index-1.php">Tunisie</a></li>
                                                <li><a href="dashboard-my-profile.php">Profile</a></li>
                                                <li><a href="dashboard-classes.php">Classes</a></li>
                                                <li><a href="dashboard-courses.php">Courses</a></li>
                                                <li><a href="dashboard-fav-courses.php">Favorite Course</a></li>
                                                <li><a href="dashboard-privacy-setting.php">Privacy Setting</a></li>
                                                <li><a href="dashboard-profile-setting.php">Profile Setting</a></li>
                                            </ul> -->
                                    </li>
                                    <li class="dropdown xt-drop-nav">
                                        <a href="blog.php" class="" data-hover="dropdown" data-animations="fadeInDown fadeInDown fadeInDown">
                                            blog
                                        </a>
                                        <!-- <ul class="dropdown-menu">
                                                <li><a href="blog.php">Blog Page</a></li>
                                                <li><a href="blog-single.php">Blog Single</a></li>
                                            </ul> -->
                                    </li>
                                    <!-- <li class="dropdown xt-drop-nav">
                                            <a href="" class=""  data-hover="dropdown" data-animations="fadeInDown fadeInDown fadeInDown">
                                                contact
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="services.php">Service</a></li>
                                                <li><a href="teacher-details.php">Teacher Details</a></li>
                                                <li><a href="classes.php">Classes Time Table</a></li>
                                                <li><a href="not-found.php">404</a></li>
                                                <li><a href="login-reg.php">Login & Registration</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="contact.php">Contact</a></li>
                                    <?php
                                    if (isset($_SESSION["id"])) {
                                        $imageProfil = "../assets/Backoffice/media/users/" . $_SESSION["id"] . ".png";
                                       $username=Commentaire::rechercherClient($_SESSION["id"])[0]["username"];
                                        ?>
                                        
                                        <li class="dropdown xt-drop-nav"  style="float:right;">
                                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-animations="fadeInDown fadeInDown fadeInDown">
                                                <img height="30px" src=<?= $imageProfil?>>
                                                <?= $username ?>
                                            </a>
                                            <ul class="dropdown-menu" >
                                                <li><a href="../Backoffice/client/index.php">Page principale</a></li>
                                                <li><a href=<?="../login/deconnexion.php"?> >Se déconnecter</a></li>

                                            </ul>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </nav><!-- /.navbar -->
        </div>
        <!-- Mobile Menu-->
        <div class="menu-spacing visible-xs nav-scroll">
            <div class="mobile-menu-area visible-xs visible-sm">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="main">
                        <li><a class="main-a" href="index.php">ACCUEIL</a>
                                <ul>
                                    <li><a href="index.php">ACCUEIL</a></li>
                                </ul>
                            </li>
                            <li><a class="main-a" href="about.php">A PROPOS</a>
                                <ul>
                                    <li><a href="about.php">A PROPOS</a></li>
                                </ul>
                            </li>
                            <li><a class="main-a" href="index-1.php">TUNISIE</a>
                                <ul>
                                    <li><a href="index-1.php">TUNISIE</a></li>

                                </ul>
                            </li>
                            <li><a class="main-a" href="blog.php">Blog</a>
                                <ul>
                                    <li><a href="blog.php">Blog Page</a></li>
                                    <li><a href="blog-single.php">Blog Single</a></li>
                                </ul>
                            </li>
                            <?php
                            if (!isset($_SESSION["id"])) {
                                ?>
                                 <li class="active"><a class="main-a" href="index.php">Connexion</a>
                                <ul>
                                    <li><a href="../login/login-reg.php">Se connecter</a></li>
                                </ul>
                            </li>
                            <?php
                            } else {
                                ?>
                                    <li class="active"><a class="main-a" href="index.php">Deconnexion</a>
                                <ul>
                                    <li><a href="../login/deconnexion.php">Se déconnecter</a></li>
                                    <li class="active"><a class="main-a" href="../Backoffice/client/index.php">Page Principale</a>

                                </ul>
                            </li>
                            <?php
                            }
                             ?>
                            

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>