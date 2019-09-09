<?php 
session_start();
if(!isset($_SESSION["id"])){
    header("location: ../../pages_error/404.html");
}else{
 if($_SESSION["type"]==1){
    header("location: ../../pages_error/404.html");
}   
}
include "../../../entities/class_notification.php";
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
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="padding:0px;margin:0px;">
                    
                            
                                
                                <!-- begin:: Subheader -->
                                <div class="kt-subheader   kt-grid__item" id="kt_subheader" style="background-color:white;padding-left:50px;">
                                    <div class="kt-subheader__main">
                                        <h3 class="kt-subheader__title">
                                        Resultat du concours</h3>
                                        <span class="kt-subheader__separator kt-hidden">
                                        </span>
                                        
                                    </div>
                                    <div class="kt-subheader__toolbar">
                                        <div class="kt-subheader__wrapper">
                                            <a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="kt-tooltip" title="Calendar" data-placement="top">
                                                <i class="flaticon2-hourglass-1">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end:: Subheader -->
                                
                                <!-- begin:: Content -->
                                <div class="kt-content kt-grid__item kt-grid__item--fluid" style="background-color:white;">
<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
</div>
                                    <!--begin::Dashboard 5-->
                    <center>
                        <?php 
                        if(isset($_POST["valider"])){
                            $requette=config::$bdd->query("update etudiant set resultat=0 where id_client=".$_SESSION["id"]);
                            if($requette->execute()){
                                echo '<div class="alert alert-info col-8" role="alert">
                            <div class="alert-icon"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                            <div class="alert-text">Veuillez vous reconnectez pour appliquer les modifications
                            </div>
                        </div>';
                            }else{
                                echo '<div class="alert alert-danger col-8" role="alert">
                            <div class="alert-icon"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                            <div class="alert-text">Je suis navré mais vous n\'avez pas reussi le concour, <br> réessayer à la prochaine session du concours, mais avant tout, <br>vous devez cliquer sur ce boutton .
    <form action="" method="post">
            <input type="submit" name="valider" class="btn btn-sm btn-dark mt-3" value="cliquer ici">
    </form>
                            </div>
                        </div>';
                            }
                        }else{
                            echo '<div class="alert alert-danger col-8" role="alert">
                            <div class="alert-icon"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                            <div class="alert-text">Je suis navré mais vous n\'avez pas reussi le concour, <br> réessayer à la prochaine session du concours, mais avant tout, <br>vous devez cliquer sur ce boutton .
    <form action="" method="post">
            <input type="submit" name="valider" class="btn btn-sm btn-dark mt-3" value="cliquer ici">
    </form>
                            </div>
                        </div>';
                        }
                        ?>
                        
                    </center>
                                    
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
        </script>
</body>
</html>