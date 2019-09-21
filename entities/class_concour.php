<?php
require_once "function.php";
require_once "contractedFunctions.php";
require_once "config.php";
config::connexion();

class concours
{
	private $titre;
	private $description;
	private $date_concours;
	private $heure;
	private $duree;

	function get_titre()
	{
		return $this->titre;
	}
	function get_description()
	{
		return $this->description;
	}
	function get_date_concours()
	{
		return $this->date_concours;
	}
	function get_heure()
	{
		return $this->heure;
	}
	function get_duree()
	{
		return $this->duree;
	}

	function set_titre($valeur)
	{
		$this->titre = $valeur;
	}
	function set_description($valeur)
	{
		$this->description = $valeur;
	}
	function set_date_concours($valeur)
	{
		$this->date_concours = $valeur;
	}
	function set_heure($valeur)
	{
		$this->heure = $valeur;
	}
	function set_duree($valeur)
	{
		$this->duree = $valeur;
	}
	public function __construct($a, $b, $c, $d, $e)
	{
		$this->set_titre($a);
		$this->set_description($b);
		$this->set_date_concours($c);
		$this->set_heure($d);
		$this->set_duree($e);
	}

	function ajouter()
	{
		if (self::verifiers("titre", $this->get_titre()) == true) {
			if (self::verifiers("date_concour", $this->get_date_concours()) == true) {
				$req = config::$bdd->prepare("insert into concours(titre,description,date_concour,heure,duree) VALUE(:titre,:description,:date_concour,:heure,:duree)");
				$req->bindValue(':titre', $this->get_titre());

				$req->bindValue(':description', $this->get_description());
				$req->bindValue(':date_concour', $this->get_date_concours());
				$req->bindValue(':heure', $this->get_heure());
				$req->bindValue(':duree', $this->get_duree());
				if ($req->execute()) {
					return 1;
				}
			} else {
				echo "ce date est deja utilisé <br>";
			}
		} else {
			echo "ce titre existe deja <br>";
		}

		return 0;
	}

	public static function verifiers($type, $valeur)
	{
		$i = 0;
		$requette = config::$bdd->prepare("select * from concours where " . $type . "=:" . $type);
		$requette->bindValue(":" . $type, $valeur);
		$requette->execute();
		while ($data = $requette->fetch()) {
			$i = 1;
		}

		if ($i >= 1) {
			return false;
		} else {
			return true;
		}
	}

	public static function verifier($id, $type, $valeur)
	{
		$i = 0;
		$requette = config::$bdd->prepare("select * from concours where " . $type . "=:" . $type . " and id!=:id");
		$requette->bindValue(":" . $type, $valeur);
		$requette->bindValue(":id", $id);
		$requette->execute();
		while ($data = $requette->fetch()) {
			$i = 1;
		}

		if ($i >= 1) {
			return false;
		} else {
			return true;
		}
	}

