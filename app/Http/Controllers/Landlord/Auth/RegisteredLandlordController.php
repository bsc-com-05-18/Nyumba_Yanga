<?php

namespace App\Http\Controllers\Landlord\Auth;

use App\Http\Controllers\Controller;
use App\Models\Landlord;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredLandlordController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('landlord.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:landlords'],
            'phone' => ['required', 'string', 'max:14'],
            'acc_number' => ['required', 'string', 'max:25'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $landlord = Landlord::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'acc_number' => $request->acc_number,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($landlord));

        Auth::login($landlord);

        return redirect(RouteServiceProvider::LANDLORD_HOME);
    }
}
