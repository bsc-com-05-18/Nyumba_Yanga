<?php

namespace App\Http\Controllers\Landlord\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Landlord\Auth;
use Illuminate\Validation\ValidationException;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('landlord.auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function store(Request $request)
    {
        if (! Auth::guard('landlord')->validate([
            'email' => $request->landlord()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('landlord.auth.password'),
            ]);
        }

        $request->session()->put('landlord.auth.password_confirmed_at', time());

        return redirect()->intended(RouteServiceProvider::LANDLORD_HOME);
    }
}
