<?php 
require_once "function.php";
require_once "config.php";

	config::connexion();

class admin{
	private $pseudo;
	private $email;
	private $password;

function get_pseudo(){
	return $this->pseudo;
}
function get_email(){
	return $this->email;
}
function get_password(){
	return $this->password;
}

function set_pseudo($valeur){
	$this->pseudo = $valeur;
}
function set_email($valeur){
	$this->email = $valeur;
}
function set_password($valeur){
	$this->password = $valeur;
}

public function __construct($a,$b,$c){
	$this->set_pseudo($a);
	$this->set_email($b);
	$this->set_password($c);
}

public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->prepare("select * from admin where ".$type."=:".$type);
		  	$requette->bindValue(":".$type,$valeur);
		  	$requette->execute();
    while($data=$requette->fetch()){
		$i=1;                		
	}

	if($i>=1){
		return false;
	}
	else{
		return true;
	}

	}

public static function verifier($id,$type,$valeur){
		$i=0;
		  	$requette=config::$bdd->prepare("select * from admin where ".$type."=:".$type." and id!=:id");
		  			  	$requette->bindValue(":".$type,$valeur);
		  			  	$requette->bindValue(":id",$id);
		  	$requette->execute();
                		while($data=$requette->fetch()){
		$i=1;                		
	}

	if($i>=1){
		return false;
	}
	else{
		return true;
	}

	}

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->query("select * from admin where ".$v."='".$id."'");
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}

public static function nombre($v,$id){
	$requette=config::$bdd->prepare("select count(*) from admin where ".$v."=:".$v);
	$requette->bindValue(":".$v,$id);
	$requette->execute();
    $data=$requette->fetch();
	return $data[0];

	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from admin where id=:id");
	  	if($req->execute([
		':id'=>intval($id)]
	  	)){
	  		$req=config::$bdd->prepare("delete from proccedure where id_active=:id_active");
	  		$req->execute([
		':id_active'=>intval($id)]
	  	);
	  		return 1;
	  	}else{
	  		return 0;
	  	}
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update admin set ".$e."=:".$e." where id=:id");
		$req->bindValue(':id',$id);
		if($e=="password"){
			$req->bindValue(':'.$e,md5($i));
		}else{
		$req->bindValue(':'.$e,$i);
		}	
		

	  	if($req->execute()){
	  		return true;
	  	}else{
	  		return false;
	  	}
	}
	

}
?>
