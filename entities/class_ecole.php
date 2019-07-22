<?php 
require_once "function.php";
require_once "config.php"; 
	config::connexion();

class ecole{
	private $titre;
	private $ville;
	private $site;
	private $nombre_place;

function get_titre(){
	return $this->titre;
}
function get_ville(){
	return $this->ville;
}
function get_site(){
	return $this->site;
}
function get_nombre_place(){
	return $this->nombre_place;
}

function set_titre($valeur){
	$this->titre = $valeur;
}
function set_ville($valeur){
	$this->ville = $valeur;
}
function set_site($valeur){
	$this->site = $valeur;
}
function set_nombre_place($valeur){
	$this->nombre_place = $valeur;
}

public function __construct($a,$b,$c,$d){
	$this->set_titre($a);
	$this->set_ville($b);
	$this->set_site($c);
	$this->set_nombre_place($d);
}

function ajouter(){
	if(self::verifiers("titre",$this->get_titre())==true){
	if(self::verifiers("site",$this->get_ville())==true){

		$req=config::$bdd->prepare("insert into school(titre,ville,site,nombre_place) VALUE(:titre,:ville,:site,:nombre_place)");
		$req->bindValue(':titre',$this->get_titre());
		$req->bindValue(':ville',$this->get_ville());
		$req->bindValue(':site',$this->get_site());
		$req->bindValue(':nombre_place',$this->get_nombre_place());
	  	if($req->execute()){
	  		return 1;
	  	}
	}else{
		echo "ce site existe deja <br>";		
	}
	}else{
		echo "ce titre existe deja <br>";
	}

		  	return 0;
	  	
}

public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from school where ".$type."='".$valeur."'");
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
		  	$requette=config::$bdd->query("select * from school where ".$type."='".$valeur."' and id!=".$id);
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
		  	$requette=config::$bdd->query("select * from school");
                		while($data=$requette->fetch()){
					echo '<tr><td class="text-center">'.$data["id"].'</td><td  class="text-center">'.$data["titre"].'</td><td  class="text-center">'.$data["ville"].'</td><td  class="text-center">'.$data["site"].'</td><td  class="text-center">'.$data["nombre_place"].'</td><td  class="text-center"> <button type="button" id="'.$data["id"].'" class="btn btn-sm btn-primary valider" style="display:none;">valider</button> <button type="button" title="Edit details"  id="'.$data["id"].'"  class="btn btn-sm btn-clean btn-icon btn-icon-md modifier"><i class="la la-edit"></i></button>&nbsp;&nbsp;&nbsp;<button type="button" id="'.$data["id"].'" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md supprimer"><i class="la la-trash"></i></button></td></tr>';
                		}

	}

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->query("select * from school where ".$v."='".$id."'");
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from school where id=:id");
	  	if($req->execute([
		':id'=>intval($id)]
	  	)){
	  		return 1;
	  	}else{
	  		return 0;
	  	}
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update school set ".$e."=:".$e." where id=:id");
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