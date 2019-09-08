<?php
require_once "function.php";
require_once "config.php";
require_once "contractedFunctions.php";

config::connexion();

class Commentaire
{
	private $idClient;
	private $date;
	private $commentaire;
	private $idCommentaireReponse;
	private $idPost;

	function get_idClient()
	{
		return $this->idClient;
	}
	function get_date()
	{
		return $this->date;
	}
	function get_commentaire()
	{
		return $this->commentaire;
	}
	function get_idCommentaireReponse()
	{
		return $this->idCommentaireReponse;
	}
	function get_idPost()
	{
		return $this->idPost;
	}

	function set_idClient($valeur)
	{
		$this->idClient = $valeur;
	}

	function set_date($valeur)
	{
		$this->date = $valeur;
	}
	function set_commentaire($valeur)
	{
		$this->commentaire = $valeur;
	}
	function set_idCommentaireReponse($valeur)
	{
		$this->idCommentaireReponse = $valeur;
	}
	function set_idPost($valeur)
	{
		$this->idPost = $valeur;
	}

	public function __construct($idClient, $date, $commentaire, $idCommentaireReponse, $idPost)
	{
		$this->set_idClient($idClient);
		$this->set_date($date);
		$this->set_commentaire($commentaire);
		$this->set_idCommentaireReponse($idCommentaireReponse);
		$this->set_idPost($idPost);
	}

	static function ajouter($commentaire)
	{
		$sql = "insert into commentaire (date,idClient,idCommentaireReponse,commentaire,idPost) values (:date,:idClient,:idCommentaireReponse,:commentaire,:idPost)";
		try {
			$requette = config::$bdd->prepare($sql);
			$requette = BindValue($requette, array("date", "idClient", "idCommentaireReponse", "commentaire", "idPost"), array($commentaire->get_date(), $commentaire->get_idClient(), $commentaire->get_idCommentaireReponse(), $commentaire->get_commentaire(), $commentaire->get_idPost()));
			if ($requette->execute()) {
				$client = self::rechercherClient($commentaire->get_idClient());
				return  array(
					"username" => $client[0]["username"],
					"idCommentaire" => self::rechercherDernierCommentaire()
				);
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
	static function rechercherClient($idClient)
	{
		$sql = "select * from client where id=" . $idClient;
		try {
			$requette = config::$bdd->prepare($sql);
			if ($requette->execute()) {
				$rows = $requette->fetchAll();
				return $rows;
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
	static function rechercherDernierCommentaire()
	{
		$sql = "select * from commentaire ORDER BY id DESC LIMIT 1";
		try {
			$requette = config::$bdd->prepare($sql);
			if ($requette->execute()) {
				$rows = $requette->fetchAll();
				return $rows[0]["id"];
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
	static  function reponseCommentaire($idCommentaireReponse, $idCommentaire)
	{
		return $idCommentaireReponse > 0 && $idCommentaire == $idCommentaireReponse;
	}

	static function afficherCommentaires($idPost)
	{
		$sql = "select * from commentaire where idPost=" . $idPost;

		try {
			$requette = config::$bdd->prepare($sql);
			if ($requette->execute()) {
				$rows = $requette->fetchAll();
				$rows2 = $rows;
				foreach ($rows as $key => $rows) {
					if ($rows["idCommentaireReponse"] == 0) {
						$client = self::rechercherClient($rows["idClient"]);
						echo '
						 <div class="media comment">
							 <div class="media-left">
								 <a href="#">
									 <img " src="../assets/Backoffice/media/users/'.$rows["idClient"].'.png " >  
								 </a>
							 </div>
							 <div class="media-body">
								 <h4 class="media-heading" id='.$rows["id"].'>' . $client[0]["username"] . '</h4>
								 <div class="time-comment clearfix">
									 <small class="pull-left">' . $rows["date"] . '</small>
									 <button class="pull-right btn btn-fill btn-xs reply">Répondre</button>
								 </div>
								 <p>' . $rows["commentaire"] . '</p>
								 </div></div>';
						$idCommentaire = $rows["id"];
						self::afficherReponses($idCommentaire, $rows2);
					}
				}
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
	static function afficherReponses($idCommentaire, $rows)
	{
		foreach ($rows as $key => $rows) {
			if (self::reponseCommentaire($rows["idCommentaireReponse"], $idCommentaire)) {
				$client = self::rechercherClient($rows["idClient"]);
				echo ' <div class="media comment-reply">
		<div class="media-left">
			<a href="#">
				<img " src="../assets/Backoffice/media/users/'.$rows["idClient"].'.png "  alt="">
			</a>
		</div>
		<div class="media-body">
			<h4 class="media-heading" id='.$idCommentaire.'>' . $client[0]["username"] . '</h4>
			<div class="time-comment clearfix">
			<small class="pull-left">' . $rows["date"] . '</small>
			</div>
			<p>' . $rows["commentaire"] . '</p>
		</div>
	</div>';
			}
		}
	}
	static function commentaireRecent(){
		$sql = "select * from commentaire ORDER BY id DESC LIMIT 2";
		try {
			$requette = config::$bdd->prepare($sql);
			if ($requette->execute()) {
				$rows = $requette->fetchAll();
				foreach ($rows as $key => $rows) {
					$client=self::rechercherClient($rows["idClient"]);
					echo '<li>
					<p><a href="blog-single?id='.$rows["idPost"].'" title="">@'.$client[0]["username"].'</a> '.$rows["commentaire"].'.</p>
				</li>';
				}
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
}
