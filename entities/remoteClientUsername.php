<?php 
include_once "class_client.php";
include_once "class_admin.php";

$reponse="false";
if (!empty($_POST["regusername"])) {
    extract($_POST);
    $reponse=(client::verifiers("username",$regusername))?"true":"false"; 
    if($reponse=="true"){
    $reponse=(admin::verifiers("username",$regusername))?"true":"false"; 	
    }  
}
 echo $reponse;
?>