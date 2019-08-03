<?php 
require_once "function.php";
require_once "config.php"; 
	config::connexion();

class client{
	private $username;
	private $email;
	private $password;
	private $type;

function get_username(){
	return $this->username;
}
function get_email(){
	return $this->email;
}
function get_password(){
	return $this->password;
}
function get_type(){
	return $this->type;
}

function set_username($valeur){
	$this->username = $valeur;
}
function set_email($valeur){
	$this->email = $valeur;
}
function set_password($valeur){
	$this->password = $valeur;
}
function set_type($valeur){
	$this->type = $valeur;
}

public function __construct($a,$b,$c,$d){
	$this->set_username($a);
	$this->set_email($b);
	$this->set_password($c);
	$this->set_type($d);
}

function ajouter(){
	if(self::verifiers("username",$this->get_username())==true){
	if(self::verifiers("email",$this->get_password())==true){
		$req=config::$bdd->prepare("insert into client(username,email,password,type) VALUE(:username,:email,:password,:type)");
		$req->bindValue(':username',$this->get_username());
		$req->bindValue(':email',$this->get_email());
		$req->bindValue(':password',md5($this->get_password()));
		$req->bindValue(':type',$this->get_type());
	  	if($req->execute()){
			  return "true";
	  	}
	}else{
		return "false";		
	}
	}else{
		return "false";
	}

	  	
}

public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from client where ".$type."='".$valeur."'");
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
		if($type=="password"){
		$requette=config::$bdd->query("select * from client where ".$type."='".md5($valeur)."' and id=".$id);
		}else{
		$requette=config::$bdd->query("select * from client where ".$type."='".$valeur."' and id=".$id);
		}

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

	public static function afficher(){
		$tableau=[];
		$tableaui=[];
		$o=0;
		  	$requette=config::$bdd->query("select * from client");
                		while($data=$requette->fetch()){
                			$o=1;
                			$req=explode(",",$data["type"]);
					echo '<tr><td class="text-center">'.$data["id"].'</td><td  class="text-center"><a href="consulter_quizz.php?id='.$data["id"].'">'.$data["username"].'</a></td><td  class="text-center">'.$data["password"].'</td><td  class="text-center">';
					if(intval($req[0])<10){
						if(isset($req[0][0])){
							if($req[0][0]!='0'){
							echo "0";
							}
						}else{
							echo "0";
						}
					}
					echo $req[0].':';
					if(intval($req[1])<10){
						if(isset($req[1][0])){
							if($req[1][0]!='0'){
							echo "0";
							}
						}else{
							echo "0";
						}
					}
					echo $req[1].'</td><td  class="text-center row"><span class="col-xl-8">'.$data["email"].'</span></td><td  class="text-center"> <button type="button" id="'.$data["id"].'" class="btn btn-sm btn-primary valider" style="display:none;">valider</button> <button type="button" title="Edit details"  id="'.$data["id"].'"  class="btn btn-sm btn-clean btn-icon btn-icon-md modifier"><i class="la la-edit"></i></button>&nbsp;&nbsp;&nbsp;<button type="button" id="'.$data["id"].'" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md supprimer"><i class="la la-trash"></i></button></td></tr>';
                		}
                		if($o==0){
                			echo "<tr><td colspan='7' class='text-center'>vide</td></tr>";
                		}

	}

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->prepare("select * from client where ".$v."=:".$v);
	$requette->bindValue(":".$v,$id);
	$requette->execute();
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}


	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from client where id=:id");
	  	if($req->execute([
		':id'=>intval($id)]
	  	)){
	  		return 1;
	  	}else{
	  		return 0;
	  	}
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update client set ".$e."=:".$e." where id=:id");
		$req->bindValue(':id',$id);
		$req->bindValue(':'.$e,$i);	
		

	  	if($req->execute()){
	  		return true;
	  	}else{
	  		return false;
	  	}
	}

}
?>