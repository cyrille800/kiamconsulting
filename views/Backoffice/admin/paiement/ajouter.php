<?php 
session_start();
if(!isset($_SESSION["id_admin"])){
    header("location: ../../../pages_error/404.html");
}
include "../../../../entities/class_paiement.php";
$titre="";
$description="";
$montant="";
$type="";
$id="";
$op=false;
if(isset($_GET["id"])){
$op=true;
$id=$_GET["id"];
$titre=paiement::retourne_valeur("id",$_GET["id"],"titre");
$description=paiement::retourne_valeur("id",$_GET["id"],"description");
$montant=paiement::retourne_valeur("id",$_GET["id"],"montant");
$type=paiement::retourne_valeur("id",$_GET["id"],"type");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta name="description" content="Blank page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
			<link href="../../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/Backoffice/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

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
</head>
<body operation="<?php echo (isset($_GET["id"]))?"modifier":"ajouter";?>" id="<?php echo (isset($_GET["id"]))?$_GET["id"]:"";?>">
<div class="kt-subheader   kt-grid__item bg-white" style="padding:20px;padding-left:40px;" id="kt_subheader">
    <div class="kt-subheader__main">
              <h3 class="kt-subheader__title">
              Paiement</h3>
              <span class="kt-subheader__separator kt-hidden">
              </span>
              <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home">
                  <i class="la la-shelter" style="font-size:25px;">
                  </i>
                </a>
                <span class="kt-subheader__breadcrumbs-separator">
                </span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                Ajouter un paiement                  </a>
                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
                Active link</span>
                -->
              </div>
              
            </div>
</div>

					<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
								<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
				<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
			</div>
			<center>
			<div class="kt-portlet col-xl-5">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">Ajouter une activitée</h3>
					</div>
				</div>
				<!--begin::Form-->
				<form class="kt-form kt-form--label-right" action="" method="post" enctype="multipart/form-data" id='formulaire' autocomplete="off">
					<div class="kt-portlet__body">
						<div class="form-group form-group-last">
							<div class="alert alert-secondary" role="alert">
								<div class="alert-icon"><i class="la la-warning kt-font-brand"></i></div>
								<div class="alert-text">
									Utiliser des informations representatives qui permettront aux étudiants de ce reférencer .
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-2 col-form-label">Titre</label>
							<div class="col-10">
								<input type="text" class="form-control" name="titre" placeholder="titre" value="<?php echo ($op)?$titre:"";?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-2 col-form-label">Description</label>
							<div class="col-10">
								<input type="text" class="form-control" name="descriptionss" placeholder="description" value="<?php echo ($op)?$description:'';?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-2 col-form-label">Type de personne</label>
							<div class="col-10">
								<div class="dropdown bootstrap-select form-control kt_"><select class="form-control kt_selectpicker" name="type" data-size="4" tabindex="-98" name="pays">
									<?php echo "<option value='".(($type!="")?$type:"")."'>";echo ($type!="")?$type:"";echo "</option>";?>
									<option value="etudiant">Etudiant</option>
									<option value="patient">Patient</option>
								</select></div>
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-2 col-form-label">montant</label>
							<div class="col-10">
<div class="input-group">
							<div class="input-group-prepend"><span class="input-group-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">FCFA</font></font></span></div>
							<input type="text" class="form-control" placeholder="motant" name="montantss" value="<?php echo ($op)?$montant:'';?>">
						</div>
							</div>
						</div>


					</div>
					<div class="kt-portlet__foot">
						<div class="kt-form__actions">
							<div class="row">
								<div class="col-2">
								</div>
								<div class="col-10">
									<button type="submit" class="btn btn-success"><?php echo (isset($_GET["id"]))?"modifier":"ajouter";?></button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			</center>

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
	<script src="../../../assets/Backoffice/vendors/global/vendors.bundle.js" type="text/javascript">
	</script>
	<script src="../../../assets/Backoffice/js/demo1/scripts.bundle.js" type="text/javascript">
	</script>
    <script src="../../../assets/Backoffice/js/demo1/pages/components/forms/widgets/bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="../../../assets/Backoffice/js/demo1/pages/components/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
		<script src="../../../assets/Backoffice/js/demo4/pages/components/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
		<script src="../../../assets/Backoffice/js/demo1/pages/components/forms/widgets/bootstrap-touchspin.js" type="text/javascript"></script>	
	<script>
		        			$(window).on("load",function(){
		$(".preload").fadeOut("fast");
		})

        $(function(){
			 $("#formulaire").submit(function(e){
e.preventDefault();
  var titre=$("[name='titre']").val();
  var description=$("[name='descriptionss']").val();
  var decision=$("[name='montantss']").val();
  var type=$("[name='type']").val();
if((titre!="" && description!="") && (decision!="" && type!="")){

if($("[operation]").attr("operation")=="ajouter"){
	var regex = new RegExp("^[0-9]+$");
if (regex.test(decision)==false) {
toastr.error("Ecrivez juste le nombre de minutes, pas de carractère")
}else{
$.post( "../../../../entities/paiement.php",{titre:titre,description:description,montant:decision,type:type},function(data){
    if(data!="ok"){
      toastr.error(data)
    }else{
      toastr.success("operation terminée")
    }
  })
}
}else{
		var regex = new RegExp("^[0-9]+$");
if (regex.test(decision)==false) {
toastr.error("Ecrivez juste le nombre de minutes, pas de carractère")
}else{
  $.post( "../../../../entities/paiement.php",{operation:"modifier",id:$("[operation]").attr("id"),titre:titre,description:description,montant:decision,type:type},function(data){
    if(data!="ok"){
      toastr.error(data)
    }else{
      toastr.success("operation terminée")
    }
  }) 
}
}
}else{
toastr.error("remplir toutes les case")
}

})
        })
	</script>
</body>
</html>