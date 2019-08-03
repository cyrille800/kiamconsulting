<?php 
require_once "function.php";
require_once "config.php"; 
	config::connexion();

class details_plus{
	private $titre;
	private $description;
	private $id_ecole;

function get_titre(){
	return $this->titre;
}
function get_description(){
	return $this->description;
}
function get_id_ecole(){
	return $this->id_ecole;
}

function set_titre($valeur){
	$this->titre = $valeur;
}
function set_description($valeur){
	$this->description = $valeur;
}
function set_id_ecole($valeur){
	$this->id_ecole = $valeur;
}

public function __construct($a,$b,$c){
	$this->set_titre($a);
	$this->set_description($b);
	$this->set_id_ecole($c);
}

function ajouter(){
	if(self::verifiers("titre",$this->get_titre())==true){
		$req=config::$bdd->prepare("insert into detail_plus(titre,description,id_ecole) VALUE(:titre,:description,:id_ecole)");
		$req->bindValue(':titre',$this->get_titre());

		$req->bindValue(':description',$this->get_description());
		$req->bindValue(':id_ecole',$this->get_id_ecole());
	  	if($req->execute()){
	  		return 1;
	  	}
	}else{
		echo "cette titre existe deja <br>";
	}

		  	return 0;
	  	
}

public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from detail_plus where ".$type."='".$valeur."'");
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
		  	$requette=config::$bdd->query("select * from detail_plus where ".$type."='".$valeur."' and id!=".$id);
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
		  	$requette=config::$bdd->query("select * from detail_plus where id_ecole=".$id);
                		$i=0;
                		while($data=$requette->fetch()){
					echo '					<div class="card">
						<div class="card-header" id="id1'.$i.'">
							<div class="card-title collapsed" data-toggle="collapse" data-target="#id'.$i.'" aria-expanded="false" aria-controls="id'.$i.'">
								<i class="la la-globe" style="font-size:25px;"></i>
								'.$data["titre"].'
								    	<span style="position:absolute;background:black;color:white;top:20%;cursor:pointer;left:90%;border-radius:10px;width:20px;height:20px;" class="kt-avatar__cancel text-center supprimer_description" data-toggle="kt-tooltip" title="" data-original-title="supprmer" id="'.$data["id"].'">
										<i class="fa fa-times"></i>
									</span>
							</div>
						</div>
						<div id="id'.$i.'" class="collapse" aria-labelledby="id1'.$i.'" data-parent="#accordionExample1" style="">
							<div class="card-body">
								'.$data["description"].'
							</div>
						</div>
					</div>';

					$i++;
                		}

                		if($i==0){
                			  echo '<div class="col-12 bg-white text-black text-center">
    Aucune description
  </div>';
                		}
	}

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->query("select * from detail_plus where ".$v."='".$id."'");
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from detail_plus where id=:id");
	  	if($req->execute([
		':id'=>intval($id)]
	  	)){
	  		return 1;
	  	}else{
	  		return 0;
	  	}
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update detail_plus set ".$e."=:".$e." where id=:id");
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
