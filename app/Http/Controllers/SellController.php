<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Rating;
use App\Models\Booking;
use App\Models\Landlord;
use App\Notifications\BookingNotification;


use Illuminate\Http\Request;

class SellController extends Controller

{
 
    public function index()
    {
        $data = Property::where('status','=','sale')->get();
        return view('sell',compact('data'));
    }
    public function display($id)
    {
        $data = Property::where('id', $id)->first();
        return view('buyproperty', compact('data'));
    }

    public function tenancyRequest(Request $request)
    {

        $booking = new Booking();
        $booking->property_id = $request->input('property_id');
        $booking->full_name = $request->input('full_name');
        $booking->email = $request->input('email');
        $booking->phone = $request->input('phone');
        $booking->occupation = $request->input('occupation');
        $booking->save();

        $this->sendEmail($request);
         
        return redirect()->back();
    }
    private function sendEmail(Request $request)
    {
        $subject = 'Tenancy Request';
        $message = 'New tenancy request submitted';
        $message .= "\n\nPropertyId: " . $request->input('property_id');
        $message .= "\nName: " . $request->input('full_name');
        $message .= "\nEmail:" . $request->input('email');
        $message .= "\nPhone:" . $request->input('phone');
        $message.= "\nOccupation:" . $request->input('occupation');

        $mailto = 'receiver@example.com';
        $cc = 'cc@example.com';
        $bcc = 'bcc@example.com';
        $headers = "From: sender@example.com\r\n";
        $headers .= "CC: $cc\r\n";
        $headers .= "BCC: $bcc\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

        $mailtoLink = "mailto:$mailto?subject=" . rawurlencode($subject) . "&body=" . rawurlencode($message);
        $mailtoLink .= "&cc=" . rawurlencode($cc);
        $mailtoLink .= "&bcc=" . rawurlencode($bcc);

        return redirect($mailtoLink);

    }

}
