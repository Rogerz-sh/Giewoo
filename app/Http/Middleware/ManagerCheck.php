<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class ManagerCheck
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
//        echo Session::get('name');
        if (Session::get('name') && Session::get('power') == 'manager') {
            return $next($request);

        } else {
            return redirect()->guest('system/login');
        }
    }
}
