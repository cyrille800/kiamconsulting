<?php 
include "../../../../entities/class_concour.php";
$titre="";
$date="";
$heure="";
$heures="";
$minutes="";
$description="";
$id="";
$op=false;
if(isset($_GET["id"])){
$op=true;
$id=$_GET["id"];
$titre=concours::retourne_valeur("id",$_GET["id"],"titre");
$date=concours::retourne_valeur("id",$_GET["id"],"date_concour");
$heure=concours::retourne_valeur("id",$_GET["id"],"heure");
$description=concours::retourne_valeur("id",$_GET["id"],"description");
$decouper=explode(",",$heure);
$heures=$decouper[0];
$minutes=$decouper[1];
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
						<div class="kt-subheader__toolbar">
							<div class="kt-subheader__wrapper">
								<div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="top">
									<a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="dropdown" data-offset="0px,0px" aria-haspopup="true" aria-expanded="false">
										<i class="la la-plus">
										</i>
									</a>
								</div>
								
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
						<h3 class="kt-portlet__head-title">Ajouter une matiere</h3>
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
								<input type="text" class="form-control" name="label" placeholder="login" value="<?php echo ($op)?$titre:"";?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-2 col-form-label">Date du concour</label>
							<div class="col-10">
                    <div class="input-group date">
                        <input type="text" class="form-control" name="date" value="<?php echo ($op)?$date:"";?>" placeholder="cliquez ici pour choisir" id="kt_datepicker_3">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-calendar"></i>
                            </span>
                        </div>
                    </div>
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-2 col-form-label">Heure</label>
							<div class="row col-10">
                <div class="col-lg-5 col-md-5 col-sm-5 mx-auto">
                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><input value="<?php echo ($op)?$heures:"";?>" id="kt_touchspin_3" type="text" class="form-control" value="0" name="heures" placeholder="Nombre de places"></div>
                    <span class="form-text text-muted text-center">Heure(s)</span>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 mx-auto">
                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><input id="kt_touchspin_3" value="<?php echo ($op)?$minutes:"";?>" type="text" class="form-control" value="0" name="minutes" placeholder="Nombre de places"></div>
                    <span class="form-text text-muted text-center">Minute(s)</span>
                </div>
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-2 col-form-label">Description</label>
							<div class="col-10">
								<input type="text" class="form-control" name="descriptionss" placeholder="description" value="<?php echo ($op)?$description:"";?>">
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
	<script>
		        			$(window).on("load",function(){
		$(".preload").fadeOut("fast");
		})

        $(function(){
			 $("#formulaire").submit(function(e){
e.preventDefault();

if($("body").attr("operation")=="ajouter"){
if(($.trim($("[name='label']").val())=="" || $.trim($("[name='descriptionss']").val())=="") || ($.trim($("[name='date']").val())=="" || $.trim($("[name='heures']").val())=="")){
    toastr.error("remplir toutes les cases");
}else{
    var heure=$("[name='heures']").val()+","+$("[name='minutes']").val();
    $.post( "../../../../entities/concour.php",{titre:$("[name='label']").val(),description:$("[name='descriptionss']").val(),date:$("[name='date']").val(),heure:heure},function(data){
    if(data!="ok"){
    toastr.error(data);
    }else{
    toastr.success("operation terminer");	
    }
 } )
}
}else{
if(($.trim($("[name='label']").val())=="" || $.trim($("[name='descriptionss']").val())=="") || ($.trim($("[name='date']").val())=="" || $.trim($("[name='heures']").val())=="")){
    toastr.error("remplir toutes les cases");
}else{
	var heure=$("[name='heures']").val()+","+$("[name='minutes']").val();
$.post( "../../../../entities/concour.php",{operation:"modifier",id:$("body").attr("id"),titre:$("[name='label']").val(),date:$("[name='date']").val(),heure:heure,description:$("[name='descriptionss']").val()},function(data){
	if(data!="ok"){
		toastr.error(data);
	}else{
		toastr.success("operation terminer");
	}
}); 
}
}

})
        })
	</script>
</body>
</html>