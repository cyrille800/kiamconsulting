<?php 
session_start();
include "../../../entities/class_client.php";
include "../../../entities/class_notification.php";
if(isset($_SESSION["id"]) && isset($_SESSION["type"])){
    $_SESSION["login"]=client::retourne_valeur("id",$_SESSION["id"],"username");
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
    <body  class="kt-page--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-subheader--enabled kt-subheader--transparent kt-page--loading"  id="<?php echo $_SESSION["id"];?>" login="<?php echo $_SESSION["login"];?>">

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

        <!-- begin::Page loader -->
        
        <!-- end::Page Loader -->
        
        <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile " style="padding:3.5%;background-color:#242939;">
            <div class="kt-header-mobile__logo">
                <a href="/keen/preview/demo4/index.html">
                    <img alt="Logo" src="../../assets/Backoffice/media/logos/logo-5.png"/>
                </a>
            </div>
            <div class="kt-header-mobile__toolbar">
                
                <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler">
                <span  style="color:white;">
                </span>
                </button>
                <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler">
                <i class="la la-ellipsis-v"  style="color:white;">
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
                    <iframe src="dashboard.php" style="height:100%;border:none;background-color: #f2f3fa;padding:0px;margin:0px;" class="col-md-12" name="frame1">
                        
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
        <script src="http://localhost:1337/socket.io/socket.io.js" type="text/javascript"></script>

<script>
                        $(window).on("load",function(){
                    $(".preload").fadeOut("slow");
                    })
    $(function(){
        var ideo=$("body").attr("id");
        var socket= io.connect("http://localhost:1337");
        socket.on("notification_message",function(message){
            if(message.id_client==ideo){
                toastr.info("nouveau message : "+message.message);
                $(".iok").text(parseInt($(".iok").text())+1);
            }
        })




        <?php 
        $o=config::$bdd->query("select count(*) from activiter_client where etat=1 && id_client=".$_SESSION["id"]);
        $y=$o->fetch();
        if($y[0]==0){
            echo "                                    Cookies.remove('id_activiter'+ideo,{ path: '' });
                            Cookies.remove('pourcentage'+ideo,{ path: '' });
                            Cookies.remove('active'+ideo,{ path: '' });
                            Cookies.remove('nbr_actif'+ideo,{ path: '' });";
        }
        ?>
        $(".del").click(function(){
            $(".remplir").fadeOut("fast").queue(function(){
                $(".hy").remove();
                $(this).dequeue();
            })
             $.post("../../../entities/notification.php",{operation:"lues",id_client:$("body").attr("id")},function(data){})
             $(".signaler").hide();
        })

        $(".ss").click(function(){
            var i=0;
            $(".remplir").children().each(function(){
i++;
            })
            if(i==0){
              $("#kt_quick_panel").addClass(" kt-offcanvas-panel--on");
              $("#kt_quick_panel").css("opacity","1");
              $("#kt_quick_panel").after('<div class="kt-offcanvas-panel-overlay bv"></div>')
              $(".bv").click(function(){
               $("#kt_quick_panel").removeClass("kt-offcanvas-panel--on"); 
               $("#kt_quick_panel").css("opacity","0");
               $(this).remove();
              })
             setTimeout(function(){
                $(".dropdown-menu.dropdown-menu-fit.dropdown-menu-right.dropdown-menu-anim.dropdown-menu-xl").removeClass("show")
             },60)

            }else{
             
            }
        })

        $(".hy").click(function(){
              $("#kt_quick_panel").addClass(" kt-offcanvas-panel--on");
              $("#kt_quick_panel").css("opacity","1");
              $("#kt_quick_panel").after('<div class="kt-offcanvas-panel-overlay bv"></div>')
              $(".bv").click(function(){
               $("#kt_quick_panel").removeClass("kt-offcanvas-panel--on"); 
               $("#kt_quick_panel").css("opacity","0");
               $(this).remove();
              })

              $.post("../../../entities/notification.php",{operation:"lue",id_client:$("body").attr("id"),id_notif:$(this).attr("id")},function(data){})
              $(this).remove()  
            var i=0;
            $(".remplir").children().each(function(){
i++;
            })

            if(i==0){
                $(".signaler").hide();
            }          
        })


            $.get("../../../entities/message.php",{operation:"tout_afficher_moi",id:$("body").attr("id")},function(data){
    if(data!=0){
        if(parseInt($(".iok").text())!=data){
            $(".iok").text(data);
        }
    }else{
            $(".iok").text("0");
    }
})

socket.on("recevoir_notification",function(data){
    if(parseInt(data.id_client)==parseInt($("body").attr("id"))){
var id=parseInt($(".kt-timeline").attr("id"));
            $.post("../../../entities/notification.php",{operation:"nombre_total",id_client:$("body").attr("id")},function(data){
                if(parseInt(data)>id){
                   $(".kt-timeline").attr("id",data)
                    toastr.info("vous avez une nouvelle notification")
                    $(".signaler").show()
                    $.post("../../../entities/notification.php",{operation:"dernier_time",id_client:$("body").attr("id")},function(datase){
                        $(".kt-timeline").prepend(datase);
                    })
                    $.post("../../../entities/notification.php",{operation:"dernier",id_client:$("body").attr("id")},function(datas){
                        $(".remplir").show();
                        $(".remplir").prepend(datas);
        $(".hy").click(function(){
              $("#kt_quick_panel").addClass(" kt-offcanvas-panel--on");
              $("#kt_quick_panel").css("opacity","1");
              $("#kt_quick_panel").after('<div class="kt-offcanvas-panel-overlay bv"></div>')
              $(".bv").click(function(){
               $("#kt_quick_panel").removeClass("kt-offcanvas-panel--on"); 
               $("#kt_quick_panel").css("opacity","0");
               $(this).remove();
              })

              $.post("../../../entities/notification.php",{operation:"lue",id_client:$("body").attr("id"),id_notif:$(this).attr("id")},function(data){})
              $(this).remove()  
            var i=0;
            $(".remplir").children().each(function(){
i++;
            })

            if(i==0){
                $(".signaler").hide();
            }          
        })
                    })
                }
            })
    }
})


socket.on("evolution_etape",function(data){
    if(parseInt(data.id_client)==parseInt($("body").attr("id"))){
var id=parseInt($(".kt-timeline").attr("id"));
            $.post("../../../entities/notification.php",{operation:"nombre_total",id_client:$("body").attr("id")},function(data){
                if(parseInt(data)>id){

                   $(".kt-timeline").attr("id",data)
                    toastr.info("vous avez une nouvelle notification")
                    $(".signaler").show()
                    $.post("../../../entities/notification.php",{operation:"dernier_time",id_client:$("body").attr("id")},function(datase){
                        $(".kt-timeline").prepend(datase);
                    })
                    $.post("../../../entities/notification.php",{operation:"dernier",id_client:$("body").attr("id")},function(datas){
                        $(".remplir").show();
                        $(".remplir").prepend(datas);
        $(".hy").click(function(){
              $("#kt_quick_panel").addClass(" kt-offcanvas-panel--on");
              $("#kt_quick_panel").css("opacity","1");
              $("#kt_quick_panel").after('<div class="kt-offcanvas-panel-overlay bv"></div>')
              $(".bv").click(function(){
               $("#kt_quick_panel").removeClass("kt-offcanvas-panel--on"); 
               $("#kt_quick_panel").css("opacity","0");
               $(this).remove();
              })

              $.post("../../../entities/notification.php",{operation:"lue",id_client:$("body").attr("id"),id_notif:$(this).attr("id")},function(data){})
              $(this).remove()  
            var i=0;
            $(".remplir").children().each(function(){
i++;
            })

            if(i==0){
                $(".signaler").hide();
            }          
        })
                    })
                }
            })
    }
})


$(".kt-menu__item a").not(".kt-menu__item[data-ktmenu-submenu-toggle] a").click(function(){
    var d=$(this)
    setTimeout(function(){
$(".kt-menu__item").attr("class","kt-menu__item kt-menu__item--submenu kt-menu__item--rel")
        d.parent().attr("class","kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here");
    },100)
})

$(".kt-menu__item.im a").click(function(){
    $(".kt-menu__item").attr("class","kt-menu__item kt-menu__item--submenu kt-menu__item--rel")
    $(this).parent().parent().parent().parent().attr("class","kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here");
    $(this).parent("").addClass("kt-menu__item--active")
})
$(".deslect").click(function(){
    $(".kt-menu__item").attr("class","kt-menu__item kt-menu__item--submenu kt-menu__item--rel")
})

$(".ink").click(function(){
    $(".iok").text("0")
})
    })
</script>
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