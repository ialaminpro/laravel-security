<?php


namespace Acolyte\LaravelSecurity\Middleware;


use Closure;

class CrossDomainMiddleware
{

    /*
    |--------------------------------------------------------------------------
    | X-Permitted-Cross-Domain-Policies
    |--------------------------------------------------------------------------
    |
    | Adobe Flash and Adobe Acrobat can load content from your domain even from
    | other sites (in other words, cross-domain). This could cause unexpected data
    | disclosure in rare cases or extra bandwidth usage.
    |
    */

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {

        $response = $next($request);

        // If you don’t want them to load data from your domain, set the header’s value to none
        $response->headers->set('X-Permitted-Cross-Domain-Policies' , 'none');

        return $response;

    }

}