	public static function afficher()
	{
		$tableau = [];
		$tableaui = [];
		$o = 0;
		$requette = config::$bdd->query("select * from concours");
		$i = 0;
		while ($data = $requette->fetch()) {
			$o = 1;
			$titre = trim($data["titre"]);
			echo '<div class="col-xl-3 col-lg-3 col-sm-5 element" spe="" nom="' . $data["titre"] . '">
<span style="position:absolute;background:rgba(0,0,0,0.6);color:white;top:5%;cursor:pointer;left:83%;border-radius:10px;width:20px;height:20px;" class="kt-avatar__cancel text-center supprimer" data-toggle="kt-tooltip" title="" data-original-title="supprmer" id="' . $data["id"] . '">
<i class="la la-trash"></i>
</span>
<!--begin::Portlet-->
<div class="kt-portlet  ">
<div class="kt-portlet__body">
<div class="kt-widget kt-widget--general-4">
<div class="kt-user-card-v2__pic"> <div class="kt-badge kt-badge--xl ';
			if ($i % 2 == 0) {
				echo "kt-badge--warning";
			} else {
				echo "kt-badge--success";
			}
			echo '">' . $titre[0] . '</div> </div>
<br>
<a href="#" class="kt-widget__title">
' . $data["titre"] . '
</a>
<specialite style="display:none;">' . $data["titre"] . '</specialite>
<br><br>
<div class="kt-widget__desc">
durée du concour : ' . $data["duree"] . ' minutes
</div><br><br>
<div class="kt-widget__desc">
' . $data["description"] . '
</div>
</div>
<div class="kt-widget__links mt-3">
<div class="kt-widget__link">
<i class="la la-calendar-o kt-font-skype" style="font-size:20px;"></i>&nbsp;&nbsp;<a href="#">date : &nbsp;&nbsp;&nbsp; ' . $data["date_concour"] . '</a>
</div>
</div>
<div class="kt-widget__links mt-3">
<div class="kt-widget__link">
<i class="la la-calendar-check-o kt-font-skype" style="font-size:20px;"></i>&nbsp;&nbsp;<a href="#">heure : &nbsp;&nbsp;&nbsp; ';

			$req = explode(":", $data["heure"]);
			if (intval($req[0]) < 10) {
				if (isset($req[0][0])) {
					if ($req[0][0] != '0') {
						echo "0";
					}
				} else {
					echo "0";
				}
			}
			echo $req[0] . ' H : ';
			if (intval($req[1]) < 10) {
				if (isset($req[1][0])) {
					if ($req[1][0] != '0') {
						echo "0";
					}
				} else {
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
<a style="margin-left:-2%;" href="quizz.php?id=' . $data["id"] . '" class="btn btn-default btn-sm btn-bold btn-upper"><i class="la la-plus"></i>&nbsp;add quizz</a>
<a style="margin-left:1%;" href="ajouter.php?id=' . $data["id"] . '" class="btn btn-brand btn-sm btn-bold btn-upper"><i class="la la-edit"></i>&nbsp;modifier</a>
</div>
</div>
</div>
</div>
</div>';
			$i++;
		}
		if ($o == 0) {
			echo "vide";
		}
	}

	public static function afficher_liste()
	{
		$tableau = [];
		$tableaui = [];
		$requette = config::$bdd->query("select * from concours");
		while ($data = $requette->fetch()) {
			echo '<a class="dropdown-item text-center click" style="color:black;" target="frame1" href="concour/quizz.php?id=' . $data['id'] . '">' . $data['titre'] . '</a>';
		}
	}

	public static function retourne_valeur($v, $id, $val)
	{
		$requette = config::$bdd->query("select * from concours where " . $v . "='" . $id . "'");
		while ($data = $requette->fetch()) {
			return $data[$val];
		}
	}

	public static function supprimer($id)
	{
		$req = config::$bdd->prepare("delete from concours where id=:id");
		if ($req->execute(
			[
				':id' => intval($id)
			]
		)) {
			return 1;
		} else {
			return 0;
		}
	}

	public static function modifier($id, $e, $i)
	{
		$req = config::$bdd->prepare("update concours set " . $e . "=:" . $e . " where id=:id");
		$req->bindValue(':id', $id);
		$req->bindValue(':' . $e, $i);


		if ($req->execute()) {
			return true;
		} else {
			return false;
		}
	}
	public static function concoursLePlusProche()
	{
		$ids = array();
		$timeDifference = array();
		$index = 0;
		$date = "";
		$req = config::$bdd->query("select id,date_concour,heure from concours");
		while ($data = $req->fetch()) {
			$date .= $data["date_concour"] . " " . $data["heure"];
			$req2 = config::$bdd->prepare("select duree from concours where id=" . $data["id"]);
			$req2->execute();
			$rows = $req2->fetchAll();
			if (differenceDate($date, $rows[0]["duree"] * 60) > 0) {
				$ids[$index] = $data["id"];
				$timeDifference[$index] = differenceDate($date, $rows[0]["duree"] * 60);
				$index++;
			}
			$date = "";
		}
		if (count($ids)) {
			foreach ($timeDifference as $key => $value) {
				if ($value == min($timeDifference)) {
					$index = $key;
					break;
				}
			}
			return $ids[$index];
		} else return -1;
	}
	public static function concoursSuivant($id)
	{
		$ids = array();
		$timeDifference = array();
		$index = 0;
		$date = "";
		$req = config::$bdd->query("select id,date_concour,heure from concours where  not id=" . $id);
		while ($data = $req->fetch()) {
			$date .= $data["date_concour"] . " " . $data["heure"];
			$req2 = config::$bdd->prepare("select duree from concours where id=" . $data["id"]);
			$req2->execute();
			$rows = $req2->fetchAll();
			if (differenceDate($date, $rows[0]["duree"] * 60) > 0) {
				$ids[$index] = $data["id"];
				$timeDifference[$index] = differenceDate($date, $rows[0]["duree"] * 60);
				$index++;
			}
			$date = "";
		}
		if (count($ids)) {
			foreach ($timeDifference as $key => $value) {
				if ($value == min($timeDifference)) {
					$index = $key;
					break;
				}
			}
			return $ids[$index];
		} else return -1;
	}
	public static function afficherProchainConcours($id)
	{
		$req = config::$bdd->query("select * from concours where id=" . $id);
		$data = $req->fetch();
		echo "<div id='Description'><h4> Sujet:" . $data["titre"] . " <h4><br><h4 >Description: " . $data["description"] . "</h4><br> <h4>Date: " . $data["date_concour"] . "</h4><br> <h4>Heure :";
		$req = explode(":", $data["heure"]);
		if (intval($req[0]) < 10) {
			if (isset($req[0][0])) {
				if ($req[0][0] != '0') {
					echo "0";
				}
			} else {
				echo "0";
			}
		}
		echo $req[0] . ' H : ';
		if (intval($req[1]) < 10) {
			if (isset($req[1][0])) {
				if ($req[1][0] != '0') {
					echo "0";
				}
			} else {
				echo "0";
			}
		}
		echo $req[1];
		echo "</h4><br></div>";
		return
			array(
				"id" => $id,
				"date" => $data["date_concour"] . " " . $data["heure"],
				"duree" => $data["duree"]
			);
	}
	public static function afficherEtudiantConcour($rows)
	{
		$index = 0;
		$req = config::$bdd->query("select  etudiant.nom, etudiant.prenom,concours.id,clientconcour.idEtudiant,SUM(clientconcour.resultat) as resultat from clientconcour  inner join etudiant on clientconcour.idEtudiant=etudiant.id_client inner join concours on concours.id=clientconcour.idConcour and etudiant.resultat=-1  group by etudiant.nom,etudiant.prenom ORDER by resultat desc ");
		while ($data = $req->fetch()) {
			echo "<tr><td class='text-center' idEtudiant=" . $data['idEtudiant'] . ">" . $data['nom'] . "  " . $data['prenom'];
			self::ResultsPersonnalisés($rows, $data);
			echo "<td class='text-center'>  <div class='custom-control custom-checkbox'>
			<input type='checkbox' class='custom-control-input' id='customControlInline" . $index . "'>
			<label class='custom-control-label' for='customControlInline" . $index . "'></label>
		  </div></td></tr>";
			$index++;
		}
	}
	public static function afficherEtudiantConcour2($rows, $nombre)
	{
		$req = config::$bdd->query("select  etudiant.nom, etudiant.prenom,concours.id,clientconcour.idEtudiant,SUM(clientconcour.resultat) as resultat from clientconcour  inner join etudiant on clientconcour.idEtudiant=etudiant.id_client inner join concours on concours.id=clientconcour.idConcour and etudiant.resultat=0 group by etudiant.nom,etudiant.prenom ORDER by resultat desc limit " . $nombre);
		while ($data = $req->fetch()) {
			echo "<tr><td class='text-center' idEtudiant=" . $data['idEtudiant'] . ">" . $data['nom'] . "  " . $data['prenom'];
			self::Results($rows, $data);
		}
	}
	public static function afficherEtudiantConcour3($rows)
	{
		$req = config::$bdd->query("select  etudiant.nom, etudiant.prenom,concours.id,clientconcour.idEtudiant,SUM(clientconcour.resultat) as resultat from clientconcour  inner join etudiant on clientconcour.idEtudiant=etudiant.id_client inner join concours on concours.id=clientconcour.idConcour where etudiant.resultat=1 group by etudiant.nom,etudiant.prenom ORDER by resultat desc ");
		while ($data = $req->fetch()) {
			echo "<tr><td class='text-center' idEtudiant=" . $data['idEtudiant'] . ">" . $data['nom'] . "  " . $data['prenom'];
			self::Results($rows, $data);
		}
	}
	public static function afficherMatiere()
	{
		$req = config::$bdd->prepare("select id,titre from concours");
		try {
			if ($req->execute()) {
				$rows = $req->fetchAll();
				$rows2 = $rows;
				foreach ($rows as $key => $rows) {
					echo '<th class="text-center">' . $rows["titre"] . '</th>';
				}
				return $rows2;
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
	public static function Results($rows, $data)
	{
		foreach ($rows as $key => $rows) {
			$req2 = config::$bdd->query("select resultat from clientconcour  where idConcour =" . $rows["id"] . " and idEtudiant =" . $data["idEtudiant"]);
			$data2 = $req2->fetch();
			if (is_null($data2["resultat"])) {
				echo "</td><td class='text-center'>-</td>";
			} else
				echo "</td><td class='text-center'>" . $data2['resultat'] . "</td>";
		}
	}
	public static function ResultsPersonnalisés($rows, $data)
	{
		foreach ($rows as $key => $rows) {
			$req2 = config::$bdd->query("select clientconcour.resultat from clientconcour inner join etudiant on clientconcour.idEtudiant=etudiant.id_client where idConcour =" . $rows["id"] . " and idEtudiant =" . $data["idEtudiant"] . "  and etudiant.resultat=-1");
			$data2 = $req2->fetch();
			if (is_null($data2["resultat"])) {
				echo "</td><td class='text-center'>-</td>";
			} else
				echo "</td><td class='text-center'>" . $data2['resultat'] . "</td>";
		}
	}
	public static function ajouterResultat($ids)
	{
		$cmpt = 0;
		$req = config::$bdd->prepare("update etudiant SET resultat = 0 where id_client not in (select idEtudiant from clientconcour)");
		try {
			$req->execute();
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
		$ids2 = $ids;
		$req = config::$bdd->prepare("update etudiant SET resultat = -1 where id_client  in (select idEtudiant from clientconcour)");
		try {
			$req->execute();
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
		foreach ($ids as $key => $ids) {
			$req = config::$bdd->prepare("update etudiant SET resultat = 1 where id_client=:idEtudiant");
			try {
				$req = BindValue($req, array("idEtudiant"), array($ids));
				if ($req->execute()) {
					$cmpt++;
				}
			} catch (Exception $e) {
				return 'Erreur: ' . $e->getMessage();
			}
		}
		return $cmpt == count($ids2) ? "données ajoutees" : "probleme dans l'ajout";
	}

	public static function ajouterResultatPersonnalisee($ids)
	{
		$cmpt = 0;
		$ids2 = $ids;
		foreach ($ids as $key => $ids) {
			$req = config::$bdd->prepare("update etudiant SET resultat = 1 where id_client=:idEtudiant");
			try {
				$req = BindValue($req, array("idEtudiant"), array($ids));
				if ($req->execute()) {
					$cmpt++;
				}
			} catch (Exception $e) {
				return 'Erreur: ' . $e->getMessage();
			}
		}
		return $cmpt == count($ids2) ? "données ajoutees" : "probleme dans l'ajout";
	}
	public static function afficherMatiereCritere()
	{
		$req = config::$bdd->prepare("select id,titre from concours");
		try {
			if ($req->execute()) {
				$rows = $req->fetchAll();
				foreach ($rows as $key => $rows) {
					echo '<div class="form-group row" style="margin-top:-5%;">
					<label for="example-text-input" class="col-2 col-form-label">' . $rows["titre"] . '</label>
					<div class="col-10">
						<input type="text" id=' . $rows["id"] . ' class="form-control col-10 input" style="display:inline;" name=' . $rows["titre"] . ' placeholder="entrer un pourcentage (%)">&nbsp;&nbsp;<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="">
						</label>
					</div>
				</div>';
				}
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
	public static function pourcentage($idConcour, $pourcentage)
	{
		$resultat = array();
		$idConcour2 = $idConcour;
		$pourcentage2 = $pourcentage;
		$index = 0;
		foreach ($pourcentage2 as $key => $pourcentage2) {
			$pourcentage3[$idConcour[$index]] = $pourcentage2;
			$index++;
		}
		foreach ($idConcour as $key => $idConcour) {
			try {
				$req = config::$bdd->prepare("select idEtudiant,resultat from clientconcour where idConcour=" . $idConcour);
				if ($req->execute()) {
					$rows = $req->fetchAll();
					$resultat = self::parcourir2($rows, $resultat, $idConcour);
				}
			} catch (Exception $e) {
				return 'Erreur: ' . $e->getMessage();
			}
		}
		$resultat2 = $resultat;
		$index = 0;
		foreach ($resultat as $key => $resultat) {
			try {
				self::parcourir3($resultat, $pourcentage3, $key);
			} catch (Exception $e) {
				return 'Erreur: ' . $e->getMessage();
			}
			$index++;
		}
		try {
			$req = config::$bdd->prepare("select id,titre from concours");
			if ($req->execute()) {
				$rows = $req->fetchAll();
				self::afficherEtudiantConcour($rows);
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
		foreach ($resultat2 as $key => $resultat2) {
			try {
				self::parcourir4($resultat2, $key);
			} catch (Exception $e) {
				return 'Erreur: ' . $e->getMessage();
			}
		}
		return "selection reussie";
	}
	public static function  parcourir2($rows, $resultat, $idConcour)
	{
		foreach ($rows as $key => $rows) {
			$resultat[$rows["idEtudiant"]][$idConcour] = $rows["resultat"];
		}
		return $resultat;
	}
	public static function parcourir3($resultat, $pourcentage, $key2)
	{
		foreach ($resultat as $key => $resultat) {
			$req = config::$bdd->prepare("update clientconcour set resultat=:pourcentageresultat where idConcour=:idconcour and idEtudiant=:idetudiant");
			$tmp = ceil($pourcentage[$key] * $resultat);
			$req = BindValue($req, array("pourcentageresultat", "idconcour", "idetudiant"), array($tmp, $key, $key2));
			$req->execute();
		}
	}
	public static function parcourir4($resultat2, $key2)
	{
		foreach ($resultat2 as $key => $resultat2) {
			$req = config::$bdd->prepare("update clientconcour set resultat=:resultat where idConcour=:idConcour and idEtudiant=:idEtudiant");
			$req = BindValue($req, array("resultat", "idConcour", "idEtudiant"), array($resultat2, $key, $key2));
			$req->execute();
		}
	}
	public static function datePublication($date)
	{
		try {
			$req = config::$bdd->prepare("select count(*) as nombre  from datepublication");
			if ($req->execute()) {
				$rows = $req->fetchAll();
				if ($rows[0]["nombre"] == 0) {
					$req = config::$bdd->prepare("insert into  datepublication(date) values(:date)");
					$req = BindValue($req, array("date"), array($date));
					if ($req->execute()) {
						return "date ajoutee avec succes";
					}
				} else {
					$req = config::$bdd->prepare("update  datepublication set date=:date");
					$req = BindValue($req, array("date"), array($date));
					if ($req->execute()) {
						return "date modifiee avec succes";
					}
				}
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
	public static function afficherLaureats()
	{
		try {
			$req = config::$bdd->prepare("select nom,prenom,concours.resultat as nombre  from datepublication");
			if ($req->execute()) { }
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
	public static function retournerDate($id)
	{
		$req = config::$bdd->prepare("select date_concour,heure,duree from concours where id=" . $id);
		try {
			if ($req->execute()) {
				$rows = $req->fetchAll();
				foreach ($rows as $key => $rows) {
					$date = $rows["date_concour"] . " " . $rows["heure"];
					$duree = $rows["duree"];
					return array(
						"date" => $date,
						"duree" => $duree,
					);
				}
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
}
