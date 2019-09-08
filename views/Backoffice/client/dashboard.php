<?php
session_start();
if(!isset($_SESSION["id"])){
header("location:../../pages_error/404.html");
}
include_once "../../../entities/class_etudiant.php";
$resultat=etudiant::retourne_valeur("id_client",$_SESSION["id"],"resultat");
if($resultat!=1){
header("location:../../pages_error/404.html");
}
require_once "../../../entities/class_client.php";
require_once "../../../entities/class_ecole.php";
require_once "../../../entities/class_etudiant.php";
require_once "../../../entities/class_activiter.php";
require_once "../../../entities/class_activiter_client.php";
require_once "../../../entities/class_notification.php";
require_once "../../../entities/class_paiement.php";
require_once "../../../entities/class_paiement_client.php";
?>
<!DOCTYPE html>
<!--
Theme: Keen - The Ultimate Bootstrap Admin Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: You must have a valid license purchased only from https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/ in order to legally use the theme for your project.
-->
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8"/>
        
        <title>
        Keen | Dashboard</title>
        <meta name="description" content="Latest updates and statistic charts">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--begin::Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js">
        </script>
        <script>
        WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700"]},
        active: function() {
        sessionStorage.fonts = true;
        }
        });
        </script>
        <!--end::Fonts -->
        <!--begin::Page Vendors Styles(used by this page) -->
        <link href="../../assets/Backoffice/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors Styles -->
        
        
        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/Backoffice/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles -->
        <!--begin::Layout Skins(used by all pages) -->
        
        <link href="../../assets/Backoffice/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/Backoffice/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/Backoffice/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/Backoffice/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />
        <!--end::Layout Skins -->
        <link rel="shortcut icon" href="../../assets/Backoffice/media/logos/favicon.ico" />
        <!-- Hotjar Tracking Code for keenthemes.com -->
        <script>
        (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1070954,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1">
        </script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-37564768-1');
        </script>
    </head>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-color:rgba(0,0,0,0.06);" >
                    <div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
                <center>
                <div class="lds-ring">
                    <div>
                    </div>
                    <div>
                    </div>
                    <div>
                    </div>
                    <div>
                    </div>
                </div>
                </center>
            </div>
        <div class="kt-subheader   kt-grid__item bg-white mb-4" id="kt_subheader" style="padding:2px;padding-left:40px;">
            <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                <div class="kt-container  kt-container--fluid ">
                    <div class="kt-subheader__main">
                        <h3 class="kt-subheader__title">
                        Dashboard</h3>
                        
                        <span class="kt-subheader__separator kt-hidden">
                        </span>
                        <div class="kt-subheader__breadcrumbs">
                            <a href="#" class="kt-subheader__breadcrumbs-home">
                                <i class="la la-tachometer">
                                </i>
                            </a>
                            <span class="kt-subheader__breadcrumbs-separator">
                            </span>
                            <a href="" class="kt-subheader__breadcrumbs-link">
                            Dashboards                        </a>
                            <span class="kt-subheader__breadcrumbs-separator">
                            </span>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
            
            <!-- begin:: Content -->
            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                <!--begin::Dashboard 1-->
                <!--begin::Row-->
                
                <div class="row col-11 mx-auto">
                    <div class="col-lg-12 col-xl-8 order-lg-2 order-xl-1">
                        <!--begin::Portlet-->
                        <div class="kt-portlet kt-portlet--height-fluid-half kt-widget-14">
                            <div class="kt-portlet__body">
                                <!-- Doc: The bootstrap carousel is a slideshow for cycling through a series of content, see https://getbootstrap.com/docs/4.1/components/carousel/ -->
                                <div id="kt-widget-slider-14-1" class="kt-slider carousel slide pointer-event" data-ride="carousel" data-interval="8000">
                                    <div class="kt-slider__head">
                                        <div class="kt-slider__label">
                                        Services</div>
                                        <div class="kt-slider__nav">
                                            <a class="kt-slider__nav-prev carousel-control-prev" href="#kt-widget-slider-14-1" role="button" data-slide="prev">
                                                <i class="fa fa-angle-left">
                                                </i>
                                            </a>
                                            <a class="kt-slider__nav-next carousel-control-next" href="#kt-widget-slider-14-1" role="button" data-slide="next">
                                                <i class="fa fa-angle-right">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <?php 
$valeur=etudiant::retourne_valeur("id",$_SESSION["id"],"ecole_choisie");
$_SESSION["id_ecole"]=$valeur;
                $t=etudiant::retourne_valeur("id",$_SESSION["id"],"specialite");
                $titre=ecole::retourne_valeur("id",$valeur,"titre");
                $ville=ecole::retourne_valeur("id",$valeur,"ville");
                $specialite=ecole::retourne_valeur("id",$valeur,"specialite");
                $specialite=explode(";",$specialite);
                $row=activiter_client::retourne_valeur("id_client",$_SESSION["id"],"id");
                                            ?>
<div class="row">
                        <div class="col-md-1 col-xs-12">
                            <img src="../../assets/Backoffice/media/ecoles/<?php echo $valeur;?>.png" alt="image" class="rounded-circle" width="85px">
                        </div>
                        <div class="col-md-3 pt-3 col-xs-12">
                            <a href="#" class="kt-widget__title btn-bold" style="color:#595d6e;">
                                <b><?php echo $titre;?></b>
                            </a><br>
                            <span class="kt-widget__desc">
                                <?php echo $ville;?>, tunsie
                            </span>
                        </div>
                        <div class="col-md-2 mr-5 col-xs-12">
                            <div class="row pt-3">
                                <span class="kt-widget__caption col-10">Progress</span>
                                <?php 
                                if(isset($_COOKIE["id_activiter".$_SESSION["id"]])){
                                $nombre=activiter::nombre_pourcentage($_SESSION["id"],$_COOKIE["id_activiter".$_SESSION["id"]]);
                                }else{
                                $nombre=0;
                                }
                                ?>
                                <span class="kt-widget__value col-1 pb-1"><span class="ki"><?php echo $nombre;?></span>%</span>
                                <div class="progress col-12" style="height:5px;border-radius:5px;">
                                    <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                    <div class="progress-bar bg-brand" role="progressbar" style="width: <?php echo $nombre;?>%;border-radius:5px;" aria-valuenow="<?php echo $nombre;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ml-5 col-md-1 col-xs-12">
                            Spécialité : <br><br>
                            <?php
                            if($row==0){
                            foreach ($specialite as $key => $value) {
                            if($value!=""){
                            echo '        <label class="kt-radio kt-radio--bold kt-radio--brand">
                                <input type="radio" name="radio6" ';
                                if($t==$value){
                                echo " checked='checked' disabled='disabled'";
                                }
                                echo 'value="'.$value.'"  disabled="disabled"> '.$value.'
                                <span></span></label>';
                                }
                                }
                                }else{
                                foreach ($specialite as $key => $value) {
                                if($value!=""){
                                echo '        <label class="kt-radio kt-radio--bold kt-radio--brand kt-radio--disabled">
                                    <input type="radio" name="radioo" ';
                                    if($t==$value){
                                    echo " checked='checked'  disabled='disabled'";
                                    }
                                    echo 'value="'.$value.'"  disabled="disabled"> '.$value.'
                                    <span></span></label>';
                                    }
                                    }
                                    }
                                    $cnombre=activiter::nombre("etat",1);
                                    $cd=activiter_client::nombre($_SESSION["id"],"id_client",$_SESSION["id"]);
                                    ?>
                                </div>
                                <div class="pl-4 ml-5 col-md-3 col-xs-12 row">
                                    <div class="col-md-4 px-2 py-2 " style="background-color:#f7f8fa;">
                                        <div class="row">
                                            <div class="col-md-12 text-center text-primary lead pb-2 pt-4">
                                                <b><?php echo $cnombre;?></b>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                Services
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 px-2 py-2 ml-2" style="background-color:#f7f8fa;">
                                        <div class="row">
                                            <div class="col-md-12 text-center text-primary lead pb-2 pt-4 nombre_actif">
                                                <b><?php echo $cd;?></b>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                actif
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
                        <!--end::Portlet-->
                        <!--begin::Portlet-->
                        <div class="kt-portlet kt-portlet--height-fluid-half kt-widget-15">
                            <div class="kt-portlet__body">
                                <!-- Doc: The bootstrap carousel is a slideshow for cycling through a series of content, see https://getbootstrap.com/docs/4.1/components/carousel/ -->
                                <div id="kt-widget-slider-14-2" class="kt-slider carousel slide pointer-event" data-ride="carousel" data-interval="8000">
                                    <div class="kt-slider__head">
                                        <div class="kt-slider__label">
                                        Liste des candidats</div>
                                        <div class="kt-slider__nav">
                                            <a class="kt-slider__nav-prev carousel-control-prev" href="#kt-widget-slider-14-2" role="button" data-slide="prev">
                                                <i class="fa fa-angle-left">
                                                </i>
                                            </a>
                                            <a class="kt-slider__nav-next carousel-control-next" href="#kt-widget-slider-14-2" role="button" data-slide="next">
                                                <i class="fa fa-angle-right">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-inner">
    <?php 
    $requette=config::$bdd->query("select * from etudiant where resultat=1 && id_client!=".$_SESSION["id"]);
    $i=0;
    while($data=$requette->fetch()){

        echo '<div class="carousel-item '.(($i==0)?"active":"").'">
                                            <div class="kt-widget-15__body">
                                                <div class="kt-widget-15__author">
                                                    <div class="kt-widget-15__photo">
                                                        <a href="#">
                                                            <img src="../../assets/Backoffice/media/users/'.$data["id_client"].'.png" alt="" title="">
                                                        </a>
                                                    </div>
                                                    <div class="kt-widget-15__detail">
                                                        <a href="#" class="kt-widget-15__name">
                                                        '.$data["nom"].' '.$data["prenom"].'</a>
                                                        <div class="kt-widget-15__desc">
                                                            ville : '.$data["ville"].'
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kt-widget-15__wrapper">
                                                    <div class="kt-widget-15__info">
                                                        <a href="#" class="btn btn-icon btn-sm btn-circle btn-success">
                                                            <i class="fa fa-envelope">
                                                            </i>
                                                        </a>
                                                        
                                                        <a href="#" class="kt-widget-15__info--item">
                                                        '.client::retourne_valeur("id",$data["id_client"],"email").'</a>
                                                    </div>
                                                    <div class="kt-widget-15__info">
                                                        <a href="#" class="btn btn-icon btn-sm btn-circle btn-brand">
                                                            <i class="fa fa-phone">
                                                            </i>
                                                        </a>
                                                        
                                                        <a href="#" class="kt-widget-15__info--item">
                                                        '.client::retourne_valeur("id",$data["id_client"],"numero").'</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
        $i++;
    }
    ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Portlet-->
                    </div>

                                        <div class="col-lg-12 col-xl-4 order-lg-2 order-xl-1">
                        <!--begin::Portlet-->
                        <div class="kt-portlet kt-portlet--height-fluid">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                    Listes des services</h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--fluid">
                                <div class="kt-widget-7">
                                                                      <?php
                                    if(isset($_COOKIE["id_activiter".$_SESSION["id"]])){
                                        // ce 1 represente les activités du client
                                    activiter::afficher_dashboard($_SESSION["id"],1,$_COOKIE["id_activiter".$_SESSION["id"]]);
                                    }else{
                                    activiter::afficher_dashboard($_SESSION["id"],1,"");
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!--end::Portlet-->
                    </div>

<div class="col-lg-6 col-xl-6 order-lg-2 order-xl-1">
        <!--Begin:: Portlet-->
<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Liste des paiements
            </h3>
        </div>
    </div>
    <div class="kt-form kt-form--label-right">
        <div class="kt-portlet__body">
            <?php 
            $requette=config::$bdd->query("select * from paiement_client where id_client=".$_SESSION["id"]); 
            $i=0;
            while($data=$requette->fetch()){

echo '<div class="form-group form-group-xs row">
                <label class="col-4 col-form-label">'.paiement::retourne_valeur("id",$data["id_paiement"],"titre").'</label>
                <div class="col-8">
                    <span class="form-control-plaintext"><span class="kt-font-bolder">'.paiement::retourne_valeur("id",$data["id_paiement"],"montant").' FCFA</span> &nbsp;';
if($data["etat"]==0){
    echo '<span class="kt-badge kt-badge--inline kt-badge--danger kt-badge--bold">non payer</span>';
}else{
    echo '<span class="kt-badge kt-badge--inline kt-badge--success kt-badge--bold">payer</span>';
}
                    echo '</span>
                </div>
            </div>';
            $i++;
            }
                                                if($i==0){
                            echo "<div class='text-white bg-danger col-4 text-center mx-auto' style='border-radius:3px;'>Aucune notification</div>";
                        }
            ?>
        </div>
    </div>
</div>
<!--End:: Portlet-->    </div>

                    <div class="col-lg-12 col-xl-6 order-lg-2 order-xl-1">
                        <!--begin::Portlet-->
                        <div class="kt-portlet kt-portlet--height-fluid">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                    Listes des fichiers</h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--fluid">
                                <div class="kt-widget-7">
                                    <div class="kt-widget-7__items">

                                        <?php 
            $bg=config::$bdd->query("select * from notification where type='fichier' && id_personne=".$_SESSION["id"]." order by date_ajout desc");
            $i=0;
            while($ju=$bg->fetch()){
                $ext="";
                $gt="../../assets/Backoffice/media/fichier_envoyer/".$ju["id"].".".$ju["message"];
                if(file_exists($gt)){
if($ju["message"]=="png" || $ju["message"]=="jpg" || $ju["message"]=="jpeg" || $ju["message"]=="gif" || $ju["message"]=="bmp"){
$ext="jpg";
}
if($ju["message"]=="rar" || $ju["message"]=="zip"){
$ext="zip";
}
if($ju["message"]=="doc" || $ju["message"]=="text" || $ju["message"]=="ppt"){
$ext="doc";
}
if($ju["message"]=="pdf"){
$ext="pdf";
}
echo '<div class="kt-widget-7__item pl-5">
                                            <div class="kt-widget-7__item-pic">
                                                <img src="../../assets/Backoffice/media/files/'.$ext.'.svg" alt="">
                                            </div>
                                            <div class="kt-widget-7__item-info">
                                                <a href="../../assets/Backoffice/media/fichier_envoyer/'.$ju["id"].'.'.$ju["message"].'" class="kt-widget-7__item-title text-center"  target="_blank">
                                                    '.$ju["operation"].'
                                                </a>
                                            </div>
                                        </div>

                                        ';
                                        $i++;
                }
            }
                                    if($i==0){
                            echo "<div class='text-white bg-danger col-4 text-center mx-auto' style='border-radius:3px;'>Aucune notification</div>";
                        }
                                                        ?>

                                    </div>
                                    <div class="kt-widget-7__foot">
                                        <img src="./assets/media/misc/clouds.png" alt="">
                                        <div class="kt-widget-7__upload">
                                            <a href="#">
                                                <i class="flaticon-upload">
                                                </i>
                                            </a>
                                            
                                            <span>
                                            Drag files here</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Portlet-->
                    </div>
                    <div class="col-lg-12 col-xl-8 order-lg-3 order-xl-1 mx-auto">
                        <!--begin::Portlet-->
                        <div class="kt-portlet kt-portlet--height-fluid">
                            <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                    Nouvelles notifications <small>
                                    32500 total</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body kt-portlet__body--fit">
                                <!--Doc: For the datatable initialization refer to "recentOrdersInit" function in "src\theme\app\scripts\custom\dashboard.js" -->
                                <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--scroll kt-datatable--loaded" id="kt_recent_orders" style="">
                                    <div class="kt-timeline w-50 mx-auto" id="<?php echo notification::nombre_total($_SESSION["id"]);?>" style="height:450px;overflow-y:scroll;">
<?php 
notification::afficher_dashboard($_SESSION["id"]);
?>
</div>
                                </div>
                            </div>
                        </div>
                        <!--end::Portlet-->
                    </div>
                <!--end::Row-->
                <!--end::Dashboard 1-->
            </div>
            <!-- end:: Content -->
        </div>
        <!-- end::Demo Panel -->
        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
        var KTAppOptions = {
        "colors": {
        "state": {
        "brand": "#5d78ff",
        "metal": "#c4c5d6",
        "light": "#ffffff",
        "accent": "#00c5dc",
        "primary": "#5867dd",
        "success": "#34bfa3",
        "info": "#36a3f7",
        "warning": "#ffb822",
        "danger": "#fd3995",
        "focus": "#9816f4"
        },
        "base": {
        "label": [
        "#c5cbe3",
        "#a1a8c3",
        "#3d4465",
        "#3e4466"
        ],
        "shape": [
        "#f0f3ff",
        "#d9dffa",
        "#afb4d4",
        "#646c9a"
        ]
        }
        }
        };
        </script>
        <!-- end::Global Config -->
        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="../../assets/Backoffice/vendors/global/vendors.bundle.js" type="text/javascript">
        </script>
        <script src="../../assets/Backoffice/js/demo1/scripts.bundle.js" type="text/javascript">
        </script>
        <!--end::Global Theme Bundle -->
        
        <!--begin::Page Vendors(used by this page) -->
        <script src="../../assets/Backoffice/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript">
        </script>
        <!--end::Page Vendors -->
        
        
        <!--begin::Page Scripts(used by this page) -->
        <script src="../../assets/Backoffice/js/demo1/pages/dashboard.js" type="text/javascript">
        </script>
        <script>
                                $(window).on("load",function(){
                    $(".preload").fadeOut("fast");
                    })
        </script>
        <!--end::Page Scripts -->
    </body>
    <!-- end::Body -->
</html>