<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Rating;
use App\Models\Booking;
use App\Models\Landlord;
use App\Notifications\BookingNotification;


use Illuminate\Http\Request;

class RentController extends Controller
{
 
    public function index()
    {
        $data = Property::where('status','=','rent')->get();

        foreach ($data as $info) {
            $averageRating = Rating::where('property_id', $info->id)->avg('rating');
            $info->averageRating = number_format($averageRating, 2);
            $info->numComments = Rating::where('property_id', $info->id)->count('comment');
        }

        return view('rent',compact('data'));
    }
    
    public function display($id)
    {

        $data = Property::with(['reviews.user'])->where('id', $id)->first();
        $averageRating = $data->reviews->avg('rating');
        return view('viewproperty', compact('data', 'averageRating'));
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
         
        return redirect()->back()->with('success', 'Tenancy request submitted succefully!');
    }
    
   
}
