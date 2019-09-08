<?php 
session_start();
if(!isset($_SESSION["id"])){
    header("location:../../pages_error/404.html");
}
require_once "../../../entities/class_paiement_client.php";
include_once "../../../entities/class_etudiant.php";
require_once "../../../entities/class_client.php"; 
require_once "../../../entities/class_paiement.php";
$resultat=etudiant::retourne_valeur("id_client",$_SESSION["id"],"resultat");
if($resultat!=1 && $_SESSION["type"]==0){
    header("location:../../pages_error/404.html");
}
if(isset($_SESSION["id"])){
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
        <link href="../../assets/Backoffice/css/demo1/pages/invoice/invoice-v2.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/Backoffice/css/demo4/style.bundle.css" rel="stylesheet" type="text/css" />
                <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:1070954,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-37564768-1');
        </script>
</head>
<body style="padding:0px;margin:0px;background-color:rgba(0,0,0,0.06);" id="<?php echo $_SESSION["id"];?>">
<div class="kt-subheader   kt-grid__item bg-white mb-4" id="kt_subheader" style="padding:2px;padding-left:40px;">
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">Panier</h3>
            
                            <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="la la-tachometer"></i></a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Liste des offres choisi                       </a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                </div>
                    
        </div>
    </div>
</div>
                        <div class="kt-subheader__main bg-white">
                            <div class="kt-subheader__toolbar" id="kt_subheader_search">
<form class="kt-subheader__search" id="kt_subheader_search_form">
                        <div class="input-group">
                                                                <a href="paiement.php" class="btn btn btn-label btn-label-brand btn-bold ml-5" >
                                        <i class="la la-long-arrow-left text-primary" style="font-size:50px;">
                                        </i>
                                        Revenir à la liste des offres
                                    </a>
                        </div>
                    </form>
                            </div>
                            </div>
                            
                        </div>

                        <?php 
                        if(isset($_GET["oui"])){
                            echo '<div class="alert alert-success fade show col-md-5 mx-auto mt-2" role="alert">
                            <div class="alert-icon"><i class="la la-question-circle"></i></div>
                            <div class="alert-text">Votre paiement a été effectuer avec succè</div>
                        </div>';
                        }
                        ?>
                                <!-- begin:: Content -->
                                <div class="kt-content kt-grid__item kt-grid__item--fluid" style="background-color:white;">
<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
</div>
                                    <!--begin::Dashboard 5-->
        <div class="kt-invoice__body mx-auto col-md-8">
            <div class="kt-invoice__container">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">OFFRE</font></font></td>
                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">LA DESCRIPTION</font></font></td>
                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MONTANT</font></font></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            paiement_client::afficher($_SESSION["id"]);
                            ?>
                        </tbody>
                        <thead>
                            <tr>
                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PRIX TOTAL DES OFFRES</font></font></td>
                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">FRAIS D'ENVOIE</font></font></td>
                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PRIX TOTAL A PAYER</font></font></td>
                            </tr>
                        </thead>
                                                <tbody>
                            <tr>
                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;font-size:30px;" class="ptdo">0</font><font style="vertical-align: inherit;" class="text-primary"> XAF</font></font></td>
                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;font-size:30px;" class="fd"></font><font style="vertical-align: inherit;" class="text-primary"> XAF</font><a href="https://www.paypal.com/fr/webapps/mpp/paypal-fees" style="vertical-align: inherit;" target="_blank" class="text-primary ml-5">   pourquoi ?</a></font></td>
                                <td><font style="vertical-align: inherit;font-size:30px;"><font style="vertical-align: inherit;" class="ptap"></font><font style="vertical-align: inherit;" class="text-primary"> XAF</font></font></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                   <center class="mt-5">
                    <h3 class="lead text-primary">Selectionner un mode de paiement pour effectuer le paiement</h3> 
                                <div class="mode mt-4"></div> 
                   </center>
            </div>
        </div>
                                    
                                    <!--end::Dashboard 5-->
                                </div>

                                            <?php 

    $requette=config::$bdd->query("select * from paiement_client where id_client=".$_SESSION["id"]." && etat=0");
    $id_commande="";
    $v=0;
    while($data=$requette->fetch()){
    $v+=ceil(paiement::retourne_valeur("id",$data["id_paiement"],"montant")/656.63);
    $id_commande.=$data["id_paiement"].",";
    }
    
            ?>
            
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
        <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=EUR"></script>
        <script>
 
                $(window).on("load",function(){
           $(".preload").fadeOut("fast");
paypal.Buttons({

   createOrder: function(data, actions) {
      // Set up the transaction
      return actions.order.create({
        intent : 'CAPTURE',
        purchase_units: [{
            description : 'Sporting Goods',
          custom_id : <?php echo "'".$id_commande."'"; ?>,
          amount: {
            value: <?php echo $v; ?>
          }
        }]
      });
    },
onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        // Call your server to save the transaction
        
        alert("veuillez patienter quelques instant,ne quitter pas la page");
        var code=details.purchase_units[0].custom_id;
    return fetch('../../../entities/test.php?id='+data.orderID, {
          method: 'post',
          headers: {
            'content-type': 'application/json'
          },
          body: JSON.stringify({
            orderID: data.orderID
          })
        }).then(function(da){
            $.post("../../../entities/mettre_jour.php",{id_client:$('body').attr("id"),code:code},function(datas){
                if(datas==""){
                    alert("le paiement a été effectuer avec succèe");
                    document.location.href="paiement.php";
                }
            })
        });
      });
    }




}).render('.mode');
        })

                $(function(){
                    var t=0;
                    var euro=0;
                    $(".montant").each(function(){
                        t+=parseInt($(this).text());
                    })

                    $(".ptdo").text(t);
                    
                    var gt=t*(2.5/100);
                    $(".fd").text(gt)
                    var total=gt+t;
                    $(".ptap").text(total)
                   
                    if(total==0){
                        $(".payer").remove()
                    }
                })
        </script>
</body>
</html>
    <?php
}
?>