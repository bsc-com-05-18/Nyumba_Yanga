<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\PaymentIntent;
use App\Models\Payment;
use App\Models\Landlord;
use App\Models\User;
use App\Models\Assignment;
use App\Models\Booking;
use App\Models\Property;


class PaymentController extends Controller
{
    //
    public function index()
    {
        return view('payment');
    }

    public function processPayment(Request $request)
    {
        $tenant = \Auth::guard('web')->user();
        $houses = $tenant->assignments()->with('property.landlord')->first();

        $landlord = $houses->property->landlord->id;
        $propertyPrice = $houses->property->price;
        $tenantId = $tenant->id;
        $propertyId = $houses->property->id;
        $tenantEmail = $tenant->email;
        $propertyId = $houses->property->id;

        $cardType = $request->input('card_type');

        $paymentAmount = $propertyPrice - ($propertyPrice * 0.02);

        Stripe::setApiKey(config('services.stripe.secret'));
        Stripe::setApiVersion('2020-08-27');

        try {
            $charge = Charge::create([
                'amount' => $paymentAmount * 100,
                'currency' => 'usd',
                'description' => 'Rent Payment',
                'source' => 'tok_' . $cardType,
                
            ]);

            $tenantPayment = new Payment;
            $tenantPayment->user_id = $tenantId;
            $tenantPayment->landlord_id = $landlord;
            $tenantPayment->property_id = $propertyId;
            $tenantPayment->payment_amount = $paymentAmount;
            $tenantPayment->save();

            if ($charge->status === 'succeeded') {

            return redirect()->back()->with('success', 'Payment was successful!');
        }
        else {
            return redirect()->back()->with('error', 'Payment NOT successful!');
        }
        }
        catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());

        }
    }
}
