<?php 
require_once "../../../entities/class_client.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta name="description" content="Blank page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<link href="../../assets/Backoffice/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
			<link href="../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/Backoffice/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

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
<body>
<div class="kt-subheader   kt-grid__item bg-white mb-4" style="padding:10px;padding-left:40px;" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">
                                            Client                               
                </h3>
                       

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            
            <div class="kt-subheader__toolbar" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                            <span class="rps">3</span> Totals                                   </span>
                
                                    <form class="kt-subheader__search" id="kt_subheader_search_form">
                        <div class="input-group">
							<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
							<div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">
                                    <i class="la la-search"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                            </div>

                    </div>        
    </div>
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
								<div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="" data-placement="top" data-original-title="Quick actions">
									<a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="dropdown" data-offset="0px,0px" aria-haspopup="true" aria-expanded="false">
										<i class="la la-plus">
										</i>
									</a>
								</div>
								
							</div>
						</div>
</div>
					<!-- begin:: Content -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
								<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
				<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
			</div>

<?php 
client::afficher_simple($_GET["id"]);
?>
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
	<script src="../../assets/Backoffice/vendors/global/vendors.bundle.js" type="text/javascript">
	</script>
	<script src="../../assets/Backoffice/js/demo1/scripts.bundle.js" type="text/javascript">
	</script>
	<script src="../../assets/Backoffice/js/demo1/pages/custom/profile/overview-1.js" type="text/javascript"></script>
	<script>
		        			$(window).on("load",function(){
		$(".preload").fadeOut("fast");
		})

        $(function(){
        	
        })
	</script>
</body>
</html>