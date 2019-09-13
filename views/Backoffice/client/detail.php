<?php
session_start();
if(!isset($_SESSION["id"])){
    header("location:../../pages_error/404.html");
}
require_once "../../../entities/class_ecole.php";
require_once "../../../entities/class_etudiant.php";
require_once "../../../entities/class_activiter.php";
require_once "../../../entities/class_activiter_client.php";
require_once "../../../entities/class_galerie.php";
require_once "../../../entities/class_details_plus.php";
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
        <link href="../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/Backoffice/css/demo4/style.bundle.css" rel="stylesheet" type="text/css" />
    </head>
    <body style="padding:0px;margin:0px;background-color:rgba(0,0,0,0.06);" id=<?php echo $_SESSION["id"];?>>
<div class="kt-subheader   kt-grid__item bg-white mb-2" id="kt_subheader" style="padding:2px;padding-left:40px;">
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">Services</h3>
            
                            <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="la la-tachometer"></i></a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Liste des Services                       </a>
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
                $id_etudiant=etudiant::retourne_valeur("id_client",$_SESSION["id"],"id");
                $valeur=etudiant::retourne_valeur("id",$id_etudiant,"ecole_choisie");
                if(($valeur==0 || $valeur=="") && $_SESSION["type"]!=1){
                echo '<div class="alert alert-danger fade show" role="alert">
                    <div class="alert-icon"><i class="la la-question-circle"></i></div>
                    <div class="alert-text">Selectionner une école et une spécialité.<br>
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
                
                echo '<div class="alert alert-info fade show specialite bgh" style="display:';
if($row!=0){
echo "block";
}else{
echo "none";
}
                echo ';">
                    <span class="alert-text">Vous ne pouvez plus modifier les informations concernant l\'ecole choisi,<br>Vous devez annuler toutes les activitées en cours pour pouvoir faire des modifications .</span>
                </div>';
                
                if(($t=="0" || $t=="") && $_SESSION["type"]!=1 ){
                echo '<div class="alert alert-danger fade show specialite" role="alert">
                    <div class="alert-icon"><i class="la la-question-circle"></i></div>
                    <div class="alert-text">Vous devez selectionner une spécialité</div>
                </div>';
                }
                ?>
                <div class="kt-portlet kt-widget kt-widget--fit kt-widget--general-3">
                    <?php 
if($_SESSION["type"]==0){
    ?>
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
                                <?php 
                                if(isset($_COOKIE["id_activiter".$_SESSION["id"]])){
                                $nombre=activiter::nombre_pourcentage($_SESSION["id"],$_COOKIE["id_activiter".$_SESSION["id"]]);
                                }else{
                                $nombre=0;
                                }
                                ?>
                                <span class="kt-widget__value col-1 pb-1"><span class="ki"><?php echo $nombre;?></span>%</span>
                                <div class="progress col-12" style="height:5px;border-radius:5px;">
                                    <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                    <div class="progress-bar bg-brand" role="progressbar" style="width: <?php echo $nombre;?>%;border-radius:5px;" aria-valuenow="<?php echo $nombre;?>" aria-valuemin="0" aria-valuemax="100"></div>
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
                                    $cd=activiter_client::nombre($_SESSION["id"],"id_client",$_SESSION["id"]);
                                    ?>
                                </div>
                                <div class="pl-4 ml-5 col-md-3 col-xs-12 row">
                                    <div class="col-md-4 px-2 py-2 " style="background-color:#f7f8fa;">
                                        <div class="row">
                                            <div class="col-md-12 text-center text-primary lead pb-2 pt-4">
                                                <b><?php echo $cnombre;?></b>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                Services
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 px-2 py-2 ml-2" style="background-color:#f7f8fa;">
                                        <div class="row">
                                            <div class="col-md-12 text-center text-primary lead pb-2 pt-4 nombre_actif">
                                                <b><?php echo $cd;?></b>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                actif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    <?php
}
                    ?>
                            <div class="kt-portlet__foot kt-portlet__foot--fit">
                                <div class="kt-widget__nav bg-white">
                                    <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-clear nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand kt-portlet__space-x" style="background-color:#edeff4;" role="tablist">
                                        <li class="nav-item iop">
                                            <a class="nav-link  bf <?php echo (isset($_COOKIE["id_activiter".$_SESSION["id"]]))?"":"active"; ?> " href="activiter.php" target="frame2">
                                                <i class="la la-tachometer" style="font-size:25px;"></i> Services
                                            </a>
                                        </li>
                                        <li class="nav-item iop">
                                            <a class="nav-link  bf <?php echo (isset($_COOKIE["id_activiter".$_SESSION["id"]]))?"active":""; ?> " href="proccedure.php" target="frame2">
                                                <i class="la la-paste"></i> Proccédure
                                            </a>
                                        </li>
<?php 
if($_SESSION["type"]==0){
echo '                                        <li class="nav-item iop">
                                            <a class="nav-link bf" href="plus.php" target="frame2">
                                                <i class="la la-plus-square"></i> plus d\'informations sur l\'école
                                            </a>
                                        </li>';
}
?>
                                    </ul>
                                </div>
                                <iframe src="<?php echo (isset($_COOKIE["id_activiter".$_SESSION["id"]]))?"proccedure.php":"activiter.php"; ?>" style="height:800px;border:none;background-color:white;padding:0px;" class="col-md-12" name="frame2">
                                
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
                        var ideo=$("body").attr("id");
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

setInterval(function(){
    if(Cookies.get("nbr_actif"+ideo)!=undefined){
        if(parseInt(Cookies.get("nbr_actif"+ideo))==0){
            $(".bgh").hide();
                        $("label").each(function(){
                if($(this).hasClass("kt-radio--disabled")==true){
                    $(this).removeClass("kt-radio--disabled")
                    $(this).find("[type='radio']").removeAttr("disabled")
                }
            })
        }else{
           $(".bgh").show();
            $("label").each(function(){
                if($(this).hasClass("kt-radio--disabled")==false){
                    $(this).addClass("kt-radio--disabled")
                    $(this).find("[type='radio']").attr("disabled","disabled")
                }
            })
        }
       if(parseInt($(".nombre_actif b").text())!=Cookies.get("nbr_actif"+ideo)){
        $(".nombre_actif b").text(Cookies.get("nbr_actif"+ideo))
       }
    }else{
$(this).find("[type='radio']").removeAttr("disabled");
       $(this).removeClass("kt-radio--disabled")
    }
if(Cookies.get("pourcentage"+ideo)!=undefined){
    $(".bgh").show(); 
if(parseInt($(".ki").text())!=parseInt(Cookies.get("pourcentage"+ideo))){
    $(".ki").text(Cookies.get("pourcentage"+ideo))
    $('[role="progressbar"]').css("width",Cookies.get("pourcentage"+ideo)+"%")
    $("[aria-valuenow]").attr("aria-valuenow",Cookies.get("pourcentage"+ideo))
}


    }else{
     $(".ki").text(0)
    $('[role="progressbar"]').css("width",0+"%")
    $("[aria-valuenow]").attr("aria-valuenow",0)       
    }

    if(Cookies.get("active"+ideo)!=undefined){
        if(Cookies.get("active"+ideo)==1){
            $(".bf").removeClass("active");
            $(".bf:eq(1)").addClass("active");
            Cookies.set('active'+ideo,0, { expires: 360, path: '' });
        }
    }
},200)

                    })
                    </script>
                </body>
            </html>