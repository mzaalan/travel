<?php

namespace App\Http\Middleware;

use Closure;

class VerifyStatus
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
        if(auth()->check())
        {
            if(!auth()->user()->status)
            {
                auth()->logout();
                $request->session()->flash("failed", "Your account is inactive or has been disabled, Please contact <a href='route('complaint')'>support</a> to fix this problem");
                return redirect('/login');
            } 
            
        }
        return $next($request);
        
    }
}
