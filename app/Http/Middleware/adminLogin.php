<?php

namespace App\Http\Middleware;
// use App\Http\Middleware\Auth;
use Closure;
use Auth;

class adminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        if((Auth::check() && Auth::user()->role_id<3))
            return $next($request);
        else 
            return redirect()->route('adminlogin');   
    }
}

