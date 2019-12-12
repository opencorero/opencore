<?php

namespace AwebCore\App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    /* Read more here: 
    * https://stackoverflow.com/questions/52964350/preprocess-lumen-route-parameters-with-urldecode/52965660 
    * https://www.xszz.org/faq-1/question-2018090534706.html
    * handleFoundRoute -> lumen-5.5.0\vendor\laravel\lumen-framework\src\Concerns\RoutesRequests.php
    * https://laravel-news.com/using-named-routes-lumen-test
    */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
