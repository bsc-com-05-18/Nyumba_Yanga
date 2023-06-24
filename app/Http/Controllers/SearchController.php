<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class SearchController extends Controller
{
   public function welcomeSearch(Request $request)
   {
    $type = $request->input('type');
    $status = $request->input('status');
    $location = $request->input('location');

    $query = Property::query();

    if ($type) {
        $query->where('type', $type);
    }
    if ($status) {
        $query->where('status', $status);
    }
    if ($location) {
        $query->where('location', 'LIKE', "%$location%");
    }

    $properties = $query->get();

    return view('search', compact('properties'));

   }
   public function rentSearch(Request $request)
   {
    $location = $request->input('location');

   $properties = Property::query()
        ->where('location', 'LIKE', "%$location%")
        ->get();

    return view('rent-search', compact('properties'));

   }
   public function saleSearch(Request $request)
   {
    $location = $request->input('location');

    $properties = Property::query()
        ->where('location', 'LIKE', "%$location%")
        ->get();

    return view('sale-search', compact('properties'));

   }
}
