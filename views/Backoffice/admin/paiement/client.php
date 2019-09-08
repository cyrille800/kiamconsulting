<?php 
session_start();
if(!isset($_SESSION["id_admin"])){
    header("location: ../../../pages_error/404.html");
}
require_once "../../../../entities/class_paiement_client.php";
require_once "../../../../entities/class_paiement.php";
require_once "../../../../entities/class_client.php";
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

            <div class="alert alert-primary fade show specialite" role="alert" style="margin:0;">
                            <div class="alert-text"> Description de l'offre : <?php echo paiement::retourne_valeur("id",$_GET["id"],"description");?></div>
                        </div>
                                <div class="dropdown dropdown-inline mt-2 mb-2" data-toggle="kt-tooltip" title="" data-placement="top" data-original-title="Ajouter">
                                    <a href="#" class="btn btn btn-label btn-label-brand btn-bold bv" data-toggle="modal" data-target="#exampleModal">
                                        <i class="la la-plus">
                                        </i>
                                        Ajouter un client
                                    </a>
                                </div>
                                

<div class="kt-section__content">
    <?php 
    if(isset($_POST["valider"])){
        $id=client::retourne_valeur("username",$_POST["pseudo"],"id");
        if($id!=""){
$requette=config::$bdd->query("select count(*) from paiement_client where id_client=".$id." && id_paiement=".$_GET["id"]);
       $nombre=$requette->fetch();
       if($nombre[0]==0){
        echo "oui";
$requette=config::$bdd->query("insert into paiement_client(id_paiement,id_client,etat) value(".$_GET['id'].",".$id.",1)");
echo '<div class="alert alert-success">
    opération terminé
</div> ';
              
       }else{
       $requette=config::$bdd->query("update paiement_client set etat=1 where id_paiement=".$_GET['id']." && id_client=$id");
       if($requette->execute()){
        
echo '<div class="alert alert-success">
    opération terminé
</div> ';
              
       }

    }          
        }else{
    
echo '<div class="alert alert-danger">
    cette utilisateur n\'existe pas .
</div> 
    ';
}
       
}
    ?>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un client</h5>
      </div>
<form method="post" >
    <div class="form-group row col-10 mx-auto mt-3">
                            <label for="example-text-input" class="col-4 col-form-label">Saisir le pseudo</label>
                            <div class="col-8">
                                <input type="text" class="form-control" name="pseudo" placeholder="Pseudo" value="">
                            </div>
                        </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="submit" name="valider" class="btn btn-secondary" >Ajouter</button>
      </div>
</form>
    </div>
  </div>
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