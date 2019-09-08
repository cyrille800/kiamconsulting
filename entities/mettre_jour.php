<?php 

require_once "class_client.php"; 
require_once "class_paiement.php"; 

if(isset($_POST["id_client"])){
	          $tableau=explode(",",$_POST["code"]);
    foreach ($tableau as $key => $value) {
      if($value!=""){
        $requette=config::$bdd->query("update paiement_client set etat=1 where id_client=".$_POST["id_client"]." && id_paiement=".$value);
      } 
    }
}
?>