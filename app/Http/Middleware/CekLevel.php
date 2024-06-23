<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekLevel
{
    public function handle(Request $request, Closure $next, ...$level)
    {
        if (auth()->user() && in_array(auth()->user()->level, $level)) {
            return $next($request);
        }

        return redirect()->route('dashboard');
    }
}
