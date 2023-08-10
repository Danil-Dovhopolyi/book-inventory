<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle($request, Closure $next, $role)
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return redirect('login'); // Redirect to login if not authenticated
        }

        // Check if the user has the required role
        if (auth()->user()->hasRole($role)) {
            return $next($request); // User has the required role, proceed
        }

        return redirect('home')->with('error', 'Unauthorized'); // User doesn't have the required role
    }

}
