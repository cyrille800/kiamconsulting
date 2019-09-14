<?php 
session_start();
if(!isset($_SESSION["id"])){
    header("location:../../pages_error/404.html");
}
require_once "../../../entities/class_ecole.php";
require_once "../../../entities/class_etudiant.php";
require_once "../../../entities/class_activiter.php";
require_once "../../../entities/class_activiter_client.php";
require_once "../../../entities/class_galerie.php";
require_once "../../../entities/class_details_plus.php";
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

</head>
<body style="padding:0px;margin:0px;">
<div class="kt-subheader   kt-grid__item bg-white mb-4" id="kt_subheader" style="margin-top:0px;padding:0;">
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">Uploads</h3>
            
                            <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="la la-tachometer"></i></a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Mes fichiers                        </a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                                        <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                </div>
                    
        </div>
    </div>
</div>
                        </div>    

                                <!-- begin:: Content -->
                                <div class="kt-content kt-grid__item kt-grid__item--fluid" style="background-color:white;">
<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
</div>
                                    <!--begin::Dashboard 5-->


                    <center>
                                <div class="element col-8">
                                   
                                    <div class="col-md-5 mx-auto">
                                        <!--begin::Portlet-->
                                        <div class="kt-portlet kt-portlet--height-fluid">
                                            <div class="kt-portlet__head">
                                                <div class="kt-portlet__head-label">
                                                    <h3 class="kt-portlet__head-title">Liste des fichiers</h3>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--fluid">
                                                <div class="kt-widget-7">
                                                    <div class="kt-widget-7__items"  style="height:400px;overflow-y:scroll;">
                                                        <?php 
            $bg=config::$bdd->query("select * from notification where type='fichier' && id_personne=".$_SESSION["id"]." order by date_ajout desc");
            while($ju=$bg->fetch()){
                echo '<div class="kt-widget-7__item">
                                                            <div class="kt-widget-7__item-pic">
                                                                <img src="../../assets/Backoffice/media/files/';
if($ju["message"]=="png" || $ju["message"]=="jpg" || $ju["message"]=="jpeg" || $ju["message"]=="gif" || $ju["message"]=="bmp"){
echo "jpg";
}
if($ju["message"]=="rar" || $ju["message"]=="zip"){
echo "zip";
}
if($ju["message"]=="doc" || $ju["message"]=="text" || $ju["message"]=="ppt"){
echo "doc";
}
if($ju["message"]=="pdf"){
echo "pdf";
}
                                                                echo '.svg" alt="">
                                                            </div>
                                                            <div class="kt-widget-7__item-info">
                                                                <a href="../../assets/Backoffice/media/fichier_envoyer/'.$ju["id"].'.'.$ju["message"].'" target="_blank" class="kt-widget-7__item-title">
                                                                    '.$ju["operation"].'
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget-7__item-toolbar">
                                                                <div class="dropdown dropdown-inline">
                                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="la la-ellipsis-h" style="width:20px;"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(32px, 33px, 0px);">
                                                                        <ul class="kt-nav">
                                                                            <li class="kt-nav__section kt-nav__section--first">
                                                                                <span class="kt-nav__section-text"><a href="../../assets/Backoffice/media/fichier_envoyer/'.$ju["id"].'.'.$ju["message"].'" target="_blank">ouvrir</a></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
            }
                                                        ?>
                                                    </div>
                                                    <div class="kt-widget-7__foot">
                                                        <img src="../../assets/Backoffice/media/misc/clouds.png" alt="">
                                                        <div class="kt-widget-7__upload">
                                                            <a href="#"><i class="fa fa-cloud-upload-alt mb-5 pt-2"></i></a>
                                                            <span>Drag files here</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Portlet-->
                                    </div>
                                    <?php
                                    
                                    
                                    ?>
                                </div>
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
        <script>
                $(window).on("load",function(){
           $(".preload").fadeOut("fast");
        })
        </script>
</body>
</html>