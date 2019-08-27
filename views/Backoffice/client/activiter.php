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
<body style="padding:0px;margin:0px;background:white;"   id="<?php echo $_SESSION["id"];?>"  login="<?php echo $_SESSION["login"];?>">

                                <!-- begin:: Content -->
                                <div class="kt-content kt-grid__item kt-grid__item--fluid" style="background-color:white;">
<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
</div>
                                    <!--begin::Dashboard 5-->


                    <center>

                        <div class="col-md-9">
                <!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid kt-widget-13" style="border:1px solid #eee;">
    <div class="kt-portlet__body">
        <div id="kt-widget-slider-13-2" class="kt-slider carousel slide pointer-event" data-ride="carousel" data-interval="4000">
            <div class="kt-slider__head">
                <div class="kt-slider__label">Activités</div>
                <div class="kt-slider__nav">
                    <a class="kt-slider__nav-prev carousel-control-prev" href="#kt-widget-slider-13-2" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="kt-slider__nav-next carousel-control-next" href="#kt-widget-slider-13-2" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="carousel-inner">
                                  <?php
                                    if(isset($_COOKIE["id_activiter".$_SESSION["id"]])){
                                        // ce 1 represente les activités du client
                                    activiter::afficher_client($_SESSION["id"],1,$_COOKIE["id_activiter".$_SESSION["id"]]);
                                    }else{
                                    activiter::afficher_client($_SESSION["id"],1,"");
                                    }
                                    ?>
            </div>
        </div>
    </div>
</div>
<!--end::Portlet-->            </div>

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
        <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
        <script src="http://localhost:1337/socket.io/socket.io.js" type="text/javascript"></script>
        <script>
                $(window).on("load",function(){
           $(".preload").fadeOut("fast");
        })
                $(function(){
                    var socket = io.connect("http://localhost:1337");
                    var ideo=$("body").attr("id");
                            <?php 
        $o=config::$bdd->query("select count(*) from activiter_client where etat=1 && id_client=".$_SESSION["id"]);
        $y=$o->fetch();
        if(intval($y[0])==0){

            echo "Cookies.remove('id_activiter'+ideo,{ path: '' });
                            Cookies.remove('pourcentage'+ideo,{ path: '' });
                            Cookies.remove('active'+ideo,{ path: '' });
                            Cookies.remove('nbr_actif'+ideo,{ path: '' });";
        }
        ?>
                                        $(".ii").click(function(){
                                            var i=$(this).attr("etape_actuel");
                                            var id_activiter=$(this).attr("id");
                    $.post("../../../entities/activiter_client.php",{id_client:$("body").attr("id"),id_activiter:$(this).attr("id"),nombre_etape_fait:0,etape_actuel:i},function(data){
                    if(data!="ok"){
                    toastr.error(data);
                    }else{
                    document.location.href="activiter.php";
                    }
                    })

                    var msg="un utilisateur (login ='"+$("body").attr("login")+"') à commencer l'activiter -> "+$(this).attr("name");
                    $.post("../../../entities/notification.php",{id_personne:0,type:"info",message:msg,etat:0,operations:"controler activiter"})
                    socket.emit("envoyer_notification",{type:"info",message:msg})
                    socket.emit("demarer_activiter",{id_activiter:id_activiter})
                    })
                                                            $(".annuler").click(function(){
                                                                var d=$(this);
                                                                var id_activiter=$(this).attr("id");
                    $.post("../../../entities/activiter_client.php",{operation:"supprimer",id_client:$("body").attr("id"),id_activiter:$(this).attr("id")},function(data){
                    if(data!="ok"){
                    toastr.error(data);
                    }else{
                                            <?php 
                    $cd=intval(activiter_client::nombre($_SESSION["id"],"id_client",$_SESSION["id"]))-1;
                    echo "Cookies.set('nbr_actif'+ideo,".$cd.", { expires: 360, path: '' });";
                    ?>
                        if(parseInt(Cookies.get("id_activiter"+ideo))==parseInt(d.attr("id"))){
                            Cookies.remove('id_activiter'+ideo,{ path: '' });
                            Cookies.remove('pourcentage'+ideo,{ path: '' });
                            Cookies.remove('active'+ideo,{ path: '' });
                        }
                        var msg="un utilisateur (login ='"+$("body").attr("login")+"') à annuler son activiter -> "+d.attr("name");
                                                                       $.post("../../../entities/notification.php",{id_personne:0,type:"erreur",message:msg,etat:0,operations:"controler activiter"})
                                                            socket.emit("demarer_activiter",{id_activiter:id_activiter})
                                                            socket.emit("envoyer_notification",{type:"erreur",message:msg})
                        document.location.href="activiter.php";
                    }
                    })
                    })
                    $(".poursuivre").click(function(){
                     Cookies.set('id_activiter'+ideo,$(this).attr("id"), { expires: 360, path: '' });
                    $.post("../../../entities/activiter.php",{operation:"nombre_pourcentage",id:ideo,o:Cookies.get('id_activiter'+ideo)},function(data){
                                        Cookies.set('pourcentage'+ideo,data, { expires: 360, path: '' });
                                        Cookies.set('active'+ideo,1, { expires: 360, path: '' });
                                                            <?php 
                    $cd=intval(activiter_client::nombre($_SESSION["id"],"id_client",$_SESSION["id"]));
                    echo "Cookies.set('nbr_actif'+ideo,".$cd.", { expires: 360, path: '' });";
                    ?>
                    document.location.href="proccedure.php";
                    })
                    })
                })
        </script>
</body>
</html>