<?php 
require_once "function.php";
require_once "config.php"; 
require_once "class_etudiant.php"; 
require_once "class_paiement.php"; 
require_once "class_paiement_client.php"; 
require_once "class_activiter_client.php";
require_once "class_activiter.php"; 
require_once "class_ecole.php"; 
	config::connexion();

class client{
	private $username;
	private $email;
	private $password;
	private $type;
	private $numero;

function get_username(){
	return $this->username;
}
function get_email(){
	return $this->email;
}
function get_password(){
	return $this->password;
}
function get_type(){
	return $this->type;
}
function get_numero(){
	return $this->numero;
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
function set_type($valeur){
	$this->type = $valeur;
}
function set_numero($valeur){
	$this->numero = $valeur;
}

public function __construct($a,$b,$c,$d,$e){
	$this->set_username($a);
	$this->set_email($b);
	$this->set_password($c);
	$this->set_type($d);
	$this->set_numero($e);
}

function ajouter(){
	if(self::verifiers("username",$this->get_username())==true){
	if(self::verifiers("email",$this->get_password())==true){
		$req=config::$bdd->prepare("insert into client(username,email,password,type,numero) VALUE(:username,:email,:password,:type,:numero)");
		$req->bindValue(':username',$this->get_username());
		$req->bindValue(':email',$this->get_email());
		$req->bindValue(':password',md5($this->get_password()));
		$req->bindValue(':type',$this->get_type());
		$req->bindValue(':numero',$this->get_numero());
		echo $this->get_numero();
		if($req->execute()){
			  $id=self::retourne_valeur("email",$this->get_email(),"id");
			  copy("../views/assets/backoffice/media/users/inviter.png","../views/assets/backoffice/media/users/".$id.".png");
			  return "true";
	  	}
	}else{
		return "false";		
	}
	}else{
		return "false";
	}

	  	
}

public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from client where ".$type."='".$valeur."'");
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
		if($type=="password"){
		$requette=config::$bdd->query("select * from client where ".$type."='".md5($valeur)."' and id=".$id);
		}else{
		$requette=config::$bdd->query("select * from client where ".$type."='".$valeur."' and id=".$id);
		}

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
		  	$requette=config::$bdd->query("select * from client");
                		while($data=$requette->fetch()){
                			$o=1;
					echo '<div class="kt-widget__item">
                                <span class="kt-userpic kt-userpic--circle"> 
                                    <img src="../../assets/Backoffice/media/users/'.$data["id"].'.png" alt="image"> 
                                </span>

                                <div class="kt-widget__info">';
                                $rt="select count(*) from message where id_expediteur=".$data["id"]." && etat=0 && id_receveur=0";
$hg=config::$bdd->query($rt);
$f=$hg->fetch();
                                echo ' <span class="badge badge-pill badge-primary" style="float:right;" nombre_message="'.$f[0].'" id_id="'.$data["id"].'">';
if(intval($f[0])!=0){
	echo $f[0];
}                                
                                echo '</span>
                                    <div class="kt-widget__section">  
                                        <a href="message?id='.$data["id"].'" class="kt-widget__username bgt" target="frame3">'.$data["username"].'</a>
                                    </div>
                                    <span class="kt-widget__desc" style="font-size:11px;"">
                                       '.$data["email"].' 
                                    </span>
                                </div>

                                <div class="kt-widget__action">
                                    <span class="kt-widget__date"  style="font-size:10px;">';
                                    	echo "<span class='kt-badge kt-badge--dot kt-badge--success'></span> actif";
                                    echo '</span>
                                </div>
                            </div>
                        
                        ';
                		}
                		if($o==0){
                			echo "<tr><td colspan='7' class='text-center'>vide</td></tr>";
                		}

	}




