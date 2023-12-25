<?php

namespace App\Http\Controllers;

use FedaPay;
use Mockery\Exception;
use Illuminate\Http\Request;

class FedapayController extends Controller
{

    public function process(Request $request)
    {

        $transactionData = [

            "description" => "Transaction for adjilan2403@gmail.com",
            'amount' => intval(100),
            'currency' => ['iso' => 'XOF'],
            'callback_url' => url('callback'),
            'customer' => [
                "firstname" => "Julian",
                "lastname" => "ADJIBI",
                "email" => "adjilan2403@gmail.com",
                'phone_number' => [
                    'number'  => '51716504',
                    'country' => 'bj'
                ]
            ]
        ];

        FedaPay\FedaPay::setEnvironment("live");
        FedaPay\FedaPay::setApiKey("sk_live_Y1qYCqcrx0JJRLMw5M9Aj8Jo");


        try {
            $transaction = FedaPay\Transaction::create($transactionData);
            $token = $transaction->generateToken();

            return redirect($token->url);
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

    }

    public function callback(Request $request)
    {
        // dd($request->all());
        // FedaPay\FedaPay::setEnvironment("live");
        // FedaPay\FedaPay::setApiKey("sk_live_Y1qYCqcrx0JJRLMw5M9Aj8Jo");
        // $transaction_id = $request->input('id');
        // $transaction = FedaPay\Transaction::retrieve($transaction_id);

        if($request->status == 'approved') {

            dd("C'est approuvé");
        }elseif($request->status == 'canceled'){
            dd("C'est annulé");
        }else {
            dd("C'est échoué");
        }

    }
}
