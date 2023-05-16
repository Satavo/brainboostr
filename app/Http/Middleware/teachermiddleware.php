<?php

namespace App\Http\Middleware;

use Closure;

class teachermiddleware
{
    public function handle($request, Closure $next)
    {
        if(auth()->user()->role == 'student'){
            abort(403, 'Access denied');
        }
        return $next($request);
    }
}