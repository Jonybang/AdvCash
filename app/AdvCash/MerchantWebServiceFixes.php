<?php
namespace App\AdvCash;

use App\AdvCash\MerchantWebService;
use App\AdvCash\validationSendMoneyResponse;

class MerchantWebServiceFixes extends MerchantWebService {

    private static $classmap = array(
        'transferBankCard' => 'App\AdvCash\transferBankCard',
        'authDTO' => 'App\AdvCash\authDTO',
        'bankCardTransferRequestDTO' => 'App\AdvCash\bankCardTransferRequestDTO',
        'transferBankCardResponse' => 'App\AdvCash\transferBankCardResponse',
        'validateAdvcashCardTransfer' => 'App\AdvCash\validateAdvcashCardTransfer',
        'advcashCardTransferRequestDTO' => 'App\AdvCash\advcashCardTransferRequestDTO',
        'validateAdvcashCardTransferResponse' => 'App\AdvCash\validateAdvcashCardTransferResponse',
        'findTransaction' => 'App\AdvCash\findTransaction',
        'findTransactionResponse' => 'App\AdvCash\findTransactionResponse',
        'outcomingTransactionDTO' => 'App\AdvCash\outcomingTransactionDTO',
        'baseDTO' => 'App\AdvCash\baseDTO',
        'validateEmailTransfer' => 'App\AdvCash\validateEmailTransfer',
        'emailTransferRequestDTO' => 'App\AdvCash\emailTransferRequestDTO',
        'validateEmailTransferResponse' => 'App\AdvCash\validateEmailTransferResponse',
        'validationSendMoneyToEcurrency' => 'App\AdvCash\validationSendMoneyToEcurrency',
        'withdrawToEcurrencyRequest' => 'App\AdvCash\withdrawToEcurrencyRequest',
        'moneyRequest' => 'App\AdvCash\moneyRequest',
        'validationSendMoneyToEcurrencyResponse' => 'App\AdvCash\validationSendMoneyToEcurrencyResponse',
        'validateAccounts' => 'App\AdvCash\validateAccounts',
        'validateAccountsResponse' => 'App\AdvCash\validateAccountsResponse',
        'accountPresentDTO' => 'App\AdvCash\accountPresentDTO',
        'sendMoneyToEcurrency' => 'App\AdvCash\sendMoneyToEcurrency',
        'sendMoneyToEcurrencyResponse' => 'App\AdvCash\sendMoneyToEcurrencyResponse',
        'transferAdvcashCard' => 'App\AdvCash\transferAdvcashCard',
        'transferAdvcashCardResponse' => 'App\AdvCash\transferAdvcashCardResponse',
        'withdrawalThroughExternalPaymentSystem' => 'App\AdvCash\withdrawalThroughExternalPaymentSystem',
        'withdrawalThroughExternalPaymentSystemRequestDTO' => 'App\AdvCash\withdrawalThroughExternalPaymentSystemRequestDTO',
        'withdrawalThroughExternalPaymentSystemResponse' => 'App\AdvCash\withdrawalThroughExternalPaymentSystemResponse',
        'currencyExchange' => 'App\AdvCash\currencyExchange',
        'currencyExchangeRequest' => 'App\AdvCash\currencyExchangeRequest',
        'currencyExchangeResponse' => 'App\AdvCash\currencyExchangeResponse',
        'sendMoneyToAdvcashCard' => 'App\AdvCash\sendMoneyToAdvcashCard',
        'advcashCardTransferRequest' => 'App\AdvCash\advcashCardTransferRequest',
        'sendMoneyToAdvcashCardResponse' => 'App\AdvCash\sendMoneyToAdvcashCardResponse',
        'sendMoney' => 'App\AdvCash\sendMoney',
        'sendMoneyRequest' => 'App\AdvCash\sendMoneyRequest',
        'sendMoneyResponse' => 'App\AdvCash\sendMoneyResponse',
        'validationSendMoneyToAdvcashCard' => 'App\AdvCash\validationSendMoneyToAdvcashCard',
        'validationSendMoneyToAdvcashCardResponse' => 'App\AdvCash\validationSendMoneyToAdvcashCardResponse',
        'validationCurrencyExchange' => 'App\AdvCash\validationCurrencyExchange',
        'validationCurrencyExchangeResponse' => 'App\AdvCash\validationCurrencyExchangeResponse',
        'emailTransfer' => 'App\AdvCash\emailTransfer',
        'emailTransferResponse' => 'App\AdvCash\emailTransferResponse',
        'sendMoneyToEmail' => 'App\AdvCash\sendMoneyToEmail',
        'sendMoneyToEmailResponse' => 'App\AdvCash\sendMoneyToEmailResponse',
        'validateTransfer' => 'App\AdvCash\validateTransfer',
        'transferRequestDTO' => 'App\AdvCash\transferRequestDTO',
        'validateTransferResponse' => 'App\AdvCash\validateTransferResponse',
        'sendMoneyToBtcE' => 'App\AdvCash\sendMoneyToBtcE',
        'sendMoneyToBtcEResponse' => 'App\AdvCash\sendMoneyToBtcEResponse',
        'sendMoneyToBtcEResultHolder' => 'App\AdvCash\sendMoneyToBtcEResultHolder',
        'register' => 'App\AdvCash\register',
        'registrationRequest' => 'App\AdvCash\registrationRequest',
        'registerResponse' => 'App\AdvCash\registerResponse',
        'validateAccount' => 'App\AdvCash\validateAccount',
        'validateAccountRequestDTO' => 'App\AdvCash\validateAccountRequestDTO',
        'validateAccountResponse' => 'App\AdvCash\validateAccountResponse',
        'validateAccountResultDTO' => 'App\AdvCash\validateAccountResultDTO',
        'validationSendMoneyToEmail' => 'App\AdvCash\validationSendMoneyToEmail',
        'validationSendMoneyToEmailResponse' => 'App\AdvCash\validationSendMoneyToEmailResponse',
        'validationSendMoneyToBankCard' => 'App\AdvCash\validationSendMoneyToBankCard',
        'bankCardTransferRequest' => 'App\AdvCash\bankCardTransferRequest',
        'validationSendMoneyToBankCardResponse' => 'App\AdvCash\validationSendMoneyToBankCardResponse',
        'makeCurrencyExchange' => 'App\AdvCash\makeCurrencyExchange',
        'makeCurrencyExchangeResponse' => 'App\AdvCash\makeCurrencyExchangeResponse',
        'validationSendMoney' => 'App\AdvCash\validationSendMoney',
        'validationSendMoneyResponse' => 'App\AdvCash\validationSendMoneyResponse',
        'validateCurrencyExchange' => 'App\AdvCash\validateCurrencyExchange',
        'validateCurrencyExchangeResponse' => 'App\AdvCash\validateCurrencyExchangeResponse',
        'validateWithdrawalThroughExternalPaymentSystem' => 'App\AdvCash\validateWithdrawalThroughExternalPaymentSystem',
        'validateWithdrawalThroughExternalPaymentSystemResponse' => 'App\AdvCash\validateWithdrawalThroughExternalPaymentSystemResponse',
        'validationSendMoneyToBtcE' => 'App\AdvCash\validationSendMoneyToBtcE',
        'validationSendMoneyToBtcEResponse' => 'App\AdvCash\validationSendMoneyToBtcEResponse',
        'validateBankCardTransfer' => 'App\AdvCash\validateBankCardTransfer',
        'validateBankCardTransferResponse' => 'App\AdvCash\validateBankCardTransferResponse',
        'makeTransfer' => 'App\AdvCash\makeTransfer',
        'makeTransferResponse' => 'App\AdvCash\makeTransferResponse',
        'getBalances' => 'App\AdvCash\getBalances',
        'getBalancesResponse' => 'App\AdvCash\getBalancesResponse',
        'walletBalanceDTO' => 'App\AdvCash\walletBalanceDTO',
        'sendMoneyToBankCard' => 'App\AdvCash\sendMoneyToBankCard',
        'sendMoneyToBankCardResponse' => 'App\AdvCash\sendMoneyToBankCardResponse',
        'history' => 'App\AdvCash\history',
        'MerchantAPITransactionFilter' => 'App\AdvCash\MerchantAPITransactionFilter',
        'historyResponse' => 'App\AdvCash\historyResponse',
        'exceptionType' => 'App\AdvCash\exceptionType',
        'currency' => 'App\AdvCash\currency',
        'cardType' => 'App\AdvCash\cardType',
        'transactionDirection' => 'App\AdvCash\transactionDirection',
        'transactionStatus' => 'App\AdvCash\transactionStatus',
        'transactionName' => 'App\AdvCash\transactionName',
        'verificationStatus' => 'App\AdvCash\verificationStatus',
        'ecurrency' => 'App\AdvCash\ecurrency',
        'externalSystemWithdrawalType' => 'App\AdvCash\externalSystemWithdrawalType',
        'currencyExchangeAction' => 'App\AdvCash\currencyExchangeAction',
        'typeOfTransaction' => 'App\AdvCash\typeOfTransaction',
        'supportedLanguage' => 'App\AdvCash\supportedLanguage',
        'NotEnoughMoneyException' => 'App\AdvCash\NotEnoughMoneyException',
        'UserBlockedException' => 'App\AdvCash\UserBlockedException',
        'TransactionIsNotAvailableException' => 'App\AdvCash\TransactionIsNotAvailableException',
        'LimitPerMonthException' => 'App\AdvCash\LimitPerMonthException',
        'BadParametersException' => 'App\AdvCash\BadParametersException',
        'LimitPerDayException' => 'App\AdvCash\LimitPerDayException',
        'MerchantDisabledException' => 'App\AdvCash\MerchantDisabledException',
        'NotAuthException' => 'App\AdvCash\NotAuthException',
        'WalletDoesNotExist' => 'App\AdvCash\WalletDoesNotExist',
        'WrongParamsException' => 'App\AdvCash\WrongParamsException',
        'LimitsException' => 'App\AdvCash\LimitsException',
        'WrongIpException' => 'App\AdvCash\WrongIpException',
        'InternalException' => 'App\AdvCash\InternalException',
        'AccessDeniedException' => 'App\AdvCash\AccessDeniedException',
        'CardNumberIsNotValidException' => 'App\AdvCash\CardNumberIsNotValidException',
        'TransactionFailureException' => 'App\AdvCash\TransactionFailureException',
        'LimitPerTransactionException' => 'App\AdvCash\LimitPerTransactionException',
        'DatabaseException' => 'App\AdvCash\DatabaseException',
        'UserDoesNotExistException' => 'App\AdvCash\UserDoesNotExistException',
        'CardIsNotActiveException' => 'App\AdvCash\CardIsNotActiveException',
        'CardDoesNotExistException' => 'App\AdvCash\CardDoesNotExistException',
        'CallRestrictionException' => 'App\AdvCash\CallRestrictionException',
        'EmailAlreadyExistException' => 'App\AdvCash\EmailAlreadyExistException',
        'WrongEmailException' => 'App\AdvCash\WrongEmailException',
        'TransactionTemporaryNotAvailableException' => 'App\AdvCash\TransactionTemporaryNotAvailableException',
        'ExchangeCurrencyException' => 'App\AdvCash\ExchangeCurrencyException',
        'ApiException' => 'App\AdvCash\ApiException',
        'NotEnoughMoneyApiException' => 'App\AdvCash\NotEnoughMoneyApiException',
        'WalletCurrencyIncorrectException' => 'App\AdvCash\WalletCurrencyIncorrectException',
        'RegistrationException' => 'App\AdvCash\RegistrationException',
        'NotSupportedCountryException' => 'App\AdvCash\NotSupportedCountryException',
        'NotSupportedBankBinException' => 'App\AdvCash\NotSupportedBankBinException',
        'CodeIsNotValidException' => 'App\AdvCash\CodeIsNotValidException',
    );

