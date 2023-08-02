<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //register form

    public function register()
    {
        return view('auth.register');
    }

    //login form

    public function login()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //Hash password

        $formFields['password'] = bcrypt($formFields['password']);

        //create users

        $user = User::create($formFields);

        //login

        auth()->login($user);

        return redirect('/users/')->with('message', 'Account created successfully!');
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            if (auth()->user()->role == 'admin') {
                $request->session()->regenerate();
                return redirect()->route('admindash');
            } else if (auth()->user()->role == 'user') {
                $request->session()->regenerate();
                return redirect()->route('dash');
            } else {
                $request->session()->regenerate();
                return redirect()->route('supervisorhome');
            }
        } else {
            return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/auth/login');
    }
}
