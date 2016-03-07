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

$arg1 = new validateAccountRequestDTO();
$arg1->walletId = 'wallet_id';
//$arg1->email = 'email';
$arg1->firstName = 'first';
$arg1->lastName = 'last';

$validateAccount = new validateAccount();
$validateAccount->arg0 = $arg0;
$validateAccount->arg1 = $arg1;

try {
    $validateAccountsResponse = $merchantWebService->validateAccount($validateAccount);
    echo print_r($validateAccountsResponse->return, true)."<br/><br/>";
} catch (Exception $e) {
    echo "ERROR MESSAGE => " . $e->getMessage() . "<br/>";
    echo $e->getTraceAsString();
}
?>
