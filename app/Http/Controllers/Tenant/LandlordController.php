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
        $houses = $tenant->assignments()->with('property.landlord')->get();

        return view('landlord', compact('tenant','houses'));
    }
}
