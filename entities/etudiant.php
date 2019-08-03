<?php 
session_start();
include_once "class_etudiant.php";
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
if(verification_post(["nom","prenom","id_client","pays","ville","niveau_scolaire","etablissement","operation"])==1){
	if(!isset($_POST["sexe"])){
		$sexe="";
	}

	if(!empty($_POST["id_client"])){
		$t=etudiant::retourne_valeur("id_client",$id_client,"id_client");
		if($t==""){
				$exemple=new etudiant($nom,$prenom,$sexe,$id_client,$pays,$ville,$niveau_scolaire,$etablissement);
	if($exemple->ajouter()==true){
		$reponse="ok";
	}else{
		$reponse="il ya un probleme dans l'enregistrement'";
	}
		}else{
	if(isset($_POST["operation"])){
		if($operation=="modifier"){
			etudiant::modifier($id_client,"nom",$nom);
			etudiant::modifier($id_client,"prenom",$prenom);
			etudiant::modifier($id_client,"id_client",$id_client);
			etudiant::modifier($id_client,"pays",$pays);
			etudiant::modifier($id_client,"ville",$ville);
			etudiant::modifier($id_client,"niveau_scolaire",$niveau_scolaire);
			etudiant::modifier($id_client,"etablissement",$etablissement);
			etudiant::modifier($id_client,"sexe",$sexe);
			$reponse="ok";
		}
	}
}

	}else{
		$reponse="remplir toutes les cases";
	}
}else{
	if(isset($operation)){
		if($operation=="supprimer"){
if(etudiant::supprimer($id)==1){
				$reponse="ok";
			}else{
$reponse="remplir toutes les cases";
			}
		}else{
			if($operation=="modifier"){
					if(isset($id_ecole)){
					etudiant::modifier($id_client,"ecole_choisie",$id_ecole);	
					$reponse="ok";
					}
					if(isset($specialite)){
					etudiant::modifier($id_client,"specialite",$specialite);	
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