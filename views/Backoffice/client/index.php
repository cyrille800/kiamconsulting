<?php 
session_start();
$_SESSION["id"]=1;
$_SESSION["type"]=1;
include "../../../entities/class_client.php";
if(isset($_SESSION["id"]) && isset($_SESSION["type"])){
if(client::verifiers("id",$_SESSION["id"]) == false){
?>
<!DOCTYPE html>
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
        <link href="../../assets/Backoffice/css/demo4/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles -->
        <!--begin::Layout Skins(used by all pages) -->
        <!--end::Layout Skins -->
        <link rel="shortcut icon" href="../../assets/Backoffice/media/logos/favicon.ico" />
    </head>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body  class="kt-page--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-subheader--enabled kt-subheader--transparent kt-page--loading"  >
        <!-- begin::Page loader -->
        
        <!-- end::Page Loader -->
        
        <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile " >
            <div class="kt-header-mobile__logo">
                <a href="/keen/preview/demo4/index.html">
                    <img alt="Logo" src="../../assets/Backoffice/media/logos/logo-5.png"/>
                </a>
            </div>
            <div class="kt-header-mobile__toolbar">
                
                <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler">
                <span>
                </span>
                </button>
                <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler">
                <i class="flaticon-more-1">
                </i>
                </button>
            </div>
        </div>
        <!-- end:: Header Mobile -->
        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper" >
                    <!-- begin:: Header -->
                    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed "  data-ktheader-minimize="on"  style="background-color:#242939;">
<?php 
include "bout_code/navbar_horizontal_top.php";
?>
                        <div class="kt-header__bottom">
<?php 
include "bout_code/navbar_horizontal.php";
?>
                        </div>
                    </div>
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch" style="height:128vh;">
                        <div class="kt-container kt-body  kt-grid kt-grid--ver"  id="kt_body">
                            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                    <iframe src="bienvenu.php" style="height:100%;border:none;background-color: #f2f3fa;padding:0px;margin:0px;" class="col-md-12" name="frame1">
                        
                    </iframe>
                        </div>
                    </div>
                </div>

<?php 
include "bout_code/footer.php";
?>
                    <!-- end:: Footer -->
                </div>
            </div>
        </div>
        
        <!-- end:: Page -->
        <!-- begin:: Topbar Offcanvas Panels -->
        

        <!-- end:: Topbar Offcanvas Panels -->
        <!-- begin:: Quick Panel -->
<?php 
include "bout_code/navbar_vertical_droit.php";
?>
        <!-- end:: Quick Panel -->
        
        <!-- begin:: Scrolltop -->
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="la la-arrow-up">
            </i>
        </div>
        <!-- end:: Scrolltop -->


        <!-- begin::Global Config(global config for global JS sciprts) -->
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
        <!-- end::Global Config -->
        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="../../assets/Backoffice/vendors/global/vendors.bundle.js" type="text/javascript">
        </script>
        <script src="../../assets/Backoffice/js/demo4/scripts.bundle.js" type="text/javascript">
        </script>
        <!--end::Global Theme Bundle -->
        
        <!--begin::Page Vendors(used by this page) -->
        <script src="../../assets/Backoffice/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript">
        </script>
        <!--end::Page Vendors -->
        
        
        <!--begin::Page Scripts(used by this page) -->
        <script src="../../assets/Backoffice/js/demo4/pages/dashboard.js" type="text/javascript">
        </script>
        <!--end::Page Scripts -->


    </body>
    <!-- end::Body -->
</html>
<?php
}else{
header("location:../../pages_error/404.html");
}
}else{
header("location:../../pages_error/404.html");
}
?>