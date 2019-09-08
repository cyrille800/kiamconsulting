<?php 
session_start();
require_once "config.php"; 
require_once "class_client.php"; 
require_once "class_paiement.php"; 

if(isset($_GET["id_client"])){
	require "vendor/autoload.php"; 

	$requette=config::$bdd->query("select * from paiement_client where id_client=".$_GET["id_client"]); 
$ids=require("config_paybal.php");

$apicontext=new \PayPal\Rest\ApiContext(

	new \PayPal\Auth\OAuthTokenCredential(
		$ids["id"],
		$ids["secret"]
	)

);
$list = new \PayPal\Api\ItemList();
$v=0;
$id_commande="";
	while($data=$requette->fetch()){
	$item=new \PayPal\Api\Item();
	if(paiement::retourne_valeur("id",$data["id_paiement"],"titre")!=""){
	$item->setName(paiement::retourne_valeur("id",$data["id_paiement"],"titre"));
	$item->setPrice(ceil(intval(paiement::retourne_valeur("id",$data["id_paiement"],"montant"))/656.63));
	$item->setCurrency('EUR');
	$item->setQuantity(1);
	$v+=ceil(paiement::retourne_valeur("id",$data["id_paiement"],"montant")/656.63);
	$id_commande.=$data["id_paiement"].",";
	$list->addItem($item);
	}
	}


$details =  new \PayPal\Api\Details();
$details->setSubTotal($v);
	$amount = new \PayPal\Api\Amount();
	$amount->setTotal($v);
	$amount->setCurrency('EUR');
	$amount->setDetails($details);

$transaction = new \PayPal\Api\Transaction();

$transaction->setItemList($list);
$transaction->setDescription("paiement des offres");
$transaction->setAmount($amount);
$transaction->setCustom($id_commande);


$payment=new \PayPal\Api\Payment();
$payment->setIntent('sale');
$redirectUrls= new \PayPal\Api\RedirectUrls();

$redirectUrls->setReturnUrl('http://127.0.0.1/kiamconsulting/views/backoffice/client/facture.php');
$redirectUrls->setCancelUrl('http://127.0.0.1/kiamconsulting/views/backoffice/client/index.php');
$payment->setRedirectUrls($redirectUrls);


$payment->setPayer((new \PayPal\Api\Payer())->setPaymentMethod('paypal'));

$payment->setTransactions([$transaction]);



$payment->create($apicontext);
echo json_encode([
'id'=>$payment->getId()
]);
}
?>