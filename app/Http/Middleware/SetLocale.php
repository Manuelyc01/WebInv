<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
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
        if (session()->has('locale') AND array_key_exists(session('locale'), config('app.locales'))) 
        {
           app()->setLocale(session('locale'));
           $segments = $request->segments();
        } else {
            app()->setLocale(config('app.fallback_locale'));
        }

        return $next($request);
    }
}