<?php 
include "../../../../entities/class_specialite.php";
include "../../../../entities/class_ecole.php";
$titre="";
$site="";
$ville="";
$specialite="";
$nombre_place="";
$id="";
$op=false;
if(isset($_GET["id"])){
$op=true;
$id=$_GET["id"];
$titre=ecole::retourne_valeur("id",$_GET["id"],"titre");
$site=ecole::retourne_valeur("id",$_GET["id"],"site");
$ville=ecole::retourne_valeur("id",$_GET["id"],"ville");
$specialite=ecole::retourne_valeur("id",$_GET["id"],"specialite");
$decouper=explode(";",$specialite);
$nombre_place=ecole::retourne_valeur("id",$_GET["id"],"nombre_place");
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
	<body specialite="<?php echo ($op)?$specialite:"";?>" operation="<?php echo (isset($_GET["id"]))?"modifier":"ajouter";?>">
		<!-- begin:: Subheader -->
		<div class="kt-subheader   kt-grid__item" id="kt_subheader">
			<div class="kt-subheader__main">
				<h3 class="kt-subheader__title">
				Blank Page</h3>
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
					Features                    </a>
					<span class="kt-subheader__breadcrumbs-separator">
					</span>
					<a href="" class="kt-subheader__breadcrumbs-link">
					Misc                    </a>
					<span class="kt-subheader__breadcrumbs-separator">
					</span>
					<a href="" class="kt-subheader__breadcrumbs-link">
					Blank Page                    </a>
					<!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
					Active link</span>
					-->
				</div>
				
			</div>
		</div>
		<!-- end:: Subheader -->
		<!-- begin:: Content -->
		<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
			<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
				<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
			</div>
			<center>
			<div class="kt-portlet col-xl-5">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">Ajouter une école</h3>
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
							<label for="example-text-input" class="col-3 col-form-label">logo de l'ecole</label>
							<div class="col-7">
								<div class="kt-avatar" id="kt_profile_avatar_1">
									<div class="kt-avatar__holder" style="background-image: url(../../../assets/Backoffice/media/ecoles/<?php echo ($op)?$id:"default";?>.png);background-size:65%;"></div>
									<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
										<i class="fa fa-pen"></i>
										<input type="file" name="avatar" accept=".png, .jpg, .jpeg">
									</label>
									<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
										<i class="fa fa-times"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group row" style="margin-top:-5%;">
							<label for="example-text-input" class="col-2 col-form-label">Titre</label>
							<div class="col-10">
								<input class="form-control" type="text" name="titre" value="<?php echo ($op)?$titre:"";?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-2 col-form-label">Site internet</label>
							<div class="col-10">
								<input class="form-control" type="text" value="<?php echo ($op)?$site:"";?>" name="site">
							</div>
						</div>
						<?php 
						if(isset($_GET["id"])){
							echo '<input type="text" name="operation" value="modifier" style="display:none;">';
							echo '<input type="text" name="id" value="'.$_GET['id'].'" style="display:none;">';
						}
						?>
						<div class="form-group row">
							<label for="example-text-input" class="col-2 col-form-label">Ville</label>
							<div class="col-10">
								<div class="dropdown bootstrap-select form-control kt_"><select class="form-control kt_selectpicker" name="ville" data-size="4" tabindex="-98" name="pays">
									<?php echo "<option>";echo ($op)?$ville:"";echo "</option>";?>
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
							<div class="col-12">
								<div class="dropdown dropdown-inline col-12">
							<button class="btn btn-primary dropdown-toggle col-12" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Choisir les spécialités et les options
							</button>
							<div class="dropdown-menu col-12" aria-labelledby="dropdownMenuButton">
								<?php 
								specialite::afficher_formulaire();
								?>
							</div>
						</div>
							</div> 
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-2 col-form-label">Nombre de places</label>
							<div class="col-10">
								<div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><input id="kt_touchspin_4" type="text" class="form-control" value="<?php echo ($op)?$nombre_place:"0";?>" name="nombre_place" placeholder="Selectionner le nombre de place"></div>
							</div>
						</div>
					</div>
					<div class="kt-portlet__foot">
						<div class="kt-form__actions">
							<div class="row">
								<div class="col-2">
								</div>
								<div class="col-10">
									<button type="submit" class="btn btn-success">Ajouter</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			</center>
		</div>
		<!-- end:: Content -->
		<script src="../../../assets/Backoffice/js/jquery.js" type="text/javascript">
		</script>
		
		<script>
		var KTAppOptions = {
		"colors": {
		"state": {
		"brand": "#5d78ff",
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
		<!-- end::Global Config -->
		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="../../../assets/Backoffice/vendors/global/vendors.bundle.js" type="text/javascript">
		</script>
		<script src="../../../assets/Backoffice/js/demo1/scripts.bundle.js" type="text/javascript">
		</script>
		<script src="../../../assets/Backoffice/js/demo1/pages/dashboard.js" type="text/javascript"></script>
		<script src="../../../assets/Backoffice/js/demo4/pages/components/forms/controls/avatar.js" type="text/javascript"></script>
		<script src="../../../assets/Backoffice/js/demo4/pages/components/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
		<script src="../../../assets/Backoffice/js/demo1/pages/components/forms/widgets/bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="../../../assets/Backoffice/js/demo4/pages/components/extended/toastr.js" type="text/javascript"></script>
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

if($("body").attr("operation")=="ajouter"){
$.ajax({
    type : 'POST',
    url : '../../../../entities/school.php',
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
    success: function(data){  
if(data!="ok"){
toastr.error(data);   
    }else{
 toastr.success("opération terminer");    	
    }
}
})
}else{
$.ajax({
    type : 'POST',
    url : '../../../../entities/school.php',
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
    success: function(data){  
if(data!="ok"){
toastr.error(data);   
    }else{
 toastr.success("opération terminer");    	
    }
}
})
}

})

$("[name='specialite[]']").each(function(){
	var t=$("body").attr("specialite");
	if(t.indexOf($(this).attr("value"))!=-1){
		$(this).attr("checked","checked")
	}
})

			})
		</script>
	</body>
</html>