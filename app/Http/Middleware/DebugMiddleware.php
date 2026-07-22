<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DebugMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        try {
            return $next($request);
        } catch (\Exception $e) {
            \Log::error('Middleware Error: ' . $e->getMessage());
            throw $e;
        }
    }
}