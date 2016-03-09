<?php
namespace App\AdvCash;

use App\AdvCash\MerchantWebService;
use App\AdvCash\validationSendMoneyResponse;

//class_alias('foo', 'bar');

class MerchantWebServiceFixes extends MerchantWebService {
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