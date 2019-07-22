<?php 
require_once "function.php";
require_once "config.php"; 
	config::connexion();

class task{
	private $id_receveur;
	private $message;

function get_id_receveur(){
	return $this->id_receveur;
}
function get_message(){
	return $this->message;
}

function set_id_receveur($valeur){
	$this->id_receveur = $valeur;
}
function set_message($valeur){
	$this->message = $valeur;
}

public function __construct($a,$b){
	$this->set_id_receveur($a);
	$this->set_message($b);
}

function ajouter(){
		$req=config::$bdd->prepare("insert into task(id_receveur,message) VALUE(:id_receveur,:message)");
		$req->bindValue(':id_receveur',$this->get_id_receveur());
		$req->bindValue(':message',$this->get_message());
	  	if($req->execute()){
	  		return 1;
	  	}
		  	return 0;
	  	
}

public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from task where ".$type."='".$valeur."'");
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
		  	$requette=config::$bdd->query("select * from task where ".$type."='".$valeur."' and id!=".$id);
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

	public static function afficher($id1,$id){
		$tableau=[];
		$tableaui=[];
		  	$requette=config::$bdd->query("select * from task where id_receveur=".$id);
                		while($data=$requette->fetch()){
					echo '<tr><td><label class="';
					if(intval($id1)!=intval($id)){
						echo "kt-checkbox kt-checkbox--disabled";
					}else{
						echo "kt-checkbox";
					}
					echo '"><input type="checkbox" name="task"  id="'.$data["id"].'" ';
					if(intval($data["etat"])==1){
						echo " checked=checked";
					}
					echo '>'.$data["message"].'<span></span></label></td><td class="pl-4"><span class="btn btn-danger  supprimer_task" id="'.$data["id"].'"style="cursor:pointer;" ><i class="la la-cut"></i></span></td></tr>';
                		}

	}

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->query("select * from task where ".$v."='".$id."'");
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from task where id=:id");
	  	$req->execute([
		':id'=>intval($id)]
	  	) or die(print_r($req,true));
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update task set ".$e."=:".$e." where id=:id");
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