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
$arg1->ecurrency = "YANDEX_MONEY";
$arg1->receiver = "receiver";
$arg1->note = "note";
$arg1->savePaymentTemplate = true;

$validationSendMoneyToEcurrency = new validationSendMoneyToEcurrency();
$validationSendMoneyToEcurrency->arg0 = $arg0;
$validationSendMoneyToEcurrency->arg1 = $arg1;

$sendMoneyToEcurrency = new sendMoneyToEcurrency();
$sendMoneyToEcurrency->arg0 = $arg0;
$sendMoneyToEcurrency->arg1 = $arg1;

try {
    $merchantWebService->validationSendMoneyToEcurrency($validationSendMoneyToEcurrency);
    $sendMoneyToEcurrencyResponse = $merchantWebService->sendMoneyToEcurrency($sendMoneyToEcurrency);

    echo print_r($sendMoneyToEcurrencyResponse, true)."<br/><br/>";
    echo $sendMoneyToEcurrencyResponse->return."<br/><br/>";
} catch (Exception $e) {
    echo "ERROR MESSAGE => " . $e->getMessage() . "<br/>";
    echo $e->getTraceAsString();
}
?>