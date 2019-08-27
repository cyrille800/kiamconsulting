<?php

include_once "class_categorie.php";

$method = $_SERVER['REQUEST_METHOD'];
$reponse="cela n'a pas marche";
if ($method == 'POST') {
    extract($_POST);
    if ($operation = "inserer") {
        $reponse = Categorie::ajouter($Titre, $Date);
    } else {
        # code...
    }

}
echo $reponse;
?>