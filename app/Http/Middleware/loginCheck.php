<?php

namespace App\Http\Middleware;
use Session;
use Closure;

use Illuminate\Http\Request;

class loginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $path = $request->path();
        if(($path =="profile") && (!session()->has('LoggedUser'))){
           return redirect('login');
            
        }
        
        return $next($request);
    }
}
