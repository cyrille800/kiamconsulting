<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 require 'phpMailer/vendor/autoload.php';
include_once "class_client.php";
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
$reponse = "";
if (isset($_FILES["avatar"])) {
	$folder = "../views/assets/Backoffice/media/users/";
	$temp_name = $_FILES['avatar']['tmp_name'];
	$location = $folder . $_SESSION["id"] . ".png";
	move_uploaded_file($temp_name, $location);
	echo "ok";
} else {
	if (verification_post(["username", "email", "password", "type"]) == 1 && !isset($_POST["operation"])) {
		$exemple = new client($username, $email, $password, $type);
		if ($exemple->ajouter() == true) {
			$reponse = "ok";
		} else {
			$reponse = "il ya un probleme dans l'enregistrement'";
		}
	} else {
		if (isset($_POST["operation"])) {
			if ($operation == "supprimer") {
				if (client::supprimer($id) == 1) {
					$reponse = "ok";
				} else {
					$reponse = "opération echoué";
				}
			} else {
				if ($operation == "modifier") {
					if (isset($_POST["username"])) {
						client::modifier($id, "username", $username);
						client::modifier($id, "email", $email);
						$reponse = "ok";
					} else {
						if ($npassword != $cpassword || trim(empty($_POST["npassword"]))) {
							$reponse = "la confirmation du mot de passe est incorrect";
						} else {
							$i = client::retourne_valeur("id", $id, "password");
							if ($i != md5($apassword)) {
								$reponse = "l'ancien mot de passe est incorrect. <br> <br>vous n'avez pas l'auritasion de changer le mot de passe";
							} else {
								client::modifier($id, "password", md5($npassword));
								$reponse = "ok";
							}
						}
					}
				} else {
					if ($operation == "connexion") {
						if (client::verifiers("username", $username) == true && client::verifiers("email", $username) == true) {
							$reponse = "login ou mot de pas incorrect";
						} else {
							if (client::retourne_valeur("username", $username, "password") != md5($password) && client::retourne_valeur("email", $username, "password") != md5($password)) {
								$reponse = "username/email ou mot de pas incorrect";
							} else {
								if (client::retourne_valeur("username", $username, "id") == "") {
									$_SESSION["id"] = intval(client::retourne_valeur("email", $username, "id"));
									$_SESSION["type"] = intval(client::retourne_valeur("email", $username, "type"));
								} else {
									$_SESSION["id"] = intval(client::retourne_valeur("username", $username, "id"));
									$_SESSION["type"] = intval(client::retourne_valeur("username", $username, "type"));
								}
								$reponse = "ok";
							}
						}
					} else {
						if ($operation == "registration") {
							$type2 = ($type == "Etudiant") ? 0 : ($type == "Patient") ? 1 : 0;
							$client = new client($regusername, $email, $regpassword, $type2, $phoneNumber);
							$reponse = $client->ajouter();
						}
						else if ($operation == "envoyerMessage"){
							if (isset($_SESSION["id"])) {
								$req = config::$bdd->prepare("select nom,prenom,email from etudiant inner join client where id_client=".$_SESSION["id"]);
								$req->execute();
								$rows=$req->fetchAll();
								$reponse=client::ajouterMessage($message,$rows[0]["email"],$rows[0]["nom"],$rows[0]["prenom"],$repondu);
							} else {
								$reponse=client::ajouterMessage($message,$mail,$lastName,$firstName,$repondu);
							}
							
						}
						else if ($operation == "repondre"){
							$reponse=client::envoyerMail($id);
							$mail = new PHPMailer(true);
							try {
								$mail->SMTPDebug = 2;
								$mail->isSMTP();
								$mail->Host       = 'smtp.gmail.com';
								$mail->SMTPAuth   = true;
								$mail->Username   = 'juniormotcheho@gmail.com';
								$mail->Password   = 'MON amour00!';
								$mail->SMTPSecure = 'tls';
								$mail->Port       = 587;
								$mail->setFrom("juniormotcheho@gmail.com", "kiam");
								$mail->addAddress($email);
								$mail->isHTML(true);
								$mail->Subject = 'Reponse';
								$mail->Body    = $message;
								$mail->AltBody = strip_tags($message);
								$mail->send();
								return 'Message envoye';
							} catch (Exception $e) {
								echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
							}

						}
					}
				}
			}
		} else {
			$reponse = "remplir toutes les case";
		}
	}
}

echo $reponse;
