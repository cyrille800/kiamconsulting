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
<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
</div>
                                    <!--begin::Dashboard 5-->


                    <center>
                                <div class="element">
                                    <?php
                                    if(isset($_COOKIE["id_activiter"])){
                                    if(!empty($_COOKIE["id_activiter"])){
                                    ?>
                                    <div class="col-md-5 mx-auto">
                                        <!--begin::Portlet-->
                                        <div class="kt-portlet kt-portlet--height-fluid">
                                            <div class="kt-portlet__head">
                                                <div class="kt-portlet__head-label">
                                                    <h3 class="kt-portlet__head-title">Latest Uploads</h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="kt-portlet__head-actions">
                                                        <a href="#" class="btn btn-default btn-upper btn-sm btn-bold">All FILES</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--fluid">
                                                <div class="kt-widget-7">
                                                    <div class="kt-widget-7__items"  style="height:400px;overflow-y:scroll;">
                                                        <div class="kt-widget-7__item">
                                                            <div class="kt-widget-7__item-pic">
                                                                <img src="../../assets/Backoffice/media/files/doc.svg" alt="">
                                                            </div>
                                                            <div class="kt-widget-7__item-info">
                                                                <a href="#" class="kt-widget-7__item-title">
                                                                    Keeg Design Reqs
                                                                </a>
                                                                <div class="kt-widget-7__item-desc">
                                                                    95 MB
                                                                </div>
                                                            </div>
                                                            <div class="kt-widget-7__item-toolbar">
                                                                <div class="dropdown dropdown-inline">
                                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="flaticon-more-1"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(32px, 33px, 0px);">
                                                                        <ul class="kt-nav">
                                                                            <li class="kt-nav__section kt-nav__section--first">
                                                                                <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-eye"></i>
                                                                                    <span class="kt-nav__link-text">View</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-comment-o"></i>
                                                                                    <span class="kt-nav__link-text">Coments</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                                                    <span class="kt-nav__link-text">Copy</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                                                    <span class="kt-nav__link-text">Excel</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget-7__item">
                                                            <div class="kt-widget-7__item-pic">
                                                                <img src="../../assets/Backoffice/media/files/pdf.svg" alt="">
                                                            </div>
                                                            <div class="kt-widget-7__item-info">
                                                                <a href="#" class="kt-widget-7__item-title">
                                                                    S.E.R Agreement
                                                                </a>
                                                                <div class="kt-widget-7__item-desc">
                                                                    805 MB
                                                                </div>
                                                            </div>
                                                            <div class="kt-widget-7__item-toolbar">
                                                                <div class="dropdown dropdown-inline">
                                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="flaticon-more-1"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(32px, 33px, 0px);">
                                                                        <ul class="kt-nav">
                                                                            <li class="kt-nav__section kt-nav__section--first">
                                                                                <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-eye"></i>
                                                                                    <span class="kt-nav__link-text">View</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-comment-o"></i>
                                                                                    <span class="kt-nav__link-text">Coments</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                                                    <span class="kt-nav__link-text">Copy</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                                                    <span class="kt-nav__link-text">Excel</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget-7__item">
                                                            <div class="kt-widget-7__item-pic">
                                                                <img src="../../assets/Backoffice/media/files/jpg.svg" alt="">
                                                            </div>
                                                            <div class="kt-widget-7__item-info">
                                                                <a href="#" class="kt-widget-7__item-title">
                                                                    FlyMore Screenshot
                                                                </a>
                                                                <div class="kt-widget-7__item-desc">
                                                                    4 MB
                                                                </div>
                                                            </div>
                                                            <div class="kt-widget-7__item-toolbar">
                                                                <div class="dropdown dropdown-inline">
                                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="flaticon-more-1"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(32px, 33px, 0px);">
                                                                        <ul class="kt-nav">
                                                                            <li class="kt-nav__section kt-nav__section--first">
                                                                                <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-eye"></i>
                                                                                    <span class="kt-nav__link-text">View</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-comment-o"></i>
                                                                                    <span class="kt-nav__link-text">Coments</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                                                    <span class="kt-nav__link-text">Copy</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                                                    <span class="kt-nav__link-text">Excel</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget-7__item">
                                                            <div class="kt-widget-7__item-pic">
                                                                <img src="../../assets/Backoffice/media/files/zip.svg" alt="">
                                                            </div>
                                                            <div class="kt-widget-7__item-info">
                                                                <a href="#" class="kt-widget-7__item-title">
                                                                    ST.11 Dacuments
                                                                </a>
                                                                <div class="kt-widget-7__item-desc">
                                                                    Unknown
                                                                </div>
                                                            </div>
                                                            <div class="kt-widget-7__item-toolbar">
                                                                <div class="dropdown dropdown-inline">
                                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="flaticon-more-1"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(32px, 33px, 0px);">
                                                                        <ul class="kt-nav">
                                                                            <li class="kt-nav__section kt-nav__section--first">
                                                                                <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-eye"></i>
                                                                                    <span class="kt-nav__link-text">View</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-comment-o"></i>
                                                                                    <span class="kt-nav__link-text">Coments</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                                                    <span class="kt-nav__link-text">Copy</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                                                    <span class="kt-nav__link-text">Excel</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget-7__item">
                                                            <div class="kt-widget-7__item-pic">
                                                                <img src="../../assets/Backoffice/media/files/xml.svg" alt="">
                                                            </div>
                                                            <div class="kt-widget-7__item-info">
                                                                <a href="#" class="kt-widget-7__item-title">
                                                                    XML AOL Data Fetchin
                                                                </a>
                                                                <div class="kt-widget-7__item-desc">
                                                                    4 MB
                                                                </div>
                                                            </div>
                                                            <div class="kt-widget-7__item-toolbar">
                                                                <div class="dropdown dropdown-inline">
                                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="flaticon-more-1"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(32px, 33px, 0px);">
                                                                        <ul class="kt-nav">
                                                                            <li class="kt-nav__section kt-nav__section--first">
                                                                                <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-eye"></i>
                                                                                    <span class="kt-nav__link-text">View</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-comment-o"></i>
                                                                                    <span class="kt-nav__link-text">Coments</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                                                    <span class="kt-nav__link-text">Copy</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="kt-nav__item">
                                                                                <a href="#" class="kt-nav__link">
                                                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                                                    <span class="kt-nav__link-text">Excel</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
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