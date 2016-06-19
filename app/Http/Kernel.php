<?php

namespace Castelo\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Castelo\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \Castelo\Http\Middleware\VerifyCsrfToken::class,
        \Castelo\Http\Middleware\RedirectToSSL::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth'                => \Castelo\Http\Middleware\Authenticate::class,
        'auth.basic'          => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest'               => \Castelo\Http\Middleware\RedirectIfAuthenticated::class,
        'needsPermission'     => \Artesaos\Defender\Middlewares\NeedsPermissionMiddleware::class,
        'needsRole'           => \Artesaos\Defender\Middlewares\NeedsRoleMiddleware::class,
    ];
}
