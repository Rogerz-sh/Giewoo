<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class UserAgent
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
        $url =  $request->url();
        echo $url;
        if (strpos($url, 'localhost') >= 0) {
            return $next($request);
        } else {
            return view('site.mobile');
        }
    }
}
