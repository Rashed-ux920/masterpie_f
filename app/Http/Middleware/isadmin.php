<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd('middleware');
        
            return $next($request);
    }
}
