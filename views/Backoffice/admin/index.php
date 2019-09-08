<?php
require "../../../entities/class_ecole.php";
require "../../../entities/class_concour.php";
require "../../../entities/class_activiter.php";
require "../../../entities/class_notification.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>
		Keen | Blank Page</title>
	<meta name="description" content="Blank page example">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
	<link href="../../assets/Backoffice/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/Backoffice/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/Backoffice/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/Backoffice/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/Backoffice/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/Backoffice/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="../../assets/Backoffice/media/logos/favicon.ico" />
</head>

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

	<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
		<div class="kt-header-mobile__logo">
			<a href="/keen/preview/demo1/index.html">
				<img alt="Logo" src="../../assets/Backoffice/media/logos/logo-6.png" />
			</a>
		</div>
		<div class="kt-header-mobile__toolbar">

			<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler">
				<span>
				</span>
			</button>

			<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler">
				<span>
				</span>
			</button>

			<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler">
				<i class="flaticon-more">
				</i>
			</button>
		</div>
	</div>

	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
			<?php
			include "bout_code/navbar_vertical.php";
			?>
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
				<?php
				include "bout_code/navbar_horizontal.php";
				?>
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="padding:0px;">
					<iframe src="page_vierge.php" style="height:auto;border:none;background-color: #f2f3fa;padding:0px;" class="col-md-12" name="frame1">

					</iframe>
				</div>
				<?php
				include "bout_code/footer.php";
				?>
			</div>
		</div>
	</div>
	<?php
	include "bout_code/action_rapide.php";
	?>
	<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="la la-arrow-up">
		</i>
	</div>
	<ul class="kt-sticky-toolbar" style="margin-top: 30px;">
		<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--demo-toggle" id="kt_demo_panel_toggle" data-toggle="kt-tooltip" title="Check out more demos" data-placement="right">
			<a href="#" class="">
				modes</a>
		</li>
	</ul>
	<?php
	include "bout_code/liste_mode.php";
	?>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="post" action="">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Selectionner l'etablissement</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="btn-group col-12">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Choisir l'école
							</button>
							<div class="dropdown-menu col-12" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
								<?php
								ecole::afficher_liste();
								?>
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
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="post" action="">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Selectionner la matiere</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="btn-group col-12">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Choisir la matiere
							</button>
							<div class="dropdown-menu col-12" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
								<?php
								concours::afficher_liste();
								?>
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
	<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="post" action="">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Selectionner l'activité à controler</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="btn-group col-12">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Choisir l'activité
							</button>
							<div class="dropdown-menu col-12" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
								<?php
								activiter::afficher_liste();
								?>
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
	<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="post" action="index.php">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Selectionner l'activité à controleddr</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="kt-portlet__body">
							<div class="form-group">
								<label for="Date">Date de publiction</label>
								<input type="datetime-local" class="form-control" id="Date" placeholder="dd/mm/yyyy" name="Date">
							</div>

						</div>

					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-outline-brand" data-dismiss="modal" value="close">
						<button type="button" class="btn btn-brand" id="valider">Valider</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<script src="../../assets/Backoffice/js/jquery.js" type="text/javascript">
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
	<script src="../../assets/Backoffice/vendors/global/vendors.bundle.js" type="text/javascript">
	</script>
	<script src="../../assets/Backoffice/js/demo1/scripts.bundle.js" type="text/javascript">
	</script>
	<!--end::Global Theme Bundle -->

	<!--begin::Page Vendors(used by this page) -->
	<script src="../../assets/Backoffice/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript">
	</script>
	<!--end::Page Vendors -->
	<script src="../../assets/Backoffice/js/demo1/pages/dashboard.js" type="text/javascript">
	</script>
	<script src="http://localhost:1337/socket.io/socket.io.js" type="text/javascript"></script>
	<script>
		$(function() {
			$("#valider").click(function() {
				$.ajax({
						type: "post",
						url: "../../../entities/concour.php",
						data:{ 
							operation:"datePublication",
							date:$("[name='Date']").val(),
						},
						success: function(response) {
							toastr.success(response);
							setTimeout(() => {
								$("#exampleModal4").modal("hide");
							}, 2000);

						}
					})
					.fail(function() {
						toastr.error("probleme dans l'ajout ou la modification");
					})

			});

			var socket = io.connect("http://localhost:1337");

			socket.on("notification_message_admin", function(message) {
				toastr.info("Vous avez un nouveau message");
				$(".iok").text(parseInt($(".iok").text()) + 1);
			})

			socket.on("recevoir_notification", function(data) {
				if (data.type == "info") {
					toastr.info(data.message);
				}
				if (data.type == "warning") {
					toastr.warning(data.message);
				}
				if (data.type == "primary") {
					toastr.primary(data.message);
				}
				if (data.type == "error") {
					toastr.error(data.message);
				}
			})
			socket.on("resd", function(nombre) {
				$(".iok").text(parseInt($(".iok").text()) - nombre.nombre_message);
			})
			$.get("../../../entities/message.php", {
				operation: "tout_afficher"
			}, function(data) {
				if (data != 0) {
					if (parseInt($(".iok").text()) != data) {
						$(".iok").text(data);
					}
				} else {
					$(".iok").text("0");
				}
			})
			$(".del").click(function() {
				$(".remplir").fadeOut("fast").queue(function() {
					$(".hy").remove();
					$(this).dequeue();
				})
				$.post("../../../entities/notification.php", {
					operation: "lues",
					id_client: 0
				})
				$(".signaler").hide();
			})

			$(".click").click(function() {
				$('[data-dismiss="modal"]').trigger("click");
			})

			var i = 0;
			$(".hy").each(function() {
				i++;
				$(".total").text(i)
			})

			$(".hy").click(function() {
				$("#kt_offcanvas_toolbar_quick_actions").addClass(" kt-offcanvas-panel--on");
				$("#kt_offcanvas_toolbar_quick_actions").css("opacity", "1");
				$("#kt_offcanvas_toolbar_quick_actions").after('<div class="kt-offcanvas-panel-overlay bv"></div>')
				$(".bv").click(function() {
					$("#kt_offcanvas_toolbar_quick_actions").removeClass("kt-offcanvas-panel--on");
					$("#kt_offcanvas_toolbar_quick_actions").css("opacity", "0");
					$(this).remove();
				})

				$.post("../../../entities/notification.php", {
					operation: "lue",
					id_client: 0,
					id_notif: $(this).attr("id")
				})
				$(this).remove()
				var i = 0;
				$(".remplir").children().each(function() {
					i++;
				})

				if (i == 0) {
					$(".signaler").hide();
				}
			})

			$(".ss").click(function() {
				var i = 0;
				$(".remplir").children().each(function() {
					i++;
				})
				if (i == 0) {
					$("#kt_offcanvas_toolbar_quick_actions").addClass(" kt-offcanvas-panel--on");
					$("#kt_offcanvas_toolbar_quick_actions").css("opacity", "1");
					$("#kt_offcanvas_toolbar_quick_actions").after('<div class="kt-offcanvas-panel-overlay bv"></div>')
					$(".bv").click(function() {
						$("#kt_offcanvas_toolbar_quick_actions").removeClass("kt-offcanvas-panel--on");
						$("#kt_offcanvas_toolbar_quick_actions").css("opacity", "0");
						$(this).remove();
					})
					setTimeout(function() {
						$(".dropdown-menu.dropdown-menu-fit.dropdown-menu-right.dropdown-menu-anim.dropdown-menu-top-unround.dropdown-menu-lg").removeClass("show")
					}, 60)

				}
			})


			socket.on("recevoir_notification", function(data) {
				$(".signaler").show()
				$.post("../../../entities/notification.php", {
					operation: "dernier_time",
					id_client: 0
				}, function(datase) {
					$(".kt-timeline").prepend(datase);
				})
				$.post("../../../entities/notification.php", {
					operation: "dernier",
					id_client: 0
				}, function(datas) {
					$(".remplir").show();
					$(".remplir").prepend(datas);
					$(".hy").click(function() {
						$("#kt_offcanvas_toolbar_quick_actions").addClass(" kt-offcanvas-panel--on");
						$("#kt_offcanvas_toolbar_quick_actions").css("opacity", "1");
						$("#kt_offcanvas_toolbar_quick_actions").after('<div class="kt-offcanvas-panel-overlay bv"></div>')
						$(".bv").click(function() {
							$("#kt_offcanvas_toolbar_quick_actions").removeClass("kt-offcanvas-panel--on");
							$("#kt_offcanvas_toolbar_quick_actions").css("opacity", "0");
							$(this).remove();
						})

						$.post("../../../entities/notification.php", {
							operation: "lue",
							id_client: 0,
							id_notif: $(this).attr("id")
						})
						$(this).remove()
						var i = 0;
						$(".remplir").children().each(function() {
							i++;
						})

						if (i == 0) {
							$(".signaler").hide();
						}
					})
				})
			})
		})
	</script>
</body>
<!-- end::Body -->

</html>