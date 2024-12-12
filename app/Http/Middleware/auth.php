<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('user_id')) {
            // Instead of redirecting, return a response with a message
            return back()->withErrors(['auth' => 'You must login to create a recipe.']);
        }
        return $next($request);
    }
}