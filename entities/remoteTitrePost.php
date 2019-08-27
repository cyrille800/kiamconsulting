<?php 
include_once "class_post.php";
$reponse="";
if (!empty($_POST["Titre"])) {
    extract($_POST);
    $reponse=(Post::verifier($Titre))?"false":"true";   
}
 echo $reponse;


?>
