<?php 

include_once "class_proccedure.php";
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
$nono="";
if(verification_post(["titre","description","fichier","id_active"])==1 && !isset($_POST["operation"])){
	$exemple=new proccedure($titre,$description,$fichier,$id_active);
	if($exemple->ajouter()==true){
		$nono="ok";
	}else{
		$nono="il ya un probleme dans l'enregistrement'";
	}
}else{
	if(isset($_POST["operation"])){
		if($operation=="supprimer"){
			if(proccedure::supprimer($id)==1){
				$nono="ok";
			}else{
				$nono="opération echoué";
			}
		}else{
		if($operation=="modifier"){
			proccedure::modifier($id,"description",$description);
			proccedure::modifier($id,"fichier",$fichier);
			proccedure::modifier($id,"titre",$titre);
			$nono="ok";
		}	
		}
	}else{
		$nono="remplir toutes les case";
	}
}

echo $nono;
?>