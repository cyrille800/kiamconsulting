<?php
include "../../../../entities/class_quizz.php";
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
			google: {
				"families": ["Poppins:300,400,500,600,700"]
			},
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
			column-width: 33%;
		}

		.gallery .pics {
			-webkit-transition: all 350ms ease;
			transition: all 350ms ease;
		}

		.gallery .animation {
			-webkit-transform: scale(1);
			-ms-transform: scale(1);
			transform: scale(1);
		}

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

<body id="<?php echo $_GET["id"]; ?>">

	<!-- begin:: Subheader -->
	<div class="kt-subheader   kt-grid__item bg-white" id="kt_subheader" style="padding:10px;padding-left:40px;">
		<div class="kt-subheader__main bg-white">
			<h3 class="kt-subheader__title">
				Blank Page</h3>
			<span class="kt-subheader__separator kt-hidden">
			</span>
			<div class="kt-subheader__breadcrumbs bg-white">
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
				<a href="#" class="btn btn-primary ml-4" data-toggle="modal" data-target="#ajouter_image"><i class="la la-plus"></i>&nbsp;&nbsp;Ajouter un quizz</a>
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
		<!-- Grid row -->

		<!-- Grid row -->
		<div class="row">
			<div class="col-8 bg-white  pt-4 pb-4 mx-auto">
				<div class="accordion" id="accordionExample">
					<?php
					quizz::afficher($_GET["id"]);

					?>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="ajouter_image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
							<input type="text" name="id_concour" value="<?php echo $_GET["id"]; ?>" style="display:none;">
							<input type="text" name="autre_reponse" value="" style="display:none;">
							<div class="form-group form-group-last col-12 mt-4">
								<div class="form-group row" style="margin-top:-5%;">
									<label for="example-text-input" class="col-2 col-form-label">question</label>
									<div class="col-10">
										<input type="text" class="form-control col-10" style="display:inline;" name="question" placeholder="saisir la question">&nbsp;&nbsp;<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="choisir une image">
											<i class="la la-file-picture-o btn-bold" style="font-size:25px;cursor:pointer;"></i>
											<input type="file" name="question" accept=".png, .jpg, .jpeg" style="display:none;">
										</label>
									</div>
								</div>
								<div class="form-group row" style="margin-top:-5%;">
									<label for="example-text-input" class="col-2 col-form-label">Reponse</label>
									<div class="col-10">
										<input type="text" class="form-control col-10" style="display:inline;" name="reponse" placeholder="saisir la reponse">&nbsp;&nbsp;<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="choisir une image">
											<i class="la la-file-picture-o btn-bold" style="font-size:25px;cursor:pointer;"></i>
											<input type="file" name="reponse" accept=".png, .jpg, .jpeg" style="display:none;">
										</label>
									</div>
								</div>
								<div class="form-group row" style="margin-top:-5%;">
									<label for="example-text-input" class="col-2 col-form-label">Reponse fausse 1</label>
									<div class="col-10">
										<input type="text" class="form-control col-10" style="display:inline;" name="faux1" placeholder="saisir une reponse fausse">
										&nbsp;&nbsp;<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="choisir une image">
											<i class="la la-file-picture-o btn-bold" style="font-size:25px;cursor:pointer;"></i>
											<input type="file" name="faux1" accept=".png, .jpg, .jpeg" style="display:none;">
										</label>
									</div>
								</div>
								<div class="form-group row" style="margin-top:-5%;">
									<label for="example-text-input" class="col-2 col-form-label">Reponse fausse 2</label>
									<div class="col-10">
										<input type="text" class="form-control col-10" style="display:inline;" name="faux2" placeholder="saisir une reponse fausse">
										&nbsp;&nbsp;<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="choisir une image">
											<i class="la la-file-picture-o btn-bold" style="font-size:25px;cursor:pointer;"></i>
											<input type="file" name="faux2" accept=".png, .jpg, .jpeg" style="display:none;">
										</label>
									</div>
								</div>
								<div class="form-group row" style="margin-top:-5%;">
									<label for="example-text-input" class="col-2 col-form-label">Reponse fausse 3</label>
									<div class="col-10">
										<input type="text" class="form-control col-10" style="display:inline;" name="faux3" placeholder="saisir une reponse fausse">
										&nbsp;&nbsp;<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="choisir une image">
											<i class="la la-file-picture-o btn-bold" style="font-size:25px;cursor:pointer;"></i>
											<input type="file" name="faux3" accept=".png, .jpg, .jpeg" style="display:none;">
										</label>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-outline-brand" data-dismiss="modal" value="close">
						<button type="submit" class="btn btn-brand">Valider</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="modal fade" id="simage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<img src="" class="cible modal-dialog" alt="" style="position:absolute;left:10%;top:0;">
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
		$(window).on("load", function() {
			$(".preload").fadeOut("fast");
		})

		$(function() {
			var selectedClass = "";

			$("#formulaire1").submit(function(e) {
				e.preventDefault();
				var autre_reponse = "";
				autre_reponse += $("[name='faux1']").val() + ";";
				autre_reponse += $("[name='faux2']").val() + ";";
				autre_reponse += $("[name='faux3']").val();
				if ($.trim($("[name='faux1']").val()) != "" && $.trim($("[name='faux2']").val()) != "" && $.trim($("[name='faux3']").val()) != "" && $.trim($("[name='question']").val()) != "" && $.trim($("[name='reponse']").val()) != "") {
					$("[name='autre_reponse']").val(autre_reponse)
					$.ajax({
						type: 'POST',
						url: '../../../../entities/quizz.php',
						data: new FormData(this),
						contentType: false,
						cache: false,
						processData: false,
						success: function(data) {
							if (data != "ok") {
								toastr.error(data);
							} else {
								toastr.success("opération terminer");
								document.location.href = "quizz.php?id=" + $("body").attr("id");
							}
						}
					})
				} else {
					toastr.error("remplir tous les champs");
				}
			})

			$(".supprimer").click(function() {
				id = $(this).attr("id");
				element = $(this)
				$.post("../../../../entities/quizz.php", {
					operation: "supprimer",
					id: id
				}, function(data) {
					if (data != "ok") {
						toastr.error(data);
					} else {
						element.parent().parent().hide();
					}
				});
			})

			$(".btn.btn-info.btn-icon.btn-circle").click(function() {
				var v = $(this).attr("url");
				$(".cible").attr("src", v);
			})


		})
	</script>
</body>

</html>