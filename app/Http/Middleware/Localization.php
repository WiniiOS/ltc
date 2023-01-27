<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Http\Request;

class Localization
{
    
    // public function handle(Request $request, Closure $next)
    // {

    //     if ($request->has('locale')) {
    //         session()->put('locale',$request->locale);
    //     }

    //     App::setlocale(session()->get('locale'));
    //     return $next($request);

    // }

    /**
     * Handle an incoming request.
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
        return $next($request);
    }

}
