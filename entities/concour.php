<?php

include_once "class_concour.php";
include_once "class_quizz.php";
function verification_post($tableau)
{
	for ($i = 0; $i < sizeof($tableau); $i++) {
		if (!isset($_POST[$tableau[$i]])) {
			if (empty($_POST[$tableau[$i]])) {
				return 0;
			}
		}
	}
	return 1;
}
extract($_POST);
if (verification_post(["titre", "description", "date", "heure", "duree"]) == 1 && !isset($_POST["operation"])) {
	$exemple = new concours($titre, $description, $date, $heure, $duree);
	if ($exemple->ajouter() == true) {
		$reponse = "ok";
	} else {
		$reponse = "il ya un probleme dans l'enregistrement'";
	}
} else {
	if (isset($_POST["operation"])) {
		if ($operation == "supprimer") {
			if (concours::supprimer($id) == 1) {
				$reponse = "ok";
			} else {
				$reponse = "opération echoué";
			}
		} else {
			if ($operation == "modifier") {
				concours::modifier($id, "titre", $titre);
				concours::modifier($id, "duree", $duree);
				concours::modifier($id, "description", $description);
				concours::modifier($id, "date_concour", $date);
				$variable = explode(":", $heure);
				$g = $variable[0] . ":" . $variable[1];
				concours::modifier($id, "heure", $g);
				$reponse = "ok";
			} else if ($operation == "afficherImage") {
				$reponse = json_encode(quizz::afficherImageQuizz($idConcour));
			}
			else if ($operation == "resultat") {
				$ids=json_decode($ids);
				if($selection=="classique")
				$reponse=concours::ajouterResultat($ids);
				else if($selection=="personnalisee")
				$reponse=concours::ajouterResultatPersonnalisee($ids);
			}
			else if($operation=="datePublication"){
				$reponse=concours::datePublication($date);
			}
		}
	} else {
		$reponse = "remplir toutes les case";
	}
}

echo $reponse;
