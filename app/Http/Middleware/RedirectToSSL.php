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
		$request->setTrustedProxies([$request->getClientIp()]);
		
        if (!$request->isSecure() && app()->env == 'production') {
            return redirect()->secure($request->path());
        }

        return $next($request);
    }
}
