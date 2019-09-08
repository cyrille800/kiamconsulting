<?php 
require_once "function.php";
require_once "config.php";
require_once "class_proccedure.php";
require_once "class_activiter_client.php";
require_once "class_client.php";

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
		  	$requette=config::$bdd->prepare("select * from activite where ".$type."=:".$type);
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
		  	$requette=config::$bdd->prepare("select * from activite where ".$type."=:".$type." and id!=:id");
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

public static function nombre_pourcentage($id,$v){
			$nombre=proccedure::nombre("id_active",$v);
			$rt=config::$bdd->prepare("select * from activiter_client where id_client=:id_client && id_activiter=:id_activiter");
					  	$rt->bindValue(":id_activiter",$v);
		  			  	$rt->bindValue(":id_client",$id);
		  	$rt->execute();
			$vx=$rt->fetch();
			$po=$vx["nombre_etape_fait"];
			$op=intval($nombre);
			$fini=0;
			if($op>0){
				$fini=ceil(intval(($po)*100)/$op);
			}
			if($po==0){
				$fini=0;
			}
			return $fini;
}




public static function afficher_dashboard($id_client,$id,$v){
			$type=client::retourne_valeur("id",$id_client,"type");
	$type=($type==0)?"1":"0";
	$type=intval($type);
		$si=config::$bdd->prepare("select count(*) from activite where etat=:etat");
		$si->bindValue(":etat",$type);
		$si->execute();
		$nom=$si->fetch();
		$nombre_final=$nom[0];
		$requette=config::$bdd->prepare("select * from activite where etat=:etat");
				$requette->bindValue(":etat",$type);
		$requette->execute();
		$i=0;
		while($data=$requette->fetch()){
			$fini=0;
			$cv="non";
			if($v!=""){
				$fini=self::nombre_pourcentage($id_client,$data["id"]);
				$cv="oui";
			}
			$veri=activiter_client::nombre($id_client,"id_activiter",$data["id"]);

                if($i==0){
                	echo '<table class="table mt-2 col-11 mx-auto">
                            <thead class="thead-dark">
                                <tr>
                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Numéro</font></font></th>
                                    <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Titre services</font></font></th>
                                    <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Progression</font></font></th>
                                    <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Etat</font></font></th>
                                </tr>
                            </thead>
                            <tbody>';

                    }
                            	echo '<tr>
                            <td scope="row" class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">'.($i+1).'</font></font></td>
                                    <td scope="row" class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">'.$data["titre"].'</font></font></td>
                                    <td class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="pourt">';
if($veri!=0){
	echo '<div class="kt-widget-13__progress">
                                <div class="kt-widget-13__progress-info">
                                    <div class="kt-widget-13__progress-value">'.$fini.'%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar kt-bg-brand" role="progressbar" style="width: '.$fini.'%" aria-valuenow="'.$fini.'" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>';
}else{
	echo 'inactif';
}
                                    echo '</font></font></td>
                                    <td scope="row" class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">';
if(intval($fini)!=100){
if($veri!=0){
if(intval($v)==intval($data["id"])){
	echo "<span class='text-success'>en cours</span>";
}else{
	echo '<span class="text-warning">pause</span>';
}
}else{
	echo "<span class='text-danger'>inactif</span>";
}
}else{
	echo "<span class='text-success'>terminer</span>";
}
                                    echo '</font></font></td>
                                </tr>';
                              
                                if($i==($nombre_final-1)){echo '</tbody>
                        </table>';
                }
                
$i++;
		}
	}




	public static function afficher_client($id_client,$id,$v){
			$type=client::retourne_valeur("id",$id_client,"type");
	$type=($type==0)?"1":"0";
	$type=intval($type);
		$si=config::$bdd->prepare("select count(*) from activite where etat=:etat");
		$si->bindValue(":etat",$type);
		$si->execute();
		$nom=$si->fetch();
		$nombre_final=$nom[0];
		$requette=config::$bdd->prepare("select * from activite where etat=:etat");
				$requette->bindValue(":etat",$type);
		$requette->execute();
		$i=0;
		while($data=$requette->fetch()){
			$fini=0;
			$cv="non";
			if($v!=""){
				$fini=self::nombre_pourcentage($id_client,$data["id"]);
				$cv="oui";
			}
			$veri=activiter_client::nombre($id_client,"id_activiter",$data["id"]);


			echo '                <div class="carousel-item kt-slider__body '.(($i==0)?"active":"").'">
                    <div class="kt-widget-13">
                        <div class="kt-widget-13__body">
                            <a class="kt-widget-13__title" href="#">'.$data['titre'].'</a>
                            <div class="kt-widget-13__desc">
                                '.$data['description'].'
                            </div>
                        </div>
                        <div class="kt-widget-13__foot">';
if($fini!=100){
if($veri==0){
	$p=proccedure::retourne_valeur("id_active",$data["id"],"id");
	if($p==""){
		$p=0;
	}
echo '<button type="button" class="btn btn-primary mx-auto ii" value="commencer" etape_actuel="'.$p.'" nombre_etape_fait="0" etape_actuel="" id="'.$data["id"].'" name="'.$data["titre"].'">commencer&nbsp;&nbsp;<i class="la la-arrow-right"></i></button>';
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
}
                        echo '</div>';
if($fini!=100){
	if($veri!=0){
               	echo '<div class="row mt-3 col-12"><button type="button" class="btn btn-danger btn-sm annuler" name="'.$data["titre"].'" id="'.$data["id"].'" style="border-radius:0px;border-top-left-radius:3px;border-bottom-left-radius:3px;">annuler</button>
                <button type="button" class="btn btn-info btn-sm poursuivre" id="'.$data["id"].'" style="border-radius:0px;border-top-right-radius:3px;border-bottom-right-radius:3px;">';
if(intval($v)==intval($data["id"])){
	echo "en cours  <div class='spinner-grow spinner-grow-sm' role='status'>
                            <span class='sr-only'>Loading...</span>
                        </div>";
}else{
	echo 'Poursuivre&nbsp;&nbsp;<i class="la la-arrow-right"></i>';
}
                echo'</button></div>';
}
}else{
	echo "<span class='text-primary lead'>Terminer</span><br><br><br>";
}
                        echo'
                    </div>
                    ';
for($j=0;$j<$nombre_final;$j++){
	if($j==$i){
		echo '<div class="mr-2 bg-primary" style="width:10px;height:10px;display:inline-block;border-radius:5px;"> </div>';
	}
	else{
		echo '<div class="mr-2" style="width:10px;height:10px;display:inline-block;border-radius:5px;background-color:#919191;"> </div>';
	}
}
                    echo'
                </div>';
                if($i==0){
                	echo '<table class="table" style="margin-top:25%;">
                            <thead class="thead-dark">
                                <tr>
                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Numéro</font></font></th>
                                    <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Titre services</font></font></th>
                                    <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Progression</font></font></th>
                                    <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Etat</font></font></th>
                                </tr>
                            </thead>
                            <tbody>';

                    }
                            	echo '<tr>
                            <td scope="row" class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">'.($i+1).'</font></font></td>
                                    <td scope="row" class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">'.$data["titre"].'</font></font></td>
                                    <td class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="pourt">';
if($veri!=0){
	echo '<div class="kt-widget-13__progress">
                                <div class="kt-widget-13__progress-info">
                                    <div class="kt-widget-13__progress-value">'.$fini.'%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar kt-bg-brand" role="progressbar" style="width: '.$fini.'%" aria-valuenow="'.$fini.'" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>';
}else{
	echo 'inactif';
}
                                    echo '</font></font></td>
                                    <td scope="row" class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">';
if(intval($fini)!=100){
if($veri!=0){
if(intval($v)==intval($data["id"])){
	echo "<span class='text-success'>en cours</span>";
}else{
	echo '<span class="text-warning">pause</span>';
}
}else{
	echo "<span class='text-danger'>inactif</span>";
}
}else{
	echo "<span class='text-success'>terminer</span>";
}
                                    echo '</font></font></td>
                                </tr>';
                              
                                if($i==($nombre_final-1)){echo ' </tbody>
                        </table>';
                }
                
$i++;
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
					echo '<li id="'.$data["id"].'" style="border-radius:4px;" class="kt-nav__item';
					echo '"  titre="'.$data["titre"].'" description="'.$data["description"].'" etat="';
if(intval($data["etat"])==1){
	echo 'Etudiant';
}else{
	echo 'Patient';
}
					echo '"';
			echo '>
                                <a href="etape.php?id='.$data["id"].'" id="'.$data["id"].'" class="kt-nav__link" target="frame3"> <i class="la la-link mr-5" style="font-size:25px;color:#415482;"></i>';

	echo '<table><tr><td><span class="kt-nav__link-text">'.$data["titre"].'</span></td><td class="depose_ici"></td></table>';
                             echo '</a>';
echo '
                            </li>';
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
                                                <a href="#" class="kt-widget__title titress">
                                                     '.$titre.'
                                                </a>
                                                <br><br>
                                                <div class="kt-widget__desc descriptionss">
                                                    '.$data["description"].'
                                                </div>
                                            </div>
                                            <br>
                                            <label class="kt-radio kt-radio--solid kt-radio--brand">
                                <input type="radio" name="radio7" checked="checked"> ';
if(intval($data["etat"])==1){
	echo '<div class="etatss ml-3">Etudiant</div>';
}else{
	echo '<div class="etatss ml-3">Patient</div>';
}
                                echo '
                                <span></span>
                            </label>
                                            <br><br>
                                            <div class="kt-widget__actions">
                                                <div class="kt-widget__left">
                                                    <a style="margin-left:1%;" href="ajouter.php?id='.$data["id"].'" class="btn btn-brand btn-sm btn-bold btn-upper ght"><i class="la la-edit"></i>&nbsp;modifier</a>
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

		$t=config::$bdd->query("select count(*) from activiter_client,proccedure where (activiter_client.etape_actuel=proccedure.id && activiter_client.id_activiter=".$data['id'].") && proccedure.fichier=0");
		$n=$t->fetch();
		$nombre=$n[0];
		
					echo '<a class="dropdown-item text-center click" style="color:black;" target="frame1" href="activite/controler.php?id='.$data['id'].'">'.$data['titre'].'<span class="ml-5 kt-badge kt-badge--brand service_imbriquer" name="'.$data['id'].'" style="position:absolute;left:70%;'.(($nombre==0)?"display: none":"").'">'.$nombre.'</span></a>';
                		}
	}

	public static function controler($i_activiter){
		$tableau=[];
		$tableaui=[];
		  	$requette=config::$bdd->prepare("select * from proccedure where id_active=:id_active");
		  			  	$requette->bindValue(":id_active",$i_activiter);
		  	$requette->execute();
                		while($data=$requette->fetch()){
                			$fichier=$data["fichier"];
					echo '<div class="col-md-3 col-xs-12 col-sm-12 bg-white mr-2 px-2 py-2 un" style="height:650px;border-radius:4px;" id_proccedure="'.$data["id"].'">
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
<div class="col-11 mx-auto" style="height:550px;overflow-y:scroll;">';

$mo=config::$bdd->prepare("select * from activiter_client where id_activiter=:id_activiter && etape_actuel=:etape_actuel");
		  	$mo->bindValue(":id_activiter",$i_activiter);
		  	$mo->bindValue(":etape_actuel",$data["id"]);
		  	$mo->execute();
while($do=$mo->fetch()){
	echo '<div class="card mb-4" style="border:1px solid #d8d8d8;">
								<div class="w-100 py-2" style="background:#d2e0ff;"><div class="kt-widget-7__item mx-auto text-center">
                                                            <div class="kt-widget-7__item-pic" style="display:inline-block;">

                                                            <div class="btn-group btn-group-sm" role="group" aria-label="Small group">
							<button type="button" class="btn btn-primary  btn-upper pluss"  data-toggle="modal" data-target="#exampleModal5" id_client="'.$do["id_client"].'"><i class="la la-file-text-o"></i></button>
							<button type="button" class="btn btn-info paiement"   data-toggle="modal" data-target="#exampleModal6" id_client="'.$do["id_client"].'"><i class="la la-cc-paypal"></i></button>
						</div>
                                                            </div>
                                                        </div></div>
								<div class="px-2 py-2">
								<div class="row">
								<div class="col-md-2">';
$nombre=proccedure::nombre("id_active",$do["id_activiter"]);
if(intval($do["nombre_etape_fait"]+1)==1){
echo '<div class="w-75 rounded-circle text-center pt-2 annuler" id_client="'.$do['id_client'].'" id_activiter_client="'.$do["id"].'" id_activiter="'.$i_activiter.'" nombre_etape="'.$do["nombre_etape_fait"].'" style="cursor:pointer;height:30px;">
										<i class="fa fa-times">
										</i>
									</div>';
}else{
	echo '<div class="bg-dark w-75 text-white rounded-circle text-center pt-2 gauche"  id_client="'.$do['id_client'].'" id_activiter_client="'.$do["id"].'" id_activiter="'.$i_activiter.'" nombre_etape="'.$do["nombre_etape_fait"].'" style="cursor:pointer;height:30px;">
										<i class="fa fa-angle-left">
										</i>
									</div>';
}
								echo '</div>
								<div class="col-md-6">
<h5 class="card-title"><img src="../../../assets/Backoffice/media/users/'.$do['id_client'].'.png" width="45px" class="rounded-circle">&nbsp;&nbsp;';
echo client::retourne_valeur("id",$do['id_client'],"username");
echo '</h5>
								</div>
								<div class="col-md-2">
									<div class="btn btn-sm btn btn-primary mr-1 jio" style="cursor:pointer;" id="'.$do['id_client'].'"   data-toggle="modal" data-target="#exampleModal3">
										<i class="fas fa-envelope">
										</i>
									</div>
								</div>
								<div class="col-md-2">';
if(intval($do["nombre_etape_fait"]+1)==$nombre){
	echo '<div class="w-75 rounded-circle text-center pt-2 terminer" id_client="'.$do['id_client'].'" id_activiter_client="'.$do["id"].'" id_activiter="'.$i_activiter.'" nombre_etape="'.$do["nombre_etape_fait"].'" style="cursor:pointer;height:30px;">
										<i class="fa fa-check">
										</i>
									</div>';
}else{
	echo '<div class="bg-dark w-75 text-white rounded-circle text-center pt-2 droite" id_client="'.$do['id_client'].'" id_activiter_client="'.$do["id"].'" id_activiter="'.$i_activiter.'" nombre_etape="'.$do["nombre_etape_fait"].'" style="cursor:pointer;height:30px;">
										<i class="fa fa-angle-right">
										</i>
									</div>';
}
								echo '</div>
								</div>

								</div>
							</div>';
}
echo '
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
