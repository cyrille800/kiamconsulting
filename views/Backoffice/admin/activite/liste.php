<?php 
session_start();
if(!isset($_SESSION["id_admin"])){
    header("location: ../../../pages_error/404.html");
}
require_once "../../../../entities/class_activiter.php";
require_once "../../../../entities/class_ecole.php";
$titre="";
$description="";
$etat="";
$id="";
$op=false;
if(isset($_GET["id"])){
$op=true;
$id=$_GET["id"];
$titre=activiter::retourne_valeur("id",$_GET["id"],"titre");
$description=activiter::retourne_valeur("id",$_GET["id"],"description");
$etat=activiter::retourne_valeur("id",$_GET["id"],"etat");
}
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
<body operation="<?php echo (isset($_GET["id"]))?"modifier":"ajouter";?>" id="<?php echo (isset($_GET["id"]))?$_GET["id"]:"";?>">

<div class="kt-subheader   kt-grid__item bg-white" style="padding:20px;padding-left:40px;" id="kt_subheader">
    <div class="kt-subheader__main">
              <h3 class="kt-subheader__title">
              Services</h3>
              <span class="kt-subheader__separator kt-hidden">
              </span>
              <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home">
                  <i class="la la-shelter" style="font-size:25px;">
                  </i>
                </a>
                <span class="kt-subheader__breadcrumbs-separator">
                </span>
                <a href="controler.php?id=<?php echo $_GET["id"];?>" class="kt-subheader__breadcrumbs-link">
                revernir sur l'activité
            </a>
                <span class="kt-subheader__breadcrumbs-separator">
                </span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                Liste des personnes
            </a>
              </div>
              
            </div>
</div>
					<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
								<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
				<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
			</div>
<table class="table table-striped col-8 mx-auto">
  <thead>
  	<?php
  	$type=activiter::retourne_valeur("id",$_GET["id"],"etat");
  	 ?>
    <tr class="bg-dark text-white text-center">
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">portable</th>
      <th scope="col">Pays</th>
      <th scope="col">Ville</th>
      <th scope="col">sexe</th>
      <?php 
if(intval($type)==1){
	echo '<th scope="col">ecole choisie</th><th scope="col">specialite</th>';
}
      ?>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	$requette=config::$bdd->prepare("select id_client from activiter_client where id_activiter=:id_activiter && etape_actuel=-1");
  	$requette->bindValue(":id_activiter",$_GET["id"]);
  	$requette->execute();
  	while($data=$requette->fetch()){
  		  	if(intval($type)==1){
  		  		$requet=config::$bdd->query("select * from etudiant where id_client=".$data["id_client"]);
  	}else{
  		$requet=config::$bdd->query("select * from patient where id_client=".$data["id_client"]);
  	}
  		$bv=$requet->fetch();
  		echo '<tr class="text-center"><td>'.$bv["nom"].'</td><td>'.$bv["prenom"].'</td><td>'.client::retourne_valeur("id",$data["id_client"],"numero").'</td><td>'.$bv["pays"].'</td><td>'.$bv["ville"].'</td><td>'.$bv["sexe"].'</td>';
if(intval($type)==1){
	echo '<td>'.ecole::retourne_valeur("id",$bv["ecole_choisie"],"titre").'</td><td>'.$bv["specialite"].'</td>';
}
  		echo '</tr>';
  	}
  	?>
  </tbody>
</table>
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
    <script src="../../../assets/Backoffice/js/demo1/pages/components/forms/widgets/bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="../../../assets/Backoffice/js/demo1/pages/components/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
	<script>
		        			$(window).on("load",function(){
		$(".preload").fadeOut("fast");
		})
	</script>
</body>
</html>