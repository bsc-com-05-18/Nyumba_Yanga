<?php

namespace App\Http\Controllers\Landlord;
use App\Http\Controllers\Controller;

use App\Models\Property;
use App\Models\Booking;
use App\Models\Landlord;


use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function display()
    {
        $properties = Property::where('user_id', \Auth::guard('landlord')->user()->id)->first();
        $bookings = Booking::where('property_id', $properties->id);
        return view('landlord.notification', compact('bookings'));
    }
}
