<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
public function handle($request, Closure $next)
{
    if (!Auth::check()) {
        return redirect()->route('website.login.form'); 
    }

    if (Auth::user()->role === 'admin') {
        return redirect()->route('admin.index'); 
    }

    return $next($request);
}

}
