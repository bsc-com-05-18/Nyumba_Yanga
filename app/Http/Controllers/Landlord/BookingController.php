<?php

namespace App\Http\Controllers\Landlord;
use App\Http\Controllers\Controller;

use App\Models\Property;
use App\Models\Booking;
use App\Models\Landlord;
use App\Models\BookNotifications;



use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function display()
    {
        $user = \Auth::guard('landlord')->user()->id;
        $properties = Property::where('landlord_id', $user)->get();

        return view('landlord.booking', compact('properties'));
    }

    public function notifications()
    {

        $user = \Auth::guard('landlord')->user();
        $landlordId = $user->id;

        $notifications = BookNotifications::where('landlord_id', $landlordId)->orderBy('created_at', 'desc')->paginate(8);

        $unreadNotificationCount = BookNotifications::where('landlord_id', $landlordId)->where('read', 0)->count();

        return view('landlord.bookingList', compact('user', 'notifications', 'unreadNotificationCount'));
    }

    public function notificationDetails(BookNotifications $notification)
    {
        $user = \Auth::guard('landlord')->user();
        $landlordId = $user->id;

        $notification->update(['read' => true]);
        $unreadNotificationCount = BookNotifications::where('landlord_id', $landlordId)->where('read', 0)->count();


        return view('landlord.bookingDetails', compact('notification', 'unreadNotificationCount'));
    }
}
