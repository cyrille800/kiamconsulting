<?php 
session_start();
if(!isset($_SESSION["id"])){
    header("location:../../pages_error/404.html");
}
require_once "../../../entities/class_paiement.php";
$nombre=1;
if(isset($_GET["nombre"])){
$nombre=intval($_GET["nombre"]);
}
include_once "../../../entities/class_etudiant.php";
$resultat=etudiant::retourne_valeur("id_client",$_SESSION["id"],"resultat");
if($resultat!=1 && $_SESSION["type"]==0){
    header("location:../../pages_error/404.html");
}
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
        <link href="../../assets/Backoffice/css/demo1/pages/pricing/pricing-v2.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/Backoffice/css/demo4/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="padding:0px;margin:0px;background-color:rgba(0,0,0,0.06);overflow:hidden;" id="<?php echo $_SESSION["id"];?>">
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
<div class="kt-subheader   kt-grid__item bg-white mb-4" id="kt_subheader" style="padding:2px;padding-left:40px;">
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">Paiement</h3>
            
                            <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="la la-tachometer"></i></a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Liste des paiements                        </a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                </div>
                    <a href="panier.php"  class="ml-5 btn btn btn-label btn-label-brand btn-bold" >
                                        <i class="la la-cc-paypal" style="font-size:50px;">
                                        </i>
                                        Ouvrir le panier
                                    </a>
        </div>
    </div>
</div>
                        </div>
                                <!-- begin:: Content -->
                                <div class="kt-content kt-grid__item kt-grid__item--fluid" style="background-color:transparent;">
<div class="preload" style="position:fixed;width:100%;height:100%;background:transparent;left:0;top:0;z-index:100;padding-top:10%;">
<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
</div>
                                    <!--begin::Dashboard 5-->
<div class="row mx-auto">
    <div class="col-xl-12 mx-auto">
        <div class="kt-pricing-v2 mx-auto">
            <div class="row tab-content">
                <div class="col-3">
            <div class="alert alert-warning fade show mx-auto mb-0" role="alert">
                            <div class="alert-icon"><i class="la la-question-circle"></i></div>
                            <div class="alert-text">Effectuer le paiement si necessaire</div>
                        </div>
<div class="alert alert-success fade show mx-auto mt-2" role="alert">
                            <div class="alert-icon"><i class="la la-question-circle"></i></div>
                            <div class="alert-text">Selectionner les paiements à effectuer puis selectionner le boutton ouvrir le panier</div>
                        </div>        
                </div> 
                <div class="col-9">
                <div class="tab-pane active" id="kt_tabs_4_2 col-12" role="tabpanel">
                    <div class="kt-section__content kt-section__content--border col-12">
                        <nav aria-label="...">
                            <ul class="pagination mx-auto col-5 mb-4">
                                <?php 
                                    $type=intval(client::retourne_valeur("id",$_SESSION['id'],"type"));
                                    $type=($type==0)?"etudiant":"patient";
                                $requette=config::$bdd->query("select count(*) from paiement where type='".$type."'");
                                $fr=$requette->fetch();
                                $nombres=intval($fr[0]);
                                for($i=0;$i<$nombres/4;$i++){
                                    echo '<li class="page-item ';
                                    if(isset($_GET["nombre"])){
                                        if(intval($_GET["nombre"])==($i+1)){
                                            echo "active";
                                        }
                                    }else{
                                        if($i==0){
                                            echo "active";
                                        }
                                    }
                                    echo '"><a class="page-link" href="paiement?nombre='.($i+1).'">'.($i+1).'</a></li>';
                                }
                                ?>
                                
                            </ul>
                        </nav>
                    </div>
                    <div class="row">
                        <?php 
                        paiement::afficher_client($_SESSION["id"],$nombre);
                        ?>
                    </div>
                </div>
                </div> 
                
                    </div>
            </div>      
        </div>
    </div>
</div>
                                    
                                    <!--end::Dashboard 5-->
                                </div>
                                <!-- end:: Content -->
<button type="button" class="btn btn-primary mol" data-toggle="modal" data-target="#exampleModal" style="display:none;">
  Launch demo modal
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:120%;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-paypal"></i>&nbsp;&nbsp;&nbsp; Paiement</h5>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-5">
                <img src="https://www.unsimpleclic.com/wp-content/uploads/2018/10/181008-localiser-00.png" width="100%" alt="">
            </div> 
            <div class="col-7">
               <h3 class="lead">
                    Si vous ne parvenez pas à effectuer un paiement en ligne ! <br> <br> vous pouvez vous rapprochez au prés de nos agences .
               </h3> 
            </div> 
        </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
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
           <?php 
           if(!isset($_GET["nombre"])){
            ?>
$(".mol").trigger("click");
            <?php
           }
           ?>
        })

                $(function(){


$("[operation]").click(function(){
    var d=$(this).parent().parent().parent()
    var message="";
    if($(this).attr("operation")=="ajouter"){
       $(this).attr("operation","retirer") 
                               d.removeClass("kt-pricing-v2--primary")
                        d.addClass("kt-pricing-v2--danger")
                        var f=d.find(".la.la-cc-paypal")
                        f.removeClass("la-cc-paypal");
                        f.addClass("la-legal")
                        message="cette offre a été ajouter dans le panier"
    }else{
       $(this).attr("operation","ajouter") 
                               d.removeClass("kt-pricing-v2--danger")
                        d.addClass("kt-pricing-v2--primary")
                        var f=d.find(".la.la-legal")
                        f.removeClass("la-legal");
                        f.addClass("la-cc-paypal")
                        message="cette offre a été supprimer du panier"
    }

                            $.post("../../../entities/paiement_client.php",{id_client:$("body").attr("id"),id_paiement:$(this).attr("id")},function(data){
                    if(data!="ok"){
                        toastr.error(data);
                    }else{
                        toastr.success(message);
                    }
                })

})

                })
        </script>
</body>
</html>