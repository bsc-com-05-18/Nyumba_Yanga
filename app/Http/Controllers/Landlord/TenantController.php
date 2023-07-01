<?php

namespace App\Http\Controllers\Landlord;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\MaintenanceReport;
use App\Models\Property;
use App\Models\User;
use App\Models\Landlord;
use App\Models\Booking;
use App\Models\Assignment;
use App\Models\Notification;


class TenantController extends Controller
{
   
    public function index()
    {
        $properties = Property::where('status','=','rent')->where('landlord_id', \Auth::guard('landlord')->user()->id)->paginate(5);
        $tenants = User::all();
        return view('landlord.addtenant', compact('properties', 'tenants'));
    }
    public function assign(Request $request)
    {

        $assignment = new Assignment();
        $assignment->property_id = $request->input('property_id');
        $assignment->user_id = $request->input('user_id');
        $assignment->save();

        return redirect()->back()->with('success', 'Property successfully assigned to tenant!');
    }
    public function show()
    {
        $properties = Property::where('status','=','rent')->where('landlord_id', \Auth::guard('landlord')->user()->id)->paginate(5);
        $tenants = User::all();

        $landlord = \Auth::guard('landlord')->user();
        $houses = $landlord->properties()->with('assignments.user')->get();

        return view('landlord.tenant', compact('landlord', 'houses', 'properties', 'tenants'));
    }
    public function notifications()
    {

        $user = \Auth::guard('landlord')->user();
        $landlordId = $user->id;

        $notifications = Notification::where('landlord_id', $landlordId)->orderBy('created_at', 'desc')->get();

        $unreadNotificationCount = Notification::where('landlord_id', $landlordId)->where('read', 0)->count();

        return view('landlord.notification', compact('notifications', 'unreadNotificationCount'));
    }
   
    public function notificationDetails(Notification $notification)
    {
        $user = \Auth::guard('landlord')->user();
        $landlordId = $user->id;

        $notification->update(['read' => 1]);
        $unreadNotificationCount = Notification::where('landlord_id', $landlordId)->where('read', 0)->count();

        $details = Notification::where('landlord_id', $landlordId);

        $maintenanceReport = MaintenanceReport::where('property_id', $notification->property->id)->first();

        return view('landlord.notificationDetails', compact('notification', 'unreadNotificationCount', 'maintenanceReport', 'details'));
    }
    
   
}
