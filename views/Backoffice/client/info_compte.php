<?php 
session_start();
if(!isset($_SESSION["id"])){
    header("location:../../pages_error/404.html");
}
include "../../../entities/class_client.php";
$username=client::retourne_valeur("id",$_SESSION["id"],"username");
$email=client::retourne_valeur("id",$_SESSION["id"],"email");
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
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
<body id="<?php echo $_SESSION["id"];?>" style="background-color:transparent;">
<div class="preload" style="position:fixed;width:100%;height:100%;left:0;top:0;z-index:100;padding-top:10%;">
<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
</div>

<center>
<div class="kt-portlet col-xl-5">
      <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
          <h3 class="kt-portlet__head-title">Informations du compte</h3>
        </div>
      </div>
      <!--begin::Form-->
      <form class="kt-form kt-form--label-right" action="" method="post" enctype="multipart/form-data"  id='formulaire'>
        <div class="kt-portlet__body">
          <h4 class="kt-section__title">1. information : </h4><br>
            <input type="text" name="id" value="<?php echo $_SESSION["id"];?>" style="display:none;">
            <input type="text" name="operation" value="modifier" style="display:none;">
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">username :</label>
            <div class="col-10">
              <input type="text" class="form-control" name="username" value="<?php echo $username;?>" placeholder="saisir le username">
            </div>
          </div>
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">email :</label>
            <div class="col-10">
              <input type="text" class="form-control" name="email" value="<?php echo $email;?>" placeholder="saisir l'email">
            </div>
          </div>


        </div>
        <div class="kt-portlet__foot">
          <div class="kt-form__actions">
            <div class="row">
              <div class="col-2">
              </div>
              <div class="col-10">
<button type="submit" class="btn btn-success">Modifier</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
</center>


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
        <script src="../../assets/Backoffice/js/demo4/pages/components/forms/controls/avatar.js" type="text/javascript"></script>
        <script src="../../assets/Backoffice/js/demo4/pages/components/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
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
 $("#formulaire").submit(function(e){
e.preventDefault();
$.ajax({
    type : 'POST',
    url : '../../../entities/client.php',
   data:  new FormData(this),
   contentType: false,
         cache: false,
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
        })
</script>
</body>
</html>