<?php

function difference($date)
{
	$chaine_c = date("Y-n-j H:i:s", time());
	list($annee_c, $mois_c, $jour_c, $heure_c, $minutes_c, $secondes_c) = sscanf($chaine_c, "%d-%d-%d %d:%d:%d");
	$dates = strtotime($date);
	$chaine = date("Y-n-j H:i:s", $dates);
	list($annee, $mois, $jour, $heure, $minutes, $secondes) = sscanf($chaine, "%d-%d-%d %d:%d:%d");

	$reponse = "";

	if (($annee_c - $annee) > 0) {
		$reponse = ($annee_c - $annee) . " ans";
	} else {
		if (($mois_c - $mois) > 0) {
			$reponse = ($mois_c - $mois) . " mois";
		} else {
			if (($jour_c - $jour) > 0) {
				$reponse = ($jour_c - $jour) . " jours";
			} else {
				if (($heure_c - $heure) > 0) {
					$reponse = ($heure_c - $heure) . " heures";
				} else {
					if (($minutes_c - $minutes) > 0) {
						$reponse = ($minutes_c - $minutes) . " minutes";
					} else {
						if (($secondes_c - $secondes) > 0) {
							$reponse = ($secondes_c - $secondes) . " secondes";
						} else { }
					}
				}
			}
		}
	}

	return $reponse;
}
