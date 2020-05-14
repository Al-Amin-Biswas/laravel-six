<?php

namespace App\Http\Middleware;

use Closure;

class brinta
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
        if ($request->name=='brinta'){
            return redirect('israt');
            //echo "love you so much";
        }
        return $next($request);
    }
}
