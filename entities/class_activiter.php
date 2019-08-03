<?php 
require_once "function.php";
require_once "config.php";
require_once "class_proccedure.php";
require_once "class_activiter_client.php";

	config::connexion();

class activiter{
	private $titre;
	private $description;
	private $etat;

function get_titre(){
	return $this->titre;
}
function get_description(){
	return $this->description;
}
function get_etat(){
	return $this->etat;
}

function set_titre($valeur){
	$this->titre = $valeur;
}
function set_description($valeur){
	$this->description = $valeur;
}
function set_etat($valeur){
	$this->etat = $valeur;
}

public function __construct($a,$b,$c){
	$this->set_titre($a);
	$this->set_description($b);
	$this->set_etat($c);
}

function ajouter(){
	if(self::verifiers("titre",$this->get_titre())==true){
		$req=config::$bdd->prepare("insert into activite(titre,description,etat) VALUE(:titre,:description,:etat)");
		$req->bindValue(':titre',$this->get_titre());

		$req->bindValue(':description',$this->get_description());
		$req->bindValue(':etat',$this->get_etat());
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
		  	$requette=config::$bdd->query("select * from activite where ".$type."='".$valeur."'");
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
		  	$requette=config::$bdd->query("select * from activite where ".$type."='".$valeur."' and id!=".$id);
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


	public static function afficher_client($id){
		$requette=config::$bdd->query("select * from activite where etat=".$id);
		while($data=$requette->fetch()){
			$nombre=proccedure::nombre("id_active",$data["id"]);
			$veri=activiter_client::nombre("id_activiter",$data["id"]);
			$fini=0;
			echo '<div class="kt-portlet kt-portlet--height-fluid kt-widget-13 col-7 mx-auto" style="border:1px solid #eee;height:220px;">
    <div class="kt-portlet__body">
        <div id="kt-widget-slider-13-2" class="kt-slider carousel slide pointer-event" data-ride="carousel" data-interval="4000">
            <div class="kt-slider__head">
                <div class="kt-slider__label">Activité</div>
                <div class="kt-slider__nav">';
               if($veri!=0){
               	echo '<button type="button" class="btn btn-danger btn-sm annuler" id="'.$data["id"].'" style="border-radius:0px;border-top-left-radius:3px;border-bottom-left-radius:3px;">annuler</button>
                <button type="button" class="btn btn-info btn-sm poursuivre" style="border-radius:0px;border-top-right-radius:3px;border-bottom-right-radius:3px;">Poursuivre&nbsp;&nbsp;<i class="la la-arrow-right"></i></button>';
               }
               echo' </div>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item kt-slider__body active">
                    <div class="kt-widget-13">
                        <div class="kt-widget-13__body">
                            <span class="kt-widget-13__title">'.$data["titre"].'</span>
                            <div class="kt-widget-13__desc">
                                '.$data["description"].'
                            </div>
                        </div>
                        <div class="kt-widget-13__foot">
';

if($veri==0){
	$p=proccedure::retourne_valeur("id_active",$data["id"],"id");
	if($p==""){
		$p=0;
	}
echo '<button type="button" class="btn btn-primary mx-auto ii" value="commencer" etape_actuel="'.$p.'" nombre_etape_fait="0" etape_actuel="" id="'.$data["id"].'">commencer&nbsp;&nbsp;<i class="la la-arrow-right"></i></button>';
}else{
	echo '                            <div class="kt-widget-13__progress">
                                <div class="kt-widget-13__progress-info">
                                    <div class="kt-widget-13__progress-status">
                                        Progress
                                    </div>
                                    <div class="kt-widget-13__progress-value">'.$fini.'%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar kt-bg-brand" role="progressbar" style="width: '.$fini.'%" aria-valuenow="'.$fini.'" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>';
}

echo '
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
		}

	}
	public static function afficher($id){
		if($id==""){
		$requette=config::$bdd->query("select * from activite order by id asc limit 1");	
		$data=$requette->fetch();
		$id=$data["id"];
		}
		$o=0;
		$id=intval($id);
		  	$requette=config::$bdd->query("select * from activite");
                		while($data=$requette->fetch()){
                			$o=1;
					echo '<li style="border-radius:4px;" class="kt-nav__item ';
if(intval($data["id"])==$id){
	echo " kt-nav__item--active ";
}
					echo '"';
			echo '>
                                <a href="afficher.php?id='.$data["id"].'" class="kt-nav__link"> <i class="la la-link mr-5" style="font-size:25px;color:#415482;"></i>';
if(intval($data["id"])==$id){
	echo ' <table><tr><td><span class="kt-nav__link-text">'.$data["titre"].'</span></td><td><i class="la la-copy ml-5 lii" data-toggle="modal" data-target="#exampleModal2" style="font-size:25px;color:white;background-color:#415482;padding:3px;border-radius:4px;" data-skin="brand" title="" data-original-title="Brand skin"></i></td></tr></table> ';
}else{
	echo '<span class="kt-nav__link-text">'.$data["titre"].'</span>';
}
                                echo '</a>';
if(intval($data["id"])==$id){
	$titre=$data["titre"];
	echo '                         <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <a href="#" class="kt-widget__title">
                                                     '.$titre.'
                                                </a>
                                                <br><br>
                                                <div class="kt-widget__desc">
                                                    '.$data["description"].'
                                                </div>
                                            </div>
                                            <br>
                                            <label class="kt-radio kt-radio--solid kt-radio--brand">
                                <input type="radio" name="radio7" checked="checked"> ';
if(intval($data["etat"])==1){
	echo 'Etudiant';
}else{
	echo 'Patient';
}
                                echo '
                                <span></span>
                            </label>
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
echo '
                            </li>';
                		}

                		                		if($o==0){
                			echo '<div class="col-12 bg-white text-black text-center">
    rien
  </div>';
                		}

	}

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->query("select * from activite where ".$v."='".$id."'");
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}

	public static function afficher_liste(){
		$tableau=[];
		$tableaui=[];
		  	$requette=config::$bdd->query("select * from activite");
                		while($data=$requette->fetch()){
					echo '<a class="dropdown-item text-center click" style="color:black;" target="frame1" href="activite/controler.php?id='.$data['id'].'">'.$data['titre'].'</a>';
                		}
	}

	public static function controler($i_activiter){
		$tableau=[];
		$tableaui=[];
		  	$requette=config::$bdd->query("select * from proccedure where id_active=".$i_activiter);
                		while($data=$requette->fetch()){
                			$fichier=$data["fichier"];
					echo '<div class="col-md-3 col-xs-12 col-sm-12 bg-white mr-2 px-2 py-2 un" style="height:650px;border-radius:4px;">
<div class="row">
<div class="col-11 mx-auto btn-bold px-3 py-3 mb-3 text-center" style="background-color:';
if($fichier==0){
	echo '#0f2c7c;;color:white';
}else{
	echo '#b7c9f9;color:#3060d6';
}
echo ';border-radius:3px;">
'.$data["titre"].'
<i class="fa fa-arrow-alt-circle-down" style="float:right;font-size:18px;"></i><br>';
if($fichier==0){
	echo 'Role : Administrateur&nbsp;&nbsp;<i class="fa fa-question-circle" style="font-size:18px;cursor:pointer;"  data-toggle="kt-tooltip" data-skin="dark" title="" data-original-title="'.$data["description"].'"></i>';
}else{
	echo 'Role : Client&nbsp;&nbsp;<i class="fa fa-question-circle" style="font-size:18px;cursor:pointer;"  data-toggle="kt-tooltip" data-skin="dark" title="" data-original-title="'.$data["description"].'"></i>';
}
echo'
</div>
<div class="col-11 mx-auto" style="height:550px;overflow-y:scroll;">
<div class="card mb-4">
								<div class="kt-bg-metal w-100 py-2"><div class="kt-widget-7__item mx-auto text-center">
                                                            <div class="kt-widget-7__item-pic" style="display:inline-block;">
                                                                <img src="../../../assets/Backoffice/media/files/pdf.svg" alt="" width="35px">
                                                            </div>
                                                            <div class="kt-widget-7__item-info" style="display:inline-block;">
                                                                <a href="#" class="kt-widget-7__item-title">
                                                                    S.E.R Agreement
                                                                </a>
                                                                <div class="kt-widget-7__item-desc">
                                                                    805 MB
                                                                </div>
                                                            </div>
                                                        </div></div>
								<div class="px-2 py-2">
								<div class="row">
								<div class="col-md-2">
									<div class="bg-dark w-75 text-white rounded-circle text-center pt-2 gauche" style="cursor:pointer;height:30px;">
										<i class="fa fa-angle-left">
										</i>
									</div>
								</div>
								<div class="col-md-6">
<h5 class="card-title"><img src="../../../assets/Backoffice/media/users/1.png" width="45px" class="rounded-circle">&nbsp;&nbsp;Card title</h5>
								</div>
								<div class="col-md-2">
									<div class="btn btn-sm btn btn-warning mr-1" style="cursor:pointer;">
										<i class="fas fa-envelope">
										</i>
									</div>
								</div>
								<div class="col-md-2">
									<div class="bg-dark w-75 text-white rounded-circle text-center pt-2 droite" style="cursor:pointer;height:30px;">
										<i class="fa fa-angle-right">
										</i>
									</div>
								</div>
								</div>

								</div>
							</div>
</div>
</div>
</div>';
                		}
	}

	public static function nombre($v,$id){
	$requette=config::$bdd->prepare("select count(*) from activite where ".$v."=:".$v);
	$requette->bindValue(":".$v,$id);
	$requette->execute();
    $data=$requette->fetch();
	return $data[0];

	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from activite where id=:id");
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
		$req=config::$bdd->prepare("update activite set ".$e."=:".$e." where id=:id");
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
