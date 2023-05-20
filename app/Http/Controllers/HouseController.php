<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\House;

class HouseController extends Controller
{
    public function index()
    {
        $houses = House::all();
        return view('houses.index', compact('houses'));
    }
}

