<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Stripe\Exception\CardException;
use Stripe\StripeClient;

class PaymentController extends Controller
{
    private $stripe;
    public function __construct()
    {
        $this->stripe = new StripeClient(config(('services.stripe.secret')));
        // $this->stripe = new StripeClient(config('stripe.api_keys.secret_key'));

    }
    public function index(){
        return view('payment');
    }

    public function donet(Request $request)
    {

        $request->validate([
            'fullName' => 'required',
            'cardNumber' => 'required',
            'month' => 'required',
            'year' => 'required',
            'cvc' => 'required'
        ]);
     

        $token = $this->createToken($request);
        if (!empty($token['error'])) {
            return back()->withInput()->with('danger', $token['error']);
        }
        if (empty($token['id'])) {
            return back()->withInput()->with('danger', 'Payment failed.');
        }

        $charge = $this->createCharge($token['id'], $request->donateAmount*100,$request->fullName);
        if (!empty($charge) && $charge['status'] == 'succeeded') {
            // add
           
            // dd($token);
            return back()->with('success', 'Payment completed.');
        } else {
            return back()->withInput()->with('danger', 'Payment failed.');
        }
        return back()->withInput()->with('success','thanks for donting');
    }

    private function createToken($cardData)
    {
        $token = null;
        try {
            $token = $this->stripe->tokens->create([
                'card' => [
                    'name'=>$cardData['fullName'],
                    'number' => $cardData['cardNumber'],
                    'exp_month' => $cardData['month'],
                    'exp_year' => $cardData['year'],
                    'cvc' => $cardData['cvv']
                ]
            ]);
        } catch (CardException $e) {
            $token['error'] = $e->getError()->message;
        } catch (Exception $e) {
            $token['error'] = $e->getMessage();
        }
        return $token;
    }

    private function createCharge($tokenId, $amount,$donarName)
    {
        $charge = null;
        try {
            $charge = $this->stripe->charges->create([
                'amount' => $amount,
                'currency' => 'usd',
                'source' => $tokenId,
                'description' => 'Volunteer Donation from '.$donarName
            ]);
        } catch (Exception $e) {
            $charge['error'] = $e->getMessage();
        }
        return $charge;
    }
}

