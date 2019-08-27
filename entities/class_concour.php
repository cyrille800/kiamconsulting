<?php 
require_once "function.php";
require_once "contractedFunctions.php";
require_once "config.php"; 
	config::connexion();

class concours{
	private $titre;
	private $description;
	private $date_concours;
	private $heure;
	private $duree;

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
function get_duree(){
	return $this->duree;
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
function set_duree($valeur){
	$this->duree = $valeur;
}
public function __construct($a,$b,$c,$d,$e){
	$this->set_titre($a);
	$this->set_description($b);
	$this->set_date_concours($c);
	$this->set_heure($d);
	$this->set_duree($e);
}

function ajouter(){
	if(self::verifiers("titre",$this->get_titre())==true){
	if(self::verifiers("date_concour",$this->get_date_concours())==true){
		$req=config::$bdd->prepare("insert into concours(titre,description,date_concour,heure,duree) VALUE(:titre,:description,:date_concour,:heure,:duree)");
		$req->bindValue(':titre',$this->get_titre());

		$req->bindValue(':description',$this->get_description());
		$req->bindValue(':date_concour',$this->get_date_concours());
		$req->bindValue(':heure',$this->get_heure());
		$req->bindValue(':duree',$this->get_duree());
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
		  	$i=0;
                		while($data=$requette->fetch()){
                			$o=1;
                			$titre=trim($data["titre"]);
                		echo '<div class="col-xl-3 col-lg-3 col-sm-5 element" spe="" nom="'.$data["titre"].'">
									<span style="position:absolute;background:rgba(0,0,0,0.6);color:white;top:5%;cursor:pointer;left:83%;border-radius:10px;width:20px;height:20px;" class="kt-avatar__cancel text-center supprimer" data-toggle="kt-tooltip" title="" data-original-title="supprmer" id="'.$data["id"].'">
										<i class="la la-trash"></i>
									</span>
									<!--begin::Portlet-->
									<div class="kt-portlet  ">
										<div class="kt-portlet__body">
											<div class="kt-widget kt-widget--general-4">
											<div class="kt-user-card-v2__pic">									<div class="kt-badge kt-badge--xl ';
											if($i%2==0){
												echo "kt-badge--warning";
											}else{
												echo "kt-badge--success";
											}
											echo '">'.$titre[0].'</div>								</div>
											<br>
												<a href="#" class="kt-widget__title">
													'.$data["titre"].'
												</a>
												<specialite style="display:none;">'.$data["titre"].'</specialite>
												<br><br>
												<div class="kt-widget__desc">
												durée du concour :	'.$data["duree"].' minutes
												</div><br><br>
												<div class="kt-widget__desc">
													'.$data["description"].'
												</div>
											</div>
											<div class="kt-widget__links mt-3">
												<div class="kt-widget__link">
													<i class="la la-calendar-o kt-font-skype" style="font-size:20px;"></i>&nbsp;&nbsp;<a href="#">date : &nbsp;&nbsp;&nbsp; '.$data["date_concour"].'</a>
												</div>
											</div>
											<div class="kt-widget__links mt-3">
												<div class="kt-widget__link">
													<i class="la la-calendar-check-o kt-font-skype" style="font-size:20px;"></i>&nbsp;&nbsp;<a href="#">heure : &nbsp;&nbsp;&nbsp; ';

                			$req=explode(":",$data["heure"]);
                		if(intval($req[0])<10){
						if(isset($req[0][0])){
							if($req[0][0]!='0'){
							echo "0";
							}
						}else{
							echo "0";
						}
					}
					echo $req[0].' H : ';
					if(intval($req[1])<10){
						if(isset($req[1][0])){
							if($req[1][0]!='0'){
							echo "0";
							}
						}else{
							echo "0";
						}
					}
echo $req[1];

													echo '</a>
												</div>
											</div>
											<br><br>
											<div class="kt-widget__actions">
												<div class="kt-widget__left">
													<a style="margin-left:-2%;" href="quizz.php?id='.$data["id"].'" class="btn btn-default btn-sm btn-bold btn-upper"><i class="la la-plus"></i>&nbsp;add quizz</a>
													<a style="margin-left:1%;" href="ajouter.php?id='.$data["id"].'" class="btn btn-brand btn-sm btn-bold btn-upper"><i class="la la-edit"></i>&nbsp;modifier</a>
												</div>
											</div>
										</div>
									</div>
								</div>';
								$i++;

	}
	if($o==0){
		echo "vide";
	}
}

	public static function afficher_liste(){
		$tableau=[];
		$tableaui=[];
		  	$requette=config::$bdd->query("select * from concours");
                		while($data=$requette->fetch()){
					echo '<a class="dropdown-item text-center click" style="color:black;" target="frame1" href="concour/quizz.php?id='.$data['id'].'">'.$data['titre'].'</a>';
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
	public static function concoursLePlusProche(){
		$ids=array();
		$timeDifference=array();
		$index=0;
		$date="";
		$req=config::$bdd->query("select id,date_concour,heure from concours");
	while ($data=$req->fetch()) {
			$date.=$data["date_concour"]." ".$data["heure"];
			if(differenceDate($date)>0)
			{
				$ids[$index]=$data["id"];
				$timeDifference[$index]=differenceDate($date);
				$index++;
			}
			$date="";
		}
		 if (count($ids)) {
			 foreach ($timeDifference as $key => $value) {
				 if ($value==min($timeDifference)) {
					 $index=$key;
					 break;
				 }
			 }
			 return $ids[$index];
		 }
		 else return -1;
}
public static function afficherProchainConcours($id){
	$req=config::$bdd->query("select * from concours where id=".$id);
	$data=$req->fetch();
	echo "<h4> Sujet:".$data["titre"]." <h4><br><h4 >Description: ".$data["description"]."</h4><br> <h4>Date: ".$data["date_concour"]."</h4><br> <h4>Heure :";
	$req=explode(":",$data["heure"]);
	if(intval($req[0])<10){
	if(isset($req[0][0])){
		if($req[0][0]!='0'){
		echo "0";
		}
	}else{
		echo "0";
	}
}
echo $req[0].' H : ';
if(intval($req[1])<10){
	if(isset($req[1][0])){
		if($req[1][0]!='0'){
		echo "0";
		}
	}else{
		echo "0";
	}
}
echo $req[1];
	echo "</h4><br>";
	return 
	array(
		"id" =>$id,
		"date"=> $data["date_concour"]." ".$data["heure"],
		"duree"=>$data["duree"]
	);
	
}
	
}
