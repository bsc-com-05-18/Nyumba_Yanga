<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;


class LandingPage extends Controller
{
    public function option(){

        return view('option');

    }

    public function rent()
    {
        return view('rent');
    }

    public function sell()
    {
        $data = Property::all();
        return view('sell',compact('data'));
    }
    public function details()
    {
        $data = Property::all();
        return view('property-review',compact('data'));
    }

    public function contacts(){

        return view('contacts');

    }
}
