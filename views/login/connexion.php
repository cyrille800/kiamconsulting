<?php 
include "../../entities/config.php";

config::connexion();

print_r($_POST);

if(!empty($_POST["email"]) && !empty($_POST["regusername"]) )
{
    extract($_POST);
      	$sql="SELECT COUNT(*) as 'nombre' FROM client where username=:username and email=:email";
		try
		{
	     $req=config::$bdd->prepare($sql);
        $req->bindValue(':username',$regusername);
        $req->bindValue(':email',$email);
        if($req->execute()){
            $rows=$req->fetchAll();
            if($rows[0]["nombre"]!='0'){
              
                echo "true";
            }
            else{
                echo "false";
            }
        }else{
            echo "false";
        }
		
}
    catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	


}
else echo"false";

?>
