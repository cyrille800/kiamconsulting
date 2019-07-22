<?php 

include_once "class_ecole.php";
	function verification_post($tableau){

		for($i=0;$i<sizeof($tableau);$i++){
			if(!isset($_POST[$tableau[$i]])){
				if(empty($_POST[$tableau[$i]])){
					return 0;
				}
			}
		}
		return 1;
	}
extract($_POST);
if(verification_post(["titre","ville","site","nombre_place"])==1 && !isset($_POST["operation"])){
	
	$exemple=new ecole($titre,$ville,$site,$nombre_place);
	if($exemple->ajouter()==true){
		$reponse="ok";
	}else{
		$reponse="il ya un probleme dans l'enregistrement'";
	}
}else{
	if(isset($_POST["operation"])){
		if($operation=="supprimer"){
			if(ecole::supprimer($id)==1){
				$reponse="ok";
			}else{
				$reponse="opération echoué";
			}
		}else{
		if($operation=="modifier"){
			ecole::modifier($id,"titre",$titre);
			ecole::modifier($id,"ville",$ville);
			ecole::modifier($id,"site",$site);
			ecole::modifier($id,"nombre_place",$nombre_place);
		}	
		}
	}else{
		$reponse="remplir toutes les case";
	}
}

echo $reponse;
?>