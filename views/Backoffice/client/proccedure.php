<?php
session_start();
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
                    
                                <!-- begin:: Content -->
                                <div class="kt-content kt-grid__item kt-grid__item--fluid" style="background-color:white;">
                           <!--begin::Dashboard 5-->


                    <center>
                                <div class="element">
                                    <?php
                                    if(isset($_COOKIE["id_activiter"])){
                                    if(!empty($_COOKIE["id_activiter"])){
                                    ?>
                                    <div class="kt-portlet">
                                        <div class="kt-portlet__body kt-portlet__body--fit col-8 mx-auto" style="border:1px solid #eee;">
                                            <div class="kt-grid kt-grid--desktop-xl kt-grid--ver-desktop-xl  kt-wizard-v1" id="kt_wizard_v1" data-ktwizard-state="first">
                                                <?php
                                                proccedure::afficher_client($_COOKIE["id_activiter"]);
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    }else{
                                    echo '<div class="alert alert-info fade show col-8 mx-auto" role="alert">
                                        <div class="alert-icon"><i class="la la-question-circle"></i></div>
                                        <div class="alert-text">Vous devez selectionner une activiter pour continuer,<br> Pour ce faire consulter la liste des activiter et selectionner l\'activité correspondante puis poursuivre.</div>
                                    </div>';
                                    }
                                    ?>
                                </div>
                    </center>
                                    
                                    <!--end::Dashboard 5-->
                                </div>
                                <!-- end:: Content -->
                                                        <div class="modal fade" id="simage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <img src="" class="cible modal-dialog" alt=""  style="position:absolute;left:10%;top:0;">
                        </div>
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
                $(function(){
                     $(".btn.btn-info.btn-icon.btn-circle").click(function(){
    var v=$(this).attr("url");
    $(".cible").attr("src",v);
})
                })
        </script>
</body>
</html>