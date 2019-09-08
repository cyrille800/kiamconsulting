<?php 
session_start();
if(!isset($_SESSION["id_admin"])){
    header("location: ../../pages_error/404.html");
}
require_once "../../../entities/class_client.php";
require_once "../../../entities/class_message.php";
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
                    <link href="assets/css/demo1/pages/wizard/wizard-2.css" rel="stylesheet" type="text/css" />
                        <!--end::Page Vendors Styles -->
        
        
        <!--begin::Global Theme Styles(used by all pages) -->
                    <link href="assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
                    <link href="assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        
<link href="assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
<link href="assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
<link href="assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
<link href="assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />        <!--end::Layout Skins -->

        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-color:#e5e4ef;overflow-x:hidden;opacity:0;">
<div class="kt-subheader   kt-grid__item bg-white mb-4" style="padding:10px;padding-left:40px;position:absolute;left:0;top:0;" id="kt_subheader">
    <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">
                            Messagerie</h3>
                            <span class="kt-subheader__separator kt-hidden">
                            </span>
                            <div class="kt-subheader__breadcrumbs">
                                <a href="#" class="kt-subheader__breadcrumbs-home">
                                    <i class="la la-shelter" style="font-size:25px;">
                                    </i>
                                </a>
                                <span class="kt-subheader__breadcrumbs-separator">
                                </span>
                                <a href="" class="kt-subheader__breadcrumbs-link">
                                liste des clients                   </a>
                                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
                                Active link</span>
                                -->
                            </div>
                            
                        </div>
</div>
<!-- end:: Content Head -->                 
                    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid mt-5 ml-5">
        <!--Begin::Dashboard 1-->

<!--Begin::Row-->
<div class="row  mx-auto" style="margin-top:50px;">      

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid ml-5">
        <!--Begin::Section-->

<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
    <!--Begin:: App Aside Mobile Toggle-->
    <button class="kt-app__aside-close" id="kt_chat_aside_close">
        <i class="la la-close"></i>
    </button>
    <!--End:: App Aside Mobile Toggle-->

    <!--Begin:: App Aside-->
    <div class="kt-grid__item kt-app__toggle kt-app__aside kt-app__aside--lg kt-app__aside--fit  mr-5 ml-5" id="kt_chat_aside" style="opacity: 1;height:650px;">
        <!--begin::Portlet-->
        <div class="kt-portlet kt-portlet--last h-100">
            <div class="kt-portlet__body">
                <div class="kt-searchbar">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" id="Path" fill="#000000" fill-rule="nonzero"></path>
    </g>
</svg></span></div>
                        <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="kt-widget kt-widget--users kt-mt-20">
                    <div class="kt-scroll kt-scroll--pull ps ps--active-y" style="height: 667px; overflow: hidden;">
                        <div class="kt-widget__items">
<?php 
client::afficher();
?>
                        </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 667px; right: -2px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 300px;"></div></div></div>
                </div>
            </div>
        </div>
        <!--end::Portlet-->
    </div>
    <!--End:: App Aside-->

                    <iframe src="message.php" style="height:650px;border:none;background-color:transparent;padding:0px;margin:0px;" class="col-md-12" name="frame3">
                        
                    </iframe>
            </body>
    <!-- end::Body -->
                   <script src="assets/vendors/global/vendors.bundle.js" type="text/javascript"></script>
                   <script src="assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
                   <script src="http://localhost:1337/socket.io/socket.io.js" type="text/javascript"></script>
    <script>
    	$(function(){

            var socket = io.connect("http://localhost:1337");

            socket.on("notification_message_admin",function(message){
    var nombre=parseInt($("[id_id='"+message.id_client+"']").attr("nombre_message"))+1;
    $("[id_id='"+message.id_client+"']").text(nombre)
    $("[id_id='"+message.id_client+"']").attr("nombre_message",nombre)
})

            $(window).on("beforeunload",function(){
                socket.emit("admin_client",{id_client:-1});
            })

    		$("body").animate({"opacity":"1"},100)
            $(".bgt").click(function(){
                var nombre_message=$(this).parents(".kt-widget__info").find("[id_id]").attr("nombre_message");
                if(nombre_message!=""){
                socket.emit("reduire",{nombre_message:nombre_message})
                $(this).parents(".kt-widget__info").find("[id_id]").text("")
                $(this).parents(".kt-widget__info").find("[id_id]").attr("nombre_message","0")
                }
            })
    	})
    </script>
</html>   