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
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard=null)
    {
        if(!Auth::guard($guard)->check()){
            return $next($request);
        }
        switch ($guard) {
            case 'dashboard':
                return redirect(route('dashboard'));
                break;
            case 'provide':
                return redirect(route('provider.location.index'));
             break;
            default:
                return redirect(RouteServiceProvider::HOME);
                
            break;
        }
    }
}
