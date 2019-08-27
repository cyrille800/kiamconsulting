<?php 
include_once "class_categorie.php";
$reponse="false";
if (!empty($_POST["Titre"])) {
    extract($_POST);
    $reponse=(Categorie::verifier($Titre))?"false":"true";   
}
 echo $reponse;

?>