<?php 
require_once "function.php";
require_once "config.php"; 
	config::connexion();

class proccedure{
	private $titre;
	private $description;
	private $fichier;
	private $id_active;

function get_titre(){
	return $this->titre;
}
function get_description(){
	return $this->description;
}
function get_fichier(){
	return $this->fichier;
}
function get_id_active(){
	return $this->id_active;
}

function set_titre($valeur){
	$this->titre = $valeur;
}
function set_description($valeur){
	$this->description = $valeur;
}
function set_fichier($valeur){
	$this->fichier = $valeur;
}
function set_id_active($valeur){
	$this->id_active = $valeur;
}

public function __construct($a,$b,$c,$d){
	$this->set_titre($a);
	$this->set_description($b);
	$this->set_fichier($c);
	$this->set_id_active($d);
}

function ajouter(){
	if(self::verifiers("titre",$this->get_titre(),$this->get_id_active())==true){
		$req=config::$bdd->prepare("insert into proccedure(titre,description,fichier,id_active) VALUE(:titre,:description,:fichier,:id_active)");
		$req->bindValue(':titre',$this->get_titre());

		$req->bindValue(':description',$this->get_description());
		$req->bindValue(':fichier',$this->get_fichier());
		$req->bindValue(':id_active',$this->get_id_active());
	  	if($req->execute()){
	  		return 1;
	  	}
	}else{
		echo "cette titre existe deja <br>";
	}

		  	return 0;
	  	
}

public static function verifiers($type,$valeur,$id){
		$i=0;
		  	$requette=config::$bdd->query("select * from proccedure where ".$type."='".$valeur."' && id_active=".$id);
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
		  	$requette=config::$bdd->query("select * from proccedure where ".$type."='".$valeur."' and id!=".$id);
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

	public static function afficher($id){
		$tableau=[];
		$tableaui=[];
		$o=0;
		  	$requette=config::$bdd->query("select * from proccedure where id_active=".intval($id));
                		    echo "<tr><td colspan='7' class='text-center'><button type='button' id='o' class='btn btn-sm btn-primary' data-toggle='modal' data-target='#exampleModal'><span class='la la-plus-square'></span></button></td></tr>";
                		while($data=$requette->fetch()){
                			$o=1;
					echo '<tr><td class="text-center">'.$data["id"].'</td><td  class="text-center">'.$data["titre"].'</td><td  class="text-center">'.$data["description"].'</td><td  class="text-center">';
if($data["fichier"]==1){
	echo "oui";
}else{
	echo "non";
}
					echo '</td><td  class="text-center"> <button type="button" id="'.$data["id"].'" class="btn btn-sm btn-primary valider" style="display:none;">valider</button> <button type="button" title="Edit details"  id="'.$data["id"].'"  class="btn btn-sm btn-clean btn-icon btn-icon-md modifier"  data-toggle="modal" data-target="#exampleModal"><i class="la la-edit"></i></button>&nbsp;&nbsp;&nbsp;<button type="button" id="'.$data["id"].'" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md supprimer"><i class="la la-trash"></i></button></td></tr>';
                		}

                		                		if($o==0){
                			echo "<tr><td colspan='7' class='text-center'>vide</td></tr>";
                		}

	}

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->query("select * from proccedure where ".$v."='".$id."'");
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from proccedure where id=:id");
	  	if($req->execute([
		':id'=>intval($id)]
	  	)){
	  		return 1;
	  	}else{
	  		return 0;
	  	}
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update proccedure set ".$e."=:".$e." where id=:id");
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