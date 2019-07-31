<?php 

include_once "class_activiter_client.php";
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
if(verification_post(["id_client","id_activiter","nombre_etape_fait","etape_actuel"])==1 && !isset($_POST["operation"])){
	$exemple=new activiter_client($id_client,$id_activiter,$nombre_etape_fait,$etape_actuel);
	if($exemple->ajouter()==true){
		$nono="ok";
	}else{
		$nono="il ya un probleme dans l'enregistrement'";
	}
}else{
	if(isset($_POST["operation"])){
		if($operation=="supprimer"){
			if(activiter_client::supprimer($id_client,$id_activiter)==1){
				$nono="ok";
			}else{
				$nono="opération echoué";
			}
		}else{
		if($operation=="modifier"){
			activiter_client::modifier($id,"id_activiter",$id_activiter);
			activiter_client::modifier($id,"nombre_etape_fait",$nombre_etape_fait);
			activiter_client::modifier($id,"id_client",$id_client);
			$nono="ok";
		}	
		}
	}else{
		$nono="remplir toutes les case";
	}
}

echo $nono;
?>