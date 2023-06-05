<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('sell');

        // $data = Image::all();
        // return view('sell',compact('data'));
    }

    public function contacts(){

        return view('contacts');

    }
}
