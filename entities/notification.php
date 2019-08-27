<?php 

include_once "class_notification.php";
	function verification_post($tableau){

		for($i=0;$i<sizeof($tableau);$i++){
			if(!isset($_POST[$tableau[$i]])){
				if(empty($_POST[$tableau[$i]]) || trim($_POST[$tableau[$i]])==""){
					return 0;
				}
			}
		}
		return 1;
	}
extract($_POST);
$reponse="";
$nu="";
if(verification_post(["id_personne","type","operations","message","etat"])==1 && !isset($_POST["operation"])){
	$exemple=new notification($id_personne,$type,$operations,$message,$etat);
	if($exemple->ajouter()==true){
		$reponse="ok";
		if($type=="fichier"){
			$bg=config::$bdd->query("select id from notification where type='fichier' && message='$message' && id_personne=$id_personne order by date_ajout desc limit 1");
			$ju=$bg->fetch();
			$id=$ju[0];
			copy("../views/Backoffice/admin/Blog/uploads/".$nom_fichier,"../views/assets/Backoffice/media/fichier_envoyer/".$id.".".$message);
		}
	}else{
		$reponse="il ya un probleme dans l'enregistrement'";
	}
}else{
	if(isset($_POST["operation"])){
		if($operation=="supprimer"){
			if(notification::supprimer($id)==1){
				$reponse="ok";
			}else{
				$reponse="opération echoué";
			}
		}else{
		if($operation=="modifier"){
			if(verification_post(["id_personne","type","operation","message","etat"])==1){
			notification::modifier($id,"id_personne",$id_personne);
			notification::modifier($id,"type",$type);
			notification::modifier($id,"operation",$operation);
			notification::modifier($id,"message",$message);
			echo "ok";
		}
		}
		if($operation=="lues"){
			notification::tout_lire($id_client);
			echo "ok";
		}	

		if($operation=="lue"){
			notification::lire($id_client,$id_notif);
			echo "ok";
		}

		if($operation=="nombre_total"){
			echo notification::nombre_total($id_client);
		}

		if($operation=="dernier"){
			notification::dernier($id_client);
		}

		if($operation=="dernier_time"){
			notification::dernier_time($id_client);
		}

		if($operation=="tout_afficher"){
			echo notification::tout_afficher();
		}
		}
	}else{
		$reponse="remplir toutes les cases";
	}
}

echo $reponse;
?>