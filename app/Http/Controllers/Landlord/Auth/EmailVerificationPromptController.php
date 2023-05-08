<?php

namespace App\Http\Controllers\Landlord\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        return $request->landlord()->hasVerifiedEmail()
                    ? redirect()->intended(RouteServiceProvider::LANDLORD_HOME)
                    : view('landlord.auth.verify-email');
    }
}
