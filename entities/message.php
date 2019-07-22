<?php 
include_once "function.php";
include_once "class_message.php";
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

if(verification_post(["id_expediteur","id_receveur","message"])==1){
	extract($_POST);
	$exemple=new message($id_expediteur,$id_receveur,$message);
	if($exemple->ajouter()==true){
		echo "ok";
	}else{
		echo "il ya un probleme dans l'enregistrement'";
	}
}else{
	if(isset($_GET["operation"])){
		extract($_GET);
		if(!empty($_GET["operation"]) && $_GET["operation"]=="nombre_message"){
			echo message::retour_nombre($id,$id_client);
		}else{
			if($_GET["operation"]=="afficher_dernier"){
			message::afficher_dernier($id,$id_client);	
			}else{
			if($_GET["operation"]=="temps"){
                                  	$difference=difference($data);
                                    	if(stristr($difference,"secondes")==true){
                                    		echo "à l'instant";
                                    	}else{
                                    		echo $difference;
                                    	}
			}	
			}
		}
	}else{
	echo "veuillez remplir toutes les cases";
	}
}

?>