<?php

namespace App\Http\Controllers\Landlord;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;
use App\Models\Landlord;
use App\Models\Booking;
use App\Models\Assignment;



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

        return redirect()->back();
    }
    public function show()
    {
        $landlord = \Auth::guard('landlord')->user();
        $houses = $landlord->properties()->with('assignments.user')->get();

        return view('landlord.tenant', compact('landlord', 'houses'));
    }
}
