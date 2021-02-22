<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'address' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255', // TODO: Dit moet eigenlijk format-required worden, liefst client- en serverside
            'city' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255', // TODO: Dit moet eigenlijk format-required worden, liefst client- en serverside
            'company_name' => 'string|max:255',
            'website' => 'string|max:255'

            // TODO: Land is nog niet toegevoegd want we willen eerst alleen Nederland.
        ]);

        Auth::login($user = User::create(
            [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'city' => $request->city,
            'phone_number' => $request->phone_number,
            'company_name' => $request->company_name,
            'website' => $request->website
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
