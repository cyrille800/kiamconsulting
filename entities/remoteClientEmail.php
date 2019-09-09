<?php 
include_once "class_client.php";
include_once "class_admin.php";

$reponse="";
if (!empty($_POST["email"])) {
    extract($_POST);
    $reponse=(client::verifiers("email",$email))?"true":"false";
    if($reponse=="true"){
    $reponse=(admin::verifiers("email",$email))?"true":"false"; 	
    }  
}
echo $reponse;
?>
