<?php

namespace App\Http\Middleware;

use App\Service\WebsiteTrafficService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RegisterWebsiteTraffic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        (new WebsiteTrafficService())->trackVisitor($request, "cfs");
        return $next($request);
    }
}
