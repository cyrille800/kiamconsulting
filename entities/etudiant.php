<?php 
require_once "function.php";
require_once "config.php"; 
	config::connexion();

class etudiant{
  
	private $nom;
	private $prenom;
	private $sexe;
	private $adresseadresseMail;
	private $username;
	private $password;
	
    
function get_nom(){
	return $this->nom;
}

function get_prenom(){
	return $this->prenom;
}
function get_sexe(){
	return $this->sexe;
}
function get_adresseMail(){
	return $this->adresseMail;
}

function get_username(){
	return $this->username;
}
function get_password(){
	return $this->password;
}

function set_nom($valeur){
	$this->nom = $valeur;
}
function set_prenom($valeur){
	$this->prenom = $valeur;
}
function set_sexe($valeur){
	$this->sexe = $valeur;
}
function set_adresseMail($valeur){
	$this->adresseMail = $valeur;
}

function set_username($valeur){
	 $this->username=$valeur;
}
function set_password($valeur){
	 $this->password=$valeur;
}

public function __construct($a,$b,$c,$d,$e,$f){
	$this->set_nom($a);
	$this->set_prenom($b);
	$this->set_sexe($c);
    $this->set_adresseMail($d);
    $this->set_username($e);
    $this->set_password($f);
}

function ajouter(){
	if(self::verifiers("adresseMail",$this->get_adresseMail())==true && self::verifiers("username",$this->get_username())==true ){

		$req=config::$bdd->prepare("insert into etudiant(nom,prenom,sexe,adresseMail,username,password) VALUE(:nom,:prenom,:sexe,:adresseMail,:username,:password)");
		$req->bindValue(':nom',$this->get_nom());

		$req->bindValue(':prenom',$this->get_prenom());
		$req->bindValue(':sexe',$this->get_sexe());
		$req->bindValue(':adresseMail',$this->get_adresseMail());
		$req->bindValue(':username',$this->get_adresseMail());
		$req->bindValue(':password',$this->get_adresseMail());
		
	  	if($req->execute()){
	  		return 1;
	  	}
	else{
		echo "ce date est deja utilisé <br>";		
	}
	}else{
		echo "ce nom existe deja <br>";
	}

		  	return 0;
	  	
}

public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from etudiant where ".$type."='".$valeur."'");
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
		  	$requette=config::$bdd->query("select * from etudiant where ".$type."='".$valeur."' and id!=".$id);
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
		  	$requette=config::$bdd->query("select * from etudiant");
                		while($data=$requette->fetch()){
                			$o=1;
                			$req=explode(",",$data["adresseMail"]);
					echo '<tr><td class="text-center">'.$data["id"].'</td><td  class="text-center"><a href="consulter_quizz.php?id='.$data["id"].'">'.$data["nom"].'</a></td><td  class="text-center">'.$data["date_concour"].'</td><td  class="text-center">';
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
					echo $req[1].'</td><td  class="text-center row"><span class="col-xl-8">'.$data["prenom"].'</span></td><td  class="text-center"> <button type="button" id="'.$data["id"].'" class="btn btn-sm btn-primary valider" style="display:none;">valider</button> <button type="button" title="Edit details"  id="'.$data["id"].'"  class="btn btn-sm btn-clean btn-icon btn-icon-md modifier"><i class="la la-edit"></i></button>&nbsp;&nbsp;&nbsp;<button type="button" id="'.$data["id"].'" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md supprimer"><i class="la la-trash"></i></button></td></tr>';
                		}
                		if($o==0){
                			echo "<tr><td colspan='7' class='text-center'>vide</td></tr>";
                		}

	}

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->query("select * from etudiant where ".$v."='".$id."'");
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from etudiant where id=:id");
	  	if($req->execute([
		':id'=>intval($id)]
	  	)){
	  		return 1;
	  	}else{
	  		return 0;
	  	}
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update etudiant set ".$e."=:".$e." where id=:id");
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