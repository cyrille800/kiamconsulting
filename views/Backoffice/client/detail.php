<?php 
session_start();
require_once "../../../entities/class_ecole.php";
require_once "../../../entities/class_etudiant.php";
require_once "../../../entities/class_activiter.php";
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
    <body style="padding:0px;margin:0px;"  id="<?php echo $_SESSION["id"];?>">
        
        
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
                    <a class="nav-link active" data-toggle="tab" href="#kt_apps_user_edit_tab_1" id="activiter" role="tab" aria-selected="true">
                        <i class="la la-tachometer" style="font-size:25px;"></i> Activités
                    </a>
                </li>
                <li class="nav-item iop">
                    <a class="nav-link" data-toggle="tab" href="#kt_apps_user_edit_tab_2" role="tab" id="proccedure" aria-selected="false">
                        <i class="la la-paste"></i> Proccédure
                    </a>
                </li>
                <li class="nav-item iop">
                    <a class="nav-link" data-toggle="tab" href="#kt_apps_user_edit_tab_3" role="tab" id="upload" aria-selected="false">
                        <i class="la la-picture-o"></i> Uploads
                    </a>
                </li>
                <li class="nav-item iop">
                    <a class="nav-link" data-toggle="tab" href="#kt_apps_user_edit_tab_4" role="tab" id="plus" aria-selected="false">
                        <i class="la la-plus-square"></i> plus d'informations sur l'école
                    </a>
                </li>
            </ul>

        </div>

<div class="element active" role="activiter" style="display:none;">
    <?php 

activiter::afficher_client(1);

?>
</div>
<div class="element" role="proccedure" style="display:none;">









<div class="kt-portlet">
    <div class="kt-portlet__body kt-portlet__body--fit col-8 mx-auto" style="border:1px solid #eee;">
        <div class="kt-grid kt-grid--desktop-xl kt-grid--ver-desktop-xl  kt-wizard-v1" id="kt_wizard_v1" data-ktwizard-state="first">
            <div class="kt-grid__item kt-wizard-v1__aside">
                
                <!--begin: Form Wizard Nav -->
                <div class="kt-wizard-v1__nav">
                    <div class="kt-wizard-v1__nav-items">
                        <!--doc: Replace A tag with SPAN tag to disable the step link click -->
                        <a class="kt-wizard-v1__nav-item bg-primary text-white" href="#">
                            <span>1</span>
                        </a>
                        <a class="kt-wizard-v1__nav-item" href="#">
                            <span>2</span>
                        </a>
                        <a class="kt-wizard-v1__nav-item" href="#">
                            <span>3</span>
                        </a>
                    </div>
                    <div class="kt-wizard-v1__nav-details">
                        <div class="kt-wizard-v1__nav-item-wrapper" data-ktwizard-type="step-info" data-ktwizard-state="current">
                            <div class="kt-wizard-v1__nav-item-title">
                                Setup Your Account
                            </div>
                            <div class="kt-wizard-v1__nav-item-desc">
                                To start off, please enter your username, email address and password.
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: Form Wizard Nav -->

            </div>
            <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">
                <!--begin: Form Wizard Form-->
                <form class="kt-form" id="kt_form" novalidate="novalidate">
                    
                    <!--begin: Form Wizard Step 1-->
                    <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                        <div class="kt-heading kt-heading--md text-center">Setup Your Account</div>
                        <div class="kt-separator kt-separator--height-xs"></div>
                        <div class="kt-form__section kt-form__section--first text-center">
                            <div class="row  text-center">
                                informatio
                            </div>
                        </div>
                    </div>
                    <!--end: Form Wizard Step 1-->

                    <!--begin: Form Actions -->                 
                    <div class="kt-form__actions">
                        <div class="col-md-8"></div> 
                        <div class="btn btn-brand btn-md btn-tall btn-wide btn-bold btn-upper">
                            Next Step
                        </div>
                    </div>      
                    <!--end: Form Actions -->
                </form>         
                <!--end: Form Wizard Form-->
            </div>
        </div>
    </div>
</div>




