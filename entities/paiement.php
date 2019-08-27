<?php 

include_once "class_paiement.php";
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
if(verification_post(["titre","description","montant","type"])==1 && !isset($_POST["operation"])){
	$exemple=new paiement($titre,$description,$montant,$type);
	if($exemple->ajouter()==true){
		$nono="ok";
	}else{
		$nono="il ya un probleme dans l'enregistrement";
	}
}else{
	if(isset($_POST["operation"])){
		if($operation=="supprimer"){
			if(paiement::supprimer($id)==1){
				$nono="ok";
			}else{
				$nono="opération echoué";
			}
		}else{
		if($operation=="modifier"){
			paiement::modifier($id,"description",$description);
			paiement::modifier($id,"montant",$montant);
			paiement::modifier($id,"titre",$titre);
			paiement::modifier($id,"type",$type);
			$nono="ok";
		}	
		if($operation=="nombre_pourcentage"){
			echo $nombre=paiement::nombre_pourcentage($id,$o);
		}
		}
}else{
		$nono="remplir toutes les case";
	}
}

echo $nono;
?>