<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('max_execution_time', 0);
require_once("MerchantWebService.php");
$merchantWebService = new MerchantWebService();

$arg0 = new authDTO();
$arg0->apiName = "api_name";
$arg0->accountEmail = "account_email";
$arg0->authenticationToken = $merchantWebService->getAuthenticationToken("api_password");

$arg1 = new advcashCardTransferRequest();
$arg1->amount = 1.00;
$arg1->currency = "USD";
$arg1->email = "receiver_email";
$arg1->cardType = "VIRTUAL";
//$arg1->cardType = "PLASTIC";
$arg1->note = "note";
$arg1->savePaymentTemplate = false;

$validationSendMoneyToAdvcashCard = new validationSendMoneyToAdvcashCard();
$validationSendMoneyToAdvcashCard->arg0 = $arg0;
$validationSendMoneyToAdvcashCard->arg1 = $arg1;

$sendMoneyToAdvcashCard = new sendMoneyToAdvcashCard();
$sendMoneyToAdvcashCard->arg0 = $arg0;
$sendMoneyToAdvcashCard->arg1 = $arg1;

try {
    $merchantWebService->validationSendMoneyToAdvcashCard($validationSendMoneyToAdvcashCard);
    $sendMoneyToAdvcashCardResponse = $merchantWebService->sendMoneyToAdvcashCard($sendMoneyToAdvcashCard);

    echo print_r($sendMoneyToAdvcashCardResponse, true)."<br/><br/>";
    echo $sendMoneyToAdvcashCardResponse->return."<br/><br/>";
} catch (Exception $e) {
    echo "ERROR MESSAGE => " . $e->getMessage() . "<br/>";
    echo $e->getTraceAsString();
}
?>