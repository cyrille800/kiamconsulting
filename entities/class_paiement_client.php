<?php 
require_once "function.php";
require_once "config.php";
require_once "class_paiement.php";
	config::connexion();

class paiement_client{
	private $id_paiement;
	private $id_client;

function get_id_paiement(){
	return $this->id_paiement;
}
function get_id_client(){
	return $this->id_client;
}

function set_id_paiement($valeur){
	$this->id_paiement = $valeur;
}
function set_id_client($valeur){
	$this->id_client = $valeur;
}

public function __construct($a,$b){
	$this->set_id_paiement($a);
	$this->set_id_client($b);
}

function ajouter(){
		$req=config::$bdd->prepare("insert into paiement_client (id_paiement,id_client) VALUE(:id_paiement,:id_client)");
		$req->bindValue(':id_paiement',$this->get_id_paiement());
		$req->bindValue(':id_client',$this->get_id_client());
	  	if($req->execute()){
	  		return 1;
	  	}

		  	return 0;
	  	
}


	public static function afficher($id){
		  	$requette=config::$bdd->query("select * from paiement_client where id_client=$id && etat=0");
		  	$o=0;
                		while($data=$requette->fetch()){
                			$o=1;
                			$titre=paiement::retourne_valeur("id",$data["id_paiement"],"titre");
                			$description=paiement::retourne_valeur("id",$data["id_paiement"],"description");
                			$montant=paiement::retourne_valeur("id",$data["id_paiement"],"montant");
                			if($titre!=""){
					echo '<tr><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">'.$titre.'</font></font></td>
                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">'.$description.'</font></font></td>
                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><span class="montant">'.$montant.'</span> <span class="text-primary">XAF</span></font></font></td></tr>';
                			}
}
                		

                		                		if($o==0){
                			echo '<div class="col-12 bg-white text-black text-center">
    rien
  </div>';
                		}

	}

	public static function afficher_admin($id){
		  	$requette=config::$bdd->query("select * from paiement_client where id_paiement=$id && etat=1");
		  	$o=0;
                		while($data=$requette->fetch()){
                			$o=1;
                			$id=$data["id_client"];
					echo '<tr><td class="text-center"><font style="vertical-align: inherit;font-size:15px;"><font style="vertical-align: inherit;">'.$id.'</font></font></td>
                                <td class="text-center"><font style="vertical-align: inherit;font-size:15px;"><font style="vertical-align: inherit;"><a href="../profil.php?id='.$id.'" target="_blank" class="text-primary"><i class="fa fa-user"></i> Consulter le profil</a></font></font></td>
                                </tr>';
}
                		

                		                		if($o==0){
                			echo '<div class="col-12 bg-white text-black text-center">
    rien
  </div>';
                		}

	}

public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->prepare("select * from paiement_client where ".$type."=:".$type);
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
		  	$requette=config::$bdd->prepare("select * from paiement_client where ".$type."=:".$type." and id!=:id");
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

public static function verifier_exite($id_client,$id_paiement){
		$i=0;
		  	$requette=config::$bdd->query("select * from paiement_client where (id_client=".$id_client." && id_paiement=".$id_paiement.") && etat=1");
                		while($data=$requette->fetch()){
		$i=1;                		
	}

	if($i>=1){
		return true;
	}
	else{
		return false;
	}

	}

public static function exite_panier($id_client,$id_paiement){
		$i=0;
		  	$requette=config::$bdd->query("select * from paiement_client where (id_client=".$id_client." && id_paiement=".$id_paiement.") && etat=0");
                		while($data=$requette->fetch()){
		$i=1;                		
	}

	if($i>=1){
		return true;
	}
	else{
		return false;
	}

	}

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->query("select * from paiement_client where ".$v."='".$id."'");
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}

	public static function supprimer($id_client,$id_paiement){
		$req=config::$bdd->prepare("delete from paiement_client where id_client=:id_client && id_paiement=:id_paiement");
	  	if($req->execute([
		':id_client'=>intval($id_client),
		':id_paiement'=>intval($id_paiement)]
	  	)){
	  		return 1;
	  	}else{
	  		return 0;
	  	}
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update paiement_client set ".$e."=:".$e." where id=:id");
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
