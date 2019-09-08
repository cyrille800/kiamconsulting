<?php 
require_once "function.php";
require_once "config.php"; 

	config::connexion();

class message{
	private $id_expediteur;
	private $id_receveur;
	private $message;

function get_id_expediteur(){
	return $this->id_expediteur;
}
function get_id_receveur(){
	return $this->id_receveur;
}
function get_message(){
	return $this->message;
}


function set_id_expediteur($valeur){
	$this->id_expediteur = $valeur;
}
function set_id_receveur($valeur){
	$this->id_receveur = $valeur;
}
function set_message($valeur){
	$this->message = $valeur;
}

public function __construct($a,$b,$c){
	$this->set_id_expediteur($a);
	$this->set_id_receveur($b);
	$this->set_message($c);
}

function ajouter(){

	if(self::verifiers("id",trim($this->get_id_receveur()))==false || $this->get_id_receveur()==0){

		$req=config::$bdd->prepare("insert into message(id_expediteur,id_receveur,message) VALUE(:id_expediteur,:id_receveur,:message)");
		$req->bindValue(':id_expediteur',$this->get_id_expediteur());
		$req->bindValue(':id_receveur',$this->get_id_receveur());
		$req->bindValue(':message',$this->get_message());
	  	if($req->execute()){
	  		return 1;
	  	}
	}else{
		echo "impossible mauvaise requette";		
	}

		  	return 0;
	  	
}

public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->prepare("select * from client where ".$type."=:".$type);
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

	public static function afficher($res){
		$tableau=[];
		$tableaui=[];
		  	$requette=config::$bdd->query("select * from message where (id_expediteur=0 && id_receveur=".$res.") or (id_expediteur=".$res." && id_receveur=0)");
                		while($data=$requette->fetch()){
										if(intval($data["id_expediteur"])==0){
						echo '<div class="kt-chat__message kt-chat__message--right"><div class="kt-chat__user">';
						echo '<span class="kt-userpic kt-userpic--circle kt-userpic--sm">Vous</span></div><div class="kt-chat__text"  style="background-color:#1d1dff;color:white;">'.$data["message"].'</div></div>';
                		}else{
                			echo '<div class="kt-chat__message">
                                <div class="kt-chat__user">
                                    <span class="kt-userpic kt-userpic--circle kt-userpic--sm"> 
                                        <img src="../../assets/Backoffice/media/users/'.$data["id_expediteur"].'.png" alt="image">   
                                    </span>
                                </div>
                                <div class="kt-chat__text" style="background-color:#2d2d2d;color:white;">'.$data["message"].'
                                </div>
                            </div>';
                		}
					}
					}

	public static function afficher_client($res){
		$tableau=[];
		$tableaui=[];
		  	$requette=config::$bdd->query("select * from message where (id_expediteur=0 && id_receveur=".$res.") or (id_expediteur=".$res." && id_receveur=0)");
		  	$o=0;
                		while($data=$requette->fetch()){
										if(intval($data["id_expediteur"])==intval($res)){
						echo '<div class="kt-chat__message kt-chat__message--right"><div class="kt-chat__user">';
						echo '<span class="kt-userpic kt-userpic--circle kt-userpic--sm">Vous</span></div><div class="kt-chat__text" style="background-color:#1d1dff;color:white;">'.$data["message"].'</div></div>';
                		}else{
                			echo '<div class="kt-chat__message">
                                <div class="kt-chat__user">
                                    <span class="kt-userpic kt-userpic--circle kt-userpic--sm"> 
                                        <img src="../../assets/Backoffice/media/users/'.$data["id_expediteur"].'.png" alt="image">   
                                    </span>
                                </div>
                                <div class="kt-chat__text"  style="background-color:#2d2d2d;color:white;">'.$data["message"].'
                                </div>
                            </div>';
                		}
                		$o=1;
					}

					if($o==0){
						echo "<div class='col-5 mx-auto text-center bg-info text-white vide' style='border-radius:5px;'>Aucun message</div>";
					}
					}



	public static function retour_nombre($us,$res){
		$tableau=[];
		$tableaui=[];
		$i=0;
		  	$requette=config::$bdd->query("select * from message where (id_expediteur=".$us." && id_receveur=".$res.") or (id_expediteur=".$res." && id_receveur=".$us.")");
                		while($data=$requette->fetch()){
                			if(intval($data["id_expediteur"])!=intval($us)){
                			$i++;
                		}
						}

						return $i;

	}


	public static function tout_afficher(){
		$tableau=[];
		$tableaui=[];
		$i=0;
		  	$requette=config::$bdd->query("select count(*) from message where id_receveur=0 && etat=0");
             $gt=$requette->fetch();
						return $gt[0];

	}
	public static function tout_afficher_moi($id){
		$tableau=[];
		$tableaui=[];
		$i=0;
		  	$requette=config::$bdd->query("select count(*) from message where id_receveur=".$id." && etat=0");
             $gt=$requette->fetch();
						return $gt[0];

	}


			public static function retourne_valeur($v,$id,$val){
		  	$requette=config::$bdd->query("select * from admin_root where ".$v."='".$id."'");
                		while($data=$requette->fetch()){
  			return $data[$val];
	}

	}


	public static function afficher_dernier($id,$res){
		$tableau=[];
		$tableaui=[];
		  	$requette=config::$bdd->query("select * from message where (id_expediteur=".$id." && id_receveur=".$res.") or (id_expediteur=".$res." && id_receveur=".$id.") order by id desc limit 1");
                		while($data=$requette->fetch()){
					if(intval($data["id_expediteur"])==intval($res)){
                			echo '<div class="kt-chat__message">
                                <div class="kt-chat__user">
                                    <span class="kt-userpic kt-userpic--circle kt-userpic--sm"> 
                                        <img src="../../assets/Backoffice/media/users/'.$res.'.png" alt="image">   
                                    </span>
                                </div>
                                <div class="kt-chat__text kt-bg-light-success">'.$data["message"].'
                                </div>
                            </div>';
                		}
					}

	}

}
?>