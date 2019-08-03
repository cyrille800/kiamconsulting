<?php 

include_once "class_galerie.php";
extract($_POST);

if(isset($_POST["operation"])){
	if($operation=="ajouter"){
	$exemple=new galerie($id_ecole);
	if($exemple->ajouter()==true){
		$id=galerie::retourne_valeur("id_ecole",$id_ecole,"id");

		if(!empty($_FILES["image"]) && trim($_FILES['image']['tmp_name'])!=""){
		$folder="../views/assets/Backoffice/media/galerie/";
		$temp_name=$_FILES['image']['tmp_name'];
	$location=$folder.$id.$id_ecole.".png";
	move_uploaded_file($temp_name,$location);
	$reponse="ok";
	}

	}else{
		$reponse="il ya un probleme dans l'enregistrement";
	}
	}
	if($operation=="supprimer"){
		$val=$id.galerie::retourne_valeur("id",$id,"id_ecole");
	if(galerie::supprimer($id)==1){
		if(unlink("../views/assets/Backoffice/media/galerie/".$val.".png")){
			$reponse="ok";
		}else{
		$reponse="il ya un probleme dans la suppression";		
		}
	}else{
		$reponse="il ya un probleme dans l'enregistrement";	
	}
	}
	echo $reponse;
}
?>