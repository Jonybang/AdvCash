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

$arg1 = new sendMoneyRequest();
$arg1->amount = 1.00;
$arg1->currency = "USD";
$arg1->email = "receiver_email";
$arg1->note = "note";
$arg1->savePaymentTemplate = false;

$validationSendMoney = new validationSendMoney();
$validationSendMoney->arg0 = $arg0;
$validationSendMoney->arg1 = $arg1;

$sendMoney = new sendMoney();
$sendMoney->arg0 = $arg0;
$sendMoney->arg1 = $arg1;

try {
    $merchantWebService->validationSendMoney($validationSendMoney);
    $sendMoneyResponse = $merchantWebService->sendMoney($sendMoney);

    echo print_r($sendMoneyResponse, true)."<br/><br/>";
    echo $sendMoneyResponse->return."<br/><br/>";
} catch (Exception $e) {
    echo "ERROR MESSAGE => " . $e->getMessage() . "<br/>";
    echo $e->getTraceAsString();
}
?>