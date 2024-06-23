<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$level)
    {
        $user = Auth::user();

        if ($user) {
            // Konversi level ke role
            if ($user->level == 1 && !$user->hasRole('admin')) {
                $user->assignRole('admin');
            } elseif ($user->level == 2 && !$user->hasRole('user')) {
                $user->assignRole('user');
            }

            // Periksa apakah user memiliki salah satu role yang diizinkan
            foreach ($level as $level) {
                $role = $level == 1 ? 'admin' : 'user';
                if ($user->hasRole($role)) {
                    return $next($request);
                }
            }
        }

        return redirect()->route('dashboard');
    }
}
