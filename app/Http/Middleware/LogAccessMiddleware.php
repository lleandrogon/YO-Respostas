<?php

namespace App\Http\Middleware;

use App\Models\LogAccess;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        $route = $request->getRequestUri();

        LogAccess::create([
            'log' => "IP $ip requisitou a rota $route"
        ]);

        return $next($request);
    }
}
