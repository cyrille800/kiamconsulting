 <?php 
session_start();
require "vendor/autoload.php"; 
require_once "class_paiement.php"; 
$ids=require("config_paybal.php");

$apicontext=new \PayPal\Rest\ApiContext(

	new \PayPal\Auth\OAuthTokenCredential(
		$ids["id"],
		$ids["secret"]
	)

);

$payment = \PayPal\Api\Payment::get($_POST["paymentID"],$apicontext);

$execution= new \PayPal\Api\PaymentExecution();
$execute->setPayerId($_POST["payerID"]);
$execute->setTransactions($payment->getTransactions());

$payment->execute($execution,$apicontext);
echo json_encode([
"id" => $payment->getId()
]);
$verification=$payment->getTransactions()[0]->getCustom();
	$requette=config::$bdd->query("select * from paiement_client where id_client=".$_GET["id_client"]); 
$id_commande="";
	while($data=$requette->fetch()){
	$id_commande.=$data["id_paiement"].",";
	}
	if($id_commande==$verification){
		$tableau=explode("",$verification);
		foreach ($tableau as $key => $value) {
			if($value!=""){
				$requette=config::$bdd->query("update paiement_client set etat=1 where id_client".$_GET["id_client"]. "&& id_paiement=".$value);
			} 
		}
	}
?>