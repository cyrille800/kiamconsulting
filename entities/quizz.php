<?php

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
if (verification_post(["id_concour", "question", "reponse", "autre_reponse"]) == 1 && !isset($_POST["operation"])) {
	$exemple = new quizz($id_concour, $question, $reponse, $autre_reponse);
	if ($exemple->ajouter() == true) {
		$id = quizz::retourne_valeur("question", $question, "id");
		if (!empty($_FILES["question"]) && trim($_FILES['question']['tmp_name']) != "") {
			$folder = "../views/assets/Backoffice/media/concour/";
			$temp_name = $_FILES['question']['tmp_name'];
			$location = $folder . $id . "question" . ".png";
			move_uploaded_file($temp_name, $location);
		}

		if (!empty($_FILES["reponse"]) && trim($_FILES['reponse']['tmp_name']) != "") {
			$folder = "../views/assets/Backoffice/media/concour/";
			$temp_name = $_FILES['reponse']['tmp_name'];
			$location = $folder . $id . "reponse" . ".png";
			move_uploaded_file($temp_name, $location);
		}

		if (!empty($_FILES["faux1"]) && trim($_FILES['faux1']['tmp_name']) != "") {
			$folder = "../views/assets/Backoffice/media/concour/";
			$temp_name = $_FILES['faux1']['tmp_name'];
			$location = $folder . $id . "faux1" . ".png";
			move_uploaded_file($temp_name, $location);
		}

		if (!empty($_FILES["faux2"]) && trim($_FILES['faux2']['tmp_name']) != "") {
			$folder = "../views/assets/Backoffice/media/concour/";
			$temp_name = $_FILES['faux2']['tmp_name'];
			$location = $folder . $id . "faux2" . ".png";
			move_uploaded_file($temp_name, $location);
		}

		if (!empty($_FILES["faux3"]) && trim($_FILES['faux3']['tmp_name']) != "") {
			$folder = "../views/assets/Backoffice/media/concour/";
			$temp_name = $_FILES['faux3']['tmp_name'];
			$location = $folder . $id . "faux3" . ".png";
			move_uploaded_file($temp_name, $location);
		}

		$reponse = "ok";
	} else {
		$reponse = "il ya un probleme dans l'enregistrement'";
	}
} else {
	if (isset($_POST["operation"])) {
		if ($operation == "supprimer") {
			if (quizz::supprimer($id) == 1) {
				$reponse = "ok";
			} else {
				$reponse = "opération echoué";
			}
		} else {
			if ($operation == "modifier") {
				quizz::modifier($id, "question", $question);
				quizz::modifier($id, "reponse", $reponse);
				quizz::modifier($id, "autre_reponse", $autre_reponse);
				$reponse = "ok";
			} else {
				if ($operation == "afficherQuizz") {
					$reponse = json_encode(quizz::afficherQuizzEtudiant($idConcour));
				}
				else if ($operation=="quizz") {
					$reponse=quizz::ajouterResultat($idEtudiant,$idConcour,$resultat);
				}
				else if ($operation=="verifier") {
					$reponse=quizz::verifierPasserQuizz($idEtudiant,$idConcour);
				}
				
			}
		}
	} else {
		$reponse = "remplir toutes les case";
	}
}

echo $reponse;
