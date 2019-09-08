<?php 
session_start();
if(!isset($_SESSION["id"])){
    header("location:../../pages_error/404.html");
}
if($_SESSION["type"]!=1){
    header("location:../../pages_error/404.html");
}
include "../../../entities/class_patient.php"; 

$resultat=patient::retourne_valeur("id_client",$_SESSION["id"],"resultat")
?>
<!DOCTYPE html>
<html>
<head>
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
        <link href="../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/Backoffice/css/demo4/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/Backoffice/css/animate.css" rel="stylesheet">
        <link href="../../assets/Backoffice/css/style.css" rel="stylesheet">
</head>
<body style="padding:0px;margin:0px;background-color:#21929a;">
                                
                                <!-- begin:: Content -->
                                <div class="kt-content kt-grid__item kt-grid__item--fluid" style="background-color:#21929a;">
                                    <!--begin::Dashboard 5-->
<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
</div>
                    <center>
                        <?php
                        if($resultat==-1){
                            echo '<div class="row"><div class="alert alert-info col-6 mx-auto" role="alert">
                            <div class="alert-icon"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                            <div class="alert-text">Vous devez effectuer une demande
                            </div>
                        </div></div>';
                        }
                        if($resultat==0){
                            echo '<div class="row"><div class="alert alert-warning col-6 mx-auto" role="alert">
                            <div class="alert-icon"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                            <div class="alert-text">Votre demande est en cours de traitement
                            </div>
                        </div></div>';
                        }
                        if($resultat==1){
                            echo '<h1 class="tlt kt-widget-12__title" data-out-effect="fadeOut" data-in-effect="fadeInRight" style="margin-left:15%;margin-top:4%;position:absolute;">Bienvenu parmis nous ...</h1>';
                        }
                        if($resultat==-2){
                            echo '<div class="row"><div class="alert alert-danger col-6 mx-auto" role="alert">
                            <div class="alert-icon"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                            <div class="alert-text"> Votre demande a été rejeter veuillez envoyer un mail au près de l\'administration
                            </div>
                        </div></div>';
                        }
                        ?>
     <img src="https://cdn.dribbble.com/users/220973/screenshots/3678851/facebook.gif" alt="rien a affcihe"> 
                        </center>
                                    
                                    <!--end::Dashboard 5-->
                                </div>
                                <!-- end:: Content -->
        <script>
        var KTAppOptions = {
        "colors": {
        "state": {
        "brand": "#385aeb",
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
        <script src="../../assets/Backoffice/vendors/global/vendors.bundle.js" type="text/javascript">
        </script>
        <script src="../../assets/Backoffice/js/demo4/scripts.bundle.js" type="text/javascript">
        </script>
        <script src="../../assets/Backoffice/js/jquery.fittext.js"></script>
        <script src="../../assets/Backoffice/js/jquery.lettering.js"></script>
        <script src="../../assets/Backoffice/js/highlight.min.js"></script>
        <script src="../../assets/Backoffice/js/jquery.textillate.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
<script>
    $(window).on("load",function(){
           $(".preload").fadeOut("fast");
        })
    $(function(){
        $('.tlt').textillate({
            loop : true
        });
    })
</script>
</body>
</html>