	public static function afficher_tout(){
		$tableau=[];
		$tableaui=[];
		$o=0;
		  	$requette=config::$bdd->query("select * from client");
                		while($data=$requette->fetch()){
                			$o=1;
					echo '    <div class="col-xl-3 col-lg-6 bg-white px-4 py-4 mx-2 my-2 mx-auto">
					<div class="row">
					<div class="col-xl-2 mr-1">
					<img src="../../assets/Backoffice/media/users/'.$data["id"].'.png" alt="image" width="65px" height="65px">
					</div>
					<div class="col-xl-6">
                            <a href="#" class="kt-widget__title">
                                '.$data["username"].'                
                            </a><br>
                            <span class="kt-widget__desc"> Type : 
                                '.(($data["type"]==0)?'Etudiant':'Patient').'
                            </span>
					</div>
					<div class="col-xl-3">
                            <a href="profil.php?id='.$data["id"].'" class="btn btn-default btn-sm btn-bold btn-upper">profile</a>
					</div>
					</div>
    </div>';
                		}
                		if($o==0){
                			echo "<tr><td colspan='7' class='text-center'>vide</td></tr>";
                		}

	}


	public static function afficher_simple($id){
		$tableau=[];
		$tableaui=[];
		$o=0;
		  	$requette=config::$bdd->query("select * from client where id=".$id);
                		while($data=$requette->fetch()){
                			$o=1;
					echo '<div class="kt-portlet kt-profile">
	<div class="kt-profile__content">

<div class="row px-4 py-4">
                        <div class="col-md-2 col-xs-12">
                            <img src="../../assets/Backoffice/media/users/'.$data["id"].'.png" alt="image" class="rounded-circle" width="90px">
                        </div>
                        <div class="col-md-4 pt-3 col-xs-12">
                            <a href="#" class="kt-widget__title btn-bold" style="color:#595d6e;">
                                <b>'.$data["username"].'</b>
                            </a><br>
                            <span class="kt-widget__desc">Type : 
                                '.(($data["type"]==0)?'Etudiant':'Patient').'
                            </span>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="row">
                            	<div class="col-12" style="font-size:15px;">
                            		<i class="la la-phone-square text-success"></i> '.$data["numero"].'
                            	</div>
                            </div> 
                            <div class="row">
                            	<div class="col-12" style="font-size:15px;">
                            		<i class="la la-send-o text-warning"></i> '.$data["email"].'
                            	</div> 
                            </div> 
                        </div>
                            </div>

		</div>
</div>
<div class="row">			
			<div class="col-lg-12 col-xl-4  order-lg-1 order-xl-1">
				<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">Liste des informations</h3>
		</div>
	</div>
	<div class="kt-portlet__body">
		<div class="kt-widget-16">';
		$tableau=array();
                			$tableau["nom"]=etudiant::retourne_valeur("id",$data["id"],"nom");
                			$tableau["prenom"]=etudiant::retourne_valeur("id",$data["id"],"prenom");
                			$tableau["sexe"]=etudiant::retourne_valeur("id",$data["id"],"sexe");
                			$tableau["pays"]=etudiant::retourne_valeur("id",$data["id"],"pays");
                			$tableau["ville"]=etudiant::retourne_valeur("id",$data["id"],"ville");
                			$tableau["niveau_scolaire"]=etudiant::retourne_valeur("id",$data["id"],"niveau_scolaire");
                			$tableau["etablissement"]=etudiant::retourne_valeur("id",$data["id"],"etablissement");
                			$tableau["ecole_choisie"]=ecole::retourne_valeur("id",etudiant::retourne_valeur("id",$data["id"],"ecole_choisie"),"titre");
                			$tableau["specialite"]=etudiant::retourne_valeur("id",$data["id"],"specialite");

foreach ($tableau as $key => $value) {
	echo '			<div class="kt-widget-16__item kt-widget-16__item--info">
				<div class="kt-widget-16__labels">
					<a href=""><div class="kt-widget-16__title">'.$key.'</div></a>
					<div class="kt-widget-16__desc">'.$value.'</div>
				</div>
			</div>	';
}
			echo '		
		</div>
	</div>	 
</div>
<!--end::Portlet-->			</div>

			<div class="col-lg-12 col-xl-4  order-lg-1 order-xl-1">
				<!--begin::Portlet--> 
<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Liste des activitées					 
			</h3>			
		</div>
		<div class="kt-portlet__head-toolbar">
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-bold" role="tablist">
                <li class="nav-item show active">
                    <a class="nav-link" data-toggle="tab" href="#kt_portlet_tabs_1111_2_content" role="tab" aria-selected="false">
                        actif
                    </a>
                </li>
            </ul>
        </div>
	</div>
	<div class="kt-portlet__body">
		<div class="tab-content">
			<div class="tab-pane fade active show" id="kt_portlet_tabs_1111_2_content" role="tabpanel">
				<div class="kt-widget-11">';
$hy=config::$bdd->query("select * from activiter_client where id_client=".$data["id"]);
while($gt=$hy->fetch()){
	$nombre=activiter::nombre_pourcentage($gt["id_client"],$gt["id_activiter"]);
	$titre=activiter::retourne_valeur("id",$gt["id_activiter"],"titre");
	echo '					<div class="kt-widget-11__item">
						<div class="kt-widget-11__wrapper">
							<div class="kt-widget-11__title">
								'.$titre.'
							</div>
							<div class="kt-widget-11__value">
								'.$nombre.'%
							</div>
						</div>
						<div class="kt-widget-11__progress">
							<div class="progress">
								<!-- Doc: A bootstrap progress bar can be used to show a user how far along it\s in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
								<div class="progress-bar bg-primary" role="progressbar" style="width: '.$nombre.'%" aria-valuenow="'.$nombre.'" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>';
}
				echo '</div>
			</div>
		</div>
	</div>
</div>
<!--end::Portlet-->			</div>

			<div class="col-lg-12 col-xl-4  order-lg-1 order-xl-1">
				<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">Liste des paiements</h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-actions">
                <a href="#" class="btn btn-default btn-sm btn-bold btn-upper">CSV</a>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="kt-widget-4">';

$hys=config::$bdd->query("select * from paiement_client where id_client=".$data["id"]." && etat=1");
while($gt=$hys->fetch()){
	$titre=paiement::retourne_valeur("id",$gt["id_paiement"],"titre");
	$description=paiement::retourne_valeur("id",$gt["id_paiement"],"description");
	$montant=paiement::retourne_valeur("id",$gt["id_paiement"],"montant");
	echo '<div class="kt-widget-4__item">
                <div class="kt-widget-4__item-content">
                    <div class="kt-widget-4__item-section">
                        <div class="kt-widget-4__item-info">
                            <a href="#" class="kt-widget-4__item-username">'.$titre.'</a>
                            <div class="kt-widget-4__item-desc">'.$description.'</div>
                        </div>
                    </div>
                </div>
                <div class="kt-widget-4__item-content">
                    <div class="kt-widget-4__item-price">
                        <span class="kt-widget-4__item-badge">XAF</span>
                        <span class="kt-widget-4__item-number">'.$montant.'</span>
                    </div>
                </div>
            </div>';
}
        echo '</div>
    </div>
</div>
<!--end::Portlet-->			</div>

		</div>
';
                		}
                		if($o==0){
                			echo "<tr><td colspan='7' class='text-center'>vide</td></tr>";
                		}

	}


	public static function afficher_message(){
		$tableau=[];
		$tableaui=[];
		$o=0;
		  	$requette=config::$bdd->query("select * from client");
                		while($data=$requette->fetch()){
                			$o=1;

					echo '									<li>
										<a href="messagerie.php?id='.$data["id"].'">
											<div class="status online"><img src="../../assets/Backoffice/media/users/'.$data["id"].'.png" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>'.$data["username"].'</h5>
												<span>'.$data["email"].'</span>
											</div>
											<div class="icon"><i data-eva="person"></i></div>
										</a>
									</li>';
                		}
                		if($o==0){
                			echo "<tr><td colspan='7' class='text-center'>vide</td></tr>";
                		}

	}
	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->prepare("select * from client where ".$v."=:".$v);
	$requette->bindValue(":".$v,$id);
	$requette->execute();
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}


	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from client where id=:id");
	  	if($req->execute([
		':id'=>intval($id)]
	  	)){
	  		return 1;
	  	}else{
	  		return 0;
	  	}
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update client set ".$e."=:".$e." where id=:id");
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