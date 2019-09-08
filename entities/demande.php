<?php 
require_once "config.php";
    config::connexion();
    if(isset($_POST["operation"])){
    	if($_POST["operation"]=="demande"){
    		$requette=config::$bdd->query("update patient set resultat=0 where id_client=".$_POST["id"]);
    		if($requette->execute()){
    			echo "ok";
    		}
    	}
    }
?>