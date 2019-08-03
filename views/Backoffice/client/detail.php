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
    <body style="padding:0px;margin:0px;">
        
        
        <!-- begin:: Content -->
        <div class="kt-content kt-grid__item kt-grid__item--fluid">
            <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                <div class="kt-container ">
                    <div class="kt-subheader__main">
                        <h3 class="kt-subheader__title">Mon choix</h3>
                        
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
                $valeur=etudiant::retourne_valeur("id",$_SESSION["id"],"ecole_choisie");
                if($valeur==0 || $valeur==""){
                echo '<div class="alert alert-danger fade show" role="alert">
                    <div class="alert-icon"><i class="la la-question-circle"></i></div>
                    <div class="alert-text">Vous n\'avez selectionner aucune école.<br>
                    Veuiller consulter la liste des écoles et choisisser une .</div>
                </div>';
                }
                else{
                    $_SESSION["id_ecole"]=$valeur;
                $t=etudiant::retourne_valeur("id",$_SESSION["id"],"specialite");
                $titre=ecole::retourne_valeur("id",$valeur,"titre");
                $ville=ecole::retourne_valeur("id",$valeur,"ville");
                $specialite=ecole::retourne_valeur("id",$valeur,"specialite");
                $specialite=explode(";",$specialite);
                $row=activiter_client::retourne_valeur("id_client",$_SESSION["id"],"id");
                if($row!=0){
                echo '<div class="alert alert-info fade show specialite" role="alert">
                    <div class="alert-icon"><i class="la la-question-circle"></i></div>
                    <div class="alert-text">Vous ne pouvez plus modifier les informations concernant l\'ecole choisi,<br>Vous devez annuler toutes les activitées en cours pour pouvoir faire des modifications .</div>
                </div>';
                }
                if($t=="0" || $t==""){
                echo '<div class="alert alert-danger fade show specialite" role="alert">
                    <div class="alert-icon"><i class="la la-question-circle"></i></div>
                    <div class="alert-text">Vous devez selectionner une spécialité</div>
                </div>';
                }
                ?>
                <div class="kt-portlet kt-widget kt-widget--fit kt-widget--general-3">
                    <div class="row px-4 py-4">
                        <div class="col-md-1 col-xs-12">
                            <img src="../../assets/Backoffice/media/ecoles/<?php echo $valeur;?>.png" alt="image" class="rounded-circle" width="85px">
                        </div>
                        <div class="col-md-3 pt-3 col-xs-12">
                            <a href="#" class="kt-widget__title btn-bold" style="color:#595d6e;">
                                <b><?php echo $titre;?></b>
                            </a><br>
                            <span class="kt-widget__desc">
                                <?php echo $ville;?>, tunsie
                            </span>
                        </div>
                        <div class="col-md-2 mr-5 col-xs-12">
                            <div class="row pt-3">
                                <span class="kt-widget__caption col-10">Progress</span>
                                <span class="kt-widget__value col-1 pb-1">78</span>
                                <div class="progress col-12" style="height:5px;border-radius:5px;">
                                    <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                    <div class="progress-bar bg-brand" role="progressbar" style="width: 40%;border-radius:5px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ml-5 col-md-1 col-xs-12">
                            Spécialité : <br><br>
                            <?php
                            if($row==0){
                            foreach ($specialite as $key => $value) {
                            if($value!=""){
                            echo '        <label class="kt-radio kt-radio--bold kt-radio--brand">
                                <input type="radio" name="radio6" ';
                                if($t==$value){
                                echo " checked='checked' ";
                                }
                                echo 'value="'.$value.'"> '.$value.'
                                <span></span></label>';
                                }
                                }
                                }else{
                                foreach ($specialite as $key => $value) {
                                if($value!=""){
                                echo '        <label class="kt-radio kt-radio--bold kt-radio--brand kt-radio--disabled">
                                    <input type="radio" name="radioo" ';
                                    if($t==$value){
                                    echo " checked='checked' ";
                                    }
                                    echo 'value="'.$value.'" disabled> '.$value.'
                                    <span></span></label>';
                                    }
                                    }
                                    }
                                    $cnombre=activiter::nombre("etat",1);
                                    $cd=activiter_client::nombre("id_client",$_SESSION["id"]);
                                    ?>
                                </div>
                                <div class="pl-4 ml-5 col-md-3 col-xs-12 row">
                                    <div class="col-md-4 px-2 py-2 " style="background-color:#f7f8fa;">
                                        <div class="row">
                                            <div class="col-md-12 text-center text-primary lead pb-2 pt-4">
                                                <b><?php echo $cnombre;?></b>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                Activités
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 px-2 py-2 ml-2" style="background-color:#f7f8fa;">
                                        <div class="row">
                                            <div class="col-md-12 text-center text-primary lead pb-2 pt-4">
                                                <b><?php echo $cd;?></b>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                actif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot kt-portlet__foot--fit">
                                 <div class="kt-widget__nav ">
                                 <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-clear nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand kt-portlet__space-x" role="tablist">
                                        <li class="nav-item iop">
                                            <a class="nav-link  bf <?php echo (isset($_COOKIE["id_activiter"]))?"":"active"; ?> " href="activiter.php" target="frame2">
                                                <i class="la la-tachometer" style="font-size:25px;"></i> Activités
                                            </a>
                                        </li>
                                        <li class="nav-item iop">
                                            <a class="nav-link  bf <?php echo (isset($_COOKIE["id_activiter"]))?"active":""; ?> " href="proccedure.php" target="frame2">
                                                <i class="la la-paste"></i> Proccédure
                                            </a>
                                        </li>
                                        <li class="nav-item iop">
                                            <a class="nav-link bf" href="upload.php" target="frame2">
                                                <i class="la la-picture-o"></i> Uploads
                                            </a>
                                        </li>
                                        <li class="nav-item iop">
                                            <a class="nav-link bf" href="plus.php" target="frame2">
                                                <i class="la la-plus-square"></i> plus d'informations sur l'école
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <iframe src="<?php echo (isset($_COOKIE["id_activiter"]))?"proccedure.php":"activiter.php"; ?>" style="height:750px;border:none;background-color:white;padding:0px;margin:0px;" class="col-md-12" name="frame2">
                                
                                </iframe>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
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
                    <script src="../../assets/Backoffice/js/demo4/pages/components/extended/toastr.js" type="text/javascript"></script>
                    <script src="../../assets/Backoffice/js/demo4/pages/custom/wizards/wizard-v1.js" type="text/javascript"></script>
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
                    "positionClass": "toast-top-right",
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
                    $(".element").hide()
                    $(".element").each(function(){
                    if($(this).hasClass("active")){
                    $(this).show();
                    }
                    })
                    $(".iop a").click(function(){
                    var id=$(this).attr("id");
                    $(".element.active").hide()
                    $(".element.active").removeClass("active")
                    $("[role='"+id+"']").fadeIn();
                    $("[role='"+id+"']").addClass("active");
                    })
                    $("[name='radio6']").click(function(){
                    if($(this).is("checked")==false){
                    $(".specialite").fadeOut();
                    var valeur=$(this).attr("value");
                    var id_etudiant=$("body").attr("id");
                    $.post("../../../entities/etudiant.php",{operation:"modifier",id_client:id_etudiant,specialite:valeur})
                    }
                    })

$(".bf").click(function(){
    $(".bf").removeClass("active");
    $(this).addClass("active")
})
                    })
                    </script>
                </body>
            </html>