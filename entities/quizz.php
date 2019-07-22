<?php 

include_once "class_quizz.php";
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
if(verification_post(["id_concour","question","reponse","autre_reponse"])==1 && !isset($_POST["operation"])){
	$exemple=new quizz($id_concour,$question,$reponse,$autre_reponse);
	if($exemple->ajouter()==true){
		$reponse="ok";
	}else{
		$reponse="il ya un probleme dans l'enregistrement'";
	}
}else{
	if(isset($_POST["operation"])){
		if($operation=="supprimer"){
			if(quizz::supprimer($id)==1){
				$reponse="ok";
			}else{
				$reponse="opération echoué";
			}
		}else{
		if($operation=="modifier"){
			quizz::modifier($id,"question",$question);
			quizz::modifier($id,"reponse",$reponse);
			quizz::modifier($id,"autre_reponse",$autre_reponse);
			$reponse="ok";
		}	
		}
	}else{
		$reponse="remplir toutes les case";
	}
}

echo $reponse;
?>