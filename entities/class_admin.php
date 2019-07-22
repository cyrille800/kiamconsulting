<?php 
require_once "function.php";
require_once "config.php"; 
	config::connexion();

class admin{
	private $username;
	private $email;
	private $password;
	private $nom;
	private $prenom;
	private $compagny_name;
	private $phone;
	private $date_ajout;
	private $role;

function get_username(){
	return $this->username;
}
function get_email(){
	return $this->email;
}
function get_password(){
	return $this->password;
}
function get_nom(){
	return $this->nom;
}
function get_prenom(){
	return $this->prenom;
}
function get_compagny_name(){
	return $this->compagny_name;
}
function get_phone(){
	return $this->phone;
}
function get_role(){
	return $this->role;
}


function set_username($valeur){
	$this->username = $valeur;
}
function set_email($valeur){
	$this->email = $valeur;
}
function set_password($valeur){
	$this->password = $valeur;
}
function set_nom($valeur){
	$this->nom = $valeur;
}
function set_prenom($valeur){
	$this->prenom = $valeur;
}
function set_compagny_name($valeur){
	$this->compagny_name = $valeur;
}
function set_phone($valeur){
	$this->phone = $valeur;
}
function set_role($valeur){
	$this->role = $valeur;
}

public function __construct($a,$b,$c,$d,$e,$f,$g,$i){
	$this->set_username($a);
	$this->set_email($b);
	$this->set_password($c);
	$this->set_nom($d);
	$this->set_prenom($e);
	$this->set_compagny_name($f);
	$this->set_phone($g);
	$this->set_role($i);
}

function ajouter(){
	if(self::verifiers("username",$this->get_username())==true){
	if(self::verifiers("email",$this->get_email())==true){

		$req=config::$bdd->prepare("insert into admin_root(username,email,password,role) VALUE(:username,:email,:password,:role)");
		$req->bindValue(':username',$this->get_username());
		$req->bindValue(':email',$this->get_email());
		$req->bindValue(':password',md5($this->get_password()));
		$req->bindValue(':role',$this->get_role());
	  	if($req->execute()){
	  		$folder="../views/assets/media/users/";
	  		$id=self::retourne_valeur("username",$this->get_username(),"id");
		copy($folder."inviter.png",$folder.$id.".png");
	  		return 1;
	  	}
	}else{
		echo "ce mail existe deja";		
	}
	}else{
		echo "ce login existe deja";
	}

		  	return 0;
	  	
}

public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from admin_root where ".$type."='".$valeur."'");
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
		  	$requette=config::$bdd->query("select * from admin_root where ".$type."='".$valeur."' and id!=".$id);
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
		  	$requette=config::$bdd->query("select * from admin_root where id!=1");
                		while($data=$requette->fetch()){
					echo '
                            <div class="kt-widget__item">
                                <span class="kt-userpic kt-userpic--circle"> 
                                    <img src="assets/media/users/'.$data["id"].'.png" alt="image">   
                                </span>

                                <div class="kt-widget__info">
                                    <div class="kt-widget__section">
                                        <a href="?id='.$data["id"].'" class="kt-widget__username">'.$data["username"].'</a>
                                    </div>

                                    <span class="kt-widget__desc" style="font-size:11px;"">
                                       '.$data["email"].' 
                                    </span>
                                </div>

                                <div class="kt-widget__action">
                                    <span class="kt-widget__date"  style="font-size:10px;">';
                                    if(intval($data["etat"])==1){
                                    	echo "<span class='kt-badge kt-badge--dot kt-badge--success'></span> actif";
                                    }else{
                                    	$difference=difference($data["date_deconnexion"]);
                                    	echo '<span class="kt-badge kt-badge--dot kt-badge--danger"></span>&nbsp;&nbsp;&nbsp;';
                                    	if(stristr($difference,"secondes")==true){
                                    		echo "à l'instant";
                                    	}else{
                                    		echo $difference;
                                    	}
                                    }
                                    echo '</span>
                                </div>
                            </div>
                        
                        ';
                		}

	}

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->query("select * from admin_root where ".$v."='".$id."'");
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from admin_root where id=:id");
	  	$req->execute([
		':id'=>intval($id)]
	  	) or die(print_r($req,true));

		$req=config::$bdd->prepare("delete from message where id_receveur=:id_receveur || id_expediteur=:id_expediteur");
	  	$req->execute([
		':id_receveur'=>intval($id),
		':id_expediteur'=>intval($id)]
	  	) or die(print_r($req,true));
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update admin_root set ".$e."=:".$e." where id=:id");
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