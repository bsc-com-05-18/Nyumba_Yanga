<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;
use App\Models\Landlord;
use App\Models\Booking;
use App\Models\Assignment;
use App\Models\Rating;


class RatingController extends Controller
{
    public function rate(Request $request, $propertyId, $userId)
    {

        $reviews = new Rating();
        $reviews->property_id = $propertyId;
        $reviews->user_id = $userId;
        $reviews->rating = $request->rating;
        $reviews->comment = $request->comment;
        $reviews->save();

        return redirect()->back();
    }
}
