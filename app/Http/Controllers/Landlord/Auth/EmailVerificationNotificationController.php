<?php

namespace App\Http\Controllers\Landlord\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->landlord()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::LANDLORD_HOME);
        }

        $request->landlord()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
