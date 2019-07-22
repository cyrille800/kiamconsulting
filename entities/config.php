<?php 
class config{
	 public static $bdd;
 
  public static function connexion() {
  self::$bdd = new PDO('mysql:host=localhost;dbname=kiam_consulting', 'root', '');
  }
}


 ?>