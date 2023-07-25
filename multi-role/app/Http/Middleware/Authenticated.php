<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticated
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
        if(auth()->user()->role_id == 1){
            return $next($request);
        } else if(auth()->user()->role_id == 0){
            return $next($request);
        }
        return redirect('home')->with('error', "You have no proper authentication to access the area!");
            
    }
}
