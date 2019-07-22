
<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="utf-8"/>
		<title>
		Keen | Blank Page</title>
		<meta name="description" content="Blank page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
		<link href="../../assets/Backoffice/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/Backoffice/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/Backoffice/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/Backoffice/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/Backoffice/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/Backoffice/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="../../assets/Backoffice/media/logos/favicon.ico" />
	</head>

	<body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading"  >

		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
			<div class="kt-header-mobile__logo">
				<a href="/keen/preview/demo1/index.html">
					<img alt="Logo" src="../../assets/Backoffice/media/logos/logo-6.png"/>
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
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
					<iframe src="page_vierge.php" style="height:auto;border:none;background-color: #f2f3fa;" class="col-md-12" name="frame1">
						
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
		<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--demo-toggle" id="kt_demo_panel_toggle" data-toggle="kt-tooltip"  title="Check out more demos" data-placement="right">
			<a href="#" class="">
			modes</a>
		</li>
	</ul>
<?php 
include "bout_code/liste_mode.php";
?>
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
	
</body>
<!-- end::Body -->
</html>