<?php 
session_start();
if(!isset($_SESSION["id"])){
    header("location:../../pages_error/404.html");
}
require_once "../../../entities/class_client.php";
require_once "../../../entities/class_message.php";
include_once "../../../entities/class_etudiant.php";
$resultat=etudiant::retourne_valeur("id_client",$_SESSION["id"],"resultat");
if($resultat!=1 && $_SESSION["type"]==0){
    header("location:../../pages_error/404.html");
}
?>
<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8"/>
        
        <title>Metronic | Dashboard</title>
        <meta name="description" content="Updates and statistics"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Fonts -->
<style>
/* width */
::-webkit-scrollbar {
  width: 3px;
}

/* Track */
::-webkit-scrollbar-track {
  background: transparent; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background:#d8dce6 ; 
}

</style>
                    <!--begin::Page Vendors Styles(used by this page) -->
                    <link href="../admin/assets/css/demo1/pages/wizard/wizard-2.css" rel="stylesheet" type="text/css" />
                        <!--end::Page Vendors Styles -->
        
        
        <!--begin::Global Theme Styles(used by all pages) -->
                    <link href="../admin/assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
                    <link href="../admin/assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        
<link href="../admin/assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
<link href="../admin/assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
<link href="../admin/assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
<link href="../admin/assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />        <!--end::Layout Skins -->

        <link rel="shortcut icon" href="../admin/assets/media/logos/favicon.ico" />
    </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-color:rgba(0,0,0,0.06);" id="<?php echo $_SESSION["id"];?>">
<div class="kt-subheader   kt-grid__item bg-white mb-4" id="kt_subheader" style="position:absolute;left:0;top:0;">
    <div class="kt-subheader   kt-grid__item" id="kt_subheader" style="position:absolute;top:0;">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">Messages</h3>
            
                            <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="la la-tachometer"></i></a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Inbox message                      </a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                </div>
                    
        </div>
    </div>
</div>
                        </div>     
        <div class="alert alert-primary mx-auto ml-5 mr-5" style="margin-top:6%;">Utiliser cette interface pour des demandes de renseignements et pour pouvoir effectuer une communication direct avec l'administrateur .</div> 
<?php 
$verifier=false;
if(isset($_SESSION["id"])){
    extract($_SESSION);
    if(!empty($id)){
        if(client::verifiers("id",$id)==false){
            $verifier=true;
        }
    }else{
        $verifiers=false;
    }
}else{
    $verifiers=false;
}