</div>
<div class="element" role="upload" style="display:none;">
<div class="col-md-5 mx-auto">
                <!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">Latest Uploads</h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-actions">
                <a href="#" class="btn btn-default btn-upper btn-sm btn-bold">All FILES</a>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--fluid">
        <div class="kt-widget-7">
            <div class="kt-widget-7__items"  style="height:400px;overflow-y:scroll;">
                <div class="kt-widget-7__item">
                    <div class="kt-widget-7__item-pic">
                        <img src="../../assets/Backoffice/media/files/doc.svg" alt="">
                    </div>
                    <div class="kt-widget-7__item-info">
                        <a href="#" class="kt-widget-7__item-title">
                            Keeg Design Reqs
                        </a>
                        <div class="kt-widget-7__item-desc">
                            95 MB
                        </div>
                    </div>
                    <div class="kt-widget-7__item-toolbar">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-more-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(32px, 33px, 0px);">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-eye"></i>
                                            <span class="kt-nav__link-text">View</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-comment-o"></i>
                                            <span class="kt-nav__link-text">Coments</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-copy"></i>
                                            <span class="kt-nav__link-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                            <span class="kt-nav__link-text">Excel</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-widget-7__item">
                    <div class="kt-widget-7__item-pic">
                        <img src="../../assets/Backoffice/media/files/pdf.svg" alt="">
                    </div>
                    <div class="kt-widget-7__item-info">
                        <a href="#" class="kt-widget-7__item-title">
                            S.E.R Agreement
                        </a>
                        <div class="kt-widget-7__item-desc">
                            805 MB
                        </div>
                    </div>
                    <div class="kt-widget-7__item-toolbar">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-more-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(32px, 33px, 0px);">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-eye"></i>
                                        <span class="kt-nav__link-text">View</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-comment-o"></i>
                                        <span class="kt-nav__link-text">Coments</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-copy"></i>
                                        <span class="kt-nav__link-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                        <span class="kt-nav__link-text">Excel</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-widget-7__item">
                    <div class="kt-widget-7__item-pic">
                        <img src="../../assets/Backoffice/media/files/jpg.svg" alt="">
                    </div>
                    <div class="kt-widget-7__item-info">
                        <a href="#" class="kt-widget-7__item-title">
                            FlyMore Screenshot
                        </a>
                        <div class="kt-widget-7__item-desc">
                            4 MB
                        </div>
                    </div>
                    <div class="kt-widget-7__item-toolbar">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-more-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(32px, 33px, 0px);">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-eye"></i>
                                        <span class="kt-nav__link-text">View</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-comment-o"></i>
                                        <span class="kt-nav__link-text">Coments</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-copy"></i>
                                        <span class="kt-nav__link-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                        <span class="kt-nav__link-text">Excel</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-widget-7__item">
                    <div class="kt-widget-7__item-pic">
                        <img src="../../assets/Backoffice/media/files/zip.svg" alt="">
                    </div>
                    <div class="kt-widget-7__item-info">
                        <a href="#" class="kt-widget-7__item-title">
                            ST.11 Dacuments
                        </a>
                        <div class="kt-widget-7__item-desc">
                            Unknown
                        </div>
                    </div>
                    <div class="kt-widget-7__item-toolbar">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-more-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(32px, 33px, 0px);">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-eye"></i>
                                        <span class="kt-nav__link-text">View</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-comment-o"></i>
                                        <span class="kt-nav__link-text">Coments</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-copy"></i>
                                        <span class="kt-nav__link-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                        <span class="kt-nav__link-text">Excel</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-widget-7__item">
                    <div class="kt-widget-7__item-pic">
                        <img src="../../assets/Backoffice/media/files/xml.svg" alt="">
                    </div>
                    <div class="kt-widget-7__item-info">
                        <a href="#" class="kt-widget-7__item-title">
                            XML AOL Data Fetchin
                        </a>
                        <div class="kt-widget-7__item-desc">
                            4 MB
                        </div>
                    </div>
                    <div class="kt-widget-7__item-toolbar">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-more-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(32px, 33px, 0px);">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-eye"></i>
                                        <span class="kt-nav__link-text">View</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-comment-o"></i>
                                        <span class="kt-nav__link-text">Coments</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-copy"></i>
                                        <span class="kt-nav__link-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                        <span class="kt-nav__link-text">Excel</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-widget-7__foot">
                <img src="../../assets/Backoffice/media/misc/clouds.png" alt="">
                <div class="kt-widget-7__upload">
                    <a href="#"><i class="fa fa-cloud-upload-alt mb-5 pt-2"></i></a> 
                    <span>Drag files here</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Portlet-->


            </div>
</div>
<div class="element" role="plus" style="display:none;">
    <?php 

activiter::afficher_client(1);

?>
</div>



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

            $(".ii").click(function(){
                $.post("../../../entities/activiter_client.php",{id_client:$("body").attr("id"),id_activiter:$(this).attr("id"),nombre_etape_fait:0,etape_actuel:$(this).attr("etape_actuel")},function(data){
                    if(data!="ok"){
                        toastr.error(data);
                    }else{
                        document.location.href="detail.php";
                    }
                })
            })

            $(".annuler").click(function(){
                $.post("../../../entities/activiter_client.php",{operation:"supprimer",id_client:$("body").attr("id"),id_activiter:$(this).attr("id")},function(data){
                    if(data!="ok"){
                        toastr.error(data);
                    }else{
                        document.location.href="detail.php";
                    }
                })               
            })
        })
        </script>
    </body>
</html>