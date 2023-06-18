<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {

        if (!Auth::check()) {
            // If the user is not authenticated, redirect them to the login page
            return redirect('/login');
        }

        // Check if the user has the required role
        if (Auth::user()->role !== $role) {
            abort(403, 'tidak diizinkan mengakses halaman ini!');
        }
        return $next($request);
    }
}
