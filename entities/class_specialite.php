<?php 
require_once "function.php";
require_once "config.php"; 
	config::connexion();

class specialite{
	private $titre;

function get_titre(){
	return $this->titre;
}

function set_titre($valeur){
	$this->titre = $valeur;
}

public function __construct($b){
	$this->set_titre($b);
}

function ajouter(){
	if(self::verifiers("titre",$this->get_titre())==true){
		$req=config::$bdd->prepare("insert into specialite(titre) VALUE(:titre)");
		$req->bindValue(':titre',$this->get_titre());
	  	if($req->execute()){
	  		return 1;
	  	}
	  }else{
		  echo "ce titre existe deja <br>";	
	  }
	   return 0;
	  	
}

public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from specialite where ".$type."='".$valeur."'");
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
		  	$requette=config::$bdd->query("select * from specialite where ".$type."='".$valeur."' and id!=".$id);
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
		  	$requette=config::$bdd->query("select * from specialite");
                		while($data=$requette->fetch()){
					echo "<tr><td class='text-center'>".$data['id']."</td><td class='text-center'>".$data['titre']."</td><td class='text-center'><button type='button'  id='".$data['id']."'  class='btn btn-sm btn-clean btn-icon btn-icon-md modifier' ><i class='la la-edit'></i></button>&nbsp;&nbsp;&nbsp;<button type='button' id='".$data['id']."' title='Delete' class='btn btn-sm btn-clean btn-icon btn-icon-md supprimer'><i class='la la-trash'></i></button></td></tr>";
                		}

	}

	public static function afficher_formulaire(){
		$tableau=[];
		$tableaui=[];
		  	$requette=config::$bdd->query("select * from specialite");
                		while($data=$requette->fetch()){
					echo "<div class='dropdown-item'><label class='kt-checkbox kt-checkbox--bold kt-checkbox--brand'>
								<input type='checkbox' name='specialite[]' value='".$data['titre']."' ";
								echo "> ".$data['titre']."
								<span></span>
							</label></div>";
                		}

	}

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->query("select * from specialite where ".$v."='".$id."'");
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from specialite where id=:id");
	  	if($req->execute([
		':id'=>intval($id)]
	  	)){
	  		return 1;
	  	}else{
	  		return 0;
	  	}
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update specialite set ".$e."=:".$e." where id=:id");
		$req->bindValue(':id',$id);
		if($e!="password"){
		$req->bindValue(':'.$e,$i);	
	}else{
		$req->bindValue(':'.$e,md5($i));	
	}
		

	  	if($req->execute()){
	  		return true;
	  	}else{
	  		return false;
	  	}
	}

}
?>