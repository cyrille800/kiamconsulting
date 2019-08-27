<?php 
include_once "class_client.php";
$reponse="false";
if (!empty($_POST["regusername"])) {
    extract($_POST);
    $reponse=(client::verifiers("username",$regusername))?"true":"false";   
}
 echo $reponse;
?>