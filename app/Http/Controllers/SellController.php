<?php

namespace App\Http\Controllers;
use App\Models\Image;


use Illuminate\Http\Request;

class SellController extends Controller

{
 
    public function index()
    {
        $data = Image::all();
        return view('sell',compact('data'));
    }
}
