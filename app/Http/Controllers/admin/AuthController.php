<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(SignInRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt(array_merge($credentials, ['role' => 'admin']))) {
            return redirect()->route('admin.dashboard')->with('success', 'Welcome Admin!');
        }

        return back()->withErrors(['email' => 'Invalid admin credentials'])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login.form')->with('success', 'Logged out successfully!');
    }
}
