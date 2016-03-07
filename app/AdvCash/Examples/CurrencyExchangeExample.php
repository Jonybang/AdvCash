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

$arg1 = new currencyExchangeRequest();
$arg1->from = "USD";
$arg1->to = "EUR";
//$arg1->action = "BUY";
$arg1->action = "SELL";
$arg1->amount = 1.00;
$arg1->note = "note";

$validationCurrencyExchange = new validationCurrencyExchange();
$validationCurrencyExchange->arg0 = $arg0;
$validationCurrencyExchange->arg1 = $arg1;

$currencyExchange = new currencyExchange();
$currencyExchange->arg0 = $arg0;
$currencyExchange->arg1 = $arg1;

try {
    $merchantWebService->validationCurrencyExchange($validationCurrencyExchange);
    $currencyExchangeResponse = $merchantWebService->currencyExchange($currencyExchange);

    echo print_r($currencyExchangeResponse, true)."<br/><br/>";
    echo $currencyExchangeResponse->return."<br/><br/>";
} catch (Exception $e) {
    echo "ERROR MESSAGE => " . $e->getMessage() . "<br/>";
    echo $e->getTraceAsString();
}
?>