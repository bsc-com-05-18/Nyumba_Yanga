<?php

namespace App\Http\Controllers;
use App\Models\Property;


use Illuminate\Http\Request;

class SellController extends Controller

{
 
    public function index()
    {
        $data = Property::where('status','=','sale')->get();
        return view('sell',compact('data'));
    }
    public function display($id)
    {
        $data = Property::where('id', $id)->first();
        return view('buyproperty', compact('data'));
    }
}
