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

$arg1 = new registrationRequest();
$arg1->email = "email";
$arg1->firstName = "firstName";
$arg1->lastName = "lastName";
$arg1->language = "en";
$arg1->ip = "*.*.*.*";

$register = new register();
$register->arg0 = $arg0;
$register->arg1 = $arg1;

try {
    $merchantWebService->register($register);
} catch (Exception $e) {
    echo "ERROR MESSAGE => " . $e->getMessage() . "<br/>";
    echo $e->getTraceAsString();
}
?>