<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use App\Http\Requests\SignInRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    public function signup(SignUpRequest $request)
    {
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user); 

        return redirect()->route('website.index')->with('success', 'Account created successfully!');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(SignInRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('website.index')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('website.login')->with('success', 'Logged out successfully!');
    }
}
