<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IsLogin
{

    public function handle(Request $request, Closure $next)
    {
        // dd(Auth::user());
        if (\Auth::user()) {
            return $next($request);
        }

        // return back()->with('error', 'kamu belum login');
        dd("belum login");
    }
}
