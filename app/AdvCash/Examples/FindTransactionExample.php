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

$arg1 = "906e7351-860f-4f34-8d1b-d3e9dd7225fd";

$findTransaction = new findTransaction();
$findTransaction->arg0 = $arg0;
$findTransaction->arg1 = $arg1;

try {
    $findTransactionResponse = $merchantWebService->findTransaction($findTransaction);

    //echo print_r($getBalancesResponse, true)."<br/><br/>";
    echo print_r($findTransactionResponse->return, true)."<br/><br/>";
} catch (Exception $e) {
    echo "ERROR MESSAGE => " . $e->getMessage() . "<br/>";
    echo $e->getTraceAsString();
}
?>