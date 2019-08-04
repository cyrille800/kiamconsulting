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
<body style="padding:0px;margin:0px;"   id="<?php echo $_SESSION["id"];?>">

                                <!-- begin:: Content -->
                                <div class="kt-content kt-grid__item kt-grid__item--fluid" style="background-color:white;">
<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
</div>
                                    <!--begin::Dashboard 5-->


                    <center>
                                <div class="element" style="height:500px;overflow-y:scroll;">
                                    <?php
                                    if(isset($_COOKIE["id_activiter"])){
                                    activiter::afficher_client($_SESSION["id"],$_COOKIE["id_activiter"]);
                                    }else{
                                    activiter::afficher_client($_SESSION["id"],"");
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
        <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
        <script>
                $(window).on("load",function(){
           $(".preload").fadeOut("fast");
        })
                $(function(){
                                        $(".ii").click(function(){
                    $.post("../../../entities/activiter_client.php",{id_client:$("body").attr("id"),id_activiter:$(this).attr("id"),nombre_etape_fait:0,etape_actuel:$(this).attr("etape_actuel")},function(data){
                    if(data!="ok"){
                    toastr.error(data);
                    }else{
                    document.location.href="activiter.php";
                    }
                    })
                    })
                                                            $(".annuler").click(function(){
                                                                var d=$(this);
                    $.post("../../../entities/activiter_client.php",{operation:"supprimer",id_client:$("body").attr("id"),id_activiter:$(this).attr("id")},function(data){
                    if(data!="ok"){
                    toastr.error(data);
                    }else{
                        if(parseInt(Cookies.get("id_activiter"))==parseInt(d.attr("id"))){
                            Cookies.remove('id_activiter',{ path: '' });
                        }
                        document.location.href="activiter.php";
                    }
                    })
                    })
                    $(".poursuivre").click(function(){
                     Cookies.set('id_activiter',$(this).attr("id"), { expires: 360, path: '' });
                     document.location.href="proccedure.php";
                    })
                })
        </script>
</body>
</html>