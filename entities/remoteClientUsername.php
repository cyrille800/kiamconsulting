<?php 
include_once "class_client.php";
$reponse="false";
if (!empty($_POST["username"])) {
    extract($_POST);
    $reponse=(client::verifiers("username",$username))?"true":"false";   
}
 echo $reponse;
?>