<?php 

include_once "class_task.php";
extract($_POST);

if(isset($_POST["operation"])){
	if($operation=="ajouter"){
	$exemple=new task($id_receveur,$message);
	if($exemple->ajouter()==true){
		$reponse=task::retourne_valeur("id_receveur",$id_receveur,"id");
	}else{
		$reponse="il ya un probleme dans l'enregistrement";
	}
	}
	if($operation=="supprimer"){
	if(task::supprimer($id)==1){
		$reponse="ok";
	}else{
		$reponse="il ya un probleme dans l'enregistrement";	
	}
	}
	if($operation=="modifier"){
	if(task::modifier($id,"etat",$valeur)==1){
		$reponse="ok";
	}else{
		$reponse="il ya un probleme dans l'enregistrement";
	}	
	}

	echo $reponse;
}
?>