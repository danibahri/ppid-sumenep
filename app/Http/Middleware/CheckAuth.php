<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check() && ($request->role == 'admin' || $request->role == 'admin')) {
            return redirect()->route('home'); 
        }
        return $next($request);
    }
}
