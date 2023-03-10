<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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
            'name' => ['required', 'string', 'max:255'],
            'dept' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'contact_no' => ['required', 'string', 'max:255'],
            'username' => ['string', 'max:255'],
            'role_id' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'dept' => $request->dept,
            'position' => $request->position,
            'contact_no' => $request->contact_no,
            'role_id' => $request->role_id,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($request->role_id == "dsc") {
            # we need to update the user table to set allreport, assignstaff, reviewreport to 1
            # so that the user can access the manage reports
            # this only applies to the DSC role
            User::where('username', $user->username)->update([
                'allreport' => 1,
                'assignstaff' => 1,
                'reviewreport' => 1,
            ]);
        }

        $user->attachRole($request->role_id);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
