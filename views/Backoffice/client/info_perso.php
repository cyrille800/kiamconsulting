<?php 
session_start();

include "../../../entities/class_etudiant.php";
$nom=etudiant::retourne_valeur("id_client",$_SESSION["id"],"nom");
$prenom=etudiant::retourne_valeur("id_client",$_SESSION["id"],"prenom");
$sexe=etudiant::retourne_valeur("id_client",$_SESSION["id"],"sexe");
$pays=etudiant::retourne_valeur("id_client",$_SESSION["id"],"pays");
$ville=etudiant::retourne_valeur("id_client",$_SESSION["id"],"ville");
$niveau_scolaire=etudiant::retourne_valeur("id_client",$_SESSION["id"],"niveau_scolaire");
$etablissement=etudiant::retourne_valeur("id_client",$_SESSION["id"],"etablissement");
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
						<h3 class="kt-section__title">1. identification : </h3>
						<input type="text" name="id_client" value="<?php echo $_SESSION["id"];?>" style="display:none;">
						<input type="text" name="operation" value="modifier" style="display:none;">
						<div class="kt-section__body">
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">nom :</label>
								<div class="col-lg-6">
									<input type="text" value="<?php echo $nom;?>" class="form-control" name="nom" placeholder="saisir le nom">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">prenom :</label>
								<div class="col-lg-6">
									<input type="text" class="form-control" value="<?php echo $prenom;?>" name="prenom" placeholder="saisir le prenom">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-3 col-form-label">sexe :</label>
								<div class="col-lg-6">
							<label class="kt-radio kt-radio--bold kt-radio--brand ml-5">
								<input type="radio" name="sexe" value="homme" 								<?php 
						if($sexe=="homme"){
						echo "checked=checked";
					}
?>> Homme
								<span></span>
							</label>
							<label class="kt-radio kt-radio--bold kt-radio--brand ml-5">
								<input type="radio" name="sexe" value="femme" 								<?php 
						if($sexe=="femme"){
						echo "checked=checked";
					}
?>> Femme
								<span></span>
							</label>
								</div>
							</div>


						</div>

						<h3 class="kt-section__title">2. Emplacement:</h3>
						<div class="kt-section__body">
							<div class="form-group">
								<label class="col-lg-3 col-form-label">pays:</label>
<div>
					<div class="dropdown bootstrap-select form-control kt_"><select class="form-control kt_selectpicker" data-size="4" tabindex="-98" name="pays">
						<?php 
						if($pays!=""){
						echo "<option>$pays</option>";
					}
?>
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
						<option>Tent</option>
						<option>Flashlight</option>
						<option>Toilet Paper</option>
					</select></div>
				</div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 col-form-label">ville:</label>
<div>
					<div class="dropdown bootstrap-select form-control kt_"><select class="form-control kt_selectpicker" data-size="4" tabindex="-98" name="ville">
						<?php 
						if($ville!=""){
						echo "<option>$ville</option>";
					}
?>
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
						<option>Tent</option>
						<option>Flashlight</option>
						<option>Toilet Paper</option>
					</select></div>
				</div>
							</div>	
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">dernier établissement fréquenté :</label>
								<div class="col-lg-6">
									<input type="text" class="form-control" value="<?php echo $etablissement;?>" name="etablissement" placeholder="saisir le prenom">
								</div>
							</div>				
						<h3 class="kt-section__title">2. curiculum:</h3>
						<div class="kt-section__body">
							<div class="form-group">
								<label class="col-lg-3 col-form-label">Niveau scolaire:</label>
<div>
					<div class="dropdown bootstrap-select form-control kt_"><select class="form-control kt_selectpicker" data-size="4" tabindex="-98" name="niveau_scolaire">
<?php 
						if($niveau_scolaire!=""){
						echo "<option>$niveau_scolaire</option>";
					}
?>
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
						<option>Tent</option>
						<option>Flashlight</option>
						<option>Toilet Paper</option>
					</select></div>
				</div>
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
  "positionClass": "toast-bottom-right",
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
    url : '../../../entities/etudiant.php',
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