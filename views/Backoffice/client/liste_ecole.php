<?php 
session_start();
if(!isset($_SESSION["id"])){
    header("location:../../pages_error/404.html");
}
$nombre=1;
if(isset($_GET["nombre"])){
$nombre=intval($_GET["nombre"]);
}
require_once "../../../entities/class_ecole.php";
require_once "../../../entities/class_activiter_client.php";
require_once "../../../entities/class_etudiant.php";

$resultat=etudiant::retourne_valeur("id_client",$_SESSION["id"],"resultat");
if($resultat!=0){
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
        <link href="../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/Backoffice/css/demo4/style.bundle.css" rel="stylesheet" type="text/css" />
    </head>
    <body style="padding:0px;margin:0px;background-color:rgba(0,0,0,0.06);" id="<?php echo $_SESSION["id"];?>">
<div class="kt-subheader   kt-grid__item bg-white mb-4" id="kt_subheader" style="padding:2px;padding-left:40px;">
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">Ecoles</h3>
            
                            <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="la la-tachometer"></i></a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Liste des écoles                        </a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                </div>
                    
        </div>
    </div>
</div>
                        </div>        
        
        <!-- begin:: Content -->
        <div class="kt-content kt-grid__item kt-grid__item--fluid">
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
            <!--begin::Dashboard 5-->
            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                    <?php 
                    $row=activiter_client::retourne_valeur("id_client",$_SESSION["id"],"id");
                    if($row!=0){
                     echo '<div class="alert alert-warning fade show specialite" role="alert">
                            <div class="alert-icon"><i class="la la-question-circle"></i></div>
                            <div class="alert-text">Vous ne pouvez plus modifier les informations concernant l\'ecole choisi,<br>Vous devez annuler toutes les activitées en cours pour pouvoir faire des modifications .</div>
                        </div>';                       
                    }
                    ?>
                <div class="row">
    <div class="col">
        <div class="alert alert-light alert-elevate fade show" role="alert">
            <div class="alert-icon"><i class="la la-warning kt-font-brand"></i></div>
            <div class="alert-text">
                La redirection du lien vers le site de l'ecole peut ne pas fonctionner, <br> Vous pouvez toutes fois, faire la recherche sur le moteur de recherche Google que voici : <a class="kt-link kt-font-bold" href="https://google.com" target="_blank">&nbsp;&nbsp;Google</a>
                <br>
            </div>
        </div>
    </div>
</div>

                <!--begin::Portlet-->
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <!--begin: Datatable -->
                        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="kt_apps_user_list_datatable" style="">
                                                <div class="kt-section__content kt-section__content--border col-12">
                        <nav aria-label="...">
                            <ul class="pagination mx-auto col-5 mb-4 mt-4">
                                <?php 
                                $requette=config::$bdd->query("select count(*) from school");
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
                                    echo '"><a class="page-link" href="liste_ecole.php?nombre='.($i+1).'">'.($i+1).'</a></li>';
                                }
                                ?>
                                
                            </ul>
                        </nav>
                    </div>
                            <table class="kt-datatable__table" style="display: block; min-height: 500px;">
                                <thead class="kt-datatable__head">
                                    <tr class="kt-datatable__row" style="left: 0px;">
                                        <th data-field="first_name" class="kt-datatable__cell kt-datatable__cell--sort">
                                            <span style="width: 200px;">
                                            Logo</span>
                                        </th>
                                        <th data-field="email" class="kt-datatable__cell kt-datatable__cell--sort kt-datatable__cell--sorted" data-sort="asc">
                                            <span style="width: 124px;">
                                                Titre<i class="flaticon2-arrow-up">
                                                </i>
                                            </span>
                                        </th>
                                        <th data-field="hire_date" class="kt-datatable__cell kt-datatable__cell--sort">
                                            <span style="width: 124px;">
                                            Site internet</span>
                                        </th>
                                        <th data-field="department" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort">
                                            <span style="width: 176px;">
                                            ville</span>
                                        </th>
                                        <th data-field="status" class="kt-datatable__cell kt-datatable__cell--sort">
                                            <span style="width: 100px;">
                                            spécialité</span>
                                        </th>
                                        <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort">
                                            <span style="width: 80px;">
                                            Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="kt-datatable__body" style="">
<?php 
ecole::afficher_client($nombre,$_SESSION["id"]);
?>
                            </table>
                        </div>
                        <!--end: Datatable -->
                    </div>
                </div>
                <!--end::Portlet-->
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
        <script src="../../assets/Backoffice/js/demo1/pages/custom/users/list-datatable.js" type="text/javascript">
        </script>
        <script src="../../assets/Backoffice/js/demo4/pages/components/extended/toastr.js" type="text/javascript"></script>
        <script>
        $(window).on("load",function(){
        $(".preload").fadeOut("fast");
        })
        $(function(){
            toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-left",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};
            $(".ajouter").click(function(){
                var id_ecole=$(this).attr("id");
                var id_etudiant=$("body").attr("id");
                $.post("../../../entities/etudiant.php",{operation:"modifier",id_client:id_etudiant,id_ecole:id_ecole},function(data){
                    if(data!="ok"){
                        toastr.error(data);
                    }else{
                        toastr.success("l'operation s'est terminé avec succès,<br> veuiller patienter un instant");
                        setTimeout(function(){
                            document.location.href="liste_ecole.php";
                        },500)
                    }
                })
            })
        })
        </script>
    </body>
</html>