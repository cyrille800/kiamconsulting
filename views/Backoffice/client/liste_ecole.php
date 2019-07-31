<?php 
session_start();
require_once "../../../entities/class_ecole.php";
require_once "../../../entities/class_activiter_client.php";
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
    <body style="padding:0px;margin:0px;" id="<?php echo $_SESSION["id"];?>">
        
        
        <!-- begin:: Content -->
        <div class="kt-content kt-grid__item kt-grid__item--fluid">
            <div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container ">
        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">Listes des écoles</h3>
                    
        </div>
        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">

<form class="kt-subheader__search" id="kt_subheader_search_form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">
                                    <i class="la la-search"></i>
                                </span>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

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
ecole::afficher_client();
?>
                            </table>
                            <div class="kt-datatable__pager kt-datatable--paging-loaded">
                                <ul class="kt-datatable__pager-nav">
                                    <li>
                                        <a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first" data-page="1">
                                            <i class="flaticon2-fast-back">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev" data-page="1">
                                            <i class="flaticon2-back">
                                            </i>
                                        </a>
                                    </li>
                                    <li style="">
                                    </li>
                                    <li style="display: none;">
                                        <input type="text" class="kt-pager-input form-control" title="Page number">
                                    </li>
                                    <li>
                                        <a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="1" title="1">
                                        1</a>
                                    </li>
                                    <li>
                                        <a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="2" title="2">
                                        2</a>
                                    </li>
                                    <li>
                                        <a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">
                                        3</a>
                                    </li>
                                    <li>
                                        <a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4" title="4">
                                        4</a>
                                    </li>
                                    <li>
                                        <a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="5" title="5">
                                        5</a>
                                    </li>
                                    <li>
                                    </li>
                                    <li>
                                        <a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="3">
                                            <i class="flaticon2-next">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="100">
                                            <i class="flaticon2-fast-next">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
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
                        toastr.success("l'operation s'est terminé avec succès,<br> veuiller consulter la rubrique plus de détails");
                    }
                })
            })
        })
        </script>
    </body>
</html>