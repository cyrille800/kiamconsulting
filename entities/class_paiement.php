<?php 
require_once "function.php";
require_once "config.php";
require_once "class_paiement_client.php";
require_once "class_client.php";
	config::connexion();

class paiement{
	private $titre;
	private $description;
	private $montant;
	private $type;

function get_titre(){
	return $this->titre;
}
function get_description(){
	return $this->description;
}
function get_montant(){
	return $this->montant;
}
function get_type(){
	return $this->type;
}

function set_titre($valeur){
	$this->titre = $valeur;
}
function set_description($valeur){
	$this->description = $valeur;
}
function set_montant($valeur){
	$this->montant = $valeur;
}
function set_type($valeur){
	$this->type = $valeur;
}

public function __construct($a,$b,$c,$d){
	$this->set_titre($a);
	$this->set_description($b);
	$this->set_montant($c);
	$this->set_type($d);
}

function ajouter(){
	if(self::verifiers("titre",$this->get_titre())==true){
		$req=config::$bdd->prepare("insert into paiement (titre,description,montant,type) VALUE(:titre,:description,:montant,:type)");
		$req->bindValue(':titre',$this->get_titre());
		$req->bindValue(':description',$this->get_description());
		$req->bindValue(':montant',$this->get_montant());
		$req->bindValue(':type',$this->get_type());
	  	if($req->execute()){
	  		return 1;
	  	}
	}else{
		echo "cette titre existe deja <br>";
	}

		  	return 0;
	  	
}


