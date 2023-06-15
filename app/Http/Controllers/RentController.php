<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Booking;
use App\Models\Landlord;
use App\Notifications\BookingNotification;


use Illuminate\Http\Request;

class RentController extends Controller
{
 
    public function index()
    {
        $data = Property::where('status','=','rent')->get();
        return view('rent',compact('data'));
    }
    
    public function display($id)
    {
        $data = Property::where('id', $id)->first();
        return view('viewproperty', compact('data'));
    }
    public function book(Request $request, $id)
    {
        $property = Property::find($id);
        $booking = new Booking();
        $booking->property_id = $property->id;
        $booking->full_name = $request->input('full_name');
        $booking->email = $request->input('email');
        $booking->phone = $request->input('phone');
        $booking->occupation = $request->input('occupation');
        $booking->save();

        $landlord = Landlord::first();
        $landlord->notify(new BookingNotification($booking));
         
        return redirect()->back();
    }
    
   
}
