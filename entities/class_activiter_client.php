<?php 
require_once "function.php";
require_once "config.php"; 
	config::connexion();

class activiter_client{
	private $id_client;
	private $id_activiter;
	private $nombre_etape_fait;
	private $etape_actuel;

function get_id_client(){
	return $this->id_client;
}
function get_id_activiter(){
	return $this->id_activiter;
}
function get_nombre_etape_fait(){
	return $this->nombre_etape_fait;
}
function get_etape_actuel(){
	return $this->etape_actuel;
}

function set_id_client($valeur){
	$this->id_client = $valeur;
}
function set_id_activiter($valeur){
	$this->id_activiter = $valeur;
}
function set_nombre_etape_fait($valeur){
	$this->nombre_etape_fait = $valeur;
}
function set_etape_actuel($valeur){
	$this->etape_actuel = $valeur;
}

public function __construct($a,$b,$c,$d){
	$this->set_id_client($a);
	$this->set_id_activiter($b);
	$this->set_nombre_etape_fait($c);
	$this->set_etape_actuel($d);
}

function ajouter(){
	if(self::verifiers("id_client",$this->get_id_client(),$this->get_etape_actuel())==true){
		$req=config::$bdd->prepare("insert into activiter_client(id_client,id_activiter,nombre_etape_fait,etape_actuel) VALUE(:id_client,:id_activiter,:nombre_etape_fait,:etape_actuel)");
		$req->bindValue(':id_client',$this->get_id_client());

		$req->bindValue(':id_activiter',$this->get_id_activiter());
		$req->bindValue(':nombre_etape_fait',$this->get_nombre_etape_fait());
		$req->bindValue(':etape_actuel',$this->get_etape_actuel());
	  	if($req->execute()){
	  		return 1;
	  	}
	}else{
		echo "cette id_client existe deja <br>";
	}

		  	return 0;
	  	
}

public static function verifiers($type,$valeur,$id){
		$i=0;
		  	$requette=config::$bdd->query("select * from activiter_client where ".$type."='".$valeur."' && etape_actuel=".$id);
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
	$requette=config::$bdd->prepare("select count(*) from activiter_client where ".$v."=:".$v);
	$requette->bindValue(":".$v,$id);
	$requette->execute();
    $data=$requette->fetch();
	return $data[0];

	}

public static function verifier($id,$type,$valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from activiter_client where ".$type."='".$valeur."' and id!=".$id);
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
		  	$requette=config::$bdd->query("select * from activiter_client where etape_actuel=".intval($id));
                		while($data=$requette->fetch()){
                			$o=1;
					echo '
                    <div class="card">
                        <div class="card-header" id="headingSix'.$i.'">
                            <div style="padding:7px;" class="card-title collapsed" data-toggle="collapse" role="button" data-target="#collapseSix'.$i.'" aria-expanded="true" aria-controls="collapseSix'.$i.'">
                            <div class="row col-12">
                            <div class="col-10">étape 
                                '.($i+1)." :  <span class='ml-5 id_client'>".$data["id_client"].'</span>
									</div>
                                <div class="col-offset-md-6"><button  data-toggle="modal" data-target="#ajouter_etape" type="button" id="'.$data["id"].'" class="btn btn-sm btn-clean btn-icon btn-icon-md modifier"><i class="la la-edit" style="font-size:25px;"></i></button>&nbsp;&nbsp;&nbsp;<button type="button" id="'.$data["id"].'" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md supprimer"><i class="la la-trash" style="font-size:25px;"></i></button></div>
                                </div></div>
                        </div>
                        <div id="collapseSix'.$i.'" class="card-body-wrapper collapse" aria-labelledby="headingSix'.$i.'" data-parent="#accordionExample">
                            <div class="card-body">
                           <div class="col-12 px-auto"> <button type="button" data-target="#simage" class="btn btn-info btn-icon btn-circle ml-5" data-skin="dark" data-toggle="modal" title="" data-original-title="Afficher limage" url="../../../assets/Backoffice/media/etapes/'.$data["id"].'.png"><i class="fa fa-tags"></i></button></div><br>

                            Interraction avec le client : <span class="text-primary nombre_etape_fait" rel="'.$data["nombre_etape_fait"].'">';
if(intval($data["nombre_etape_fait"])==0){
	echo "non";
}
if(intval($data["nombre_etape_fait"])==1){
	echo "oui, une reponse simple";
}
if(intval($data["nombre_etape_fait"])==2){
	echo "oui, \"inserer des nombre_etape_faits\"";
}
                            echo' </span><br><br>
                                <p class="id_activiter">'.$data["id_activiter"].'</p>
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
	$requette=config::$bdd->query("select * from activiter_client where ".$v."='".$id."'");
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}

	public static function supprimer($id_client,$id_activiter){
		$req=config::$bdd->prepare("delete from activiter_client where id_client=:id_client && id_activiter=:id_activiter");
	  	if($req->execute([
		':id_client'=>intval($id_client),
	':id_activiter'=>intval($id_activiter)]
	  	)){
	  		return 1;
	  	}else{
	  		return 0;
	  	}
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update activiter_client set ".$e."=:".$e." where id=:id");
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