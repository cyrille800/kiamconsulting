<?php 
include "../../../../entities/class_ecole.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta name="description" content="Blank page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta charset="utf-8">
			<link href="../../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/Backoffice/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/Backoffice/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/Backoffice/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/Backoffice/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/Backoffice/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />
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
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
					<!-- begin:: Content -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
								<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
				<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
			</div>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<!--Begin::App-->
<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
    <!--Begin:: App Aside-->
    <div class="kt-grid__item kt-app__toggle kt-app__aside kt-app__aside--sm kt-app__aside--fit mr-5" id="kt_users_aside" style="opacity: 1;">
        <div class="kt-portlet">
            <div class="kt-portlet__body">
                <div class="kt-widget kt-widget--general-1">
                    <div class="kt-widget__wrapper">
                        <div class="kt-widget__label">
                            <span class="kt-widget__desc text-center">
                               Trie par Specialité
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="kt-portlet__body">
                <ul class="kt-nav kt-nav--bold kt-nav--fit-ver kt-nav--v4" role="tablist">
                    <li class="kt-nav__item">
                        <a class="kt-nav__link active" data-toggle="tab" href="#kt_profile_tab_personal_information" role="tab">
                            <span class="kt-nav__link-icon"><i class="flaticon2-user"></i></span>
                            <span class="kt-nav__link-text">Personal Information</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="kt-portlet__body">
                <div class="kt-widget kt-widget--general-1">
                    <div class="kt-widget__wrapper">
                        <div class="kt-widget__label">
                            <span class="kt-widget__desc text-center">
                               Trie par Nom
                            </span>
                        </div>
                    </div>
                </div>
            </div>

				<form class="kt-form kt-form--label-right" action="" method="post" enctype="multipart/form-data" id='formulaire' autocomplete="off">
					<div class="kt-portlet__body">
						<div class="form-group row" style="margin-top:-5%;">
							<label for="example-text-input" class="col-2 col-form-label">Titre</label>
							<div class="col-10">
								<input class="form-control" type="text" name="titre" value="">
							</div>
						</div>
					</div>
				</form>
        </div>
    </div>
    <!--End:: App Aside-->

    <!--Begin:: App Content-->
    <div class="kt-grid__item kt-grid__item--fluid kt-app__content ml-5">
        <div class="row">
<?php

ecole::afficher();

?>

        </div>

    </div>
    <!--End:: App Content-->
</div>
<!--End::App-->	</div>
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
	<script src="../../../assets/Backoffice/js/demo1/pages/custom/users/list-columns.js" type="text/javascript"></script>
	<script>
		        			$(window).on("load",function(){
		$(".preload").fadeOut("fast");
		})

        $(function(){
        	$(".supprimer_ecole").click(function(){
        		var v=$(this);
        		var id=$(this).attr("id");
        		$(this).parent().fadeOut().queue(function(){
        			v.remove()
        			$.post("../../../../entities/school.php",{operation:"supprimer",id:id})
        			$(this).dequeue();
        		})
        	})
        })
	</script>
</body>
</html>