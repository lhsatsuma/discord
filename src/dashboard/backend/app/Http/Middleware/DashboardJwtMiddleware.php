<?php

namespace App\Http\Middleware;

use App\Services\DashboardJwt;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DashboardJwtMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $jwt = app(DashboardJwt::class);
        $token = $request->bearerToken();
        $session = $token ? $jwt->resolve($token) : null;
        if (! $session) {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }

        $request->attributes->set('dashboard.session', $session);
        $request->attributes->set('dashboard.token', $token);
        return $next($request);
    }
}
