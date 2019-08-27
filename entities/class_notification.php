<?php 
require_once "function.php";
require_once "config.php"; 
require_once "function.php"; 

    config::connexion();
class notification{
    private $id_personne;
    private $type;
    private $operation;
    private $message;
    private $etat;
function get_id_personne(){
    return $this->id_personne;
}
function get_type(){
    return $this->type;
}
function get_operation(){
    return $this->operation;
}
function get_message(){
    return $this->message;
}
function get_etat(){
    return $this->etat;
}
function set_id_personne($valeur){
    $this->id_personne = $valeur;
}
function set_type($valeur){
    $this->type = $valeur;
}
function set_operation($valeur){
    $this->operation = $valeur;
}
function set_message($valeur){
    $this->message = $valeur;
}
function set_etat($valeur){
    $this->etat = $valeur;
}
public function __construct($a,$b,$c,$d,$e){
    $this->set_id_personne($a);
    $this->set_type($b);
    $this->set_operation($c);
    $this->set_message($d);
    $this->set_etat($e);
}
function ajouter(){


        $req=config::$bdd->prepare("insert into notification(id_personne,type,operation,message,etat) VALUE(:id_personne,:type,:operation,:message,:etat)");
        $req->bindValue(':id_personne',$this->get_id_personne());
        $req->bindValue(':type',$this->get_type());
        $req->bindValue(':operation',$this->get_operation());
        $req->bindValue(':message',$this->get_message());
        $req->bindValue(':etat',$this->get_etat());
        if($req->execute()){
            return 1;
        }
        return 0;
    }
        
public static function verifiers($type,$valeur){
        $i=0;
            $requette=config::$bdd->query("select * from notification where ".$type."='".$valeur."'");
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
            $requette=config::$bdd->query("select * from notification where ".$type."='".$valeur."' and id!=".$id);
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
    public static function afficher_liste(){
        $tableau=[];
        $tableaui=[];
            $requette=config::$bdd->query("select * from notification");
                        while($data=$requette->fetch()){
                    echo '<a class="dropdown-item text-center click" style="color:black;" target="frame1" href="notification/detail.php?id='.$data['id'].'">'.$data['id_personne'].'</a>';
                        }
    }
    public static function afficher($id){
            $requette=config::$bdd->query("select * from notification where id_personne=".$id." && etat=0 order by id desc");
                        while($data=$requette->fetch()){
                    echo '<a href="#" class="kt-notification__item hy" id="'.$data["id"].'">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="la ';
                                                        if($data["type"]=="avertissement"){
                                                            echo "la-warning text-warning";
                                                        }
                                                        if($data["type"]=="info"){
                                                        echo "la-lightbulb-o text-info";  
                                                        }
                                                        if($data["type"]=="erreur"){
                                                            echo "la-question-circle text-danger";
                                                        }
                                                        if($data["type"]=="valider"){
                                                            echo "la-check text-success";
                                                        }
                                                        if($data["type"]=="fichier"){
                                                            echo "la-file-o k-font-accent";
                                                        }
                                                        echo '">
                                                        </i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            '.$data["operation"].'
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                           ';
                                                           echo difference($data["date_ajout"]);
                                                           echo'
                                                        </div>
                                                    </div>
                                                </a>';
                        }
    }


    public static function dernier($id){
            $requette=config::$bdd->query("select * from notification where id_personne=".$id." && etat=0 order by id desc limit 1");
                        while($data=$requette->fetch()){
                    echo '<a href="#" class="kt-notification__item hy" id="'.$data["id"].'">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="la ';
                                                        if($data["type"]=="avertissement"){
                                                            echo "la-warning text-warning";
                                                        }
                                                        if($data["type"]=="info"){
                                                        echo "la-lightbulb-o text-info";  
                                                        }
                                                        if($data["type"]=="erreur"){
                                                            echo "la-question-circle text-danger";
                                                        }
                                                        if($data["type"]=="valider"){
                                                            echo "la-check text-success";
                                                        }
                                                                                                                if($data["type"]=="fichier"){
                                                            echo "la-file-o k-font-accent";
                                                        }
                                                        echo '">
                                                        </i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            '.$data["operation"].'
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                           ';
                                                           echo difference($data["date_ajout"]);
                                                           echo'
                                                        </div>
                                                    </div>
                                                </a>';
                        }
    }



    public static function nombre($id){
            $requette=config::$bdd->query("select count(*) from notification where id_personne=".$id." && etat=0 order by id desc");
            $data=$requette->fetch();
            return $data[0];
    }

    public static function tout_afficher(){
            $requette=config::$bdd->query("select count(*) from notification where etat=0 && operation='Nouveau message'");
            $data=$requette->fetch();
            return $data[0];
    }

    public static function nombre_total($id){
            $requette=config::$bdd->query("select count(*) from notification where id_personne=".$id);
            $data=$requette->fetch();
            return $data[0];
    }

public static function tout_lire($id){
            $requette=config::$bdd->query("update notification set etat=1 where id_personne=".$id." && etat=0");    
}
public static function lire($id,$id_n){
            $requette=config::$bdd->query("update notification set etat=1 where id_personne=".$id." && id=".$id_n);    
}
    public static function afficher_simple($id){
            $requette=config::$bdd->query("select * from notification where id_personne=".$id." order by id desc");
                        while($data=$requette->fetch()){
                                                                                    if($data["type"]=="avertissement"){
                                                        $text="warning";
                                                        $text_="la la-warning kt-font-warning";
                                                        }
                                                        if($data["type"]=="info"){
                                                        $text="info";  
                                                        $text_="la la-lightbulb-o kt-font-info";
                                                        }
                                                        if($data["type"]=="erreur"){
                                                        $text="danger";
                                                        $text_="la la-question-circle kt-font-danger";
                                                        }
                                                        if($data["type"]=="valider"){
                                                        $text="success";
                                                        $text_="la la-check kt-font-success";
                                                        }
                                                         if($data["type"]=="fichier"){
                                                        $text="accent";
                                                        $text_="la la-file-o k-font-accent";
                                                        }
                    echo '                            <div class="kt-timeline__item kt-timeline__item--'.$text.'">
                                <div class="kt-timeline__item-section">
                                    <div class="kt-timeline__item-section-border">
                                        <div class="kt-timeline__item-section-icon">
                                            <i class="'.$text_.'">
                                            </i>
                                        </div>
                                    </div>
                                    <span class="kt-timeline__item-datetime">
                                    '.$data["operation"].'</span>
                                </div>
                                <a href="" class="kt-timeline__item-text">
                                    '.(($data["type"]!="fichier")?$data["operation"]:"vous avez recu un nouveau fichier").'
                                </a>
                                <div class="kt-timeline__item-info">
                                    '.difference($data["date_ajout"]).'
                                </div>
                            </div>';
                        }
    }

    public static function dernier_time($id){
            $requette=config::$bdd->query("select * from notification where id_personne=".$id." order by id desc limit 1");
                        while($data=$requette->fetch()){
                                                                                    if($data["type"]=="avertissement"){
                                                        $text="warning";
                                                        $text_="la la-warning kt-font-warning";
                                                        }
                                                        if($data["type"]=="info"){
                                                        $text="info";  
                                                        $text_="la la-lightbulb-o kt-font-info";
                                                        }
                                                        if($data["type"]=="erreur"){
                                                        $text="danger";
                                                        $text_="la la-question-circle kt-font-danger";
                                                        }
                                                        if($data["type"]=="valider"){
                                                        $text="success";
                                                        $text_="la la-check kt-font-success";
                                                        }
                                                        if($data["type"]=="fichier"){
                                                        $text="accent";
                                                        $text_="la la-file-o k-font-accent";
                                                        }
                    echo '                            <div class="kt-timeline__item kt-timeline__item--'.$text.'">
                                <div class="kt-timeline__item-section">
                                    <div class="kt-timeline__item-section-border">
                                        <div class="kt-timeline__item-section-icon">
                                            <i class="'.$text_.'">
                                            </i>
                                        </div>
                                    </div>
                                    <span class="kt-timeline__item-datetime">
                                    '.$data["operation"].'</span>
                                </div>
                                <a href="" class="kt-timeline__item-text">
                                    '.(($data["type"]!="fichier")?$data["operation"]:"vous avez recu un nouveau fichier").'
                                </a>
                                <div class="kt-timeline__item-info">
                                    '.difference($data["date_ajout"]).'
                                </div>
                            </div>';
                        }
    }

    public static function retourne_valeur($v,$id,$val){
    $requette=config::$bdd->query("select * from notification where ".$v."='".$id."'");
    while($data=$requette->fetch()){
        return $data[$val];
    }
    }
    public static function supprimer($id){
        $req=config::$bdd->prepare("delete from notification where id=:id");
        if($req->execute([
        ':id'=>intval($id)]
        )){
            return 1;
        }else{
            return 0;
        }
    }
        public static function modifier($id,$e,$i){
        $req=config::$bdd->prepare("update notification set ".$e."=:".$e." where id=:id");
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