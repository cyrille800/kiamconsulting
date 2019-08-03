<?php 
include_once "class_client.php";
$reponse="";
if (!empty($_POST["email"])) {
    extract($_POST);
    $reponse=(client::verifiers("email",$email))?"true":"false";
}
echo $reponse;
?>
