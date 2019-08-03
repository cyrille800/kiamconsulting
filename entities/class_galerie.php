<?php 
require_once "function.php";
require_once "config.php"; 
	config::connexion();

class galerie{
	private $id_ecole;

function get_id_ecole(){
	return $this->id_ecole;
}

function set_id_ecole($valeur){
	$this->id_ecole = $valeur;
}

public function __construct($a){
	$this->set_id_ecole($a);
}

function ajouter(){
		$req=config::$bdd->prepare("insert into galerie(id_ecole) VALUE(:id_ecole)");
		$req->bindValue(':id_ecole',$this->get_id_ecole());
	  	if($req->execute()){
	  		return 1;
	  	}
		  	return 0;
	  	
}

public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from galerie where ".$type."='".$valeur."'");
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
		  	$requette=config::$bdd->query("select * from galerie where ".$type."='".$valeur."' and id!=".$id);
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
		  	$requette=config::$bdd->query("select * from galerie where id_ecole=".$id);
		  	$i=0;
                		while($data=$requette->fetch()){
					if($i%2==0){
						echo '  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="../../../assets/Backoffice/media/galerie/'.$data["id"].$data["id_ecole"].'.png" alt="Card image cap">
    									<span style="position:absolute;background:white;color:blue;top:4%;cursor:pointer;left:90%;border-radius:10px;width:20px;height:20px;" class="kt-avatar__cancel text-center supprimer_photo" data-toggle="kt-tooltip" title="" data-original-title="supprmer"  id="'.$data["id"].'">
										<i class="fa fa-times"></i>
									</span>
  </div>';
					}else{
						echo '  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="../../../assets/Backoffice/media/galerie/'.$data["id"].$data["id_ecole"].'.png" alt="Card image cap">
    									<span style="position:absolute;background:white;color:blue;top:4%;cursor:pointer;left:90%;border-radius:10px;width:20px;height:20px;" class="kt-avatar__cancel text-center supprimer_photo" data-toggle="kt-tooltip" title="" data-original-title="supprmer" id="'.$data["id"].'">
										<i class="fa fa-times"></i>
									</span>
  </div>';
					}
					$i++;
                		}

         if($i==0){
  echo '<div class="col-12 bg-white text-black text-center">
    Aucune image
  </div>';
         }

	}


	public static function afficher_client($id){
		$tableau=[];
		$tableaui=[];
		  	$requette=config::$bdd->query("select * from galerie where id_ecole=".$id);
		  	$i=0;
                		while($data=$requette->fetch()){
					if($i%2==0){
						echo '  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="../../assets/Backoffice/media/galerie/'.$data["id"].$data["id_ecole"].'.png" alt="Card image cap">
    									
  </div>';
					}else{
						echo '  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="../../assets/Backoffice/media/galerie/'.$data["id"].$data["id_ecole"].'.png" alt="Card image cap">
    									
  </div>';
					}
					$i++;
                		}

         if($i==0){
  echo '<div class="col-12 bg-white text-black text-center">
    Aucune image
  </div>';
         }

	}

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->query("select * from galerie where ".$v."='".$id."' order by id desc limit 1");
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from galerie where id=:id");
	  	if($req->execute([
		':id'=>intval($id)]
	  	)){
	  		return 1;
	  	}

	  	return 0;
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update galerie set ".$e."=:".$e." where id=:id");
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