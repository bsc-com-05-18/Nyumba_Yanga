<?php

namespace App\Http\Controllers\Landlord;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Landlord;
use App\Models\User;
use App\Models\Assignments;
use App\Models\Booking;


class HomeController extends Controller
{
    public function index()
    {
        $landlordId = \Auth::guard('landlord')->user()->id;
        $numProperties = Property::where('landlord_id', $landlordId)->count('id');

        $landlord = \Auth::guard('landlord')->user();

            // $tenantCount = $landlord->tenants()->with('assignments.properties')->count('id');
        return view('landlord.home', compact('numProperties'));
    }

    public function profile()
    {
        return view('landlord.profile');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = \Auth::guard('landlord')->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The provided current password does not match with actual password']);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->back()->with('success', 'Your password has been changed');
    }
}
