<?php 
require_once "function.php";
require_once "config.php"; 
	config::connexion();

class concours{
	private $titre;
	private $description;
	private $date_concours;
	private $heure;

function get_titre(){
	return $this->titre;
}
function get_description(){
	return $this->description;
}
function get_date_concours(){
	return $this->date_concours;
}
function get_heure(){
	return $this->heure;
}

function set_titre($valeur){
	$this->titre = $valeur;
}
function set_description($valeur){
	$this->description = $valeur;
}
function set_date_concours($valeur){
	$this->date_concours = $valeur;
}
function set_heure($valeur){
	$this->heure = $valeur;
}

public function __construct($a,$b,$c,$d){
	$this->set_titre($a);
	$this->set_description($b);
	$this->set_date_concours($c);
	$this->set_heure($d);
}

function ajouter(){
	if(self::verifiers("titre",$this->get_titre())==true){
	if(self::verifiers("date_concour",$this->get_date_concours())==true){
		$req=config::$bdd->prepare("insert into concours(titre,description,date_concour,heure) VALUE(:titre,:description,:date_concour,:heure)");
		$req->bindValue(':titre',$this->get_titre());

		$req->bindValue(':description',$this->get_description());
		$req->bindValue(':date_concour',$this->get_date_concours());
		$req->bindValue(':heure',$this->get_heure());
	  	if($req->execute()){
	  		return 1;
	  	}
	}else{
		echo "ce date est deja utilisé <br>";		
	}
	}else{
		echo "ce titre existe deja <br>";
	}

		  	return 0;
	  	
}

public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from concours where ".$type."='".$valeur."'");
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
		  	$requette=config::$bdd->query("select * from concours where ".$type."='".$valeur."' and id!=".$id);
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
		  	$requette=config::$bdd->query("select * from concours");
                		while($data=$requette->fetch()){
                			$o=1;
                			$req=explode(",",$data["heure"]);
					echo '<tr><td class="text-center">'.$data["id"].'</td><td  class="text-center"><a href="consulter_quizz.php?id='.$data["id"].'">'.$data["titre"].'</a></td><td  class="text-center">'.$data["date_concour"].'</td><td  class="text-center">';
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
					echo $req[1].'</td><td  class="text-center row"><span class="col-xl-8">'.$data["description"].'</span></td><td  class="text-center"> <button type="button" id="'.$data["id"].'" class="btn btn-sm btn-primary valider" style="display:none;">valider</button> <button type="button" title="Edit details"  id="'.$data["id"].'"  class="btn btn-sm btn-clean btn-icon btn-icon-md modifier"><i class="la la-edit"></i></button>&nbsp;&nbsp;&nbsp;<button type="button" id="'.$data["id"].'" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md supprimer"><i class="la la-trash"></i></button></td></tr>';
                		}
                		if($o==0){
                			echo "<tr><td colspan='7' class='text-center'>vide</td></tr>";
                		}

	}

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->query("select * from concours where ".$v."='".$id."'");
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from concours where id=:id");
	  	if($req->execute([
		':id'=>intval($id)]
	  	)){
	  		return 1;
	  	}else{
	  		return 0;
	  	}
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update concours set ".$e."=:".$e." where id=:id");
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