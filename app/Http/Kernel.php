<?php

namespace DojoDelivery\Http;

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
        \DojoDelivery\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \DojoDelivery\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \DojoDelivery\Http\Middleware\Authenticate::class,
        'auth.basic' =>\DojoDelivery\Http\AuthenticateWithBasicAuth::class,
        'guest' => \DojoDelivery\Http\Middleware\RedirectIfAuthenticated::class,
        'auth.checkrole'=>\DojoDelivery\Http\Middleware\CheckRole::class,
    ];
}
