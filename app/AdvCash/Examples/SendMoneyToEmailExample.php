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

$validationSendMoneyToEmail = new validationSendMoneyToEmail();
$validationSendMoneyToEmail->arg0 = $arg0;
$validationSendMoneyToEmail->arg1 = $arg1;

$sendMoneyToEmail = new sendMoneyToEmail();
$sendMoneyToEmail->arg0 = $arg0;
$sendMoneyToEmail->arg1 = $arg1;

try {
    $merchantWebService->validationSendMoneyToEmail($validationSendMoneyToEmail);
    $sendMoneyToEmailResponse = $merchantWebService->sendMoneyToEmail($sendMoneyToEmail);

    echo print_r($sendMoneyToEmailResponse, true)."<br/><br/>";
    echo $sendMoneyToEmailResponse->return."<br/><br/>";
} catch (Exception $e) {
    echo "ERROR MESSAGE => " . $e->getMessage() . "<br/>";
    echo $e->getTraceAsString();
}
?>