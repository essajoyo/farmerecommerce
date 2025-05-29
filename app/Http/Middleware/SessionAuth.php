<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionAuth
{
    public function handle(Request $request, Closure $next)
    {
    // dd("SessionAuth");
        if (!Auth::check()) {
            //dd("SessionAuth abc");
            return redirect()->route('login');
        }

        if (!Auth::user()->roles->contains(function ($role) {
            //dd(" abc");
             return ($role->role_name) === 'admin';
        })) {
            //dd("f abc");
    return redirect('/login')->with('fail', 'Access denied. Admins only.');
}

        
        return $next($request);
    }
}
