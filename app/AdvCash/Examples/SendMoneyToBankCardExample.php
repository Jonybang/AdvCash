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

$arg1 = new bankCardTransferRequest();
$arg1->amount = 1.00;
$arg1->currency = "USD";
$arg1->cardNumber = "visa_or_mastercard_card_number";
$arg1->expiryMonth = "01";
$arg1->expiryYear = "19";
$arg1->note = "note";
$arg1->savePaymentTemplate = false;

$validationSendMoneyToBankCard = new validationSendMoneyToBankCard();
$validationSendMoneyToBankCard->arg0 = $arg0;
$validationSendMoneyToBankCard->arg1 = $arg1;

$sendMoneyToBankCard = new sendMoneyToBankCard();
$sendMoneyToBankCard->arg0 = $arg0;
$sendMoneyToBankCard->arg1 = $arg1;

try {
    $validationSendMoneyToBankCardResponse = $merchantWebService->validationSendMoneyToBankCard($validationSendMoneyToBankCard);
    $sendMoneyToBankCardResponse = $merchantWebService->sendMoneyToBankCard($sendMoneyToBankCard);

    echo print_r($sendMoneyToBankCardResponse, true)."<br/><br/>";
    echo $sendMoneyToBankCardResponse->return."<br/><br/>";
} catch (Exception $e) {
    echo "ERROR MESSAGE => " . $e->getMessage() . "<br/>";
    echo $e->getTraceAsString();
}
?>