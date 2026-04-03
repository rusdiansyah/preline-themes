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
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // return $next($request);
        if (in_array(Auth::user()->level->name, $roles)) {
            return $next($request);
        }
        Auth::logout();
        return redirect('/');
        // return redirect('/errorPage');
    }
}
