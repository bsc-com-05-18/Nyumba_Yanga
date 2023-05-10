<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class RentController extends Controller
{
 
    public function index()
    {
        return view('rent');
    }
}
