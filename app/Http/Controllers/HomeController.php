<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // Tenant Dashboard
    public function index()
    {
        return view('tenant.home');
    }

    // Landlord Dashboard
    public function landlordHome()
    {
        return view('landlord.home');
    }
}
