<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is logged in AND has admin privileges
        if (auth()->check() && auth()->user()->is_admin) {
            return $next($request);
        }

        // If not an admin, kick them out with a 403 Access Denied error
        return redirect()->route('home')->with('error', 'Access denied. Admins only.');
    }
}
