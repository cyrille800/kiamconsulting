<?php
require_once "function.php";
require_once "config.php";
require_once "contractedFunctions.php";

config::connexion();

class Post
{
	private $titre;
	private $date;
	private $contenu;
	private $Cateogorie;
	private $image;
	private $auteur;
	private $introduction;
	private $vues;

	function get_titre()
	{
		return $this->titre;
	}
	function get_vues()
	{
		return $this->vues;
	}
	function get_date()
	{
		return $this->date;
	}
	function get_contenu()
	{
		return $this->contenu;
	}
	function get_Cateogorie()
	{
		return $this->Cateogorie;
	}
	function get_Image()
	{
		return $this->image;
	}
	function get_auteur()
	{
		return $this->auteur;
	}
	function get_introduction()
	{
		return $this->introduction;
	}
	function set_titre($valeur)
	{
		$this->titre = $valeur;
	}
	function set_date($valeur)
	{
		$this->date = $valeur;
	}
	function set_contenu($valeur)
	{
		$this->contenu = $valeur;
	}
	function set_Image($valeur)
	{
		$this->image = $valeur;
	}
	function set_vues($valeur)
	{
		$this->vues = $valeur;
	}


	function set_auteur($valeur)
	{
		$this->auteur = $valeur;
	}
	function set_introduction($valeur)
	{
		$this->introduction = $valeur;
	}
	function set_Cateogorie($valeur)
	{
		$this->Cateogorie = $valeur;
	}

	public function __construct($titre, $date, $contenu, $categorie, $image, $auteur, $introduction,$vues)
	{
		$this->set_titre($titre);
		$this->set_date($date);
		$this->set_contenu($contenu);
		$this->set_Cateogorie($categorie);
		$this->set_Image($image);
		$this->set_auteur($auteur);
		$this->set_introduction($introduction);
		$this->set_vues($vues);
	}

