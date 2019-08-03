<?php 
require_once "function.php";
require_once "config.php"; 
	config::connexion();

class proccedure{
	private $titre;
	private $description;
	private $fichier;
	private $id_active;

function get_titre(){
	return $this->titre;
}
function get_description(){
	return $this->description;
}
function get_fichier(){
	return $this->fichier;
}
function get_id_active(){
	return $this->id_active;
}

function set_titre($valeur){
	$this->titre = $valeur;
}
function set_description($valeur){
	$this->description = $valeur;
}
function set_fichier($valeur){
	$this->fichier = $valeur;
}
function set_id_active($valeur){
	$this->id_active = $valeur;
}

public function __construct($a,$b,$c,$d){
	$this->set_titre($a);
	$this->set_description($b);
	$this->set_fichier($c);
	$this->set_id_active($d);
}

function ajouter(){
	if(self::verifiers("titre",$this->get_titre(),$this->get_id_active())==true){
		$req=config::$bdd->prepare("insert into proccedure(titre,description,fichier,id_active) VALUE(:titre,:description,:fichier,:id_active)");
		$req->bindValue(':titre',$this->get_titre());

		$req->bindValue(':description',$this->get_description());
		$req->bindValue(':fichier',$this->get_fichier());
		$req->bindValue(':id_active',$this->get_id_active());
	  	if($req->execute()){
	  		return 1;
	  	}
	}else{
		echo "cette titre existe deja <br>";
	}

		  	return 0;
	  	
}

public static function verifiers($type,$valeur,$id){
		$i=0;
		  	$requette=config::$bdd->query("select * from proccedure where ".$type."='".$valeur."' && id_active=".$id);
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

	public static function nombre($v,$id){
	$requette=config::$bdd->prepare("select count(*) from proccedure where ".$v."=:".$v);
	$requette->bindValue(":".$v,$id);
	$requette->execute();
    $data=$requette->fetch();
	return $data[0];

	}

public static function verifier($id,$type,$valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from proccedure where ".$type."='".$valeur."' and id!=".$id);
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

	public static function afficher($id){
		$tableau=[];
		$tableaui=[];
		$o=0;
		$i=0;
		  	$requette=config::$bdd->query("select * from proccedure where id_active=".intval($id));
                		while($data=$requette->fetch()){
                			$o=1;
					echo '
                    <div class="card">
                        <div class="card-header" id="headingSix'.$i.'">
                            <div style="padding:7px;" class="card-title collapsed" data-toggle="collapse" role="button" data-target="#collapseSix'.$i.'" aria-expanded="true" aria-controls="collapseSix'.$i.'">
                            <div class="row col-12">
                            <div class="col-10">étape 
                                '.($i+1)." :  <span class='ml-5 titre'>".$data["titre"].'</span>
									</div>
                                <div class="col-offset-md-6"><button  data-toggle="modal" data-target="#ajouter_etape" type="button" id="'.$data["id"].'" class="btn btn-sm btn-clean btn-icon btn-icon-md modifier"><i class="la la-edit" style="font-size:25px;"></i></button>&nbsp;&nbsp;&nbsp;<button type="button" id="'.$data["id"].'" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md supprimer"><i class="la la-trash" style="font-size:25px;"></i></button></div>
                                </div></div>
                        </div>
                        <div id="collapseSix'.$i.'" class="card-body-wrapper collapse" aria-labelledby="headingSix'.$i.'" data-parent="#accordionExample">
                            <div class="card-body">
                           <div class="col-12 px-auto"> <button type="button" data-target="#simage" class="btn btn-info btn-icon btn-circle ml-5" data-skin="dark" data-toggle="modal" title="" data-original-title="Afficher limage" url="../../../assets/Backoffice/media/etapes/'.$data["id"].'.png"><i class="fa fa-tags"></i></button></div><br>

                            Interraction avec le client : <span class="text-primary fichier" rel="'.$data["fichier"].'">';
if(intval($data["fichier"])==0){
	echo "non";
}
if(intval($data["fichier"])==1){
	echo "oui, une reponse simple";
}
if(intval($data["fichier"])==2){
	echo "oui, \"inserer des fichiers\"";
}
                            echo' </span><br><br>
                                <p class="description">'.$data["description"].'</p>
                            </div>
                        </div>
                    </div>
                    
                ';
        $i++;
                		}

                		                		if($o==0){
                			echo "<div class='kt-portlet'><div style='padding:2%;' class='text-center'>selectionner une activiter</div></div>";
                		}

	}

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->prepare("select * from proccedure where ".$v."=:".$v." order by id asc limit 1");
	$requette->bindValue(":".$v,$id);
	$requette->execute();
	$data=$requette->fetch();
    return $data[$val];

	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from proccedure where id=:id");
	  	if($req->execute([
		':id'=>intval($id)]
	  	)){
	  		return 1;
	  	}else{
	  		return 0;
	  	}
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update proccedure set ".$e."=:".$e." where id=:id");
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