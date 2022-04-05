<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;


class AdminAuthenticated​
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if( Auth::check() )
        {
            // if user is not admin take him to his dashboard
            if ( Auth::user() ) {
                 return redirect(route('user_dashboard'));
            }
            // allow admin to proceed with request
            else if ( Auth::user() ) {
                 return $next($request);
            }
        }
        abort(404);  // for other user throw 404 error
    }
}
