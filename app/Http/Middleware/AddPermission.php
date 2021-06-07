<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
class AddPermission
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
         if(Auth::user()->hasAnyRoles(['admin','employee','director'])){
            return $next($request);
        }
       return redirect('/dashboard');
    }
}
