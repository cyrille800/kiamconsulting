<?php 
var_dump($_POST);
if(!empty($_POST)){
    extract($_POST);
    if(isset($email)) echo "false";
    else echo "false";
}
?>