<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userId = $request->route('id');

        // Check if the user is authenticated
        if (Auth::check()) {
            $authenticatedUserId = Auth::user()->id;

            // Check if the authenticated user's ID matches the requested user's ID
            if ($authenticatedUserId == $userId) {
                return $next($request);
            }
        }

        return redirect()->back()->with('danger', 'دسترسی غیر مجاز');
    }
}
