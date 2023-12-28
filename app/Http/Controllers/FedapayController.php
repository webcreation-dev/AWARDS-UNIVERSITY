<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessVote;
use App\Models\Student;
use App\Models\Vote;
use FedaPay;
use Mockery\Exception;
use Illuminate\Http\Request;

class FedapayController extends Controller
{

    public function process(Request $request)
    {

        $price = $request->number * 50;

        $transactionData = [
            "description" => "VOTE AWARD UNIVERSITY",
            'amount' => intval($price),
            'currency' => ['iso' => 'XOF'],
            'callback_url' => url('callback'),
            'customer' => [
                "firstname" => "UNSTIM",
                "lastname" => "DASSA",
                "email" => "florentinsoglonou@gmail.com",
                'phone_number' => [
                    'number' => '64000001',
                    'country' => 'bj',
                ]
            ]
        ];

        // FedaPay\FedaPay::setEnvironment("sandbox");
        // FedaPay\FedaPay::setApiKey("sk_sandbox_-KGmRqvYTOJiNyCi2atfDuvF");

        // FedaPay\FedaPay::setEnvironment("live");
        // FedaPay\FedaPay::setApiKey("sk_live_Y1qYCqcrx0JJRLMw5M9Aj8Jo");

        FedaPay\FedaPay::setEnvironment("live");
        FedaPay\FedaPay::setApiKey("sk_live_KHFRd7IhsP8iU_5J-Qut9Ghc");

        try {
            $transaction = FedaPay\Transaction::create($transactionData);
            $token = $transaction->generateToken();


            $combinedData = $request->myVariable . '|' . $request->number;
            return redirect($token->url)->withCookie(
                cookie('combined_data', $combinedData, 60)
            );

        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

    }

    public function callback(Request $request)
    {

        $combinedData = $request->cookie('combined_data');
        $status = $request->status;
        list($candidate_id, $count) = explode('|', $combinedData);

        ProcessVote::dispatch($candidate_id, $count, $status);

        if ($request->status == 'approved') {
            $student = Student::find($candidate_id);
            return view('success_vote', compact('student'));
        } elseif ($request->status == 'canceled') {
            return back()->with('error', 'VOTRE VOTE A ÉTÉ ANNULÉ');
        } else {
            return back()->with('error', 'VOTRE VOTE A ÉCHOUÉ');
        }

    }
}
