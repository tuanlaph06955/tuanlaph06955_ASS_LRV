<?php

namespace App\Http\Middleware;

use Closure;

class NotAuthMiddleware
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
        if (\Auth::check() === true) {
            return redirect()->route('home.hello_world');
        }
        return $next($request);
    }
}
