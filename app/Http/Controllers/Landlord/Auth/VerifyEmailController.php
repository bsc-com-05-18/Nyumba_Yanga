<?php

namespace App\Http\Controllers\Landlord\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(EmailVerificationRequest $request)
    {
        if ($request->landlord()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::LANDLORD_HOME.'?verified=1');
        }

        if ($request->landlord()->markEmailAsVerified()) {
            event(new Verified($request->landlord()));
        }

        return redirect()->intended(RouteServiceProvider::LANDLORD_HOME.'?verified=1');
    }
}
