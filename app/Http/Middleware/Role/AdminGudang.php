<?php

namespace App\Http\Middleware\Role;

use Closure;

class AdminGudang
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
        if(\Auth::user()->level == "AdminGudang" || \Auth::user()->level == "AdminUtama"){ 
            return $next($request);
        }
        else{
            abort(404);
        }
    }
}
