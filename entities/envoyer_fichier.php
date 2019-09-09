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
	$reponse='{"reponose":"ok","message":""}';
		$req=config::$bdd->prepare("update activiter_client set etape_actuel=:etape_actuel where id_client=:id_client && id_activiter=:id_activiter");
		$req->bindValue(":etape_actuel",$etape_suivante);
		$req->bindValue(":id_client",$id_client);
		$req->bindValue(":id_activiter",$id_activiter);
		$req->execute();
	$reqs=config::$bdd->prepare("select nombre_etape_fait from activiter_client where id_client=:id_client && id_activiter=:id_activiter");
			$reqs->bindValue(":id_client",$id_client);
		$reqs->bindValue(":id_activiter",$id_activiter);
		$reqs->execute();
	$s=$reqs->fetch();
	$io=intval($s[0])+1;
	$reqss=config::$bdd->prepare("update activiter_client set nombre_etape_fait=:nombre_etape_fait where id_client=:id_client && id_activiter=:id_activiter");
		$reqss->bindValue(":nombre_etape_fait",$io);
		$reqss->bindValue(":id_client",$id_client);
		$reqss->bindValue(":id_activiter",$id_activiter);
		$reqss->execute();

	//envoyer une notification à l'admin 
	
	$titre=activiter::retourne_valeur("id",$id_activiter,"titre");
		$reqss=config::$bdd->prepare("select fichier from proccedure where id=:id");
		$reqss->bindValue(":id",$etape_suivante);
		$reqss->execute();
		$dt=$reqss->fetch();
		if(intval($dt[0])==0){
			$exemple=new notification("0","avertissement","Vous avez un travail","Vous avez un control à effectuer sur l'activiter ".$titre,0);
			$exemple->ajouter();
			$reponse='{"reponose":"ok","message":"Vous avez un control à effectuer sur l\'activiter '.$titre.'"}';
		}

		}else{
			$reponse='{"reponose":"vous devez inserez un document pdf","message":""}';
		}
}else{
	$reponse='{"reponose":"la taille du fichier ne doit pas dépassée 3 méga","message":""}';
}


	}else{
			$req=config::$bdd->prepare("update activiter_client set etape_actuel=:etape_actuel where id_client=:id_client && id_activiter=:id_activiter");
					$req->bindValue(":etape_actuel",$etape_suivante);
		$req->bindValue(":id_client",$id_client);
		$req->bindValue(":id_activiter",$id_activiter);
		$req->execute();
	$reqs=config::$bdd->prepare("select nombre_etape_fait from activiter_client where id_client=:id_client && id_activiter=:id_activiter");
			$reqs->bindValue(":id_client",$id_client);
		$reqs->bindValue(":id_activiter",$id_activiter);
		$reqs->execute();
	$s=$reqs->fetch();
	$io=intval($s[0])+1;
	$reqss=config::$bdd->prepare("update activiter_client set nombre_etape_fait=:nombre_etape_fait where id_client=:id_client && id_activiter=:id_activiter");
						$reqss->bindValue(":nombre_etape_fait",$io);
		$reqss->bindValue(":id_client",$id_client);
		$reqss->bindValue(":id_activiter",$id_activiter);
		$reqss->execute();
		$reponse='{"reponose":"ok","message":""}';

		//envoyer une notification à l'admin 
		
		$titre=activiter::retourne_valeur("id",$id_activiter,"titre");
		$reqss=config::$bdd->prepare("select fichier from proccedure where id=:id");
				$reqss->bindValue(":id",$etape_suivante);
		$reqss->execute();
		$dt=$reqss->fetch();
		if(intval($dt[0])==0){
			$exemple=new notification("0","avertissement","Vous avez un travail","Vous avez un control à effectuer sur l'activiter ".$titre,0);
			$exemple->ajouter();
			$reponse='{"reponose":"ok","message":"Vous avez un control à effectuer sur l\'activiter '.$titre.'"}';
		}

	}

echo $reponse;
?>