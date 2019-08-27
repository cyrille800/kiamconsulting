<?php 
session_start();
require_once "../../../entities/class_paiement.php";
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
</head>
<body style="padding:0px;margin:0px;background-color:transparent;overflow:hidden;" id="<?php echo $_SESSION["id"];?>">
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
<div class="kt-subheader   kt-grid__item bg-white mb-4" id="kt_subheader" style="padding:10px;padding-left:40px;">
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
                    
        </div>
    </div>
</div>
                        <div class="kt-subheader__main bg-white">
                            <h3 class="kt-subheader__title">
                            Recherche</h3>
                            <div class="kt-subheader__toolbar" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                            <span class="rps">0</span> Totals                                   </span>
<form class="kt-subheader__search" id="kt_subheader_search_form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">
                                    <i class="la la-search"></i>
                                </span>
                            </div>
                                                                <a href="panier.php" class="btn btn btn-label btn-label-brand btn-bold ml-5" >
                                        <i class="la la-cc-paypal" style="font-size:50px;">
                                        </i>
                                        Ouvrir le panier
                                    </a>
                        </div>
                    </form>
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
            <div class="tab-content mx-auto">
                                        <div class="alert alert-success fade show col-md-5 mx-auto" role="alert">
                            <div class="alert-icon"><i class="la la-question-circle"></i></div>
                            <div class="alert-text">Selectionner les paiements à effectuer puis selectionner le boutton effectué le paiement</div>
                        </div>
                <div class="tab-pane active" id="kt_tabs_4_2" role="tabpanel">
                    <div class="row px-5">
                        <?php 
                        paiement::afficher_client($_SESSION["id"]);
                        ?>
                    </div>
                </div>
            </div>      
        </div>
    </div>
</div>
                                    
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