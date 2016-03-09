<?php

namespace App\Http\Controllers;

use \Exception;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AdvCash\MerchantWebServiceFixes;
use App\AdvCash\authDTO;
use App\AdvCash\sendMoney;
use App\AdvCash\sendMoneyRequest;
use App\AdvCash\validationSendMoney;

class ApplicationController extends Controller
{
    protected function index() {
        return view('application.index');
    }
    protected function store(Request $request){
        $fields = $request->only(['price', 'email', 'text']);
        $merchantWebService = new MerchantWebServiceFixes();

        $arg0 = new authDTO();
        $arg0->apiName = $_ENV['API_NAME'];
        $arg0->accountEmail = $_ENV['ACC_EMAIL'];
        $arg0->authenticationToken = $merchantWebService->getAuthenticationToken($_ENV['API_PASS']);

        $arg1 = new sendMoneyRequest();
        $arg1->amount = $fields['price'];
        $arg1->currency = "USD";
        $arg1->email = $fields['email'];
        $arg1->note = $fields['text'];
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
        } catch (Exception $e) {
            echo "ERROR MESSAGE => " . $e->getMessage() . "<br/>";
            echo $e->getTraceAsString();
        }
        return view('application.success', ['response' => $sendMoneyResponse]);
    }
}
