<?php

namespace Castelo\Http\Middleware;

use Closure;

class RedirectToSSL
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->isSecure() && app()->env != 'local') {
            return redirect()->secure($request->path());
        }

        return $next($request);
    }
}
