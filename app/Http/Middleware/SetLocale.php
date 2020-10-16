<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $locale = 'en'; // set en as the fallback locale
        if ($request->is('/ru/*')) { // if the route starts with /ru/* set locale to ES
            $locale = 'ru';
        } else if ($request->is('/ro/*')) { // if the route starts with /ro/* set locale to FR
            $locale = 'ro';
        }

        //return $next($request);
    }
}
