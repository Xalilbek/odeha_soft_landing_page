<?php

namespace App\Http\Middleware;

use App\Helper\Standard;
use Closure;

class Lang
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
        app()->setLocale(Standard::locale());
        return $next($request);
    }
}
