<?php

namespace App\Http\Controllers\Landlord;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\MaintenanceReport;
use App\Models\Property;
use App\Models\User;
use App\Models\PaymentNotification;
use App\Models\Landlord;
use App\Models\Booking;
use App\Models\Assignment;
use App\Models\Notification;
use App\Models\Payment;
use Carbon\Carbon;


class TenantController extends Controller
{
   
    public function assign(Request $request)
    {
        // Retrieve property and tenant ids from request
        $propertyId = $request->input('property_id');
        $userId     = $request->input('user_id');

        // Match property and tenant ids with database
        $property = Property::find($propertyId);
        $user = User::find($userId);

        // End current Tenant's stay
        $currentAssignment = $property->user;
        if ($currentAssignment) {
            $currentAssignment->end_date = Carbon::now()->toDateString();
            $currentAssignment->save();

            $property->quantity += 1;
            $property->save();
        }
        // Create new assignment
        if ($property->quantity > 0) {
            $assignment = new Assignment();
            $assignment->property_id = $propertyId;
            $assignment->user_id = $userId;
            $assignment->start_date = Carbon::now()->toDateString();
            $assignment->save();
    
            // Decreasing quantity
            $property->quantity -= 1;
            $property->save();
    
            return redirect()->back()->with('success', 'Property successfully assigned to tenant!');
         }
         else {

            return redirect()->back()->with('error', 'No available rooms in this property');
         }

    }
    public function unassignTenant($tenantId)
    {
        $assignment = Assignment::where('user_id', $tenantId)->whereNull('end_date')->first();

        if ($assignment) {
            $property = $assignment->property;
            
            $assignment->end_date = date('Y-m-d');
            $assignment->save();

            $property->quantity += 1;
            $property->save();

            return redirect()->back()->with('success', 'Tenant successfully unassigned!');
        }
        else {

           return redirect()->back()->with('error', 'Tenant is not currently assigned');
        }
    }
    public function show()
    {
        $landlord = \Auth::guard('landlord')->user();
        $landlordId = \Auth::guard('landlord')->user()->id;
        $allProperties = Property::where('status','=','rent')->where('landlord_id', $landlordId)->paginate(5);
        $assignedProperties = $landlord->properties()->whereHas('assignments', function ($query) {
            $query->whereNull('end_date');
        })->pluck('id');

        $properties = $allProperties->whereNotIn('id', $assignedProperties);
        $currentTenant = Assignment::whereNull('end_date')->pluck('user_id')->toArray();
        $tenants = User::has('bookings')->whereNotIn('id', $currentTenant)->pluck('email', 'id');
        $hasAvailableProperties = $properties->isNotEmpty();

        $landlord = \Auth::guard('landlord')->user();
        $houses = $landlord->properties()->with('user')->get();

        return view('landlord.tenant', compact('landlord', 'houses', 'properties', 'tenants', 'hasAvailableProperties'));
    }
    public function history()
    {
        $landlord = \Auth::guard('landlord')->user();
        $assignmentHistory = $landlord->properties()->with('assignmentHistory.user')->get()->pluck('assignmentHistory')->flatten();

        return view('landlord.tenantHistory', compact('assignmentHistory'));
    }
    public function notifications()
    {

        $user = \Auth::guard('landlord')->user();
        $landlordId = $user->id;

        $notifications = Notification::where('landlord_id', $landlordId)->orderBy('created_at', 'desc')->paginate(8);

        $unreadNotificationCount = Notification::where('landlord_id', $landlordId)->where('read', 0)->count();

        return view('landlord.notification', compact('user', 'notifications', 'unreadNotificationCount'));
    }
   
    public function notificationDetails(Notification $notification)
    {
        $user = \Auth::guard('landlord')->user();
        $landlordId = $user->id;

        $notification->update(['read' => true]);
        $unreadNotificationCount = Notification::where('landlord_id', $landlordId)->where('read', 0)->count();

        $details = Notification::where('landlord_id', $landlordId);

        $maintenanceReport = $notification->maintenance;

        return view('landlord.notificationDetails', compact('notification', 'unreadNotificationCount', 'maintenanceReport', 'details'));
    }
    public function checkPayment() 
    {
        $user = \Auth::guard('landlord')->user();
        $landlordId = $user->id;
        $payments = Payment::where('landlord_id', $landlordId)->paginate(8);

        return view('landlord.rent', compact('payments'));

    }
    public function paymentNotifications()
    {

        $user = \Auth::guard('landlord')->user();
        $landlordId = $user->id;

        $notifications = PaymentNotification::where('landlord_id', $landlordId)->orderBy('created_at', 'desc')->paginate(8);

        $unreadNotificationCount = PaymentNotification::where('landlord_id', $landlordId)->where('read', 0)->count();

        return view('landlord.payment-notification', compact('user', 'notifications', 'unreadNotificationCount'));
    }
    public function paymentNotificationDetails(PaymentNotification $notification)
    {
        $user = \Auth::guard('landlord')->user();
        $landlordId = $user->id;

        $notification->update(['read' => true]);
        $unreadNotificationCount = PaymentNotification::where('landlord_id', $landlordId)->where('read', 0)->count();

        $details = PaymentNotification::where('landlord_id', $landlordId);

        $paymentReport = $notification->payment;

        return view('landlord.paymentNotificationDetails', compact('notification', 'unreadNotificationCount', 'paymentReport', 'details'));
    }
   
}
