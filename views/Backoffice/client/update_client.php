<?php 
session_start();

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
            <!-- begin:: Content -->
            <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-light alert-elevate fade show" role="alert">
                            <div class="alert-icon">
                                <i class="la la-warning kt-font-brand">
                                </i>
                            </div>
                            <div class="alert-text">
                                Les informations que vous vous apprettez à changer, ne serons plus reversible
                                <br>
                                utiliser cette page pour modifier les informations vous concernant . <a class="kt-link kt-font-bold" href="update_client.php">
                                Cette page</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" data-sticky-container>
                    <div class=" col-lg-3 col-xl-2 ml-5">
                        <div class="kt-portlet sticky" data-sticky="true" data-margin-top="100" data-sticky-for="1023" data-sticky-class="kt-sticky">
                            <div class="kt-portlet__body kt-portlet__body--fit">
                                <ul class="kt-nav kt-nav--bold kt-nav--md-space kt-nav--v3 kt-margin-t-20 kt-margin-b-20 nav nav-tabs" role="tablist">
                                    <li class="kt-nav__item">
                                        <a class="kt-nav__link active io" href="info_perso.php" target="frame2">
                                            <span class="kt-nav__link-icon">
                                                <i class="la la-user" style="font-size:25px;">
                                                </i>
                                            </span>
                                            <span class="kt-nav__link-text">
                                            Informations personnelles</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a class="kt-nav__link io" href="info_compte.php" target="frame2">
                                            <span class="kt-nav__link-icon">
                                                <i class="la la-lock" style="font-size:25px;">
                                                </i>
                                            </span>
                                            <span class="kt-nav__link-text">
                                            Informations comptes</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a class="kt-nav__link io" href="change_password.php" target="frame2">
                                            <span class="kt-nav__link-icon">
                                                <i class="la la-gears" style="font-size:25px;">
                                                </i>
                                            </span>
                                            <span class="kt-nav__link-text">
                                            Changer le mot de passe</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__separator">
                                    </li>
                                    <li class="kt-nav__item">
                                        <a class="kt-nav__link io" href="#kt_profile_change_password" >
                                            <span class="kt-nav__link-icon">
                                                <i class="la la-soundcloud" style="font-size:25px;">
                                                </i>
                                            </span>
                                            <span class="kt-nav__link-text">
                                            paiement de compte</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <center>
<form method="post" action="" enctype="multipart/form-data" id="formulairess">
                         <div class="kt-avatar" id="kt_profile_avatar_1">
                            <div class="kt-avatar__holder" style="background-image: url(../../assets/Backoffice/media/users/<?php echo $_SESSION["id"];?>.png)">
                            </div>
                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                <i class="fa fa-pen">
                                </i>
                                <input type="file" name="avatar" accept=".png">
                            </label>
                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                <i class="fa fa-times">
                                </i>
                            </span>
                        </div>
</form>
                        </center>
                    </div>
                    <div class="col-lg-6 col-xl-8 mx-auto" style="height:80vh;">
                        <iframe src="info_perso.php" style="height:100%;border:none;background-color:white;padding:0px;margin:0px;overflow:hidden;" class="col-md-12" name="frame2">
                        
                        </iframe>
                    </div>
                </div>
                
            </div>
            <!-- end:: Content -->
            
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
        <script src="../../assets/Backoffice/js/demo4/pages/components/forms/controls/avatar.js" type="text/javascript">
        </script>
        <script src="../../assets/Backoffice/js/demo4/pages/components/extended/toastr.js" type="text/javascript"></script>
        <script>
        $(window).on("load",function(){
        $(".preload").fadeOut("fast");
        })
        $(function(){
            $('[name="avatar"]').change(function(){
                    formdata = new FormData();
    if($(this).prop('files').length > 0)
    {
        file =$(this).prop('files')[0];
        formdata.append("avatar", file);
    }
                $.ajax({
    type : 'POST',
    url : '../../../entities/client.php',
   data:formdata,
   contentType: false,
   processData:false,
    success: function(data){
if(data!="ok"){
   toastr.error(data);
}else{
   toastr.success("operation terminée. <br> Les informations seront à jours à la prochiane connexion");
}      
    }
})
            })
            $(".io").click(function(){
                $(".io").removeClass("active");
                $(this).addClass("active");
            })
        })
        </script>
    </body>
</html>