	public static function afficher($id){
		if($id==""){
		$requette=config::$bdd->query("select * from paiement order by id asc limit 1");	
		$data=$requette->fetch();
		$id=$data["id"];
		}
		$o=0;
		$id=intval($id);
		  	$requette=config::$bdd->query("select * from paiement");
                		while($data=$requette->fetch()){

                			$o=1;
					echo '<li  id="'.$data["id"].'" style="border-radius:4px;" class="kt-nav__item ';
					echo '"  titre="'.$data["titre"].'" description="'.$data["description"].'" type="'.$data["type"].'" montant="'.$data["montant"].'"';
			echo '>
                                <a href="client.php?id='.$data["id"].'"  id="'.$data["id"].'"  class="kt-nav__link" target="frame3" > <i class="la la-get-pocket mr-5" style="font-size:25px;color:#415482;"></i>';
	echo '<table><tr><td><span class="kt-nav__link-text">'.$data["titre"].'</span></td><td class="depose_ici"></td></table>';
                                echo '</a>';
echo '
                            </li>';

if(intval($data["id"])==$id){
	$titre=$data["titre"];
	echo '<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" style="background-color:transparent;border:0px;">
                                   <div class="col-8 element" spe="" nom=" Mathématiques 2020">
                                    <span style="position:absolute;background:rgba(0,0,0,0.6);color:white;top:5%;cursor:pointer;left:83%;border-radius:10px;width:20px;height:20px;" class="kt-avatar__cancel text-center supprimer" data-toggle="kt-tooltip" title="" data-original-title="supprmer" id="'.$data["id"].'">
                                        <i class="la la-trash"></i>
                                    </span>
                                    <!--begin::Portlet-->
                                    <div class="kt-portlet  ">
                                        <div class="kt-portlet__body">
                                            <div class="kt-widget kt-widget--general-4">
                                            <div class="kt-user-card-v2__pic">                                  <div class="kt-badge kt-badge--xl kt-badge--warning">'.$titre[0].'</div>                                </div>
                                            <br>
                                            Titre : 
                                                <a href="#" class="kt-widget__title titress">
                                                     '.$titre.'
                                                </a>
                                                <br><br>
                                                <div class="kt-widget__desc">
                                                  Description :  <span class="descriptionss"> '.$data["description"].'
                                                </span></div>
                                                <div class="kt-widget__desc">
                                                  type de personne :  <span class="typess"> '.$data["type"].'
                                                </span></div>
                                            </div>
                                            <br>
                                                <div class="kt-widget__desc">
                                                  Montant :  <span class="montantss"> '.$data["montant"].'
                                                </span> XAF</div>
                                            <br><br>
                                            <div class="kt-widget__actions">
                                                <div class="kt-widget__left">
                                                    <a style="margin-left:1%;" href="ajouter.php?id='.$data["id"].'" class="btn btn-brand btn-sm btn-bold btn-upper"><i class="la la-edit"></i>&nbsp;modifier</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div> ';
}
                		}

                		                		if($o==0){
                			echo '<div class="col-12 bg-white text-black text-center">
    rien
  </div>';
                		}

	}


public static function afficher_client($id,$n){
	if($n!=1){
		if($n==2){
			$n=4;
		}else{
			$n*=2+1;
		}
	}
	if($n==1){
		$n=0;
	}
	$type=client::retourne_valeur("id",$id,"type");
	$type=($type==0)?"etudiant":"patient";
	  	$requette=config::$bdd->query("select * from paiement where type='".$type."' limit ".intval($n).",4");
	  	$o=0;
                		while($data=$requette->fetch()){
                			$reponse=paiement_client::verifier_exite($id,$data["id"]);
					if($reponse==false){
						$rps=paiement_client::exite_panier($id,$data["id"]);
						echo '<div class="col-md-3">
							<div class="kt-pricing-v2__item kt-pricing-v2--';
if($rps==true){
	echo "danger";
}else{
	echo "primary";
}
							echo' kt-pricing-v2--elevated">
								<div class="kt-pricing-v2__header">
									<div class="kt-iconbox kt-iconbox--no-hover">
										<div class="kt-iconbox__icon" style="margin-bottom:0;">
											<div class="kt-iconbox__icon-bg" ></div>
											<i class="la ';
if($rps==true){
	echo "la-legal";
}else{
	echo "la-cc-paypal";
}
											echo '"></i>
										</div>
										<div class="kt-iconbox__title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
											'.$data['titre'].'
										</font></font></div>
									</div>
								</div>
								<div class="kt-pricing-v2__body">
									<div class="kt-pricing-v2__price">
										<div class="kt-pricing-v2__price-currency"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">xaf</font></font></div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;font-size:30px;">';
for ($i=0; $i < strlen($data["montant"]); $i++) {
$division=strlen($data["montant"])-3;
if($division==0){
	$division=1;
}
if($i%($division)==0){
	echo " ";
}
echo $data["montant"][$i];
	if($i==0){
		echo " ";
	}
}
										echo '</font></font><div class="kt-pricing-v2__price-type"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></div>
									</div>
									<div class="kt-pricing-v2__button">
										';
if($rps==true){
	echo '<button type="button" class="btn btn-primary btn-sm retirer" id="'.$data["id"].'" operation="retirer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">retirer l\'offre du panier</font></font></button>';
}else{
	echo '<button type="button" id="'.$data["id"].'" class="btn btn-primary btn-sm ajouter" operation="ajouter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ajouter cette offre</font></font></button>';
}
										echo'
									</div>
								</div>
							</div>
						</div>';
						$o++;
					}
                		
                		}

                		                		if($o==0){
                			echo '<div class="col-12 bg-white text-black text-center">
    rien
  </div>';
                		}
}


public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->prepare("select * from paiement where ".$type."=:".$type);
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
		  	$requette=config::$bdd->prepare("select * from paiement where ".$type."=:".$type." and id!=:id");
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

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->query("select * from paiement where ".$v."='".$id."'");
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from paiement where id=:id");
	  	if($req->execute([
		':id'=>intval($id)]
	  	)){
	  		$req=config::$bdd->prepare("delete from proccedure where id_active=:id_active");
	  		$req->execute([
		':id_active'=>intval($id)]
	  	);
	  		return 1;
	  	}else{
	  		return 0;
	  	}
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update paiement set ".$e."=:".$e." where id=:id");
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
