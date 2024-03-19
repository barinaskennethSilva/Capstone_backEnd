<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    $user = Auth::user();
    
    // Define the roles
    $adminRole = 'Admin';
    $userRole = 'User';

    // Log the user's role
    \Log::info('Usertype: ' . $user->Usertype);

     if ($user) {
        // Check if the user's role matches the admin role
        if ($user->Usertype === $adminRole) {
            // User has admin role, proceed with the request
            return $next($request);
        }
        // Check if the user's role matches the user role
        elseif ($user->Usertype === $userRole) {
            // User has user role, proceed with the request
            return $next($request);
        }
    }

    // If user doesn't have the required role, redirect them to login page with error message
    return redirect()->route('login')->with('error', 'You are not authorized to access this page.');




     }
}
