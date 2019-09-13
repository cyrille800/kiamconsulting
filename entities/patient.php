<?php 
session_start();
include_once "class_patient.php";
	function verification_post($tableau){

		for($i=0;$i<sizeof($tableau);$i++){
			if(!isset($_POST[$tableau[$i]])){
return 0;
			}
		}
		return 1;
	}
extract($_POST);
$reponse="";
$t="";
if(verification_post(["nom","prenom","id_client","pays","ville","operation"])==1){
	if(!isset($_POST["sexe"])){
		$sexe="";
	}

	if(!empty($_POST["id_client"])){
		$t=patient::retourne_valeur("id_client",$id_client,"id_client");
		if($t==""){
				$exemple=new patient($id_client,$nom,$prenom,$sexe,$pays,$ville);
	if($exemple->ajouter()==true){
		$reponse="ok";
	}else{
		$reponse="il ya un probleme dans l'enregistrements";
	}
		}else{
	if(isset($_POST["operation"])){
		if($operation=="modifier"){
			patient::modifier($id_client,"nom",$nom);
			patient::modifier($id_client,"prenom",$prenom);
			patient::modifier($id_client,"pays",$pays);
			patient::modifier($id_client,"ville",$ville);
			patient::modifier($id_client,"sexe",$sexe);
			$reponse=$id_client."ok";
		}
	}
}

	}else{
		$reponse="remplir toutes les cases";
	}
}else{
	if(isset($operation)){
		if($operation=="supprimer"){
if(patient::supprimer($id)==1){
				$reponse="ok";
			}else{
$reponse="remplir toutes les cases";
			}
		}else{
			if($operation=="modifier"){
					if(isset($id_ecole)){
					patient::modifier($id_client,"ecole_choisie",$id_ecole);	
					$reponse="ok";
					}
					if(isset($specialite)){
					patient::modifier($id_client,"specialite",$specialite);	
					$reponse="ok";
					}
				}else{
					$reponse="opération echoué";
				}	
		}
	}else{
		$reponse="remplir toutes les cases";
	}
}

echo $reponse;
?>