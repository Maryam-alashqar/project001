<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (auth('web')->check()) {
            return redirect(RouteServiceProvider::HOME);
        }
        if (auth('author')->check()) {
            return redirect(RouteServiceProvider::AUTHORDASHBOARD);
        }
        if (auth('visitor')->check()) {
            return redirect(RouteServiceProvider::VISITOR);
        }
        return $next($request);
    }
}