if($verifier==true){
$id=$_SESSION["id"];
$login=client::retourne_valeur("id",$id,"username");
$email=client::retourne_valeur("id",$id,"email");
?>
    <!--Begin:: App Content-->
    <div class="kt-grid__item kt-app__content mb-2 fade_afficher mx-auto bk" id="kt_chat_content" style="height:200px;width:600px;opacity: 0;" id_client="<?php echo $id;?>">
        <div class="kt-chat">
            <div class="kt-portlet kt-portlet--head-lg kt-portlet--last">
                <div class="kt-portlet__head">
                    <div class="kt-chat__head ">
                        <div class="kt-chat__left">
                            <!--begin:: Aside Mobile Toggle -->
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md kt-hidden-desktop" id="kt_chat_aside_mobile_toggle">
                                <i class="flaticon2-open-text-book"></i>
                            </button>
                            <!--end:: Aside Mobile Toggle-->

                        </div>
                        
                        <div class="kt-chat__center">
                            <div class="kt-chat__label">
                                <a href="#" class="kt-chat__title"><?php echo $login;?></a>
                                
                            </div>

                        </div>

                        <div class="kt-chat__right">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md  mt-4" style="background:#1a1a27;" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(32px, 33px, 0px);">
                                    <!--begin::Nav-->
                                    <!--end::Nav-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="kt-portlet__body">
                    <div class="msg" style="height: 389px; overflow: hidden;overflow-y:scroll;">
                        <div class="kt-chat__messages" nombre_message='<?php echo message::retour_nombre($_SESSION["id"],0);?>'>
                            <?php 
                            message::afficher_client($_SESSION["id"]);
                              $ui=config::$bdd->query("update message set etat=1 where id_receveur=".$_SESSION["id"]." && id_expediteur=0");
                            if($ui->execute()){
                                echo "";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                
                <div class="kt-portlet__foot">
                    <div class="kt-chat__input">
                        <div class="kt-chat__editor">
                            <textarea style="height: 40px" placeholder="Ecrire le message . . ."></textarea>
                        </div>
                        <div class="kt-chat__toolbar">

                            <div class="kt_chat__actions">
                                <button type="button" class="btn btn-brand btn-md btn-upper btn-bold kt-chat__reply">reply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
}else{
    echo '<div class="kt-portlet kt-iconbox kt-iconbox--info kt-iconbox--animate col-xl-4 my-auto mx-4" style="height:200px;">
                    <div class="kt-portlet__body">
                        <div class="kt-iconbox__body">
                            <div class="kt-iconbox__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero"></path>
    </g>
</svg>                          </div>
                            <div class="kt-iconbox__desc">
                                <h3 class="kt-iconbox__title">
                                    <a class="kt-link" href="#">Administrateur</a>
                                </h3>
                                <div class="kt-iconbox__content">
                                    Selectionner un administrateur dans la liste.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
}
?>
    <!--End:: App Content-->
</div>
</div>
</div>
<!--End::Row-->
<!--End::Dashboard 1--> </div>
<!-- end:: Content -->              </div>              
</div>
        </div>
    </div>
    
<!-- end:: Page -->



<!--Begin:: Chat-->
        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#5d78ff","dark":"#282a3c","light":"#ffffff","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
                   <script src="../admin/assets/vendors/global/vendors.bundle.js" type="text/javascript"></script>
                   <script src="../admin/assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
                   <script src="http://localhost:1337/socket.io/socket.io.js" type="text/javascript"></script>
<script>
    $(function(){


// connexion avec le server

var socket= io.connect("http://localhost:1337");
var id_user=$("body").attr("id");
socket.emit("connecter",{id_client:id_user});

socket.on("nouveau_message",function(message){
if(message.id_client==id_user){

$(".kt-chat__messages").append('<div class="kt-chat__message"><div class="kt-chat__user"><span class="kt-userpic kt-userpic--circle kt-userpic--sm"><img src="../../assets/Backoffice/media/users/0.png" alt="image"></span></div><div class="kt-chat__text" style="background-color:#2d2d2d;color:white;">'+message.message+'</div></div>').queue(function(){
$(".msg").animate({scrollTop:$(".kt-chat__messages").height()},50)
        $(this).dequeue();
    })


}
})

$(window).on("beforeunload", function()
{
    socket.emit("deconnexion",{id_client:id_user})
});


        $(".fade_afficher").fadeIn("fast")
        $(".msg").animate({scrollTop:$(".kt-chat__messages").height()},50)
        $(".kt-chat__editor textarea").keyup(function(e){
            var message=$(this).val()
    if( e.which == 13 ){

                             $.post( "../../../entities/message.php",{id_expediteur:$("body").attr("id"),id_receveur:0,message:message},function(data){
    if(data!="ok"){
    toastr.error(data);
    }else{
$(".kt-chat__messages").append('<div class="kt-chat__message kt-chat__message--right"><div class="kt-chat__user"><span class="kt-userpic kt-userpic--circle kt-userpic--sm">Vous</span></div><div class="kt-chat__text" style="background-color:#1d1dff;color:white;">'+message+'</div></div>').queue(function(){
$(".msg").animate({scrollTop:$(".kt-chat__messages").height()},50)
    $(this).dequeue();
})

socket.emit("send_message_admin",{
    id_client: id_user,
    message: message
})
    $("textarea").val("");
        $(".vide").remove();
    }
 } ); 

    }
        })

        $(".kt-chat__reply").click(function(){
        var message=$(".kt-chat__editor textarea").val()  
                             $.post( "../../../entities/message.php",{id_expediteur:$("body").attr("id"),id_receveur:0,message:message},function(data){
    if(data!="ok"){
    alert("no")
    }else{
$(".kt-chat__messages").append('<div class="kt-chat__message kt-chat__message--right"><div class="kt-chat__user"><span class="kt-userpic kt-userpic--circle kt-userpic--sm">Vous</span></div><div class="kt-chat__text" style="background-color:#1d1dff;color:white;">'+message+'</div></div>').queue(function(){
$(".msg").animate({scrollTop:$(".kt-chat__messages").height()},50)
    $(this).dequeue();
})

socket.emit("send_message_admin",{
    id_client: id_user,
    message: message
})
    $("textarea").val("");
    $(".vide").remove();
    }
 } ); 


        })
var ki=0;


$(".bk").animate({"opacity":"1"},100)
    })
</script>
</body>
</html>