<?php 

include_once "class_specialite.php";
extract($_POST);

if(isset($_POST["operation"])){
	if($operation=="ajouter"){
		if(trim($titre)==""){
$reponse="il ya un probleme dans l'enregistrement verifier les caases";
		}else{
	$exemple=new specialite($titre);
	if($exemple->ajouter()==true){
		$reponse=specialite::retourne_valeur("titre",$titre,"id");
	}else{
		$reponse="il ya un probleme dans l'enregistrement verifier les caases";
	}
		}
	}
	if($operation=="supprimer"){
	if(specialite::supprimer($id)==1){
		$reponse="ok";
	}else{
		$reponse="il ya un probleme dans l'enregistrement verifier les caases";	
	}
	}
	if($operation=="modifier"){
	if(specialite::modifier($id,"etat",$valeur)==1){
		$reponse="ok";
	}else{
		$reponse="il ya un probleme dans l'enregistrement verifier les caases";
	}	
	}

	echo $reponse;
}
?>