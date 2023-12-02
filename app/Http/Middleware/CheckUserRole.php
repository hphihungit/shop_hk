<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userRole = Auth::user()->role;

        if (in_array($userRole, $roles)) {
            return $next($request);
        }

        if ($userRole === '1') {
            return redirect()->route('admin');
        } elseif ($userRole === '2') {
            return redirect()->route('home');
        }

        // Custom redirect or action for other cases if needed

        return redirect()->route('login');
    }
}
