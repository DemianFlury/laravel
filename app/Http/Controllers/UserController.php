<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function createUser()
    {
        $request = request()->validate([
            'name' => 'required|min:3',
            'email' => 'unique:User,email|email',
            'password' => 'required|min:8'
        ]);

        $request['password'] = bcrypt($request['password']);

        $user = \App\Models\User::create($request);
        auth()->login($user);

        return redirect('/')->with('registration_success', "You've been registered" );
    }

    public function login()
    {
        $request = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($request)) {
            request()->session()->regenerate();

            return redirect()->intended('/')->with('login_success', "You've been logged in" );
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/')->with('logout_success', "Goodbye" );
    }
}
