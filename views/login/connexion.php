<?php 
include "../../entities/config.php";

config::connexion();


if(!empty($_POST["login"]) && !empty($_POST["password"]) )
{
    extract($_POST);
      	$sql="SELECT COUNT(*) as 'nombre' FROM utilisateur where login=:login and password=:password";
		try
		{
	     $req=config::$bdd->prepare($sql);
        $req->bindValue(':login',$login);
        $req->bindValue(':password',$password);
        if($req->execute()){
            $rows=$req->fetchAll();
            if($rows[0]["nombre"]!='0'){
              
                echo $login;
            }
            else{
                echo "negatif";
            }
        }else{
            echo "negatif";
        }
		
}
    catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	


}
else echo"negatif";

?>
