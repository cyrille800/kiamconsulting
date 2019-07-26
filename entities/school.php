<?php 

include_once "class_ecole.php";
	function verification_post($tableau){

		for($i=0;$i<sizeof($tableau);$i++){
			if(!isset($_POST[$tableau[$i]])){
				if(empty($_POST[$tableau[$i]]) || trim($_POST[$tableau[$i]])==""){
					return 0;
				}
			}
		}
		return 1;
	}
extract($_POST);
$reponse="";
$nu="";
if(verification_post(["titre","ville","site","nombre_place","specialite"])==1 && !isset($_POST["operation"])){
	foreach ($specialite as $key => $value) {
		$reponse.=$value.";";
	}
	$specialite=$reponse;
if(trim($titre)=="" || trim($ville)=="" || trim($site)==""){
	$reponse="remplir toutes les cases";
}else{
	$exemple=new ecole($titre,$ville,$site,$nombre_place,$specialite);
	if($exemple->ajouter()==true){
		$id=ecole::retourne_valeur("titre",$titre,"id");
		$reponse="ok";
		if(!empty($_FILES["avatar"]) && trim($_FILES['avatar']['tmp_name'])!=""){
		$folder="../views/assets/Backoffice/media/ecoles/";
		$temp_name=$_FILES['avatar']['tmp_name'];
	$location=$folder.$id.".png";
	move_uploaded_file($temp_name,$location);

	}else{
copy("../views/assets/Backoffice/media/ecoles/default.png","../views/assets/Backoffice/media/ecoles/".$id.".png");
	}
	}else{
		$reponse="il ya un probleme dans l'enregistrement'";
	}
}
}else{
	if(isset($_POST["operation"])){
		if($operation=="supprimer"){
			if(ecole::supprimer($id)==1){
				$reponse="ok";
				unlink("../views/assets/Backoffice/media/ecoles/".$id.".png");
			}else{
				$reponse="opération echoué";
			}
		}else{
		if($operation=="modifier"){
			if(verification_post(["titre","ville","site","nombre_place","specialite"])==1){
			ecole::modifier($id,"titre",$titre);
			ecole::modifier($id,"ville",$ville);
			ecole::modifier($id,"site",$site);
			ecole::modifier($id,"nombre_place",$nombre_place);
	foreach ($specialite as $key => $value) {
		$nu.=$value.";";
	}
			ecole::modifier($id,"specialite",$nu);
			echo "ok";
		}
		if(!empty($_FILES["avatar"]) && trim($_FILES['avatar']['tmp_name'])!=""){
		$folder="../views/assets/Backoffice/media/ecoles/";
		$temp_name=$_FILES['avatar']['tmp_name'];
	$location=$folder.$id.".png";
	move_uploaded_file($temp_name,$location);

	}
		}	
		}
	}else{
		$reponse="remplir toutes les case";
	}
}

echo $reponse;
?>