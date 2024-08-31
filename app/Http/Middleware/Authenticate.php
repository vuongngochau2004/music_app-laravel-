<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    // protected function redirectTo(Request $request)
    // {
    //     if(Auth::check() && Auth::user()->role == 1){
    //                 return view('/');
    //             }
    //             return redirect()->route('login');
            
    // }
    protected function redirectTo($request)
    {
        
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
    // public function handle(Request $request, Closure $next): Response
    // {
    //     if(Auth::check() && Auth::user()->role == 0){
    //         return $next($request);
    //     }
    //     return redirect()->route('login');
    // }
    
}

