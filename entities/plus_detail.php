<?php 

include_once "class_details_plus.php";
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
if(verification_post(["titre","description","id_ecole"])==1 && !isset($_POST["operation"])){
if(trim($titre)!="" && trim($description)!=""){
		$exemple=new details_plus($titre,$description,$id_ecole);
	if($exemple->ajouter()==true){
		$nono="ok";
	}else{
		$nono="il ya un probleme dans l'enregistrement'";
	}
}else{
	$nono="remplir toutes les case";
}
}else{
	if(isset($_POST["operation"])){
		if($operation=="supprimer"){
			if(details_plus::supprimer($id)==1){
				$nono="ok";
			}else{
				$nono="opération echoué";
			}
		}else{
		if($operation=="modifier"){
			details_plus::modifier($id,"description",$description);
			details_plus::modifier($id,"id_ecole",$id_ecole);
			details_plus::modifier($id,"titre",$titre);
			$nono="ok";
		}	
		}
}else{
		$nono="remplir toutes les case";
	}
}

echo $nono;
?>