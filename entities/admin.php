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
extract($_POST);
$nono="remplir tous les champs";
if(isset($_POST["nouveau_password"])){
	admin::modifier($id,"password",$nouveau_password);
	$nono="ok";
}
if(isset($_POST["pseudo"])){
	admin::modifier($id,"username",$pseudo);
	admin::modifier($id,"email",$email);
	$nono="ok";
}
if(isset($_POST["operation"])){
	$nono=md5($pass);
}

echo $nono;
?>