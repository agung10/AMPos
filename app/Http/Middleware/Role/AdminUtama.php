<?php

namespace App\Http\Middleware\Role;

use Closure;

class AdminUtama
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
        if(\Auth::user()->level != "AdminUtama"){
            abort(404);
        }
        else{
            return $next($request);
        }
    }
}
