<?php

include_once "class_commentaire.php";

$method = $_SERVER['REQUEST_METHOD'];
$reponse="";
if ($method == 'POST') {
    extract($_POST);
    if($operation=="ajouter"){
        $commentaire=new Commentaire($idClient,$date,$commentaire,$idCommentaireReponse,$idPost);
        $reponse=json_encode(Commentaire::ajouter($commentaire));
    }
   
}

echo $reponse;


?>