<?php 

include_once "class_admin.php";
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

if(verification_post(["mail","login","password","role"])==1){
	extract($_POST);
	$exemple=new admin($login,$mail,$password,"","","","",$role);
	if($exemple->ajouter()==true){
		echo "ok";
	}else{
		echo "il ya un probleme dans l'enregistrement'";
	}
}else{
	if(isset($_GET["operation"])){
		if(!empty($_GET["operation"]) && $_GET["operation"]=="delete"){
			extract($_GET);
			admin::supprimer($id_client);
		}
}else{
		if(isset($_POST["operation"])){
			if($_POST["operation"]=="modifier"){
				extract($_POST);

				if(isset($_POST["mail"])){
					if(admin::verifier($id,"email",$mail)==false){
						echo "ce mail existe deja. <br>";
					}
				}
					if(isset($_POST["login"])){
						if(admin::verifier($id,"username",$login)==false){
							echo "ce login existe deja";
						}

}
	if(isset($_POST["id"])){
		if(verification_post(["mail"])==1){
			if(admin::modifier($id,"email",$mail)==true){
			$reponse="ok";
			}else{
			$reponse="impossible d'effectuer la modification";	
			}
		}

		if(verification_post(["login"])==1){
			if(admin::modifier($id,"username",$login)==true){
			$reponse="ok";
			}else{
			$reponse="impossible d'effectuer la modification";	
			}
		}

		if(verification_post(["role"])==1){
			if(admin::modifier($id,"role",$role)==true){
			$reponse="ok";
			}else{
			$reponse="impossible d'effectuer la modification";	
			}
		}

		if(verification_post(["phone"])==1){
			if(admin::modifier($id,"phone",$phone)==true){
			$reponse="ok";
			}else{
			$reponse="impossible d'effectuer la modification";	
			}
		}

		if(verification_post(["compagny_name"])==1){
			if(admin::modifier($id,"compagny_name",$compagny_name)==true){
			$reponse="ok";
			}else{
			$reponse="impossible d'effectuer la modification";	
			}
		}

		if(verification_post(["nom"])==1){
			if(admin::modifier($id,"nom",$nom)==true){
			$reponse="ok";
			}else{
			$reponse="impossible d'effectuer la modification";	
			}
		}

		if(verification_post(["prenom"])==1){
			if(admin::modifier($id,"prenom",$prenom)==true){
			$reponse="ok";
			}else{
			$reponse="impossible d'effectuer la modification";	
			}
		}

		if(verification_post(["nouveau_password"])==1){
			$i=admin::retourne_valeur("id",$id,"password");
			if($i!=md5($ancien_password)){
			$reponse="le mot de passe saisi est incorrect";
			}else{
			if(admin::modifier($id,"password",$nouveau_password)==true){
			$reponse="ok";
			}else{
			$reponse="impossible d'effectuer la modification";	
			}
			}
		}

echo $reponse;
			if(!empty($_FILES)){
		$folder="../views/assets/media/users/";
		$temp_name=$_FILES['file']['tmp_name'];
	$location=$folder.$id.".png";
	move_uploaded_file($temp_name,$location);
		}

	
				}		
			}
		}else{
			echo "veuillez remplir toutes les cases";
		}	
}
}

?>