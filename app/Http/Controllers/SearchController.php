<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Rating;

class SearchController extends Controller
{
   public function welcomeSearch(Request $request)
   {
    $type = $request->input('type');
    $status = $request->input('status');
    $location = $request->input('location');
    $minPrice = $request->input('min_price');
    $maxPrice = $request->input('max_price');


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

    if ($minPrice) {
        $query->where('price', '>=', $minPrice);
    }
    if ($maxPrice) {
        $query->where('price', '<=', $maxPrice);
    }

    $properties = $query->get();
    foreach ($properties as $info) {
        $averageRating = Rating::where('property_id', $info->id)->avg('rating');
        $info->averageRating = number_format($averageRating, 2);
        $info->numComments = Rating::where('property_id', $info->id)->count('comment');
    }


    return view('search', compact('properties'));

   }
   public function rentSearch(Request $request)
   {
    $location = $request->input('location');

   $properties = Property::query()
        ->where('location', 'LIKE', "%$location%")
        ->get();

        foreach ($properties as $info) {
            $averageRating = Rating::where('property_id', $info->id)->avg('rating');
            $info->averageRating = number_format($averageRating, 2);
            $info->numComments = Rating::where('property_id', $info->id)->count('comment');
        }

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
