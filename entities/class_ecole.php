<?php 
require_once "function.php";
require_once "config.php"; 
require_once "class_activiter_client.php";
    config::connexion();
class ecole{
    private $titre;
    private $ville;
    private $site;
    private $nombre_place;
    private $specialite;
function get_titre(){
    return $this->titre;
}
function get_ville(){
    return $this->ville;
}
function get_site(){
    return $this->site;
}
function get_nombre_place(){
    return $this->nombre_place;
}
function get_specialite(){
    return $this->specialite;
}
function set_titre($valeur){
    $this->titre = $valeur;
}
function set_ville($valeur){
    $this->ville = $valeur;
}
function set_site($valeur){
    $this->site = $valeur;
}
function set_nombre_place($valeur){
    $this->nombre_place = $valeur;
}
function set_specialite($valeur){
    $this->specialite = $valeur;
}
public function __construct($a,$b,$c,$d,$e){
    $this->set_titre($a);
    $this->set_ville($b);
    $this->set_site($c);
    $this->set_nombre_place($d);
    $this->set_specialite($e);
}
function ajouter(){
    if(self::verifiers("titre",$this->get_titre())==true){
    if(self::verifiers("site",$this->get_ville())==true){
        $req=config::$bdd->prepare("insert into school(titre,ville,site,nombre_place,specialite) VALUE(:titre,:ville,:site,:nombre_place,:specialite)");
        $req->bindValue(':titre',$this->get_titre());
        $req->bindValue(':ville',$this->get_ville());
        $req->bindValue(':site',$this->get_site());
        $req->bindValue(':nombre_place',$this->get_nombre_place());
        $req->bindValue(':specialite',$this->get_specialite());
        if($req->execute()){
            return 1;
        }
    }else{
        echo "ce site existe deja <br>";        
    }
    }else{
        echo "ce titre existe deja <br>";
    }
            return 0;
        
}
public static function verifiers($type,$valeur){
        $i=0;
            $requette=config::$bdd->query("select * from school where ".$type."='".$valeur."'");
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
            $requette=config::$bdd->query("select * from school where ".$type."='".$valeur."' and id!=".$id);
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
            $requette=config::$bdd->query("select * from school");
                        while($data=$requette->fetch()){
                    echo '<a class="dropdown-item text-center click" style="color:black;" target="frame1" href="ecole/detail.php?id='.$data['id'].'">'.$data['titre'].'</a>';
                        }
    }
    public static function afficher(){
        $tableau=[];
        $tableaui=[];
            $requette=config::$bdd->query("select * from school");
                        while($data=$requette->fetch()){
                    echo '<div class="col-xl-3 col-lg-3 col-sm-5 element" spe="'.$data["specialite"].'" nom="'.$data["titre"].'">
                <span style="position:absolute;background:rgba(0,0,0,0.6);color:white;top:5%;cursor:pointer;left:83%;border-radius:10px;width:20px;height:20px;" class="kt-avatar__cancel text-center supprimer_ecole" data-toggle="kt-tooltip" title="" data-original-title="supprmer" id="'.$data["id"].'">
                                        <i class="la la-trash"></i>
                                    </span>
                <!--begin::Portlet-->
                <div class="kt-portlet  ">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--general-4">
                            <div class="kt-widget__head">
                                <div class="kt-media kt-media--lg">
                                    <img src="../../../assets/Backoffice/media/ecoles/'.$data["id"].'.png" alt="image" style="width:65px;height:65px;">
                                </div>
                            </div>
<br>
                            <a href="#" class="kt-widget__title">                                
                                '.$data["titre"].'
                            </a>
                            <br><br>
                            <div class="kt-widget__desc">
                                Liste des specialitées : <br><br>
                                <ul style="list-style-type:none;">';
                                $trd=explode(";",$data["specialite"]);
                                foreach ($trd as $key => $value) {
                                if($value!=""){
                                echo '<li><i class="la la-check-circle-o"></i> <specialite>'.$value.'</specialite> </li>';
                                }
                                }
                                echo'
                                    
                                </ul>
                            </div>
                            <div class="kt-widget__links mt-3">
                                <div class="kt-widget__link">
                                    <i class="socicon-linkedin kt-font-skype"></i>&nbsp;&nbsp;<a href="#">'.$data["site"].'</a>
                                </div>
                            </div>
<br><br>
                            <div class="kt-widget__actions">
                                <div class="kt-widget__left">
                                    <a style="margin-left:-2%;" href="detail.php?id='.$data["id"].'" class="btn btn-default btn-sm btn-bold btn-upper"><i class="la la-comment-o"></i>&nbsp;plus de details</a>
                                    <a style="margin-left:-3%;" href="ajouter.php?id='.$data["id"].'" class="btn btn-brand btn-sm btn-bold btn-upper"><i class="la la-edit"></i>&nbsp;modifier</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
                        }
    }
    public static function afficher_client(){
        $tableau=[];
        $tableaui=[];
            $requette=config::$bdd->query("select * from school");
            $i=0;
                        while($data=$requette->fetch()){
                    echo '<tr data-row="'.$i.'" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
                                        <td data-field="first_name" class="kt-datatable__cell">
                                            <span style="width: 200px;">
                                                <div class="kt-user-card-v2">
                                                    <div class="kt-user-card-v2__pic ">
                                                        <img alt="photo" src="../../assets/Backoffice/media/ecoles/'.$data["id"].'.png">
                                                    </div>
                                                    <div class="kt-user-card-v2__details">
                                                        <a class="kt-user-card-v2__name" href="#">
                                                        '.$data["ville"].'</a>
                                                    </div>
                                                </div>
                                            </span>
                                        </td>
                                        <td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="email">
                                            <span style="width: 124px;">
                                            '.$data["titre"].' </span>
                                        </td>
                                        <td data-field="hire_date" class="kt-datatable__cell text-left" style="width: 124px;">
                                            <a href="http://www.'.$data["site"].'" target="_blank" class="text-primary text-left">
                                            '.$data["site"].'</a>
                                        </td>
                                        <td data-field="department" data-autohide-disabled="false" class="kt-datatable__cell">
                                            <span style="width: 176px;">
                                                <div class="kt-user-card-v2">
                                                    <div class="kt-user-card-v2__pic">
                                                        <img alt="photo" src="../../assets/Backoffice/media/flags/018-tunisie.svg" height="30px" width="30px">
                                                    </div>
                                                    <div class="kt-user-card-v2__details">
                                                        <a class="kt-user-card-v2__name" href="#">
                                                        '.$data["ville"].'</a>
                                                        <span class="kt-user-card-v2__email">
                                                        Tunisie</span>
                                                    </div>
                                                </div>
                                            </span>
                                        </td>
                                        <td data-field="status" class="kt-datatable__cell">
                                            <span style="width: 100px;" class="">';
$tab=explode(";",$data["specialite"]);
$k=0;
foreach ($tab as $key => $value) {
    if($value!=""){
        if($k%2==0){
        echo '<span class="btn btn-bold btn-sm btn-font-sm mb-2 btn-label-success">'.$value.'</span>';
    }else{
        echo '<span class="btn btn-bold btn-sm btn-font-sm mb-2 btn-label-danger">'.$value.'</span>';
    }
    $k++;
    }
}
                                                
                                            echo '</span>
                                        </td>
                                        <td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
                                            <span style="overflow: visible; position: relative; width: 80px;" class="">
                                                <div class="dropdown">
                                                    <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md" style="cursor:pointer;">
                                                        <i class="la la-ellipsis-v" style="font-size:25px;">
                                                        </i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="kt-nav">';
                                                                            $row=activiter_client::retourne_valeur("id_client",$_SESSION["id"],"id");
                    if($row==0){
                     echo '<li class="kt-nav__item">
                                                                <span class="kt-nav__link ajouter" id="'.$data["id"].'">
                                                                    <i class="kt-nav__link-icon la la-plus"></i>
                                                                    <span class="kt-nav__link-text">
                                                                    Ajouter</span>
                                                                </span>
                                                            </li>';                       
                    }
                                                            echo '<li class="kt-nav__item">
                                                                <a class="kt-nav__link" target="_blank" href="detail.php?id='.$data["id"].'">
                                                                    <i class="kt-nav__link-icon la la-eye">
                                                                    </i>
                                                                    <span class="kt-nav__link-text">
                                                                    Plus de détails</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>';
                                    $i++;
                        }
    }
    public static function retourne_valeur($v,$id,$val){
    $requette=config::$bdd->query("select * from school where ".$v."='".$id."'");
    while($data=$requette->fetch()){
        return $data[$val];
    }
    }
    public static function supprimer($id){
        $req=config::$bdd->prepare("delete from school where id=:id");
        if($req->execute([
        ':id'=>intval($id)]
        )){
            return 1;
        }else{
            return 0;
        }
    }
        public static function modifier($id,$e,$i){
        $req=config::$bdd->prepare("update school set ".$e."=:".$e." where id=:id");
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