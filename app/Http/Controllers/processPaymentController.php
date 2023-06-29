<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class processPaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        // Set the Stripe API key
        Stripe::setApiKey(config('services.stripe.secret'));

        // Retrieve payment details from the request
        $cardholderName = $request->input('cardholder_name');
        $cardNumber = $request->input('card_number');
        $expirationDate = $request->input('expiration_date');
        $cvv = $request->input('cvv');
        $billingAddress = $request->input('billing_address');
        $houseId = $request->input('house_id');
        $amount = $request->input('amount');

        

        // Create a PaymentIntent object
        $paymentIntent = PaymentIntent::create([
            'amount' => $amount,
            'currency' => 'usd',
            'description' => 'House rental payment',
            'payment_method_data' => [
                'type' => 'card',
                'card' => [
                    'number' => $cardNumber,
                    'exp_month' => $expirationDateMonth,
                    'exp_year' => $expirationDateYear,
                    'cvc' => $cvv,
                ],
            ],
        ]);

        // Handle payment success or failure
        if ($paymentIntent->status === 'succeeded') {
            // Payment successful, update rental status or perform other actions

            return redirect()->route('paymentConfirmation');
        } else {
            // Payment failed, handle the failure case
            // You can display an error message or redirect back to the payment form with an error

            return redirect()->back()->with('error', 'Payment failed. Please try again.');
        }
    }

    public function paymentConfirmation()
    {
        return view('payment.confirmation');
    }
}
