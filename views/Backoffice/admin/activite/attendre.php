<?php 
session_start();
if(!isset($_SESSION["id_admin"])){
    header("location: ../../../pages_error/404.html");
}
?>
<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8"/>
        
        <title>Metronic | Dashboard</title>
        <meta name="description" content="Updates and statistics"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Fonts -->
<style>
/* width */
::-webkit-scrollbar {
  width: 3px;
}

/* Track */
::-webkit-scrollbar-track {
  background: transparent; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background:#d8dce6 ; 
}

</style>
                    <!--begin::Page Vendors Styles(used by this page) -->
                    <link href="../assets/css/demo1/pages/wizard/wizard-2.css" rel="stylesheet" type="text/css" />
                        <!--end::Page Vendors Styles -->
        
        
        <!--begin::Global Theme Styles(used by all pages) -->
                    <link href="../assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
                    <link href="../assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        
<link href="../assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />        <!--end::Layout Skins -->

        <link rel="shortcut icon" href="../assets/media/logos/favicon.ico" />
    </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="overflow:hidden;background-color:white;">
<div class="kt-portlet kt-iconbox kt-iconbox--info kt-iconbox--animate col-xl-4 my-auto mx-4" style="height:200px;">
                    <div class="kt-portlet__body">
                        <div class="kt-iconbox__body">
                            <div class="kt-iconbox__icon">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <path d="M20.4061385,6.73606154 C20.7672665,6.89656288 21,7.25468437 21,7.64987309 L21,16.4115967 C21,16.7747638 20.8031081,17.1093844 20.4856429,17.2857539 L12.4856429,21.7301984 C12.1836204,21.8979887 11.8163796,21.8979887 11.5143571,21.7301984 L3.51435707,17.2857539 C3.19689188,17.1093844 3,16.7747638 3,16.4115967 L3,7.64987309 C3,7.25468437 3.23273352,6.89656288 3.59386153,6.73606154 L11.5938615,3.18050598 C11.8524269,3.06558805 12.1475731,3.06558805 12.4061385,3.18050598 L20.4061385,6.73606154 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
        <polygon id="Combined-Shape-Copy" fill="#000000" points="14.9671522 4.22441676 7.5999999 8.31727912 7.5999999 12.9056825 9.5999999 13.9056825 9.5999999 9.49408582 17.25507 5.24126912"/>
    </g>
</svg>
           </div>
                            <div class="kt-iconbox__desc">
                                <h3 class="kt-iconbox__title">
                                    <a class="kt-link" href="#">Activiter</a>
                                </h3>
                                <div class="kt-iconbox__content">
                                    Selectionner une activiter pour consulter les étapes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <!--End:: App Content-->
</div>
</div>
</div>
<!--End::Row-->
<!--End::Dashboard 1--> </div>
<!-- end:: Content -->              </div>              
</div>
        </div>
    </div>
    
<!-- end:: Page -->



<!--Begin:: Chat-->
        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#5d78ff","dark":"#282a3c","light":"#ffffff","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
                   <script src="../assets/vendors/global/vendors.bundle.js" type="text/javascript"></script>
                   <script src="../assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
</body>
</html>