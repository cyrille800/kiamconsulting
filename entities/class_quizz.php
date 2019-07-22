<?php 
require_once "function.php";
require_once "config.php"; 
	config::connexion();

class quizz{
	private $id_concour;
	private $question;
	private $reponse;
	private $autre_reponse;

function get_id_concour(){
	return $this->id_concour;
}
function get_question(){
	return $this->question;
}
function get_reponse(){
	return $this->reponse;
}
function get_autre_reponse(){
	return $this->autre_reponse;
}

function set_id_concour($valeur){
	$this->id_concour = $valeur;
}
function set_question($valeur){
	$this->question = $valeur;
}
function set_reponse($valeur){
	$this->reponse = $valeur;
}
function set_autre_reponse($valeur){
	$this->autre_reponse = $valeur;
}

public function __construct($a,$b,$c,$d){
	$this->set_id_concour($a);
	$this->set_question($b);
	$this->set_reponse($c);
	$this->set_autre_reponse($d);
}

function ajouter(){
	if(self::verifiers("question",$this->get_question())==true){
		$req=config::$bdd->prepare("insert into qizz(id_concour,question,reponse,autre_reponse) VALUE(:id_concour,:question,:reponse,:autre_reponse)");
		$req->bindValue(':id_concour',$this->get_id_concour());

		$req->bindValue(':question',$this->get_question());
		$req->bindValue(':reponse',$this->get_reponse());
		$req->bindValue(':autre_reponse',$this->get_autre_reponse());
	  	if($req->execute()){
	  		return 1;
	  	}
	}else{
		echo "cette question existe deja <br>";
	}

		  	return 0;
	  	
}

public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from qizz where ".$type."='".$valeur."'");
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
		  	$requette=config::$bdd->query("select * from qizz where ".$type."='".$valeur."' and id!=".$id);
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
		  	$requette=config::$bdd->query("select * from qizz");
                		    echo "<tr><td colspan='7' class='text-center'><button type='button' id='o' class='btn btn-sm btn-primary' data-toggle='modal' data-target='#exampleModal'><span class='la la-plus-square'></span></button></td></tr>";
                		while($data=$requette->fetch()){
                			$o=1;
                			$req=explode(",",$data["autre_reponse"]);
					echo '<tr><td class="text-center">'.$data["id"].'</td><td  class="text-center">'.$data["id_concour"].'</td><td  class="text-center">'.$data["question"].'</td><td  class="text-center">'.$data["reponse"].'</td><td  class="text-center row"><span class="col-xl-8">';
$i=explode(";",$data["autre_reponse"]);
foreach ($i as $key => $value) {
	echo "<div>".$value."</div>";
}
					echo '</span></td><td  class="text-center"> <button type="button" id="'.$data["id"].'" class="btn btn-sm btn-primary valider" style="display:none;">valider</button> <button type="button" title="Edit details"  id="'.$data["id"].'"  class="btn btn-sm btn-clean btn-icon btn-icon-md modifier"  data-toggle="modal" data-target="#exampleModal"><i class="la la-edit"></i></button>&nbsp;&nbsp;&nbsp;<button type="button" id="'.$data["id"].'" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md supprimer"><i class="la la-trash"></i></button></td></tr>';
                		}

                		                		if($o==0){
                			echo "<tr><td colspan='7' class='text-center'>vide</td></tr>";
                		}

	}

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->query("select * from qizz where ".$v."='".$id."'");
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from qizz where id=:id");
	  	if($req->execute([
		':id'=>intval($id)]
	  	)){
	  		return 1;
	  	}else{
	  		return 0;
	  	}
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update qizz set ".$e."=:".$e." where id=:id");
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