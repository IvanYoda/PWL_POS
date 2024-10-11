<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorizeUser
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, $role = ''): Response
    {
        // Retrieve the authenticated user
        $user = $request->user();

        // Check if the user has the required role
        if ($user && $user->hasRole($role)) {
            return $next($request);
        }

        // If user doesn't have the role, return 403 error
        abort(403, 'Forbidden. Kamu tidak punya akses ke halaman ini.');
    }
}
