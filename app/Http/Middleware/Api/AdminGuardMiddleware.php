<?php

namespace App\Http\Middleware\Api;

use Closure;

class AdminGuardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @return mixed
     * @throws \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException
     *
     */
    public function handle($request, Closure $next)
    {
        config(['auth.defaults.guard' => 'admin']);
        return $next($request);
    }
}
