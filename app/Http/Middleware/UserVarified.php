<?php

namespace App\Http\Middleware;

use Closure;

class UserVarified
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
        if(session('user')->verified_at){
            return $next($request);
        }
        return redirect('verify');
    }
}
