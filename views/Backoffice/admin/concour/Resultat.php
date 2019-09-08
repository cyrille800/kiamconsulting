<?php
include "../../../../entities/class_specialite.php";
include "../../../../entities/class_concour.php";
$selection = "false";
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
	<style>
		.error {
			border: 2px solid red;
		}
	</style>

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
					Features </a>
				<span class="kt-subheader__breadcrumbs-separator">
				</span>
				<a href="" class="kt-subheader__breadcrumbs-link">
					Misc </a>
				<span class="kt-subheader__breadcrumbs-separator">
				</span>
				<a href="" class="kt-subheader__breadcrumbs-link">
					Blank Page </a>
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
						<h3 class="kt-portlet__head-title">Selectionner les laureats</h3>
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
									<?php
									if (isset($_GET["selection"])) {
										if (($_GET["selection"]) == "classique") {
											echo "Vous devez specifier le nombre de personnes   qui seront admis";
										} else if ($_GET["selection"] == "personnalisee") {
											echo "Vous devez selectionner ceux qui seront admis";
										}
									} else echo "Vous devez specifier le nombre de personnes   qui seront admis";


									?>

								</div>
							</div>
						</div>
						<div class="row mt-2" id="nombre">
							<label for="example-text-input" class="col-1 col-form-label">Nombre:</label>
							<div class="col-11">
								<input class="form-control" type="text" name="nombre" placeholder="entre le nombre d'étudiants à sélectionner">
							</div>
						</div>
						<div class="clearfix mb-5 mt-3">
							<button type="button" class="btn btn-success float-left" id="classique">Selection Classique</button>
							<button type="button" class="btn btn-info float-right" id="personnalisee" data-toggle="modal" data-target="#critere">Selection personnalisée</button>



						</div>
						<?php if (isset($_GET["selection"])) {
							$selection = "true";
							?>
							<div class="kt-section__content">
								<table class="table bg-white">
									<thead class="thead-dark">
										<tr>
											<th class="text-center">Nom et Prenom</th>
											<?php
												$matiere = concours::afficherMatiere();
												if ($_GET["selection"] == "personnalisee") {
													?>
												<th class="text-center">Selection</th>

											<?php }
												?>

										</tr>
									</thead>
									<tbody>
										<?php
											if ($_GET["selection"] == "classique") {
												concours::afficherEtudiantConcour2($matiere, isset($_GET["nombre"]) ? $_GET["nombre"] : 0);
											} else if ($_GET["selection"] == "personnalisee") {
												if (isset($_POST["ids"]) && isset($_POST["pourcentages"])) {
													extract($_POST);
													$ids = json_decode($ids);
													$pourcentages = json_decode($pourcentages);
													concours::pourcentage($ids, $pourcentages);
												}
											}
											?>
									</tbody>
								</table>
							</div>
							<button type="button" class="btn btn-primary mx-auto" id="valider">valider</button>
						<?php } ?>
					</div>
				</form>
				<div class="modal fade" id="critere" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
										<div class="form-group form-group-last col-12 mt-4">
											<?php
											concours::afficherMatiereCritere();
											?>
											<input type="hidden" name="ids" class="form-control col-10 input" style="display:inline;" placeholder="entrer un pourcentage (%)">&nbsp;&nbsp;<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="">
												<input type="hidden" name="pourcentages" class="form-control col-10 input" style="display:inline;" placeholder="entrer un pourcentage (%)">&nbsp;&nbsp;<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="">
													<input type="hidden" name="nombre2" class="form-control col-10 input" style="display:inline;" placeholder="entrer un pourcentage (%)">&nbsp;&nbsp;<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="">

										</div>
									</div>
								</div>
								<div class="modal-footer">
									<input type="button" class="btn btn-outline-brand" data-dismiss="modal" value="close">
									<button type="button" class="btn btn-brand" id="valider2">Valider</button>
								</div>
							</form>
						</div>
					</div>
				</div>

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
			let tmp = "<?= isset($_GET["selection"]) ? $_GET["selection"] : "null" ?>";
			let bool2 = "<?= isset($_POST["ids"]) ? "true" : "null" ?>";
			if (tmp == "personnalisee" && bool2 == "null") {
				$("#critere").modal("show");
			}
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
			var cmpt = 0;
			var nombre = <?= isset($_GET["nombre"]) ? $_GET["nombre"] : 0 ?>;
			var bool = false;
			var id = [];
			var id2 = [];
			var selection = <?= $selection ?>;
			var pourcentages = [];
			if (selection && nombre != 0) {
				$("#nombre").css("display", "none");
			}
			function controlDeSaisi() {
				return $("[name='nombre']").val().match(/^\d+$/) || toastr.error("ce champ ne doit pas etre vide et ne doit contenir que des chiffres") && false;
			}

			function controlNombreSelection() {
				$("[type='checkbox']").each(function(index, element) {
					$(this).click(function() {
						if ($(this).prop("checked")) {
							cmpt++;
							id.push($(this).parent().parent().parent().children("td").first().attr("idetudiant"));
						} else if ($(this).prop("checked") == false) {
							cmpt--;
							let index = id.indexOf($(this).parent().parent().parent().children("td").first().attr("idetudiant"));
							id.splice(index, 1);
						}

					});
				});


			}
			controlNombreSelection();
			$("#classique").click(function() {

				$('#critere').on('show.bs.modal', function(e) {
					return e.preventDefault();
				});
				if (nombre == 0) {
					if (controlDeSaisi()) {
						nombre = $("[name='nombre']").val();
						$("#nombre").css("display", "none");
						window.location.href = "Resultat.php?selection=classique&nombre=" + nombre;
					}
				} else window.location.href = "Resultat.php?selection=classique&nombre=" + nombre;
			});
			$("#personnalisee").click(function() {
				window.location.href = "Resultat.php?selection=personnalisee&nombre=" + nombre;
			});
			$("#valider").click(function() {
				let selection2 = "<?= isset($_GET["selection"]) ? $_GET["selection"] : " " ?>";
				if (selection2 == "classique") {
					id = [];
					$("tr").each(function(index, element) {
						if ($(this).children("td").attr("idEtudiant")) {
							id.push($(this).children("td").attr("idEtudiant"));
							console.log(id);
						}
					});
					$.ajax({
						type: "post",
						url: "../../../../entities/concour.php",
						data: {
							ids: JSON.stringify(id),
							operation: "resultat",
							selection: "classique",
						},
						success: function(response) {
							if (response = "données ajoutees") {
								toastr.error("données ajoutées");
								setTimeout(() => {
									window.location.href = "Resultat.php";
								}, 3000);

							}
						}
					});

				} else if (selection2 == "personnalisee") {

					$.ajax({
						type: "post",
						url: "../../../../entities/concour.php",
						data: {
							ids: JSON.stringify(id),
							operation: "resultat",
							selection: "personnalisee",
						},
						success: function(response) {
							if (response = "données ajoutees") {
								toastr.error("données ajoutées");
								setTimeout(() => {
									window.location.href = "Resultat.php";
								}, 3000);

							}
						}
					});
				}


			});

			function controlSaisi2() {
				let cmpt = 0;
				$(".input").each(function(index, element) {
					if ($(this).attr("type") != "hidden") {
						if (!$(this).val().match(/^\d+$/)) {
							$(this).addClass("is-invalid");
							toastr.error("vous devez entrer un chiffre");
						} else {
							if ($(this).hasClass("is-invalid"))
								$(this).removeClass("is-invalid");
							id2[index] = $(this).attr("id");
							pourcentages[index] = $(this).val() / 100;
							cmpt += parseInt($(this).val());
						}
					}

				});
				return cmpt;
			}

			$("#valider2").click(function() {
				let cmpt = controlSaisi2();

				if (cmpt != 100) {
					toastr.error("la somme doit etre egale à 100%")
				} else {
					$('#critere').modal('hide');
					$("[name='ids']").val(JSON.stringify(id2));
					$("[name='pourcentages']").val(JSON.stringify(pourcentages));
					$("[name='nombre']").val(nombre);
					$("#formulaire1").attr("action", "Resultat.php?selection=personnalisee&nombre=" + nombre);
					$("#formulaire1").submit();

				}
			});


		})
	</script>
</body>

</html>