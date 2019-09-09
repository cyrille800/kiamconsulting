<?php 
session_start();
if(!isset($_SESSION["id_admin"])){
    header("location: ../../pages_error/404.html");
}
require_once "../../../entities/class_client.php";
?>
            <?php 
            if(isset($_GET["operation"])){
                if($_GET["operation"]=="accepter"){
                    echo $_GET["id"];
                    $requette=config::$bdd->query("update patient set resultat=1 where id=".$_GET["id"]);
                    
                }
                if($_GET["operation"]=="refuser"){
                    $requette=config::$bdd->query("update patient set resultat=-2 where id=".$_GET["id"]);
                    
                }
                
            }
            ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta name="description" content="Blank page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
<div class="kt-subheader   kt-grid__item bg-white" style="padding:20px;padding-left:40px;" id="kt_subheader">
    <div class="kt-subheader__main">
              <h3 class="kt-subheader__title">
              Client</h3>
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
                Liste des demandes d'adhésion                  </a>
                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
                Active link</span>
                -->
              </div>
              
            </div>
</div>

					<!-- begin:: Content -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
								<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
				<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
			</div>

<div class="row pl-5 pr-5 ml-5 mr-5">
    <table class="table bg-white">
        <thead>
            <tr class="thead-dark text-center">
                <th>nom</th>
                <th>prenom</th>
                <th>sexe</th>
                <th>pays</th>
                <th>ville</th>
                <th>opération</th>
            </tr>
        </thead>
        <tbody>
                <?php 
$requette=config::$bdd->query("select * from patient where resultat=0");
$i=0;
while($data=$requette->fetch()){
    echo "<tr class='text-center'><td>".$data["nom"]."</td><td>".$data["prenom"]."</td><td>".$data["sexe"]."</td><td>".$data["pays"]."</td><td>".$data["ville"]."</td><td><a href='demande.php?operation=refuser&amp;id=".$data['id']."' class='btn btn-sm btn-danger text-dark' style='cursor:pointer;'>Refuser</a><a  href='demande.php?operation=accepter&amp;id=".$data['id']."' class='btn btn-sm btn-success ml-2' style='cursor:pointer;'>Accepter</a></td></tr>";
    $i++;
}
                                                if($i==0){
                            echo "<div class='text-white bg-danger col-4 text-center mx-auto mb-3' style='border-radius:3px;'>Aucune demande</div>";
                        }
                ?>
        </tbody>
    </table>
<?php 

?>
</div>
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
	<script>
		        			$(window).on("load",function(){
		$(".preload").fadeOut("fast");
		})

        $(function(){
        	
        })
	</script>
</body>
</html>