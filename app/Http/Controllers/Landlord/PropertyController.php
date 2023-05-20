<?php

namespace App\Http\Controllers\Landlord;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Image;

class PropertyController extends Controller
{

    public function index()
    {
        $data = Image::all();
        return view('landlord.myproperties', compact('data'));
    }



}