	public static function ajouter($post)
	{
		$sql = "insert into post (titre,date,contenu,Categorie,image,auteur,introduction,vues) values (:titre,:date,:contenu,:Categorie,:image,:auteur,:introduction,:vues)";
		try {
			$requette = config::$bdd->prepare($sql);
			$requette = BindValue($requette, array("titre", "date", "contenu", "Categorie", "image", "auteur", "introduction","vues"), array($post->get_titre(), $post->get_date(), $post->get_contenu(), $post->get_Cateogorie(), $post->get_Image(), $post->get_auteur(), $post->get_introduction(),$post->get_vues()));
			if ($requette->execute()) {
				return  "post ajouté";
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
	public static function modifier($post,$idPost){
		$sql = "update  post set titre=:titre , date=:date , contenu=:contenu , Categorie=:Categorie , image=:image , auteur=:auteur , introduction=:introduction where id=:id";
		try {
			$requette = config::$bdd->prepare($sql);
			$requette = BindValue($requette, array("titre", "date", "contenu", "Categorie", "image", "auteur", "introduction","id"), array($post->get_titre(), $post->get_date(), $post->get_contenu(), $post->get_Cateogorie(), $post->get_Image(), $post->get_auteur(), $post->get_introduction(),$idPost));
			if ($requette->execute()) {
				return  "post modifié";
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
	public static function verifier($titre)
	{
		$sql = "select count(*) as nombre from post where titre=:titre";
		$requette = config::$bdd->prepare($sql);
		try {
			$requette = BindValue($requette, array("titre"), array($titre));
			if ($requette->execute()) {
				$rows = $requette->fetchAll();
				foreach ($rows as $key => $rows) {
					return $rows["nombre"] > 0;
				}
			} else {
				echo "il y a un probleme dans la  verification du titre";
			}
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	public static function afficherBlog($postDepart, $nombrePostPage, $sql)
	{

		$sql .= " order by id desc limit " . $postDepart . "," . $nombrePostPage;
		try {
			$requette = config::$bdd->prepare($sql);
			if ($requette->execute()) {
				$rows = $requette->fetchAll();
				foreach ($rows as $key => $rows) {
					echo '<div class="blog-wrapper shadow-border single-blog-wrapper">
					<div class="blog-title">
						<a class="category_title" href="#" title="">' . $rows["Categorie"] . '</a>
						<h2><a href="single.html" title="">' . $rows["titre"] . '</a></h2>
						<div class="post-meta">
							<span>
								<i class="fa fa-user"></i>
								<a class="lien" href="#">' . $rows["auteur"] . '</a>
							</span>
							<span>
								<i class="fa fa-tag"></i>
								<a class="lien" href="#">' . $rows["Categorie"] . '</a>
							</span>
							<span>
								<i class="fa fa-comments"></i>
								<a class="lien" href="#">' . self::nombreCommentaire($rows["id"]) . ' commentaires</a>
							</span>
							<span>';
					$req = config::$bdd->prepare("select  vues from post where id=" . $rows["id"]);
					$req->execute();
					$rows2 = $req->fetchAll();
					$views = $rows2[0]["vues"];
					echo '<a  class="lien" href="#">' . $views . ' vues</a>
							</span>
						</div>
					</div>
					<div class="blog-image">
						<a href="blog-single.php?id=' . $rows["id"] . '" title=""><img src="../assets/Backoffice/image/' . $rows["image"] . '" alt="" class="img-responsive" width="750px" ></a>
					</div>
					<div class="blog-desc">
						<div class="post-date">
							<span class="day">';
					$date = explode("-", $rows["date"]);
					$month_num = $date[1];
					$month_name = date("F", mktime(0, 0, 0, $month_num, 10));
					$day = explode('T', $date[2]);
					echo $day[0] . '</span>
							<span class="month">' . $month_name . '</span>
						</div>
						<p>' . $rows["introduction"] . '</p>
						<a href="blog-single.php?id=' . $rows["id"] . '" class="readmore">Read More</a>
					</div>
					</div>';
				}
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
	public static function nombreCommentaire($idPost)
	{
		$sql = "select count(*) as nombre from commentaire where idPost=" . $idPost;
		try {
			$requette = config::$bdd->prepare($sql);
			if ($requette->execute()) {
				$rows = $requette->fetchAll();
				return $rows[0]["nombre"];
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
	public static function afficherPost($idPost)
	{
		$sql = "select * from post where id=" . $idPost;
		try {
			$requette = config::$bdd->prepare($sql);
			if ($requette->execute()) {
				$rows = $requette->fetchAll();
				foreach ($rows as $key => $rows) {
					echo '<div class="blog-title">
					<a class="category_title" href="#" title="">' . $rows["Categorie"] . '</a>
					<h2><a href="single.html" title="">' . $rows["titre"] . '</a></h2>
					<div class="post-meta">
						<span>
							<i class="fa fa-user"></i>
							<a href="#">' . $rows["auteur"] . '</a>
						</span>
						<span>
							<i class="fa fa-tag"></i>
							<a class="lien" href="#">' . $rows["Categorie"] . '</a>
						</span>
						<span>
							<i class="fa fa-comments"></i>
							<a  class="lien" href="#">' . self::nombreCommentaire($idPost) . ' commentaires </a>
						</span>
						<span>
							<i class="fa fa-eye"></i>';
					$req = config::$bdd->prepare("select  vues from post where id=" . $rows["id"]);
					$req->execute();
					$rows2 = $req->fetchAll();
					$views = $rows2[0]["vues"];
					echo '<a  class="lien" href="#">' . $views . ' vues</a>
						</span>
						<span>
							<i class="fa fa-clock-o"></i>';
					$date = explode("T", $rows["date"]);
					echo '<a  class="lien" href="#">' . $date[0] . '  ' . $date[1] . '</a>
						</span>
					</div>
				</div>
				<div class="blog-image">
					<a href="single.html" title=""><img src="assets/images/laravel.jpg" alt="" class="img-responsive"></a>
				</div>
				<div class="blog-desc">
					<p style="transform:scale(0.7,0.7);">' . $rows["contenu"] . '
					</p>
					<hr class="invis">
					
				</div>';
				}
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}

	public static function postPopulaire()
	{
		$views = array();
		$temp = array();
		$sql = "select id,vues from post";
		try {
			$requette = config::$bdd->prepare($sql);
			if ($requette->execute()) {
				$rows = $requette->fetchAll();
				foreach ($rows as $key => $rows) {
					$temp[$rows["id"]] = $rows["vues"];
				}
				$taille = count($temp) > 6 ? 6 : count($temp);
				for ($i = 0; $i < $taille; $i++) {
					$max = max($temp);
					$keys = array_search($max, $temp);
					array_push($views, $keys);
					unset($temp[$keys]);
				}
				return $views;
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
	public static function afficherPostPopulaire($post)
	{
		foreach ($post as $key => $post) {
			$sql = "select * from post where id=" . $post;
			try {
				$requette = config::$bdd->prepare($sql);
				if ($requette->execute()) {
					$rows = $requette->fetchAll();
					self::parcourirPost($rows);
				}
			} catch (Exception $e) {
				return 'Erreur: ' . $e->getMessage();
			}
		}
	}
	public static function parcourirPost($rows)
	{
		foreach ($rows as $key => $rows) {
			echo '	<li>
			<a href="blog-single?id=' . $rows["id"] . '" title="">
				<img src="../assets/Backoffice/image/' . $rows["image"] . '" alt="" class="img-responsive" >
			</a>
		</li>';
		}
	}

	public static function rechercherPost($idPost)
	{
		$sql = "select * from post where id=" . $idPost;
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
	public static function afficherPostAccueil()
	{
		$sql = "select * from post  order by id desc limit 0 , 3";
		try {
			$requette = config::$bdd->prepare($sql);
			if ($requette->execute()) {
				$rows = $requette->fetchAll();
				foreach ($rows as $key => $rows) {
					echo ' <div class="item"  >
                    <div class="blog-inner" >
                        <div class="blog-banner"  >
                            <img src="../assets/Backoffice/image/' . $rows["image"] . '" alt="" class="img-responsive" >
                        </div>
                        <div class="blog-content">
                            <h4>' . $rows["titre"] . '</h4>
                            <div class="blog-schedule">
                                <a href=blog-single.php?id=' . $rows["id"] . '>
                                    <h4>' . $rows["titre"] . '</h4>
                                </a>
                                <div class="blog-meta">
                                    <span><i class="fa fa-calendar-o"></i> January 15, 2018</span>
                                </div>
                                <p>' . $rows["introduction"] . '</p>
                            </div>
                        </div>
                    </div>
                </div>';
				}
			}
		} catch (Exception $e) {
			return 'Erreur: ' . $e->getMessage();
		}
	}
	
	
}
