<?php 

include_once "class_client.php";
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
if(verification_post(["username","email","password","type"])==1 && !isset($_POST["operation"])){
	$exemple=new client($username,$email,$password,$type);
	if($exemple->ajouter()==true){
		$reponse="ok";
	}else{
		$reponse="il ya un probleme dans l'enregistrement'";
	}
}else{
	if(isset($_POST["operation"])){
		if($operation=="supprimer"){
			if(client::supprimer($id)==1){
				$reponse="ok";
			}else{
				$reponse="opération echoué";
			}
		}else{
		if($operation=="modifier"){
			client::modifier($id,"username",$username);
			client::modifier($id,"email",$email);
			client::modifier($id,"password_client",$password);
		}	
		}
	}else{
		$reponse="remplir toutes les case";
	}
}

echo $reponse;
?>