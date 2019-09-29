<?php

namespace App\Http\Middleware;

use Closure;

class checkEmail
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
        if (\Auth::user()->email != "admin@rental.com") {
            abort(401, 'This action is unauthorized.');
        }
        return $next($request);
    }
}
