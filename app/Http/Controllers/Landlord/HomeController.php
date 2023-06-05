<?php

namespace App\Http\Controllers\Landlord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $role=Auth()->user()->role;

            if($role=='tenant'){
                return view('tenant.home');
            }
            else if($role=='landlord'){
                return view('landlord.home');
            }
            else{
                return redirect()->back();
            }
        }
    }
    public function post()
    {
        return view('landlord.tenant');
    }
}
