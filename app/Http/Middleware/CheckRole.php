<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if ($request->user() && $request->user()->hasRole($role)) {
            return $next($request);
        }
        return redirect()->route('home')->with('error', 'Access denied');
    }
}
