<?php 
session_start();
if(!isset($_SESSION["id_admin"])){
    header("location: ../../../pages_error/404.html");
}
include "../../../../entities/class_galerie.php";
include "../../../../entities/class_details_plus.php";
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
		<style type="text/css">
			.gallery {
-webkit-column-count: 3;
-moz-column-count: 3;
column-count: 3;
-webkit-column-width: 33%;
-moz-column-width: 33%;
column-width: 33%; }
.gallery .pics {
-webkit-transition: all 350ms ease;
transition: all 350ms ease; }
.gallery .animation {
-webkit-transform: scale(1);
-ms-transform: scale(1);
transform: scale(1); }

@media (max-width: 450px) {
.gallery {
-webkit-column-count: 1;
-moz-column-count: 1;
column-count: 1;
-webkit-column-width: 100%;
-moz-column-width: 100%;
column-width: 100%;
}
}

@media (max-width: 400px) {
.btn.filter {
padding-left: 1.1rem;
padding-right: 1.1rem;
}
}
		</style>
</head>
<body id="<?php echo $_GET["id"];?>">

					<!-- begin:: Subheader -->
					<div class="kt-subheader   kt-grid__item bg-white" id="kt_subheader" style="padding:10px;padding-left:40px;">
						<div class="kt-subheader__main bg-white">
							<h3 class="kt-subheader__title">
							Ecoles</h3>
							<span class="kt-subheader__separator kt-hidden">
							</span>
							<div class="kt-subheader__breadcrumbs bg-white">
								<a href="#" class="kt-subheader__breadcrumbs-home">
									<i class="la la-shelter" style="font-size:25px;">
									</i>
								</a>
								<span class="kt-subheader__breadcrumbs-separator">
								</span>
								<a href="afficher.php" class="kt-subheader__breadcrumbs-link">
								Consulter écoles                    </a>
								<span class="kt-subheader__breadcrumbs-separator">
								</span>
								<a href="" class="kt-subheader__breadcrumbs-link">
								detail de l'école                    </a>
								<span class="kt-subheader__breadcrumbs-separator">
								</span>
								<a href="" class="kt-subheader__breadcrumbs-link">
								Blank Page                    </a>
								<a href="#" class="btn btn-primary ml-4"   data-toggle="modal" data-target="#ajouter_image"><i class="la la-plus"></i>&nbsp;&nbsp;Ajouter des images</a>
							</div>
							
						</div>
						<div class="kt-subheader__toolbar" style="margin-right:20%;">
							<div class="kt-subheader__wrapper">
								<div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="top">
									<a href="#" class="btn btn btn-label btn-label-brand btn-bold" data-toggle="modal" data-target="#ajouter_description">
										<i class="la la-plus">
										</i>
										Ajouter des informations
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
<!-- Grid row -->

<!-- Grid row -->
<div class="row">
<div class="gallery col-7 bg-white  pt-4 pb-4" id="gallery">
<?php 
galerie::afficher($_GET["id"]);
?>

</div>

<div class="col-4 bg-white  pt-4 pb-4">
<div class="accordion" id="accordionExample1">
<?php 
details_plus::afficher($_GET["id"]);
?>
				</div>
</div>
</div>
		</div>
					<!-- end:: Content -->
						<div class="modal fade" id="ajouter_image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<form method="post" action="" enctype="multipart/form-data" id="formulaire">
<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Selectionner l'image</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="btn-group col-12">
							<input type="text" name="operation" value="ajouter" style="display:none;">
							<input type="text" name="id_ecole" value="<?php echo $_GET["id"];?>" style="display:none;">
							<input type="file" name="image">
						</div>
									</div>
									<div class="modal-footer">
										<input type="button"  class="btn btn-outline-brand" data-dismiss="modal" value="close">
										<button type="submit" class="btn btn-brand">Valider</button>
									</div>
									</form>
								</div>
							</div>
						</div>

						<div class="modal fade" id="ajouter_description" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<form method="post" action="" enctype="multipart/form-data" id="formulaire1">
<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Ajouter une description</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="btn-group col-12">
							<input type="text" name="id_ecole" value="<?php echo $_GET["id"];?>" style="display:none;">
							<div class="form-group form-group-last col-12 mt-4">
							<div class="form-group row" style="margin-top:-5%;">
							<label for="example-text-input" class="col-2 col-form-label">Titre</label>
							<div class="col-10">
								<input class="form-control" type="text" name="titre" value="">
							</div>
						</div>
							<div class="form-group row" style="margin-top:-5%;">
							<label for="example-text-input" class="col-2 col-form-label">description</label>
							<div class="col-10">
								<input class="form-control" type="text" name="description" value="">
							</div>
						</div>
						</div>
						</div>
									</div>
									<div class="modal-footer">
										<input type="button"  class="btn btn-outline-brand" data-dismiss="modal" value="close">
										<button type="submit" class="btn btn-brand">Valider</button>
									</div>
									</form>
								</div>
							</div>
						</div>

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
	<script>
			$(window).on("load",function(){
		$(".preload").fadeOut("fast");
		})

		$(function(){
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});

			 $("#formulaire").submit(function(e){
e.preventDefault();

$.ajax({
    type : 'POST',
    url : '../../../../entities/galerie.php',
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
    success: function(data){  
if(data!="ok"){
toastr.error(data);   
    }else{
 toastr.success("opération terminer");    
 document.location.href="detail.php?id="+$("body").attr("id");	
    }
}
})
})

			 $("#formulaire1").submit(function(e){
e.preventDefault();

$.ajax({
    type : 'POST',
    url : '../../../../entities/plus_detail.php',
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
    success: function(data){  
if(data!="ok"){
toastr.error(data);   
    }else{
 toastr.success("opération terminer");    
 document.location.href="detail.php?id="+$("body").attr("id");	
    }
}
})
})

$(".supprimer_photo").click(function(){
	$.post("../../../../entities/galerie.php",{operation:"supprimer",id:$(this).attr("id")},function(data){
		if(data!="ok"){
			toastr.error(data);
		}else{
 document.location.href="detail.php?id="+$("body").attr("id");		
		}
	})
})

$(".supprimer_description").click(function(){
	$.post("../../../../entities/plus_detail.php",{operation:"supprimer",id:$(this).attr("id")},function(data){
		if(data!="ok"){
			toastr.error(data);
		}else{
 document.location.href="detail.php?id="+$("body").attr("id");		
		}
	})
})



		})
	</script>
</body>
</html>