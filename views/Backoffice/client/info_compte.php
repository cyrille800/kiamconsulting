<?php 
session_start();

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
<body id="<?php echo $_SESSION["id"];?>">
<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
</div>
<div class="kt-portlet">
			<form class="kt-form" id="formulaire" method="post" action="" autocomplete="off">
				<div class="kt-portlet__body">
					<div class="kt-section kt-section--first">
						<h3 class="kt-section__title">1. information : </h3>
						<input type="text" name="id" value="<?php echo $_SESSION["id"];?>" style="display:none;">
						<input type="text" name="operation" value="modifier" style="display:none;">
						<div class="kt-section__body">
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">username :</label>
								<div class="col-lg-6">
									<input type="text" class="form-control" name="username" value="<?php echo $username;?>" placeholder="saisir le username">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">email :</label>
								<div class="col-lg-6">
									<input type="text" class="form-control" name="email" value="<?php echo $email;?>" placeholder="saisir l'email">
								</div>
							</div>

						</div>

		            </div>
	            </div>
	            <div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<div class="row">
							<div class="col-lg-6">
								<button type="submit" class="btn btn-success">Modifier</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--end::Form-->
		</div>
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