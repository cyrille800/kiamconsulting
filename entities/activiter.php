<?php 

include_once "class_activiter.php";
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
if(verification_post(["titre","description","etat"])==1 && !isset($_POST["operation"])){
	$exemple=new activiter($titre,$description,$etat);
	if($exemple->ajouter()==true){
		$nono="ok";
	}else{
		$nono="il ya un probleme dans l'enregistrement'";
	}
}else{
	if(isset($_POST["operation"])){
		if($operation=="supprimer"){
			if(activiter::supprimer($id)==1){
				$nono="ok";
			}else{
				$nono="opération echoué";
			}
		}else{
		if($operation=="modifier"){
			activiter::modifier($id,"description",$description);
			activiter::modifier($id,"etat",$etat);
			activiter::modifier($id,"titre",$titre);
			$nono="ok";
		}	
		}
}else{
		$nono="remplir toutes les case";
	}
}

echo $nono;
?>