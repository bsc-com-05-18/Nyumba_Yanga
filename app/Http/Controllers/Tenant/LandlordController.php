<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;
use App\Models\Landlord;
use App\Models\Booking;
use App\Models\Assignment;

class LandlordController extends Controller
{
    public function show()
    {
        $tenant = \Auth::guard('web')->user();
        $houses = $tenant->assignments()->with('property.landlord')->first();

        return view('landlord', compact('tenant','houses'));
    }

    public function tenantStatus()
    {
        $tenantEmail = \Auth::guard('web')->user()->email;

        $bookings = Booking::where('email', $tenantEmail)->get();

        return view('house-requests', compact('bookings'));

    }
}
