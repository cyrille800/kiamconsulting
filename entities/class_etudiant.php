<?php 
require_once "function.php";
require_once "config.php"; 
	config::connexion();

class etudiant{
  
	private $nom;
	private $prenom;
	private $sexe;
	private $id_client;
	private $pays;
	private $ville;
	private $niveau_scolaire;
	private $etablissement;
	
    
function get_nom(){
	return $this->nom;
}

function get_prenom(){
	return $this->prenom;
}
function get_sexe(){
	return $this->sexe;
}
function get_id_client(){
	return $this->id_client;
}

function get_pays(){
	return $this->pays;
}
function get_ville(){
	return $this->ville;
}

function get_niveau_scolaire(){
	return $this->niveau_scolaire;
}
function get_etablissement(){
	return $this->etablissement;
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
function set_id_client($valeur){
	$this->id_client = $valeur;
}

function set_pays($valeur){
	 $this->pays=$valeur;
}
function set_ville($valeur){
	 $this->ville=$valeur;
}

function set_niveau_scolaire($valeur){
	 $this->niveau_scolaire=$valeur;
}
function set_etablissement($valeur){
	 $this->etablissement=$valeur;
}

public function __construct($a,$b,$c,$d,$e,$f,$g,$h){
	$this->set_nom($a);
	$this->set_prenom($b);
	$this->set_sexe($c);
    $this->set_id_client($d);
    $this->set_pays($e);
    $this->set_ville($f);
    $this->set_niveau_scolaire($g);
    $this->set_etablissement($h);
}

function ajouter(){

	if(self::verifiers("id_client",$this->get_id_client())==true){

		$req=config::$bdd->prepare("insert into etudiant(nom,prenom,sexe,id_client,pays,ville,niveau_scolaire,etablissement,ecole_choisie,specialite,resultat) VALUE(:nom,:prenom,:sexe,:id_client,:pays,:ville,:niveau_scolaire,:etablissement,0,'',0)");
		$req->bindValue(':nom',$this->get_nom());
		$req->bindValue(':prenom',$this->get_prenom());
		$req->bindValue(':sexe',$this->get_sexe());
		$req->bindValue(':id_client',$this->get_id_client());
		$req->bindValue(':pays',$this->get_pays());
		$req->bindValue(':ville',$this->get_ville());
		$req->bindValue(':niveau_scolaire',$this->get_niveau_scolaire());
		$req->bindValue(':etablissement',$this->get_etablissement());		
	  	if($req->execute()){
	  		return 1;
	  	}
	}else{
		echo "cette identifiant existe deja <br>";
	}

		  	return 0; 	
}

public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->prepare("select * from etudiant where ".$type."=:".$type);
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
		  	$requette=config::$bdd->prepare("select * from etudiant where ".$type."=:".$type." and id!=:id");
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

	public static function afficher(){
		$tableau=[];
		$tableaui=[];
		$o=0;
		  	$requette=config::$bdd->query("select * from etudiant");
                		while($data=$requette->fetch()){
                			$o=1;
                			$req=explode(",",$data["id_client"]);
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
	$requette=config::$bdd->prepare("select * from etudiant where ".$v."=:".$v);
	$requette->bindValue(":".$v,$id);
	$requette->execute();
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