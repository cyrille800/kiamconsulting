<?php 
session_start();
$nom="";
$prenom="";
$sexe="";
$pays="";
$ville="";
$niveau_scolaire="";
$etablissement="";
include "../../../entities/class_etudiant.php";
include "../../../entities/class_patient.php";
if($_SESSION["type"]==0){
$nom=etudiant::retourne_valeur("id_client",$_SESSION["id"],"nom");
$prenom=etudiant::retourne_valeur("id_client",$_SESSION["id"],"prenom");
$sexe=etudiant::retourne_valeur("id_client",$_SESSION["id"],"sexe");
$pays=etudiant::retourne_valeur("id_client",$_SESSION["id"],"pays");
$ville=etudiant::retourne_valeur("id_client",$_SESSION["id"],"ville");
$niveau_scolaire=etudiant::retourne_valeur("id_client",$_SESSION["id"],"niveau_scolaire");
$etablissement=etudiant::retourne_valeur("id_client",$_SESSION["id"],"etablissement");
}else{
$nom=patient::retourne_valeur("id_client",$_SESSION["id"],"nom");
$prenom=patient::retourne_valeur("id_client",$_SESSION["id"],"prenom");
$sexe=patient::retourne_valeur("id_client",$_SESSION["id"],"sexe");
$pays=patient::retourne_valeur("id_client",$_SESSION["id"],"pays");
$ville=patient::retourne_valeur("id_client",$_SESSION["id"],"ville");	
}
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


<center>
<div class="kt-portlet col-xl-5">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h4 class="kt-portlet__head-title">Informations personnelles</h4></br>
				</div>
			</div>
			<!--begin::Form-->
			<form class="kt-form kt-form--label-right" action="" method="post" enctype="multipart/form-data"  id='formulaire'>
				<div class="kt-portlet__body">
					<h4 class="kt-section__title">1. identification : </h4></br>
						<input type="text" name="id_client" value="<?php echo $_SESSION["id"];?>" style="display:none;">
						<input type="text" name="operation" value="modifier" style="display:none;">
					<div class="form-group row">
						<label for="example-text-input" class="col-2 col-form-label">nom :</label>
						<div class="col-10">
							<input type="text" value="<?php echo $nom;?>" class="form-control" name="nom" placeholder="saisir le nom">
						</div>
					</div>
					<div class="form-group row">
						<label for="example-text-input" class="col-2 col-form-label">Prenom :</label>
						<div class="col-10">
							<input type="text" class="form-control" value="<?php echo $prenom;?>" name="prenom" placeholder="saisir le prenom">
						</div>
					</div>
					<div class="form-group row">
						<label for="example-text-input" class="col-2 col-form-label">sexe :</label>
						<div class="col-10">
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
					<h4 class="kt-section__title">2. Emplacement:</h4></br>

					<div class="form-group row">
						<label for="example-text-input" class="col-2 col-form-label">Pays :</label>
						<div class="col-10">
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

					<div class="form-group row">
						<label for="example-text-input" class="col-2 col-form-label">Ville :</label>
						<div class="col-10">
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
<?php 
if($_SESSION["type"]==0){
	?>
					<div class="form-group row">
						<label for="example-text-input" class="col-2 col-form-label">dernier établissement fréquenté :</label>
						<div class="col-10">
									<input type="text" class="form-control" value="<?php echo $etablissement;?>" name="etablissement" placeholder="saisir le dernier mot de passe">
						</div>
					</div>
					<h4 class="kt-section__title">2. curiculum:</h4></br>
					<div class="form-group row">
						<label for="example-text-input" class="col-2 col-form-label">Niveau scolaire :</label>
						<div class="col-10">
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

	<?php
}
?>
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
    <?php 
    if($_SESSION["type"]==0){
    	echo "url : '../../../entities/etudiant.php',";
    }else{
    	echo "url : '../../../entities/patient.php',";
    }
    ?>
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