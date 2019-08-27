<?php 

include_once "class_paiement_client.php";
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
if(verification_post(["id_paiement","id_client"])==1 && !isset($_POST["operation"])){
	$exemple=new paiement_client($id_paiement,$id_client);
	$rps=paiement_client::exite_panier($id_client,$id_paiement);
if($rps==false){
		if($exemple->ajouter()==true){
		$nono="ok";
	}else{
		$nono="il ya un probleme dans l'enregistrement";
	}
}else{
			if(paiement_client::supprimer($id_client,$id_paiement)==1){
				$nono="ok";
			}else{
				$nono="opération echoué";
			}	
}
}else{
	if(isset($_POST["operation"])){
		if($operation=="supprimer"){
			if(paiement_client::supprimer($id_client,$id_paiement)==1){
				$nono="ok";
			}else{
				$nono="opération echoué";
			}
		}
		if($operation=="modifier"){
			paiement_client::modifier($id,"id_client",$id_client);
			paiement_client::modifier($id,"id_paiement",$id_paiement);
			$nono="ok";
		}	

		if($operation=="verifier_existe"){
			if(paiement_client::verifier_exite($id_client,$id_paiement)=="oui"){
				echo "oui";
			}else{
				echo "non";
			}
		}	
		
}else{
		$nono="remplir toutes les case";
	}
}

echo $nono;
?>