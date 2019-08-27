<?php 

include_once "class_activiter_client.php";
include_once "class_proccedure.php";
include_once "class_activiter.php";
include_once "class_notification.php";
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
			activiter_client::modifier($id,"etape_actuel",$etape_actuel);
			$nono="ok";
			$fichier=proccedure::retourne_valeur("id",$etape_actuel,"fichier");
			$activiter=activiter::retourne_valeur("id",$id_activiter,"titre");
					if(intval($fichier)==1 || intval($fichier)==2){
			$exemple=new notification($id_client,"info","Progression","Vous pouvez continuer votre progression sur l'activité ".$activiter,0);
			$exemple->ajouter();
		}else{
			$exemple=new notification($id_client,"info","Progression","votre dossier sur l'activiter ".$activiter." a avancé",0);
			$exemple->ajouter();			
		}
		}
		if($operation=="nombre_fait"){
			echo activiter_client::nombre($id_client,"id_client",$id_client);
		}	
		}
	}else{
		$nono="remplir toutes les case";
	}
}

echo $nono;
?>