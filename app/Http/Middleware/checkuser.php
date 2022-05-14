<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkuser
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

        if($request->age > 25){

           echo e('the age is more than 25');
        }else{
            return $next($request);
        }

    }
}