    public function __construct($wsdl='https://wallet.advcash.com:8443/wsm/merchantWebService?wsdl', $options=array()) {
        foreach(self::$classmap as $wsdlClassName => $phpClassName) {
            if(!isset($options['classmap'][$wsdlClassName])) {
                $options['classmap'][$wsdlClassName] = $phpClassName;
            }
        }
        echo print_r($options, true);
        $options['location'] = 'https://wallet.advcash.com:8443/wsm/merchantWebService';
        libxml_disable_entity_loader(false);
        parent::__construct($wsdl, $options);
    }

    public function transferBankCard($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\transferBankCard)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('transferBankCard', $args);
    }
    public function validateAdvcashCardTransfer($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\validateAdvcashCardTransfer)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('validateAdvcashCardTransfer', $args);
    }
    public function findTransaction($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\findTransaction)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('findTransaction', $args);
    }
    public function validateEmailTransfer($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\validateEmailTransfer)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('validateEmailTransfer', $args);
    }
    public function validationSendMoneyToEcurrency($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\validationSendMoneyToEcurrency)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('validationSendMoneyToEcurrency', $args);
    }
    public function validateAccounts($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\validateAccounts)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('validateAccounts', $args);
    }
    public function sendMoneyToEcurrency($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\sendMoneyToEcurrency)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('sendMoneyToEcurrency', $args);
    }
    public function transferAdvcashCard($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\transferAdvcashCard)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('transferAdvcashCard', $args);
    }
    public function withdrawalThroughExternalPaymentSystem($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\withdrawalThroughExternalPaymentSystem)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('withdrawalThroughExternalPaymentSystem', $args);
    }
    public function currencyExchange($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\currencyExchange)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('currencyExchange', $args);
    }
    public function sendMoneyToAdvcashCard($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\sendMoneyToAdvcashCard)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('sendMoneyToAdvcashCard', $args);
    }
    public function sendMoney($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\sendMoney)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('sendMoney', $args);
    }
    public function validationSendMoneyToAdvcashCard($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\validationSendMoneyToAdvcashCard)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('validationSendMoneyToAdvcashCard', $args);
    }
    public function validationCurrencyExchange($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\validationCurrencyExchange)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('validationCurrencyExchange', $args);
    }
    public function emailTransfer($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\emailTransfer)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('emailTransfer', $args);
    }
    public function sendMoneyToEmail($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\sendMoneyToEmail)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('sendMoneyToEmail', $args);
    }
    public function validateTransfer($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\validateTransfer)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('validateTransfer', $args);
    }
    public function sendMoneyToBtcE($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\sendMoneyToBtcE)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('sendMoneyToBtcE', $args);
    }
    public function register($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\register)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('register', $args);
    }
    public function validateAccount($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\validateAccount)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('validateAccount', $args);
    }
    public function validationSendMoneyToEmail($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\validationSendMoneyToEmail)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('validationSendMoneyToEmail', $args);
    }
    public function validationSendMoneyToBankCard($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\validationSendMoneyToBankCard)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('validationSendMoneyToBankCard', $args);
    }
    public function makeCurrencyExchange($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\makeCurrencyExchange)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('makeCurrencyExchange', $args);
    }
    public function validationSendMoney($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\validationSendMoney)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('validationSendMoney', $args);
    }
    public function validateCurrencyExchange($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\validateCurrencyExchange)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('validateCurrencyExchange', $args);
    }
    public function validateWithdrawalThroughExternalPaymentSystem($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\validateWithdrawalThroughExternalPaymentSystem)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('validateWithdrawalThroughExternalPaymentSystem', $args);
    }
    public function validationSendMoneyToBtcE($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\validationSendMoneyToBtcE)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('validationSendMoneyToBtcE', $args);
    }
    public function validateBankCardTransfer($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\validateBankCardTransfer)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('validateBankCardTransfer', $args);
    }
    public function makeTransfer($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\makeTransfer)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('makeTransfer', $args);
    }
    public function getBalances($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\getBalances)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('getBalances', $args);
    }
    public function sendMoneyToBankCard($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\sendMoneyToBankCard)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('sendMoneyToBankCard', $args);
    }
    public function history($mixed = null) {
        $validParameters = array(
            '(App\AdvCash\history)',
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall('history', $args);
    }
}