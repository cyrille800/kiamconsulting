<?php
require_once "function.php";
require_once "config.php";
require_once "contractedFunctions.php";
config::connexion();
class Categorie
{
	private $titre;
	private $date;

	function get_titre()
	{
		return $this->titre;
	}
	function get_date()
	{
		return $this->date;
	}

	function set_titre($valeur)
	{
		$this->titre = $valeur;
	}
	function set_date($valeur)
	{
		$this->date = $valeur;
	}

	function set_idCategorie($valeur)
	{
		$this->idCategorie = $valeur;
	}

	public function __construct($Titre, $date)
	{
		$this->set_titre($Titre);
		$this->set_date($date);
	}

	static function ajouter($titre, $date)
	{
		$sql = "insert into categorie (titre,Date) values (:titre,:Date)";
		try {
			$requette = config::$bdd->prepare($sql);
			$requette = BindValue($requette, array("titre", "Date"), array($titre, $date));
			if ($requette->execute()) {
				return  "Categorie ajoutée";
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
	static function verifier($titre)
	{
		$sql = "select count(*) as nombre from categorie where titre=:titre";
		$requette = config::$bdd->prepare($sql);
		try {
		$requette = BindValue($requette, array("titre"),array($titre));
			if ($requette->execute()) {
				$rows=$requette->fetchAll();
				foreach ($rows as $key => $rows) {
					if ($rows["nombre"]> 0) {
						return true;
					} else {
						return false;
					}
				}
				
			} else {
				echo "il y a un probleme dans la  verification du titre";
			}
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
}