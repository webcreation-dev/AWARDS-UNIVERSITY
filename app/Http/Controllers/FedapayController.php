<?php

namespace App\Http\Controllers;

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
                    'number' => '96135159',
                    'country' => 'bj',
                ]
            ]
        ];

        // FedaPay\FedaPay::setEnvironment("sandbox");
        // FedaPay\FedaPay::setApiKey("sk_sandbox_-KGmRqvYTOJiNyCi2atfDuvF");

        // FedaPay\FedaPay::setEnvironment("live");
        // FedaPay\FedaPay::setApiKey("sk_live_Y1qYCqcrx0JJRLMw5M9Aj8Jo");

        FedaPay\FedaPay::setEnvironment("live");
        FedaPay\FedaPay::setApiKey("sk_live_qt1NZsH3nCWEcyTaNhX8fjYU");


        try {
            $transaction = FedaPay\Transaction::create($transactionData);
            $token = $transaction->generateToken();

            session([
                'candidate' => $request->myVariable,
                'number' => $request->number,
            ]);
            return redirect($token->url);

        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

    }

    public function callback(Request $request)
    {
        $candidate_id = session('candidate');
        $count = session('number');

        if($request->status == 'approved') {


            $student = Student::find($candidate_id);
            $vote = Vote::where('student_id', $student->id)->first();

            if($vote) {
                $vote->count = $vote->count + $count;
                $vote->prix = $vote->prix + ($count * 50);
                $vote->save();

            }else {
                $vote = Vote::create([
                    'student_id' => $student->id,
                    'count' => $count,
                    'prix' => $count * 50,
                ]);
            }

            session()->forget('candidate', 'number');
            return view('success_vote', compact('student'));

        }elseif($request->status == 'canceled'){
            session()->forget('candidate', 'number');
            return back()->with('error', 'VOTRE VOTE A ÉTÉ ANNULÉ');
        }else {
            session()->forget('candidate', 'number');
            return back()->with('error', 'VOTRE VOTE A ÉCHOUÉ');
        }

    }
}
