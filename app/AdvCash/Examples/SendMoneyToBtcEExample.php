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

$arg1 = new withdrawToEcurrencyRequest();
$arg1->amount = 1.00;
$arg1->currency = "RUR";
$arg1->note = "note";
$arg1->savePaymentTemplate = true;

$validationSendMoneyToBtcE = new validationSendMoneyToBtcE();
$validationSendMoneyToBtcE->arg0 = $arg0;
$validationSendMoneyToBtcE->arg1 = $arg1;

$sendMoneyToBtcE = new sendMoneyToBtcE();
$sendMoneyToBtcE->arg0 = $arg0;
$sendMoneyToBtcE->arg1 = $arg1;

try {
    $merchantWebService->validationSendMoneyToBtcE($validationSendMoneyToBtcE);
    $sendMoneyToBtcEResponse = $merchantWebService->sendMoneyToBtcE($sendMoneyToBtcE);

    echo print_r($sendMoneyToBtcEResponse, true)."<br/><br/>";
} catch (Exception $e) {
    echo "ERROR MESSAGE => " . $e->getMessage() . "<br/>";
    echo $e->getTraceAsString();
}
?>