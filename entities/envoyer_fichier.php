<?php 
require_once "config.php"; 
require_once "class_notification.php";
require_once "class_activiter.php"; 
	config::connexion();
$reponse="";
extract($_POST);
if(isset($_FILES["fichier"])){
		$folder="../views/assets/Backoffice/media/fichier_proccedure/";
		$temp_name=$_FILES['fichier']['tmp_name'];
		$gt=explode(".",$_FILES['fichier']['name']);
		$taille=0;
		$taille=$_FILES['fichier']['size']/(1024*1024);
if($taille<=3 && $taille!=0){
		if(strtolower($gt[sizeof($gt)-1])=="pdf"){
	$location=$folder.$id_activiter.$id_proccedure.$id_client.".pdf";
	move_uploaded_file($temp_name,$location);
	$reponse="ok";
		$req=config::$bdd->query("update activiter_client set etape_actuel=".$etape_suivante." where id_client=".$id_client." && id_activiter=".$id_activiter);
	$reqs=config::$bdd->query("select nombre_etape_fait from activiter_client where id_client=".$id_client." && id_activiter=".$id_activiter);
	$s=$reqs->fetch();
	$io=intval($s[0])+1;
	$reqss=config::$bdd->query("update activiter_client set nombre_etape_fait=".$io." where id_client=".$id_client." && id_activiter=".$id_activiter);

	//envoyer une notification à l'admin 
	
	$titre=activiter::retourne_valeur("id",$id_activiter,"titre");
		$reqss=config::$bdd->query("select fichier from proccedure where id=".$etape_suivante);
		$dt=$reqss->fetch();
		if(intval($dt[0])==0){
			$exemple=new notification("0","avertissement","Vous avez un travail","Vous avez un control à effectuer sur l'activiter ".$titre,0);
			$exemple->ajouter();
			$reponse='{"reponose":"ok","message":"Vous avez un control à effectuer sur l\'activiter '.$titre.'"}';
		}

		}else{
			$reponse="vous devez inserez un document pdf";
		}
}else{
	$reponse="la taille du fichier ne doit pas dépassée 3 méga";
}


	}else{
			$req=config::$bdd->query("update activiter_client set etape_actuel=".$etape_suivante." where id_client=".$id_client." && id_activiter=".$id_activiter);
	$reqs=config::$bdd->query("select nombre_etape_fait from activiter_client where id_client=".$id_client." && id_activiter=".$id_activiter);
	$s=$reqs->fetch();
	$io=intval($s[0])+1;
	$reqss=config::$bdd->query("update activiter_client set nombre_etape_fait=".$io." where id_client=".$id_client." && id_activiter=".$id_activiter);
		$reponse="ok";

		//envoyer une notification à l'admin 
		
		$titre=activiter::retourne_valeur("id",$id_activiter,"titre");
		$reqss=config::$bdd->query("select fichier from proccedure where id=".$etape_suivante);
		$dt=$reqss->fetch();
		if(intval($dt[0])==0){
			$exemple=new notification("0","avertissement","Vous avez un travail","Vous avez un control à effectuer sur l'activiter ".$titre,0);
			$exemple->ajouter();
			$reponse='{"reponose":"ok","message":"Vous avez un control à effectuer sur l\'activiter '.$titre.'"}';
		}

	}

echo $reponse;
?>