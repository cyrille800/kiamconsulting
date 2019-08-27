<?php 
require_once "function.php";
require_once "config.php"; 
	config::connexion();

class quizz{
	private $id_concour;
	private $question;
	private $reponse;
	private $autre_reponse;

function get_id_concour(){
	return $this->id_concour;
}
function get_question(){
	return $this->question;
}
function get_reponse(){
	return $this->reponse;
}
function get_autre_reponse(){
	return $this->autre_reponse;
}

function set_id_concour($valeur){
	$this->id_concour = $valeur;
}
function set_question($valeur){
	$this->question = $valeur;
}
function set_reponse($valeur){
	$this->reponse = $valeur;
}
function set_autre_reponse($valeur){
	$this->autre_reponse = $valeur;
}

public function __construct($a,$b,$c,$d){
	$this->set_id_concour($a);
	$this->set_question($b);
	$this->set_reponse($c);
	$this->set_autre_reponse($d);
}

function ajouter(){
	if(self::verifiers("question",$this->get_question())==true){
		$req=config::$bdd->prepare("insert into qizz(id_concour,question,reponse,autre_reponse) VALUE(:id_concour,:question,:reponse,:autre_reponse)");
		$req->bindValue(':id_concour',$this->get_id_concour());

		$req->bindValue(':question',$this->get_question());
		$req->bindValue(':reponse',$this->get_reponse());
		$req->bindValue(':autre_reponse',$this->get_autre_reponse());
	  	if($req->execute()){
	  		return 1;
	  	}
	}else{
		echo "cette question existe deja <br>";
	}

		  	return 0;
	  	
}

public static function verifiers($type,$valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from qizz where ".$type."='".$valeur."'");
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
		  	$requette=config::$bdd->query("select * from qizz where ".$type."='".$valeur."' and id!=".$id);
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
		  	$requette=config::$bdd->query("select * from qizz where id_concour=".$id);
                		$i=0;
                		while($data=$requette->fetch()){
                			$o=1;
                			$req=explode(";",$data["autre_reponse"]);
					echo '					<div class="card">
						<div class="card-header" id="'.$data["id"].'headingOneo'.$data["id"].'">
							<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne'.$data["id"].'" aria-expanded="false" aria-controls="collapseOne'.$data["id"].'"> <i class="la la-simplybuilt" style="font-size:25px;" class="btn-bold ml-5"></i>
								'.$data["question"].'
							<span style="background:rgba(0,0,0,0.6);color:white;cursor:pointer;border-radius:10px;width:20px;height:20px;" class="kt-avatar__cancel text-center supprimer ml-5" data-toggle="kt-tooltip" title="" data-original-title="supprmer" id="'.$data["id"].'">
										<i class="la la-trash"></i>
									</span>							
							</div>
						</div>
						<div id="collapseOne'.$data["id"].'" class="collapse" aria-labelledby="'.$data["id"].'headingOneo'.$data["id"].'" data-parent="#accordionExample" style="">
							<div class="card-body">
							<button type="button"  data-target="#simage" class="btn btn-info btn-icon btn-circle" data-skin="dark" data-toggle="modal" title="" data-original-title="Afficher l\'image" url="../../../assets/Backoffice/media/concour/'.$data["id"].'question.png"><i class="fa fa-tags"></i></button><br><br>
								';

echo '<div class="kt-portlet__body">
				<div class="accordion" id="accordionExample1">
					<div class="card">
						<div class="card-header" id="reponse_correct'.$i.'">
							<div class="card-title bg-primary text-white" data-toggle="collapse" data-target="#reponse_correct1'.$i.'" aria-expanded="true" aria-controls="reponse_correct1'.$i.'"><i class="la la-list-alt" style="font-size:25px;" class="btn-bold ml-5"></i>
								reponse correct
							</div>
						</div>
						<div id="reponse_correct1'.$i.'" class="collapse" aria-labelledby="reponse_correct'.$i.'" data-parent="#accordionExample1" style="">
							<div class="card-body">
							<div class="lead">Reponse : '.$req[0].'</div> <br><br>
							<button type="button" data-toggle="modal" data-target="#simage" class="btn btn-info btn-icon btn-circle" data-skin="dark" title="" data-original-title="Afficher l\'image" url="../../../assets/Backoffice/media/concour/'.$data["id"].'reponse.png"><i class="fa fa-tags"></i></button><br><br>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header" id="reponse_fausse'.$i.'">
							<div class="card-title" data-toggle="collapse" data-target="#reponse_fausse1'.$i.'" aria-expanded="true" aria-controls="reponse_fausse1'.$i.'"><i class="la la-list-alt" style="font-size:25px;" class="btn-bold ml-5"></i>
								reponse fausse 1
							</div>
						</div>
						<div id="reponse_fausse1'.$i.'" class="collapse" aria-labelledby="reponse_fausse'.$i.'" data-parent="#accordionExample1" style="">
							<div class="card-body">
							<div class="lead">Reponse fausse 1: '.$req[0].'</div> <br><br>
								<button type="button" data-toggle="modal" data-target="#simage" class="btn btn-info btn-icon btn-circle" data-skin="dark" title="" data-original-title="Afficher l\'image" url="../../../assets/Backoffice/media/concour/'.$data["id"].'faux1.png"><i class="fa fa-tags"></i></button><br><br>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header" id="reponse_fausses'.$i.'">
							<div class="card-title" data-toggle="collapse" data-target="#reponse_fausse2'.$i.'" aria-expanded="true" aria-controls="reponse_fausse2'.$i.'"><i class="la la-list-alt" style="font-size:25px;" class="btn-bold ml-5"></i>
								reponse fausse 2
							</div>
						</div>
						<div id="reponse_fausse2'.$i.'" class="collapse" aria-labelledby="reponse_fausses'.$i.'" data-parent="#accordionExample1" style="">
							<div class="card-body">
							<div class="lead">Reponse fausse 2: '.$req[0].'</div> <br><br>
								<button type="button" data-toggle="modal" data-target="#simage" class="btn btn-info btn-icon btn-circle" data-skin="dark" title="" data-original-title="Afficher l\'image" url="../../../assets/Backoffice/media/concour/'.$data["id"].'faux2.png"><i class="fa fa-tags"></i></button><br><br>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header" id="reponse_faussess'.$i.'">
							<div class="card-title" data-toggle="collapse" data-target="#reponse_fausse3'.$i.'" aria-expanded="true" aria-controls="reponse_fausse3'.$i.'"><i class="la la-list-alt" style="font-size:25px;" class="btn-bold ml-5"></i>
								reponse fausse 3
							</div>
						</div>
						<div id="reponse_fausse3'.$i.'" class="collapse" aria-labelledby="reponse_faussess'.$i.'" data-parent="#accordionExample1" style="">
							<div class="card-body">
							<div class="lead">Reponse fausse 3: '.$req[0].'</div> <br><br>
								<button type="button" data-toggle="modal" data-target="#simage" class="btn btn-info btn-icon btn-circle" data-skin="dark" title="" data-original-title="Afficher l\'image" url="../../../assets/Backoffice/media/concour/'.$data["id"].'faux3.png"><i class="fa fa-tags"></i></button><br><br>
							</div>
						</div>
					</div>


				</div>
			</div>';




								echo '
							</div>
						</div>
					</div>';
					$i++;
                		}

                		                		if($o==0){
                			echo "<div class='col-12 text-center'>vide</div>";
                		}

	}

	public static function retourne_valeur($v,$id,$val){
	$requette=config::$bdd->query("select * from qizz where ".$v."='".$id."'");
    while($data=$requette->fetch()){
  		return $data[$val];
	}

	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from qizz where id=:id");
	  	if($req->execute([
		':id'=>intval($id)]
	  	)){
	  		return 1;
	  	}else{
	  		return 0;
	  	}
	}

		public static function modifier($id,$e,$i){
		$req=config::$bdd->prepare("update qizz set ".$e."=:".$e." where id=:id");
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