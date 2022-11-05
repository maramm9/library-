<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AminMiddleware
{
   
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role_as == '1'){
           return  redirect('/home')->with('status','access denide as you are not admin');
        }
        return $next($request);
    }
}
