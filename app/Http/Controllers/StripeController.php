<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\payment;
use Illuminate\Http\Request;

class StripeController extends Controller
{

    public function session(Request $request)
    {
        $user         = auth()->user(); 

        // Array to store the line items for the checkout session
         $propertyItems = []; 

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET')); // Set the Stripe API key

        foreach (Property::all() as $id => $details) {

            // Loop through each item in the property
            $property_title = $details['property_title'];
            $price= $details['price'];
            $description = $details['description']; 
            $location= $details['location'];
            
            // Format the total price for Stripe (in cents)
            $two0 = "00";
            $unit_amount = "$price$two0"; 

            $propertyItems[] = [
                'price_data' => [
                    'property_data' => [
                        'name' => $property_title, 
                    ],
                    'currency'     => 'USD', 
                    'unit_amount' => $unit_amount,
                    'product_data' => ['name' => 'Nyumba']
                ],
                'quantity' => 1
            ];
        }

        // Create a checkout session with the line items and other details
        $checkoutSession = \Stripe\Checkout\Session::create([
            'line_items'            => [$propertyItems],
            'mode'                  => 'payment', 
            'allow_promotion_codes' => true,
            'metadata'              => [
                'user_id' => "0001" // Set any additional metadata (optional)
            ],
             'customer_email' => 'myemail@gmail.com',  
             'success_url' => route('success'),
             'cancel_url'  => route('cancel'), 
        ]);

        // Redirect the user to the checkout session URL
        return redirect()->away($checkoutSession->url);
    }

    public function success()
    {

        // return "Payment is successful!";
        return view('successpayment');
    }

    public function cancel()
    {
        return view('cancel');
    }
}
          
        //CUSTOMER CHECKOUT FORM AFTER SELECTING PAY WITH CARD 
                // <form action="/session" method="POST">
                // <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                // <input type="hidden" name="_token" value="{{csrf_token()}}">
                // <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Checkout button</button>
                // </form>