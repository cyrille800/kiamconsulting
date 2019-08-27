<?php 
require_once "../../../../entities/class_paiement_client.php";
require_once "../../../../entities/class_paiement.php";
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
<body style="background-color:white;" id="<?php echo (isset($_GET["id"]))?$_GET["id"]:"";?>">
					<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
								<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
				<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
			</div>

            <div class="alert alert-primary fade show specialite" role="alert">
                            <div class="alert-text"> Description de l'offre : <?php echo paiement::retourne_valeur("id",$_GET["id"],"description");?></div>
                        </div>

<div class="kt-section__content">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th  class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Id client</font></font></th>
                                    <th  class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Action</font></font></th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php 
                                 paiement_client::afficher_admin($_GET["id"]);
                                 ?>                         
                            </tbody>
                        </table>
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



        })
	</script>
</body>
</html>