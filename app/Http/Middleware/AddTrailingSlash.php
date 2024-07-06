<?php

namespace App\Http\Middleware;

use Closure;

class AddTrailingSlash
{
    public function handle($request, Closure $next)
    {
        $url = $request->getRequestUri();

        if (substr($url, -1) !== '/') {
            return redirect($url.'/');
        }

        return $next($request);
    }
}