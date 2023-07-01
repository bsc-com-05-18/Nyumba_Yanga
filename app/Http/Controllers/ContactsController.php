<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class ContactsController extends Controller
{
    public function index()
    {
        $properties = Property::inRandomOrder()->take(4)->get();
        return view('contacts', compact('properties'));
    }
}
