<?php
session_start();
if(!isset($_SESSION["id_admin"])){
    header("location: ../../../pages_error/404.html");
}
include "../../../../entities/class_specialite.php";
?>
<!DOCTYPE html>

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
			google: {
				"families": ["Poppins:300,400,500,600,700"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
</head>

<body>
<div class="kt-subheader   kt-grid__item bg-white" style="padding:20px;padding-left:40px;" id="kt_subheader">
    <div class="kt-subheader__main">
              <h3 class="kt-subheader__title">
              Spécialité</h3>
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
                Liste des spécialités                 </a>
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
			<center>
				<div class="lds-ring">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
			</center>
		</div>
		<center>
			<div class="kt-portlet col-xl-4">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">Ajouter une spécialité</h3>
					</div>
				</div>
				<!--begin::Form-->
				<form class="kt-form kt-form--label-right" action="" method="post" enctype="multipart/form-data" id='formulaire' autocomplete="off">
					<input type="text" name="operation" value="ajouter" style="display:none;">
					<div class="kt-portlet__body">
						<div class="form-group form-group-last">
							<div class="alert alert-secondary" role="alert">
								<div class="alert-icon"><i class="la la-warning kt-font-brand"></i></div>
								<div class="alert-text">
									Vous ne devez pas ajouter une spécialité plus d'une fois
								</div>
							</div>
						</div>
						<div class="form-group row">
							<button type="submit" class="btn btn-success  col-2 col-form-label">Ajouter</button>
							<div class="col-10">
								<input class="form-control" type="text" name="titre" placeholder="saisir la spécialité">
							</div>
						</div>
						<div class="kt-section__content">
							<table class="table bg-white">
								<thead class="thead-dark">
									<tr>
										<th class="text-center">Id</th>
										<th class="text-center">titre</th>
										<th class="text-center">opération</th>
									</tr>
								</thead>
								<tbody>
									<?php
									specialite::afficher();
									?>
								</tbody>
							</table>
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
	<script src="../../../assets/Backoffice/js/demo4/pages/components/extended/toastr.js" type="text/javascript"></script>
	<script>
		$(window).on("load", function() {
			$(".preload").fadeOut("fast");
		})

		$(function() {
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
			$("#formulaire").submit(function(e) {
				e.preventDefault();
				if ($.trim($("[name='titre']").val()) == "") {
					toastr.error("remplir toutes les cases");
				} else {
					$.ajax({
						type: 'POST',
						url: '../../../../entities/specialite.php',
						data: new FormData(this),
						contentType: false,
						cache: false,
						processData: false,
						success: function(data) {
							if (data == "ce titre existe deja <br>il ya un probleme dans l'enregistrement verifier les caases") {
								toastr.error(data);
							} else {
								toastr.success("operation terminée.");
								$("table tbody").append("<tr><td class='text-center'>" + data + "</td><td class='text-center'>" + $("[name='titre']").val() + "</td><td class='text-center'><button type='button'  id='" + data + "'  class='btn btn-sm btn-clean btn-icon btn-icon-md modifier' ><i class='la la-edit'></i></button>&nbsp;&nbsp;&nbsp;<button type='button' id='" + data + "' title='Delete' class='btn btn-sm btn-clean btn-icon btn-icon-md supprimer'><i class='la la-trash'></i></button></td></tr>")
							}
						}
					})
				}
			})
			$(".supprimer").click(function() {
				valeur = $(this);
				$.post("../../../../entities/specialite.php", {
					operation: "supprimer",
					id: $(this).attr("id")
				}, function(data) {
					if (data != "ok") {
						toastr.error(data);
					} else {
						valeur.parent().parent().hide();
					}
				})
			})
		})
	</script>
</body>

</html>