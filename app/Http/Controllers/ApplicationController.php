<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AdvCash\MerchantWebService;
use App\AdvCash\authDTO;
use App\AdvCash\sendMoney;
use App\AdvCash\sendMoneyRequest;
use App\AdvCash\validationSendMoney;

class ApplicationController extends Controller
{
    protected function create() {
        return view('adverts.create');
    }
    protected function store(Request $request){
        $fields = $request->only(['price', 'text']);

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

        $sendMoneyResponse = null;

        try {
            $merchantWebService->validationSendMoney($validationSendMoney);
            $sendMoneyResponse = $merchantWebService->sendMoney($sendMoney);

            //echo print_r($sendMoneyResponse, true)."<br/><br/>";
            //echo $sendMoneyResponse->return."<br/><br/>";
        } catch (\Exception $e) {
            echo "ERROR MESSAGE => " . $e->getMessage() . "<br/>";
            echo $e->getTraceAsString();
        }
        return view('adverts.create', ['response' => $sendMoneyResponse]);
    }
}
