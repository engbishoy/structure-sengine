<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard=null)
    {
        if(Auth::guard($guard)->check()){
            return $next($request);
        }
        switch ($guard) {
            case 'dashboard':
                return redirect(route('user.login.show'));
                break;

            case 'provide':
                return redirect(route('provider.login.show'));
                break;
            default:
                return redirect(RouteServiceProvider::HOME);
                break;
        }
    }
}
